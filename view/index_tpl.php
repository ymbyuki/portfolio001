<!-- ヘッダー読み込み -->
<?php require_once ("view/header.php"); ?>

<div class="card-wrapper">
<div class="card w-25">
  <div class="card-body m-5">
    <h4 class="card-title ">進捗管理</h4>
    <form form action="overview.php" method="GET">
        <div class="form-group">
            <input type="text" class="mt-2 mb-2 form-control" id="formGroupExampleInput" placeholder="内容を選択" name="title" list="ttl-list">
            <datalist id="ttl-list">
                <?php foreach($result as $i => $value):?>
                    <option value=<?=$result[$i]['title']?>></option>
                <?php endforeach?>
            </datalist> 
        </div>
        <div class="text-right">
            <button type="submit" class="btn btn-primary ">送信</button>
        </div>
    </form>
  </div>
  </div>
</div>

<!-- フッター読み込み -->
<?php require_once ("view/footer.php"); ?>