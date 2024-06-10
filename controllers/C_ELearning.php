<?php
include_once 'function/main.php';
include_once 'models/M_ELearning.php';

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
      $ELearning = M_ELearning::getAllELearning();

      view('elearning/V_elearning', [
        'userRoleData' => $userRoleData
        ,'ELearning' => $ELearning
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

  static function AddELearning() {
    $post = array_map('htmlspecialchars', $_POST);
    $ELearning = M_ELearning::createELearning([
      'judul' => $post['judul'],
      'website' => $post['website'],
      'deskripsi' => $post['deskripsi'],
      'materi' => $post['materi'],
    ]);

    if ($ELearning) {
      setFlashMessage('success', 'E-Learning ditambahkan');
      header('Location: ' . BASEURL . 'elearning');
    } else {
      setFlashMessage('error', 'E-Learning gagal ditambahkan');
      header('Location: ' . BASEURL . 'elearning');
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
      $id = $_GET['id'];

      $data = M_ELearning::getELearningById($id);

      view('elearning/V_EditELearning', [
        'data' => $data
      ]);
    }
  }

  public static function updateELearning() {
    if (!isset($_SESSION['user']['id'])) {
        setFlashMessage('error', 'Anda tidak memiliki akses');
        header('Location: ' . BASEURL . 'elearning');
        exit;
    }

    $userId = $_SESSION['user']['id'];
    $userRoleData = M_User::getFromRoles($userId);

    if ($userRoleData['role'] !== 'Admin') {
      setFlashMessage('error', 'Anda tidak memiliki akses');
      header('Location: ' . BASEURL . 'elearning');
      exit;
    } else {
      $post = array_map('htmlspecialchars', $_POST);
      $id = $_GET['id'];
      $ELearning = M_ELearning::updateELearning([
        'id' => $id,
        'judul' => $post['judul'],
        'website' => $post['website'],
        'deskripsi' => $post['deskripsi'],
        'materi' => $post['materi'],
      ]);

      if ($ELearning) {
        setFlashMessage('success', 'E-Learning diubah');
        header('Location: ' . BASEURL . 'elearning');
      } else {
        setFlashMessage('error', 'E-Learning gagal diubah');
        header('Location: ' . BASEURL . 'elearning');
      }
    }
  }

  public static function deleteELearning() {
    if (!isset($_SESSION['user']['id'])) {
        setFlashMessage('error', 'Anda harus login');
        header('Location: ' . BASEURL . 'login');
        exit;
    }

    $userId = $_SESSION['user']['id'];
    $userRoleData = M_User::getFromRoles($userId);
    if ($userRoleData['role'] !== 'Admin') {
      setFlashMessage('error', 'Anda tidak memiliki akses');
      header('Location: ' . BASEURL . 'elearning');
      exit;
    } 

    $id = $_GET['id'];
    $Result = M_ELearning::deleteELearning($id);

    if ($Result) {
      setFlashMessage('success', 'E-Learning dihapus');
      header('Location: ' . BASEURL . 'elearning');
    } else {
      setFlashMessage('error', 'E-Learning gagal dihapus');
      header('Location: ' . BASEURL . 'elearning');
    }
  }
  
  static function DetailELearning() {
    $userId = $_SESSION['user']['id'];
    $userRoleData = M_User::getFromRoles($userId);
    if ($userRoleData['role'] !== 'Seeker') {
      setFlashMessage('error', 'Anda tidak memiliki akses');
      header('Location: ' . BASEURL . 'elearning');
      exit;
    } else {
      $id = $_GET['id'];

      $data = M_ELearning::getELearningById($id);
    }
    view('elearning/V_DetailELearning', [
      'data' => $data,
    ]);
  }
}