<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mad Libs</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
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
  <h2>Er heerst paniek...</h2>
  <p>Er heerst paniek in het koninkrijk <?=$_POST['land']?>.
   Koning Egmond is ten einde raad en als koning Egmond ten einde raad is, 
   dan roept hij zijn ten-einde-raadsheer <?=$_POST['persoon']?>?.</p>

   <p>'<?=$_POST['persoon']?>! Het is een ramp! Het is een schande!'</p>
   <p>'Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?'</p>
   <p>'Mijn <?=$_POST['dier'] ?> is verdwenen! Zo maar, zonder waarschuwing.
   En ik had net <?=$_POST['speelgoed'] ?> voor hem gekocht!"</p>
   <p>'Majesteit, uw <?=$_POST['dier'] ?> komt vast vanzelf weer terug?' </p>
   <p> 'Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?=$_POST['bezigheid']?> leren? </p>
   <p>'Maar Sire, daar kunt u toch uw <?=$_POST['aankopen'] ?> voor gebruike.' </p>
   <p>'<?=$_POST['persoon'] ?>', je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had.'</p>
   <p>'<?=$_POST['hobby'] ?> Sire.'</p>
   </section>
   <footer>de site is gemaakt door <?= $_POST['persoon'] ?></footer>
</body>
</html>