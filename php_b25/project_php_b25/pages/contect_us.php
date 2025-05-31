<?php
  session_start();
  require_once "../include/head.php";
  require_once "../include/connection.php";
  $userId = $_SESSION['login']['id'];

   if(isset($_POST['submit']))
   {
      $sql = $db->prepare("INSERT INTO contect_us (uid,fname,lname,address,email,phone,feedback) VALUES (?,?,?,?,?,?,?)");
      $sql->execute([
         $userId,
         $_POST['fname'],
         $_POST['lname'],
         $_POST['address'],
         $_POST['email'],
         $_POST['phone'],
         $_POST['feedback']
      ]);
      echo "<script>window.location = 'index.php';</script>";
      exit;
   }


?>

<main>
         <!-- section -->
         <section class="my-lg-14 my-8">
            <!-- container -->
            <div class="container">
               <div class="row">
                  <!-- col -->
                  <div class="offset-lg-2 col-lg-8 col-12">
                     <div class="mb-8">
                        <!-- heading -->
                        <h1 class="h3">Retailer Inquiries</h1>
                       
                     <!-- form -->
                     <form class="row needs-validation" method="post">
                        <!-- input -->
                        <div class="col-md-6 mb-3">
                           <label class="form-label" for="contactFName">
                              First Name
                              <span class="text-danger">*</span>
                           </label>
                           <input type="text" id="contactFName" class="form-control" name="fname" placeholder="Enter Your First Name" required />
                           <div class="invalid-feedback">Please enter firstname.</div>
                        </div>
                        <div class="col-md-6 mb-3">
                           <!-- input -->
                           <label class="form-label" for="contactLName">
                              Last Name
                              <span class="text-danger">*</span>
                           </label>
                           <input type="text" id="contactLName" class="form-control" name="lname" placeholder="Enter Your Last name" required />
                           <div class="invalid-feedback">Please enter lastname.</div>
                        </div>
                        <div class="col-md-12 mb-3">
                           <!-- input -->
                           <label class="form-label" for="contactCompanyName">
                              Address
                              <span class="text-danger">*</span>
                           </label>
                           <input type="text" id="contactCompanyName" name="address" class="form-control" placeholder="Your Address" required />
                           <div class="invalid-feedback">Please enter company.</div>
                        </div>
                        <div class="col-md-6 mb-3">
                           <label class="form-label" for="contactEmail">
                              Email
                              <span class="text-danger">*</span>
                           </label>
                           <input type="email" id="contactEmail" name="email" class="form-control" placeholder="Enter Your First Name" required />
                           <div class="invalid-feedback">Please enter email.</div>
                        </div>
                        <div class="col-md-6 mb-3">
                           <!-- input -->
                           <label class="form-label" for="contactPhone">Phone
                           <span class="text-danger">*</span>
                           </label>
                           <input type="text" id="contactPhone" name="phone" class="form-control" placeholder="Your Phone Number" required />
                           <div class="invalid-feedback">Please enter phone.</div>
                        </div>
                        <div class="col-md-12 mb-3">
                           <!-- input -->
                           <label class="form-label" for="contactTearea">Feedback
                           <span class="text-danger">*</span>
                           </label>
                           <textarea rows="3" id="contactTearea" class="form-control" placeholder="Feedback" name="feedback" required></textarea>
                           <div class="invalid-feedback">Please enter a message in the textarea.</div>
                        </div>
                        <div class="col-md-12">
                           <!-- btn -->
                           <button type="submit" class="btn btn-info" name="submit">Submit</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </section>
      </main>


<?php
    require_once "../include/footer.php";
?>