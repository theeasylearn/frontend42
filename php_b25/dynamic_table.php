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
                        <h1>Create Dynamic Tabel</h1>
                    </div>
                   <div class="card-body">
                    <form action="submit/loop.php" method="post">
                        <input type="number" name="row"  class="form-control mt-3 form-control-lg"  placeholder="Enter the Row" require>
                        <input type="number" name="col"  class="form-control mt-3 form-control-lg"  placeholder="Enter the column" require>
                        <select class="form-select  mt-3" name="loop" require>
                            <option selected value="0">Select Loop</option>
                            <option value="1">While Loop</option>
                            <option value="2">For Loop</option>
                            <option value="3">Do..while Loop</option>
                        </select>
                        <button class="btn btn-primary  mt-3 " type="submit" name="submit">Create Table</button>
                        <button class="btn btn-danger  mt-3 " type="reset">clear All</button>  
                    </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>