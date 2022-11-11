<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public function getUsernameUsers($email)
    {
        $query = "select `mahasiswa`.`kode_mahasiswa` AS `kode`,`mahasiswa`.`nama` AS `nama`,`mahasiswa`.`password` AS `password`,`mahasiswa`.`email` AS `email`,`mahasiswa`.`role` AS `role`,`mahasiswa`.`jeniskel` AS `jeniskel`,`mahasiswa`.`is_active` AS `is_active`,`mahasiswa`.`status` AS `status` from `mahasiswa` where email='" . $email . "'
        union
        select `admin`.`kode_admin` AS `kode_admin`,`admin`.`email` AS `email`,`admin`.`password` AS `password`,`admin`.`nama` AS `nama`,`admin`.`role` AS `role`,`admin`.`jeniskel` as `jeniskel`, `admin`.`is_active` as `is_active`, `admin`.`status` as `status` from `admin` where email='" . $email . "'";
        return $this->db->query($query)->row();
    }

    public function getUserPassUsers($email, $password)
    {
        $query = "select `mahasiswa`.`kode_mahasiswa` AS `kode`,`mahasiswa`.`nama` AS `nama`,`mahasiswa`.`password` AS `passmahasiswa`,`mahasiswa`.`email` AS `email`,`mahasiswa`.`role` AS `role`,`mahasiswa`.`jeniskel` AS `jeniskel`,`mahasiswa`.`is_active` AS `is_active`,`mahasiswa`.`status` AS `status` from `mahasiswa` where email='" . $email . "' and password='" . md5($password) . "'
        union
        select `admin`.`kode_admin` AS `kode_admin`,`admin`.`email` AS `email`,`admin`.`password` AS `password`,`admin`.`nama` AS `nama`,`admin`.`role` AS `role`,`admin`.`jeniskel` as `jeniskel`, `admin`.`is_active` as `is_active`, `admin`.`status` as `status` from `admin` where email='" . $email . "' and password='" . md5($password) . "'";
        return $this->db->query($query);
    }
}
