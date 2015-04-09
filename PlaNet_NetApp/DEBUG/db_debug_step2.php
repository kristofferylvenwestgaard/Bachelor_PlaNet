<?php 
include "db_debug.php";

$sql = "INSERT INTO i (aktivitet)
	VALUES ('tisse')";
if ($connect->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}

$connect->close();
?>
