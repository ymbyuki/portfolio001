<?php 
    require_once('logic/user_logic.php');
    require_once('view/header.php');
    session_start();
    $token = bin2hex(random_bytes(32));
    $_SESSION['token'] = $token;    
?>


<div class="container mt-5 mb-5">
    <form action="addresult.php" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">件名</label>
            <select class="form-select" aria-label="Default select example" name="title_id">
                <option selected></option>
                <?php foreach($result as $i => $value):?>
                    <option value=<?=$result[$i]['id']?>><?=$result[$i]['title']?></option>
                <?php endforeach?>
                </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">内容</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
        </div>
        <input type="hidden" name="token" value="<?php echo $token?>">
        <input type="submit" class="btn btn-primary" value="送信">
    </form>
</div>

<?php require_once('view/footer.php');?>