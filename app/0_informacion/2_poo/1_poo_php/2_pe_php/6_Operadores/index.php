<?php

// declaración e inicialización de variables
$nom_aplicacion = "Calculadora";
$num1 = 2;
$num2 = 4;

// entrada

// proceso

// salida
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $nom_aplicacion ?></title>
	<link rel="stylesheet" href="styles.css">	
</head>
<body>
	<h1><?php echo $nom_aplicacion; ?></h1>
	<!-- Operadores Aritméticos -->
	<table>
		<tr>
			<th class="fondo" colspan="6">OPERADORES ARITMÉTICOS</th>			
		</tr>
		<tr>
			<th>Nombre</th>
			<th>Operador</th>
			<th>Variables</th>
			<th>Ejemplo</th>
			<th>Resultado</th>
			<th>PHP</th>
		</tr>
		<tr>
			<td>Suma</td>
			<td>+</td>
			<td>$num1 = 2<br>$num2 = 4<br>$suma = 0</td>
			<td>$suma = $num1 + $num2</td>
			<td>$suma = 6</td>
			<td><?php echo $suma = $num1 + $num2 ?></td>
		</tr>
		<tr>
			<td>Resta</td>
			<td>-</td>
			<td>$num1 = 2<br>$num2 = 4<br>$resta = 0</td>
			<td>$resta = $num1 - $num2</td>
			<td>$resta = -2</td>
			<td><?php echo $resta = $num1 - $num2 ?></td>
		</tr>
		<tr>
			<td>Multiplicación</td>
			<td>*</td>
			<td>$num1 = 2<br>$num2 = 4<br>$mult = 0</td>
			<td>$mult = $num1 * $num2</td>
			<td>$mult = 8</td>
			<td><?php echo $mult = $num1 * $num2 ?></td>
		</tr>
		<tr>
			<td>División</td>
			<td>/</td>
			<td>$num1 = 2<br>$num2 = 4<br>$divis = 0</td>
			<td>$divis = $num1 / $num2</td>
			<td>$divis = 0.5</td>
			<td><?php echo $divis = $num1 / $num2 ?></td>
		</tr>
		<tr>
			<td>Módulo</td>
			<td>%</td>
			<td>$num1 = 2<br>$num2 = 4<br>$mod = 0</td>
			<td>$mod = $num2 % $num1</td>
			<td>$mod = 0</td>
			<td><?php echo $mod = $num2 % $num1 ?></td>
		</tr>
	</table>
	<br>
	<!-- Operadores de Asignación -->
	<table>
		<tr>
			<th class="fondo" colspan="6">OPERADORES DE ASIGNACIÓN</th>			
		</tr>
		<tr>
			<th>Nombre</th>
			<th>Operador</th>
			<th>Variables</th>
			<th>Ejemplo</th>
			<th>Resultado</th>
			<th>PHP</th>
		</tr>
		<tr>
			<td>Asignación</td>
			<td>=</td>
			<td>$num1 = 2<br>$num2 = 4</td>
			<td>$num1 = $num2</td>
			<td>$num1 = 4</td>
			<td><?php echo $num1 = $num2 ?></td>
		</tr>
		<tr>
			<td>Suma y asignación</td>
			<td>+=</td>
			<td>$num1 = 4</td>
			<td>$num1 += 7</td>
			<td>$num1 = 11</td>
			<td><?php echo $num1 += 7 ?></td>
		</tr>
		<tr>
			<td>Resta y asignación</td>
			<td>-=</td>
			<td>$num1 = 11</td>
			<td>$num1 -= 4</td>
			<td>$num1 = 11</td>
			<td><?php echo $num1 -= 7 ?></td>
		</tr>
		<tr>
			<td>Multiplicación y asignación</td>
			<td>*=</td>
			<td>$num1 = 4</td>
			<td>$num1 *= 5</td>
			<td>$num1 = 20</td>
			<td><?php echo $num1 *= 5 ?></td>
		</tr>
		<tr>
			<td>División y asignación</td>
			<td>/=</td>
			<td>$num1 = 20</td>
			<td>$num1 /= 4</td>
			<td>$num1 = 5</td>
			<td><?php echo $num1 /= 4 ?></td>
		</tr>
		<tr>
			<td>Módulo y asignación</td>
			<td>%=</td>
			<td>$num1 = 5</td>
			<td>$num1 %= 3</td>
			<td>$num1 = 2</td>
			<td><?php echo $num1 %= 3 ?></td>
		</tr>				
	</table>
	<br>
	<!-- Operadores de Comparación -->
	<table class="min-fuente">
		<tr>
			<th class="fondo" colspan="6">OPERADORES DE COMPARACIÓN</th>
		</tr>
		<tr>
			<th>Nombre</th>
			<th>Operador</th>
			<th>Variables</th>
			<th>Ejemplo</th>
			<th>Resultado</th>
			<th>PHP</th>
		</tr>
		<tr>
			<td>Igual</td>
			<td>==</td>
			<td>$num1 = 2<br>$num2 = 4<br>$res = ""</td>
			<td class="izq">
				if ($num1 == $num2) { <br>
					&nbsp;&nbsp;&nbsp;&nbsp;$res = "Son iguales";<br>
				}else{ <br>
					&nbsp;&nbsp;&nbsp;&nbsp;$res = "Son diferentes";<br>
				}
			</td>
			<td>$res = "Son diferentes"</td>
			<td><?php				
				if ($num1 == $num2) {
					$res = "Son iguales";
				}else{
					$res = "Son diferentes";
				}
				echo $res;
				?>
			</td>
		</tr>
		<tr>
			<td>Diferente</td>
			<td>!=, <></td>
			<td>$num1 = 2<br>$num2 = 4<br>$res = ""</td>
			<td class="izq">
				if ($num1 != $num2) { <br>
					&nbsp;&nbsp;&nbsp;&nbsp;$res = "Son diferentes";<br>
				}else{ <br>
					&nbsp;&nbsp;&nbsp;&nbsp;$res = "Son iguales";<br>
				}
			</td>
			<td>$res = "Son diferentes"</td>
			<td><?php				
				if ($num1 == $num2) {
					$res = "Son iguales";
				}else{
					$res = "Son diferentes";
				}
				echo $res;
				?>
			</td>
		</tr>
		<tr>
			<td>Idéntico en valor y tipo</td>
			<td>===</td>
			<td>$num1 = 2<br>$num2 = "2"<br>$res = ""</td>
			<td class="izq">				
				if ($num1 === $num2) { <br>
					&nbsp;&nbsp;&nbsp;&nbsp;$res = "Son totalmente idénticos";<br>
				}else{ <br>
					&nbsp;&nbsp;&nbsp;&nbsp;$res = "Son totalmente distintos";<br>
				}
			</td>
			<td>$res = "Son totalmente distintos"</td>
			<td><?php
				$num1 = 2;
				$num2 = "2";
				if ($num1 === $num2) {
					$res = "Son totalmente idénticos";
				}else{
					$res = "Son totalmente distintos";
				}
				echo $res;
				?>
			</td>
		</tr>
		<tr>
			<td>Distinto en valor o tipo</td>
			<td>!==</td>
			<td>$num1 = 2<br>$num2 = "2"<br>$res = ""</td>
			<td class="izq">				
				if ($num1 !== $num2) { <br>
					&nbsp;&nbsp;&nbsp;&nbsp;$res = "Son idénticos en valor y tipo";<br>
				}else{ <br>
					&nbsp;&nbsp;&nbsp;&nbsp;$res = "Son distintos en valor o tipo";<br>
				}
			</td>
			<td>$res = "Son totalmente distintos"</td>
			<td><?php
				$num1 = 2;
				$num2 = "2";
				if ($num1 !== $num2) {
					$res = "Son distintos en valor o tipo";
				}else{
					$res = "Son idénticos en valor o tipo";
				}
				echo $res;
				?>
			</td>
		</tr>
		<tr>
			<td>Mayor que</td>
			<td>></td>
			<td>$num1 = 2<br>$num2 = 4<br>$res = ""</td>
			<td class="izq">				
				if ($num2 > $num1) { <br>
					&nbsp;&nbsp;&nbsp;&nbsp;$res = "Es mayor";<br>
				}else{ <br>
					&nbsp;&nbsp;&nbsp;&nbsp;$res = "Es menor";<br>
				}
			</td>
			<td>$res = "Es mayor"</td>
			<td><?php
				$num1 = 2;
				$num2 = 4;
				if ($num2 > $num1) {
					$res = "Es mayor";
				}else{
					$res = "Es menor";
				}
				echo $res;
				?>
			</td>
		</tr>
		<tr>
			<td>Menor que</td>
			<td><</td>
			<td>$num1 = 2<br>$num2 = 4<br>$res = ""</td>
			<td class="izq">				
				if ($num1 < $num2) { <br>
					&nbsp;&nbsp;&nbsp;&nbsp;$res = "Es menor";<br>
				}else{ <br>
					&nbsp;&nbsp;&nbsp;&nbsp;$res = "Es mayor";<br>
				}
			</td>
			<td>$res = "Es menor"</td>
			<td><?php				
				if ($num1 < $num2) {
					$res = "Es menor";
				}else{
					$res = "Es mayor";
				}
				echo $res;
				?>
			</td>
		</tr>
		<tr>
			<td>Mayor o igual que</td>
			<td>>=</td>
			<td>$num1 = 2<br>$num2 = 2<br>$res = ""</td>
			<td class="izq">				
				if ($num2 >= $num1) { <br>
					&nbsp;&nbsp;&nbsp;&nbsp;$res = "Es mayor o igual";<br>
				}else{ <br>
					&nbsp;&nbsp;&nbsp;&nbsp;$res = "Es menor o igual";<br>
				}
			</td>
			<td>$res = "Es mayor o igual"</td>
			<td><?php
				$num1 = 2;
				$num2 = 2;
				if ($num2 >= $num1) {
					$res = "Es mayor o igual";
				}else{
					$res = "Es menor o igual";
				}
				echo $res;
				?>
			</td>
		</tr>
		<tr>
			<td>Menor o igual que</td>
			<td><=</td>
			<td>$num1 = 2<br>$num2 = 2<br>$res = ""</td>
			<td class="izq">				
				if ($num1 <= $num2) { <br>
					&nbsp;&nbsp;&nbsp;&nbsp;$res = "Es menor o igual";<br>
				}else{ <br>
					&nbsp;&nbsp;&nbsp;&nbsp;$res = "Es mayor o igual";<br>
				}
			</td>
			<td>$res = "Es menor o igual"</td>
			<td><?php				
				if ($num1 <= $num2) {
					$res = "Es menor o igual";
				}else{
					$res = "Es mayor o igual";
				}
				echo $res;
				?>
			</td>
		</tr>						
	</table>
	<br>
	<!-- Operadores Lógicos -->
	<table>
		<tr>
			<th class="fondo" colspan="6">OPERADORES LÓGICOS</th>			
		</tr>
		<tr>
			<th>Nombre</th>
			<th>Operador</th>
			<th>Variables</th>
			<th>Ejemplo</th>
			<th>Resultado</th>
			<th>PHP</th>
		</tr>
		<tr>
			<td>Y</td>
			<td>AND, &&</td>
			<td>$num1 = 2<br>$num2 = 2<br>$res = ""</td>
			<td class="izq">				
				if (($num1 == 2) && ($num2 <= 4))  { <br>
					&nbsp;&nbsp;&nbsp;&nbsp;$res = "Verdadero";<br>
				}else{ <br>
					&nbsp;&nbsp;&nbsp;&nbsp;$res = "Falso";<br>
				}
			</td>
			<td>$res = "Verdadero"</td>
			<td><?php				
				if (($num1 == 2) && ($num2 <= 4)) {
					$res = "Verdadero";
				}else{
					$res = "Falso";
				}
				echo $res;
				?>
			</td>
		</tr>
		<tr>
			<td>O</td>
			<td>OR, ||</td>
			<td>$num1 = 2<br>$num2 = 2<br>$res = ""</td>
			<td class="izq">				
				if (($num1 == 3) || ($num2 <= 4))  { <br>
					&nbsp;&nbsp;&nbsp;&nbsp;$res = "Verdadero";<br>
				}else{ <br>
					&nbsp;&nbsp;&nbsp;&nbsp;$res = "Falso";<br>
				}
			</td>
			<td>$res = "Verdadero"</td>
			<td><?php				
				if (($num1 == 3) || ($num2 <= 4)) {
					$res = "Verdadero";
				}else{
					$res = "Falso";
				}
				echo $res;
				?>
			</td>
		</tr>
		<tr>
			<td>XOR</td>
			<td>XOR</td>
			<td>$num1 = 2<br>$num2 = 2<br>$res = ""</td>
			<td class="izq">				
				if (($num1 == 3) XOR ($num2 <= 4))  { <br>
					&nbsp;&nbsp;&nbsp;&nbsp;$res = "Verdadero";<br>
				}else{ <br>
					&nbsp;&nbsp;&nbsp;&nbsp;$res = "Falso";<br>
				}
			</td>
			<td>$res = "Verdadero"</td>
			<td><?php				
				if (($num1 == 3) XOR ($num2 <= 4)) {
					$res = "Verdadero";
				}else{
					$res = "Falso";
				}
				echo $res;
				?>
			</td>
		</tr>
		<tr>
			<td>NOT</td>
			<td>!</td>
			<td>$num1 = 2<br>$num2 = 2<br>$res = ""</td>
			<td class="izq">				
				if (!(($num1 == 3) AND ($num2 <= 4)))  { <br>
					&nbsp;&nbsp;&nbsp;&nbsp;$res = "Verdadero";<br>
				}else{ <br>
					&nbsp;&nbsp;&nbsp;&nbsp;$res = "Falso";<br>
				}
			</td>
			<td>$res = "Verdadero"</td>
			<td><?php				
				if (!(($num1 == 3) AND ($num2 <= 4))) {
					$res = "Verdadero";
				}else{
					$res = "Falso";
				}
				echo $res;
				?>
			</td>
		</tr>
	</table>
	<br>
	<!-- Operadores de Incremento y Decremento -->
	<table>
		<tr>
			<th class="fondo" colspan="6">OPERADORES DE INCREMENTO Y DECREMENTO</th>			
		</tr>
		<tr>
			<th>Nombre</th>
			<th>Operador</th>
			<th>Variables</th>
			<th>Ejemplo</th>
			<th>Resultado</th>
			<th>PHP</th>
		</tr>
		<tr>
			<td>Pre-incremento</td>
			<td>++$num1</td>
			<td>$num1 = 2<br>$num2 = 2</td>
			<td>$num2 = ++$num1</td>
			<td>$num1 = 3<br>$num2 = 3</td>
			<td><?php 
					$num2 = ++$num1;
					echo "$num1 <br> $num2";
				?>
			</td>
		</tr>
		<tr>
			<td>Post-incremento</td>
			<td>$num1++</td>
			<td>$num1 = 3<br>$num2 = 3</td>
			<td>$num2 = $num1++</td>
			<td>$num1 = 4<br>$num2 = 3</td>
			<td><?php					
					$num2 = $num1++;
					echo "$num1 <br> $num2";
				?>
			</td>
		</tr>
		<tr>
			<td>Pre-decremento</td>
			<td>--$num1</td>
			<td>$num1 = 4<br>$num2 = 3</td>
			<td>$num2 = --$num1</td>
			<td>$num1 = 3<br>$num2 = 3</td>
			<td><?php					
					$num2 = --$num1;
					echo "$num1 <br> $num2";
				?>
			</td>
		</tr>
		<tr>
			<td>Post-decremento</td>
			<td>$num1--</td>
			<td>$num1 = 3<br>$num2 = 3</td>
			<td>$num2 = $num1--</td>
			<td>$num1 = 2<br>$num2 = 3</td>
			<td><?php					
					$num2 = $num1--;
					echo "$num1 <br> $num2";
				?>
			</td>
		</tr>		
	</table>
	<br>
	<!-- Operadores de Cadena de Texto -->
	<table>
		<tr>
			<th class="fondo" colspan="6">OPERADORES DE CADENA DE TEXTO</th>
		</tr>
		<tr>
			<th>Nombre</th>
			<th>Operador</th>
			<th>Variables</th>
			<th>Ejemplo</th>
			<th>Resultado</th>
			<th>PHP</th>
		</tr>
		<tr>
			<td>Concatenación</td>
			<td>punto (.)</td>
			<td>$text1 = "1ra Cadena " <br>$text2 = "2da Cadena" <br> $res = ""</td>
			<td>$res = $text1 . "con " . $text2;</td>
			<td>$res = "1ra Cadena con 2da Cadena"</td>
			<td><?php
					$text1 = "1ra Cadena ";
					$text2 = "2da Cadena";
					$res = "";
					$res = $text1 . "con " . $text2;
					echo $res;
				?>
			</td>
		</tr>
		<tr>
			<td>Concatenación y asignación</td>
			<td>punto igual (.=)</td>
			<td>$text1 = "1ra Cadena"</td>
			<td>$text1 .= " con 2da Cadena";</td>
			<td>$text1 = "1ra Cadena con 2da Cadena"</td>
			<td><?php
					$text1 = "1ra Cadena";
					$text1 .= " con 2da Cadena";					
					echo $text1;
				?>
			</td>
		</tr>				
	</table>
</body>
</html>