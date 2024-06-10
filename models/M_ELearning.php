<?php
include_once __DIR__ . '/../config/db_connect.php';

class M_ELearning
{
  static function getELearningById($id) {
    global $conn;
    $sql = 'SELECT * FROM elearning WHERE id = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    $stmt->close();
    return $data;
  }

  static function getAllELearning() {
    global $conn;
    $sql = 'SELECT * FROM elearning';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
    return $data;
  }

  static function createELearning($data=[]) {
    $judul = $data['judul'];
    $website = $data['website'];
    $deskripsi = $data['deskripsi'];
    $materi = $data['materi'];
    global $conn;
    $stmt = $conn->prepare("INSERT INTO elearning (judul, website, deskripsi, materi) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $judul, $website, $deskripsi, $materi);
    $stmt->execute();
    return $conn->insert_id;
  }

  static function updateELearning($data=[])
  {
      global $conn;
      $id = $data['id'];
      $judul = $data['judul'];
      $website = $data['website'];
      $deskripsi = $data['deskripsi'];
      $materi = $data['materi'];
      global $conn;
      $stmt = $conn->prepare("UPDATE elearning SET judul = ?, website = ?, deskripsi = ?, materi = ? WHERE id = ?");
      $stmt->bind_param("ssssi", $judul, $website, $deskripsi, $materi, $id);
      $stmt->execute();
      return $stmt->affected_rows;
  }

  static function deleteELearning($id)
  {
      global $conn;
      $stmt = $conn->prepare("DELETE FROM elearning WHERE id = ?");
      $stmt->bind_param("i", $id);
      $stmt->execute();
      return $stmt->affected_rows;
  }
}