<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Form Input Peminjaman Buku</title>

    <script>
        function validation(){
            var hasil = true
            if($("#judul").val().length<10){
                $("#judulerror").text("Judul Buku minimal 10 karakter")
                $("#judulerror").focus
                hasil = false
            }
            else{
                $("#judulerror").text("")
            }

            var n = $("#nobuku").val()
            if(isNaN(n) || n.length !=5){
                $("#nobukuerror").text("No Buku harus angka dan berjumlah 5 digit")
                $("nobukuerror").focus
                hasil = false
            }
            else{
                $("#nobukuerror").text("")
            }

            if($("#jenis").val() == 0){
                $("#jeniserror").text("Jenis Peminjaman harus diisi")
                $("#jeniserror").focus
                hasil = false
            }
            else{
                $("#jeniserror").text("")
            }
            return hasil
        }
    </script>
    <style>
        body{
            background-image: url("https://image.freepik.com/free-photo/hand-painted-watercolor-background-with-sky-clouds-shape_24972-1095.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        form{
            background-color: white;
        }
       #title{
           text-align: center;
       }
       label{
           font-size: large;
           font-weight: 500;
       }
       .error{
           color: red;
       }
    </style>
</head>
<body>
    <div class="container">
        <form class="form border border-2 border-dark rounded px-5 py-3 my-5" onsubmit="return validation() " action="https://www.instagram.com/" >
            <p>Liefran Satrio Sim</p>
            <p>Liefran</p>
            <p>5026201134</p>

            <h2 id="title">Form Input Peminjaman Buku</h2>
            <br>
            <div class="form-group">
                <div class="row">
                    <div class="col-5">
                        <label for="judul">Judul Buku</label>
                    </div>
                    <div class="col-1">
                        <p>:</p>
                    </div>
                    <div class="col-6">
                        <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukkan judul buku" required>
                    </div>
                </div>
            </div>
            <p id="judulerror" class="error"></p>
            <div class="form-group">
                <div class="row">
                    <div class="col-5">
                        <label for="nobuku">No Buku</label>
                    </div>
                    <div class="col-1">
                        <p>:</p>
                    </div>
                    <div class="col-6">
                        <input type="text" name="nobuku" id="nobuku" class="form-control" placeholder="Masukkan nomor buku" required>
                    </div>
                </div>
            </div>
            <p id="nobukuerror" class="error"></p>
            <div class="form-group">
                <div class="row">
                    <div class="col-5">
                        <label for="jenis">Jenis Peminjaman</label>
                    </div>
                    <div class="col-1">
                        <p>:</p>
                    </div>
                    <div class="col-6">
                            <select class="form-control" id="jenis" name="jenis" required>
                                <option value="0"></option>
                              <option value="biasa">Biasa</option>
                              <option value="kilat">Kilat</option>
                              <option value="lama">Lama</option>
                            </select>
                    </div>
                </div>
            </div>
            <p id="jeniserror" class="error"></p>
            <div class="form-group">
                <div class="row">
                    <div class="col-5">
                        <label for="tanggal">Tanggal Peminjaman</label>
                    </div>
                    <div class="col-1">
                        <p>:</p>
                    </div>
                    <div class="col-6">
                        <input type="date" name="tanggal" id="tanggal" class="form-control" required>
                    </div>
                </div>
            </div>
            <br>
                <div class="row">
                    <div class="col-6 text-center">
                        <button type="submit" class="btn btn-primary btn-lg mx-3">Simpan</button>
                    </div>
                    <div class="col-6 text-center">
                        <button type="reset" class="btn btn-success btn-lg mx-3">Reset</button>
                    </div>
                </div>
        </form>

    </div>

</body>
</html>
