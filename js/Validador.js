
 function validarCampos(){
    if(validarEmail()){
        return true;
    }else{
        alert("Preencha os campos primeiro!!");
        return false;
    }
}

function validarEmail(){
    var email = document.forms["formLogin"]["inEmail"].value;

    if(email.length<2){
        return false;
    }else{
        return true;
    }
}

function validarSenha(){
    var senha = document.getElementById("senha").value;

    if(senha.length==0){
        return false;
    }else{
        return true;
    }
}