<?php

    if(isLogged() == 1){
        header("Location:index.php?page=members");
    }
?>

<h2 class="header header-form">S'inscrire</h2>

<?php
    if(isset($_POST['submit'])){
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $password = sha1(htmlspecialchars(trim($_POST['password'])));

        if(email_taken($email) == 1){
            $error_email = "L'adresse email est déjà utilisée...";
        }else{
            register($name, $email, $password);
            $_SESSION['tchat'] = $email;
            header("Location:index.php?page=members");
        }
    }

?>

<form method="post" id="regForm">
    <div class="field">
        <label for="name" class="field-label">Votre nom</label>
        <input class="field-input" type="text" name="name" id="name"/>
    </div>
    <div class="field">
        <label for="" class="field-label">Votre adresse mail</label>
        <input class="field-input" type="email" name="email" id="email"/>
    </div>
    <div class="field">
        <label for="password" class="field-label">Votre mot de passe</label>
        <input class="field-input" type="password" name="password" id="password"/>
    </div>

    <p class="error"><?php echo(isset($error_email)) ? $error_email : ''; ?></p>

    <button type="submit" name="submit">S'inscrire</button>
</form>