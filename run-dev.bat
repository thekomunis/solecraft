@echo off
title SOLECRAFT - Local Development Server
echo ========================================================
echo   SOLECRAFT (Shoe Care Solutions) - Local Server Runner
echo ========================================================
echo.
echo Pastikan database MySQL aktif.
echo Membuka server di http://127.0.0.1:8000 ...
echo.
php -S 127.0.0.1:8000 server.php
pause
