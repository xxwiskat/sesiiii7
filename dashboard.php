<?php 

    session_start();

    if( isset($_SESSION["login"]) ):
        if(!$_SESSION["login"] == ""):

        

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    
    DataMahasiswa DataMatakuliah DataDosen <a href="?act=logout">Logout</a>

</body>
</html>

<?php
        else:
            header("location: login.php");
        endif;
    else:
        header("location: login.php");
    endif;

?>