<script src="dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">

<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from empresa";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	 
		<th>Nombre</th>
		<th>Cargo</th>
		<th>salario</th>
		<th>Dias Laborados</th>
		<th>Comision</th>
		<th>Total horas extras</th>
		<th>Vacaciónes</th>
		<th>SUB - TOTAL</th>
		<th>ISS</th>
		<th>AFP</th>
		<th>RENTA</th>
		<th>Total de retenciones</th>
		<th>Liquido a pagar</th>
		<th>Quincena</th>
		<th>Eliminar</th>
	 
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["nombre"]; ?></td>
	<td><?php echo $r["cargo"]; ?></td>
	<td><?php echo $r["salario"]; ?></td>
	<td><?php echo $r["dia_labor"]; ?></td>
	<td><?php echo $r["comision"]; ?></td>
	<td><?php echo $r["horas_extras"]; ?></td>
	<td><?php echo $r["vacaciones"]; ?></td>
	<td><?php echo $r["sub_total"]; ?></td>
	<td><?php echo $r["iss"]; ?></td>
	<td><?php echo $r["afp"]; ?></td>
	<td><?php echo $r["renta"]; ?></td>
	<td><?php echo $r["tot_reten"]; ?></td>
	<td><?php echo $r["liqui_paga"]; ?></td>
	<td><?php echo $r["quincena"]; ?></td>
	<td style="width:150px;">
		
		<a href="#" id="del-<?php echo $r["id"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["id"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="./php/eliminar.php?id="+<?php echo $r["id"];?>;

			}

		});
		</script>
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
