<div class="container">
    <?php foreach($arr as $user): ?>
        {print_r($user)}
    <?php endforeach; ?>
</div>

<?php echo $users->render(); ?>