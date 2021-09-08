<?php require_once('view/header.php'); ?>

<div class="container mt-5 mb-5">
    <div class="card">
        <div class="card-header"><?= $message ?></div>
            <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">書き込み内容</h6>
                <p class="card-text"><?php echo htmlspecialchars($title,ENT_QUOTES, 'UTF-8')?></p>
            </div>
        </div>
        <form action="addcontent.php" method="get" class="d-flex justify-content-between">
        <a class="btn btn-primary mt-3" href="index.php" role="button">最初に戻る</a>
            <input type="hidden" name="id" value="<?=$res['id']?>">
            <input type="submit" value="内容の入力" class="btn btn-primary mt-3">
        </form>
    </div>
</div>

<?php require_once('view/footer.php');?>