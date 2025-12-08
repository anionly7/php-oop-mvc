<?php 
class MataKuliah extends Controller {
    public function index() {
        $data['judul'] = 'Daftar Mata Kuliah';
        $data['mk'] = $this->model('Matakuliah_model')->getAllMataKuliah();
        $this->view('templates/header', $data);
        $this->view('matakuliah/index', $data);
        $this->view('templates/footer');
    }

    // Menampilkan Form Tambah
    public function tambah() {
        $data['judul'] = 'Tambah Data Mata Kuliah';
        $data['aksi'] = 'prosesTambah'; 
        $this->view('templates/header', $data);
        $this->view('matakuliah/form', $data);
        $this->view('templates/footer');
    }

    // Menampilkan Form Ubah (dengan data lama)
    public function ubah($id) {
        $data['judul'] = 'Ubah Data Mata Kuliah';
        $data['aksi'] = 'prosesUbah';
        $data['mk'] = $this->model('Matakuliah_model')->getMataKuliahById($id);
        $this->view('templates/header', $data);
        $this->view('matakuliah/form', $data);
        $this->view('templates/footer');
    }

    // Proses Simpan Data Baru
    public function prosesTambah() {
        if( $this->model('Matakuliah_model')->tambahDataMataKuliah($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/matakuliah');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/matakuliah');
            exit;
        }
    }

    // Proses Simpan Perubahan
    public function prosesUbah() {
        if( $this->model('Matakuliah_model')->ubahDataMataKuliah($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/matakuliah');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/matakuliah');
            exit;
        }
    }

    public function hapus($id) {
        if( $this->model('Matakuliah_model')->hapusDataMataKuliah($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/matakuliah');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/matakuliah');
            exit;
        }
    }
}