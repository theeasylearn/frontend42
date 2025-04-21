<?php
    require_once("../include/header.php");
?>
<h1><i class="fas fa-users"></i>Users</h1>

<div class="container">
    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    Add User
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="">
                        <div class="mb-3">
                            <input type="text" name="uname" value=""
                             placeholder="User Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" value=""
                             placeholder="Email id" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="role" value=""
                             placeholder="role user" required>
                        </div>
                        <button type="submit" class="btn btn-dark">Add</button>
                        <a href="categories.php" class="btn btn-secondary">Clear</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-md-12">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    User List
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Add your category rows here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    require_once("../include/footer.php");
?>
