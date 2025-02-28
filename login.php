<?php
include "db_conn.php";
if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['address']) && isset($_POST['number']) && isset($_POST['date']) ) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $id = validate($_POST['id']);
    $name = validate($_POST['name']);
    $address = validate($_POST['address']);
    $number = validate($_POST['number']);
    $date = validate($_POST['date']);

    if (empty($id)) {
        header("Location:FIRST.php?error=ID is required");
        exit();
    }else if(empty($name)) {
        header("Location:FIRST.php?error=Name is required");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE id='$id' AND name='$name'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result)){
            echo "hello";
        }
        }
}else{
    header("Location: FIRST.php");
    exit();
}