<?php 
class MeuPdf extends CI_Controller{
      function __construct() { 
 parent::__construct();
 } 
     function index()
 {
$this->load->library('Pdf');
$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTitle('Guilherme Brasile');
$pdf->SetHeaderMargin(30);
$pdf->SetTopMargin(20);
$pdf->setFooterMargin(20);
$pdf->SetAutoPageBreak(true);
$pdf->SetAuthor('Guilherme Brasile');
$pdf->SetDisplayMode('real', 'default');
$pdf->Write(1, 'CodeIgniter TCPDF Integration');
$pdf->Output('pdfexample.pdf', 'I');
      }
}
?>