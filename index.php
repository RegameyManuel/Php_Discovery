<?php
require 'header.php';
?>

<div class="container">
    <h1>Exploration des fonctionnalités PHP</h1>
    
    <section id="server-info">
        <h2>Informations sur le serveur</h2>
        <ul>
            <li><strong>Nom du serveur :</strong> <?= $_SERVER['SERVER_NAME']; ?></li>
            <li><strong>Adresse IP du client :</strong> <?= $_SERVER['REMOTE_ADDR']; ?></li>
            <li><strong>Logiciel du serveur :</strong> <?= $_SERVER['SERVER_SOFTWARE']; ?></li>
            <li><strong>Méthode de requête HTTP :</strong> <?= $_SERVER['REQUEST_METHOD']; ?></li>
            <li><strong>Agent utilisateur :</strong> <?= $_SERVER['HTTP_USER_AGENT']; ?></li>
            <li><strong>Référent (referrer) :</strong> <?= $_SERVER['HTTP_REFERER'] ?? 'Non disponible'; ?></li>
            <li><strong>Port du serveur :</strong> <?= $_SERVER['SERVER_PORT']; ?></li>
            <li><strong>Chemin complet du script :</strong> <?= $_SERVER['SCRIPT_FILENAME']; ?></li>
            <li><strong>Chemin de la racine :</strong> <?= $_SERVER['DOCUMENT_ROOT']; ?></li>
        </ul>
    </section>
    
    <section id="global-vars">
        <h2>Exemples de variables globales</h2>
        <ul>
            <li><strong>Chemin complet du fichier :</strong> <?= $GLOBALS['_SERVER']['SCRIPT_FILENAME']; ?></li>
            <li><strong>Nom du serveur :</strong> <?= $GLOBALS['_SERVER']['SERVER_NAME']; ?></li>
            <li><strong>Nom du fichier en cours :</strong> <?= basename(__FILE__); ?></li>
        </ul>
        <h3>Exploration de $_GET</h3>
        <p>Ajoutez `?param=test` à l’URL pour voir cette superglobale en action.</p>
        <ul>
            <?php if (!empty($_GET)): ?>
                <?php foreach ($_GET as $key => $value): ?>
                    <li><strong><?= htmlspecialchars($key); ?>:</strong> <?= htmlspecialchars($value); ?></li>
                <?php endforeach; ?>
            <?php else: ?>
                <li>Aucun paramètre GET détecté.</li>
            <?php endif; ?>
        </ul>
    </section>
    
    <section id="calculations">
        <h2>Calculs et manipulation de données</h2>
        <?php
        $randomNumber = rand(1, 100);
        $squaredNumber = $randomNumber ** 2;
        ?>
        <p>Un nombre aléatoire : <span class="highlight"><?= $randomNumber; ?></span></p>
        <p>Le carré de ce nombre : <span class="highlight"><?= $squaredNumber; ?></span></p>
    </section>
    
    <section id="form-handling">
        <h2>Traitement de formulaires</h2>
        <form method="POST">
            <label for="name">Votre nom :</label>
            <input type="text" id="name" name="name" placeholder="Entrez votre nom" required>
            <button type="submit">Envoyer</button>
        </form>
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'])): ?>
            <p class="highlight">Bonjour, <?= htmlspecialchars($_POST['name']); ?> !</p>
        <?php endif; ?>
    </section>
</div>

<?php
require 'footer.php';
?>
