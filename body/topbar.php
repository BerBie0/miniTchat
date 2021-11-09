<div class="topbar">

    <a href="index.php" class="app-name">Tchat</a>

    <span class="menu">

        <?php 

            if(isLogged() == 1){

                ?>

                <a href="index.php?page=profil" class="<?php echo ($page=='profil') ? 'active' : '' ; ?>">

                Profile</a>

                <a href="index.php?page=delete" class="<?php echo ($page=='delete') ? 'active' : '' ; ?>">

                Supprimer son compte</a>

                <a href="index.php?page=members" class="<?php echo ($page=='members') ? 'active' : '' ; ?>">

                Membres</a>

                <a href="index.php?page=logout">Déconnexion</a>

                <?php

            }else{

                ?>

                <a href="index.php?page=register" class="<?php echo ($page=='register') ? 'active' : '' ; ?>">

                S'inscrire</a>

                <a href="index.php?page=signin" class="<?php echo ($page=='signin') ? 'active' : '' ; ?>">

                Se connecter</a>

                <?php

            }

        

        ?>

        

        

        

    </span>

</div>

