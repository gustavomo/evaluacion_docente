const createUser = () => {
    const email = document.getElementById("yourUsername");
    const password = document.getElementById("yourPassword");

    if (!email.value | password.value) {
        return;
    }

    const form = new FormData();
    form.append('email', email.value);
    form.append('contrasena', email.value);

    axios.post('../controller/verify_user.php', form)
        .then(function (response) {
            console.log(response);
            if (response.data.valido) {
                localStorage.setItem("usuario", JSON.stringify(response.data.usuario[0]));
                window.location.href = "/evaluacion_docente/inicio/view/";
            }
            else {
                alert("Credenciales no validas");
            }
        })
        .catch(function (error) {
            console.log(error);
        });
}

const submitButton = document.getElementById("submitButton");
submitButton.addEventListener("click", createUser);
