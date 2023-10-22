<?php

include '../../CRUD/CRUD.php';

class EjemploPost {
    function __construct() {
    }

    function insertarUsuario($email, $constrasena) {
        try {
            // Comprobar si la solicitud es POST
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Obtener los datos enviados en la solicitud POST
                $crud = new crud();
                $sql = "SELECT * from usuarios WHERE correo_electronico = '$email' AND contrasena = '$constrasena'";
                $response =  $crud ->consultar($sql);
                header('Content-Type: application/json');
               
                if ($response) {
                    $result = array("valido"=>true);
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
$ejemploPost->insertarUsuario($_POST['email'], $_POST['contrasena']);
