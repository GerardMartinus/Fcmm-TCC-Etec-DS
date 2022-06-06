
let nome = cadastro.nome.value;
let email = cadastro.email.value;
let senha = cadastro.senha.value;
let confirmar = cadastro.confirmar.value;


function validar(){
    if(nome == ""){
        alert ("Campo 'Nome' vazio!");
        cadastro.nome.focus();
        return false;
    }

    if (email == "") {
        alert ("Campo 'Email' vazio!");
        cadastro.email.focus();
        return false;
    }

    if (senha == "") {
        alert ("Campo 'senha' vazio!");
        cadastro.senha.focus();
        return false;
    }

    if (confirmar == "") {
        alert ("Campo 'Confirmar Senha' vazio!");
        cadastro.confirmar.focus();
        return false;
    }

    if(isNaN(nome)){
        alert ("Campo 'nome' contém números!");
        cadastro.cpf.focus();
        return false;
    }
    
    if(senha != confirmar){
        alert ("Senhas estão diferentes");
        cadastro.confirmar.focus();
        return false;
    }

    let regex = /^(?=.*?[A-Za-z0-9_])(?=. *?[^\w\s]).{6,20}$/
    /*
    (?=.*?[A-Z]) - minimo uma letra maiscula.
    (?=.*?[a-z]) - minimo uma letra minuscula.
    (?=.*?[0-9]) - minimo de número.
    (?=.*?[^\w\s]) - minimo de caractere especial.
    .{6.10} - minimo 6, maximo 10 caracteres.
     */

    if(!regex.exec(senha)){
        alert ("A senha deve conter: uma letra maíuscula, minúscula, um número e um caractere especial");
        cadastro.senha.focus();
        return false;
    }

}

