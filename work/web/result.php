<?php

require('../app/functions.php');

// $color = filter_input(INPUT_GET, 'color');
// $color = isset($color) ? $color : 'None selected' ;
// $color = $ color ?? 'None selected';
$color = filter_input(INPUT_GET, 'color') ?? 'None selected';

include('../app/_parts/_header.php')
?>

<p><?= nl2br(h($color)); ?></p>
<p><a href="index.php">Go back</a></p>

<?php

include('../app/_parts/_footer.php');