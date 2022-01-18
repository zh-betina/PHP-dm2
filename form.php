<?php
session_start();
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
            <a href="./index.php?">
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
        <h1>Just a simple form</h1>
        <form class="simple-form">
        <h2 class="simple-form__txt--h2">Remplir la fiche</h2>
            <div class="simple-form__row">
                <label class="simple-form__label"> Prénom
                    <input type="text">
                </label>
                <label class="simple-form__label"> Nom
                    <input type="text">
                </label>
                <label class="simple-form__label"> Naissance
                    <input type="date">
                </label>
                <label class="simple-form__label"> Email
                    <input type="email">
                </label>
            </div>
            <div class="simple-form__row">
                <label class="simple-form__label" for="languages">Langues pratiquées :

                    <select name="languages" id="languages" size="4" multiple>
                        <option value="german">Allemand</option>
                        <option value="english">Anglais</option>
                        <option value="arabic">Arabe</option>
                        <option value="spanish">Espagnol</option>
                        <option value="chinese">Chinois</option>
                        <option value="polish">Polonais</option>
                    </select>
                </label>
                <fieldset>
                <legend>Compétences informatiques :</legend>
                <div class="simple-form__skills">
                    <div>
                        <label for="html">HTML 5</label>
                        <input type="checkbox" id="html" name="skills" value="html">
                    </div>
                    <div>
                        <label for="css">CSS 3</label>
                        <input type="checkbox" id="css" name="skills" value="css">
                    </div>
                    <div>
                        <label for="js">Javascript</label>
                        <input type="checkbox" id="js" name="skills" value="js">
                    </div>
                    <div>
                        <label for="jquery">jQuery</label>
                        <input type="checkbox" id="jquery" name="skills" value="jquery">
                    </div>
                    <div>
                        <label for="ajax">AJAX</label>
                        <input type="checkbox" id="ajax" name="skills" value="ajax">
                    </div>
                    <div>
                        <label for="php">PHP</label>
                        <input type="checkbox" id="php" name="skills" value="php">
                    </div>
                    <div>
                        <label for="mysql">MySQL</label>
                        <input type="checkbox" id="mysql" name="skills" value="mysql">
                    </div>
                    <div>
                        <label for="jee">JEE</label>
                        <input type="checkbox" id="jee" name="skills" value="jee">
                    </div>
                    <div>
                        <label for="aspNet">ASP.Net</label>
                        <input type="checkbox" id="aspNet" name="skills" value="aspNet">
                    </div>
                    </div>
                </fieldset>
            </div>
            <div>
                <button type="reset">Effacer</button>
                <button type="submit">Envoyer</button>
            </div>
        </form>
    </main>
</body>

</html>