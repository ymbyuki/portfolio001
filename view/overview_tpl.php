<?php require_once ("view/header.php"); ?>

<div class="container mt-5 mb-5 table-responsive">
  <table class="table table-hover table table-striped">
    <thead>
      <tr>
        <th scope="col">タイトルID</th>
        <th scope="col">アップデート日</th>
        <th scope="col">内容</th>
      </tr>
    </thead>

    <tbody>
      <?php foreach($result as $i => $value):?>
          <tr class="clickable-row" data-href="info.php?id=<?=$result[$i]['id']?>">
              <th scope="row"><?= $result[$i]['title_id'] ?></th>
              <td><?= $result[$i]['up_date'] ?></td>
              <td><?= $result[$i]['ovewview'] ?></td>
          </tr>
      <?php endforeach?>
    </tbody>
  </table>
</div>

<?php require_once ("view/footer.php"); ?>