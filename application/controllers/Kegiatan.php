<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('kegiatan_model');
        $this->load->library('Pdf');
	}
	
	public function list()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidenav');
		$this->load->view('layout/topnav');
		$this->load->view('kegiatan/index');
		$this->load->view('layout/footer');
    }

    public function print($param){
        error_reporting(0);
        $no=$param;
        $this->db->where('no',$no);
        $data = $this->db->get('kegiatan')->row();

        $pdf=new FPDF();

        $pdf->AddPage('P', 'A4');

        //Gambar
        $pdf->Image(asset_url()."img/logo.png",10,13,45);

        //Judul
        $pdf->Cell(25);
        $pdf->SetFont('Times','B','11');
        $pdf->Cell(0,5,strtoupper("Dewan Teknologi Informasi dan Komunikasi Nasional"),0,1,'C');
        $pdf->Cell(25);
        $pdf->SetFont('Times','','10');
        $pdf->Cell(0,5,"Graha MR 21 Lt. 6 Jl. Menteng Raya No. 21",0,1,'C');
        $pdf->Cell(25);
        $pdf->SetFont('Times','','10');
        $pdf->Cell(0,5,"Kebon Sirih, Menteng, Jakarta Pusat 10310",0,1,'C');
        $pdf->Cell(25);
        $pdf->SetFont('Times','','10');
        $pdf->Cell(0,5,"E-mail: sekretariat@wantiknas.go.id Website: www.wantiknas.go.id",0,1,'C');

        //garis
        $pdf->SetLineWidth(1);
        $pdf->Line(10,34,200,34);
        $pdf->SetLineWidth(0);
        $pdf->Line(10,35,200,35);

        $pdf->Output('undangan.pdf','I');
    }
    
    public function save()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidenav');
		$this->load->view('layout/topnav');
		$this->load->view('kegiatan/save');
		$this->load->view('layout/footer');
    }

    public function update($param)
	{
		$no=$param;
		$this->db->where('no',$no);
		$data = $this->db->get('kegiatan')->row();
		$this->load->view('layout/header');
		$this->load->view('layout/sidenav');
		$this->load->view('layout/topnav');
		$this->load->view('kegiatan/update', $data);
		$this->load->view('layout/footer');
    }

    public function insert()
    {
        $data=array(
            'nama_kegiatan' => $this->input->post('nama_kegiatan'),
            'tipe_agenda' => $this->input->post('tipe_agenda'),
            'agenda_utama' => $this->input->post('agenda_utama'),
            'tipe_meeting' => $this->input->post('tipe_meeting'),
            'kategori_meeting' => $this->input->post('kategori_meeting'),
            'tanggal' => $this->input->post('tanggal'),
            'pukul' => $this->input->post('pukul'),
            'tempat' => $this->input->post('tempat'),
            'link_meeting' => $this->input->post('link_meeting'),
            'agenda' => $this->input->post('agenda'),
            'pimpinan_rapat' => $this->input->post('pimpinan_rapat'),
            'moderator' => $this->input->post('moderator'),
            'tribe' => 1,
            'flag' => 0
        );
        if($this->db->insert('kegiatan', $data)){
            redirect("kegiatan");
        }
	}
	
	function change($param){ //function update data
		$no=$param;
        $data=array(
            'nama_kegiatan' => $this->input->post('nama_kegiatan'),
            'tipe_agenda' => $this->input->post('tipe_agenda'),
            'agenda_utama' => $this->input->post('agenda_utama'),
            'tipe_meeting' => $this->input->post('tipe_meeting'),
            'kategori_meeting' => $this->input->post('kategori_meeting'),
            'tanggal' => $this->input->post('tanggal'),
            'pukul' => $this->input->post('pukul'),
            'tempat' => $this->input->post('tempat'),
            'link_meeting' => $this->input->post('link_meeting'),
            'agenda' => $this->input->post('agenda'),
            'pimpinan_rapat' => $this->input->post('pimpinan_rapat'),
            'moderator' => $this->input->post('moderator'),
            'tribe' => 1,
        );
        $this->db->where('no',$no);
        if($this->db->update('kegiatan', $data)){
			redirect("kegiatan");
		}
	}

    public function view(){
		$search = $_POST['search']['value']; // Ambil data yang di ketik user pada textbox pencarian
		$limit = $_POST['length']; // Ambil data limit per page
		$start = $_POST['start']; // Ambil data start
		$order_index = $_POST['order'][0]['column']; // Untuk mengambil index yg menjadi acuan untuk sorting
		$order_field = $_POST['columns'][$order_index]['data']; // Untuk mengambil nama field yg menjadi acuan untuk sorting
		$order_ascdesc = $_POST['order'][0]['dir']; // Untuk menentukan order by "ASC" atau "DESC"
		$sql_total = $this->kegiatan_model->count_all(); // Panggil fungsi count_all pada SiswaModel
		$sql_data = $this->kegiatan_model->filter($search, $limit, $start, $order_field, $order_ascdesc); // Panggil fungsi filter pada SiswaModel
		$sql_filter = $this->kegiatan_model->count_filter($search); // Panggil fungsi count_filter pada SiswaModel
		$callback = array(
			'draw'=>$_POST['draw'], // Ini dari datatablenya
			'recordsTotal'=>$sql_total,
			'recordsFiltered'=>$sql_filter,
			'data'=>$sql_data
		);
		header('Content-Type: application/json');
		echo json_encode($callback); // Convert array $callback ke json
      }

      public function select(){
        $json = [];
		$this->load->database();
		if(!empty($this->input->get("q"))){
			$this->db->like('nama_kegiatan', $this->input->get("q"));
			$query = $this->db->select('no as id,nama_kegiatan as text')
						->limit(10)
						->get("kegiatan");
			$json = $query->result();
		}
		echo json_encode($json);
      }
      
      function delete($param){ //function hapus data
        $no=$param;
        $this->db->where('no',$no);
        $this->db->delete('kegiatan');
    }
}
