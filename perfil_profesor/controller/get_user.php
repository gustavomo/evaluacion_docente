<?php

include '../../CRUD/CRUD.php';

class EjemploPost {
    function __construct() {
    }

    function insertarUsuario($id) {
        try {
            // Comprobar si la solicitud es POST
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Obtener los datos enviados en la solicitud POST
                $crud = new crud();
                $usuarioSql = "SELECT * from usuarios WHERE id = $id";
                $usuarioResponse =  $crud ->consultar($usuarioSql);

                $titulosAcademicosSql = "
                    SELECT ta.nombre_titulo, ta.fecha_egreso FROM usuarios u 
                    INNER JOIN titulos_academicos ta 
                    ON u.id = ta.id_usuario 
                    WHERE u.id = $id
                ";
                $titulosAcademicosResponse =  $crud ->consultar($titulosAcademicosSql);

                $experienciaLaboralSql = "
                    SELECT el.fecha_ingreso, el.fecha_fin, e.nombre empresa, c.nombre cargo
                    FROM usuarios u 
                    INNER JOIN experiencia_laboral el 
                    ON u.id = el.id_usuario
                    INNER JOIN empresas e
                    ON el.id_empresa = e.id
                    INNER JOIN cargos c
                    ON el.id_cargo = c.id
                    WHERE u.id = $id
                ";
                $experienciaLaboralResponse =  $crud ->consultar($experienciaLaboralSql);

                $proyectosSql = "
                    SELECT p.nombre, p.descripcion
                    FROM usuarios u 
                    INNER JOIN proyectos p
                    ON u.id = p.id_usuario
                    WHERE u.id = $id
                ";
                $proyectosResponse =  $crud ->consultar($proyectosSql);

                header('Content-Type: application/json');
               
                if ($usuarioResponse) {
                    $result = array(
                        "usuario" => $usuarioResponse,
                        "titulosAcademicos" => $titulosAcademicosResponse,
                        "experienciasLaborales" => $experienciaLaboralResponse,
                        "proyectos" => $proyectosResponse
                    );
                    echo json_encode($result);
                }
                else {
                    $result = array("valido"=>false);
                    echo json_encode($result);
                }
            } else {
                // Si no es una solicitud POST, devolver un mensaje de error
                header('HTTP/1.1 405 Method Not Allowed');
                echo 'Método no permitido.';
            }
        } catch (PDOException $e) {
            $response = array(
                "success" => false,
                "message" => "Error: " . $e->getMessage()
            );
            // Devolver la respuesta en formato JSON en caso de error
            header('Content-Type: application/json');
            echo json_encode($response);
        }
    }
}

// Crear una instancia de la clase 'crud'
$ejemploPost = new EjemploPost();
// Llamar a la función 'insertarUsuario' para manejar la solicitud POST
$ejemploPost->insertarUsuario($_POST['id']);
