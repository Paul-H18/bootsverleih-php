<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrierungsformular</title>

    <style>

        form {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            grid-auto-rows: 50px;

            width: 50%;
        }

        form > input, form > label {
            width: 200px;

        }


    </style>

</head>
<body>
    <form method="POST" action="<?= url_to('register.registration') ?>">
        <label for="firstname">Vorname</label>
        <input type="text" name="firstname">

        <label for="lastname">Nachname</label>
        <input type="text" name="lastname">

        <label for="street">Straße</label>
        <input type="text" name="street">

        <label for="street_number">Hausnummer</label>
        <input type="number" name="street_number">

        <label for="email">E-Mail Adresse</label>
        <input type="email" name="email">

        <input type="submit" value="Registrieren">
    </form>
</body>
</html>