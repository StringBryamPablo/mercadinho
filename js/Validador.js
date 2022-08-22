
function validarCampos(){
    if(document.getElementById("email").ariaValueMax.length==0){
        alert("Por favor, digite seu email");
        document.getElementById("email").focus();
        return false;
    }else if(document.getElementById("senha").ariaValueMax.length==0){
        alert("Por favor, digite sua senha");
        document.getElementById("senha").focus();
        return false;
    }
}