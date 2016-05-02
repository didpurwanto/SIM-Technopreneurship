<?php

class Notif extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->database();
		$this->load->model('akun_model','modelAkun');		
	}
	
	
	function success_mengajukan_proposal()
	{	
		$this->load->view('page_notif/success_mengajukan_proposal');	
	}
	
	function success_update_password()
	{	
		$this->load->view('page_notif/success_update_password');		
	}
	
	
	function failed_update_password()
	{	
		$this->load->view('page_notif/failed_update_password');
	}
	
	function success_update_password_doskarbem()
	{	
		$this->load->view('page_notif/success_update_password_doskarbem');		
	}
	
	
	function failed_update_password_doskarbem()
	{	
		$this->load->view('page_notif/failed_update_password_doskarbem');
	}
	
	function success_monev_bulanan()
	{	
		$this->load->view('page_notif/success_monev_bulanan');
	}
	
	function success_penilaian_monev_bulanan()
	{	
		$this->load->view('page_notif/success_penilaian_monev_bulanan');	
	}		
	
	function success_penilaian_monev_bulanan_p2km()
	{	
		$this->load->view('page_notif/success_penilaian_monev_bulanan_p2km');	
	}
	
	function success_penilaian_monev_semester()
	{	
		$this->load->view('page_notif/success_penilaian_monev_semester');		
	}
	
	function success_penilaian_monev_semester_p2km()
	{	
		$this->load->view('page_notif/success_penilaian_monev_semester_p2km');	
	}
	
	function success_validasi_monev_semester()
	{	
		$this->load->view('page_notif/success_validasi_monev_semester');
	}
	
	function success_validasi_monev_bulanan()
	{	
		$this->load->view('page_notif/success_validasi_monev_bulanan');	
	}
	
	function failed_registrasi()
	{
		$this->load->view('page_notif/failed_registrasi');
	}
	
	function failed_login()
	{
		$this->load->view('page_notif/failed_login');
		
	}
	
	function failed_login_doskarbem()
	{
		$this->load->view('page_notif/failed_login_doskarbem');
		
	}
	
	function success_registrasi()
	{
		$this->load->view('page_notif/success_registrasi');
	}
	
	function success_ganti_ketua()
	{
		$this->load->view('page_notif/success_ganti_ketua');
	}
	
	function failed_ganti_ketua()
	{
		$this->load->view('page_notif/failed_ganti_ketua');
	}
	
	function success_pengunduran_diri()
	{
		$this->load->view('page_notif/success_pengunduran_diri');
	}
	
	function success_penyelesaian_usaha()
	{
		$this->load->view('page_notif/success_penyelesaian_usaha');
	}
	
	function success_tambah_berita()
	{
		$this->load->view('page_notif/success_tambah_berita');
	}
	
	
	function success_rekomendasi()
	{
		$this->load->view('page_notif/success_rekomendasi');
	}
	
	function success_tambah_tahun_skema()
	{
		$this->load->view('page_notif/success_tambah_tahun_skema');
	}
	
	function failed_tambah_tahun_skema()
	{
		$this->load->view('page_notif/failed_tambah_tahun_skema');
	}
	
	
	
}