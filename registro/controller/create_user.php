<?php

include '../../CRUD/CRUD.php';

class CrearUsuario {
    function __construct() {
        
    }

    function insertarUsuario($nombre, $email, $contrasena) {
        try {
            // Comprobar si la solicitud es POST
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Obtener los datos enviados en la solicitud POST
                $crud = new crud();
                $sql = "INSERT INTO usuarios (id_roles, nombre, correo_electronico, contrasena, id_facultad) VALUES (1, '$nombre', '$email', '$contrasena', 1)";
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
$CrearUsuario = new CrearUsuario();
// Llamar a la función 'insertarUsuario' para manejar la solicitud POST
$CrearUsuario->insertarUsuario($_POST['nombre'], $_POST['email'], $_POST['contrasena']);
