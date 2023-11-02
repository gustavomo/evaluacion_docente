const createUser = () => {
    const name = document.getElementById("yourName");
    const email = document.getElementById("yourEmail");
    const password = document.getElementById("yourPassword");

    if (!name.value || !email.value | password.value) {
        return;
    }

    const form = new FormData();
    form.append('nombre', name.value);
    form.append('email', email.value);
    form.append('contrasena', email.value);

    axios.post('../controller/create_user.php', form)
        .then(function (response) {
            console.log(response);
            window.location.href = '/evaluacion_docente/login/view/';
            alert("Usuario creado exitosamente")
        })
        .catch(function (error) {
            console.log(error);
        });
}

const submitButton = document.getElementById("submitButton");
submitButton.addEventListener("click", createUser);
