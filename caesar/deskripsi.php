<html>
<head>
    <title>Form untuk Dekripsi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<style>
    body{
        background: rgb(128,124,193);
        background: linear-gradient(257deg, rgba(128,124,193,1) 18%, rgba(199,192,173,1) 46%, rgba(186,162,88,1) 70%);
    }
</style>
    <br> <br> <br> <br> <br>
    <br> <br> <br> <br> <br>
    <br> <br>
<body>
    <form action="dekCaesar.php" method="get">
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
            </div>
            <div class="card-body">
                <h5 class="card-title">Caesar - Deskripsi</h5><br>
        Key : <input type="text" name="key" maxlength="2"> <br> <br>
        <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger" value="reset">Reset</button>
                <input class="btn btn-dark" onclick="document.location='../logout.php'" value="Log Out">   
    </form>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>