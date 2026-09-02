<?php


try{
    $conn = new mysqli(
    "localhost",
    "root",
    "",
    "fol"
);


}

catch(mysqli_sql_exception $e){
    
    die("Conection failed");
    
}

?>


