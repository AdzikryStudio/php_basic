<?php

class Dosen_model {

    private $table = 'dokter';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllDosen() {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }
    public function getDosenById($id) {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id = :id");
        $this->db->bind('id', $id); // Bind the 'id' parameter
        return $this->db->single(); // Return a single result
    }

    public function tambahDataDosen($data){
        $query = "INSERT INTO " . $this->table . " VALUES ('', :nama, :spesialis, :jam)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('spesialis', $data['spesialis']);
        $this->db->bind('jam', $data['jam']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function hapusDataDosen($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function cariDataDosen() {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM " . $this->table . " WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");

        return $this->db->resultSet();
    }
}