<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card shadow mt-5">
                    <div class="card-header bg-primary text-white">
                        <h3>Maths Operation</h3>
                    </div>
                    <div class="card-body">
                        <form action="submit/maths.php" method="post">
                            <input type="number" name="first" class="form-control form-control-lg" placeholder="first">
                            <input type="number" name="second" class="form-control form-control-lg" placeholder="second">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="addition" name="rchoice" class="form-check-input" value="1">
                                        <label for="addition" class="form-check-label">Addition</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="subtraction" name="rchoice" class="form-check-input" value="2">
                                        <label for="subtraction" class="form-check-label">Subtraction</label>
                                    </div>
                                    <div  class="form-check form-check-inline">
                                        <input type="radio" id="multiplaction" name="rchoice" class="form-check-input" value="3">
                                        <label for="multiplaction" class="form-check-label">Multiplaction</label>
                                    </div>
                                    <div  class="form-check form-check-inline">
                                        <input type="radio" id="divison" name="rchoice" class="form-check-input" value="4">
                                        <label for="divison" class="form-check-label">Division</label>
                                    </div>
                                </div>
                                <div>
                                <button class="btn btn-primary" type="submit" name="submit">calcuate</button>
                                <button class="btn btn-danger" type="reset">clear All</button>  
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</body>
</html>