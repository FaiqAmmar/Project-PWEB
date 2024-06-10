<?php
include_once 'function/main.php';
include_once 'models/M_User.php';

class C_Dashboard {
  static function ToDashboard() {
    if (!isset($_SESSION['user'])) {
        setFlashMessage('error', 'Anda harus login');
        header('Location: ' . BASEURL . 'login');
        exit;
    } else {
        $userId = $_SESSION['user']['id'];
        $userRoleData = M_User::getFromRoles($userId);
        $currentSeeker = null;
        $currentMitra = null;
        $currentAdmin = null;

        if ($userRoleData['role'] === 'Seeker') {
          $currentSeeker = M_User::getSeekerById($userId);
        } elseif ($userRoleData['role'] === 'Mitra') {
          $currentMitra = M_User::getMitraById($userId);
        } elseif ($userRoleData['role'] === 'Admin') {
          $currentAdmin = M_User::getAdminById($userId);
        }
        
        view('dashboard/V_Dashboard', [
            'userRoleData' => $userRoleData,
            'currentSeeker' => $currentSeeker,
            'currentMitra' => $currentMitra,
            'currentAdmin' => $currentAdmin
        ]);
    }
  }
}