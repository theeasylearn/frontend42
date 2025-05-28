<?php
session_start();
require_once "../include/head.php";
require_once "../include/connection.php";

echo "<h1>Checkout Page</h1>";
echo "Product: " . $_SESSION['name'] . "<br>";
echo "Price: " . $_SESSION['price'] . "<br>";
echo "Stock: " . $_SESSION['stock'] . "<br>";


$name = $_SESSION['name'];
$price = $_SESSION['price'];
$stock = $_SESSION['stock'];

$total = $price * $stock;
echo "total price ".$total;

if(isset($_POST['b1']))
{
    $fname = $_POST['contactFName'];
    $lname = $_POST['contactLName'];
    $email = $_POST['contactEmail'];
    $phone = $_POST['contactPhone'];
    $address = $_POST['contactTearea'];

    $sql = $db->prepare("INSERT INTO buynow (fname,lname,email,phone,address,pname,stock,tprice) VALUES
    (?,?,?,?,?,?,?,?)");
    $sql->execute([
        $fname,
        $lname,
        $email,
        $phone,
        $address,
        $name,
        $stock,
        $total
    ]);

    echo "<script>window.location = 'index.php';</script>";
   exit;
}

?>
<main>
   <section class="my-lg-14 my-8">
      <div class="container">
         <div class="row">
            <div class="offset-lg-2 col-lg-8 col-12">
               <div class="mb-8">
                  <h1 class="h3" align="center">Check Out</h1>
               </div>
               <form class="row needs-validation" method="post" novalidate>
                  <div class="col-md-6 mb-3">
                     <label class="form-label" for="contactFName">First Name <span class="text-danger">*</span></label>
                     <input type="text" id="contactFName" class="form-control" name="contactFName" placeholder="Enter Your First Name" required />
                     <div class="invalid-feedback">Please enter firstname.</div>
                  </div>
                  <div class="col-md-6 mb-3">
                     <label class="form-label" for="contactLName">Last Name <span class="text-danger">*</span></label>
                     <input type="text" id="contactLName" class="form-control" name="contactLName" placeholder="Enter Your Last name" required />
                     <div class="invalid-feedback">Please enter lastname.</div>
                  </div>
                  <div class="col-md-6 mb-3">
                     <label class="form-label" for="contactEmail">Email <span class="text-danger">*</span></label>
                     <input type="email" id="contactEmail" name="contactEmail" class="form-control" placeholder="Enter Your Email" required />
                     <div class="invalid-feedback">Please enter email.</div>
                  </div>
                  <div class="col-md-6 mb-3">
                     <label class="form-label" for="contactPhone">Phone</label>
                     <input type="text" id="contactPhone" name="contactPhone" class="form-control" placeholder="Your Phone Number" required />
                     <div class="invalid-feedback">Please enter phone.</div>
                  </div>
                  <div class="col-md-12 mb-3">
                     <label class="form-label" for="contactTearea">Address</label>
                     <textarea rows="3" id="contactTearea" name="contactTearea" class="form-control" placeholder="Your Address" required></textarea>
                     <div class="invalid-feedback">Please enter a message in the textarea.</div>
                  </div>
                  <div class="col-md-12">
                     <button type="submit" class="btn btn-info" name="b1">Place Order</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </section>
</main>
<?php require_once "../include/footer.php"; ?>