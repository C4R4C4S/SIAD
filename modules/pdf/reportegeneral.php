<?php
	include('plantilla.php');
	require('conexion.php');

	$query = "SELECT * FROM products";
					

	$resultado = $mysqli->query($query);

	$pdf = new PDF('L', 'mm', array(650,500));
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',15);


	$pdf->Cell(30,10,'Cantidades',1,0,'C',1);
	// $pdf->Cell(30,6,'Serial',1,0,'C',1);
	$pdf->Cell(30,10,utf8_decode('Código'),1,0,'C',1);
	$pdf->Cell(60,10,utf8_decode('N° Bien'),1,0,'C',1);
	$pdf->Cell(185,10,utf8_decode('Descripción'),1,0,'C',1);
	// $pdf->Cell(30,6,'Modelo',1,0,'C',1);
	// $pdf->Cell(30,6,'Marca',1,0,'C',1);
	$pdf->Cell(30,10,utf8_decode('Código'),1,0,'C',1);
	
	// $pdf->Cell(40,6,utf8_decode('Categoría'),1,0,'C',1);
	$pdf->Cell(70,10,'Concepto',1,0,'C',1);
	// $pdf->Cell(70,6,utf8_decode('Área'),1,0,'C',1);
	
	// $pdf->Cell(70,6,'Motivo',1,0,'C',1);
	$pdf->Cell(180,10,utf8_decode('Condición'),1,0,'C',1);
	// $pdf->Cell(70,6,'Responsable',1,0,'C',1);
	// $pdf->Cell(70,6,utf8_decode('Asignación'),1,0,'C',1);
	// $pdf->Cell(70,6,'Rango',1,0,'C',1);
	// $pdf->Cell(70,6,'Cargo',1,0,'C',1);
	
	$pdf->Cell(35,10,'Precio',1,1,'C',1);

	
	while ( $row = $resultado->fetch_assoc() )
	{
	$pdf->Cell(30,10,utf8_decode($row['stock']),1,0,'C',0);
	// $pdf->Cell(30,6,utf8_decode($row['serial']),1,0,'C',0);
	$pdf->Cell(30,10,utf8_decode($row['codigo_producto']),1,0,'C',0);
	$pdf->Cell(60,10,utf8_decode($row['numero_bien']),1,0,'C',0);
	$pdf->Cell(185,10,utf8_decode($row['nombre_producto']),1,0,'C',0);
	// $pdf->Cell(30,6,utf8_decode($row['modelo_producto']),1,0,'C',0);
	// $pdf->Cell(30,6,utf8_decode($row['marca_producto']),1,0,'C',0);
	// $pdf->Cell(40,6,utf8_decode($row['id_categoria']),1,0,'C',0);
	$pdf->Cell(30,10,utf8_decode($row['codigoin']),1,0,'C',0); 
	$pdf->Cell(70,10,utf8_decode($row['concepto_inventario']),1,0,'C',0);
	// $pdf->Cell(70,6,utf8_decode($row['id_area']),1,0,'C',0);
	
	// $pdf->Cell(70,6,utf8_decode($row['id_motivo']),1,0,'C',0);
	$pdf->Cell(180,10,utf8_decode($row['condicion_producto']),1,0,'C',0);
	// $pdf->Cell(70,6,utf8_decode($row['responsable_entrega']),1,0,'C',0);
	// $pdf->Cell(70,6,utf8_decode($row['asignacion_producto']),1,0,'C',0);
	// $pdf->Cell(70,6,utf8_decode($row['id_rango']),1,0,'C',0);
	// $pdf->Cell(70,6,utf8_decode($row['id_cargo']),1,0,'C',0);
	
	$pdf->Cell(35,10,utf8_decode($row['precio_producto']),1,1,'C',0);	
	}
	


	$pdf->SetFont('Arial','',20);

	// while ($row = $resultado->fetch_assoc())
	// {
	// 	$pdf->Cell(70,6,utf8_decode($row['estado']),1,0,'C');
	// 	$pdf->Cell(20,6,($row['id_municipio']),1,0,'C');
	// 	$pdf->Cell(70,6,utf8_decode($row['municipio']),1,0,'C');			
	// }
	$pdf->Output();
