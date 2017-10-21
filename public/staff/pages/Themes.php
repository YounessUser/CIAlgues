<?php require_once('../../../private/initialize.php'); ?> 


<?php include(SHARED_PATH . '/Header.php'); ?>


<div class="section">
    <div class="pageContent">

        <h1 class="presentationTitle"><b><?= $themes_title; ?></b></h1>


        <div class="services">
            <?php foreach ($themes_contenu as $contenu): ?>

                <div class="services-grid-left">
                    <div class="services-text">
                        <?=$contenu;?>

                    </div>
                    <div class="clearfix"> </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
