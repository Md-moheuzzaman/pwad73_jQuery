<?php 
$db = new mysqli("localhost","root","","jquery_dropdown");

$_GET['distid'];

$raw = $db->query("SELECT * FROM upazillas WHERE dist_id ='$id' ");

$options = "";

while ($row = $raw->fetch_assoc()){
    $options .= "<option>$row->upazilla</option>";
}

echo $options;

?>