
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include 'includes/meta.php'; ?>
    <link rel="stylesheet" href="view/style/general.css" type="text/css" />
    <title>Top Opening 2020</title>
</head>

<body>
<div id="particles-js"></div>
<header>
    <?php include 'includes/headerOpening.php'; ?>
</header>
<?php
if (isset($animeUserNotes)) {
    foreach ($animeUserNotes as $animeUserNote) {
        ?>
        <div class="card mt-3 mb-3 ml-3 mr-3">
            <table>
                <thead>
                <tr>
                    <th><a href="<?= $animeUserNote->getAnime()->getMalLink() ?>"><?= $animeUserNote->getAnime()->getName()?></a></th>
                    <?php
                    foreach ($animeUserNote->getUserNote() as $userNote) {
                        ?>
                        <th><?= $userNote->getUser()->getPseudo()?></th>
                        <?php
                    }
                        ?>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?=$animeUserNote->getAnime()->getMoyenne() ?></td>
                    <?php
                    foreach ($animeUserNote->getUserNote() as $userNote) {
                        ?>
                        <td><?= $userNote->getNote()->getNoteTotale()?></td>
                        <?php
                    }
                    ?>
                </tr>
                </tbody>
            </table>
        </div>
        <?php
    }
}
?>
        <div class="card mt-3 mb-3 ml-3 mr-3">
            <table>
                <thead>
                <tr>
                    <?php
                    if (isset($userMoy)) {
                    foreach ($userMoy as $user) {
                    ?>
                    <th><?= $user->getUser()->getPseudo()?></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?= $user->getMoyenne()?></td>
                </tr>
                <?php
                }
                }
                ?>
                </tbody>
            </table>
        </div>
</body>
</html>

