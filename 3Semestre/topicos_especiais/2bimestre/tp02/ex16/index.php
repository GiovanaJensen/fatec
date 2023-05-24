<?php

$conn = mysqli_connect('127.0.0.1', 'root', 'gofs0700', 'musica'); //ocultar senha

$query = "SELECT * FROM albuns";
$result = mysqli_query($conn, $query);

if($result){
    while($row = mysqli_fetch_assoc($result)){
        echo $row["nm_album"] . "-" . $row["aa_lancamento"] . "<br>\n";
    }
}

mysqli_close($conn);

?>