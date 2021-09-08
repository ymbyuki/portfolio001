<?php 
  require_once ("view/header.php"); 
?>

<div class="container mt-5 mb-5 table-responsive">
  <h3 class="mb-3">
      <?php require_once('logic/user_logic.php');
            echo htmlspecialchars($res['title'],ENT_QUOTES, 'UTF-8');
      ?>
  </h3>

  <table class="table table-hover table table-striped">
    <thead>
      <tr>
        <th scope="col">タイトルID</th>
        <th scope="col">アップデート日</th>
        <th scope="col">内容</th>
      </tr>
    </thead>

    <tbody>
    <?php if(empty($result[0]['content'])): ?>
            <th scope="row">データがありません</th>
    <?php endif?>  
    
    <?php foreach($result as $i => $value):?>          

      <?php $content_text = $result[$i]['content'];
            $limit = 150;
            if(strlen($content_text) > $limit) { 
                $content = substr($content_text,0,$limit) . ･･･ ;
            } else {
                $content = $content_text;
            } 
            ?>
            
          <tr class="clickable-row" data-href="info.php?id=<?=$result[$i]['id']?>">
              <th scope="row"><?= $result[$i]['title_id'] ?></th>
              <td><?= $result[$i]['up_date'] ?></td>
              <td><?= $content ?></td>
          </tr>
      <?php endforeach?>
    </tbody>
  </table>

  <div class="buttonwrapper mt-3 d-flex justify-content-between">
    <a class="btn btn-primary " href="index.php" role="button">戻る</a>
    <a class="btn btn-primary " href="addcontent.php?id=<?php echo htmlspecialchars($res['id'],ENT_QUOTES, 'UTF-8')?>" role="button">追加</a>
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal1">テーブルの削除</button>
  </div>

</div>

<!-- 削除用モーダル -->
<div class="modal" id="modal1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modalLabelId">テーブルの削除</h3>
            </div>
            <div class="modal-body">
                <label>件名に該当する項目全ての削除をしますか</label>
            </div>
            <div class="modal-footer">
            <form action="delete_title.php" method="post">
                <input type="hidden" name="title_id" value="<?=$res['id']?>">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">キャンセル</button>
                <input class="btn btn-danger" type="submit" value="OK" >
            </form>
            </div>
        </div>
    </div>
</div>
<?php require_once ("view/footer.php"); ?>