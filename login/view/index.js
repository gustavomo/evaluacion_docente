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
        })
        .catch(function (error) {
            console.log(error);
        });
}

const submitButton = document.getElementById("submitButton");
submitButton.addEventListener("click", createUser);
