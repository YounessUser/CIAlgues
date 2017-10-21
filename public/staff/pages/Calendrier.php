<?php require_once('../../../private/initialize.php'); ?> 


<?php include(SHARED_PATH . '/Header.php'); ?>    


<div class="section">
    <div class="pageContent">
        <h1 class="presentationTitle"><b><?= $calendrier_title;?></b></h1>

        <div class="table-condensed">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td class="columWidth"><b>30/11/2017</b></td>
                        <td class="columWidth"><b>15/01/2018</b></td>
                        <td class="columWidth"><b>31/01/2018</b></td>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <?php foreach ($calendrier_contenu as $contenu): ?>

                            <td style="font-size: 18px;font-weight: bold;"><?= $contenu; ?></td>
                        <?php endforeach; ?>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>
</div>


<?php include(SHARED_PATH . '/Footer.php'); ?>    
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
