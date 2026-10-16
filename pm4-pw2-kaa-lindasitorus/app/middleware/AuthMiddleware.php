public static function handle()
{
    // Memastikan session sudah dimulai sebelum mengecek data login
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Ambil jalur URL yang sedang diakses saat ini
    $current_url = $_SERVER['REQUEST_URI'] ?? '';

    // PENTING: Jika BELUM login DAN tidak sedang membuka halaman /login, baru lempar ke /login
    if (!isset($_SESSION['user_id']) && $current_url !== '/login') {
        header('Location: /login');
        exit;
    }
}