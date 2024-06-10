<?php
include_once __DIR__ . '/../config/db_connect.php';

class M_Loker
{
  static function getLokerById($id) {
    global $conn;
    $sql = 'SELECT * FROM loker WHERE id = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    $stmt->close();
    return $data;
  }

  static function getMitraByLoker($id) {
    global $conn;
    $sql = 'SELECT * FROM mitra_profiles WHERE id = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    $stmt->close();
    return $data;
  }
  static function getAllLokerByMitra($id) {
    global $conn;
    $sql = 'SELECT * FROM loker WHERE id_mitra = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
    return $data;
  }

  static function getAllLoker() {
    global $conn;
    $sql = 'SELECT * FROM loker';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
    return $data;
  }

  static function createLoker($data=[]) {
    $judul = $data['judul'];
    $deskripsi = $data['deskripsi'];
    $kualifikasi = $data['kualifikasi'];
    $gaji = $data['gaji'];
    $idMitra = $data['id_mitra'];
    global $conn;
    $stmt = $conn->prepare("INSERT INTO loker (judul, deskripsi, kualifikasi, gaji, id_mitra) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $judul, $deskripsi, $kualifikasi, $gaji, $idMitra);
    $stmt->execute();
    return $conn->insert_id;
  }

  static function updateLoker($data=[])
  {
      global $conn;
      $id = $data['id'];
      $judul = $data['judul'];
      $deskripsi = $data['deskripsi'];
      $kualifikasi = $data['kualifikasi'];
      $gaji = $data['gaji'];
      global $conn;
      $stmt = $conn->prepare("UPDATE loker SET judul = ?, deskripsi = ?, kualifikasi = ?, gaji = ? WHERE id = ?");
      $stmt->bind_param("ssssi", $judul, $deskripsi, $kualifikasi, $gaji, $id);
      $stmt->execute();
      return $stmt->affected_rows;
  }

  static function deleteLoker($id)
  {
      global $conn;
      $stmt = $conn->prepare("DELETE FROM loker WHERE id = ?");
      $stmt->bind_param("i", $id);
      $stmt->execute();
      return $stmt->affected_rows;
  }

  static function ApplyLoker($data=[]) {
    $idSeeker = $data['id_seeker'];
    $idLoker = $data['id_loker'];
    global $conn;
    $stmt = $conn->prepare("INSERT INTO apply_loker (id_seeker, id_loker) VALUES (?, ?)");
    $stmt->bind_param("ii", $idSeeker, $idLoker);
    $stmt->execute();
    return $conn->insert_id;
  }
}