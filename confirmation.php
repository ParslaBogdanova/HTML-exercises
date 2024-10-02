<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
</head>
<body>
    <h1>Reģistrācijas apstiprinājums</h1>

    <?php
    ($_SERVER["REQUEST_METHOD"] == "POST");
        $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
        $emailUser = isset($_POST['email']) ? $_POST['email'] : '';
        $curseLevel = isset($_POST['curse']) ? $_POST['curse'] : '';

        echo "<p>Paldies, <strong>$first_name!</strong><br> 
            Jūs esat veiksmīgi reģistrējies 
            ar e-pastu <strong>$emailUser.</strong><br>
            Kursa līmenis: $curseLevel</p>";
    ?>

    <header>
        <nav>
            <a href="index.php">Tiešsaistes dienasgrāmata</a>
        </nav>
    </header>

</body>
</html>
