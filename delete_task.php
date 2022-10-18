<?php 

include("db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM task WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        die("Query failed");
    }

    $_SESSION['message'] = 'Task Remove Successfully';
    $_SESSION['message_type'] = 'danger';
    header("Location: index.php");
}

?>

<!-- min 51.20 https://www.youtube.com/watch?v=pn2v9lPakHQ&t=116s&ab_channel=Fazt-->