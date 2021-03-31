<?php
    // if(isset($_POST['submit_btn'])) {
    //     if (strlen($_POST['diameter']) > 0) {
    //         echo "login !";
    //     } else {
    //         echo "Isi diameter terlebih dahulu";
    //     }
    // }

    require('Tabung.php');
    $tabung = new Tabung;
    $tabung->tes();
    $volume = 0;

    // if (isset($_POST['btn_submit'])) {
    //     $diameter = $_POST['diameter'];
    //     $tinggi = $_POST['tinggi'];
    //     $r = $diameter/2;

    //     $luas = 3.14*$diameter*$tinggi;
    //     $volume = 3.14*$r*$r*$tinggi;

    //     echo "Diameter : $diameter <br>";
    //     echo "Tinggi : $tinggi <br>";
    // }
    if (isset($_POST['btn_submit'])) {
        $tabung->setDiameter($_POST['diameter']);
        $tabung->setTinggi($_POST['tinggi']);
        $tabung->hitungLuas();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Nama <?php echo isset($_GET['nama']) ? $_GET['nama'] : '' ?></h1>
    <form action="" method="post">
        <input type="text" name="diameter">
        <button name="submit_btn">Submit</button>
    </form> -->

    <form action="" method="POST">
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name="btn_submit">Hitung</button>

        <hr>
    </form>
    <ul>
            <li>Luas Selimut : <?= $tabung->getLuas() ?></li>
            <li>Volume : <?= $volume ?></li>
        </ul>
</body>
</html>