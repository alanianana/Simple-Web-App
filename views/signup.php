<?php
include_once '../partials/header.php';
?>

<div class="container">
    <h1>რეგისტრაცია</h1>
    <form method="post" action="../signup_code.php" >
        <div>
            <label>სახელი:</label>
            <input type="text" class="form-control" name="username" placeholder="სახელი">
        </div>
        <div>
            <div>
                <label>თქვენი ელ.ფოსტა:</label>
                <input type="text" class="form-control" name="email" placeholder="ელ.ფოსტა">
            </div>
            <div>
                <label>პაროლი:</label>
                <input type="password" class="form-control" name="password" placeholder="პაროლი">
            </div>
            <button type="submit" name="signup_btn" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php include_once '../partials/footer.php'; ?>
