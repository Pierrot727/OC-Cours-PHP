<?php $this->titre = "Mon Blog - Connexion" ?>
    <p>Changer votre mot de passe</p>
    <form action="modification" method="post">
        <input name="login" type="text" placeholder="Entrez votre login" required
               autofocus>
        <input name="mdp" type="password" placeholder="Entrez votre mot de passe"
               required>
        <input name="verif_mdp" type="password" placeholder="Confirmer votre mot de passe"
               required>
        <button type="submit">Connexion</button>
    </form>
<?php if (isset($msgErreur)): ?>
    <p><?= $msgErreur ?></p>
<?php endif; ?>