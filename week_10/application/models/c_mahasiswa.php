<?php

class C_Mahasiswa extends CI_Controller
{
		public function index(){
		$this->load->model('m_mahasiswa');

		$get = $this->m_mahasiswa->get();
		print_r($get);

	}
}
?>