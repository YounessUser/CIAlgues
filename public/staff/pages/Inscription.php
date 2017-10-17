<?php require_once('../../../private/initialize.php'); ?> 


<?php include(SHARED_PATH . '/Header.php'); ?>

<div class="section">
    <div class="pageContent">


        <h1 class="presentationTitle"><b>Formulaire d'inscription</b></h1>
        <!--<a class="back-link" href="<?php // echo url_for('/staff/commite/index.php'); ?>">&laquo; Revenir vers la list</a>-->
        <h1></h1>
        <div style="padding-top: 2%;">
            <form action="<?php echo url_for('/staff/inscription/create.php'); ?>" method="post" style="width: 100%;">


                <!--Saisir le nom -->
                <input type="text" maxlength="20" placeholder="Nom" name="lastname" required>
                <!--Saisir le Prenom -->
                <input type="text" maxlength="20" placeholder="Prenom" name="firstname" required>


                <div style="padding:8px 0;">
                    <select id="commu" class="form-control selectForm" name="commu" required>
                        <option value="Vide" selected="true">Communication</option> 
                        <option value="Orale" >Orale</option> 
                        <option value="Affiche">Affiche</option>

                    </select>
                </div>

                <!--Saisir l theme -->
                <div style="padding:8px 0;">
                    <select id="theme" class="form-control selectForm" name="theme" required>
                        <option value="0" selected="true">Thème</option> 
                        <option value="1" >Algues et biodiversité</option> 
                        <option value="2">Biotechnologies algales</option>
                        <option value="3">Algues et agriculture</option>
                        <option value="4">Algues et environnement</option>
                        <option value="5">Algues et industries</option>
                        <option value="6">Algocarburants</option>

                    </select>
                </div>

                <!--Saisir l titre -->
                <input type="text" maxlength="40" placeholder="Titre" name="titre" required>

                <!--Saisir l address -->
                <input type="text" maxlength="40" placeholder="Adresse" name="address" required>

                <!--Saisir le Email--> 
                <input type="text" maxlength="60" placeholder="Email" name="email" required>


                <div style="padding: 8px 0;">
                    <?php include(UTIL_PATH . "/countries.php"); ?>
                </div>


                <div style="padding: 8px 0;">
                    <select id="gender" class="form-control selectForm" name="gender" required>
                        <option value="1" selected="ture">Sexe</option> 
                        <option value="1">Male</option> 
                        <option value="2">Female</option>

                    </select>
                </div>

                <div style="padding: 8px 0;">
                    <select id="typePersoone" class="form-control" name="type" required>
                        <option value="0" selected="true">Fonction</option> 
                        <option value="2" >Enseignant-chercheur</option> 
                        <option value="3" >Doctorant</option>
                        <option value="1" >Accompagnateur </option>
                    </select>
                </div>
                <br/>
                <!--valider l'enregistrement-->
                <button type="submit">Sauvegarder</button>
            </form>
        </div>
    </div>
</div>
<?php include(SHARED_PATH . './Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
