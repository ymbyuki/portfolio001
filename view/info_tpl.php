<?php require_once ("view/header.php"); ?>

<div class="container mt-5 mb-5">

  <div class="card">
    <div class="card-header">
      <?= $result['title'] ?>
    </div>
    <div class="card-body">
      <h6 class="card-subtitle mb-2 text-muted">  <?= $result['up_date'] ?></h6>
      <p class="card-text"><?= $result['content'] ?></p>
    </div>
  </div>

  <div class="buttonwrapper mt-3 d-flex justify-content-between">
    <a class="btn btn-primary" onclick="history.back()" role="button">戻る</a>
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal1">削除</button>
  </div>
  
</div>
<div class="modal" id="modal1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modalLabelId">削除</h3>
            </div>
            <div class="modal-body">
                <label>削除をしますか</label>
            </div>
            <div class="modal-footer">
            <form action="delete_content.php" method="post">
                <input type="hidden" name="title_id" value="<?=$result['id']?>">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">キャンセル</button>
                <input class="btn btn-danger" type="submit" value="OK" >
            </form>
            </div>
        </div>
    </div>
</div>
<?php require_once ("view/footer.php"); ?>