<style>
    .menuStay{
        width: 100%;
        height: 70px;
    }
    hr {
        display: block;
        height: 1px;
        border: 0;
        border-top: 1px solid black;
        margin: 2px 10px;
        padding: 0;
    }
    .menuKiri{
        float: left;
        width: 50%;
        height:100%;
        /* background-color:red; */
        padding-left: 50px;
        padding-top: 20px;
    }
    .menuKanan{
        float: left;
        width: 50%;
        height:100%;
        /* background-color: yellow; */
        padding-right: 50px;
        padding-top: 20px;
    }

    .searchContainer{
        float: right;
    }

    .searchContainer input[type=text] {
        padding: 4px;
        font-size: 17px;
    }

    .searchContainer button {
        float: right;
        padding: 10px 10px;
        background: #ddd;
        font-size: 17px;
        border: none;
        cursor: pointer;
    }

    .hotelWrapper{
        display: inline-block;
    }
</style>

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
    echo "<img src=Image/$foto.jpg>";
    echo "<br>";
    echo $data[0]['NamaHouseStay'];
    echo "<br>";
    echo "Lokasi : ";
    echo $data[0]['NamaDesa'];
    echo "<br>";
    echo "Harga  : ";
    echo $data[0]['Harga'];
    echo "</div>";
}
echo "</div>";
?>
<!-- <html>
    <div>
        <img src = "Image/$foto"> 
</div>
    </html> -->
