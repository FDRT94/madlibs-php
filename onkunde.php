<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mad libs</title>
    <meta charset="utf-8" />
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
    <form action="onkundestory.php" method="post">
        <h2>Onkunde </h2>
        <p>Wat zou je graag willen kunnen? <input type="text" name="vaardigheid" >'</p>
        <p>Met welke persoon kun je goed opschieten? <input type="text" name='goedpersoon'></p>
        <p>Wat is je favoriete getal? <input type="text" name="getal"> </p>
        <p>Wat heb je altijd bij je als je op vakantie gaat? <input type="text" name="voorwerp"></p>
        <p>Wat is je beste persoonlijke eigenschap? <input type="text" name="besteeigenschap"></p>
        <p>Wat is je slechtste persoonlijke eigenschap? <input type="text" name="slechtsteeigenschap"> </p>
        <p>Wat is het ergste dat je kan overkomen? <input type="text" name="ergste"> </p>
    
        <button type='submit' class='button'>verstuur</button>  
    </form> 
</section>
</body>
</html>