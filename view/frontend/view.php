<?php $title = "Short storie"; ?>

<?php ob_start() ?>
<body class="main-body">
    <div class="container">
        <header class="row">
            <div class=col>
                <h1>Billet simple pour l'Alaska</h1>
            </div>
        </header>
        
        <section class="first-section row">
            <?php
            while($dataPosts= $posts->fetch())
            {
            ?>
            <div class="news col-lg-4 rounded  border">
                <a class="link-comment" href="index.php?action=post&amp;id=<?= $dataPosts['id']; ?>">
                    <h3>
                        <?= htmlspecialchars($dataPosts['title']); ?>
                    </h3>
                </a>
                <p>
                    <br>le <?= $dataPosts['creation_date_fr']; ?>
                </p>
            </div>
            
            <?php
            }
            $posts->closeCursor();
            ?>
        </section>
    </div>
<?php $content = ob_get_clean() ?>

<?php require("template.php"); ?>