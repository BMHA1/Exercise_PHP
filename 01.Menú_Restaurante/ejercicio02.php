<html>
<!DOCTYPE html>

<head>
    <title>Prueha HTML</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>

<body>
    <table class="table">
        <?php
        for ($i = 0; $i <= 10; $i++) {

            echo "<tr>${i}</tr>";
            // for ($u = 0; $u <= 10; $u++) {
            //     echo "<div>${u}</div>";
            // }
        }

        ?>

    </table>

</body>

</html>