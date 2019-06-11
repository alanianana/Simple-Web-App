<?php
include_once '../DB/database.php';
require_once '../partials/header.php';
    if (isset($_POST['addPost'])){
    $target_dir = "../images/";
    $target_file=$target_dir.basename($_FILES["image"]["name"]);
    $image = $_FILES["image"]["name"];
    $text = $_POST['text'];
    $id = $_SESSION['id'];
    $conn = connection();
    $move = move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);
    $sql = "INSERT INTO articles(image,text,id) VALUE('$target_file','$text','$id')";
    mysqli_query($conn,$sql);
    if(!$move){
        echo '<script>alert("სტატია არ დაემატა")</script>';
    }
}
$id = $_SESSION['id'];
$userArt = userArt($id);

    ?>
    <?php if(isset($_SESSION['id'])) : ?>
    <br>
    <div class="container" >
        <div>
            <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">შექმენი პოსტი</button>
            <?php if(isset($_SESSION['admin'])) :?>
                <a  class="btn btn-primary" href="./ad.php"  >all users</a>
            <?php endif; ?>
        </div>
<br>
<br>
<div id="demo" class="collapse">
    <form method="post" action="profile.php" enctype="multipart/form-data">
        <div class="form-group">
        <div>
        <textarea name="text"  rows="7" cols="70">
        </textarea>
        </div>
            <div>
                <input type="file" name="image" id="fileToUpload">
            </div> <br>
        <input type="submit" class="btn btn-primary" name="addPost" value="პოსტის დამატება" >
        </div>
    </form>
</div>
    <br>
    <div class="container"  style="width: 650px">
        <?php foreach ($userArt as $art):?>
            <p><?php echo articleId($art['id']) ?> </p>
            <div style="background-color: #e6e6e6;padding: 10px">
                <img  style="width: 100%; height: 300px" src="<?php echo $art['image']?>"
                      alt="">
                <br>
                <p style="font-size: 14px"><?php echo $art['text']?></p>
            </div>
            <br>
            <br>
        <?php endforeach; ?>
    </div>

    <?php elseif(!isset($_SESSION['id'])) :?>
    <div class="container" >
        <form action="btn_log_pr.php">
        <input style="margin-top: 50px;font-size: 23px " type="submit" class="btn btn-primary" name="login" value="    log in   " >
        </form>
    </div>
    <?php endif; ?>
<?php include_once '../partials/footer.php'; ?>

