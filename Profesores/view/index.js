const obtenerProfesor = () => {
    const urlParams = new URLSearchParams(window.location.search);
    const idParametro = urlParams.get('id');
    const form = new FormData();

    console.log("idParametro", idParametro)

    if (idParametro) {
        form.append('id', idParametro);
    }
    else {
        const universidadLogo = document.getElementById("universidad-logo");
        universidadLogo.style.display = "none";
    }

    axios.post('../controller/get_users.php', form)
        .then(function (response) {
            console.log("response", response);

            if (idParametro) {
                const universidadName = document.getElementById("universidad-name");
                const universidadUrl = document.getElementById("universidad-url");

                universidadName.innerText = response.data.universidad[0].nombre;
                universidadUrl.src = response.data.universidad[0].foto;
            }

            const tablaProfesores = document.getElementById("tabla-profesores");

            const profesores = response.data.usuarios;
            
            let filas = '';
            for (let i = 0; i < profesores.length; i++) {
                const profesor = profesores[i];
                const fila = `
                    <tr>
                        <th scope="row"><a href="/evaluacion_docente/perfil_profesor/view/index.php?id=${profesor.id}"><img src="${profesor.foto}" alt=""></a></th>
                        <td><a href="/evaluacion_docente/perfil_profesor/view/index.php?id=${profesor.id}" class="text-primary fw-bold">${profesor.nombre}</a></td>
                        <td>${profesor.habilidades.map((item)=> item.habilidad).join(" / ")}</td>
                        <td class="fw-bold">4.1</td>
                    </tr>
                `;
                filas += fila;
            }
            tablaProfesores.innerHTML = filas;
        })
        .catch(function (error) {
            console.log(error);
        });
};

obtenerProfesor();
