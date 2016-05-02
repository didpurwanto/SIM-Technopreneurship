<?php

class Page extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->database();
		$this->load->model('akun_model','modelAkun');
		$this->load->model('monev_model','modelMonev');	
		$this->load->model('proposal_model','modelProposal');	
	}
	
	
	function dashboard()
	{	
		$data['isi'] = "page_web/dashboard";
		$this->load->view('sidebar/doskarbem', $data);		
	}
	
	function dashboard_mhs()
	{	
		$data['isi'] = "page_web/dashboard";
		$this->load->view('sidebar/mhs', $data);		
	}
		
	function update_password_mhs()
	{
		$data['isi'] = "page_web/update_password";
		$this->load->view('sidebar/mhs', $data);
	}
	
	function update_password_bt()
	{
		$id = $this->session->userdata('id_pengaju_proposal');
		$password_lama =$this->input->post('PasswordLama');
		$passwordBaru=$this->input->post('password');
		$bol=$this->modelAkun->cek_password_mhs($id,$password_lama);
		if($bol)
		{
			$this->modelAkun->change_password_mhs($id,$passwordBaru);
			redirect('notif/success_update_password');
		}
		else
		{
			redirect('notif/failed_update_password');
		}
	}
	
	function update_password_doskarbem()
	{
		$data['isi'] = "page_web/update_password_doskarbem";
		$this->load->view('sidebar/doskarbem', $data);
	}
	
	function update_password_doskarbem_bt()
	{
		$id = $this->session->userdata('email_doskarbem');
		$password_lama = $this->input->post('PasswordLama');
		$passwordBaru=$this->input->post('password');
		$bol=$this->modelAkun->cek_password_doskarbem($id,$password_lama);
		if($bol)
		{
			$this->modelAkun->change_password_doskarbem($id,$passwordBaru);
			redirect('notif/success_update_password_doskarbem');
		}
		else
		{
			redirect('notif/failed_update_password_doskarbem');
		}
		redirect('notif/success_update_password_doskarbem');
	}

	
	function approve_akun()
	{
		$data['result'] = $this->modelAkun->approve_akun();
		foreach($data['result'] as $rows)
		{
			$data['id_pengaju_proposal'] 		= $rows['id_pengaju_proposal'];
			$data['nrp'] 						= $rows['nrp'];
			$data['tahun_pengaju_proposal'] 	= $rows['tahun_pengaju_proposal'];
			$data['nama_skema'] 				= $rows['nama_skema'];
			$data['id_skema'] 					= $rows['id_skema'];	
		}	
		
		$data['isi'] = "page_web/approve_akun";
		$this->load->view('sidebar/doskarbem', $data);
	}
	function approve_akun_action()
	{
		$data['id_pengaju_proposal']=$this->uri->segment(3);
		$this->modelAkun->update_akun_aprrove($data['id_pengaju_proposal']);
		redirect(base_url('index.php/page/approve_akun/'));
	}
	/*function approve_akun_bt()
	{
		$data['tahun']= $this->uri->segment(3);
		$data['id_kelompok'] = $this->uri->segment(4);
		
		$data['result'] = $this->modelAkun->approve_akun_bt($data['id_kelompok'],$data['tahun']);
		foreach($data['result'] as $rows)
		{
			//$data['skema'] 			= $rows['skema'];
			$data['nrp']			= $rows['nrp'];
			$data['nama']			= $rows['nama'];
			$data['path_ktm']		= $rows['path_ktm'];
		}	
		
		$data['isi'] = "page_web/approve_akun_bt";
		$this->load->view('sidebar/karyawan', $data);
	}*/

	function approve_akun_bt()
	{
		$data['tahun']= $this->uri->segment(3);
		$data['skema']=$this->uri->segment(4);
		$data['id_pengaju_proposal'] = $this->uri->segment(5);
		$data['result2'] = $this->modelAkun->select_nama_skema($data['skema'],$data['tahun']);
		foreach($data['result2'] as $rows)
		{
			$data['nama_skema']= $rows['nama_skema'];
		}
		$data['result'] = $this->modelAkun->select_mhs($data['id_pengaju_proposal']);
		foreach($data['result'] as $rows)
		{
			$data['nrp'] = $rows['nrp'];
			$data['nama'] = $rows['nama'];
			$data['path_ktm'] = $rows['path_ktm'];
			$data['nama_jurusan'] = $rows['nama_jurusan'];
		}
		$data['isi'] = "page_web/approve_akun_bt";
		$this->load->view('sidebar/doskarbem', $data);
	}
	
	function data_akun_pmw()
	{
		$data['result'] = $this->modela->select_akun_pmw();
		foreach($data['result'] as $rows)
		{
			$data['id'] 	= $rows['id'];
			$data['nama'] 	= $rows['nama'];
			$data['nrp'] 	= $rows['nrp'];
			$data['skema'] 	= $rows['skema'];			
		}				
		
		$data['isi'] = "page_web/data_akun";
		$this->load->view('sidebar/karyawan', $data);
	}
	
	function data_akun_bri()
	{
		$data['result'] = $this->modela->select_akun_bri();
		foreach($data['result'] as $rows)
		{
			$data['id'] 	= $rows['id'];
			$data['nama'] 	= $rows['nama'];
			$data['nrp'] 	= $rows['nrp'];
			$data['skema'] 	= $rows['skema'];			
		}				
		
		$data['isi'] = "page_web/data_akun";
		$this->load->view('sidebar/karyawan', $data);
	}
	
	function mengajukan_proposal()
	{
		$data['isi'] = "page_web/mengajukan_proposal_form_proposal";
		$data['result'] = $this->modelAkun->select_dosen_pembimbing();
		$this->load->view('sidebar/mhs', $data);
		
	}
	
	function mengajukan_proposal_anggota()
	{
		$id = $this->session->userdata('id_pengaju_proposal');
		$tahun=$this->session->userdata('tahun');
		$skema = $this->session->userdata('skema');
		$data['result2'] = $this->modelAkun->select_nama_skema($skema,$tahun);
		foreach($data['result2'] as $rows)
		{
			$data['nama_skema']= $rows['nama_skema'];
		}
		//echo $id;
		$data['jurusan']= $this->modelAkun->select_jurusan();
		$judul = $this->input->post('judul');
		$dosen_pembimbing = $this->input->post('dosbing');
		$dana=$this->input->post('dana_diajukan');
		$data['jumlah_anggota'] =$this->input->post('jumlah_anggota');
		$abstraksi=$this->input->post('abstraksi');
		$config['upload_path'] = './uploads/techno_its/'.$id."_".$tahun."_".$data['nama_skema']."/";
		$config['file_name']= 'proposal'; 
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '3072';
        $config['overwrite'] = TRUE;
        $this->load->library('upload',$config);
		if($this->upload->do_upload()){
			$file_ext = ".pdf";
			$path_file_proposal="/".$id."_".$tahun."_".$data['nama_skema']."/"."proposal".$file_ext;
			$this->modelAkun->update_proposal($id,$tahun,$skema,$judul,$dana,$abstraksi,$path_file_proposal,$dosen_pembimbing);
			$data['isi'] = "page_web/mengajukan_proposal_form_anggota";
			$this->load->view('sidebar/mhs', $data);
		}
		else
		{
			echo $this->upload->display_errors();
		}
	}
	
	function mengajukan_proposal_hasil()
	{
		$jumlah_anggota=$this->input->post('jumlah_anggota');
		$id = $this->session->userdata('id_pengaju_proposal');
		$tahun=$this->session->userdata('tahun');
		$skema = $this->session->userdata('skema');
		$nrpketua=$this->session->userdata('nrpketua');
		$data['result2'] = $this->modelAkun->select_nama_skema($skema,$tahun);
		foreach($data['result2'] as $rows)
		{
			$data['nama_skema']= $rows['nama_skema'];
		}
		$config['upload_path'] = './uploads/techno_its/'.$id."_".$tahun."_".$data['nama_skema']."/";
        $config['allowed_types'] = 'jpeg|png|gif|jpg';
        $config['max_size'] = '2048';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        $config['overwrite'] = TRUE;
        $this->load->library('upload');
		for($i=1;$i<=$jumlah_anggota;$i++)
		{
			$config['file_name']='ktm_anggota_'.$i;
			$nrp=$this->input->post('nrp_anggota'.$i);
			$nama=$this->input->post('nama_anggota'.$i);
			$jurusan=$this->input->post('jurusan_anggota'.$i);
			$telepon = $this->input->post('telepon'.$i);
			$email=$this->input->post('email'.$i);
			$file = "file".$i;
			if($this->modelAkun->cek_data_mhs($nrp))
			{
				//echo "masuk";
				$this->upload->initialize($config);
				if($this->upload->do_upload($file))
				{
					//echo "masuk";
					$data['upload_data'] = $this->upload->data();
					$file_ext = $data['upload_data']['file_ext'];
					$path_ktm ="/".$id."_".$tahun."_".$data['nama_skema']."/"."ktm_anggota_".$i.$file_ext;
					$this->modelAkun->insert_mhs($nrp,$nama,$path_ktm,$jurusan,$email,$telepon);				
				}
				else
				{
					//echo "masuk bro";
					echo $this->upload->display_errors();
				}
			}
			$this->modelAkun->insert_mahasiswa_pengaju_proposal($id,$nrp,"0");	
		}
		$this->modelAkun->update_proposal_A1($id);
		$data['result'] = $this->modelAkun->select_data_proposal($id,$tahun,$skema,$nrpketua);
				foreach($data['result'] as $rows)
				{
					$data['judul'] = $rows['judul_proposal'];
					$data['nama_doskarbem'] = $rows['nama_doskarbem'];
					$data['dana'] = $rows['dana_diajukan'];
					$data['abstraksi']= $rows['abstraksi'];
					$data['nama'] = $rows['nama'];
					$data['jurusan'] = $rows['nama_jurusan'];
					$data['nrp'] = $rows['nrp'];
					$data['status'] = $rows['status_pengaju'];
				}
				$data['result2']= $this->modelAkun->select_anggota_kelompok($id,$tahun,$skema,$nrpketua);
				$this->session->set_userdata('status', $data['status']);
				$data['isi'] = "page_web/mengajukan_proposal_form_hasil";
				$this->load->view('sidebar/mhs', $data);
	}
	
	function mengajukan_proposal_submit()
	{
		redirect('notif/success_mengajukan_proposal');
	}
	
	function status_proposal()
	{
		$id = $this->session->userdata('id_pengaju_proposal');
		$tahun=$this->session->userdata('tahun');
		$skema = $this->session->userdata('skema');
		$nrpketua=$this->session->userdata('nrpketua');
		$data['result'] = $this->modelAkun->select_data_proposal($id,$tahun,$skema,$nrpketua);
		foreach($data['result'] as $rows)
		{
			$data['judul'] = $rows['judul_proposal'];
			$data['nama_doskarbem'] = $rows['nama_doskarbem'];
			$data['dana_diajukan'] = $rows['dana_diajukan'];
			if($rows['dana_disetujui']==null){
				$data['dana_disetujui']="-";
			}
			else{
				$data['dana_disetujui'] = $rows['dana_disetujui'];
			}
			$data['abstraksi']		= $rows['abstraksi'];
			$data['nama'] 			= $rows['nama'];
			$data['jurusan'] 		= $rows['nama_jurusan'];
			$data['nrp'] 			= $rows['nrp'];
			$data['nama_status']	= $rows['nama_status'];
			$data['path_proposal'] = $rows['path_proposal'];
			$data['telepon'] 		= $rows['telepon'];
			$data['email_mahasiswa'] = $rows['email_mahasiswa'];
		}
		$data['result2']= $this->modelAkun->select_anggota_kelompok($id,$tahun,$skema,$nrpketua);
		$data['isi'] = "page_web/status_proposal";
		$this->load->view('sidebar/mhs', $data);
	}
	
	function monev_bulanan()
	{
		$data['isi'] = "page_web/monev_bulanan";
		$this->load->view('sidebar/mhs', $data);
	}

	function monev_bulanan_hasil()
	{
		$id= $this->session->userdata('id_pengaju_proposal');
		$tahun= $this->session->userdata('tahun');
		$skema=$this->session->userdata('skema');
		$periode_monev = $this->modelMonev->get_periode_monev($id);
		$periode_monev++;
		$kendala = $this->input->post('kendala');
		$data['result2'] = $this->modelAkun->select_nama_skema($skema,$tahun);
		foreach($data['result2'] as $rows)
		{
			$data['nama_skema']= $rows['nama_skema'];
		}
		$config['upload_path'] = './uploads/techno_its/'.$id."_".$tahun."_".$data['nama_skema']."/";
        $config['allowed_types'] = 'rar|zip';
        $config['max_size'] = '3072';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        $config['overwrite'] = TRUE;
        $config['file_name']= 'monev_1_bulan_'.$periode_monev; 
        $this->load->library('upload',$config);
        if($this->upload->do_upload()){
			$data['upload_data'] = $this->upload->data();
					$file_ext = $data['upload_data']['file_ext'];
			$path_file_monev="/".$id."_".$tahun."_".$data['nama_skema']."/"."monev_1_bulan_".$periode_monev.$file_ext;
			//echo $path_file_monev;
			$id_monev=$this->modelMonev->insert_monev_1_bulan($id,$path_file_monev,$periode_monev,$kendala);
			//$id_monev=1;
			$counter = 1;

			//penginputan pertanyan 1 sampai 48 
			$counter_aspek=1;
			for($i=1;$i<=48;$i++)
			{
				$aspek=$this->input->post('aspek'.$counter_aspek.'_'.$counter);
				//echo $aspek;
				//echo "<br />";
				$this->modelMonev->insert_jawaban_monev($id_monev,$i,$aspek);
				if($counter==3)
				{
					$counter=0;
					$counter_aspek++;
				}
				$counter++;
			}
			//echo $i;
			for($j=1;$j<=5;$j++)
			{
				$omset=$this->input->post('omset_'.$j);
				$this->modelMonev->insert_jawaban_monev($id_monev,$i,$omset);
				//echo $omset;
				//echo "<br />";
				$i++;
			}
			for($j=1;$j<=5;$j++)
			{
				$keuntungan=$this->input->post('keuntungan_'.$j);
				$this->modelMonev->insert_jawaban_monev($id_monev,$i,$keuntungan);
				//echo $keuntungan;
				//echo "<br />";
				$i++;
			}
			//echo $i;

			$this->load->view('page_notif/success_monev_bulanan');
		}
		else
		{
			echo $this->upload->display_errors();
		}
	}
	
	function monev_semester()
	{
		$data['isi'] = "page_web/monev_semester";
		$this->load->view('sidebar/mhs', $data);
	}

	function monev_semester_hasil()
	{
		$data['isi'] = "page_web/monev_semester_hasil";
		$this->load->view('sidebar/mhs', $data);
	}
	
	function penilaian_monev_bulanan_pilih()
	{
		$data['isi'] = "page_web/penilaian_monev_bulanan_pilih";
		$this->load->view('sidebar/bem', $data);
	}
	
	
	
	function penilaian_monev_semester_pilih()
	{
		$data['isi'] = "page_web/penilaian_monev_semester_pilih";
		$this->load->view('sidebar/bem', $data);
	}
	
	
	
	function rekap_monev_bulanan_pilih()
	{
		$data['isi'] = "page_web/rekap_monev_bulanan_pilih";
		$this->load->view('sidebar/bem', $data);
	}
	
	
	
	function rekap_monev_semester_pilih()
	{
		$data['isi'] = "page_web/rekap_monev_semester_pilih";
		$this->load->view('sidebar/bem', $data);
	}
	
	
	
	function rekap_monev_bulanan()
	{
		$data['isi'] = "page_web/rekap_monev_bulanan";
		$this->load->view('sidebar/doskarbem', $data);
	}
	
	function rekap_monev_bulanan_p2km()
	{
		$data['isi'] = "page_web/rekap_monev_bulanan_p2km";
		$this->load->view('sidebar/p2km', $data);
	}
	
	function penilaian_monev_rekap_bulanan()
	{
		$data['isi'] = "page_web/penilaian_monev_rekap_bulanan";
		$this->load->view('sidebar/bem', $data);
	}
	
	function penilaian_monev_rekap_bulanan_p2km()
	{
		$data['isi'] = "page_web/penilaian_monev_rekap_bulanan_p2km";
		$this->load->view('sidebar/p2km', $data);
	}
	
	
	function rekap_monev_bulanan_detail()
	{
		$data['isi'] = "page_web/rekap_monev_bulanan_detail";
		$this->load->view('sidebar/bem', $data);
	}
	
	function rekap_monev_bulanan_detail_p2km()
	{
		$data['isi'] = "page_web/rekap_monev_bulanan_detail_p2km";
		$this->load->view('sidebar/p2km', $data);
	}
	
	
	function rekap_monev_semester()
	{
		$data['isi'] = "page_web/rekap_monev_semester";
		$this->load->view('sidebar/bem', $data);
	}
	
	function rekap_monev_semester_p2km()
	{
		$data['isi'] = "page_web/rekap_monev_semester_p2km";
		$this->load->view('sidebar/p2km', $data);
	}
	
	function penilaian_monev_rekap_semester()
	{
		$data['isi'] = "page_web/penilaian_monev_rekap_semester";
		$this->load->view('sidebar/bem', $data);
	}
	
	function penilaian_monev_rekap_semester_p2km()
	{
		$data['isi'] = "page_web/penilaian_monev_rekap_semester_p2km";
		$this->load->view('sidebar/p2km', $data);
	}
	
	function rekap_monev_semester_detail()
	{
		$data['isi'] = "page_web/rekap_monev_semester_detail";
		$this->load->view('sidebar/bem', $data);
	}

	function rekap_monev_semester_detail_p2km()
	{
		$data['isi'] = "page_web/rekap_monev_semester_detail_p2km";
		$this->load->view('sidebar/p2km', $data);
	}	
	
	function penilaian_monev_bulanan()
	{
		$data['isi'] = "page_web/penilaian_monev_bulanan";
		$this->load->view('sidebar/bem', $data);
	}
	
	
	function penilaian_monev_bulanan_p2km()
	{
		$data['isi'] = "page_web/penilaian_monev_bulanan_p2km";
		$this->load->view('sidebar/p2km', $data);
	}
	
	function penilaian_monev_semester()
	{
		$data['isi'] = "page_web/penilaian_monev_semester";
		$this->load->view('sidebar/bem', $data);
	}
	
	function penilaian_monev_semester_p2km()
	{
		$data['isi'] = "page_web/penilaian_monev_semester_p2km";
		$this->load->view('sidebar/p2km', $data);
	}
		
	function penilaian_monev_bulanan_rekomendasi_p2km()
	{
		$data['isi'] = "page_web/penilaian_monev_bulanan_rekomendasi_p2km";
		$this->load->view('sidebar/p2km', $data);
	}
	
	
	function penilaian_monev_semester_rekomendasi_p2km()
	{
		$data['isi'] = "page_web/penilaian_monev_semester_rekomendasi_p2km";
		$this->load->view('sidebar/p2km', $data);
	}
	
	function monev_bulanan_submit()
	{
		redirect('notif/success_monev_bulanan');
	}
	
	function pilih_monev_bulanan()
	{
		$data['isi'] = "page_web/pilih_monev_bulanan";
		$this->load->view('sidebar/mhs', $data);
	}
	
	function pilih_monev_semesteran()
	{
		$data['isi'] = "page_web/pilih_monev_semesteran";
		$this->load->view('sidebar/mhs', $data);
	}
	
	function update_status_ijazah_pilih()
	{
		$data['isi'] = "page_web/update_status_ijazah_pilih";
		$this->load->view('sidebar/doskarbem', $data);
	}
	
	function update_status_ijazah_rekap()
	{
		$tahun=$this->input->post('tahun');
		$skema=$this->input->post('skema');
		$data['isi'] = "page_web/update_status_ijazah_rekap";
		$this->load->view('sidebar/karyawan', $data);
	}
	
	function penyelesaian_usaha_pilih()
	{
		$data['isi'] = "page_web/penyelesaian_usaha_pilih";
		$this->load->view('sidebar/doskarbem', $data);		
	}
	
	function penyelesaian_usaha_rekap()
	{
		$data['isi'] = "page_web/penyelesaian_usaha_rekap";
		$this->load->view('sidebar/karyawan', $data);		
	}
	
	function penilaian_proposal_pilih()
	{
		$data['isi'] = "page_web/penilaian_proposal_pilih";
		$this->load->view('sidebar/p2km', $data);
	}
	
	function penilaian_proposal_rekap()
	{
		$data['isi'] = "page_web/penilaian_proposal_rekap";
		$this->load->view('sidebar/p2km', $data);
	}
	
	function rekap_proposal_lolos_pilih()
	{
		$data['isi'] = "page_web/rekap_proposal_lolos_pilih";
		$this->load->view('sidebar/p2km', $data);
	}
	
	function rekap_proposal_lolos()
	{
		$data['isi'] = "page_web/rekap_proposal_lolos";
		$this->load->view('sidebar/p2km', $data);
	}
	
	function rekap_proposal_lolos_detail()
	{
		$data['isi'] = "page_web/rekap_proposal_lolos_detail";
		$this->load->view('sidebar/p2km', $data);
	}
	
	function persetujuan_pengunduran_diri_pilih()
	{
		$data['isi'] = "page_web/persetujuan_pengunduran_diri_pilih";
		$this->load->view('sidebar/doskarbem', $data);
	}
	
	function persetujuan_pengunduran_diri_pilih_pembimbing()
	{
		$data['isi'] = "page_web/persetujuan_pengunduran_diri_pilih_pembimbing";
		$this->load->view('sidebar/pembimbing', $data);
	}
	
	function persetujuan_pengunduran_diri_rekap()
	{
		$data['isi'] = "page_web/persetujuan_pengunduran_diri_rekap";
		$this->load->view('sidebar/doskarbem', $data);
	}
	
	function persetujuan_pengunduran_diri_detail()
	{
		$data['isi'] = "page_web/persetujuan_pengunduran_diri_detail";
		$this->load->view('sidebar/doskarbem', $data);
	}
	
	
	
	function persetujuan_pengunduran_diri_rekap_pembimbing()
	{
		$data['isi'] = "page_web/persetujuan_pengunduran_diri_rekap_pembimbing";
		$this->load->view('sidebar/pembimbing', $data);
	}
	
	function pengunduran_diri()
	{
		$id = $this->session->userdata('id_pengaju_proposal');
		$tahun=$this->session->userdata('tahun');
		$skema = $this->session->userdata('skema');
		$nrpketua=$this->session->userdata('nrpketua');
		$data['result'] = $this->modelAkun->select_data_proposal($id,$tahun,$skema,$nrpketua);
		foreach($data['result'] as $rows)
		{
			$data['judul'] = $rows['judul_proposal'];
			$data['nama_doskarbem'] = $rows['nama_doskarbem'];
			$data['dana_diajukan'] = $rows['dana_diajukan'];
			if($rows['dana_disetujui']==null){
				$data['dana_disetujui']="-";
			}
			else{
				$data['dana_disetujui'] = $rows['dana_disetujui'];
			}
			$data['abstraksi']		= $rows['abstraksi'];
			$data['nama'] 			= $rows['nama'];
			$data['jurusan'] 		= $rows['nama_jurusan'];
			$data['nrp'] 			= $rows['nrp'];
			$data['nama_status']	= $rows['nama_status'];
			$data['path_proposal'] = $rows['path_proposal'];
			$data['telepon'] 		= $rows['telepon'];
			$data['email_mahasiswa'] = $rows['email_mahasiswa'];
		}
		$data['result2']= $this->modelAkun->select_anggota_kelompok($id,$tahun,$skema,$nrpketua);
		$data['isi'] = "page_web/pengunduran_diri";
		$this->load->view('sidebar/mhs', $data);
	}
	
	function pengunduran_diri_action()
	{
		$id = $this->session->userdata('id_pengaju_proposal');
		$tahun=$this->session->userdata('tahun');
		$skema = $this->session->userdata('skema');
		$alasan=$this->input->post('alasan');
		$data['result2'] = $this->modelAkun->select_nama_skema($skema,$tahun);
		foreach($data['result2'] as $rows)
		{
			$data['nama_skema']= $rows['nama_skema'];
		}
		$config['upload_path'] = './uploads/techno_its/'.$id."_".$tahun."_".$data['nama_skema']."/";
		$config['file_name']= 'pengunduran_diri'; 
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '3072';
        $config['overwrite'] = TRUE;
        $this->load->library('upload',$config);
		if($this->upload->do_upload()){
			$file_ext = ".pdf";
			$path_file_pengunduran_diri="/".$id."_".$tahun."_".$data['nama_skema']."/"."pengunduran_diri".$file_ext;
			$this->modelAkun->update_proposal_pengunduran_diri($id,$path_file_pengunduran_diri,$alasan);
		}
		else
		{
			echo $this->upload->display_errors();
		}
		redirect('notif/success_pengunduran_diri');
	}
	
	
	
	function rekap_pengunduran_diri_pembimbing()
	{
		$data['isi'] = "page_web/rekap_pengunduran_diri_pembimbing";
		$this->load->view('sidebar/pembimbing', $data);
	}
	
	function review_monev_bulanan_pilih_pembimbing()
	{
		$data['isi'] = "page_web/review_monev_bulanan_pilih_pembimbing";
		$this->load->view('sidebar/doskarbem', $data);
	}
	
	function review_monev_bulanan_rekap()
	{
		$tahun = $this->input->post('tahun');
		$skema = $this->input->post('skema');
		$data['periode'] = $this->input->post('periode');
		
		$data['result'] = $this->modelMonev->review_monev_bulanan_rekap($tahun,$skema,$data['periode']);
		foreach($data['result'] as $rows)
		{
			$data['id_pengaju_proposal'] 		= $rows['id_pengaju_proposal'];
			$data['nrp'] 						= $rows['nrp'];
			$data['judul_proposal'] 			= $rows['judul_proposal'];			
			$data['dosen_pembimbing'] 			= $rows['dosen_pembimbing'];			
			
		}
		 
		$data['isi'] = "page_web/review_monev_bulanan_rekap";
		$this->load->view('sidebar/doskarbem', $data);
	}
	
	function review_monev_bulanan()
	{
		$id= $this->uri->segment(3);
		$periode=$this->uri->segment(4);
		//echo $periode;
		$data['result'] = $this->modelMonev->review_monev_bulanan($periode,$id);
		foreach($data['result'] as $rows)
		{
			$data['jawaban_1_1'] 		= $rows['jawaban_1_1'];
			$data['jawaban_1_2'] 		= $rows['jawaban_1_2'];
			$data['jawaban_1_3'] 		= $rows['jawaban_1_3'];
			
			$data['jawaban_2_1'] 		= $rows['jawaban_2_1'];
			$data['jawaban_2_2'] 		= $rows['jawaban_2_2'];
			$data['jawaban_2_3'] 		= $rows['jawaban_2_3'];
			
			$data['jawaban_3_1'] 		= $rows['jawaban_3_1'];
			$data['jawaban_3_2'] 		= $rows['jawaban_3_2'];
			$data['jawaban_3_3'] 		= $rows['jawaban_3_3'];
			
			$data['jawaban_4_1'] 		= $rows['jawaban_4_1'];
			$data['jawaban_4_2'] 		= $rows['jawaban_4_2'];
			$data['jawaban_4_3'] 		= $rows['jawaban_4_3'];
			
			$data['jawaban_5_1'] 		= $rows['jawaban_5_1'];
			$data['jawaban_5_2'] 		= $rows['jawaban_5_2'];
			$data['jawaban_5_3'] 		= $rows['jawaban_5_3'];
			
			$data['jawaban_6_1'] 		= $rows['jawaban_6_1'];
			$data['jawaban_6_2'] 		= $rows['jawaban_6_2'];
			$data['jawaban_6_3'] 		= $rows['jawaban_6_3'];
			
			$data['jawaban_7_1'] 		= $rows['jawaban_7_1'];
			$data['jawaban_7_2'] 		= $rows['jawaban_7_2'];
			$data['jawaban_7_3'] 		= $rows['jawaban_7_3'];
			
			$data['jawaban_8_1'] 		= $rows['jawaban_8_1'];
			$data['jawaban_8_2'] 		= $rows['jawaban_8_2'];
			$data['jawaban_8_3'] 		= $rows['jawaban_8_3'];
			
			$data['jawaban_9_1'] 		= $rows['jawaban_9_1'];
			$data['jawaban_9_2'] 		= $rows['jawaban_9_2'];
			$data['jawaban_9_3'] 		= $rows['jawaban_9_3'];
			
			$data['jawaban_10_1'] 		= $rows['jawaban_10_1'];
			$data['jawaban_10_2'] 		= $rows['jawaban_10_2'];
			$data['jawaban_10_3'] 		= $rows['jawaban_10_3'];
			
			$data['jawaban_11_1'] 		= $rows['jawaban_11_1'];
			$data['jawaban_11_2'] 		= $rows['jawaban_11_2'];
			$data['jawaban_11_3'] 		= $rows['jawaban_11_3'];
			
			$data['jawaban_12_1'] 		= $rows['jawaban_12_1'];
			$data['jawaban_12_2'] 		= $rows['jawaban_12_2'];
			$data['jawaban_12_3'] 		= $rows['jawaban_12_3'];
			
			$data['jawaban_13_1'] 		= $rows['jawaban_13_1'];
			$data['jawaban_13_2'] 		= $rows['jawaban_13_2'];
			$data['jawaban_13_3'] 		= $rows['jawaban_13_3'];
			
			$data['jawaban_14_1'] 		= $rows['jawaban_14_1'];
			$data['jawaban_14_2'] 		= $rows['jawaban_14_2'];
			$data['jawaban_14_3'] 		= $rows['jawaban_14_3'];
			
			$data['jawaban_15_1'] 		= $rows['jawaban_15_1'];
			$data['jawaban_15_2'] 		= $rows['jawaban_15_2'];
			$data['jawaban_15_3'] 		= $rows['jawaban_15_3'];
			
			$data['jawaban_16_1'] 		= $rows['jawaban_16_1'];
			$data['jawaban_16_2'] 		= $rows['jawaban_16_2'];
			$data['jawaban_16_3'] 		= $rows['jawaban_16_3'];
			
			$data['kendala'] 			= $rows['kendala'];
			$data['catatan_dan_saran_pembimbing'] 			= $rows['catatan_dan_saran_pembimbing'];
			$data['path_file_monev_1_bulan'] = $rows['path_file_monev_1_bulan'];
			
			$data['jumlah_omset_minggu1'] = $rows['jumlah_omset_minggu1'];
			$data['jumlah_omset_minggu2'] = $rows['jumlah_omset_minggu2'];
			$data['jumlah_omset_minggu3'] = $rows['jumlah_omset_minggu3'];
			$data['jumlah_omset_minggu4'] = $rows['jumlah_omset_minggu4'];
			$data['jumlah_omset_minggu5'] = $rows['jumlah_omset_minggu5'];
			
			$data['jumlah_keuntungan_minggu1'] = $rows['jumlah_keuntungan_minggu1'];
			$data['jumlah_keuntungan_minggu2'] = $rows['jumlah_keuntungan_minggu2'];
			$data['jumlah_keuntungan_minggu3'] = $rows['jumlah_keuntungan_minggu3'];
			$data['jumlah_keuntungan_minggu4'] = $rows['jumlah_keuntungan_minggu4'];
			$data['jumlah_keuntungan_minggu5'] = $rows['jumlah_keuntungan_minggu5'];
			//echo $rows['catatan_dan_saran_pembimbing'];
		}
		$data['isi'] = "page_web/review_monev_bulanan";
		$this->load->view('sidebar/doskarbem', $data);
	}
	
	function review_monev_bulanan_pilih_p2km()
	{
		$data['isi'] = "page_web/review_monev_bulanan_pilih_p2km";
		$this->load->view('sidebar/doskarbem', $data);
	}
	
	function review_monev_bulanan_rekap_p2km()
	{
		$tahun = $this->input->post('tahun');
		$skema = $this->input->post('skema');
		$data['periode'] = $this->input->post('periode');
		
		$data['result'] = $this->modelMonev->review_monev_bulanan_rekap($tahun,$skema,$data['periode']);
		foreach($data['result'] as $rows)
		{
			$data['id_pengaju_proposal'] 		= $rows['id_pengaju_proposal'];
			$data['nrp'] 						= $rows['nrp'];
			$data['judul_proposal'] 			= $rows['judul_proposal'];			
			$data['dosen_pembimbing'] 			= $rows['dosen_pembimbing'];			
			
		}
		 
		$data['isi'] = "page_web/review_monev_bulanan_rekap_p2km";
		$this->load->view('sidebar/doskarbem', $data);
	}
	
	function review_monev_bulanan_p2km()
	{
		$id= $this->uri->segment(3);
		$periode=$this->uri->segment(4);
		//echo $periode;
		$data['result'] = $this->modelMonev->review_monev_bulanan($periode,$id);
		foreach($data['result'] as $rows)
		{
			$data['jawaban_1_1'] 		= $rows['jawaban_1_1'];
			$data['jawaban_1_2'] 		= $rows['jawaban_1_2'];
			$data['jawaban_1_3'] 		= $rows['jawaban_1_3'];
			
			$data['jawaban_2_1'] 		= $rows['jawaban_2_1'];
			$data['jawaban_2_2'] 		= $rows['jawaban_2_2'];
			$data['jawaban_2_3'] 		= $rows['jawaban_2_3'];
			
			$data['jawaban_3_1'] 		= $rows['jawaban_3_1'];
			$data['jawaban_3_2'] 		= $rows['jawaban_3_2'];
			$data['jawaban_3_3'] 		= $rows['jawaban_3_3'];
			
			$data['jawaban_4_1'] 		= $rows['jawaban_4_1'];
			$data['jawaban_4_2'] 		= $rows['jawaban_4_2'];
			$data['jawaban_4_3'] 		= $rows['jawaban_4_3'];
			
			$data['jawaban_5_1'] 		= $rows['jawaban_5_1'];
			$data['jawaban_5_2'] 		= $rows['jawaban_5_2'];
			$data['jawaban_5_3'] 		= $rows['jawaban_5_3'];
			
			$data['jawaban_6_1'] 		= $rows['jawaban_6_1'];
			$data['jawaban_6_2'] 		= $rows['jawaban_6_2'];
			$data['jawaban_6_3'] 		= $rows['jawaban_6_3'];
			
			$data['jawaban_7_1'] 		= $rows['jawaban_7_1'];
			$data['jawaban_7_2'] 		= $rows['jawaban_7_2'];
			$data['jawaban_7_3'] 		= $rows['jawaban_7_3'];
			
			$data['jawaban_8_1'] 		= $rows['jawaban_8_1'];
			$data['jawaban_8_2'] 		= $rows['jawaban_8_2'];
			$data['jawaban_8_3'] 		= $rows['jawaban_8_3'];
			
			$data['jawaban_9_1'] 		= $rows['jawaban_9_1'];
			$data['jawaban_9_2'] 		= $rows['jawaban_9_2'];
			$data['jawaban_9_3'] 		= $rows['jawaban_9_3'];
			
			$data['jawaban_10_1'] 		= $rows['jawaban_10_1'];
			$data['jawaban_10_2'] 		= $rows['jawaban_10_2'];
			$data['jawaban_10_3'] 		= $rows['jawaban_10_3'];
			
			$data['jawaban_11_1'] 		= $rows['jawaban_11_1'];
			$data['jawaban_11_2'] 		= $rows['jawaban_11_2'];
			$data['jawaban_11_3'] 		= $rows['jawaban_11_3'];
			
			$data['jawaban_12_1'] 		= $rows['jawaban_12_1'];
			$data['jawaban_12_2'] 		= $rows['jawaban_12_2'];
			$data['jawaban_12_3'] 		= $rows['jawaban_12_3'];
			
			$data['jawaban_13_1'] 		= $rows['jawaban_13_1'];
			$data['jawaban_13_2'] 		= $rows['jawaban_13_2'];
			$data['jawaban_13_3'] 		= $rows['jawaban_13_3'];
			
			$data['jawaban_14_1'] 		= $rows['jawaban_14_1'];
			$data['jawaban_14_2'] 		= $rows['jawaban_14_2'];
			$data['jawaban_14_3'] 		= $rows['jawaban_14_3'];
			
			$data['jawaban_15_1'] 		= $rows['jawaban_15_1'];
			$data['jawaban_15_2'] 		= $rows['jawaban_15_2'];
			$data['jawaban_15_3'] 		= $rows['jawaban_15_3'];
			
			$data['jawaban_16_1'] 		= $rows['jawaban_16_1'];
			$data['jawaban_16_2'] 		= $rows['jawaban_16_2'];
			$data['jawaban_16_3'] 		= $rows['jawaban_16_3'];
			
			$data['kendala'] 			= $rows['kendala'];
			$data['catatan_dan_saran_pembimbing'] 			= $rows['catatan_dan_saran_pembimbing'];
			$data['path_file_monev_1_bulan'] = $rows['path_file_monev_1_bulan'];
			
			
			$data['jumlah_omset_minggu1'] = $rows['jumlah_omset_minggu1'];
			$data['jumlah_omset_minggu2'] = $rows['jumlah_omset_minggu2'];
			$data['jumlah_omset_minggu3'] = $rows['jumlah_omset_minggu3'];
			$data['jumlah_omset_minggu4'] = $rows['jumlah_omset_minggu4'];
			$data['jumlah_omset_minggu5'] = $rows['jumlah_omset_minggu5'];
			
			$data['jumlah_keuntungan_minggu1'] = $rows['jumlah_keuntungan_minggu1'];
			$data['jumlah_keuntungan_minggu2'] = $rows['jumlah_keuntungan_minggu2'];
			$data['jumlah_keuntungan_minggu3'] = $rows['jumlah_keuntungan_minggu3'];
			$data['jumlah_keuntungan_minggu4'] = $rows['jumlah_keuntungan_minggu4'];
			$data['jumlah_keuntungan_minggu5'] = $rows['jumlah_keuntungan_minggu5'];
		}
		$data['isi'] = "page_web/review_monev_bulanan_p2km";
		$this->load->view('sidebar/doskarbem', $data);
	}
	
	
	
	function review_monev_semester_pilih_pembimbing()
	{
		$data['isi'] = "page_web/review_monev_semester_pilih_pembimbing";
		$this->load->view('sidebar/pembimbing', $data);
	}
	
	function review_monev_semester_rekap()
	{
		$data['isi'] = "page_web/review_monev_semester_rekap";
		$this->load->view('sidebar/pembimbing', $data);
	}
	
	function review_monev_semester()
	{
		$data['isi'] = "page_web/review_monev_semester";
		$this->load->view('sidebar/pembimbing', $data);
	}
	
	function berita()
	{
		$this->load->view('page_web/berita');
		
	}

	function rekap_proposal_semua_doskarbem()
	{
		
		$data['result'] = $this->modelProposal->rekap_proposal_semua_doskarbem();
		foreach($data['result'] as $rows)
		{
			$data['id_pengaju_proposal'] 		= $rows['id_pengaju_proposal'];
			$data['tahun_pengaju_proposal'] 	= $rows['tahun_pengaju_proposal'];
			$data['nama_skema'] 				= $rows['nama_skema'];
			
			$data['nrp'] 						= $rows['nrp'];
			$data['judul_proposal'] 			= $rows['judul_proposal'];
			$data['pembimbing'] 				= $rows['dosen_pembimbing'];
			$data['nama_status'] 				= $rows['nama_status'];	
		}
		
		$data['isi'] = "page_web/rekap_proposal_semua_doskarbem";
		$this->load->view('sidebar/doskarbem', $data);
	}
	
	function rekap_proposal_semua_detail_doskarbem()
	{
		$data['id_pengaju_proposal']=$this->uri->segment(3);
		$data['tahun_pengaju_proposal']=$this->uri->segment(4);
		$data['skema']=$this->uri->segment(5);
		$data['nrp']=$this->uri->segment(6);
		
		$data['result'] = $this->modelAkun->select_data_proposal($data['id_pengaju_proposal'],$data['tahun_pengaju_proposal'],$data['skema'],$data['nrp']);
		foreach($data['result'] as $rows)
		{
			$data['judul'] = $rows['judul_proposal'];
			$data['nama_doskarbem'] = $rows['nama_doskarbem'];
			$data['dana_diajukan'] = $rows['dana_diajukan'];
			if($rows['dana_disetujui']==null){
				$data['dana_disetujui']="-";
			}
			else{
				$data['dana_disetujui'] = $rows['dana_disetujui'];
			}
			$data['abstraksi']		= $rows['abstraksi'];
			$data['nama'] 			= $rows['nama'];
			$data['jurusan'] 		= $rows['nama_jurusan'];
			$data['nrp'] 			= $rows['nrp'];
			$data['nama_status']	= $rows['nama_status'];
			$data['path_proposal'] 	= $rows['path_proposal'];
			$data['telepon'] 		= $rows['telepon'];
			$data['email_mahasiswa'] = $rows['email_mahasiswa'];
			
		}
		$data['result2']= $this->modelAkun->select_anggota_kelompok($data['id_pengaju_proposal'],$data['tahun_pengaju_proposal'],$data['skema'],$data['nrp']);
		
		$data['isi'] = "page_web/rekap_proposal_semua_detail_doskarbem";
		$this->load->view('sidebar/doskarbem', $data);
	}
	
	function ganti_ketua()
	{
		$id=$this->session->userdata('id_pengaju_proposal');
		$tahun=$this->session->userdata('tahun');
		$skema=$this->session->userdata('skema');
		$nrpketua=$this->session->userdata('nrpketua');
		$data['anggota']= $this->modelAkun->select_anggota_kelompok($id,$tahun,$skema,$nrpketua);
		
		$data['isi'] = "page_web/ganti_ketua";
		$this->load->view('sidebar/mhs',$data);
		
	}
	function ganti_ketua_action()
	{
		$id=$this->session->userdata('id_pengaju_proposal');
		$tahun=$this->session->userdata('tahun');
		$skema=$this->session->userdata('skema');
		$nrpketuaLama=$this->session->userdata('nrpketua');

		$nrpketuaBaru=$this->input->post('anggota');
		//$nrpketuaBaru="5111100170";
		$passwordBaru=$this->input->post('password');
		if($this->modelAkun->cek_ketua($tahun,$skema,$nrpketuaBaru))
		{
			$this->modelAkun->update_ketua_lama($id,$nrpketuaLama);
			$this->modelAkun->update_ketua_baru_password($id,$nrpketuaBaru,$passwordBaru);
			$this->session->sess_destroy();
			redirect('notif/success_ganti_ketua');
		}
		else
		{
			redirect('notif/failed_ganti_ketua');
		}
	}
	
	function status_kelompok_saat_ini()
	{
		$data['isi'] = "page_web/status_kelompok_saat_ini";
		$this->load->view('sidebar/mhs',$data);
	}
	
	function tambah_berita()
	{
		$data['isi'] = "page_web/tambah_berita";
		$this->load->view('sidebar/doskarbem',$data);
	}
	
	function tambah_berita_bt()
	{
		redirect('notif/success_tambah_berita');
		
	}
	
	//MONITORING DAN EVALUASI
	
	function monev_bulanan_mhs()
	{
		$id= $this->session->userdata('id_pengaju_proposal');
		$tahun= $this->session->userdata('tahun');
		$skema=$this->session->userdata('skema');
		$data['periode_monev'] = $this->modelMonev->get_periode_monev($id);
		$data['periode_monev']++;
		$data['pertanyaan_monev']=$this->modelMonev->get_pertanyaan_monev();
		$i=1;
		foreach($data['pertanyaan_monev'] as $rows)
		{
			$data['id_pertanyaan'.$i] = $rows['id_pertanyaan_monev'];
			$data['nama_pertanyaan'.$i]=$rows['nama_pertanyaan_monev'];
			$i++;
		}
		$data['isi'] = "page_web/monev_bulanan_mhs";
		$this->load->view('sidebar/mhs', $data);
	}
	function monev_bulanan_mhs_action()
	{
		$id= $this->session->userdata('id_pengaju_proposal');
		$tahun= $this->session->userdata('tahun');
		$skema=$this->session->userdata('skema');
		$periode_monev = $this->modelMonev->get_periode_monev($id);
		$periode_monev++;
		$data['result2'] = $this->modelAkun->select_nama_skema($skema,$tahun);
		foreach($data['result2'] as $rows)
		{
			$data['nama_skema']= $rows['nama_skema'];
		}
		$config['upload_path'] = './uploads/techno_its/'.$id."_".$tahun."_".$data['nama_skema']."/";
        $config['allowed_types'] = 'rar|zip';
        $config['max_size'] = '3072';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        $config['overwrite'] = TRUE;
        $config['file_name']= 'monev_'.$periode_monev; 
        $this->load->library('upload',$config);
        if($this->upload->do_upload()){
			$data['upload_data'] = $this->upload->data();
					$file_ext = $data['upload_data']['file_ext'];
			$path_file_monev="/".$id."_".$tahun."_".$data['nama_skema']."/"."monev_".$periode_monev.$file_ext;
			$id_monev=$this->modelMonev->insert_monev($id,$path_file_monev,$periode_monev);
			for($i=1;$i<=8;$i++)
			{
				$aspek=$this->input->post('aspek'.$i);
				$id_pertanyaan=$this->input->post('id_pertanyaan'.$i);
				$this->modelMonev->insert_jawaban_monev($id_monev,$id_pertanyaan,$aspek);
			}
			//echo $i;
			$this->load->view('page_notif/success_monev_bulanan');
		}
		else
		{
			echo $this->upload->display_errors();
		}
	}
	function rekap_monev_pilih_mhs()
	{
		$id=$this->session->userdata('id_pengaju_proposal');
		$data['periode_monev'] = $this->modelMonev->get_periode_monev($id);
		$data['isi'] = "page_web/rekap_monev_pilih_mhs";
		$this->load->view('sidebar/mhs', $data);
	}
	
	function rekap_monev_mhs()
	{
		$data['periode_monev'] = $this->input->post('periode');
		$id=$this->session->userdata('id_pengaju_proposal');
		$data['monev']=$this->modelMonev->select_monev($id,$data['periode_monev']);
		$i=1;
		foreach($data['monev'] as $rows)
		{
			$data['jawaban'.$i] = $rows['jawaban_pertanyaan_monev'];
			$data['komentar'.$i] = $rows['komentar_jawaban'];
			$data['catatan'] = $rows['catatan_dan_saran_reviewer'];
			$data['file'] =$rows['path_file_monev'];
			$i++;
		}
		$data['isi'] = "page_web/rekap_monev_mhs";
		$this->load->view('sidebar/mhs', $data);
	}
	
	function rekap_monev_pilih_pembimbing()
	{
		$data['isi'] = "page_web/rekap_monev_pilih_pembimbing";
		$this->load->view('sidebar/doskarbem', $data);
	}
	
	function rekap_monev_pembimbing()
	{
		$tahun=$this->input->post('tahun');
		$skema=$this->input->post('skema');
		$periode=$this->input->post('periode');
		$data['rekap'] = $this->modelMonev->rekap_monev($tahun,$skema,$periode);
		$data['isi'] = "page_web/rekap_monev_pembimbing";
		$this->load->view('sidebar/doskarbem', $data);
	}
	
	function rekap_monev_pembimbing_detail()
	{
		$data['periode_monev'] = $this->uri->segment(4);
		$id=$this->uri->segment(3);
		$data['monev']=$this->modelMonev->select_monev($id,$data['periode_monev']);
		$i=1;
		foreach($data['monev'] as $rows)
		{
			$data['jawaban'.$i] = $rows['jawaban_pertanyaan_monev'];
			$data['komentar'.$i] = $rows['komentar_jawaban'];
			$data['catatan'] = $rows['catatan_dan_saran_reviewer'];
			$data['file'] =$rows['path_file_monev'];
			$i++;
		}
		$data['isi'] = "page_web/rekap_monev_pembimbing_detail";
		$this->load->view('sidebar/doskarbem', $data);
	}
	
	function penilaian_monev_pilih_dosbem()
	{
		$data['isi'] = "page_web/penilaian_monev_pilih_dosbem";
		$this->load->view('sidebar/doskarbem', $data);
	}
	
	function penilaian_monev_dosbem()
	{
		$data['isi'] = "page_web/penilaian_monev_dosbem";
		$this->load->view('sidebar/doskarbem', $data);
	}
	
	function penilaian_monev_dosbem_rekap()
	{
		$tahun=$this->input->post('tahun');
		$skema=$this->input->post('skema');
		$periode=$this->input->post('periode');
		$data['rekap'] = $this->modelMonev->rekap_monev($tahun,$skema,$periode);
		$data['isi'] = "page_web/penilaian_monev_dosbem_rekap";
		$this->load->view('sidebar/doskarbem', $data);
	}
	
	function penilaian_monev_dosbem_detail()
	{
		$data['periode_monev'] = $this->uri->segment(4);
		$id=$this->uri->segment(3);
		$data['monev']=$this->modelMonev->select_monev($id,$data['periode_monev']);
		$i=1;
		foreach($data['monev'] as $rows)
		{
			$data['id_jawaban_pertanyaan_monev'.$i]=$rows['id_jawaban_pertanyaan_monev'];
			$data['jawaban'.$i] = $rows['jawaban_pertanyaan_monev'];
			$data['komentar'.$i] = $rows['komentar_jawaban'];
			$data['catatan'] = $rows['catatan_dan_saran_reviewer'];
			$data['file'] =$rows['path_file_monev'];
			$i++;
			$data['id_monev']=$rows['id_monev'];
		}
		$data['isi'] = "page_web/penilaian_monev_dosbem_detail";
		$this->load->view('sidebar/doskarbem', $data);
	}
	function penilaian_monev_dosbem_detail_action()
	{
		$id_monev=$this->input->post('id_monev');
		$email_doskarbem = $this->session->userdata('email_doskarbem');
		$data['nilai_monev']=0;
		$catatan_dan_saran_reviewer=$this->input->post('catatan');
		for($i=1;$i<=8;$i++)
		{
			$jawaban=$this->input->post('aspek'.$i);
			$komentar=$this->input->post('komentar_aspek'.$i);
			$id_jawaban_pertanyaan_monev=$this->input->post('id_jawaban_pertanyaan_monev'.$i);
			$this->modelMonev->update_jawaban_komentar_monev($id_jawaban_pertanyaan_monev,$jawaban,$komentar);
			$test=substr($jawaban,strlen($jawaban)-2,1);
			$data['nilai_monev']=$data['nilai_monev']+$test;
		}
		$this->modelMonev->update_monev($id_monev,$email_doskarbem,$catatan_dan_saran_reviewer,$data['nilai_monev']);
		$data['id_monev']=$id_monev;
		if($this->session->userdata('hak_akses')==1)
		{
			$data['isi'] = "page_web/penilaian_monev_rekomendasi";
			$this->load->view('sidebar/doskarbem', $data);	
		}
		else
		{
			$this->load->view('page_notif/success_penilaian_monev_bulanan');
		}
	}

	function rekap_monev_pilih_dosbem()
	{
		$data['isi'] = "page_web/rekap_monev_pilih_dosbem";
		$this->load->view('sidebar/doskarbem', $data);
	}
	
	function rekap_monev_dosbem()
	{
		$tahun=$this->input->post('tahun');
		$skema=$this->input->post('skema');
		$periode=$this->input->post('periode');
		$data['rekap'] = $this->modelMonev->rekap_monev($tahun,$skema,$periode);
		$data['isi'] = "page_web/rekap_monev_dosbem";
		$this->load->view('sidebar/doskarbem', $data);
	}
	
	function rekap_monev_dosbem_detail()
	{
		$data['periode_monev'] = $this->uri->segment(4);
		$id=$this->uri->segment(3);
		$data['monev']=$this->modelMonev->select_monev($id,$data['periode_monev']);
		$i=1;
		foreach($data['monev'] as $rows)
		{
			$data['jawaban'.$i] = $rows['jawaban_pertanyaan_monev'];
			$data['komentar'.$i] = $rows['komentar_jawaban'];
			$data['catatan'] = $rows['catatan_dan_saran_reviewer'];
			$data['file'] =$rows['path_file_monev'];
			$i++;
		}
		$data['isi'] = "page_web/rekap_monev_dosbem_detail";
		$this->load->view('sidebar/doskarbem', $data);
	}
	
	function penilaian_monev_rekomendasi_bt()
	{
		$id=$this->input->post('id_monev');
		$rekomendasi=$this->input->post('rekom');
		$alasan=$this->input->post('alasan_gagal');
		$this->modelMonev->update_rekom_monev1($id,$rekomendasi,$alasan);
		redirect('notif/success_rekomendasi');
	}
	
	function setting_penilaian_pilih()
	{
		$data['isi'] = "page_web/setting_penilaian_pilih";
		$this->load->view('sidebar/doskarbem',$data);
	}
	
	function setting_penilaian()
	{
		$data['isi'] = "page_web/setting_penilaian";
		$this->load->view('sidebar/doskarbem',$data);
	}
	
	function tambah_tahun_skema()
	{
		$data['isi'] = "page_web/tambah_tahun_skema";
		$this->load->view('sidebar/doskarbem',$data);
	}
	
	function tambah_tahun_bt()
	{
		redirect('notif/success_tambah_tahun_skema');
		//redirect('notif/failed_tambah_tahun_skema');
	}
	
	function rekap_pengunduran_diri()
	{
		$data['isi'] = "page_web/rekap_pengunduran_diri";
		$this->load->view('sidebar/doskarbem',$data);
	}
	
	function rekap_pengunduran_diri_pilih()
	{
		
		$data['isi'] = "page_web/rekap_pengunduran_diri_pilih";
		$this->load->view('sidebar/doskarbem', $data);
	}
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
}