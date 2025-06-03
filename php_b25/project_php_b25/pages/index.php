<?php
session_start();
require_once "../include/head.php";
require_once "../include/connection.php";

// Simulate login (for demo purposes)
$userId = $_SESSION['login']['id'];

// Handle Buy Now
if (isset($_POST['b1'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['price'] = $_POST['price'];
    $_SESSION['stock'] = $_POST['stock'];
    echo "<script>window.location = 'checkout.php';</script>";
    exit;
}
if (isset($_POST['cart'])) {
    if ($userId === null) {
        echo "<script>alert('You must be logged in to add to cart.');</script>";
    } else {
        $uid = $userId;
        $name = $_POST['name'];
        $price = $_POST['price'];
        $stock = $_POST['stock'];
        $tprice = $stock * $price;

        $stmt = $db->prepare("INSERT INTO cart (uid, pname, stock, tprice) VALUES (?, ?, ?, ?)");
        $stmt->execute([$userId, $name, $stock, $tprice]);

        echo "<script>alert('Product added to cart successfully!');</script>";
    }
}
?>
<main>
    <!-- Hero Slider Section -->
    <section class="mt-8">
        <div class="container">
            <div class="hero-slider">
                <!-- Slide 1 -->
                <div class="slider-item" style="background: url(../assets/images/slider/ad-banner-1.jpg) no-repeat; background-size: cover; border-radius: 0.5rem; background-position: center;">
                    <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                        <span class="badge text-bg-warning">Opening Sale Discount 50%</span>
                        <h2 class="text-dark display-5 fw-bold mt-4">SuperMarket For Fresh Grocery</h2>
                        <p class="lead">Introduced a new model for online grocery shopping and convenient home delivery.</p>
                        <a href="#!" class="btn btn-info mt-3">Shop Now</a>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="slider-item" style="background: url(../assets/images/slider/slider-2.jpg) no-repeat; background-size: cover; border-radius: 0.5rem; background-position: center;">
                    <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                        <span class="badge text-bg-warning">Free Shipping - orders over $100</span>
                        <h2 class="text-dark display-5 fw-bold mt-4">Free Shipping on <br /> orders over <span class="text-info">$100</span></h2>
                        <p class="lead">Free Shipping to First-Time Customers Only, After promotions and discounts are applied.</p>
                        <a href="#!" class="btn btn-info mt-3">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Products Section -->
    <section class="my-lg-14 my-8">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-6">
                    <h3 class="mb-0">Popular Products</h3>
                </div>
            </div>
            <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">
                <?php
                $product = $db->query("SELECT * FROM products ORDER BY id ASC");
                foreach ($product as $pro): ?>
                    <div class="col">
                        <div class="card card-product">
                            <div class="card-body">
                                <h2 class="fs-6">
                                    <a href="#" class="text-inherit text-decoration-none">
                                        <?= htmlspecialchars($pro['pname']) ?>
                                    </a>
                                </h2>
                                <form class="add-to-cart-form" method="post">
                                    <div>
                                        <span class="text-dark">₹<?= htmlspecialchars($pro['price']) ?></span><br>
                                        <label class="text-muted">Stock:
                                            <input type="number" name="stock" min="1" value="1" required>
                                        </label>
                                    </div><br>
                                    <input type="hidden" name="name" value="<?= htmlspecialchars($pro['pname']) ?>">
                                    <input type="hidden" name="price" value="<?= htmlspecialchars($pro['price']) ?>">
                                    <div>
                                    <input type="submit" value="Buy Now" name="b1" class="btn btn-info">
                                    <input type="submit" value="Add To Cart" name="cart" class="btn btn-outline-secondary">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="my-lg-14 my-8">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="mb-8 mb-xl-0">
                        <div class="mb-6"><img src="../assets/images/icons/clock.png" height="40px" alt="" /></div>
                        <h3 class="h5 mb-3">10 minute grocery now</h3>
                        <p>Get your order delivered to your doorstep at the earliest from FreshCart pickup stores near you.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="mb-8 mb-xl-0">
                        <div class="mb-6"><img src="../assets/images/icons/gift.png" alt="" /></div>
                        <h3 class="h5 mb-3">Best Prices & Offers</h3>
                        <p>Cheaper prices than your local supermarket, great cashback offers to top it off.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="mb-8 mb-xl-0">
                        <div class="mb-6"><img src="../assets/images/icons/box.png" alt="" /></div>
                        <h3 class="h5 mb-3">Wide Assortment</h3>
                        <p>Choose from 5000+ products across food, personal care, household, bakery, and more.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="mb-8 mb-xl-0">
                        <div class="mb-6"><img src="../assets/images/icons/refresh.png" alt="" /></div>
                        <h3 class="h5 mb-3">Easy Returns</h3>
                        <p>Not satisfied with a product? Return it at the doorstep & get a refund. <a href="#!">Return Policy</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once "../include/footer.php"; ?>

<!-- Include jQuery and Slick Carousel JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../assets/libs/slick-carousel/slick/slick.min.js"></script>

<!-- Initialize Slick Slider -->
<script>
$(document).ready(function () {
    $('.hero-slider').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        arrows: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    // AJAX for Add to Cart
    $('.add-to-cart-btn').click(function(e) {
        e.preventDefault();
        const $form = $(this).closest('form');
        const formData = $form.serialize();

        $.ajax({
            type: 'POST',
            url: 'add-to-cart.php',
            data: formData,
            dataType: 'json',
            success: function(response) {
                alert(response.message);
            },
            error: function() {
                alert('An error occurred while adding to cart.');
            }
        });
    });
});
</script>
