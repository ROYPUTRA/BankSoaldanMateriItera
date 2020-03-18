<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('BSMI_model'); //ngambil model model_lapor dari folder models
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('enrolment_form', 'Enrollment key', 'trim|required');

		if($this->form_validation->run() == false){
			$this->load->view('landing_page');
		} else {
			$this->checkEnrollmentKey();
		}
	}

	private function checkEnrollmentKey(){
		$enrollmentInput = $this->input->post('enrolment_form');
		$enrollmentKey = $this->BSMI_model->getenroll($enrollmentInput);
		if($enrollmentKey){
			redirect('browse');
		} else {
			redirect('');
		}
	}

	public function page_prodi(){
		$data['sains'] = $this->BSMI_model->getsains();
		$data['jtik'] = $this->BSMI_model->getjtik();
		$data['jtpi'] = $this->BSMI_model->getjtpi();
		$this->load->view('halaman_prodi',$data);
	}

	public function page_matkul($kode_prodi){
		$data["prodi"] = $this->BSMI_model->getprodi($kode_prodi);
		$data["matkul"] = $this->BSMI_model->getmatkul($kode_prodi);
		$this->load->view('halaman_matakuliah',$data);
	}

	public function hasilcarimatkul($kode_prodi,$kode_matkul){
		$data["matkul"] = $this->BSMI_model->getmatkulcari($kode_prodi,$kode_matkul);
		$this->load->view('hasilcarimatkul',$data);	
	}

	public function hasilcarimateri($kode_matkul,$kode_materi){
		$data["materi"] = $this->BSMI_model->getmatericari($kode_matkul,$kode_materi);
		$this->load->view('hasilcarimateri',$data);	
	}

	public function hasilcarisoal($kode_matkul,$kode_soal,$tahun){
		$data["soal"] = $this->BSMI_model->getsoalcari($kode_matkul,$kode_soal);
		$data["tahun2"] = $tahun;
		$this->load->view('hasilcarisoal',$data);	
	}

	public function tipesoal($kode_matkul,$tipe){
		$data["soal"] = $this->BSMI_model->gettipe($kode_matkul,$tipe);
		$data["tipe"] = $tipe;
		$this->load->view('hasilcarisoal',$data);	
	}

	public function tahunsoal($kode_matkul,$tahun){
		$data["soal"] = $this->BSMI_model->gettahun($kode_matkul,$tahun);
		$data["tahun"] = $tahun;
		$this->load->view('hasilcarisoal',$data);	
	}

	public function konten($kode_matkul){
		$data["matkul"] = $this->BSMI_model->getmatkulkhusus($kode_matkul);
		$this->load->view('halaman_berkas',$data);		
	}

	public function materi($kode_matkul){
		$data["matkul"] = $this->BSMI_model->getmatkulkhusus($kode_matkul);
		$data["materi"] = $this->BSMI_model->getmateri($kode_matkul); 
		$this->load->view('halaman_materi',$data);			
	}

	public function soal($kode_matkul){
		$data["matkul"] = $this->BSMI_model->getmatkulkhusus($kode_matkul);
		$data["soal"] = $this->BSMI_model->getsoal($kode_matkul); 
		$this->load->view('halaman_soal',$data);			
	}

	public function video($kode_matkul){
		$data["matkul"] = $this->BSMI_model->getmatkulkhusus($kode_matkul);
		$data["video"] = $this->BSMI_model->getvideo($kode_matkul); 
		$this->load->view('halaman_video',$data);			
	}
}

