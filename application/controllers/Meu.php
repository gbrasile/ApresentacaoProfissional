<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'MY_Controller.php';

class Meu extends MY_Controller {
	public function pdf(){
		$this->load->library('tcpdf');
		$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
		$pdf->SetTitle('Guilherme Brasile');
		$pdf->SetHeaderMargin(30);
		$pdf->SetTopMargin(20);
		$pdf->setFooterMargin(20);
		$pdf->SetAutoPageBreak(true);
		$pdf->SetAuthor('Guilherme Brasile');
		$pdf->SetDisplayMode('real', 'default');
		$pdf->Write(5, 'CodeIgniter TCPDF Integration');
		$pdf->AddPage();
		$html ='<div class="panel panel-danger col-md-6">  
		<div class="panel-heading">    
			<h3 class="panel-title" align="center"><i class="fa fa-book fa-3x" aria-hidden="true">Romildo Alves Viana Junior</i></h3><br><h5 align="center">Brasileiro, 19 anos, Solteiro</h5>
		</div>  
		<div class="panel-body"><br>
			<p>
				<h3>Formação</h3><br>
				<h4>Escolaridade</h4><br>
				Formação superior(cursando)<br>
				<h3>Graduação</h3><br>
				Análise e Desenvolvimento de Sistemas, Instituto Federal de São Paulo(IFSP).<br>
				<h3>Habilidades</h3>
				<ul>
					<li>Web Designer</li>
					<li>Inglês intermediário</li>
					<li>Técnico Administrativo</li>
					<li>Linguagens:
						<ul>
							<li>C</li>
							<li>PHP</li>
							<li>JAVA</li>
							<li>SQL</li>
							<li>Python</li>
							<li>C#</li>
						</ul>
					</li>
					<li>Frameworks:
						<ul>  
							<li>Bootstrap</li>
							<li>Codeigniter</li>
							<li>Laravel</li>
							<li>Hibernate</li>
						</ul>
					</li>
				</ul>
				<h3>Contato</h3>
				<ul>
					<li><b>Celular</b>: 011958159152</li>
					<li><b>E-mail</b>:  raj.alves96@gmail.com</li>
					<li><b>Facebook</b>: Romildo Alves</li>
				</ul>      
			</p>
		</div> 
	</div>';

	$pdf->writeHTML($html, true, false, true, false, '');
	$pdf->Output('guilhermebrasile.pdf', 'I');
}
}
