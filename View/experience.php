<?php
console.log($data);
echo "<div>";
for($i=0; $i<sizeof($data); $i++){
    $foto = $data[0]['Foto'];
    echo "<img src=Image/$foto.jpg>";
    echo "<br>";
    echo $data[0]['Brand'];
    echo "<br>";
    echo "Nama Desa : ";
    echo $data[0]['NamaDesa'];
    echo "<br>";
    echo "Harga  : ";
    echo $data[0]['Harga'];
}
echo "</div>";
?>
