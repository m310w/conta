<?php

if(!empty($_POST)){
	if(isset($_POST["nombre"]) &&isset($_POST["cargo"]) &&isset($_POST["salario"]) &&isset($_POST["dia_labor"]) &&isset($_POST["comision"])  &&isset($_POST["horas_extras"]) &&isset($_POST["vacaciones"]) &&isset($_POST["sub_total"]) &&isset($_POST["iss"]) &&isset($_POST["afp"]) &&isset($_POST["renta"])  &&isset($_POST["tot_reten"])  &&isset($_POST["liqui_paga"])  &&isset($_POST["quincena"])  ){
		if($_POST["nombre"]!=""&& $_POST["cargo"]!=""&&$_POST["dia_labor"]!=""){
			include "conexion.php";
			
			$sql = "insert into empresa(nombre,cargo,salario,dia_labor,comision,horas_extras,vacaciones,sub_total,iss,afp,renta,tot_reten,liqui_paga,quincena) value (\"$_POST[nombre]\",\"$_POST[cargo]\",\"$_POST[salario]\",\"$_POST[dia_labor]\",\"$_POST[comision]\",\"$_POST[horas_extras]\",\"$_POST[vacaciones]\",\"$_POST[sub_total]\",\"$_POST[iss]\",\"$_POST[afp]\",\"$_POST[renta]\",\"$_POST[tot_reten]\",\"$_POST[liqui_paga]\",\"$_POST[quincena]\"  	)";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../ver.php';</script>";

			}
		}
	}
}



?>

