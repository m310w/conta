  src="js/functions.js"
  src="ver.php"
   

//Validacion de busquedad que no deje buscar campo vacion           
 function validarForm(formulario) 
    {
        if(formulario.s.value.length==0) 
            { //¿Tiene 0 caracteres?
            formulario.s.focus();  // Damos el foco al control
                   swal({
                            title: "Debes de rellenar el campo",
                            type: "warning",
                        });
                return false; 
            } //devolvemos el foco  
        return true; //Si ha llegado hasta aquí, es que todo es correcto 
 }   

  //Validacion de solo letras
function sololetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
  }

//Validacion de solo numeros
   function solonumeros(x){
       key2 = x.keyCode || x.which;
       tecla2 = String.fromCharCode(key2).toLowerCase();
       letras2 = "0123456789";
       especiales2 = "8-37-39-46";

       tecla_especial2 = false
       for(var i in especiales2){
            if(key2 == especiales2[i]){
                tecla_especial2 = true;
                break;
            }
        }

        if(letras2.indexOf(tecla2)==-1 && !tecla_especial2){
            return false;
        }
  }



//Validando los campos vacios

 function validar(){

    
    if(ver_nombre.value==0){
     
         alert("Uno de los campos esta vacio, vuelva a intentarlo");
      href= location.reload(); 
      
    }else if( ver_cargo.value==0 ){

        alert("Uno de los campos esta vacio, vuelva a intentarlo");
      href= location.reload();


    }else if( ver_di_labor.value==0 && ver_di_labor.value <=31 ){

        alert("Uno de los campos esta vacio, vuelva a intentarlo");
      href= location.reload();


    }else if( ver_salario.value==0 ){

        alert("Uno de los campos esta vacio, vuelva a intentarlo");
      href= location.reload();


    }

   

    
      
      
    
    
      

  }
            