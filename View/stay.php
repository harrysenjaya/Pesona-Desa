<?php
echo "<div>";
for($i=0; $i<sizeof($data); $i++){
    $foto = $data[0]['Foto'];
    echo "<img src=Image/$foto.jpg>";
    echo "<br>";
    echo $data[0]['NamaDesa'];
    echo "<br>";
}
echo "</div>";
?>
