<?php

use App\Services\Page;

?>


<!DOCTYPE html>
<html lang="ru">

<?php Page::part('head'); ?>

<body class="container-fluid p-3 px-5">

<?php Page::part('navbar');?>




<?php Page::part('scripts'); ?>
<script src="/assets/js/authors.js"></script>
</body>

</html>
