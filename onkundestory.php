<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mad Libs</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    
</head>
<body>
    <h1>Mad Libs</h1>
    <nav>
        <ul>
            <li><a href='index.php'>Er heerst paniek...</a></li>
            <li><a href='onkunde.php'>Onkunde</a></li>
        </ul>       
    </nav>
<section>
<h2>Onkunde</h2>
<p>Er zijn veel mensen die niet kunnen <?= $_POST['vaardigheid']?>. Neem nou <?= $_POST['goedpersoon']?>.
Zelfs met de hulp van een <?= $_POST['voorwerp']?> of zelfs tien kan <?= $_POST['goedpersoon']?> niet <?= $_POST['vaardigheid']?>
DAt heeft niet te maken met een gebrek aan <?= $_POST['besteeigenschap']?>, maar met een te veel aan <?= $_POST['slechsteeigenschap']?>.
Te veel <?= $_POST['slechtsteeigenschap']?> leidt tot verveling en dat is niet goed als je wilt <?= $_POST['vaardigheid']?>. Helaas voor <?= $_POST['goedpersoon']?>.</p>
</section>
<footer>de site is gemaakt door <?= $_POST['goedpersoon'] ?></footer>
</body>
</html>