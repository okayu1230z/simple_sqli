<?php
/**
 * simple sqli
 * dp.php
 * @since 2020/07/09
 */

function search($dsn, $db_user, $db_pass, $filter) {
    $db = new PDO($dsn, $db_user, $db_pass);
    
    if ($filter !== '') {
      $r = $db->query("SELECT * FROM touhou WHERE title LIKE '%東方%' AND title LIKE '".'%'. $filter .'%'."'");
    } else {
      $r = $db->query("SELECT * FROM touhou WHERE title LIKE '%東方%'");

    }

    return $r;
}
?>