<?php
$weekMenu = array(
    "monday" => array(),
    "tuesday" => array(),
    "wednesday" => array(),
    "thursday" => array(),
    "friday" => array(),
    "saturday" => array(),
    "sunday" => array()
);
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
    <h1>What are we gonna cook?</h1>
    <table>
        <thead>
            <tr>
                <?php
                    $weekDays = array_keys($weekMenu);

                    foreach($weekDays as $day) {
                        echo "<td> $day </td>";
                    }
                ?>
            </tr>
        </thead>

    </table>
    </main>
</body>

</html>