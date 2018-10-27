<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

	class Tb_Proposal extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('m_tb_proposal');
      $this->load->helper('url');
			}

	function index(){
			$data = array(
				'proposal' => $this->m_tb_proposal->getAll(),
				'data'	=> $this->m_tb_proposal->af_proposal(),
				'kdunik' => $this->m_tb_proposal->kdunik(),
				'proposal' => $this->m_tb_proposal->getproposal(),
				'get_category1' => $this->m_tb_proposal->get_option1(),
				'get_category2' => $this->m_tb_proposal->get_option2(),
				'get_category3' => $this->m_tb_proposal->get_option3());
				//'user'	=>$this->m_tb_proposal->listing());
			
			$this->load->view('v_header');
			$this->load->view('v_sidebar');
			$this->load->view('v_tb_proposal',$data);
			$this->load->view('v_footer');
    }
  
  function tambah(){
      $data = array(
        'id_proposal'     =>$this->input->post('id_proposal'),
        'nama_kontak'   =>$this->input->post('nama_kontak'),
        'nama_lembaga'    =>$this->input->post('nama_lembaga'),
        'alamat_lembaga'  =>$this->input->post('alamat_lembaga'),
        'kecamatan'     =>$this->input->post('kecamatan'),
        'kota_kab'      =>$this->input->post('kota_kab'),
        'wil_malang'    =>$this->input->post('wil_malang'),
        'telepon'     =>$this->input->post('telepon'),
        'tgl_masuk'     =>date_format(date_create($this->input->post('tgl_masuk')), 'Y-m-d'),
        'bulan_masuk'     =>$this->input->post('bulan_masuk'),
        'id_program'    =>$this->input->post('id_program'),
        'nama_program'    =>$this->input->post('nama_program'),
        'id_bidang'     =>$this->input->post('id_bidang'),
        'nama_bidang'   =>$this->input->post('nama_bidang'),
        'id_kategori'   =>$this->input->post('id_kategori'),
        'nama_kategori'   =>$this->input->post('nama_kategori'),
        'jml_pengajuan'   =>$this->input->post('jml_pengajuan'),
        'bentuk_pengajuan'  =>$this->input->post('bentuk_pengajuan'),
        'tgl_survei'    =>date_format(date_create($this->input->post('tgl_survei')), 'Y-m-d'),
        'rekomendasi'   =>$this->input->post('rekomendasi'),
              );
      $this->m_tb_proposal->input_data('af_proposal',$data);
      $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('tb_proposal');
    }   

  public function hapus($id_proposal){
      $where = array('id_proposal' => $id_proposal);
      $this->m_tb_proposal->hapus_data($where,'af_proposal');
      $this->session->set_flashdata('info','<div class="alert alert-danger alert-dismissible"> Data Telah Dihapus</div>');
      redirect ('tb_proposal');
    }

      function ubah(){
      $no = $this->input->post('no');
      $data = array(
        'id_proposal'     =>$this->input->post('id_proposal'),
        'nama_kontak'   =>$this->input->post('nama_kontak'),
        'nama_lembaga'    =>$this->input->post('nama_lembaga'),
        'alamat_lembaga'  =>$this->input->post('alamat_lembaga'),
        'kecamatan'     =>$this->input->post('kecamatan'),
        'kota_kab'      =>$this->input->post('kota_kab'),
        'wil_malang'    =>$this->input->post('wil_malang'),
        'telepon'     =>$this->input->post('telepon'),
        'tgl_masuk'     =>date_format(date_create($this->input->post('tgl_masuk')), 'Y-m-d'),
        'bulan_masuk'     =>$this->input->post('bulan_masuk'),
        'id_program'    =>$this->input->post('id_program'),
        'nama_program'    =>$this->input->post('nama_program'),
        'id_bidang'     =>$this->input->post('id_bidang'),
        'nama_bidang'   =>$this->input->post('nama_bidang'),
        'id_kategori'   =>$this->input->post('id_kategori'),
        'nama_kategori'   =>$this->input->post('nama_kategori'),
        'jml_pengajuan'   =>$this->input->post('jml_pengajuan'),
        'bentuk_pengajuan'  =>$this->input->post('bentuk_pengajuan'),
        'tgl_survei'    =>date_format(date_create($this->input->post('tgl_survei')), 'Y-m-d'),
        'rekomendasi'   =>$this->input->post('rekomendasi'),
      );
      if($this->m_tb_proposal->ubah($data,$no)){

      $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('tb_proposal');
          } else {
            echo "tes";
          }
        }    
    
      public function export(){
          // Load plugin PHPExcel nya
          include APPPATH.'third_party/PHPExcel/PHPExcel.php';
          
          // Panggil class PHPExcel nya
          $excel = new PHPExcel();
          // Settingan awal fil excel
          $excel->getProperties()->setCreator('YDSF Malang')
                       ->setLastModifiedBy('YDSF Malang')
                       ->setTitle("Data Proposal")
                       ->setSubject("Proposal")
                       ->setDescription("Laporan Excel Proposal")
                       ->setKeywords("Data Proposal");
          // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
          $style_col = array(
            'font' => array('bold' => true), // Set font nya jadi bold
            'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
            ),
            'borders' => array(
              'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
              'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
              'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
              'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
            )
          );
          // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
          $style_row = array(
            'alignment' => array(
              'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
            ),
            'borders' => array(
              'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
              'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
              'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
              'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
            )
          );
          $excel->setActiveSheetIndex(0)->setCellValue('A1', "PROPOSAL"); // Set kolom A1 dengan tulisan "DATA SISWA"
          $excel->getActiveSheet()->mergeCells('A1:U1'); // Set Merge Cell pada kolom A1 sampai E1
          $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
          $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
          $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
          // Buat header tabel nya pada baris ke 3
          $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
          $excel->setActiveSheetIndex(0)->setCellValue('B3', "Kode Proposal"); // Set kolom B3 dengan tulisan "kodeproposal"
          $excel->setActiveSheetIndex(0)->setCellValue('C3', "Nama Kontak"); // Set kolom C3 dengan tulisan "Nama Kontak
          $excel->setActiveSheetIndex(0)->setCellValue('D3', "Nama Lembaga"); // Set kolom D3 dengan tulisan "Nama Lembaga"
          $excel->setActiveSheetIndex(0)->setCellValue('E3', "Alamat Lembaga"); // Set kolom E3 dengan tulisan "Alamat Lembaga"
          $excel->setActiveSheetIndex(0)->setCellValue('F3', "Kecamatan"); // Set kolom F3 dengan tulisan "Kecamatan"
          $excel->setActiveSheetIndex(0)->setCellValue('G3', "Kota / Kabupaten"); // Set kolom G3 dengan tulisan "Kota / Kabupaten"
          $excel->setActiveSheetIndex(0)->setCellValue('H3', "Wilayah"); // Set kolom H3 dengan tulisan "Wilayah"
          $excel->setActiveSheetIndex(0)->setCellValue('I3', "No. Telepon"); // Set kolom I3 dengan tulisan "No. Telepon"
          $excel->setActiveSheetIndex(0)->setCellValue('J3', "Tanggal Masuk"); // Set kolom J3 dengan tulisan "Tanggal Masuk"
          $excel->setActiveSheetIndex(0)->setCellValue('K3', "Bulan Masuk"); // Set kolom K3 dengan tulisan "Bulan Masuk"
          $excel->setActiveSheetIndex(0)->setCellValue('L3', "Kode Program"); // Set kolom L3 dengan tulisan "Kode Program"
          $excel->setActiveSheetIndex(0)->setCellValue('M3', "Nama Program"); // Set kolom M3 dengan tulisan "Nama Program"
          $excel->setActiveSheetIndex(0)->setCellValue('N3', "Kode Bidang"); // Set kolom N3 dengan tulisan "Kode Bidang"
          $excel->setActiveSheetIndex(0)->setCellValue('O3', "Nama Bidang"); // Set kolom O3 dengan tulisan "Nama Bidang"
          $excel->setActiveSheetIndex(0)->setCellValue('P3', "Kode Kategori"); // Set kolom P3 dengan tulisan "Kode Kategori"
          $excel->setActiveSheetIndex(0)->setCellValue('Q3', "Nama Kategori"); // Set kolom Q3 dengan tulisan "Nama Kategori
          $excel->setActiveSheetIndex(0)->setCellValue('R3', "Jumlah Pengajuan"); // Set kolom R3 dengan tulisan "Jumlah Pengajuan"
          $excel->setActiveSheetIndex(0)->setCellValue('S3', "Bentuk Pengajuan"); // Set kolom S3 dengan tulisan "Bentuk Pengajuan"
          $excel->setActiveSheetIndex(0)->setCellValue('T3', "Tanggal Survey"); // Set kolom T3 dengan tulisan "Tanggal Survey"
          $excel->setActiveSheetIndex(0)->setCellValue('U3', "Rekomendasi"); // Set kolom U3 dengan tulisan "Rekomendasi"
      
          // Apply style header yang telah kita buat tadi ke masing-masing kolom header
          $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
          $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
          $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
          $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
          $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
          $excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
          $excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
          $excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
          $excel->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);
          $excel->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);
          $excel->getActiveSheet()->getStyle('K3')->applyFromArray($style_col);
          $excel->getActiveSheet()->getStyle('L3')->applyFromArray($style_col);
          $excel->getActiveSheet()->getStyle('M3')->applyFromArray($style_col);
          $excel->getActiveSheet()->getStyle('N3')->applyFromArray($style_col);
          $excel->getActiveSheet()->getStyle('O3')->applyFromArray($style_col);
          $excel->getActiveSheet()->getStyle('P3')->applyFromArray($style_col);
          $excel->getActiveSheet()->getStyle('Q3')->applyFromArray($style_col);
          $excel->getActiveSheet()->getStyle('R3')->applyFromArray($style_col);
          $excel->getActiveSheet()->getStyle('S3')->applyFromArray($style_col);
          $excel->getActiveSheet()->getStyle('T3')->applyFromArray($style_col);
          $excel->getActiveSheet()->getStyle('U3')->applyFromArray($style_col);
          // Panggil function view yang ada di M tb siswa untuk menampilkan semua data siswanya
          $proposal = $this->m_tb_proposal->af_proposal();
          $no = 1; // Untuk penomoran tabel, di awal set dengan 1
          $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
          foreach($proposal as $pro){ // Lakukan looping pada variabel siswa
            $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
            $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $pro['id_proposal']);
            $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $pro['nama_kontak']);
            $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $pro['nama_lembaga']);
            $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $pro['alamat_lembaga']);
            $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $pro['kecamatan']);
            $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $pro['kota_kab']);
            $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $pro['wil_malang']);
            $excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $pro['telepon']);
            $excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $pro['tgl_masuk']);
            $excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $pro['bulan_masuk']);
            $excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $pro['id_program']);
            $excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $pro['nama_program']);
            $excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $pro['id_bidang']);
            $excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, $pro['nama_bidang']);
            $excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $pro['id_kategori']);
            $excel->setActiveSheetIndex(0)->setCellValue('Q'.$numrow, $pro['nama_kategori']);
            $excel->setActiveSheetIndex(0)->setCellValue('R'.$numrow, $pro['jml_pengajuan']);
            $excel->setActiveSheetIndex(0)->setCellValue('S'.$numrow, $pro['bentuk_pengajuan']);
            $excel->setActiveSheetIndex(0)->setCellValue('T'.$numrow, $pro['tgl_survei']);
            $excel->setActiveSheetIndex(0)->setCellValue('U'.$numrow, $pro['rekomendasi']);
            
            // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
            $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('P'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('Q'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('R'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('S'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('T'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('U'.$numrow)->applyFromArray($style_row);
           
            $no++; // Tambah 1 setiap kali looping
            $numrow++; // Tambah 1 setiap kali looping
          }
          // Set width kolom
            $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
            $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
            $excel->getActiveSheet()->getColumnDimension('C')->setWidth(30); // Set width kolom C
            $excel->getActiveSheet()->getColumnDimension('D')->setWidth(50); // Set width kolom D
            $excel->getActiveSheet()->getColumnDimension('E')->setWidth(100); // Set width kolom E
            $excel->getActiveSheet()->getColumnDimension('F')->setWidth(20); // Set width kolom F
            $excel->getActiveSheet()->getColumnDimension('G')->setWidth(20); // Set width kolom G
            $excel->getActiveSheet()->getColumnDimension('H')->setWidth(20); // Set width kolom H
            $excel->getActiveSheet()->getColumnDimension('I')->setWidth(20); // Set width kolom I
            $excel->getActiveSheet()->getColumnDimension('J')->setWidth(15); // Set width kolom J
            $excel->getActiveSheet()->getColumnDimension('K')->setWidth(10); // Set width kolom K
            $excel->getActiveSheet()->getColumnDimension('L')->setWidth(15); // Set width kolom L
            $excel->getActiveSheet()->getColumnDimension('M')->setWidth(20); // Set width kolom M
            $excel->getActiveSheet()->getColumnDimension('N')->setWidth(15); // Set width kolom N
            $excel->getActiveSheet()->getColumnDimension('O')->setWidth(20); // Set width kolom O
            $excel->getActiveSheet()->getColumnDimension('P')->setWidth(15); // Set width kolom P
            $excel->getActiveSheet()->getColumnDimension('Q')->setWidth(20); // Set width kolom Q
            $excel->getActiveSheet()->getColumnDimension('R')->setWidth(15); // Set width kolom R
            $excel->getActiveSheet()->getColumnDimension('S')->setWidth(15); // Set width kolom S
            $excel->getActiveSheet()->getColumnDimension('T')->setWidth(15); // Set width kolom T
      
          
          // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
          $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
          // Set orientasi kertas jadi LANDSCAPE
          $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
          // Set judul file excel nya
          $excel->getActiveSheet(0)->setTitle("Laporan Proposal");
          $excel->setActiveSheetIndex(0);
          // Proses file excel
          header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
          header('Content-Disposition: attachment; filename="Laporan Excel Proposal.xlsx"'); // Set nama file excel nya
          header('Cache-Control: max-age=0');
          $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
          $write->save('php://output');
        }
      }
    