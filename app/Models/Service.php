<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'estimated_days',
        'image_url',
        'supported_types',
        'supported_materials',
        'unsuited_materials',
        'target_issues',
        'is_active',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'supported_types' => 'array',
        'supported_materials' => 'array',
        'unsuited_materials' => 'array',
        'target_issues' => 'array',
        'is_active' => 'boolean',
        'price' => 'decimal:2',
        'estimated_days' => 'integer',
    ];

    /**
     * Scope a query to only include active services.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
