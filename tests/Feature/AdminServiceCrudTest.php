<?php

namespace Tests\Feature;

use App\Models\Service;
use App\Models\User;
use Database\Seeders\AdminUserSeeder;
use Database\Seeders\ServiceSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminServiceCrudTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(AdminUserSeeder::class);
        $this->seed(ServiceSeeder::class);
        $this->admin = User::where('email', 'admin@solecraft.test')->first();
    }

    /**
     * Test guest cannot access admin services list.
     */
    public function test_guest_is_redirected_to_login(): void
    {
        $response = $this->get('/admin/services');
        $response->assertRedirect('/admin/login');
    }

    /**
     * Test admin can view login page and authenticate successfully.
     */
    public function test_admin_can_login(): void
    {
        $getLogin = $this->get('/admin/login');
        $getLogin->assertStatus(200);
        $getLogin->assertDontSee('Default Credentials');
        $getLogin->assertDontSee('password123');
        $getLogin->assertDontSee('Owner310324@');

        $loginAttempt = $this->post('/admin/login', [
            'email' => 'admin@solecraft.test',
            'password' => 'Owner310324@',
        ]);

        $loginAttempt->assertRedirect('/admin/services');
        $this->assertAuthenticatedAs($this->admin);
    }

    /**
     * Test admin can view services listing.
     */
    public function test_admin_can_view_services_index(): void
    {
        $response = $this->actingAs($this->admin)->get('/admin/services');
        $response->assertStatus(200)
            ->assertSee('Katalog Layanan Sepatu')
            ->assertSee('Regular Shoes (Warna Gelap)')
            ->assertSee('Suede & Nubuck Care Treatment');
    }

    /**
     * Test admin can create a new service with multi-value JSON arrays.
     */
    public function test_admin_can_create_service(): void
    {
        $response = $this->actingAs($this->admin)->post('/admin/services', [
            'name' => 'Custom Leather Dyeing',
            'slug' => 'custom-leather-dyeing',
            'description' => 'Pewarnaan ulang kulit asli khusus.',
            'price' => 120000,
            'estimated_days' => 5,
            'supported_types' => ['Boots', 'Loafers'],
            'supported_materials' => ['Genuine Leather'],
            'unsuited_materials' => ['Suede', 'Canvas'],
            'target_issues' => ['Warna Pudar/Repaint'],
            'is_active' => 1,
        ]);

        $response->assertRedirect('/admin/services');
        $this->assertDatabaseHas('services', [
            'slug' => 'custom-leather-dyeing',
            'name' => 'Custom Leather Dyeing',
        ]);
    }

    /**
     * Test admin can update an existing service.
     */
    public function test_admin_can_update_service(): void
    {
        $service = Service::where('slug', 'regular-shoes-dark')->first();

        $response = $this->actingAs($this->admin)->put("/admin/services/{$service->id}", [
            'name' => 'Fast Clean Express Updated',
            'slug' => 'fast-clean-express-updated',
            'description' => 'Pembersihan express super cepat.',
            'price' => 35000,
            'estimated_days' => 1,
            'supported_types' => ['Sneakers', 'Sports'],
            'supported_materials' => ['Canvas'],
            'unsuited_materials' => ['Suede'],
            'target_issues' => ['Kotor Ringan/Debu'],
            'is_active' => 1,
        ]);

        $response->assertRedirect('/admin/services');
        $this->assertDatabaseHas('services', [
            'id' => $service->id,
            'name' => 'Fast Clean Express Updated',
            'price' => 35000,
        ]);
    }

    /**
     * Test admin can delete a service.
     */
    public function test_admin_can_delete_service(): void
    {
        $service = Service::where('slug', 'regular-shoes-dark')->first();

        $response = $this->actingAs($this->admin)->delete("/admin/services/{$service->id}");
        $response->assertRedirect('/admin/services');
        $this->assertDatabaseMissing('services', [
            'id' => $service->id,
        ]);
    }

    /**
     * Test admin can logout.
     */
    public function test_admin_can_logout(): void
    {
        $response = $this->actingAs($this->admin)->post('/admin/logout');
        $response->assertRedirect('/');
        $this->assertGuest();
    }
}
