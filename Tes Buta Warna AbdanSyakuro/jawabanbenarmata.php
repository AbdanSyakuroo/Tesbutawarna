<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <style>
            .jawabancik{
                width: 400px;
                color: white;
                margin-top: 200px;
                margin-bottom: 100px;
                height: 360px;
                border-radius: 20px;
            }
            .teks{
                font-size: 20px;
            }
            .kembali{
                padding: 8px;
                color: white;
                border-radius: 10px;
            }
            .jawaban{
                font-size: 24px;
                font-weight: 600;
            }
            .jwb{
                margin-top: 100px;
            }
            *{
                scroll-behavior: smooth;
            }
        </style>
</head>
<body>
   



<?php
    $jawabanBenar = [ 12,74, 6 , 16, 2, 29, 7, 45, 5, 97, 8, 42 ];

    $jawaban1 = $_POST['jawaban1'];
    $jawaban2 = $_POST['jawaban2'];
    $jawaban3 = $_POST['jawaban3'];
    $jawaban4 = $_POST['jawaban4'];
    $jawaban5 = $_POST['jawaban5'];
    $jawaban6 = $_POST['jawaban6'];
    $jawaban7 = $_POST['jawaban7'];
    $jawaban8 = $_POST['jawaban8'];
    $jawaban9 = $_POST['jawaban9'];
    $jawaban10 = $_POST['jawaban10'];
    $jawaban11 = $_POST['jawaban11'];
    $jawaban12 = $_POST['jawaban12'];


    $jumlahBenar = 0;
    $salah = 0;

   
    if ($jawaban1 == $jawabanBenar [0]) {
        $jumlahBenar++;
    }
    if ($jawaban2 == $jawabanBenar [1]) {
        $jumlahBenar++;
    }
    if ($jawaban3 == $jawabanBenar [2]) {
        $jumlahBenar++;
    }
    if ($jawaban4 == $jawabanBenar [3]) {
        $jumlahBenar++;
    }
    if ($jawaban5 == $jawabanBenar [4]) {
        $jumlahBenar++;
    }
    if ($jawaban6 == $jawabanBenar [5]) {
        $jumlahBenar++;
    }
    if ($jawaban7 == $jawabanBenar [6]) {
        $jumlahBenar++;
    }
    if ($jawaban8 == $jawabanBenar [7]) {
        $jumlahBenar++;
    }
    if ($jawaban9 == $jawabanBenar [8]) {
        $jumlahBenar++;
    }
    if ($jawaban10 == $jawabanBenar [9]) {
        $jumlahBenar++;
    }
    if ($jawaban11 == $jawabanBenar [10]) {
        $jumlahBenar++;
    }
    if ($jawaban12 == $jawabanBenar [11]) {
        $jumlahBenar++;
    } 




    $salah= 12-$jumlahBenar;
    $persen = $jumlahBenar/12 * 100;

    // echo "Jawaban Anda : </p>";
    // echo "<p> Pertanyaan 1 : $jawaban1 </p>";
    // echo "<p> Pertanyaan 2 : $jawaban2 </p>";
    // echo "<p> Pertanyaan 3 : $jawaban3 </p>";
    // echo "<p> Pertanyaan 4 : $jawaban4 </p>";
    // echo "<p> Pertanyaan 5 : $jawaban5 </p>";
    // echo "<p> Pertanyaan 6 : $jawaban6 </p>";
    // echo "<p> Pertanyaan 7 : $jawaban7 </p>";
    // echo "<p> Pertanyaan 8 : $jawaban8 </p>";
    // echo "<p> Pertanyaan 9 : $jawaban9 </p>";
    // echo "<p> Pertanyaan 10 : $jawaban10 </p>";
    // echo "<p> Pertanyaan 11 : $jawaban11 </p>";
    // echo "<p> Pertanyaan 12 : $jawaban12 </p>";

    
    
?>

<div class="container bg-success jawabancik">
<h2 class="pt-4 text-center ">Hasil Tes Matamu</h2>
<hr>
<div class="teks mt-4 text-center ">
    <?php echo "<p> Jumlah Jawaban Yang Benar : $jumlahBenar </p>";
      echo  "<p> Jumlah Jawaban Yang Salah : $salah </p>"; 
      echo  "<p> Persentase Jawaban : ".round($persen)." % </p>";
      echo  '<div class="progress mt-4" role="progressbar" aria-label="Example with label" aria-valuenow="'.round($persen).'" aria-valuemin="0" aria-valuemax="100">
      <div class="progress-bar" style="width: '.round($persen).'%">'.round($persen).'%</div>
    </div>'
      ?>
</div>
<form action="kuis2.php" class="mt-4">
    <input type="submit" class="bg-danger ms-5 kembali" value="Isi Ulang">
    <button type="button" class="btn btn-danger" style="margin-left:30px;"><a style="text-decoration:none; color:white"href="#bawah">Lihat Hasil Kamu</a></button>
</form>
</div>
<br>
<br>
<br>
<br>

<div class="container text-center mt-5">
    <h2 class="mt-5" id="bawah">Hasil Kamu</h2>
<hr>

<div class="row mt-5">
                <div class="col-4">
                    <img style="width: 350px;" src="aset/1.jpg" alt="">
                    <p class="jawaban"> Jawabanmu : <?=  $jawaban1 ?></p>
                    
                </div>
                <div class="col-4">
                    <img style="width: 350px;" src="aset/2.jpg" alt="">
                    <p class="jawaban"> Jawabanmu : <?= $jawaban2 ?></p>
                    
                </div>
                <div class="col-4">
                    <img style="width: 350px;" src="aset/3.jpg" alt="">
                    <p class="jawaban"> Jawabanmu : <?= $jawaban3 ?></p>
                   
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-4">
                    <img style="width: 350px;" src="aset/4.jpg" alt="">
                    <p class="jawaban"> Jawabanmu : <?=  $jawaban4 ?></p>
                  
                </div>
                <div class="col-4">
                    <img style="width: 350px;" src="aset/5.jpg" alt="">
                    <p class="jawaban"> Jawabanmu : <?=  $jawaban5 ?></p>
                   
                </div>
                <div class="col-4">
                    <img style="width: 350px;" src="aset/6.jpg" alt="">
                    <p class="jawaban"> Jawabanmu : <?=  $jawaban6 ?></p>
                  
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-4">
                    <img style="width: 350px;" src="aset/7.jpg" alt="">
                    <p class="jawaban"> Jawabanmu : <?=  $jawaban7 ?></p>
                 
                </div>
                <div class="col-4">
                    <img style="width: 350px;" src="aset/8.jpg" alt="">
                    <p class="jawaban"> Jawabanmu : <?=  $jawaban8 ?></p>
                  
                </div>
                <div class="col-4">
                    <img style="width: 350px;" src="aset/9.jpg" alt="">
                    <p class="jawaban"> Jawabanmu : <?=  $jawaban9 ?></p>
                    
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-4">
                    <img style="width: 350px;" src="aset/10.jpg" alt="">
                    <p class="jawaban"> Jawabanmu : <?=  $jawaban10 ?></p>
                </div>
                <div class="col-4">
                    <img style="width: 350px;" src="aset/11.jpg" alt="">
                    <p class="jawaban"> Jawabanmu : <?=  $jawaban11 ?></p>
                </div>
                <div class="col-4">
                    <img style="width: 350px;" src="aset/12.jpg" alt="">
                    <p class="jawaban"> Jawabanmu : <?=  $jawaban12 ?></p>
                </div>
            </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>

