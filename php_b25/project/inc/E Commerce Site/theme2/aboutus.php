
<?php require_once "./include/header.php";  ?>
   <body>
      <!-- navbar -->
      <div class="border-bottom">
      
         <nav class="navbar navbar-expand-lg navbar-light navbar-default py-0 pb-lg-4" aria-label="Offcanvas navbar large">
            <div class="container">
               <div class="offcanvas offcanvas-start" tabindex="-1" id="navbar-default" aria-labelledby="navbar-defaultLabel">
                  <div class="offcanvas-header pb-1">
                     <a href="index.html"><img src="../assets/images/logo/freshcart-logo.svg" alt="eCommerce HTML Template" /></a>
                     <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     <div class="d-block d-lg-none mb-4">
                        <form action="#">
                           <div class="input-group">
                              <input class="form-control rounded" type="search" placeholder="Search for products" />
                              <span class="input-group-append">
                                 <button class="btn bg-white border border-start-0 ms-n10 rounded-0 rounded-end" type="button">
                                    <svg
                                       xmlns="http://www.w3.org/2000/svg"
                                       width="16"
                                       height="16"
                                       viewBox="0 0 24 24"
                                       fill="none"
                                       stroke="currentColor"
                                       stroke-width="2"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       class="feather feather-search">
                                       <circle cx="11" cy="11" r="8"></circle>
                                       <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                 </button>
                              </span>
                           </div>
                        </form>
                        <div class="mt-2">
                           <button type="button" class="btn btn-outline-gray-400 text-muted w-100" data-bs-toggle="modal" data-bs-target="#locationModal">
                              <i class="feather-icon icon-map-pin me-2"></i>
                              Pick Location
                           </button>
                        </div>
                     </div>

                     <div class="dropdown me-3 d-none d-lg-block">
                        <button class="btn btn-primary px-6" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                           <span class="me-1">
                              <svg
                                 xmlns="http://www.w3.org/2000/svg"
                                 width="16"
                                 height="16"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="1.2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="feather feather-grid">
                                 <rect x="3" y="3" width="7" height="7"></rect>
                                 <rect x="14" y="3" width="7" height="7"></rect>
                                 <rect x="14" y="14" width="7" height="7"></rect>
                                 <rect x="3" y="14" width="7" height="7"></rect>
                              </svg>
                           </span>
                           All Departments
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                           <li><a class="dropdown-item" href="shop-grid.html">Dairy, Bread & Eggs</a></li>
                           <li><a class="dropdown-item" href="shop-grid.html">Snacks & Munchies</a></li>
                           <li><a class="dropdown-item" href="shop-grid.html">Fruits & Vegetables</a></li>
                           <li><a class="dropdown-item" href="shop-grid.html">Cold Drinks & Juices</a></li>
                           <li><a class="dropdown-item" href="shop-grid.html">Breakfast & Instant Food</a></li>
                           <li><a class="dropdown-item" href="shop-grid.html">Bakery & Biscuits</a></li>
                           <li><a class="dropdown-item" href="shop-grid.html">Chicken, Meat & Fish</a></li>
                        </ul>
                     </div>
                     <div>
                        <ul class="navbar-nav align-items-center">
                           <li class="nav-item dropdown w-100 w-lg-auto">
                              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home</a>
                              <ul class="dropdown-menu">
                                 <li><a class="dropdown-item" href="../index.html">Home 1</a></li>
                                 <li><a class="dropdown-item" href="index-2.html">Home 2</a></li>
                                 <li><a class="dropdown-item" href="index-3.html">Home 3</a></li>
                                 <li><a class="dropdown-item" href="index-4.html">Home 4</a></li>
                                 <li>
                                    <a class="dropdown-item" href="index-5.html">Home 5</a>
                                 </li>
                              </ul>
                           </li>
                           <li class="nav-item dropdown w-100 w-lg-auto">
                              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                              <ul class="dropdown-menu">
                                 <li><a class="dropdown-item" href="shop-grid.html">Shop Grid - Filter</a></li>
                                 <li><a class="dropdown-item" href="shop-grid-3-column.html">Shop Grid - 3 column</a></li>
                                 <li><a class="dropdown-item" href="shop-list.html">Shop List - Filter</a></li>
                                 <li><a class="dropdown-item" href="shop-filter.html">Shop - Filter</a></li>
                                 <li><a class="dropdown-item" href="shop-fullwidth.html">Shop Wide</a></li>
                                 <li><a class="dropdown-item" href="shop-single.html">Shop Single</a></li>
                                 <li><a class="dropdown-item" href="shop-single-2.html">Shop Single v2</a></li>
                                 <li><a class="dropdown-item" href="shop-wishlist.html">Shop Wishlist</a></li>
                                 <li><a class="dropdown-item" href="shop-cart.html">Shop Cart</a></li>
                                 <li><a class="dropdown-item" href="shop-checkout.html">Shop Checkout</a></li>
                              </ul>
                           </li>
                           <li class="nav-item dropdown w-100 w-lg-auto">
                              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Stores</a>
                              <ul class="dropdown-menu">
                                 <li><a class="dropdown-item" href="store-list.html">Store List</a></li>
                                 <li><a class="dropdown-item" href="store-grid.html">Store Grid</a></li>
                                 <li><a class="dropdown-item" href="store-single.html">Store Single</a></li>
                              </ul>
                           </li>
                           <li class="nav-item dropdown w-100 w-lg-auto dropdown-fullwidth">
                              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mega menu</a>
                              <div class="dropdown-menu pb-0">
                                 <div class="row p-2 p-lg-4">
                                    <div class="col-lg-3 col-12 mb-4 mb-lg-0">
                                       <h6 class="text-primary ps-3">Dairy, Bread & Eggs</h6>
                                       <a class="dropdown-item" href="shop-grid.html">Butter</a>
                                       <a class="dropdown-item" href="shop-grid.html">Milk Drinks</a>
                                       <a class="dropdown-item" href="shop-grid.html">Curd & Yogurt</a>
                                       <a class="dropdown-item" href="shop-grid.html">Eggs</a>
                                       <a class="dropdown-item" href="shop-grid.html">Buns & Bakery</a>
                                       <a class="dropdown-item" href="shop-grid.html">Cheese</a>
                                       <a class="dropdown-item" href="shop-grid.html">Condensed Milk</a>
                                       <a class="dropdown-item" href="shop-grid.html">Dairy Products</a>
                                    </div>
                                    <div class="col-lg-3 col-12 mb-4 mb-lg-0">
                                       <h6 class="text-primary ps-3">Breakfast & Instant Food</h6>
                                       <a class="dropdown-item" href="shop-grid.html">Breakfast Cereal</a>
                                       <a class="dropdown-item" href="shop-grid.html">Noodles, Pasta & Soup</a>
                                       <a class="dropdown-item" href="shop-grid.html">Frozen Veg Snacks</a>
                                       <a class="dropdown-item" href="shop-grid.html">Frozen Non-Veg Snacks</a>
                                       <a class="dropdown-item" href="shop-grid.html">Vermicelli</a>
                                       <a class="dropdown-item" href="shop-grid.html">Instant Mixes</a>
                                       <a class="dropdown-item" href="shop-grid.html">Batter</a>
                                       <a class="dropdown-item" href="shop-grid.html">Fruit and Juices</a>
                                    </div>
                                    <div class="col-lg-3 col-12 mb-4 mb-lg-0">
                                       <h6 class="text-primary ps-3">Cold Drinks & Juices</h6>
                                       <a class="dropdown-item" href="shop-grid.html">Soft Drinks</a>
                                       <a class="dropdown-item" href="shop-grid.html">Fruit Juices</a>
                                       <a class="dropdown-item" href="shop-grid.html">Coldpress</a>
                                       <a class="dropdown-item" href="shop-grid.html">Water & Ice Cubes</a>
                                       <a class="dropdown-item" href="shop-grid.html">Soda & Mixers</a>
                                       <a class="dropdown-item" href="shop-grid.html">Health Drinks</a>
                                       <a class="dropdown-item" href="shop-grid.html">Herbal Drinks</a>
                                       <a class="dropdown-item" href="shop-grid.html">Milk Drinks</a>
                                    </div>
                                    <div class="col-lg-3 col-12 mb-4 mb-lg-0">
                                       <div class="card border-0">
                                          <img src="../assets/images/banner/menu-banner.jpg" alt="eCommerce HTML Template" class="img-fluid" />
                                          <div class="position-absolute ps-6 mt-8">
                                             <h5 class="mb-0">
                                                Dont miss this
                                                <br />
                                                offer today.
                                             </h5>
                                             <a href="#" class="btn btn-primary btn-sm mt-3">Shop Now</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="nav-item dropdown w-100 w-lg-auto">
                              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                              <ul class="dropdown-menu">
                                 <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                                 <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
                                 <li><a class="dropdown-item" href="blog-category.html">Blog Category</a></li>
                                 <li><a class="dropdown-item" href="about.html">About us</a></li>
                                 <li><a class="dropdown-item" href="404error.html">404 Error</a></li>
                                 <li><a class="dropdown-item" href="contact.html">Contact</a></li>
                              </ul>
                           </li>
                           <li class="nav-item dropdown w-100 w-lg-auto">
                              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
                              <ul class="dropdown-menu">
                                 <li><a class="dropdown-item" href="signin.html">Sign in</a></li>
                                 <li><a class="dropdown-item" href="signup.html">Signup</a></li>
                                 <li><a class="dropdown-item" href="forgot-password.html">Forgot Password</a></li>
                                 <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">My Account</a>
                                    <ul class="dropdown-menu">
                                       <li><a class="dropdown-item" href="account-orders.html">Orders</a></li>
                                       <li><a class="dropdown-item" href="account-settings.html">Settings</a></li>
                                       <li><a class="dropdown-item" href="account-address.html">Address</a></li>
                                       <li><a class="dropdown-item" href="account-payment-method.html">Payment Method</a></li>
                                       <li><a class="dropdown-item" href="account-notification.html">Notification</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                           <li class="nav-item w-100 w-lg-auto">
                              <a class="nav-link" href="../dashboard/index.html">Dashboard</a>
                           </li>
                           <li class="nav-item dropdown w-100 w-lg-auto dropdown-flyout">
                              <a class="nav-link" href="#" id="navbarDropdownDocs" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Docs</a>
                              <div class="dropdown-menu dropdown-menu-lg" aria-labelledby="navbarDropdownDocs">
                                 <a class="dropdown-item align-items-start" href="../docs/index.html">
                                    <div>
                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-text text-primary" viewBox="0 0 16 16">
                                          <path
                                             d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                                          <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                       </svg>
                                    </div>
                                    <div class="ms-3 lh-1">
                                       <h6 class="mb-1">Documentations</h6>
                                       <p class="mb-0 small">Browse the all documentation</p>
                                    </div>
                                 </a>
                                 <a class="dropdown-item align-items-start" href="../docs/changelog.html">
                                    <div>
                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-layers text-primary" viewBox="0 0 16 16">
                                          <path
                                             d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zm3.515 7.008L14.438 10 8 13.433 1.562 10 4.25 8.567l3.515 1.874a.5.5 0 0 0 .47 0l3.515-1.874zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z" />
                                       </svg>
                                    </div>
                                    <div class="ms-3 lh-1">
                                       <h6 class="mb-1">
                                          Changelog
                                          <span class="text-primary ms-1">v1.3.0</span>
                                       </h6>
                                       <p class="mb-0 small">See what's new</p>
                                    </div>
                                 </a>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </nav>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4">
               <div class="modal-header border-0">
                  <h5 class="modal-title fs-3 fw-bold" id="userModalLabel">Sign Up</h5>

                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <form class="needs-validation" novalidate>
                     <div class="mb-3">
                        <label for="fullName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Enter Your Name" required />
                        <div class="invalid-feedback">Please enter name.</div>
                     </div>
                     <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email address" required />
                        <div class="invalid-feedback">Please enter email.</div>
                     </div>
                     <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter Password" required />
                        <div class="invalid-feedback">Please enter password.</div>
                        <small class="form-text">
                           By Signup, you agree to our
                           <a href="#!">Terms of Service</a>
                           &
                           <a href="#!">Privacy Policy</a>
                        </small>
                     </div>

                     <button type="submit" class="btn btn-primary" type="submit">Sign Up</button>
                  </form>
               </div>
               <div class="modal-footer border-0 justify-content-center">
                  Already have an account?
                  <a href="#">Sign in</a>
               </div>
            </div>
         </div>
      </div>

      <!-- Shop Cart -->

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
         <div class="offcanvas-header border-bottom">
            <div class="text-start">
               <h5 id="offcanvasRightLabel" class="mb-0 fs-4">Shop Cart</h5>
               <small>Location in 382480</small>
            </div>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
         </div>
         <div class="offcanvas-body">
            <div>
               <!-- alert -->
               <div class="alert alert-danger p-2" role="alert">
                  You’ve got FREE delivery. Start
                  <a href="#!" class="alert-link">checkout now!</a>
               </div>
               <ul class="list-group list-group-flush">
                  <!-- list group -->
                  <li class="list-group-item py-3 ps-0 border-top">
                     <!-- row -->
                     <div class="row align-items-center">
                        <div class="col-6 col-md-6 col-lg-7">
                           <div class="d-flex">
                              <img src="../assets/images/products/product-img-1.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
                              <div class="ms-3">
                                 <!-- title -->
                                 <a href="shop-single.html" class="text-inherit">
                                    <h6 class="mb-0">Haldiram's Sev Bhujia</h6>
                                 </a>
                                 <span><small class="text-muted">.98 / lb</small></span>
                                 <!-- text -->
                                 <div class="mt-2 small lh-1">
                                    <a href="#!" class="text-decoration-none text-inherit">
                                       <span class="me-1 align-text-bottom">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="14"
                                             height="14"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-trash-2 text-success">
                                             <polyline points="3 6 5 6 21 6"></polyline>
                                             <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                             <line x1="10" y1="11" x2="10" y2="17"></line>
                                             <line x1="14" y1="11" x2="14" y2="17"></line>
                                          </svg>
                                       </span>
                                       <span class="text-muted">Remove</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- input group -->
                        <div class="col-4 col-md-3 col-lg-3">
                           <!-- input -->
                           <!-- input -->
                           <div class="input-group input-spinner">
                              <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                              <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                              <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                           </div>
                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                           <span class="fw-bold">$5.00</span>
                        </div>
                     </div>
                  </li>
                  <!-- list group -->
                  <li class="list-group-item py-3 ps-0">
                     <!-- row -->
                     <div class="row align-items-center">
                        <div class="col-6 col-md-6 col-lg-7">
                           <div class="d-flex">
                              <img src="../assets/images/products/product-img-2.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
                              <div class="ms-3">
                                 <a href="shop-single.html" class="text-inherit">
                                    <h6 class="mb-0">NutriChoice Digestive</h6>
                                 </a>
                                 <span><small class="text-muted">250g</small></span>
                                 <!-- text -->
                                 <div class="mt-2 small lh-1">
                                    <a href="#!" class="text-decoration-none text-inherit">
                                       <span class="me-1 align-text-bottom">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="14"
                                             height="14"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-trash-2 text-success">
                                             <polyline points="3 6 5 6 21 6"></polyline>
                                             <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                             <line x1="10" y1="11" x2="10" y2="17"></line>
                                             <line x1="14" y1="11" x2="14" y2="17"></line>
                                          </svg>
                                       </span>
                                       <span class="text-muted">Remove</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <!-- input group -->
                        <div class="col-4 col-md-3 col-lg-3">
                           <!-- input -->
                           <!-- input -->
                           <div class="input-group input-spinner">
                              <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                              <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                              <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                           </div>
                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                           <span class="fw-bold text-danger">$20.00</span>
                           <div class="text-decoration-line-through text-muted small">$26.00</div>
                        </div>
                     </div>
                  </li>
                  <!-- list group -->
                  <li class="list-group-item py-3 ps-0">
                     <!-- row -->
                     <div class="row align-items-center">
                        <div class="col-6 col-md-6 col-lg-7">
                           <div class="d-flex">
                              <img src="../assets/images/products/product-img-3.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
                              <div class="ms-3">
                                 <!-- title -->
                                 <a href="shop-single.html" class="text-inherit">
                                    <h6 class="mb-0">Cadbury 5 Star Chocolate</h6>
                                 </a>
                                 <span><small class="text-muted">1 kg</small></span>
                                 <!-- text -->
                                 <div class="mt-2 small lh-1">
                                    <a href="#!" class="text-decoration-none text-inherit">
                                       <span class="me-1 align-text-bottom">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="14"
                                             height="14"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-trash-2 text-success">
                                             <polyline points="3 6 5 6 21 6"></polyline>
                                             <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                             <line x1="10" y1="11" x2="10" y2="17"></line>
                                             <line x1="14" y1="11" x2="14" y2="17"></line>
                                          </svg>
                                       </span>
                                       <span class="text-muted">Remove</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <!-- input group -->
                        <div class="col-4 col-md-3 col-lg-3">
                           <!-- input -->
                           <!-- input -->
                           <div class="input-group input-spinner">
                              <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                              <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                              <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                           </div>
                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                           <span class="fw-bold">$15.00</span>
                           <div class="text-decoration-line-through text-muted small">$20.00</div>
                        </div>
                     </div>
                  </li>
                  <!-- list group -->
                  <li class="list-group-item py-3 ps-0">
                     <!-- row -->
                     <div class="row align-items-center">
                        <div class="col-6 col-md-6 col-lg-7">
                           <div class="d-flex">
                              <img src="../assets/images/products/product-img-4.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
                              <div class="ms-3">
                                 <!-- title -->
                                 <!-- title -->
                                 <a href="shop-single.html" class="text-inherit">
                                    <h6 class="mb-0">Onion Flavour Potato</h6>
                                 </a>
                                 <span><small class="text-muted">250g</small></span>
                                 <!-- text -->
                                 <div class="mt-2 small lh-1">
                                    <a href="#!" class="text-decoration-none text-inherit">
                                       <span class="me-1 align-text-bottom">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="14"
                                             height="14"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-trash-2 text-success">
                                             <polyline points="3 6 5 6 21 6"></polyline>
                                             <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                             <line x1="10" y1="11" x2="10" y2="17"></line>
                                             <line x1="14" y1="11" x2="14" y2="17"></line>
                                          </svg>
                                       </span>
                                       <span class="text-muted">Remove</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <!-- input group -->
                        <div class="col-4 col-md-3 col-lg-3">
                           <!-- input -->
                           <!-- input -->
                           <div class="input-group input-spinner">
                              <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                              <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                              <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                           </div>
                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                           <span class="fw-bold">$15.00</span>
                           <div class="text-decoration-line-through text-muted small">$20.00</div>
                        </div>
                     </div>
                  </li>
                  <!-- list group -->
                  <li class="list-group-item py-3 ps-0 border-bottom">
                     <!-- row -->
                     <div class="row align-items-center">
                        <div class="col-6 col-md-6 col-lg-7">
                           <div class="d-flex">
                              <img src="../assets/images/products/product-img-5.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
                              <div class="ms-3">
                                 <!-- title -->
                                 <a href="shop-single.html" class="text-inherit">
                                    <h6 class="mb-0">Salted Instant Popcorn</h6>
                                 </a>
                                 <span><small class="text-muted">100g</small></span>
                                 <!-- text -->
                                 <div class="mt-2 small lh-1">
                                    <a href="#!" class="text-decoration-none text-inherit">
                                       <span class="me-1 align-text-bottom">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="14"
                                             height="14"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-trash-2 text-success">
                                             <polyline points="3 6 5 6 21 6"></polyline>
                                             <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                             <line x1="10" y1="11" x2="10" y2="17"></line>
                                             <line x1="14" y1="11" x2="14" y2="17"></line>
                                          </svg>
                                       </span>
                                       <span class="text-muted">Remove</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <!-- input group -->
                        <div class="col-4 col-md-3 col-lg-3">
                           <!-- input -->
                           <!-- input -->
                           <div class="input-group input-spinner">
                              <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                              <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                              <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                           </div>
                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                           <span class="fw-bold">$15.00</span>
                           <div class="text-decoration-line-through text-muted small">$25.00</div>
                        </div>
                     </div>
                  </li>
               </ul>
               <!-- btn -->
               <div class="d-flex justify-content-between mt-4">
                  <a href="#!" class="btn btn-primary">Continue Shopping</a>
                  <a href="#!" class="btn btn-dark">Update Cart</a>
               </div>
            </div>
         </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-body p-6">
                  <div class="d-flex justify-content-between align-items-start">
                     <div>
                        <h5 class="mb-1" id="locationModalLabel">Choose your Delivery Location</h5>
                        <p class="mb-0 small">Enter your address and we will specify the offer you area.</p>
                     </div>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="my-5">
                     <input type="search" class="form-control" placeholder="Search your area" />
                  </div>
                  <div class="d-flex justify-content-between align-items-center mb-2">
                     <h6 class="mb-0">Select Location</h6>
                     <a href="#" class="btn btn-outline-gray-400 text-muted btn-sm">Clear All</a>
                  </div>
                  <div>
                     <div data-simplebar style="height: 300px">
                        <div class="list-group list-group-flush">
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action active">
                              <span>Alabama</span>
                              <span>Min:$20</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>Alaska</span>
                              <span>Min:$30</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>Arizona</span>
                              <span>Min:$50</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>California</span>
                              <span>Min:$29</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>Colorado</span>
                              <span>Min:$80</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>Florida</span>
                              <span>Min:$90</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>Arizona</span>
                              <span>Min:$50</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>California</span>
                              <span>Min:$29</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>Colorado</span>
                              <span>Min:$80</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>Florida</span>
                              <span>Min:$90</span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <script src="../assets/js/vendors/validation.js"></script>

      <main>
         <!-- section -->
         <section class="mt-lg-14 mt-8">
            <!-- container -->
            <div class="container">
               <!-- row -->
               <div class="row">
                  <!-- col -->
                  <div class="offset-lg-1 col-lg-10 col-12">
                     <div class="row align-items-center mb-14">
                        <div class="col-md-6">
                           <!-- text -->
                           <div class="ms-xxl-14 me-xxl-15 mb-8 mb-md-0 text-center text-md-start">
                              <h1 class="mb-6">The Future of Grocery Delivery:</h1>
                              <p class="mb-0 lead">By powering the future of grocery with our retail partners, we give everyone access to the food they love and more time to enjoy it together.</p>
                           </div>
                        </div>
                        <!-- col -->
                        <div class="col-md-6">
                           <div>
                              <!-- img -->
                              <img src="../assets/images/about/about-img.jpg" alt="" class="img-fluid rounded" />
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row mb-12">
                        <div class="col-12">
                           <div class="mb-8">
                              <!-- heading -->
                              <h2>Ready to get started?</h2>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <!-- card -->
                           <div class="card bg-light mb-6 border-0">
                              <!-- card body -->
                              <div class="card-body p-8">
                                 <div class="mb-4">
                                    <!-- img -->
                                    <img src="../assets/images/about/about-icons-1.svg" alt="" />
                                 </div>
                                 <h4>Grow my business with Freshcart</h4>
                                 <p>Duis placerat, urna ut dictum lobortis, erat libero feugiat nulla, ullamcorper fermentum lectus dolor ut tortor.</p>
                                 <!-- btn -->
                                 <a href="#" class="btn btn-dark mt-2">FreshCart Platform</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <!-- card -->
                           <div class="card bg-light mb-6 border-0">
                              <!-- card body -->
                              <div class="card-body p-8">
                                 <div class="mb-4">
                                    <!-- img -->
                                    <img src="../assets/images/about/about-icons-2.svg" alt="" />
                                 </div>
                                 <h4>Advertise my brand on Freshcart</h4>
                                 <p>Duis placerat, urna ut dictum lobortis, erat libero feugiat nulla, ullamcorper fermentum lectus dolor ut tortor.</p>
                                 <!-- btn -->
                                 <a href="#" class="btn btn-dark mt-2">FreshCart ads</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <!-- card -->
                           <div class="card bg-light mb-6 border-0">
                              <!-- card body -->
                              <div class="card-body p-8">
                                 <div class="mb-4">
                                    <!-- img -->
                                    <img src="../assets/images/about/about-icons-3.svg" alt="" />
                                 </div>
                                 <h4>Learn more about Freshcart</h4>
                                 <p>Vivamus non risus id sapien egestas tempus id sed lla mus justo metus, suscipit non hendrerit.</p>
                                 <!-- btn -->
                                 <a href="#" class="btn btn-dark mt-2">Learn More</a>
                              </div>
                           </div>
                        </div>
                        <div class="col">
                           <!-- text -->
                           <p>
                              For assistance using Freshcart services, please visit our
                              <a href="#">Help Center</a>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- section -->
         <section class="bg-success py-14">
            <div class="container">
               <div class="row">
                  <!-- col -->
                  <div class="offset-lg-1 col-lg-10">
                     <div class="row">
                        <!-- col -->
                        <div class="col-xl-4 col-md-6">
                           <div class="text-white me-8 mb-12">
                              <!-- text -->
                              <h2 class="text-white mb-4">Trusted by retailers. Loved by customers.</h2>
                              <p>We give everyone access to the food they love and more time to enjoy it together.</p>
                           </div>
                        </div>
                        <div class="row row-cols-2 row-cols-md-4">
                           <!-- col -->
                           <div class="col mb-4 mb-md-0">
                              <h3 class="display-5 fw-bold text-white mb-0">500k</h3>
                              <span class="fs-6 text-white">Shoppers</span>
                           </div>
                           <!-- col -->
                           <div class="col mb-4 mb-md-0">
                              <h3 class="display-5 fw-bold text-white mb-0">4,500+</h3>
                              <span class="fs-6 text-white">Cities</span>
                           </div>
                           <!-- col -->
                           <div class="col mb-4 mb-md-0">
                              <h3 class="display-5 fw-bold text-white mb-0">40k+</h3>
                              <span class="fs-6 text-white">Stores</span>
                           </div>
                           <!-- col -->
                           <div class="col mb-4 mb-md-0">
                              <h3 class="display-5 fw-bold text-white mb-0">650+</h3>
                              <span class="fs-6 text-white">Retail Brands</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- section -->
         <section class="mt-14">
            <!-- container -->
            <div class="container">
               <div class="row">
                  <!-- col -->
                  <div class="offset-md-1 col-md-10">
                     <div class="mb-11">
                        <!-- heading -->
                        <h2>Our Leadership</h2>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- section -->
         <section class="mb-14">
            <!-- slider -->
            <div class="team-slider mx-4">
               <!-- item -->
               <div class="item">
                  <div class="bg-light rounded">
                     <!-- text -->
                     <div class="p-6">
                        <h5 class="h6 mb-0">Chris Rogers</h5>
                        <small>Vice President, Retail</small>
                     </div>
                     <!-- img -->
                     <img src="../assets/images/about/team-1.png" alt="" class="img-fluid" />
                  </div>
               </div>
               <!-- item -->
               <div class="item">
                  <div class="bg-light rounded">
                     <!-- text -->
                     <div class="p-6">
                        <h5 class="h6 mb-0">Donna J. Shelton</h5>
                        <small>Chief Financial Officer</small>
                     </div>
                     <!-- img -->
                     <img src="../assets/images/about/team-2.png" alt="" class="img-fluid" />
                  </div>
               </div>
               <!-- item -->
               <div class="item">
                  <div class="bg-light rounded">
                     <!-- text -->
                     <div class="p-6">
                        <h5 class="h6 mb-0">Daniel Leedom</h5>
                        <small>Chief Communications Officer</small>
                     </div>
                     <!-- img -->
                     <img src="../assets/images/about/team-3.png" alt="" class="img-fluid" />
                  </div>
               </div>
               <!-- item -->
               <div class="item">
                  <div class="bg-light rounded">
                     <!-- text -->
                     <div class="p-6">
                        <h5 class="h6 mb-0">Martha White</h5>
                        <small>Chief Technology Officer</small>
                     </div>
                     <!-- img -->
                     <img src="../assets/images/about/team-4.png" alt="" class="img-fluid" />
                  </div>
               </div>
               <!-- item -->
               <div class="item">
                  <div class="bg-light rounded">
                     <!-- text -->
                     <div class="p-6">
                        <h5 class="h6 mb-0">Victor Pugliese</h5>
                        <small>Chief Human Resources Officer</small>
                     </div>
                     <!-- img -->
                     <img src="../assets/images/about/team-5.png" alt="" class="img-fluid" />
                  </div>
               </div>
               <!-- item -->
               <div class="item">
                  <div class="bg-light rounded">
                     <!-- text -->
                     <div class="p-6">
                        <h5 class="h6 mb-0">Donna J. Shelton</h5>
                        <small>Chief Financial Officer</small>
                     </div>
                     <!-- img -->
                     <img src="../assets/images/about/team-2.png" alt="" class="img-fluid" />
                  </div>
               </div>
               <!-- item -->
               <div class="item">
                  <div class="bg-light rounded">
                     <div class="p-6">
                        <!-- text -->
                        <h5 class="h6 mb-0">Daniel Leedom</h5>
                        <small>Chief Communications Officer</small>
                     </div>
                     <!-- img -->
                     <img src="../assets/images/about/team-3.png" alt="" class="img-fluid" />
                  </div>
               </div>
               <!-- item -->
               <div class="item">
                  <div class="bg-light rounded">
                     <!-- text -->
                     <div class="p-6">
                        <h5 class="h6 mb-0">Martha White</h5>
                        <small>Chief Technology Officer</small>
                     </div>
                     <!-- img -->
                     <img src="../assets/images/about/team-4.png" alt="" class="img-fluid" />
                  </div>
               </div>
            </div>
         </section>
      </main>
    