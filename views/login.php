<?php
include_once '../partials/header.php';
?>

<div class="container">
    <h1>შესვლა</h1>
    <form method="post" action="profile.php" >
        <div>
            <label>ელ.ფოსტა:</label>
            <input type="text" class="form-control" name="email" placeholder="შეიყვანეთ ელ.ფოსტა">
        </div>
        <div>
            <label>პაროლი:</label>
            <input type="password" class="form-control" name="email" placeholder="შეიყვანეთ პაროლი">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php include_once '../partials/footer.php'; ?>
