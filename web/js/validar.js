function validarCampos(){

    let nome = document.getElementById('nome');
    let email = document.getElementById('email');
    let senha = document.getElementById('senha');
    let confirmar = document.getElementById('confirmar');

    if (nome.value == ""){
        Swal.fire({
            icon:'error',
            title: 'Campo nome vazio',
            text: 'Por favor, preencha o campo "Nome" corretamente.'
        })
        nome.focus();
        return false;
    }

    if (email.value == ""){
        Swal.fire({
            icon: 'error',
            title: 'Campo email vazio',
            text: 'Por favor, preencha o campo "Email" corretamente.'
        })
        email.focus();
        return false;
    }

    if (senha.value == ""){
        Swal.fire ({
            icon: 'error',
            title: 'Campo senha vazio',
            text: 'Por favor, preencha o campo "Senha" corretamente.'
        })
        senha.focus();
        return  false;

    }

    if (confirmar.value == ""){
        Swal.fire ({
            icon: 'error',
            title: 'Campo confirmar senha vazio',
            text: 'Por favor, preencha o campo "Confirmar senha" corretamente.'
        })
        confirmar.focus();
        return  false;

    }

    if (confirmar.value != senha.value){
        Swal.fire({
            icon: 'error',
            title: 'Senhas não confirmam',
            text: 'As senhas estão diferentes, favor preencher corretamente' 
        })
        confirmar.focus();
        return false;
    }

    let regex = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[^\w\s]).{6,16}$/
    if (!regex.exec(senha.value)){
        Swal.fire({
            icon: 'error',
            title: 'Senha inválida',
            text: 'A senha deve conter entre 6 a 16 caracteres sendo pelo menos 1 letra maiúsula e 1 minúscula, 1 numero e 1 caractere especial.'
        })
        senha.focus()
        return false
    }

}