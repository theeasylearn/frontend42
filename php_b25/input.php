<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body oncontextmenu="return false;"><!-- insepact disble to use this code -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card shadow mt-5">
                    <div class="card-header text-white bg-primary">
                        <h1>Simple Intreset</h1>
                    </div>
                    <div class="card-body">
                        <form action="submit/input1.php" method="post">
                            <input type="number" name="amount" class="form-control mb-3 from-control-lg" placeholder="Amount" required>
                            <input type="number" name="rate" class="form-control mb-3 from-control-lg" placeholder="Rate" required>
                            <input type="number" name="year" class="form-control mb-3 from-control-lg" placeholder="year" required>
                            <button class="btn btn-primary" type="submit" name="submit">calcuate</button>
                            <button class="btn btn-danger" type="reset">clear All</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>