<?php

include '../../CRUD/CRUD.php';

class EjemploPost {
    function __construct() {
    }

    function insertarUsuario() {
        try {
            // Comprobar si la solicitud es POST
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Obtener los datos enviados en la solicitud POST
                $crud = new crud();

                $usuarioSql = "SELECT * FROM universidades";
                $usuarioResponse = $crud->consultar($usuarioSql);
                
                $usersData = array();
                
                foreach ($usuarioResponse as $user) {
                    $id = $user->id;
                
                    $facultadesSql = "
                        SELECT f.nombre as facultad
                        FROM universidades u
                        INNER JOIN facultades_universidades fu ON u.id = fu.id_universidad
                        INNER JOIN facultades f ON fu.id_facultad = f.id
                        WHERE u.id = $id
                    ";
           
                    $facultades = $crud->consultar($facultadesSql);
  
                    $userData = array(
                        'id' => $user->id,
                        'nombre' => $user->nombre,
                        'foto' => $user->foto,
                        'facultades' => $facultades
                    );
   
                    $usersData[] = $userData;
                }


                header('Content-Type: application/json');
               
                if ($usuarioResponse) {
                    $result = array(
                        "usuario" => $usuarioResponse,
                    );
                    echo json_encode($usersData);
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
$ejemploPost->insertarUsuario();
