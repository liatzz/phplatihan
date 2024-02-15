<h5>NAMA  : SELIA NUR <br>
    KELAS : XI RPL<h5>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="text-wrap">
        <div class="example">
            <div class="p-3 bg-light mb-3">
                <nav class="nav main-nav flex-column flex-md-row justify-content-center">
                    <a class="nav-link"   href="new.php">Data Type</a>
                    <a class="nav-link"   href="operator.php">Operator</a>
                    <a class="nav-link"   href="kontrol.php">kontrol program</a>
                    <a class="nav-link"   href="variabel.php">Variabel</a>
                    <a class="nav-link"   href="form.php">form</a>
                    <a class="nav-link"   href="fungsi.php">Fungsi</a>
                    <a class="nav-link"   href="string.php">string</a>
                    <a class="nav-link active"   href="array.php">array</a>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-140 col-md-12">
            <div class="card custom-card" id="thumb">
                <div class="card-body ht-100p">
                    <div>
                        <h6 class="card-title mb-1">array</h6>
                        <p class="text-muted card-sub-title">Ada 3 jenis array PHP: array terindeks atau (indexed array), asosiatif (nama kunci, bukan nomor indeks) dan multidimensi (berisi array lain)</p>
                    </div>
                    <div class="text-wrap">
                        <div class="example">
                            <div class="row">
                                <h5>#definisi array PHP untuk variabel<h5>
                                    <?php
                                        $siswas = array('Selia', 'Zalfa', 'Desi');
                                    ?>
                                <h5>#ada fungsi count () yang menghitung semua nilai yang ada di array PHP.
                                    Ini juga bisa disebut mendapatkan panjang array PHP<h5>
                                    <?php
                                        $siswas = array('Selia', 'Zalfa', 'Desi');
                                        $arr_count = count($siswas);
                                        echo $arr_count;
                                    ?>
                                    <h5>#Array Terindeks (Indexed Array)<h5>
                                    <?php
                                        $siswas = array('Selia', 'Zalfa', 'Desi');
                                        echo $siswas[2];
                                    ?>
                                    <?php
                                        $siswas = array('Selia', 'Zalfa', 'Desi');
                                        $arr_count = count($siswas);

                                        for($i = 0; $i < $arr_count; $i++) {
                                            echo $siswas[$i];
                                            echo '<br>';
                                        }
                                    ?>
                                    <h5>#Asosiatif Array ada dua cara<h5>
                                    <?php
                                        $siswas=array("Selia"=>"Ngegame","Zalfa"=>"Nari","Desi"=>"Ngewibu");
                                    ?>
                                    <?php
                                        $siswas["Selia"]="Ngegame";  
                                        $siswas["Zalfa"]="Nari";  
                                        $siswas["Desi"]="Ngewibu";
                                    ?>
                                    <?php
                                        $siswas = [
                                            'Selia' => 'Ngegame', 
                                            'Zalfa' => 'Nari', 
                                            'Desi' => 'Ngewibu'
                                        ];
                                        foreach ($siswas as $siswa => $siswa_value) { 
                                            echo "Key =" . $siswa . ", Value=" . $siswa_value;
                                            echo "<br>";
                                        }
                                    ?>      
                                    <h5>#Multidimensional Array<h5>
                                        <!-- Multidimensional Array atau array multidimensi PHP juga dikenal sebagai array dari array.
                                        Hal ini memungkinkan Anda untuk menyimpan data tabular dalam sebuah array -->
                                        <?php    
                                            $siswas = array  
                                            (  
                                            array(1,"Selia","Ngegame"),  
                                            array(2,"Zalfa","Nari"),  
                                            array(3,"Desi","Ngewibu")  
                                            );  
                                            for ($i = 0; $i < 3; $i++) {  
                                                for ($j = 0; $j < 3; $j++) {  
                                                  echo $siswas[$i][$j]."  ";  
                                                }  
                                                echo "<br/>";  
                                            }  
                                        ?>
</body>
</html>