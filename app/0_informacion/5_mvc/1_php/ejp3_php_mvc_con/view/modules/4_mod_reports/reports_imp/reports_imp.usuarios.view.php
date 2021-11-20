<?php 
	
	// ¿Controlador o Modelo? Principal Reportes
	require_once 'fpdf/fpdf.php';
	require_once "../../../../model/DataBase.php";
	require_once "../../../../model/User.php";

	// ¿Controlador o modelo? Hereda Reportes Principales
	class PDF extends FPDF{
		// Cabecera de página
		function Header(){
			// Logo
			// $this->Image('logo.png',10,8,33);
			// Arial bold 15
			$this->SetFont('Arial','B',15);
			// Movernos a la derecha
			$this->Cell(65);
			// Título
			$this->Cell(60,10,'Reporte Usuarios',1,0,'C');
			// Salto de línea
			$this->Ln(20);
			// Encabezado de la Tabla
			$this->cell(5);
			$this->cell(32, 10, 'Id', 1, 0, 'C', 0);
			$this->cell(80, 10, 'nombres', 1, 0, 'C', 0);
			$this->cell(65, 10, 'correo', 1, 1, 'C', 0);
		}

		// Pie de página
		function Footer(){
			// Posición: a 1,5 cm del final
			$this->SetY(-15);
			// Arial italic 8
			$this->SetFont('Arial','I',8);
			// Número de página
			$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
		}
	}	
	
		
	$pdo = Database::conexion();
	# Crear Arreglo
	$userList = [];

	# Consulta
	$sql = 'SELECT * FROM usuarios';

	# Prepara la consulta
	$dbh = $pdo->query($sql);

	// Controlador Reportes Parte I
	// Título
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',14);	

	# Recorre la objeto
	foreach ($dbh->fetchAll() as $user) {
		$pdf->cell(5);
		$pdf->cell(32, 10, $user['id_usuario'], 1, 0, 'C', 0);
		$pdf->cell(80, 10, $user['usuario_nombres'], 1, 0, 'C', 0);
		$pdf->cell(65, 10, $user['usuario_correo'], 1, 1, 'C', 0);
	}

	// Controlador Reportes Parte II
	$pdf->Output();

?>