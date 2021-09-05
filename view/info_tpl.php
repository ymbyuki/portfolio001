<?php require_once ("view/header.php"); ?>

<div class="container mt-5 mb-5">

  <h3>タイトルID</h3>
  <?= $result['title_id'] ?>

  <h3>アップデート日</h3>
  <?= $result['up_date'] ?>

  <h3>内容</h3>
  <?= $result['ovewview'] ?>

</div>

<?php require_once ("view/footer.php"); ?>