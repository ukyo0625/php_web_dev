<?php

$color = $_SESSION['color'] ?? filter_input(INPUT_COOKIE, 'color') ?? 'transparent';

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PHP Practice</title>
</head>
<body style="background-color: <?= h($color); ?>">