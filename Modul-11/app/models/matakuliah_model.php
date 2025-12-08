<?php 

class Matakuliah_model {
    private $table = 'matakuliah'; // Nama tabel di database
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllMataKuliah() {
        // Query SQL: Ambil semua data
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMataKuliahById($id) {
        // Query SQL: Ambil 1 data berdasarkan ID
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMataKuliah($data) {
        // Query SQL: Insert Data
        $query = "INSERT INTO matakuliah (kode_mk, nama_mk, semester, sks)
                  VALUES (:kode_mk, :nama_mk, :semester, :sks)";
        
        $this->db->query($query);
        $this->db->bind('kode_mk', $data['kode_mk']);
        $this->db->bind('nama_mk', $data['nama_mk']);
        $this->db->bind('semester', $data['semester']);
        $this->db->bind('sks', $data['sks']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataMataKuliah($data) {
        // Query SQL: Update Data
        $query = "UPDATE matakuliah SET
                    kode_mk = :kode_mk,
                    nama_mk = :nama_mk,
                    semester = :semester,
                    sks = :sks
                  WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('kode_mk', $data['kode_mk']);
        $this->db->bind('nama_mk', $data['nama_mk']);
        $this->db->bind('semester', $data['semester']);
        $this->db->bind('sks', $data['sks']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMataKuliah($id) {
        // Query SQL: Delete Data
        $query = "DELETE FROM matakuliah WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}