<?php
    // Import script autoload agar bisa menggunakan library
    include('vendor/autoload.php');
    // Import library
    use Firebase\JWT\JWT;
    use Dotenv\Dotenv;
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    $waktu_kadaluarsa['exp'] = time() + (10 * 60);
    $access_token = JWT::encode($waktu_kadaluarsa, $_ENV['ACCESS_TOKEN_SECRET']);
    echo "$access_token";
?>