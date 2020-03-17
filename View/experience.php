<div class="menuStay">
    <div class="menuKiri">
        <form>
            <input type="date" name="startDate">
            <input type="date" name="endDate">
        </form>        
    </div>
    <div class="menuKanan">
        <div class="searchContainer">
        <form>
            <input type="text" placeholder="Lokasi.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        </div>
    </div>

</div>
<hr/>
<hr/>

<?php
echo "<div class='contentStay'>";
for($i=0; $i<sizeof($data); $i++){
    $foto = $data[0]['Foto'];
    echo "<div class='hotelWrapper'>";
    echo "<img style='width: 100%; object-fit: contain;'  src=Image/$foto.jpg>";
    echo "<br>";
    echo "<div style='text-align: left' class='desWrapper'>";
    echo $data[0]['Brand'];
    echo "<br>";
    echo "Nama Desa : ";
    echo $data[0]['NamaDesa'];
    echo "<br>";
    echo "Harga  : ";
    echo $data[0]['Harga'];
    echo "</div>";
    echo "</div>";
}
echo "</div>";
?>
