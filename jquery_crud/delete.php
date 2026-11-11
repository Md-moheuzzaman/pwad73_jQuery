<?php 
$db = new mysqli("localhost","root","","jquery_crud");

$id = $_GET['id'];

$db->query("DELETE FROM student WHERE id = '$id'");
if ($db->affected_rows){
    echo "Successfully Deleted";
}

?>