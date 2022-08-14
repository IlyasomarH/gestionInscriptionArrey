
<?php

include "header.php";


?>

<main class="d-flex justify-content-center mt-5 border" style="height: 100vh; border:1px solid black">
    <form action="login.php" method="post" class="w-25  shadow p-3 h-50" id="form1">
        <h2 class="text-center text-success fs-1">Connexion</h2>
        <div class="form-group mb-3">
            <label for="Email" class="form-label fs-4   "> Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="pass" class="form-label fs-4">password</label>
            <input type="password" name="pass" id="pass" class="form-control">
        </div>
        <button type="submit" class="btn btn-outline-success w-100 fs-5">Se connecter</button>
        <div class="form-text"><a href="#" class="text-success" id="btn-inscrire">S'inscrire ?</a> </div>



     


    </form>
    <form action="login.php" method="post" class="w-25  shadow p-3 h-75" id="form2">
    <div class="alert alert-danger">
        le deux mot de passe ne sont pas correct
     </div>
        <h2 class="text-center text-success fs-1">Inscripstion</h2>
        <div class="form-group mb-3">
            <label for="Email" class="form-label fs-4   "> Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="Ipass" class="form-label fs-4">password</label>
            <input type="password" name="Ipass" id="Ipass" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="Cpass" class="form-label fs-4">confirmer password</label>
            <input type="password" name="Cpass" id="Cpass" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-outline-success w-100 fs-5" id="btnIscription">s'inscrire</button>
        <!-- <div class="form-text"><a href="" class="text-success">S'inscrire ?</a> </div> -->

    </form>
   
</main>



<?php

require "footer.php";

?>
