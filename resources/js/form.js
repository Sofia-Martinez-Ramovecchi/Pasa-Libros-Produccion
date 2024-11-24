document.addEventListener('DOMContentLoaded', function () {
    const btnEnviar = document.getElementById("btnGuardarCambios");
    const nombre_usuario = document.getElementById("nombre_usuario");
    const errorUsername = document.getElementById("errornombre_usuario");
    const clave = document.getElementById("password");
    const errorClave = document.getElementById("passwordError");
    const correo = document.getElementById("email");
    const errorCorreo = document.getElementById("emailError");

    const validarUsername = function () {
        const regex = /^([a-zA-ZÁÉÍÓÚáéíóúñÑäÄëËïÏöÖüÜçÇ0-9 ]{2,30})$/;
        errorUsername.textContent = nombre_usuario.title;

        if (nombre_usuario.value) {
            if (regex.test(nombre_usuario.value)) {
                errorUsername.classList.add('d-none');
            } else {
                errorUsername.textContent = nombre_usuario.title;
                errorUsername.classList.remove('d-none');
            }
        } else {
            errorUsername.textContent = nombre_usuario.title;
            errorUsername.classList.remove('d-none');
        }
    };

    const validarCorreo = function () {
        const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        errorCorreo.textContent = correo.title;

        if (regexEmail.test(correo.value)) {
            errorCorreo.classList.add('d-none');
        } else {
            errorCorreo.classList.remove('d-none');
        }
    };

    const validarClave = function () {
        const regex = /^(?=.*[°|!"#$%&/()=?'¡¿´¨*+{\[}\]\-\_:.,;><]).{8,}$/;
        errorClave.textContent = clave.title;

        if (regex.test(clave.value)) {
            errorClave.classList.add('d-none');
        } else {
            errorClave.textContent = clave.title;
            errorClave.classList.remove('d-none');
        }
    };

    btnEnviar.addEventListener('click', function (e) {
        e.preventDefault();

        validarUsername();
        validarClave();
        validarCorreo();

        document.getElementById("EditarForm").submit();
    });

    nombre_usuario.addEventListener('input', validarUsername);
    clave.addEventListener('input', validarClave);
    correo.addEventListener('input', validarCorreo);
});
