<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?php echo $_POST['kleur'] ?>"> 
        <?php echo $_POST["voornaam"]; ?>
        <?php echo $_POST["achternaam"]; ?><br>
        <?php echo $_POST["gender"]; ?><br>
        klas: <?php echo $_POST["klas"]; ?><br>
        <?php echo $_POST["leeftijd"]; ?> jaar<br>
        <?php echo $_POST["adres"]; ?><br>
        <?php echo $_POST["plaatsnaam"]; ?><br>
</body>
</html>
