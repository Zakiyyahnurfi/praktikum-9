<?php
class Mahasiswa_model extends CI_Model {
    public $id;
    public $nama;
    public $gender;
    public $tmp_lahir;
    public $tgl_lahir;
    public $ipk;
    public $prodi;
    
    public function predikat(){
        $predikat = ($this->ipk >= 3.75)?"Cumlaude" : "Baik";
        return $predikat;
    }
}
?>