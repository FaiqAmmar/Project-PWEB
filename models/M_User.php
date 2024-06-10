<?php
include_once __DIR__ . '/../config/db_connect.php';

class M_User
{
  static function getSeekerByRole($id) {
    global $conn;
    $sql = 'SELECT * FROM credentials WHERE id = ?';
    $stmt = $conn->prepare( $sql );
    $stmt->bind_param( 'i', $id );
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    return $result->fetch_assoc();
  }

  static function getSeekerById($id) {
    global $conn;
    $sql = 'SELECT * FROM seeker_profiles WHERE id_credential = ?';
    $stmt = $conn->prepare( $sql );
    $stmt->bind_param( 'i', $id );
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    return $result->fetch_assoc();
  }
  static function getMitraByRole($id) {
    global $conn;
    $sql = 'SELECT * FROM credentials WHERE id = ?';
    $stmt = $conn->prepare( $sql );
    $stmt->bind_param( 'i', $id );
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    return $result->fetch_assoc();
  }

  static function getMitraById($id) {
    global $conn;
    $sql = 'SELECT * FROM mitra_profiles WHERE id_credential = ?';
    $stmt = $conn->prepare( $sql );
    $stmt->bind_param( 'i', $id );
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    return $result->fetch_assoc();
  }

  static function getAdminByRole($id) {
    global $conn;
    $sql = 'SELECT * FROM credentials WHERE id = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    return $result->fetch_assoc();
  }

  static function getAdminById($id) {
    global $conn;
    $sql = 'SELECT * FROM admin_profiles WHERE id_credential = ?';
    $stmt = $conn->prepare( $sql );
    $stmt->bind_param( 'i', $id );
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    return $result->fetch_assoc();
  }

  static function getFromRoles($id) {
    global $conn;
    // First, get the role from the credentials table
    $sql = 'SELECT * FROM credentials WHERE id = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $roleData = $result->fetch_assoc();
    $stmt->close();

    return $roleData; // Return the entire row
  }
}