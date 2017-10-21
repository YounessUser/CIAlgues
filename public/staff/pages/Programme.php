<?php require_once('../../../private/initialize.php'); ?> 


<?php include(SHARED_PATH . '/Header.php'); ?>

<div class="section">
    <div class="pageContent">
        <h1 class="presentationTitle"><b><?= $programme_title; ?> :</b></h1>
        <ul class="feature-icons">
            <?php foreach ($programme_contenu as $contenu): ?>

                <li class="fa-chevron-right sizeText"><?= $contenu; ?></li>
            <?php endforeach; ?>
          
        </ul>
    </div>
</div>
<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
