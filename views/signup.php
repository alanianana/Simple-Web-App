<?php
include_once '../partials/header.php';
?>

<div class="container">
    <h1>Sign Up</h1>
    <form method="post" action="../signup_code.php">
        <div>
            <label>Name:</label>
            <input type="text" class="form-control" name="name" placeholder="">
        </div>
        <div>
            <label>Surname:</label>
            <input type="text" class="form-control" name="surname" placeholder="">
        </div>
            <div>
                <label>Email</label>
                <input type="text" class="form-control" name="email" placeholder="">
            </div>
            <div>
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="">
            </div>
        <br>
            <button type="submit" name="signup_btn" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php include_once '../partials/footer.php'; ?>
