<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            function valid(){
                    if($("#userid").val().length<5 || $("#userid").val().length>12){
                        alert("User Id must be of length 5 to 12")
                        return (false)
                    }

                    if($("#pass").val().length<7 || $("#pass").val().length>12){
                        alert("Password must be of length 7 to 12")
                        return (false)
                    }

                    var name = $("#name").val();
                    var pattern=new RegExp(/^[a-zA-Z\s]+$/)
                    if((pattern.test(name))){

                    }
                    else{
                        alert("Name must be alphabet")
                        return (false);
                    }

                    var n = $("#zipcode").val();
                     if(isNaN(n)){
                        alert("Zipcode must be numeric")
                        return (false);
                    }

                    var radio = $("input[type='radio']:checked");
                    var check = $("input[type='checkbox']:checked");
                    if(radio.length <= 0 || check.length <= 0 ){
                    alert("Must be select Sex and Language")
                    return (false);
                     }

                    return (true)
            }

        </script>
        <style>
            body{
                background-color: rgb(92, 133, 179);
            }

            form{
                background-color: white;
            }
        </style>
        <title>Form Validation</title>
    </head>
    <body>
        <div class="container ">
        <form onsubmit="return valid()" action="https://www.instagram.com/" class="border border-1 border-dark rounded px-lg-5 my-3">
            <h1 style="text-align: center;">Registration Form</h1>
            <div class="form-group">
                <div class="row" >
                    <div class="col-5" style="text-align: right;">
                        <label for="userid" >User ID: </label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="userid" id="userid" placeholder="Masukkan user id" required>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="row">
                    <div class="col-5" style="text-align: right;">
                        <label for="pass">Password: </label>
                    </div>
                    <div class="col-7">
                        <input type="password" name="pass" id="pass" placeholder="Masukkan password" required>
                    </div>
                </div>


            </div>
            <br>
            <div class="form-group">
                <div class="row">
                    <div class="col-5" style="text-align: right;">
                        <label for="name">Name: </label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="name" id="name" placeholder="Masukkan nama lengkap" required>
                    </div>
                </div>


            </div>
            <br>
            <div class="form-group">
                <div class="row">
                    <div class="col-5" style="text-align: right;">
                        <label for="address">Address: </label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="address" id="address" placeholder="Masukkan alamat">
                    </div>
                </div>


            </div>
            <br>
            <div class="form-group">
                <div class="row">
                    <div class="col-5" style="text-align: right;">
                        <label for="country">Country: </label>
                    </div>
                    <div class="col-7">
                        <input list="country" name="country" required placeholder="(Pilih salah satu negara)">
                <datalist id="country">
                    <option value="Indonesia">
                    <option value="Malaysia">
                    <option value="America">
                    <option value="China">
                    <option value="Singapore">
                  </datalist>
                    </div>
                </div>


            </div>
            <br>
            <div class="form-group">
                <div class="row">
                    <div class="col-5" style="text-align: right;">
                        <label for="zipcode">Zip Code: </label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="zipcode" id="zipcode" placeholder="Masukkan kode pos">
                    </div>
                </div>


            </div>
            <br>
            <div class="form-group">
                <div class="row">
                    <div class="col-5" style="text-align: right;">
                        <label for="email">Email: </label>
                    </div>
                    <div class="col-7">
                        <input type="email" name="email" id="email" placeholder="Masukkan email">
                    </div>
                </div>


            </div>
            <br>
            <div class="row">
                <div class="col-5" style="text-align: right;">
                    <label>Sex:</label>
                </div>
                <div class="col-7">
                    <div class="form-check-inline">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio" required>Male
                        </label>
                      </div>
                      <div class="form-check-inline">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio" required>Female
                        </label>
                      </div>
                </div>
            </div>


              <br><br>
              <div class="row">
                <div class="col-5" style="text-align: right;">
                    <label>Language:</label>
                </div>
                <div class="col-7">
                    <div class="form-check-inline">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="english" >English
                        </label>
                      </div>
                      <div class="form-check-inline">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="nonenglish" >Non English
                        </label>
                      </div>
                </div>
            </div>


              <br><br>
              <div class="form-group">
                <div class="row">
                    <div class="col-5" style="text-align: right;">
                        <label for="about">About:</label>
                    </div>
                    <div class="col-7">
                        <textarea class="form-control" rows="5" id="about"></textarea>
                    </div>
                </div>
              </div>
              <br>
              <center>
              <button type="submit" class="btn btn-primary text-center mb-2">Submit</button>
            </center>
            </form>
        </div>

    </body>

</html>
