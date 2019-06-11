<?php
include_once '../partials/header.php';
?>

<div class="container">
    <h1>Log In</h1>
    <form method="post" action="../login_code.php" >
        <div>
            <input type="text" class="form-control" name="email" placeholder="Email">
        </div>
        <br>
        <div>
            <input type="password" class="form-control" name="password" placeholder="password">
        </div>
        <br>
        <button type="submit" name="login" class="btn btn-primary">Log In</button>
    </form>
</div>

<?php include_once '../partials/footer.php'; ?>
