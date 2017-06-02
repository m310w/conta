
<html>
	<head>
		<title>Planillas 2.0.</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
     <script src="js/functions.js"></script>
     <script src="js/validar.js"></script>
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
  <?php include "prueba.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>PLANILLA</h2>
<!-- Button trigger modal -->
  <a data-toggle="modal" href="#myModal"   class="btn btn-default">Generar registro</a>
<br><br>
                              <!-- Modal -->
                              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      <h4 class="modal-title">Agregar</h4>
                                    </div>
                                    <div class="modal-body">

                            
                                              
                                                <label  >Nombre</label>
                                                <input type="text" class="form-control"  id="ver_nombre" onkeypress="return sololetras(event)"  > </input>
                                             
                                              
                                                <label >Cargo</label>
                                                <input type="text" class="form-control" id="ver_cargo"   onkeypress="return sololetras(event)"> </input>
                                              
                                              
                                                <label  >Dias Laborados</label>
                                                <input type="text" class="form-control" id="ver_di_labor" onkeypress="return solonumeros(event)"  > </input>
                                             
                                              
                                                <label  >Salario</label>
                                                <input type="text" class="form-control" id="ver_salario"   onkeypress="return solonumeros(event)" > </input>
                                             
                                              
                                                <label  >Comision</label>
                                                <input type="text" class="form-control" id="ver_comision" onkeypress="return solonumeros(event)"> </input>

                                                <label  >Hora extra diurna</label>
                                                <input type="text" class="form-control" id="ver_hor_extr_diurna" onkeypress="return solonumeros(event)" > </input>

                                                <label  >Hora extra nocturna</label>
                                                <input type="text" class="form-control" id="ver_hor_extr_nocturna" onkeypress="return solonumeros(event)"> </input>

                                                

                                                

                                                

                                         

                                              <button data-toggle="modal"  href="#prueba"  class="btn btn-primary" data-dismiss="modal" aria-hidden="true" onClick="tel(); validar();" >Agregar</button>
                            

                                    </div>

                                  </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                              </div><!-- /.modal -->


<?php include "php/tabla.php"; ?>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>