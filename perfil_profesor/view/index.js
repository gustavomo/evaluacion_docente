const obtenerProfesor = () => {
    const urlParams = new URLSearchParams(window.location.search);
    const idParametro = urlParams.get('id');

    const form = new FormData();
    form.append('id', idParametro);

    axios.post('../controller/get_user.php', form)
        .then(function (response) {
            console.log("response", response);

            const foto = document.getElementById("foto");
            const nombre = document.getElementById("nombre");
            const tablaExperiencia = document.getElementById("tabla-experiencia");
            const tablaProyectos = document.getElementById("tabla-proyectos");
            const tablaTutilos = document.getElementById("tabla-titulos");
            
            foto.src = response.data.usuario[0].foto;
            nombre.innerText = response.data.usuario[0].nombre;

            const experienciasLaborales = response.data.experienciasLaborales;
            const proyectos = response.data.proyectos;
            const titulosAcademicos = response.data.titulosAcademicos;
            
            let filas = '';
            for (let i = 0; i < experienciasLaborales.length; i++) {
                const experienciaLaboral = experienciasLaborales[i];
                const fila = `
                    <tr>
                        <td>${experienciaLaboral.empresa}</td>
                        <td>${experienciaLaboral.cargo}</td>
                        <td>${experienciaLaboral.fecha_ingreso}</td>
                        <td>${experienciaLaboral.fecha_fin}</td>
                    </tr>
                `;
                filas += fila;
            }
            tablaExperiencia.innerHTML = filas;

            let proyectosFilas = '';
            for (let i = 0; i < proyectos.length; i++) {
                const proyecto = proyectos[i];
                const fila = `
                    <tr>
                        <td>${proyecto.nombre}</td>
                        <td>${proyecto.descripcion}</td>
                    </tr>
                `;
                proyectosFilas += fila;
            }
            tablaProyectos.innerHTML = proyectosFilas;

            let titulosFilas = '';
            for (let i = 0; i < titulosAcademicos.length; i++) {
                const titulosAcademico = titulosAcademicos[i];
                const fila = `
                    <tr>
                        <td>${titulosAcademico.nombre_titulo}</td>
                        <td>${titulosAcademico.fecha_egreso}</td>
                    </tr>
                `;
                titulosFilas += fila;
            }
            tablaTutilos.innerHTML = titulosFilas;
        })
        .catch(function (error) {
            console.log(error);
        });
};

obtenerProfesor();
