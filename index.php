<?php
session_start();
//$_SESSION['weekMenu'] = null;

$menuCategories = array(
    "entrée" => "",
    "plat" => "",
    "dessert" => "",
    "boissons" => ""
);

if (!isset($_SESSION['weekMenu'])) {
    $_SESSION['weekMenu'] = array(
        "monday" => $menuCategories,
        "tuesday" => $menuCategories,
        "wednesday" => $menuCategories,
        "thursday" => $menuCategories,
        "friday" => $menuCategories,
        "saturday" => $menuCategories,
        "sunday" => $menuCategories
    );
}

if (count($_POST) > 0) {
    $day = $_POST['weekday'];
    $category = $_POST['category'];
    $content = $_POST['content'];

    if (!empty($day) && !empty($category) && !empty($content)) {
        $_SESSION['weekMenu'][$day][$category] = $content;
    }
};

#Uncomment the code below to see the data:
/*
echo "<pre>";
var_dump($_SESSION['weekMenu']);
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
            <a href="./index.php">
                <li>Hungry?</li>
            </a>
            <a href="./visitor.php">
                <li>Wanna visit?</li>
            </a>
            <a href="./exchange.php">
                <li>Got some moneyz?</li>
            </a>
            <a href="./form.php">
                <li>Simple form</li>
            </a>
        </ul>
    </nav>
    <main>
        <h1>What are we gonna cook?</h1>
        <table>
            <thead>
                <tr>
                    <td>Item/meal</td>
                    <?php
                    $weekDays = array_keys($_SESSION['weekMenu']);
                    foreach ($weekDays as $day) {
                        echo "<td> $day </td>";
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($menuCategories as $category => $val) {
                    echo "<tr><th>$category</th>";
                    foreach ($_SESSION['weekMenu'] as $weekDay) {
                        echo "<td>$weekDay[$category]</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <h2>Modify the weekly menu</h2>
        <form class="simple-form" action="./index.php" method="post">
            <label class="simple-form__label">
                Choose weekday:
                <select required name="weekday" id="weekday">
                    <option value="">---Weekdays---</option>
                    <?php
                    foreach ($weekDays as $day) {
                        $firstUpper = ucfirst($day);
                        echo "<option value='$day'>$firstUpper</option>";
                    }
                    ?>
                </select>
            </label>
            <label class="simple-form__label">
                Choose category:
                <select required name="category" id="category">
                    <option value="">---Categories---</option>
                    <?php
                    foreach ($menuCategories as $category => $val) {
                        $firstUpper = ucfirst($category);
                        echo "<option value='$category'>$firstUpper</option>";
                    }
                    ?>
                </select>
            </label>
            <label class="simple-form__label">
                Describe the article/meal:
                <textarea required rows="5" cols="33" name="content" placeholder="Ex. can of Coke"></textarea>
            </label>
            <div>
                <button type="reset">Reset</button>
                <button type="submit">Submit</button>
            </div>
        </form>
    </main>
</body>

</html>