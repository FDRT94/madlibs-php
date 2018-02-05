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
    <form action="erheerstpaniekstory.php" method="post">
        <h2>Er heerst paniek... </h2>
        <p>Welk dier zou je nooit als huisdier willen hebben? <input type="text" name="dier" >'</p>
        <p>Wie is de belangrijkste persoon in je leven? <input type="text" name='persoon'></p>
        <p>In welk land zou je graag willen wonen? <input type="text" name="land"> </p>
        <p>Wat doe je als je je verveelt? <input type="text" name="hobby"></p>
        <p>Met welk speelgoed speelde je als kind het meest? <input type="text" name="speelgoed"></p>
        <p>Bij welke docent spijbel je het liefst? <input type="text" name="docent"> </p>
        <p>Als je 100.000,- had, wat zou je dan kopen? <input type="text" name="aankopen"> </p>
        <p>Wat is je favoriete bezigheid? <input type="text" name="bezigheid"></p>
        
        <button type='submit' class='button'>verstuur</button>  
    </form> 
    </section>
</body>
</html>