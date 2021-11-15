<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Factorial</title>
    <style>
        h1{
            text-align: center;
        }

    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });

        function valid(){
            var n = $("#factorial").val()
            if(isNaN(n)){
                alert("n harus berisi angka")
                return false
            }

            if(n<0){
                alert("n tidak boleh negatif")
                return false
            }

            return true;
        }
        </script>
</head>
<body>
    <div class="container">
        <div class="row">
        <h1>Factorial Finder <a href="#" data-toggle="tooltip" data-placement="right" title="The factorial of a non-negative integer n, denoted by n!, is the product of all positive integers less than or equal to n"><span class="badge badge-pill badge-info bg-primary rounded-circle">i</span></a></h1>

        <form action="faktorial" onsubmit="return valid()" class="form border border-2 border-dark rounded px-5 py-3 my-5" method="POST">
            @csrf
            <div class="form-group">
                <div class="row">
                    <div class="col-5">
                        <label for="factorial">Value n</label>
                    </div>
                    <div class="col-1">
                        <p>:</p>
                    </div>
                    <div class="col-6">
                        <input type="text" name="factorial" id="factorial" class="form-control" placeholder="Please input n" required>
                    </div>
                </div>
                <br>
                <center>
                    <button type="submit" class="btn btn-primary btn-lg mx-3 text-center">Submit</button>
                </center>
            </div>
        </form>
    </div>

    </div>
</body>
</html>
