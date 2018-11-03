<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>
<body>

    <h1>Accueil</h1>

    <ul>
        <?php /** @var Post $post */
        foreach ($posts as $post) { ?>
            <li>
                <a href="?action=detail&id=<?php echo $post->getId(); ?>">
                    <?php echo $post->getTitle(); ?>
                </a>
            </li>

        <?php } ?>
    </ul>

</body>
</html>
