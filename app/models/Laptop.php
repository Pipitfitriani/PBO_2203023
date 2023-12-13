<?php

namespace App\Models;

use App\Core\Model;

class Laptop extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_laptops";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $merk = $_POST['merk'];
            $harga = $_POST['harga'];
            $ram = $_POST['ram'];
            $warna = $_POST['warna'];

            $sql = "INSERT INTO tb_laptops
            SET merk=:merk, harga=:harga, ram=:ram, warna=:warna";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":merk", $merk);
            $stmt->bindParam(":harga", $harga);
            $stmt->bindParam(":ram", $ram);
            $stmt->bindParam(":warna", $warna);

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_laptops WHERE id=:id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
{
    $merk = $_POST['merk'];
    $harga = $_POST['harga'];
    $ram = $_POST['ram'];
    $warna = $_POST['warna'];
    $id = $_POST['id'];

    // Tambahkan definisi untuk variabel $password jika Anda tetap ingin menggunakannya

    $sql = "UPDATE tb_laptops
            SET merk=:merk, harga=:harga, ram=:ram, warna=:warna
            WHERE id=:id";

    $stmt = $this->db->prepare($sql);

    $stmt->bindParam(":merk", $merk);
    $stmt->bindParam(":harga", $harga);
    $stmt->bindParam(":ram", $ram);
    $stmt->bindParam(":warna", $warna);
    $stmt->bindParam(":id", $id);

    $stmt->execute();
}

/*
      public function update()
      {
            $merk = $_POST['merk'];
            $harga = $_POST['harga'];
            $ram = $_POST['ram'];
            $warna = $_POST['warna'];
            $id = $_POST['id'];

            if (!empty($password)) {
                  $sql = "UPDATE tb_laptops
                  SET user_email=:user_email, user_password=PASSWORD(:user_password), user_full_name=:user_full_name
                  WHERE user_id=:user_id";
            } else {
                  $sql = "UPDATE tb_users
                  SET user_email=:user_email, user_full_name=:user_full_name
                  WHERE user_id=:user_id";
            }

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":merk", $merk);
            $stmt->bindParam(":harga", $harga);
            $stmt->bindParam(":ram", $ram);
            $stmt->bindParam(":warna", $warna);

            $stmt->execute();
      }
      */



      public function delete($id)
      {
            $sql = "DELETE FROM tb_laptops WHERE id=:id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id", $id);
            $stmt->execute();
      }
}

