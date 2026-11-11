<?php 
$db = new mysqli("localhost","root","","jquery_crud");

$raw = $db->query("SELECT * FROM student" );



$table = "<table border='1'><tr?>
<th>Name</th>
<th>Address</th>
<th>Action</th>
</tr>";
$rows= "";

while($record = $raw->fetch_assoc()){
    $rows .="<tr><td>" .$record['name']."</td>
    <td>" . $record['address'] . "</td>
     <td> <button class = 'btnEdit'> Edit  <button id =" .$record['id']. " class = 'btnDel'> Delete </td>
    </tr>";
}
$table .= $rows;
$table .= "</table>";
echo $table;
?>

