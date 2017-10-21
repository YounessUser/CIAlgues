<?php require_once('../../../private/initialize.php'); ?> 


<?php include(SHARED_PATH . '/Header.php'); ?>

<div class="section">
    <div class="pageContent">

        <h1 class="presentationTitle"><b><?=$frais_title;?></b></h1>
        <div class="table-condensed">
            <table class="table table-striped table-bordered sizeText">
                <thead>
                    <tr>
                        <td></td>
                        <td style="color: red;"><?= $frais_contenu[0];?> 20/02/2016</td>
                        <td style="color: red;"><?= $frais_contenu[1];?> 20/02/2016</td>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td><?= $frais_contenu[2];?> :</td>
                        <td>200 euros</td>
                        <td>250 euros</td>
                    </tr>
                    <tr>
                        <td><?= $frais_contenu[3];?> :</td>
                        <td>100 euros</td>
                        <td>120 euros</td>
                    </tr>
                    <tr>
                        <td><?= $frais_contenu[4];?> :</td>
                        <td>100 euros</td>
                        <td>120 euros</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="sizeText">N.B : Le prix comprend les divers documents relatifs à ce congrès, l'accès aux différentes sessions, les pauses café et déjeuners.</p>
    </div>
</div>

<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
