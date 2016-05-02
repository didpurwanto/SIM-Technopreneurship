<?php

class Akun extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->database();
		$this->load->model('akun_model','modelAkun');		
	}
	
	
	
	//---------------------------------------------------AKUN ---------------------------------------------------
	function index()
	{	
		$this->load->view('home/home');

	}
	
	function login()
	{	
		$data['isi'] = "page_akun/dashboard";
		$this->load->view('sidebar/admin', $data);
		
	}
	function login_mhs_action(){
		$nrpketua = $this->input->post('nrp');
		$passwd = $this->input->post('passwd');
		$skema=$this->input->post('skema');
		$tahun=$this->input->post('tahun');
		
		$data['result']=$this->modelAkun->cek_login_mhs($nrpketua,$passwd,$skema,$tahun);
		foreach($data['result'] as $rows)
		{
			$data['status_proposal'] = $rows['status_pengaju'];
			$data['id_pengaju_proposal'] = $rows['id_pengaju_proposal'];			
		}
		
		if(isset($data['status_proposal'])){
			$this->session->set_userdata(array(
	                            'id_pengaju_proposal'       => $data['id_pengaju_proposal'],
	                            'skema'						=> $skema,
	                            'tahun'						=> $tahun,
	                            'status'					=> $data['status_proposal'],
	                            'nrpketua'					=> $nrpketua,
	                          ));
			$data['isi'] = "page_web/dashboard";
			$this->load->view('sidebar/mhs',$data);
		}
		else{
			redirect('notif/failed_login');
			//gagal
		}
	}

	
	private function checkSession()
	{
	    if(!$this->session->userdata('email'))
	    {
	    	redirect(base_url(),'refresh');
	   	}
	}
	
	function logout()
	{
		$this->session->sess_destroy();
   		redirect(base_url(),'refresh');
	}	
	
	
	function login_mhs()
	{
		$this->load->view('page_akun/login_mhs');
	}
	
	function login_doskarbem()
	{
		$this->load->view('page_akun/login_doskarbem');
	}

	function login_doskarbem_action()
	{
		$id=$this->input->post('id_pengguna');
		$passwd=$this->input->post('passwd');
		$data['result']=$this->modelAkun->cek_login_doskarbem($id,$passwd);
		foreach($data['result'] as $rows)
		{
			$data['email_doskarbem'] = $rows['email_doskarbem'];
			$data['hak_akses'] = $rows['hak_akses'];
		}
		if(isset($data['hak_akses']))
		{
			$this->session->set_userdata(array(
	                            'email_doskarbem'       => $data['email_doskarbem'],
	                            'hak_akses'					=> $data['hak_akses'],
	                          ));
			redirect('page/dashboard');
		}
		else
		{
			redirect('notif/failed_login_doskarbem');
		}
	}
	
	
	
	
	
	
	//--------------------------------------------------- PAGE | REGISTER ---------------------------------------------------
	function register($page = 'register')
	{
		if ( ! file_exists(APPPATH.'/views/page_akun/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['jurusan']= $this->modelAkun->select_jurusan();
		$data['title'] = ucfirst($page); // Capitalize the first letter
		$this->load->view('page_akun/'.$page, $data);		
	}
	
	function registrasi_action()
	{
		$nrpketua = $this->input->post('nrpketua');
		$namaketua = $this->input->post('namaketua');
		$skema = $this->input->post('skema');
		$jurusan = $this->input->post('jurusan');
		$tahun=$this->input->post('tahun');
		$passwd=$this->input->post('password');
		$telepon=$this->input->post('telepon');
		$email=$this->input->post('email');
		$bol=$this->modelAkun->cek_user_regis($nrpketua,$skema,$tahun);
		if($bol)
		{
			$data['result']=$this->modelAkun->select_nama_skema($skema,$tahun);
			foreach($data['result'] as $rows)
			{
				$nama_skema = $rows['nama_skema'];
			}

			$id_pengaju_proposal=$this->modelAkun->insert_akun_pengaju_proposal($tahun,$skema,$passwd);
			if($this->modelAkun->cek_data_mhs($nrpketua))
			{
				//belum ada data mhs
				//echo "masuk belum ad data mhs";
				$config['upload_path'] = './uploads/techno_its/'.$id_pengaju_proposal."_".$tahun."_".$nama_skema."/";
				if(!is_dir($config['upload_path'])){
					mkdir($config['upload_path'],0777,true);
				}
				$config['file_name']= 'ktm_ketua_kelompok'; 
		        $config['allowed_types'] = 'jpeg|png|gif|jpg';
		        $config['max_size'] = '2048';
		        $config['max_width']  = '1024';
		        $config['max_height']  = '768';
		        $config['overwrite'] = TRUE;
		        $this->load->library('upload',$config);
				if($this->upload->do_upload('file1')){
					$data['upload_data'] = $this->upload->data();
					$file_ext = $data['upload_data']['file_ext'];
					$path_ktm1="/".$id_pengaju_proposal."_".$tahun."_".$nama_skema."/"."ktm_ketua_kelompok".$file_ext;
					$this->modelAkun->insert_mhs($nrpketua,$namaketua,$path_ktm1,$jurusan,$email,$telepon);
					echo "selesai coy";
				}
				else
				{
					//echo "gagal";
					$this->upload->display_errors();
				}
			}
			else
			{
				echo "masuk sudah ad data mhs";
				//sudah ada data mahasiswa
			}
			$this->modelAkun->insert_mahasiswa_pengaju_proposal($id_pengaju_proposal,$nrpketua,"1");
			redirect('notif/success_registrasi');			
		}
		else
		{
			//jadi ketua di tahun dan skema yg sama(gagal)
		}
	}

	/*function registrasi_action()
	{
		$nrpketua = $this->input->post('nrpketua');
		$namaketua = $this->input->post('namaketua');		
		$nrp1=$this->input->post('nrp1');
		$nrp2=$this->input->post('nrp2');
		$nama1=$this->input->post('nama1');
		$nama2=$this->input->post('nama2');
		$skema = $this->input->post('skema');
		$passwd=$this->input->post('Password');
		echo $nrpketua."<br>".$namaketua."<br>".$nrp1."<br>".$nama1."<br>".$nrp2."<br>".$nama2."<br>";
		$tahun="2015";
		if($this->modelAkun->insert_kelompok($nrpketua,$tahun,"0",$skema,$passwd))
		{
			$path_ktm1="/".$nrpketua."_".$tahun."/"."ktm_ketua_kelompok";
			$path_ktm2="/".$nrpketua."_".$tahun."/"."ktm_anggota_1";
			$path_ktm3="/".$nrpketua."_".$tahun."/"."ktm_anggota_2";
			$this->modelAkun->insert_mhs($nrpketua,$namaketua,$path_ktm1);
			$this->modelAkun->insert_mhs($nrp1,$nama1,$path_ktm2);
			$this->modelAkun->insert_mhs($nrp2,$nama2,$path_ktm3);
			$config['upload_path'] = './uploads/techno_its/'.$nrpketua."_".$tahun."/";
			if(!is_dir($config['upload_path'])){
				mkdir($config['upload_path'],0777,true);
			}
			$config['file_name']= 'ktm_ketua_kelompok'; 
	        $config['allowed_types'] = 'jpeg|png|gif|jpg';
	        $config['max_size'] = '2048';
	        $config['max_width']  = '1024';
	        $config['max_height']  = '768';
	        $config['overwrite'] = TRUE;
			//$this->load->library('upload',$config);
			$this->load->library('upload');
			$this->upload->initialize($config);
			if($this->upload->do_upload('file1')){
				$config['file_name']='ktm_anggota_1';
				$this->upload->initialize($config);
				if($this->upload->do_upload('file2')){
					$config['file_name']='ktm_anggota_2';
					$this->upload->initialize($config);
					if($this->upload->do_upload('file3')){
						//success
					}
					else{
						echo $this->upload->display_errors();
					}
				}
				else{
					echo $this->upload->display_errors();
				}
			}
			else{
				echo $this->upload->display_errors();
			}
		$this->modelAkun->insert_kelompok_mhs($nrpketua,$nrpketua,"0",$tahun);
		$this->modelAkun->insert_kelompok_mhs($nrpketua,$nrp1,"0",$tahun);
		$this->modelAkun->insert_kelompok_mhs($nrpketua,$nrp2,"0",$tahun);
		}
		else{
			//udah masuk jadi ketua kelompok lain
		}

	}*/
	
	
	
		
	//--------------------------------------------------- NOTIFIKASI ---------------------------------------------------
	
	
	public function waiting($page = 'waiting')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		$data['title'] = ucfirst($page); // Capitalize the first letter
		$this->load->view('pages/'.$page, $data);		
	}
	
	function denied()
	{
		
		$this->load->view('pages/denied');
	}
	
	function failed_register($page = 'failed_register')
	{		
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		$data['title'] = ucfirst($page); // Capitalize the first letter
		$this->load->view('pages/'.$page, $data);		
	}
	
	
	
	
}