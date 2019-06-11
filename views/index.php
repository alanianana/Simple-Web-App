<?php
include_once '../partials/header.php';
include_once '../DB/database.php';
$articles = allArticle();
?>
<br>
    <div class="container"  style="width: 650px">
        <?php foreach ($articles as $art):?>
        <p><?php echo articleId($art['id']);  ?> </p>
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

<?php include_once '../partials/footer.php'; ?>
