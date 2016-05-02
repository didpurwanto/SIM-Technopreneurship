<?php
class Proposal_model extends CI_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
	function rekap_proposal_semua_pilih_doskarbem()
	{
		$sql = "";
		$result=$this->db->query($sql);
		return $result->result_array();
		
	}
	
	function rekap_proposal_semua_doskarbem()
	{
		$sql = "select pp.id_pengaju_proposal, pp.tahun_pengaju_proposal, pp.skema, s.nama_skema, mpp.nrp, pp.judul_proposal, pp.dosen_pembimbing, sp.nama_status
				from pengaju_proposal pp, mahasiswa_pengaju_proposal mpp, status_pengaju sp, skema s
				where pp.id_pengaju_proposal = mpp.id_pengaju_proposal and
				pp.status_pengaju = sp.id_status and
				mpp.status_ketua = 1 and 
				s.id_skema = pp.skema and 
				s.tahun_skema = pp.tahun_pengaju_proposal and 
				pp.skema = 1 and
				pp.tahun_pengaju_proposal = '2015' and
                pp.status_pengaju <> 'A0'";		
		$result=$this->db->query($sql);
		return $result->result_array();
		
	}
	
	
}
?>