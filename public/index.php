<?php

// 1. Panggil Middleware Keamanan
require_once __DIR__ . '/../app/middleware/AuthMiddleware.php';

// 2. Ambil jalur URL yang sedang diakses di browser
$url = $_SERVER['REQUEST_URI'] ?? '/';

// 3. JALUR HALAMAN LOGIN
if ($url === '/login') {
    // Panggil AuthController untuk memproses halaman login
    require_once __DIR__ . '/../app/controllers/AuthController.php';
    $controller = new AuthController();
    $controller->login(); // Menjalankan fungsi login
    exit;
}

// 4. JALUR HALAMAN UTAMA (DILINDUNGI MIDDELWARE)
// Jalankan pengecekan login terlebih dahulu
AuthMiddleware::handle();

// Jika sudah lolos login, tampilkan halaman utama
require_once __DIR__ . '/../app/controllers/HomeController.php';
$controller = new HomeController();
$controller->index();