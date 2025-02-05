<!-- Header Navbar -->
<?php include "layouts/header.php"; ?>
    <main>
        <!-- login form -->
         <?php include "login.php"; ?>
        <!-- Registration form -->
        <?php include "registration.php"; ?>

        <!-- Contact page -->
        <h1>Contact</h1>
            <form action="" method="">
            <div class="mb-3 col-6">
                <label for="Full Name" class="form-label">Full Name</label>
                <input type="text" class="form-control" placeholder="Full Name">
            </div>
            <div class="mb-3 col-6">
                <label for="Email" class="form-label">Email address</label>
                <input type="email" class="form-control" placeholder="name@example.com">
            </div>
            <div class="mb-3 col-6">
                <label for="Request" class="form-label">Your request</label>
                <textarea class="form-control" rows="3" placeholder="Write hier your request..."></textarea>
            </div>

            <div class="form-check my-3 align-baseline">
                <input class="form-check-input" type="checkbox" value="">
                <label class="form-check-label" for="Terms">
                    <a href="">Terms & conditions...</a>
                </label>
            </div>
            
            <button type="submit" class="btn btn-outline-primary col-4">Send</button>               
        </form>
    </main>
<!-- Footer -->
 <?php include "layouts/footer.php"; ?>
   