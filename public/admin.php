<?php
require __DIR__ . '/../app/config.php';

require DIR_INCLUDES . '/admin/auth.php';

require DIR_VIEWS . '/admin/header.inc.php';

$req = $bdd->prepare('SELECT id,firstName,lastName,birthdate,email,sexe,phone,emergency,submitDate FROM as_register ORDER BY submitDate DESC');
$req->execute();
$registers = $req->fetchAll();
?>

<div class="container backOffice">
    <div class="header">
        <h1 class="textContainer"><?=SITE_NAME?></h1>
        <p style="text-align: center;margin: 20px 0;">Connecté en tant que <strong><?=htmlentities($_SESSION['username'])?></strong>, <a href="logout.php?csrf=<?=$_SESSION['csrf']?>">Déconnexion</a></p>
    </div>

    <h1 class="textContainer" style="margin-bottom: 20px;">Personnes inscrites</h1>

    <div class="subs">
        <?php foreach ($registers as $register) { ?>
            <div class="sub">
                <p>Nom complet : <?=htmlentities($register['lastName'])?> <?=htmlentities($register['firstName'])?></p>
                <p>Date de naissance : <?=date('d/m/Y', strtotime(htmlentities($register['birthdate'])))?> (<?=date_diff(date_create(htmlentities($register['birthdate'])), date_create('today'))->y;?> ans)</p>
                <p>Adresse email : <?=$register['email']?></p>
                <p>Sexe : <?=$register['sexe']?></p>
                <p>Numéro de tél. : <?=$register['phone']?></p>
                <p>Personne à contacter en cas de problème : <?=htmlentities($register['emergency'])?></p>
                <p>Date d'inscription : <?=date('d/m/Y', strtotime(htmlentities($register['submitDate'])))?></p>
            </div>
        <?php } ?>
    </div>
</div>

<?php
require DIR_VIEWS . '/admin/footer.inc.php';
?>