<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>FORM ENKRIPSI</title>
</head>
    <style>
        body{
            background: rgb(128,124,193);
            background: linear-gradient(257deg, rgba(128,124,193,1) 18%, rgba(199,192,173,1) 46%, rgba(186,162,88,1) 70%);
    }
    </style>
<body>
    <br> <br> <br> <br> <br> <br> <br>
    <br> <br> <br> 
    <form action="caesar.php" method="get">
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
            </div>
            <div class="card-body">
                <h5 class="card-title">Caesar - Enkripsi</h5><br>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Plaintext</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="plaintext" name="kata">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Key</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="key" name="key">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger" value="reset">Reset</button>
                <input class="btn btn-dark" onclick="document.location='../logout.php'" value="Log Out">   
            </div>
    </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body> 
</html>