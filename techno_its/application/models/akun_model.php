<?php
class Akun_model extends CI_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
	
	//---------------------------------------------------USER | INSERT ---------------------------------------------------
		
	function insert_akun($nrp,$nama,$passwd)
	{
		//skema 1 = PMW
		//skema 2 = BRI
		$sql="insert into mhs(nrp,nama,passwd) values ('".$nrp."','".$nama."','".$passwd."')";
		$query=$this->db->query($sql);		
	}	
	function insert_akun_pengaju_proposal($tahun,$skema,$passwd){
		$sql = "insert into pengaju_proposal(tahun_pengaju_proposal,
				status_akun_pengaju,skema,password_akun_pengaju,status_pengaju) 
				values('".$tahun."','0','".$skema."','".$passwd."','A0')";
		$this->db->query($sql);
		$sql = "select id_pengaju_proposal from pengaju_proposal where tahun_pengaju_proposal='".$tahun."'
		and skema='".$skema."' and password_akun_pengaju='".$passwd."' and status_akun_pengaju='0' 
		and status_pengaju='A0'";
		$query=$this->db->query($sql);
		$row = $query->result_array();
		foreach($row as $rows)
		{
			$id_pengaju_proposal = $rows['id_pengaju_proposal'];
		}
		return $id_pengaju_proposal;

	}
	function insert_mhs($nrp,$nama,$path_ktm,$jurusan,$email,$telepon){
		$sql="insert into mahasiswa values('".$nrp."','".$nama."','".$path_ktm."','".$jurusan."','".$telepon."','".$email."')";
		$result=$this->db->query($sql);
	}
	function insert_mahasiswa_pengaju_proposal($id_pengaju_proposal,$nrp,$ketua){
		$sql="insert into mahasiswa_pengaju_proposal(id_pengaju_proposal,nrp,status_ketua) 
		values('".$id_pengaju_proposal."','".$nrp."','".$ketua."')";
		$result=$this->db->query($sql);
	}
	function insert_hubungan_pengaju_doskarbem($id,$dosen_pembimbing)
	{
		$sql="insert into hubungan_pengaju_doskarbem(pengaju_proposal,doskarbem,keterangan_interaksi) values 
		('".$id."','".$dosen_pembimbing."','dosen pembimbing')";
		$result=$this->db->query($sql);
	}
	//---------------------------------------------------USER | SELECT ---------------------------------------------------
	function cek_login_doskarbem($id,$passwd)
	{
		$sql = "select * from dosen_karyawan_bem where email_doskarbem='".$id."' and password_doskarbem='".$passwd."'";
		echo $sql;
		$result=$this->db->query($sql);
		return $result->result_array();
	}
	function cek_login_mhs($nrpketua,$passwd,$skema,$tahun){
		$sql="select * from mahasiswa_pengaju_proposal mpp, pengaju_proposal pp where
			mpp.nrp ='".$nrpketua."' and mpp.status_ketua='1' and mpp.id_pengaju_proposal=pp.id_pengaju_proposal
		and pp.skema='".$skema."' and pp.tahun_pengaju_proposal='".$tahun."'and pp.status_akun_pengaju='1' and 
		pp.password_akun_pengaju='".$passwd."';";
		$result=$this->db->query($sql);
		return $result->result_array();;

	}
	function select_skema($tahun)
	{
		$sql ="select * from skema where tahun_skema = '".$tahun."'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function select_nama_skema($id,$tahun)
	{
		$sql = "select nama_skema from skema where id_skema='".$id."' and tahun_skema='".$tahun."'";
		$query= $this->db->query($sql);
		return $query->result_array();
	}
	function select_mhs($id_pengaju_proposal)
	{
		$sql ="select m.nrp,m.nama,m.path_ktm,j.nama_jurusan from mahasiswa m, mahasiswa_pengaju_proposal mpp, pengaju_proposal pp, jurusan j where pp.id_pengaju_proposal='".$id_pengaju_proposal."'
and pp.id_pengaju_proposal=mpp.id_pengaju_proposal and mpp.status_ketua='1' and mpp.nrp = m.nrp and m.jurusan=j.id_jurusan;";
		$query = $this->db->query($sql);
		return $query->result_array();
	}	
	function select_akun_pmw()
	{
		$sql = "select id, nama, nrp, skema from mhs where status = 1 and skema=1";
		$query=$this->db->query($sql);
		return $query->result_array();		
	}
	
	function select_akun_bri()
	{
		$sql = "select id, nama, nrp, skema from mhs where status = 1 and skema=2";
		$query=$this->db->query($sql);
		return $query->result_array();		
	}
	
	function approve_akun()
	{
		$sql = "select mpp.id_pengaju_proposal, mpp.nrp, pp.id_pengaju_proposal, pp.tahun_pengaju_proposal, s.id_skema, s.nama_skema 
		 from mahasiswa_pengaju_proposal mpp, pengaju_proposal pp,skema s 
		 where status_akun_pengaju = '0' and mpp.id_pengaju_proposal = pp.id_pengaju_proposal 
		 and pp.skema = s.id_skema";
		$query=$this->db->query($sql);
		return $query->result_array();		
	}
	
	function get_detail_kelompok($id_kelompok,$tahun)
	{
		$sql="select m.nama, m.nrp, m.path_ktm 
				from kelompok k, mhs m, kelompok_mhs km
				where k.id_kelompok = '".$id_kelompok."' and k.tahun = ".$tahun." and
				k.id_kelompok = km.id_kelompok and
				km.tahun = k.tahun and
				km.nrp = m.nrp;";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	function select_dosen_pembimbing()
	{
		$sql = "select email_doskarbem,nama_doskarbem from dosen_karyawan_bem where hak_akses='1'";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	function select_data_proposal($id,$tahun,$skema,$nrpketua)
	{
		$sql = "select pp.status_pengaju,pp.dana_disetujui,pp.judul_proposal,dkb.nama_doskarbem,pp.dana_diajukan,pp.abstraksi,m.nama, m.email_mahasiswa, m.telepon, j.nama_jurusan,m.nrp,sp.nama_status,pp.path_proposal
				from pengaju_proposal pp,dosen_karyawan_bem dkb,mahasiswa_pengaju_proposal mpp,
				mahasiswa m, status_pengaju sp, jurusan j where pp.id_pengaju_proposal='".$id."' and 
				pp.tahun_pengaju_proposal='".$tahun."' and pp.skema='".$skema."' and  
				pp.dosen_pembimbing=dkb.email_doskarbem and 
				mpp.id_pengaju_proposal=pp.id_pengaju_proposal 
				and m.nrp=mpp.nrp and m.nrp='".$nrpketua."' and pp.status_pengaju=sp.id_status and m.jurusan=j.id_jurusan";
		//echo $sql;
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function select_anggota_kelompok($id,$tahun,$skema,$nrpketua)
	{
		$sql="select m.nama,m.nrp,j.nama_jurusan, m.telepon, m.email_mahasiswa
		from mahasiswa m,mahasiswa_pengaju_proposal mpp, pengaju_proposal pp, jurusan j
		where pp.id_pengaju_proposal='".$id."' and pp.tahun_pengaju_proposal='".$tahun."' and 
		pp.skema='".$skema."' and pp.id_pengaju_proposal=mpp.id_pengaju_proposal and mpp.nrp=m.nrp and m.jurusan=j.id_jurusan and m.nrp <>'".$nrpketua."';";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	function select_jurusan()
	{
		$sql="select * from jurusan";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function cek_user_regis($id,$skema,$tahun)
	{
		$sql="select * from pengaju_proposal pp, mahasiswa_pengaju_proposal mpp, mahasiswa m 
				where pp.tahun_pengaju_proposal='".$tahun."' and pp.skema='".$skema."' and pp.id_pengaju_proposal = mpp.id_pengaju_proposal and
				mpp.status_ketua='1' and mpp.nrp='".$id."';";
		//echo $sql;
		$query = $this->db->query($sql);
		if($query->num_rows > 0)
			return false;
		else
			return true;
	}
	function cek_data_mhs($nrp)
	{
		$sql ="select * from mahasiswa where nrp='".$nrp."'";
		$query = $this->db->query($sql);
		if($query->num_rows > 0)
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	function cek_ketua($tahun,$skema,$nrp)
	{
		$sql="select * from mahasiswa_pengaju_proposal mpp, pengaju_proposal pp where pp.tahun_pengaju_proposal='".$tahun."' and pp.skema='".$skema."' 
			and  pp.id_pengaju_proposal=mpp.id_pengaju_proposal and mpp.nrp='".$nrp."' and mpp.status_ketua='1';";
		$query=$this->db->query($sql);
		if($query->num_rows > 0)
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	//---------------------------------------------------USER | LOGIN---------------------------------------------------
	function login($email_pgn, $passwd)
	{
		$this->load->database();
		$this -> db -> select('email, passwd, privilege');
	   	$this -> db -> from('pengguna');
	   	$this -> db -> where('email', $email_pgn);
	   	$this -> db -> where('passwd', md5($passwd));
		 
	   	$query = $this -> db -> get();
		 
	   	if($query -> num_rows() == 1)
	   	{
	   	  	echo "<script>alert('true1');</script>";
	   	  	return $query->result();
	   	}
	   	else
	   	{
	   	  	echo "<script>alert('false1');</script>";
	   	  	return false;
	   	}
	}
	//---------------------------------------------------USER | UPDATE---------------------------------------------------
	function update_akun_aprrove($id_pengaju_proposal)
	{
		$sql="update pengaju_proposal set status_akun_pengaju='1' where id_pengaju_proposal='".$id_pengaju_proposal."'";
		$query = $this->db->query($sql);
	}
	function update_proposal($id,$tahun,$skema,$judul,$dana,$abstraksi,$path_proposal,$dosen_pembimbing)
	{
		$sql="update pengaju_proposal set judul_proposal='".$judul."',dana_diajukan='".$dana."'
		, abstraksi='".$abstraksi."',path_proposal='".$path_proposal."', dosen_pembimbing='".$dosen_pembimbing."' where id_pengaju_proposal='".$id."' and 
		tahun_pengaju_proposal='".$tahun."' and skema='".$skema."'";
		$query=$this->db->query($sql);
	}
	function update_proposal_A1($id)
	{
		$sql="update pengaju_proposal set status_pengaju='A1' where id_pengaju_proposal='".$id."'";
		$query=$this->db->query($sql);
	}
	function update_ketua_lama($id,$nrp)
	{
		$sql="update mahasiswa_pengaju_proposal mpp,pengaju_proposal pp set mpp.status_ketua='0' where pp.id_pengaju_proposal='".$id."' 
				and pp.id_pengaju_proposal=mpp.id_pengaju_proposal and mpp.nrp='".$nrp."';";
		$query = $this->db->query($sql);
	}
	function update_ketua_baru_password($id,$nrp,$password)
	{
		$sql="update mahasiswa_pengaju_proposal mpp,pengaju_proposal pp set mpp.status_ketua='1',pp.password_akun_pengaju='".$password."' where pp.id_pengaju_proposal='".$id."' 
				and pp.id_pengaju_proposal=mpp.id_pengaju_proposal and mpp.nrp='".$nrp."';";
		//echo $sql;
		$query = $this->db->query($sql);
	}
	
	function cek_password_mhs($id,$password_lama)
	{
		$sql="select * from pengaju_proposal where id_pengaju_proposal='".$id."' and password_akun_pengaju='".$password_lama."'";
		$result=$this->db->query($sql);
		if($result->num_rows > 0)
			return true;
		else
			return false;
	}
	function cek_password_doskarbem($id,$password_lama)
	{
		$sql="select * from dosen_karyawan_bem where email_doskarbem='".$id."' and password_doskarbem='".$password_lama."'";
		$result=$this->db->query($sql);
		if($result->num_rows > 0)
			return true;
		else
			return false;
	}
	
	//UPDATE---------------------------------------------------
	function change_password_mhs($id,$passwordBaru)
	{
		$sql="update pengaju_proposal set password_akun_pengaju='".$passwordBaru."' where id_pengaju_proposal='".$id."'";
		$query=$this->db->query($sql);
	}
	function change_password_doskarbem($id,$passwordBaru)
	{
		$sql="update dosen_karyawan_bem set password_doskarbem='".$passwordBaru."' where email_doskarbem='".$id."'";
		$query=$this->db->query($sql);
	}
	function update_proposal_pengunduran_diri($id,$path_file_pengunduran_diri,$alasan)
	{
		$sql="update pengaju_proposal set alasan_pengunduran_diri='".$alasan."',path_file_pengunduran_diri='".$path_file_pengunduran_diri."'
		 where id_pengaju_proposal='".$id."'";
		 $query=$this->db->query($sql);
	}
}
?>