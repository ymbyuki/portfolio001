<?php 
    require_once ('logic/user_logic.php');
    require_once('view/header.php');
    session_start();
    $token = bin2hex(random_bytes(32));
    $_SESSION['token'] = $token;    
?>


<div class="container mt-5 mb-5">
<form action="register.php" method="post">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">件名</label>
    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="件名を入力">
    </div>
    <input type="hidden" name="token" value="<?php echo $token?>">
    <input type="submit" class="btn btn-primary" value="送信">
</form>
</div>
<?php require_once('view/footer.php');?>

