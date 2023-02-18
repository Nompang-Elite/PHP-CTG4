<div id="list-show-container" class="flex flex-wrap gap-4 p-4 justify-center w-full h-full overflow-scroll overflow-x-hidden">
    <?php
    $shows = search($db, $_POST['value']);
    isset($shows) && !empty($shows) ? require('./views/partials/card.php') : require('./views/error/search_not_found.php') ?>
</div>