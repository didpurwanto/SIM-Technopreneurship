<?php
class Monev_model extends CI_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    	//---------------------------------------------------MONEV | INSERT ---------------------------------------------------
    function insert_monev($id,$path_file_monev,$periode_monev)
    {
    	$sql="insert into monev(id_pengaju_proposal,path_file_monev,periode_monev,tanggal_memasukan_monev) 
			values ('".$id."','".$path_file_monev."','".$periode_monev."',now())";
		$query=$this->db->query($sql);
		$sql="select id_monev from monev where id_pengaju_proposal='".$id."' and path_file_monev='".$path_file_monev."' and $periode_monev='".$periode_monev."'";
		$query=$this->db->query($sql);
		foreach($query->result_array() as $rows)
		{
			$id_monev = $rows['id_monev'];
		}
		return $id_monev;
    }
    function insert_jawaban_monev($id_monev,$id_pertanyaan,$jawaban)
    {
    	$sql="insert into jawaban_pertanyaan_monev (id_pertanyaan_monev
    		,id_monev,jawaban_pertanyaan_monev) values ('".$id_pertanyaan."',
    		'".$id_monev."','".$jawaban."')";
		$query=$this->db->query($sql);
    }
    	//---------------------------------------------------MONEV | SELECT ---------------------------------------------------
    function get_periode_monev($id_pengaju_proposal)
    {
    	$sql = "select m.periode_monev from pengaju_proposal pp, monev m where pp.id_pengaju_proposal='".$id_pengaju_proposal."' and pp.id_pengaju_proposal=m.id_pengaju_proposal order by m.periode_monev desc LIMIT 1;";
    	//echo $sql;
    	$query=$this->db->query($sql);
    	if($query->num_rows > 0){
    		foreach($query->result_array() as $rows)
    		{
    			$periode_monev = $rows['periode_monev'];
    		}
 			return $periode_monev;
    	}
    	else
    		return "0";
    }
	function get_pertanyaan_monev()
	{
		$sql="select * from pertanyaan_monev";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	function review_monev_bulanan_rekap($tahun_pengaju_proposal,$skema,$periode_monev)
	{
		$sql = "select distinct pp.id_pengaju_proposal, mpp.nrp, pp.judul_proposal, pp.dosen_pembimbing
				from monev_1_bulan mo, pengaju_proposal pp, mahasiswa_pengaju_proposal mpp
				where mpp.status_ketua = 1 and
				mpp.id_pengaju_proposal = pp.id_pengaju_proposal and
				mo.id_pengaju_proposal = pp.id_pengaju_proposal and
				pp.tahun_pengaju_proposal = '".$tahun_pengaju_proposal."' and
				pp.skema = '".$skema."' and
				mo.periode_monev = '".$periode_monev."'				
				";		
		$result=$this->db->query($sql);
		return $result->result_array();
	}
	
	function review_monev_bulanan($periode,$id)
	{
		$sql = "select distinct * 
				from monev_1_bulan mo, pengaju_proposal pp
				where mo.id_pengaju_proposal = pp.id_pengaju_proposal and pp.id_pengaju_proposal='".$id."'
				and mo.periode_monev = '".$periode."'";
		//echo $sql;
		$result=$this->db->query($sql);
		return $result->result_array();
	}
	function select_monev($id,$periode)
	{
		$sql="select m.id_monev,jpm.id_jawaban_pertanyaan_monev,m.catatan_dan_saran_reviewer,jpm.jawaban_pertanyaan_monev,jpm.komentar_jawaban,m.path_file_monev 
		from monev m,jawaban_pertanyaan_monev jpm 
		where m.id_pengaju_proposal='".$id."' and m.periode_monev='".$periode."' and m.id_monev=jpm.id_monev;";
		$result = $this->db->query($sql);
		return $result->result_array();
	}
	function rekap_monev($tahun,$skema,$periode)
	{
		$sql="select distinct m.periode_monev,pp.id_pengaju_proposal,m.id_monev,m.tanggal_memasukan_monev,mpp.nrp,pp.judul_proposal,dkb.nama_doskarbem 
		from pengaju_proposal pp,monev m,jawaban_pertanyaan_monev jpm,mahasiswa_pengaju_proposal mpp,dosen_karyawan_bem dkb
		where pp.tahun_pengaju_proposal='".$tahun."' and skema='".$skema."' and pp.id_pengaju_proposal= m.id_pengaju_proposal and mpp.status_ketua='1'
		and pp.id_pengaju_proposal=mpp.id_pengaju_proposal and pp.dosen_pembimbing=dkb.email_doskarbem
		and m.periode_monev='".$periode."';";
		//echo $sql;
		$result=$this->db->query($sql);
		return $result->result_array();
	}
    	//---------------------------------------------------MONEV | UPDATE ---------------------------------------------------

	function update_jawaban_komentar_monev($id_jawaban_pertanyaan_monev,$jawaban,$komentar)
	{
		$sql="update jawaban_pertanyaan_monev set komentar_jawaban='".$komentar."',
		jawaban_pertanyaan_monev='".$jawaban."' 
		where id_jawaban_pertanyaan_monev='".$id_jawaban_pertanyaan_monev."'";
		$query =$this->db->query($sql);
	}
	function update_monev($id,$email_doskarbem,$catatan,$nilai_monev)
	{
		$sql="update monev set dosbem_penilai='".$email_doskarbem."',
		catatan_dan_saran_reviewer='".$catatan."',nilai_monev='".$nilai_monev."' where id_monev='".$id."'";
		$query=$this->db->query($sql);
	}
	function update_rekom_monev($id,$rekomendasi)
	{
		$sql="update monev set rekomendasi='".$rekomendasi."' where id_monev='".$id."'";
		$query=$this->db->query($sql);
	}
	function update_rekom_monev1($id,$rekomendasi,$alasan)
	{
		$sql="update monev set rekomendasi='".$rekomendasi."',alasan_gagal='".$alasan."' where id_monev='".$id."'";
		$query=$this->db->query($sql);
	}
}
?>