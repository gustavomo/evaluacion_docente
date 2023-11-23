const obtenerProfesor = () => {
    const urlParams = new URLSearchParams(window.location.search);
    const idParametro = urlParams.get('id');

    const form = new FormData();
    form.append('id', idParametro);

    axios.post('../controller/get_universities.php', form)
        .then(function (response) {
            console.log("response", response);

            const tablaProfesores = document.getElementById("tabla-profesores");

            const universidades = response.data;
            
            let filas = '';
            for (let i = 0; i < universidades.length; i++) {
                const profesor = universidades[i];
                const fila = `
                    <tr>
                        <th scope="row"><a href="/evaluacion_docente/profesores/view/index.php?id=${profesor.id}"><img src="${profesor.foto}" alt=""></a></th>
                        <td><a href="/evaluacion_docente/profesores/view/index.php?id=${profesor.id}" class="text-primary fw-bold">${profesor.nombre}</a></td>
                        <td>${profesor.facultades.map((item)=> item.facultad).join(" / ")}</td>
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
