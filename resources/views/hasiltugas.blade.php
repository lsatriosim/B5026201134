<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Hasil</title>

</head>
<body>
    <center>
    <h1>Selamat hasil dari faktorial yang kamu cari adalah</h1>
    <h1><?php

                function factorial($x){

                    if ($x == "0" || $x == "1")
                    {
                        return 1 ;
                    } else
                    {
                        return ($x * factorial($x - 1)) ;
                    }
                }
                $n = $_POST["factorial"] ;
                $hasil = factorial($n);
                echo "$hasil"
                 ?></h1>
    </center>
</body>
</html>
