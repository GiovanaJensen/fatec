<?php

$conn = mysqli_connect('127.0.0.1', 'root', '123456', 'musica'); 

function select($conn, $query){
    $result = mysqli_query($conn, $query);
    
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            echo "<br>Nome do álbum:" . $row["nm_album"] . " - " . $row["aa_lancamento"] . "<br>\n";
        }
    }
}

function update($conn, $query){
    $result = mysqli_query($conn, $query);
    
    if($result){
        echo "Atualizado com sucesso<br>\n";
    }
}

function excluir($conn, $query){
    $result = mysqli_query($conn, $query);

    if($result){
        echo "Deletado com sucesso<br>\n";
    }
}

select($conn, "SELECT * FROM albuns ORDER BY AA_LANCAMENTO ASC");


echo "<br>Atualizando nome do álbum fearless...<br>\n";
update($conn, "UPDATE albuns SET nm_album = 'Fearless (Taylor Version)' , AA_LANCAMENTO = 2021 WHERE cd_album = 3");

select($conn,"SELECT * FROM albuns WHERE CD_ALBUM = 3");

echo "<br>Deletando álbum speak now...<br>\n";

excluir($conn, "DELETE FROM albuns WHERE cd_album = 4");

select($conn,"SELECT * FROM albuns");

mysqli_close($conn);

?>