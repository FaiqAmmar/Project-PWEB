<?php
include_once 'function/main.php';

class C_ELearning {
  static function ToELearning() {
    if (!isset($_SESSION['user'])) {
        setFlashMessage('error', 'Anda harus login');
        header('Location: ' . BASEURL . 'login');
        exit;
    } else { 
      $userId = $_SESSION['user']['id'];
      $userRoleData = M_User::getFromRoles($userId);
      if ($userRoleData['role'] === 'Mitra') {
          setFlashMessage('error', 'Anda tidak memiliki akses');
          header('Location: ' . BASEURL . 'dashboard');
          exit;
      }

      view('elearning/V_elearning', [
        'userRoleData' => $userRoleData
      ]);
    }
  }

  static function ToAddELearning() {
    $userId = $_SESSION['user']['id'];
    $userRoleData = M_User::getFromRoles($userId);
    if ($userRoleData['role'] !== 'Admin') {
      setFlashMessage('error', 'Anda tidak memiliki akses');
      header('Location: ' . BASEURL . 'elearning');
      exit;
    } else { 
      view('elearning/V_AddELearning');
    }
  }

  static function ToEditELearning() {
    $userId = $_SESSION['user']['id'];
    $userRoleData = M_User::getFromRoles($userId);
    if ($userRoleData['role'] !== 'Admin') {
      setFlashMessage('error', 'Anda tidak memiliki akses');
      header('Location: ' . BASEURL . 'elearning');
      exit;
    } else { 
      view('elearning/V_EditELearning');
    }
  }
  
  static function DetailELearning() {
    view('elearning/V_DetailELearning');
  }
}