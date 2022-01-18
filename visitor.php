<?php
session_start();

if (!isset($_SESSION['visitors'])) {
    $_SESSION['visitors'] = array();
}

if (count($_POST) > 0) {
    if ($_POST['pwd'] === $_POST['pwdRepeat']) {
        $today = date("d/m/Y");
        $id = count($_SESSION['visitors']) + 1;
        $_SESSION['visitors'][$id] = array();
        $_SESSION['visitors'][$id]['date'] = $today;
        foreach($_POST as $key => $val) {
            if ($key !== 'pwdRepeat') {
                $_SESSION['visitors'][$id][$key] = $val;
            }
        }
    $result = "<span class='success'>You've been successfully subscribed!</span>";
    } else {
        $result = "<span class='err'>Your passwords don't match!</span>";
    }
} else {
    $result = false;
}

## Uncomment code below to see the visitors who subscribed :
/*
echo "<pre>";
var_dump($_SESSION['visitors']);
echo "</pre>";
*/

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <title>DM 2 - Janvier 2022</title>
</head>

<body>
    <nav>
        <ul>
            <a href="./index.php"><li>Hungry?</li></a>
            <a href="./visitor.php"><li>Wanna visit?</li></a>
            <a href="./exchange.php"><li>Got some moneyz?</li></a>
            <a href="./form.php"><li>Simple form</li></a>
        </ul>
    </nav>
    <main>
    <h1>Become a visitor!</h1>
    <span><?= $result ? $result : null ?></span>
    <form class="visitor-form" method="post" action="./visitor.php">
    <label>Civilité
        <input required name="title" type="text">
    </label>
    <label>Nom
        <input required name="surname" type="text">
    </label>
    <label>Prénom
        <input required name="name" type="text">
    </label>
    <label>Email
        <input required name="email" type="email">
    </label>
    <label>Mot de passe
        <input required name="pwd" type="password">
    </label>
    <label>Répéter mot de passe
        <input required name="pwdRepeat" type="password">
    </label>
    <div>
        <button type="submit">Valider</button>
        <button type="reset">Effacer</button>
    </div>
    </form>
    </main>
</body>

</html>