<html>
<!DOCTYPE html>

<head>
    <title>Prueha HTML</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="./style.css"
</head>

<body>
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    ?>
    <div class="content is-small">

        <?php
        include_once 'Header.php';
        ?>

        <div class="contenedorCentral">
            <ul>
                <?php
                include_once 'data.php';
                foreach ($arrayPlatos as $plato) {
                    echo "  <li>Plato: ${plato["titulo"]} </br>
                                Números de comensales: ${plato["Numeros Comensales"]}</br>
                                Ideal: ${plato["Tipo PLato"]}</br>
                                Ingredientes:
                                                              </li> ";

                    echo "<ol>";

                    foreach ($plato['Ingredientes'] as  $value) {
                        echo "<li> Ingrediente :${value["ingrediente"]} </br>
                Cantidad :${value["cantidad"]}
                </li>";
                    };

                    echo "</ol>";
                }

                ?>
            </ul>
        </div>
        <footer>
            <?php
            include_once 'Footer.php';

            ?>
        </footer>
    </div>
</body>

</html>