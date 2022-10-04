var apellido = document.getElementById("apellido");
apellido.addEventListener("keypress",(e)=>{
    e.preventDefault();
    let codigoKey = e.key;

    if(isFinite(codigoKey)){
        apellido.value += codigoKey;
        return false;
    }
    else{
        return true;
    }   
})
var submit = document.querySelector("#boton");
function validarFormulario(e){
    e.preventDefault();
    submit.addEventListener("click",(e)=>{
   
        var nombre = document.getElementById("nombre");
        let advertencia = document.getElementById("mensaje");
        nombre.classList.add("enviado");
        if(nombre.value === ""){           
            advertencia.innerHTML = "No hay nada escrito";
            nombre.classList.remove("enviado")
            nombre.classList.add('fail');
              
            return false;
        }
        else{
            advertencia.innerHTML ="Enviado";
            
            return true;
        }            
    },false)   
}
