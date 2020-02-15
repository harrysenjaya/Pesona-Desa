<?php
echo "<div>";
for($i=0; $i<sizeof($data); $i++){
    echo $data[0]['Id'];
    echo "<br>";
    echo $data[0]['NamaDesa'];
    echo "<br>";
    echo $data[0]['Foto'];
}
echo "</div>";
?>