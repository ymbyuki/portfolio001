<!-- ヘッダー読み込み -->
<?php require_once ("view/header.php"); ?>

<div class="card-wrapper">
<div class="card">
  <div class="card-body m-5">
    <h4 class="card-title">情報管理</h4>
    <form form action="overview.php" method="GET">

    <select class="form-select" aria-label="Default select example" name="id">
      <option selected></option>
      <?php foreach($result as $i => $value):?>
        <option value=<?=$result[$i]['id']?>><?=$result[$i]['title']?></option>
      <?php endforeach?>
    </select>
    <button type="submit" class="btn btn-primary mt-3">送信</button>
    </form>
  </div>
  </div>
</div>

<!-- フッター読み込み -->
<?php require_once ("view/footer.php"); ?>