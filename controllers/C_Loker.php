<?php
include_once 'function/main.php';
include_once 'models/M_User.php';
include_once 'models/M_Loker.php';

class C_Loker {
  static function ToLoker() {
    if (!isset($_SESSION['user'])) {
        setFlashMessage('error', 'Anda harus login');
        header('Location: ' . BASEURL . 'login');
        exit;
    } else {
      $LokerMitra = null;
      $userId = $_SESSION['user']['id'];
      $userRoleData = M_User::getFromRoles($userId);
      $mitraId = M_User::getMitraById($userId);
      $Loker = M_Loker::getAllLoker();
      if ($userRoleData['role'] === 'Mitra') {
        $LokerMitra = M_Loker::getAllLokerByMitra($mitraId['id']);
      }

        return view('loker/V_Loker', [
          'userRoleData' => $userRoleData,
          'LokerMitra' => $LokerMitra,
          'Loker' => $Loker,]);
    }
  }
  static function ToAddLoker() {
    $userId = $_SESSION['user']['id'];
    $userRoleData = M_User::getFromRoles($userId);
    if ($userRoleData['role'] !== 'Mitra') {
      setFlashMessage('error', 'Anda tidak memiliki akses');
      header('Location: ' . BASEURL . 'loker');
      exit;
    } else { 
      view('loker/V_AddLoker');
    }
  }

  static function AddLoker() {
    $userId = $_SESSION['user']['id'];
    $mitraId = M_User::getMitraById($userId);
    $post = array_map('htmlspecialchars', $_POST);
    $Loker = M_Loker::createLoker([
      'judul' => $post['judul'],
      'deskripsi' => $post['deskripsi'],
      'kualifikasi' => $post['kualifikasi'],
      'gaji' => $post['gaji'],
      'id_mitra' => $mitraId['id']
    ]);

    if ($Loker) {
      setFlashMessage('success', 'Loker ditambahkan');
      header('Location: ' . BASEURL . 'loker');
    } else {
      setFlashMessage('error', 'Loker gagal ditambahkan');
      header('Location: ' . BASEURL . 'loker');
    }
  }

  static function ToEditLoker() {
    $userId = $_SESSION['user']['id'];
    $userRoleData = M_User::getFromRoles($userId);
    if ($userRoleData['role'] !== 'Mitra') {
      setFlashMessage('error', 'Anda tidak memiliki akses');
      header('Location: ' . BASEURL . 'loker');
      exit;
    } else {
      $id = $_GET['id'];

      $data = M_Loker::getLokerById($id);
      
      view('loker/V_EditLoker', [
        'data' => $data
      ]);
    }
  }

  public static function updateLoker() {
    if (!isset($_SESSION['user']['id'])) {
        setFlashMessage('error', 'Anda tidak memiliki akses');
        header('Location: ' . BASEURL . 'loker');
        exit;
    }

    $userId = $_SESSION['user']['id'];
    $userRoleData = M_User::getFromRoles($userId);

    if ($userRoleData['role'] !== 'Mitra') {
        setFlashMessage('error', 'Anda tidak memiliki akses');
        header('Location: ' . BASEURL . 'loker');
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_GET['id'];
        $data = [ 
            'id' => $id,
            'judul' => $_POST['judul'],
            'deskripsi' => $_POST['deskripsi'],
            'kualifikasi' => $_POST['kualifikasi'],
            'gaji' => $_POST['gaji'],
        ];

        $result = M_Loker::updateLoker($data);

        if ($result > 0) {
            setFlashMessage('success', 'Loker berhasil diperbarui');
        } else {
            setFlashMessage('error', 'Gagal memperbarui loker');
        }

        header('Location: ' . BASEURL . 'loker');
        exit;
    }
  }

  public static function deleteLoker() {
    if (!isset($_SESSION['user']['id'])) {
        setFlashMessage('error', 'Anda tidak memiliki akses');
        header('Location: ' . BASEURL . 'loker');
        exit;
    }

    $userId = $_SESSION['user']['id'];
    $userRoleData = M_User::getFromRoles($userId);

    if ($userRoleData['role'] !== 'Mitra') {
        setFlashMessage('error', 'Anda tidak memiliki akses');
        header('Location: ' . BASEURL . 'loker');
        exit;
    }

      $id = $_GET['id'];
      $result = M_Loker::deleteLoker($id);

      if ($result > 0) {
          setFlashMessage('success', 'Loker berhasil dihapus');
      } else {
          setFlashMessage('error', 'Gagal menghapus loker');
      }

      header('Location: ' . BASEURL . 'loker');
      exit;
  }
  
  static function DetailLoker() {
    $userId = $_SESSION['user']['id'];
    $userRoleData = M_User::getFromRoles($userId);
    if ($userRoleData['role'] === 'Mitra') {
      setFlashMessage('error', 'Anda tidak memiliki akses');
      header('Location: ' . BASEURL . 'loker');
      exit;
    } else {
      $id = $_GET['id'];

      $data = M_Loker::getLokerById($id);
      $Mitra = M_Loker::getMitraByLoker($data['id_mitra']);
    }
    view('loker/V_DetailLoker', [
      'data' => $data,
      'Mitra' => $Mitra
    ]);
  }
}