<?php

require('../app/functions.php');

$colorFromGet = filter_input(INPUT_GET, 'color') ?? 'transparent';
setcookie('color',$colorFromGet);

include('../app/_parts/_header.php');
?>

<p><?= nl2br(h($color)); ?></p>
<p><a href="index.php">Go back</a></p>

<?php

include('../app/_parts/_footer.php');