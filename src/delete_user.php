<?php
require('../config/database.php');

if (isset($_GET['id'])) {
    $user_id = intval($_GET['id']); 
    $delete_query = "DELETE FROM users WHERE id = $user_id";
    $result = pg_query($conn, $delete_query);

    if ($result) {
        header("Location: list_users.php");
        exit();
    } else {
        echo "Error al eliminar el usuario.";
    }
} else {
    echo "ID de usuario no proporcionado.";
}
?>