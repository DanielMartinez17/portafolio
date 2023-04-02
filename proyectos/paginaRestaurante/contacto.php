<?php
    function conectar(){

        $user="andrea";
        $pass="andrea";
        $server="localhost";
        $db="adrea";
        $table="usuarios";

        $con=mysqli_connect($server,$user,$pass,$db) or die ("Error al conectar".mysqli_error());

        mysqli_select_db($db,$con);

        return $con;

        if(isset($_POST['name,email,subject,message'])){
            $texto=$_POST['name'];
            $texto2=$_POST['email'];
            $texto3=$_POST['subject'];
            $texto4=$_POST['message'];
    
    
            $sql="INSER INTO $table(name,email,subject,message,completado)
                            VALUES('$texto','$texto2','$texto3','$texto4','$texto5',false)";
    }}
?>