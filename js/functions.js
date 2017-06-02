 function tel(){

   
   var control = 0;
    var ver_nombre = document.getElementById("ver_nombre").value;
    document.getElementById("nombre").value = ver_nombre;

    var ver_cargo = document.getElementById("ver_cargo").value;
    document.getElementById("cargo").value = ver_cargo;

    var ver_di_labor = document.getElementById("ver_di_labor").value;
    //Validacion de los dias del mes
            if(ver_di_labor <= 6000){
                document.getElementById("dia_labor").value = ver_di_labor;

                  //Obtener los dias laborados
                    ver_di_labor.split().forEach(ver_di_labor=> dias_laborados = parseInt(ver_di_labor));
            }else{
              alert("Coloque la cantidad correcta de dias laborados en el mes");
              href= location.reload(); 
        }
    
//***************************************************************************************************************************************** */
    var ver_salario = document.getElementById("ver_salario").value;
    document.getElementById("salario").value = ver_salario;

          //Obtener el valor del dia y la hora laboral
            ver_salario.split().forEach(ver_salario=> salario = parseInt(ver_salario));
            
              var salario_dia = (salario /dias_laborados);
               
              var salario_hora = (salario_dia)/8;
              //------------------------------------------concepto de la vacacion
              var quincena = salario_dia * 15;
              alert(quincena)
              var porcentaje = quincena * 0.3;
              //resultado de las vacaciones
              alert(quincena)
              alert(porcentaje)
              var pago_vacacion = quincena   +   porcentaje;

                        //Obtengo la hora sumada y solo faltaria multiplicara por las horas
                            var salariopordos = salario_hora += salario_hora; 


/********************************************************************************************************************************************* */
    var ver_comision = document.getElementById("ver_comision").value;
          if(ver_comision == 0){
                document.getElementById("comision").value = "0";
                
          }else{
                  document.getElementById("comision").value = ver_comision;

          }


/********************************************************************************************************************************************* */
    var ver_hor_extr_diurna = document.getElementById("ver_hor_extr_diurna").value;
          if(ver_hor_extr_diurna == 0){
              document.getElementById("hor_extr_diurna").value = "0";

          }else{
                  document.getElementById("hor_extr_diurna").value = ver_hor_extr_diurna;

                    //Obtengo las horas diurnas
                          ver_hor_extr_diurna.split().forEach(ver_hor_extr_diurna=> hor_extr_diurna = parseInt(ver_hor_extr_diurna));

                          var hora_diurna = salariopordos * hor_extr_diurna;
                          

          }


/************************************************************************************************************************************************ */
    var ver_hor_extr_nocturna = document.getElementById("ver_hor_extr_nocturna").value;
    if(ver_hor_extr_nocturna == 0){
            document.getElementById("hor_extr_nocturna").value = "0";

    }else{
            document.getElementById("hor_extr_nocturna").value = ver_hor_extr_nocturna;

              //Obtengo la hora extra nocturna
          
                  ver_hor_extr_nocturna.split().forEach(ver_hor_extr_nocturna=> hor_extr_nocturna = parseInt(ver_hor_extr_nocturna));
                    
                    var hora_nocturna =salario_hora * 0.0125 *  hor_extr_nocturna * 100 ;
                    alert (hora_nocturna)

    }
    

var hora_extra_total = hora_diurna + hora_nocturna;

//Funcion de obtener la horas extras totales**************************************
if(ver_hor_extr_diurna == 0 && ver_hor_extr_nocturna == 0){
  document.getElementById("total_hor_extr").value = "0";
  var hora_extra_total = 0;
  
   
}else if(ver_hor_extr_diurna == 0 && ver_hor_extr_nocturna !=0){
 
    document.getElementById("total_hor_extr").value = hora_nocturna;
      var hora_extra_total = 0;


}else if (ver_hor_extr_diurna != 0 && ver_hor_extr_nocturna == 0){
      document.getElementById("total_hor_extr").value = hora_diurna;
        var hora_extra_total = 0;


}else if ( ver_hor_extr_diurna != 0 && ver_hor_extr_nocturna !=0){
       var round_hor_total = hora_extra_total.toFixed(2) ;
     
          document.getElementById("total_hor_extr").value = round_hor_total;
          
}





//Muestra el dato de vacacion

 document.getElementById("tot_vacaciones").value = pago_vacacion;


//ZONA - Sub total
var sub_total = hora_extra_total + salario + porcentaje;
//Redonde el valor a mostrar del sub total
 var round_sub_total = sub_total.toFixed(2) ;

//Sete el valor al campo sub-total
document.getElementById("todo_sub_total").value = round_sub_total;


//******************************************RETENCIONES*********************************** */


//iss
var iss = salario  * 0.03;
document.getElementById("iss").value = iss;


//AFP
var AFP = salario * 0.0625;
document.getElementById("AFP").value = AFP;


//seteamos a 0


if(salario <= 472.00){
  
          document.getElementById("renta").value = "Sin retencion";
          
          //total de retenciones
          var tot_retencio1 = iss + AFP;
            document.getElementById("tot_reten").value = tot_retencio1;

          //Seteamos al salario liquido.
          var liqui_paga1 = (salario - iss) - AFP;
            document.getElementById("liqui_paga").value = liqui_paga1;

} else if (salario >= 472.1 && salario <= 895.24){
      var tramoII = (salario - iss) - AFP;
      var tramoII1 = tramoII  - 472.00;
      var tramoII2 = tramoII1 * 0.1;
      var tramoII3 = tramoII2 + 17.67;
         var round_tramoII3 = tramoII3.toFixed(2) ;

      
      //Asignamos la renta
       document.getElementById("renta").value = round_tramoII3;

       //Asignamos el liquido a pagar
        var liqui_paga2 = ((salario - iss) - AFP) - tramoII3;
           var liquid_round_tramoII3 = liqui_paga2.toFixed(2) ;
              document.getElementById("liqui_paga").value = liquid_round_tramoII3;

          //Asignamos el total de retenciones
      var  tot_retencio2 = iss + AFP + tramoII3;
        var round_tot_retencio2 = tot_retencio2.toFixed(2) ;
          document.getElementById("tot_reten").value = round_tot_retencio2;

} else if (salario >= 895.25 && salrio <=2038.10 ){

      var tramoIII = (salario - iss) - AFP;
      var tramoIII1 = tramoIII  - 895.24;
      var tramoIII2 = tramoIII1 * 0.2;
      var tramoIII3 = tramoIII2 + 60.00;
         var round_tramoIII3 = tramoIII3.toFixed(2) ;

      
      //Asignamos la renta
       document.getElementById("renta").value = round_tramoIII3;

       //Asignamos el liquido a pagar
        var liqui_paga3 = ((salario - iss) - AFP) - tramoIII3;
          var liquid_round_tramoIII3 = liqui_paga3.toFixed(2) ;
            document.getElementById("liqui_paga").value = liquid_round_tramoIII3;

          //Asignamos el total de retenciones
          var  tot_retencio3 = iss + AFP + tramoIII3;
            var round_tot_retencio3 = tot_retencio3.toFixed(2) ;
             document.getElementById("tot_reten").value = round_tot_retencio3;

} else if (salario >= 2038.11 ){

        var tramoIIII = (salario - iss) - AFP;
      var tramoIIII1 = tramoIIII  - 2038.10;
      var tramoIIII2 = tramoIIII1 * 0.3;
      var tramoIIII3 = tramoIIII2 + 288.57;
         var round_tramoIII3 = tramoIIII3.toFixed(2) ;

      
      //Asignamos la renta
       document.getElementById("renta").value = round_tramoIII3;

       //Asignamos el liquido a pagar
        var liqui_paga4 = ((salario - iss) - AFP) - tramoIIII3;
          var liquid_round_tramoIIII3 = liqui_paga4.toFixed(2) ;
            document.getElementById("liqui_paga").value = liquid_round_tramoIIII3;

          //Asignamos el total de retenciones
          var  tot_retencio4 = iss + AFP + tramoIIII3;
             document.getElementById("tot_reten").value = tot_retencio4;

}



//Solo faltaria que guarde en la base







  }