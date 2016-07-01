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
// $pdf->Write(5, 'CodeIgniter TCPDF Integration');
$pdf->SetFont('helvetica', '', 10, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// Set some content to print
$html = <<<EOD
<h1>Guilherme Brasile</h1><br>
<h3>Residente em São Paulo , São Paulo - Brasil</h3>
<h3>Resumo profissional</h3>
-10 meses de experiência na área de Desenvolvimento WEB; <br>
- Inglês intermediário/avançado; <br>
- Facilidade de trabalhar em equipe; <br>
- Boa comunicação oral e escrita; <br>
- Interesse em aprender coisas novas e aprimorar conhecimentos.<br>

<h3>Formação</h3>
<h3>Escolaridade</h3>
Formação superior (cursando)<br>
<h3>Graduação</h3>
Tecnologia em Análise e Desenvolvimento de Sistemas, Inst. Federal de Educação, Ciência e Tecnologia de SP.
(Novembro de 2017) - Cursando<br>
<h3>Curso técnico – Médio (2o grau)</h3>
Técnico em Informática para Internet, Etec Parque Belém.
(Junho de 2014) - Concluído <br>
<h3>Formação escolar média (2o grau)</h3>
Ensino Médio, ETEC Prof. Aprígio Gonzaga.
(Novembro de 2014) - Concluído<br>

<h3>Idiomas</h3>
Inglês - intermediário<br>
Espanhol - Básico <br>

<h3>Experiência</h3>
Estagiário em Desenvolvimento WEB - (Julho de 2015 - Dezembro de 2015)<br>
Desenvolvedor WEB Trainee - (Janeiro de 2016 - Maio de 2016)<br>
Desenvolvedor WEB Júnior - (Junho de 2016)<br>

<h3>Conhecimentos</h3>
Conhecimentos básicos em banco de dados relacional, linguagens Java, SQL, JavaScript e em frameworks para desenvolvimento em PHP (CodeIgniter e Laravel). 
Conhecimento intermediário em HTML, CSS, PHP, C e framework Bootstrap. 
Experiência com uso de ferramenta de versionamento (Tortoise SVN).

EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='', $autopadding=true);

$pdf->Write(5, 'some text', '');
$pdf->Output('pdfexample.pdf', 'I');
      }
}
?>