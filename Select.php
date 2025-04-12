<?php

    include('database.php');

    // Executar comando sql(select):
        
    $sql = "SELECT * FROM TB_USUARIO";

    // $result = $con->query($sql);
    foreach($con->query($sql) as $value)
    {
        echo $value[0] . " " . $value[1] . " " . $value[2] . " " . "<br>";
    }
    
    


?>