<?php 
$db = new mysqli("localhost","root","","jquery_dropdown");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../js/jquery.min.js"></script>
</head>
<body>
    <h3>Registration Form</h3>
    <form action="">
        District:
        <select name="" id="district">
            <option value="" disabled selected>Select one</option>
            <?php 
               $raw = $db->query("SELECT * FROM districts");
                while($row = $raw->fetch_assoc()){

                
            ?>

            <option value="<?php echo $row['id'] ?>"><?php echo $row['district'] ?></option>


        <?php } ?>
        </select> <br> <br>
        Upazilla:
        <select name="" id="upazilla">
            
            <option value="Selected disabled">Select One</option>
        </select> <br> <br>
        <input type="submit" value="SUBMIT">
    </form>

    <script>
        $(document).ready(function (){
            $("#district").on('change',function () {  
                //alert($(this).val());
                $.get("upazilla.php", {distid: $(this).val()}, function(data, status){
                    alert(data);
                
              });
            });
        });
    </script>
</body>
</html>