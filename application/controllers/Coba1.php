<?php
class Coba1 extends CI_Controller
{
    public function Index ()
    {
        echo "Selamat Datang di WEBPROGAMMING II";
    }
    public function biodata ($nama=null,$nim=null)
    {
        //echo "Nama : $nama <br>";
        //echo "NIM  : $nim";
        $data['nama']=$nama;
        $data['nim']=$nim;
        $this->load->view('v_coba',$data);
    }
}
