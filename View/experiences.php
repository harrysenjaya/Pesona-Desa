<?php
    echo $data[0]['NamaDesa'];
    echo '<br>';
    echo $data[0]['Brand'];
    echo '<br>';
    echo $data[0]['Pengalaman'];
    echo '<br>';
    echo $data[0]['Deskripsi'];
    echo '<br>';
    echo $data[0]['Harga'];
    echo '<br>';
    $foto = $data[0]['Foto'];
    echo "<img style='max-width: 100%'  src=Image/$foto.jpg>";
    echo "<br>";
?>