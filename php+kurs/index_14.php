<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
<body>

    <form id ="myform" action="form.php" method="post" style="background-color: aqua;padding:100px;margin:30px;width:50%;margin-left:25%" enctype="multipart/form-data" class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <input type="text" id="name" class="form-control" placeholder="First name" name="name" autocomplete="off">
                    <div id="nameHelpBlock" class="form-text">İsmin uzunluğu 3 karakterden büyük olmalıdır.</div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                        <input type="text" id="surname" class="form-control" placeholder="Last name" name ="surname" autocomplete="off">
                        <div id="nameHelpBlock" class="form-text">Soyismin uzunluğu 3 karakterden büyük olmalıdır.</div>
                </div>
            </div>
            <br>
            <div class="row">
                    <div class="col">
                        <input type="checkbox" name="hobbies[]"> Shopping
                    </div>
                    <div class="col">
                        <input type="checkbox" name="hobbies[]"> Cinema
                    </div>
            </div>
            <div class="row">
                    <div class="col">
                        <input type="checkbox" name="hobbies[]"> Eating
                    </div>
                    <div class="col">
                        <input type="checkbox" name="hobbies[]"> Travelling
                    </div>
            </div>
            <br><br>
            <div class="row">
                    <div class="col">
                        <label for="file">Select uploading file</label>
                    </div>
                    <div class="col">
                        <input type="file" name="file" multiple>
                    </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <button type="submit" class="btn btn-primary btn-hover" style="width:100%" onclick="showAlert()">Send</button>
                </div>
            </div>

        </div>
    </form>    

    <script src="script.js"></script>
    

</body>
</html>