<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piesakies webināram!</title>
</head>
<body>
    <header>
        <nav>
            <a href="blog.php">Tiešsaistes dienasgrāmata</a>
        </nav>
    </header>
    <form action="confirmation.php" method="post" id="data">
        <label for="first_name">Vārds: </label>
        <input type="text" id="first_name" name="first_name"><br>

        <label for="email">E-pasts: </label>
        <input type="text" id="email" name="email"><br>

        <label for="curse">Kursa līmenis: </label>
        <select name="curse" id="curse">
            <option value="Beginner">Beginner</option>
            <option value="Intermediate">Intermediate</option>
            <option value="Advanced">Advanced</option>
        </select>

        <p>
            Vai vēlies saņemt info par citiem mūsu organizētajiem pasākumiem?
        </p>
        <input type="radio" id="yes" name="info" value="Yes" required>
        <label for="yes">Jā</label><br>

        <input type="radio" id="no" name="info" value="No" required>
        <label for="no">Nē</label><br><br>

        <button type="submit" id="submitResult">Pieteikties</button>
    </form>
    <div id="result"></div>

    <h2>Jau reģistrējušies: </h2>
        <ul>
            <?php
                $users = [
                    [
                        'first_name' => 'Jānis Bērziņš',
                        'email' => 'janis@berzins.com',
                        'curse' => 'Intermediate'
                    ],
                    [
                        'first_name' => 'Jānis Jaunkuns',
                        'email' => 'someonesEmail@inbox.lv',
                        'curse' => 'Beginner'
                    ],
                    [
                        'first_name' => 'Agris Bogdanovs',
                        'email' => 'agris_bogdanovs@example.ru',
                        'curse' => 'advanced'
                    ]
                ];

                foreach ($users as $user){
                    echo "<li>Vārds: {$user['first_name']},<br> 
                            E-pasts: {$user['email']},<br> 
                            Kursa līmenis: {$user['curse']}</li></br>";
                }
            ?>
        </ul>
        <script src="app.js"></script>
</body>
</html>