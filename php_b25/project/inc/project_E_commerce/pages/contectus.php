<?php 
      require_once "./include/header.php"; 
      require_once("../include/db.php");
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
                        <p class="lead mb-0">This form is for retailer inquiries only. For all other customer or shopper support requests, please visit the links below this form.</p>
                     </div>
                     <!-- form -->
                     <form class="row needs-validation" novalidate>
                        <!-- input -->
                        <div class="col-md-6 mb-3">
                           <label class="form-label" for="contactFName">
                              First Name
                              <span class="text-danger">*</span>
                           </label>
                           <input type="text" id="contactFName" class="form-control" name="contactFName" placeholder="Enter Your First Name" required />
                           <div class="invalid-feedback">Please enter firstname.</div>
                        </div>
                        <div class="col-md-6 mb-3">
                           <!-- input -->
                           <label class="form-label" for="contactLName">
                              Last Name
                              <span class="text-danger">*</span>
                           </label>
                           <input type="text" id="contactLName" class="form-control" name="contactLName" placeholder="Enter Your Last name" required />
                           <div class="invalid-feedback">Please enter lastname.</div>
                        </div>
                        <div class="col-md-12 mb-3">
                           <!-- input -->
                           <label class="form-label" for="contactCompanyName">
                              Company
                              <span class="text-danger">*</span>
                           </label>
                           <input type="text" id="contactCompanyName" name="contactCompanyName" class="form-control" placeholder="Your Company" required />
                           <div class="invalid-feedback">Please enter company.</div>
                        </div>
                        <div class="col-md-12 mb-3">
                           <!-- input -->
                           <label class="form-label" for="contactTitle">Title</label>
                           <input type="text" id="contactTitle" name="contactTitle" class="form-control" placeholder="Your Title" required />
                           <div class="invalid-feedback">Please enter title.</div>
                        </div>
                        <div class="col-md-6 mb-3">
                           <label class="form-label" for="contactEmail">
                              Email
                              <span class="text-danger">*</span>
                           </label>
                           <input type="email" id="contactEmail" name="contactEmail" class="form-control" placeholder="Enter Your First Name" required />
                           <div class="invalid-feedback">Please enter email.</div>
                        </div>
                        <div class="col-md-6 mb-3">
                           <!-- input -->
                           <label class="form-label" for="contactPhone">Phone</label>
                           <input type="text" id="contactPhone" name="contactPhone" class="form-control" placeholder="Your Phone Number" required />
                           <div class="invalid-feedback">Please enter phone.</div>
                        </div>
                        <div class="col-md-12 mb-3">
                           <!-- input -->
                           <label class="form-label" for="contactTearea">Textarea</label>
                           <textarea rows="3" id="contactTearea" class="form-control" placeholder="Additional Comments" required></textarea>
                           <div class="invalid-feedback">Please enter a message in the textarea.</div>
                        </div>
                        <div class="col-md-12">
                           <!-- btn -->
                           <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </section>
      </main>
   <?php require_once "./include/footer.php";  ?> 