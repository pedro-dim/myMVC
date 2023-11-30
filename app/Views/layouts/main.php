<!DOCTYPE html>
<html lang="en">


<?php require  __DIR__ . '/partials/head.php'; ?>



<body>


    <header>
        <?php require  __DIR__ . '/partials/header.php'; ?>
        <hr>

    </header>

    <div class="bg-stone-300 m-8 p-4 text-stone-500">

        <?php require '../app/Routes/Routes.php'; ?>
        <?php require  __DIR__ . '../partials/content.php'; ?>


    </div>

    <hr>

    <?php require  __DIR__ . '/partials/footer.php'; ?>




</body>

</html>