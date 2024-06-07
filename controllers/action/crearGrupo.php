<?php
session_start();
require_once(__DIR__ . '/../mdb/mdbAlmuerzo.php');

if (isset($_POST['idUsuario']) && isset($_POST['materia']) &&isset($_POST['descripcion'])) {
    $idUsuario = $_SESSION['ID_USUARIO'];
    $materia = $_POST['materia'];
    $fechaInicio = $_POST['fechaInicio'];
    $descripcion = $_POST['descripcion'];

    // Procesar la imagen (ejemplo básico, adaptar según necesidades)
    $rutaImagen = ''; // Aquí guardarás la ruta de la imagen

    if (isset($_FILES['imagenGrupo']) && $_FILES['imagenGrupo']['error'] === UPLOAD_ERR_OK) {
        $tmp_name = $_FILES['imagenGrupo']['tmp_name'];
        $nombreArchivo = $_FILES['imagenGrupo']['name'];
        $rutaImagen = 'ruta/a/tu/directorio/' . $nombreArchivo; // Aquí establece la ruta según tu estructura

        // Mover el archivo subido al directorio deseado
        move_uploaded_file($tmp_name, $rutaImagen);
    }
    $agregado = creargrupo($idUsuario,$materia, $descripcion);
    // Insertar el nuevo grupo en la base de datos
    

    if ($agregado) {
        echo json_encode(array('status' => 'success', 'message' => 'Grupo creado correctamente.'));
        // Puedes redirigir o mostrar un mensaje de éxito según tu flujo de aplicación
    } else {
        echo json_encode(array('status' => 'error', 'message' => 'Error al crear el grupo.'));
    }
} else {
    echo json_encode(array('status' => 'error', 'message' => 'No se recibieron datos del formulario.'));
}
?>