?><?php
	include('plantilla.php');
	require('conexion.php');

	// $query = "SELECT e.estado, m.id_municipio, m.municipio FROM t_municipio AS m INNER JOIN t_estado AS e ON m.id_estado=e.id_estado";

	$resultado = $mysqli->query($query);

	$pdf = new PDF('L', 'mm', array(1000,500));
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(30,10,'Cantidades',1,0,'C',1);
	$pdf->Cell(30,10,'Serial',1,0,'C',1);
	$pdf->Cell(30,10,utf8_decode('Código'),1,0,'C',1);
	$pdf->Cell(70,10,'Nombre',1,0,'C',1);
	$pdf->Cell(30,10,'Modelo',1,0,'C',1);
	$pdf->Cell(30,10,'Marca',1,0,'C',1);
	$pdf->Cell(40,10,utf8_decode('Categoría'),1,0,'C',1);
	$pdf->Cell(70,10,utf8_decode('Área'),1,0,'C',1);
	$pdf->Cell(70,10,utf8_decode('N° Bien'),1,0,'C',1);
	$pdf->Cell(70,10,'Motivo',1,0,'C',1);
	$pdf->Cell(70,10,utf8_decode('Condición'),1,0,'C',1);
	$pdf->Cell(70,10,'Responsable',1,0,'C',1);
	$pdf->Cell(70,10,utf8_decode('Asignación'),1,0,'C',1);
	$pdf->Cell(70,10,'Rango',1,0,'C',1);
	$pdf->Cell(70,10,'Cargo',1,0,'C',1);
	$pdf->Cell(70,10,'Concepto',1,0,'C',1);
	$pdf->Cell(70,10,'Precio',1,1,'C',1);

	

	$pdf->Cell(30,10,utf8_decode(''),1,0,'C',0);
	$pdf->Cell(30,10,utf8_decode(''),1,0,'C',0);
	$pdf->Cell(25,10,utf8_decode(''),1,0,'C',0);
	$pdf->Cell(70,10,utf8_decode(''),1,0,'C',0);
	$pdf->Cell(30,10,utf8_decode(''),1,0,'C',0);
	$pdf->Cell(30,10,utf8_decode(''),1,0,'C',0);
	$pdf->Cell(40,10,utf8_decode(''),1,0,'C',0);
	$pdf->Cell(70,10,utf8_decode(''),1,0,'C',0);
	$pdf->Cell(70,10,utf8_decode(''),1,0,'C',0);
	$pdf->Cell(70,10,utf8_decode(''),1,0,'C',0);
	$pdf->Cell(70,10,utf8_decode(''),1,0,'C',0);
	$pdf->Cell(70,10,utf8_decode(''),1,0,'C',0);
	$pdf->Cell(70,10,utf8_decode(''),1,0,'C',0);
	$pdf->Cell(70,10,utf8_decode(''),1,0,'C',0);
	$pdf->Cell(70,10,utf8_decode(''),1,0,'C',0);
	$pdf->Cell(70,10,utf8_decode(''),1,0,'C',0);
	$pdf->Cell(70,10,utf8_decode(''),1,1,'C',0);	



	$pdf->SetFont('Arial','',20);

	// while ($row = $resultado->fetch_assoc())
	// {
	// 	$pdf->Cell(70,6,utf8_decode($row['estado']),1,0,'C');
	// 	$pdf->Cell(20,6,($row['id_municipio']),1,0,'C');
	// 	$pdf->Cell(70,6,utf8_decode($row['municipio']),1,0,'C');			
	// }
	$pdf->Output();
?>