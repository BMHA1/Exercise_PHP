<html>
<!DOCTYPE html>

<head>
    <title>Prueha HTML</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>

<body>
    <?php

    $arrayPlatos = [

        [
            "titulo" => "Pasta con calamaras",
            "Numeros Comensales" => "2 personas",
            "Tipo PLato" => "Principal",
            "Ingredientes" => [
                [
                    "ingrediente" => "Masa",
                    "cantidad" => "200gr",
                ],
                [
                    "ingrediente" => "Salsa",
                    "cantidad" => "50gr",
                ],
                [
                    "ingrediente" => "Jamon",
                    "cantidad" => "30gr"
                ],
                [
                    "ingrediente" => "Queso",
                    "cantidad" => "50gr"
                ],
                [
                    "ingrediente" => "Albahaca",
                    "cantidad" => "10gr"
                ]
            ],
        ],
        [
            "titulo" => "Ensalada de gambas",
            "Numeros Comensales" => "2 personas",
            "Tipo PLato" => "Entrante",
            "Ingredientes" => [
                [
                    "ingrediente" => "Lechuga",
                    "cantidad" => "200gr"
                ],
                [
                    "ingrediente" => "Gamba",
                    "cantidad" => "200gr"
                ],
                [
                    "ingrediente" => "Crutones",
                    "cantidad" => "30gr"
                ],
                [
                    "ingrediente" => "Queso",
                    "cantidad" => "150gr"
                ],
                [
                    "ingrediente" => "Albahaca",
                    "cantidad" => "20gr"
                ],

            ],
        ],
        [
            "titulo" => "Tarta de Queso",
            "Numeros Comensales" => "2 personas",
            "Tipo PLato" => "Postre",
            "Ingredientes" => [
                [
                    "ingrediente" => "Queso Azul",
                    "cantidad" => "50gr"
                ],
                [
                    "ingrediente" => "Leche Pasteurizada",
                    "cantidad" => "150lts"
                ],
                [
                    "ingrediente" => "Azucar",
                    "cantidad" => "60gr"
                ]

            ],
        ],
    ];
    ?>
    <div class="content is-small">
        <ul>
            <?php
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
</body>

</html>