<?php
include_once 'models/M_Credential.php';
include_once("function/main.php");
include_once 'config/static.php';

class C_Public {
  static function ToLanding(){
    view('public/public-layout', ['url' => 'V_Homepage']);
  }
  static function ToLogin(){
    view('public/public-layout', ['url' => 'V_Login']);
  }
  static function ToRegister(){
    view('public/public-layout', ['url' => 'V_Register']);
  }

  static function Login() {
    $post = array_map('htmlspecialchars', $_POST);

    $user = M_Credential::login([
        'email' => $post['email'], 
        'password' => $post['password']
    ]);
    if ($user) {
        unset($user['password']);
        $_SESSION['user'] = $user;
        setFlashMessage('success', 'Login Berhasil');
        header('Location: '.BASEURL.'dashboard');
    }
    else {
        setFlashMessage('error', 'Email atau Password salah');
        header('Location: '.BASEURL.'login');
    }
  }
  static function RegisterUser() {
    $post = array_map('htmlspecialchars', $_POST);

    $user = M_Credential::UserRegister([
        'nama' => $post['nama'], 
        'email' => $post['email'],
        'password' => $post['password'],
        'tanggal_lahir' => $post['tanggal_lahir'],
        'lulusan' => $post['lulusan'],
    ]);

    if ($user) {
        header('Location: '.BASEURL.'login');
    }
    else {
        setFlashMessage('error', 'Register Gagal');
        header('Location: '.BASEURL.'register');
    }
  }

  static function RegisterMitra() {
    $post = array_map('htmlspecialchars', $_POST);

    $user = M_Credential::MitraRegister([
        'nama_mitra' => $post['nama_mitra'], 
        'email' => $post['email'],
        'password' => $post['password'],
    ]);

    if ($user) {
        header('Location: '.BASEURL.'login');
    }
    else {
        header('Location: '.BASEURL.'register?failed=true');
    }
  }

  static function logout() {
    $_SESSION = array();

    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    session_destroy();
    header('Location: '.BASEURL. 'homepage');
  }
}