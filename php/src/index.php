<?php

/**
 * simple sqli
 * index.php
 * @since 2020/07/11
 */
require 'db.php';

$filter = '';
$filter = isset($_POST['filter']) ? $_POST['filter'] : '';

$dsn = 'mysql:host=mysql;dbname=sqlidb;chartset=utf8mb4';
$db_user = 'sqli';
$db_pass = 'sqlipass';
$plans = search($dsn, $db_user, $db_pass, $filter);

$rows = array();

foreach ($plans as $value) {
  array_push($rows, $value);
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="image/ico/ma-icon.ico">
  <title>東方 Wiki</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body class="text-center">
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  <nav class="navbar navbar-dark bg-success">
    <a class="navbar-brand" href="">
      <b class="ml-2 align-middle">東方 Wiki</b>
    </a>
  </nav>
  <div class="mx-auto">
      <br>
      <div style="width:600px; margin-left:auto; margin-right:auto;">
      <form class="form-inline" method="POST">
        <div class="mr-5">
          <h4>東方バックナンバー</h4>
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label for="inputFilter" class="sr-only">filter</label>
            <input class="form-control" id="inputFilter" name="filter" placeholder="部分一致検索">
        </div>
        <button type="submit" class="btn btn-success mb-2">検索</button>
      </form>
      </div>
      <div>
          <?php if ($filter !== "") { ?>
            <p>部分一致フレーズ： <?php echo $filter ?></p>
          <?php } ?>
      </div>
      <div>
        <table class="table table-striped" style="width: 600px; margin-left:auto; margin-right:auto;">
          <thead class="thead-dark">
            <tr>
              <th>シリーズ</th>
              <th>タイトル</th>
            </tr>
          </thead>
          <?php
            foreach($rows as $row){
          ?>
          <tr>
            <td><?php echo "第".$row['series']."弾"; ?></td>
            <td><?php echo $row['title']; ?></td>
          </tr>
            <?php } ?>
        </table>
      </div>
    <div>
      <br>
      <p>随時更新します</p>
      <p>ゆくゆくは世界一詳しいWikiにしたいです</p>
    </div>
    <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
  </div>
</body>
</html>