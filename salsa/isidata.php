<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <form action="data.php" method="post"> 
    <h1 class="text-center">DATA SISWA</h1>
    <div class="mb-3 mt-3 text-center">
                nis : 
                <input class="rounded-3 border-light" type="text" name="nis" style="width: 400px;">
              </div>
              <div class="mb-3 mt-3 text-center">
                name : 
                <input class="rounded-3 border-light" type="text" name="name" style="width: 400px;">
              </div>
              <div class="mb-3 mt-3 text-center">
                class : 
                <input class="rounded-3 border-light" type="text" name="class" style="width: 400px;">
              </div>
              <div class="mb-3 mt-3 text-center">
              <button type="submit" class="btn btn-success">save</button>
              </div>
    </form>
</div>
</body>
</html>