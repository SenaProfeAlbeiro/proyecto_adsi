<?php session_start();
	
	require_once 'model/Report.php';
	require_once 'controller/PDF.php';


	class Reports {

		private $model;

		public function __construct(){
			$this->model = new Report();
		}

		public function index(){			
			require_once 'view/roles/admin/header.php';
			require_once 'view/modules/4_mod_reports/reports_imp/reports_imp.main.view.php';
			require_once 'view/roles/admin/footer.php';
		}

		public function repConsultarUsuarios(){
			$pdf = new PDF('P', 'mm', array(215.9, 279.4));			
			$pdf->AliasNbPages();
			$pdf->AddPage();
			$pdf->SetFont('Times','B',12);
			$pdf->cell(3);
			$pdf->cell(10, 10, 'Rol', 1, 0, 'C', 0);
			$pdf->cell(10, 10, 'Id', 1, 0, 'C', 0);
			$pdf->cell(30, 10, 'Doc Ident', 1, 0, 'C', 0);
			$pdf->cell(30, 10, 'Nombres', 1, 0, 'C', 0);
			$pdf->cell(30, 10, 'Apellidos', 1, 0, 'C', 0);
			$pdf->cell(60, 10, 'Correo', 1, 0, 'C', 0);				
			$pdf->cell(20, 10, 'Estado', 1, 1, 'C', 0);
			$reportes = $this->model->repConsultarUsuarios();
			// foreach ($reportes as $reporte) {
			// 	$pdf->cell(8);
			// 	$pdf->SetFont('Times','',12);
			// 	$pdf->cell(10, 10, $reporte['id_rol'], 1, 0, 'C', 0);
			// 	$pdf->cell(10, 10, $reporte['id_usuario'], 1, 0, 'C', 0);
			// 	$pdf->cell(30, 10, $reporte['usuario_doc_identidad'], 1, 0, 'C', 0);
			// 	$pdf->cell(30, 10, utf8_decode($reporte['usuario_nombres']), 1, 0, 'C', 0);
			// 	$pdf->cell(30, 10, utf8_decode($reporte['usuario_apellidos']), 1, 0, 'C', 0);
			// 	$pdf->cell(50, 10, $reporte['usuario_correo'], 1, 0, 'C', 0);				
			// 	$pdf->cell(20, 10, $reporte['usuario_estado'], 1, 1, 'C', 0);
			// }
			for ($i=0; $i < count($reportes); $i++) { 
				$pdf->cell(3);
				$pdf->SetFont('Times','',12);
				$pdf->cell(10, 10, $reportes[$i][0], 1, 0, 'C', 0);
				$pdf->cell(10, 10, $reportes[$i][1], 1, 0, 'C', 0);
				$pdf->cell(30, 10, $reportes[$i][2], 1, 0, 'C', 0);
				$pdf->cell(30, 10, utf8_decode($reportes[$i][3]), 1, 0, 'C', 0);
				$pdf->cell(30, 10, utf8_decode($reportes[$i][4]), 1, 0, 'C', 0);
				$pdf->cell(60, 10, $reportes[$i][5], 1, 0, 'C', 0);				
				$pdf->cell(20, 10, $reportes[$i][7], 1, 1, 'C', 0);
			}
			$pdf->Output('F', 'view/modules/4_mod_reports/reports_imp/consulta_usuarios.pdf');
			require_once 'view/roles/admin/header.php';
			require_once 'view/modules/4_mod_reports/reports_imp/reports_imp.cons_usuarios.view.php';
			require_once 'view/roles/admin/footer.php';
		}

	}


?>