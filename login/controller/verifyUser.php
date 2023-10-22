<?php

include 'CRUD/CRUD.php';

class EjemploPost {

    function __construct() {
        
    }

    function insertarUsuario($nombre, $edad) {
        try {
            // Comprobar si la solicitud es POST
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Obtener los datos enviados en la solicitud POST
                $crud = new crud();
                $sql = "INSERT INTO usuarios (nombre, edad) VALUES ('$nombre', $edad)";
                $response =  $crud ->insertar($sql);

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
$ejemploPost->insertarUsuario($_POST['nombre'], $_POST['edad']);
