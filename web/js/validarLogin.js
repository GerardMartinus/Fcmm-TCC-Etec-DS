function validarCampos(){

    let nome = document.getElementById('nome');
    let email = document.getElementById('email');
    let senha = document.getElementById('senha');
    let confirmar = document.getElementById('confirmar');

    if (email.value == ""){
        Swal.fire({
            icon: 'error',
            title: 'Campo email vazio',
            text: 'Por favor, preencha o campo "e-mail" corretamente.'
        })
        email.focus();
        return false;
    }

    if (senha.value == ""){
        Swal.fire({
            icon: 'error',
            title: 'Campo email vazio',
            text: 'Por favor, preencha o campo "senha" corretamente'
        })
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