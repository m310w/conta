
  
  <!-- Modal -->
  <div class="modal fade" id="prueba" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    
    
    
    <div class="modal-dialog">
    
      <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Resultado de datos</h4>
              </div>

              
              

                <div class="modal-body">
                       <form role="form" method="post" action="php/agregar.php">
                              
                             

                            <div class="form-group">
                              <label>Nombre</label>
                              <br><br>
                              <input    readonly  name="nombre" id = "nombre"></input>
                              
                            </div>

                            <div class="form-group">
                              <label>Cargo</label>
                              <br><br>
                              <input    readonly   name="cargo"   id = "cargo"></input>
                            </div>

                            

                            <div class="form-group">
                              <label>Dias laborados</label>
                                 <br><br>
                              <input readonly    name="dia_labor"   id = "dia_labor"> </input>
                            </div>


                            <div class="form-group">
                              <label>salario</label>
                              <br><br>
                              <input readonly    name="salario"   id = "salario"></input>
                            </div>


                            <div class="form-group">
                              <label>Comision</label>
                                <br><br>
                                <input readonly   name="comision"   id = "comision"> </input>
                            </div>

                            <div class="form-group">
                              <label>Hora extra diruna</label>
                                <br><br>
                                <input readonly      id = "hor_extr_diurna"> </input>
                            </div>

                            <div class="form-group">
                              <label>Hora extra nocturna</label>
                                <br><br>
                                <input readonly      id = "hor_extr_nocturna"> </input>
                            </div>

                            <div class="form-group">
                              <label>Total de horas extras</label>
                                <br><br>
                                <input readonly   name="horas_extras"   id = "total_hor_extr"> </input>
                            </div>

                            <div class="form-group">
                              <label>Vacaciones</label>
                                <br><br>
                                <input readonly   name="vacaciones"   id = "tot_vacaciones"> </input>
                            </div>

                            <div class="form-group">
                              <label>SUB - TOTAL</label>
                                <br><br>
                                <input readonly     name = "sub_total" id = "todo_sub_total"> </input>
                            </div>

                                      <div class="form-group">
                                        <label>ISS</label>
                                          <br><br>
                                          <input readonly     name = "iss" id = "iss"> </input>
                                      </div>
                                      
                                      <div class="form-group">
                                        <label>AFP</label>
                                          <br><br>
                                          <input readonly     name = "afp" id = "AFP"> </input>
                                      </div>

                                      <div class="form-group">
                                      <label>RENTA</label>
                                        <br><br>
                                          <input readonly     name = "renta" id = "renta"> </input>
                                      </div>

                                      <div class="form-group">
                                      <label>Total de retenciones</label>
                                        <br><br>
                                          <input readonly     name = "tot_reten" id = "tot_reten"> </input>
                                      </div>

                                      <div class="form-group">
                                      <label>Liquido a pagar    </label>
                                        <br><br>
                                          <input readonly     name = "liqui_paga" id = "liqui_paga"> </input>
                                      </div>



                            

                            

                            
                            
                                       
                

                              <button type="submit" class="btn btn-default">Agregar</button>
                             


                                

                    </form>

                </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

 