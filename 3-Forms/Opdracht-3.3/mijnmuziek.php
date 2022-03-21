<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="mijnmuziek" method="GET">
        <ul>
            <li>Artiest: <input name="artiest" value="<?php echo $_GET ["artiest"]?>"></li>
            <li>Titel: <input name="titel" value="<?php echo $_GET ["titel"]?>"></li>
            <li>Jaar van uitkomst: <input name="uitkomst" value="<?php echo $_GET ["uitkomst"]?>" ></li>
            <li>Muzieksoort: <input name="muzieksoort" value="<?php echo $_GET ["muzieksoort"]?>" ></li>
        </ul>

        <input type="submit" name="submit" value="Verstuur">
        <!-- http://localhost/PHP-ADVANCED/3-Forms/Opdracht-3.3/mijnmuziek.php?artiest=joynerLucas&titel=ADHD&uitkomst=2021&muzieksoort=rap -->
    <form>
</body>
</html>
