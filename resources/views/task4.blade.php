<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $('#output').html("Hai " + $("#fname").val() + " " + $("#lname").val() + " !!!");
  });
});
</script>
</head>
<body>
<h1>Daftar Member</h1>
<label for="fname">Nama Depan : </label><br>
<input type="text" id="fname" placeholder="Masukkan Nama Depan" required>
<br><br>
<label for="lname">Nama Belakang</label><br>
<input type="text" id="lname" placeholder="Masukkan Nama Belakang" required>
<br>
<button>Show Value</button>

<p id="output"></div>

</body>
</html>
