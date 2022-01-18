<?php

include_once('./convertisseur.php');

$euro = $_POST['amountEur'];
$dollar = $_POST['amountDol'];

$convert = new Money();

if (isset($_POST['amountEur']) || isset($_POST['amountDol'])) {
    if (!empty($euro) && empty($dollar)) {
        $euro = floatval($euro);
        $convert->setAmount($euro);
        $result = "<span class='success'>" . $convert->euroToDollar() . " USD" . "</span>";
    } else if (!empty($dollar) && empty($euro)) {
        $dollar = floatval($dollar);
        $convert->setAmount($dollar);
        $result = "<span class='success'>" . $convert->dollarToEuro() . " EUR" . "</span>";
    } else if (!empty($euro) && !empty($dollar)) {
        $result =  '<span class="err">Only one currency field should be filled in</span>';
    } else {
        $result =  '<span class="err">Please, fill in one of the fields</span>';
    };
} else {
    $result =  null;
}


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
    <h1>Count yo moneyz</h1>
    <?= isset($result) ? $result : null ?>
    <form class="simple-form" action="./exchange.php" method="post">
        <label class="simple-form__label">
            Your coinz in Euros:
            <input name="amountEur" type="number" min="0">
        </label>
        <label class="simple-form__label">
            Your coinz in Dollars:
            <input name="amountDol" type="number" min="0">
        </label>
        <button type="submit">Convert</button>
    </form>
    </main>
</body>

</html>