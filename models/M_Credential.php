<?php
include_once __DIR__ . '/../config/db_connect.php';

class M_Credential
{
    static function login($data = [])
    {
        global $conn;
    
        $email = $data['email'];
        $password = $data['password'];
    
        $result = $conn->query("SELECT * FROM credentials WHERE email = '$email'");
        if ($result = $result->fetch_assoc()) {
            $hashedPassword = $result['password'];
            $verify = password_verify($password, $hashedPassword);
            if ($verify) {
                return $result;
            } else {
                return false;
            }
        }
    }
    
    static function UserRegister($data = [])
    {
        global $conn;
    
        $nama = $data['nama'];
        $email = $data['email'];
        $password = $data['password'];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $tanggal_lahir = $data['tanggal_lahir']; 
        $lulusan = $data['lulusan']; 
    
        // First, insert into credential table
        $sql_credential = "INSERT INTO credentials (email, password, role) VALUES (?, ?, 'User')";
        $stmt_credential = $conn->prepare($sql_credential);
        $stmt_credential->bind_param('ss', $email, $hashedPassword);
        $stmt_credential->execute();
    
        // Check if insertion into credential table was successful
        if ($stmt_credential->affected_rows <= 0) {
            return false; // Return false if insertion failed
        }
    
        // Get the id_credential from the inserted row
        $id_credential = $stmt_credential->insert_id;
    
        // Second, insert into seeker_profiles table
        $sql_profile = "INSERT INTO seeker_profiles (nama, tanggal_lahir, lulusan, id_credential) VALUES (?, ?, ?, ?)";
        $stmt_profile = $conn->prepare($sql_profile);
        $stmt_profile->bind_param('sssi', $nama, $tanggal_lahir, $lulusan, $id_credential);
        $stmt_profile->execute();
    
        // Check if insertion into seeker_profiles table was successful
        if ($stmt_profile->affected_rows <= 0) {
            // If insertion into seeker_profiles fails, you may want to roll back the credential insertion.
            // For simplicity, we're not covering transaction management here.
            return false; // Return false if insertion failed
        }
    
        // Return true if both insertions were successful
        return true;
    }

    static function MitraRegister($data = [])
    {
        global $conn;
    
        $nama = $data['nama_mitra'];
        $alamat = $data['alamat'];
        $email = $data['email'];
        $password = $data['password'];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT); 
    
        // First, insert into credential table
        $sql_credential = "INSERT INTO credentials (alamat, email, password, role) VALUES (?, ?, ?, 'Mitra')";
        $stmt_credential = $conn->prepare($sql_credential);
        $stmt_credential->bind_param('sss', $alamat, $email, $hashedPassword);
        $stmt_credential->execute();
    
        // Check if insertion into credential table was successful
        if ($stmt_credential->affected_rows <= 0) {
            return false; // Return false if insertion failed
        }
    
        // Get the id_credential from the inserted row
        $id_credential = $stmt_credential->insert_id;
    
        // Second, insert into mitra_profiles table
        $sql_profile = "INSERT INTO mitra_profiles (nama_mitra, id_credential) VALUES (?, ?)";
        $stmt_profile = $conn->prepare($sql_profile);
        $stmt_profile->bind_param('si', $nama, $id_credential);
        $stmt_profile->execute();
    
        // Check if insertion into mitra_profiles table was successful
        if ($stmt_profile->affected_rows <= 0) {
            // If insertion into mitra_profiles fails, you may want to roll back the credential insertion.
            // For simplicity, we're not covering transaction management here.
            return false; // Return false if insertion failed
        }
    
        // Return true if both insertions were successful
        return true;
    }
    
}