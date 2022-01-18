<?php

include_once('./convertisseur.php');

$euro = $_POST['amountEur'];
$dollar = $_POST['amountDol'];

$convert = new Money();

if (!empty($euro) && empty($dollar)) {
    $euro = floatval($euro);
    $convert->setAmount($euro);
    $result = $convert->euroToDollar() . " USD";
} else if (!empty($dollar) && empty($euro)) {
    $dollar = floatval($dollar);
    $convert->setAmount($dollar);
    $result = $convert->dollarToEuro() . " EUR";
} else if (!empty($euro) && !empty($dollar)) {
    $result =  'Only one currency field should be filled in';
} else {
    $result =  'Please, fill in one of the fields';
};

$result = "<p> $result </p>";
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
            <a href="./form.php"><li>Wanna visit?</li></a>
            <a href="./exchange.php"><li>Got some moneyz?</li></a>
        </ul>
    </nav>
    <main>
    <h1>Count yo moneyz</h1>
    <form action="./exchange.php" method="post">
        <label>
            Your coinz in Euros:
            <input name="amountEur" type="number" min="0">
        </label>
        <label>
            Your coinz in Dollars:
            <input name="amountDol" type="number" min="0">
        </label>
        <span><?= isset($result) ? $result : null ?></span>
        <button type="submit">Convert</button>
    </form>
    </main>
</body>

</html>