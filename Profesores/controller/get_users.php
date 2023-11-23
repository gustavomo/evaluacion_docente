<?php

include '../../CRUD/CRUD.php';

class EjemploPost {
    function __construct() {
    }

    function insertarUsuario($idUniversidad) {
        try {
            // Comprobar si la solicitud es POST
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Obtener los datos enviados en la solicitud POST
                $crud = new crud();
                $universidadResponse = [];
                
                if ($idUniversidad) {
                    $universidadSql = "SELECT * FROM universidades WHERE id = $idUniversidad";
                    $universidadResponse = $crud->consultar($universidadSql);
                
                    $usuarioSql = "
                        SELECT usu.nombre, usu.foto, usu.id FROM universidades u
                        INNER JOIN facultades_universidades fu ON u.id = fu.id_universidad
                        INNER JOIN facultades f ON fu.id_facultad = f.id
                        INNER JOIN usuarios usu ON usu.id_facultad = f.id
                        WHERE u.id = $idUniversidad
                    ";
                    $usuarioResponse = $crud->consultar($usuarioSql);
                }
                else {
                    $usuarioSql = "SELECT * FROM usuarios";
                    $usuarioResponse = $crud->consultar($usuarioSql);
                }
                
                $usersData = array();
                
                foreach ($usuarioResponse as $user) {
                    $id = $user->id;
                
                    $habilidadesSql = "
                        SELECT h.nombre as habilidad
                        FROM usuarios u
                        INNER JOIN usuarios_habilidades uh ON u.id = uh.id_usuario
                        INNER JOIN habilidades h ON uh.id_habilidad = h.id
                        WHERE u.id = $id
                    ";
           
                    $habilidades = $crud->consultar($habilidadesSql);
  
                    $userData = array(
                        'id' => $user->id,
                        'nombre' => $user->nombre,
                        'foto' => $user->foto,
                        'habilidades' => $habilidades
                    );
   
                    $usersData[] = $userData;
                }


                header('Content-Type: application/json');
               
                if ($usuarioResponse) {
                    echo json_encode(array(
                        "usuarios" => $usersData,
                        "universidad" => $universidadResponse,
                    ));
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
if ($_POST) {
    $ejemploPost->insertarUsuario($_POST['id']);
}
else {
    $ejemploPost->insertarUsuario(null);
}

