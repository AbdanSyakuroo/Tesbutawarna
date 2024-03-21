<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <style>
        img {
            box-shadow: 4px 4px 7px 7px rgba(0, 0, 0, 0.12);
            border-radius: 15px;
        }

        input:focus {
            color: #FB6A27;
            border-color: ;
            box-shadow: 0 0 10px #FB6A27;

        }

        input{
            text-align: center;
        }
        .con {
            background-color: white;
            border-radius: 10px;
            padding: 10px;
        }

        .con:hover {
            background-color: #FB6A27;
            color: white;
            transition: 0.2s;
        }
    </style>
</head>

<body style="background-color: #F5E8DD">

    <div class="container text-center">
        <h2 class="mt-5">Uji Penglihatan Mata (Tes Buta Warna)
        </h2>
        <form action="jawabanbenarmata.php" method="POST">
            <div class="row mt-5">
                <div class="col-4">
                    <img style="width: 350px;" src="aset/1.jpg" alt="">

                    <input placeholder="Isi Jawaban Disini" class="mt-3" type="text" name="jawaban1"
                        style="width: 70%;">
                </div>
                <div class="col-4">
                    <img style="width: 350px;" src="aset/2.jpg" alt="">

                    <input placeholder="Isi Jawaban Disini" class="mt-3" type="text" name="jawaban2"
                        style="width: 70%;">
                </div>
                <div class="col-4">
                    <img style="width: 350px;" src="aset/3.jpg" alt="">

                    <input placeholder="Isi Jawaban Disini" class="mt-3" type="text" name="jawaban3"
                        style="width: 70%;">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-4">
                    <img style="width: 350px;" src="aset/4.jpg" alt="">

                    <input placeholder="Isi Jawaban Disini" class="mt-3" type="text" name="jawaban4"
                        style="width: 70%;">
                </div>
                <div class="col-4">
                    <img style="width: 350px;" src="aset/5.jpg" alt="">

                    <input placeholder="Isi Jawaban Disini" class="mt-3" type="text" name="jawaban5"
                        style="width: 70%;">
                </div>
                <div class="col-4">
                    <img style="width: 350px;" src="aset/6.jpg" alt="">

                    <input placeholder="Isi Jawaban Disini" class="mt-3" type="text" name="jawaban6"
                        style="width: 70%;">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-4">
                    <img style="width: 350px;" src="aset/7.jpg" alt="">

                    <input placeholder="Isi Jawaban Disini" class="mt-3" type="text" name="jawaban7"
                        style="width: 70%;">
                </div>
                <div class="col-4">
                    <img style="width: 350px;" src="aset/8.jpg" alt="">

                    <input placeholder="Isi Jawaban Disini" class="mt-3" type="text" name="jawaban8"
                        style="width: 70%;">
                </div>
                <div class="col-4">
                    <img style="width: 350px;" src="aset/9.jpg" alt="">

                    <input placeholder="Isi Jawaban Disini" class="mt-3" type="text" name="jawaban9"
                        style="width: 70%;">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-4">
                    <img style="width: 350px;" src="aset/10.jpg" alt="">
                    <input placeholder="Isi Jawaban Disini" class="mt-3" type="text" name="jawaban10"
                        style="width: 70%;">
                </div>
                <div class="col-4">
                    <img style="width: 350px;" src="aset/11.jpg" alt="">
                    <input placeholder="Isi Jawaban Disini" class="mt-3" type="text" name="jawaban11"
                        style="width: 70%;">
                </div>
                <div class="col-4">
                    <img style="width: 350px;" src="aset/12.jpg" alt="">
                    <input placeholder="Isi Jawaban Disini" class="mt-3" type="text" name="jawaban12"
                        style="width: 70%;">
                </div>
            </div>
            <input class="con mt-5 mb-5" type="submit" value="Hitung Kemampuanmu">
        </form>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
<!-- <form action="jawaban_benar.php" method="POST">
 <p>Pertanyaan 1 : Berapakah hasil dari 2 + 2?</p>
 <input type="text" name="jawaban1">
 <p>Pertanyaan 2 : Apa singkatan dari HTML?</p>
 <input type="text" name="jawaban2">
 <input type="submit" value="hitung">
</form> -->