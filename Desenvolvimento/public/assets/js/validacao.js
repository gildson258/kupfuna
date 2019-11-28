
var senha= document.getElementbyId("senha");
var cSenha= document.getElementbyId("cSenha");

function validarPassword(){
	if(senha.value!=cSenha.value){
		cSenha.setCustomValidity("senhas diferentes");
	}else{
		cSenha.setCustomValidity("");
	}	
}

senha.onchange = validarPassword;
cSenha.onkeyup = validarPassword;