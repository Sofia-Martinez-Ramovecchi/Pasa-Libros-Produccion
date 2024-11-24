

document.addEventListener('DOMContentLoaded', function () {
    const btnEnviar = document.querySelector(".enviar-btn");
    const nombre_usuario = document.getElementById("nombre_usuario");
    const errorUsername = document.querySelector(".errorUsername");
    const clave = document.getElementById("password");
    const passwordError = document.querySelector(".passwordError");
    const email = document.getElementById("email");
    const errorEmail = document.querySelector(".errorEmail");

    let nombre_usuarioBien = false;
    let claveBien = false;
    let emailBien = false;

    const validarUsername = function () {
        const regex = /^([a-zA-ZÁÉÍÓÚáéíóúñÑäÄëËïÏöÖüÜçÇ0-9 ]{2,30})$/;
        errorUsername.textContent = nombre_usuario.title;

        nombre_usuario.addEventListener('input', function () {
            if (nombre_usuario.value) {
                if (regex.test(nombre_usuario.value)) {
                    errorUsername.classList.add('d-none');
                    nombre_usuarioBien = true;
                } else {
                    errorUsername.textContent = nombre_usuario.title;
                    errorUsername.classList.remove('d-none');
                    nombre_usuarioBien = false;
                }
            } else {
                errorUsername.textContent = nombre_usuario.title;
                errorUsername.classList.remove('d-none');
                nombre_usuarioBien = false;
            }
        });

        return nombre_usuarioBien;
    };

    const validarCorreo = function () {
        const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        errorCorreo.textContent = correo.title;

        correo.addEventListener('input', function () {
            if (regexEmail.test(correo.value)) {
                errorCorreo.classList.add('d-none');
                emailBien = true;
            } else {
                errorCorreo.classList.remove('d-none');
                emailBien = false;
            }
        });

        return emailBien;
    };

    const validarClave = function () {
        const regex = /^(?=.*[°|!"#$%&/()=?'¡¿´¨*+{\[}\]\-\_:.,;><]).{8,}$/;
        passwordError.textContent = clave.title;

        clave.addEventListener('input', function () {
            if (regex.test(clave.value)) {
                passwordError.classList.add('d-none');
                claveBien = true;
            } else {
                passwordError.textContent = clave.title;
                passwordError.classList.remove('d-none');
                claveBien = false;
            }
        });

        return claveBien;
    };

    if (btnEnviar) {
        btnEnviar.addEventListener('click', function (e) {
            e.preventDefault();

            if (validarUsername()) {
                errorUsername.classList.add('d-none');
            } else {
                errorUsername.classList.remove('d-none');
            }

            if (validarClave()) {
                passwordError.classList.add('d-none');
            } else {
                passwordError.classList.remove('d-none');
            }

            if (validarCorreo()) {
                errorCorreo.classList.add('d-none');
            } else {
                errorCorreo.classList.remove('d-none');
            }

            if (validarUsername() && validarClave() && validarCorreo()) {
                nombre_usuario.value = '';
                correo.value = '';
                clave.value = '';

            }
        });
    }

    validarUsername();
    validarClave();
    validarCorreo();
    if (validarUsername() && validarClave() && validarCorreo()) {
        nombre_usuario.value = '';
        correo.value = '';
        clave.value = '';
        document.getElementById('successMessage').classList.remove('d-none');
    }
});
