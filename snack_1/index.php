<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <?php
        $matches = [
            "match_1" => [
                "squadraCasa" => "Brooklyn Nets",
                "squadraOspite" => "Dallas Mavericks",
                "puntiSqCasa" => rand(1, 100),
                "puntiSqOspite" => rand(1, 100)
            ],
            "match_2" => [
                "squadraCasa" => "Orlando Magic",
                "squadraOspite" => "Chicago Bulls",
                "puntiSqCasa" => rand(1, 100),
                "puntiSqOspite" => rand(1, 100)
            ],
            "match_3" => [
                "squadraCasa" => "Detroit Pistons",
                "squadraOspite" => "Atlanta Hawks",
                "puntiSqCasa" => rand(1, 100),
                "puntiSqOspite" => rand(1, 100)
            ]
        ];

    ?>

    <h1>PARTITA 1: 
        <?php 
            echo $matches["match_1"]["squadraCasa"];
            echo " - ";
            echo $matches["match_1"]["squadraOspite"];
            echo " | ";
            echo $matches["match_1"]["puntiSqCasa"];
            echo " - ";
            echo $matches["match_1"]["puntiSqOspite"];
        ?>
    </h1>

    <h3>Vincitore: 
        <?php
        if ($matches["match_1"]["puntiSqCasa"] > $matches["match_1"]["puntiSqOspite"]) {
            echo $matches["match_1"]["squadraCasa"];
        } else {
            echo $matches["match_1"]["squadraOspite"];
        }
        ?>
    </h3>

    <h1>PARTITA 2: 
        <?php 
            echo $matches["match_2"]["squadraCasa"];
            echo " - ";
            echo $matches["match_2"]["squadraOspite"];
            echo " | ";
            echo $matches["match_2"]["puntiSqCasa"];
            echo " - ";
            echo $matches["match_2"]["puntiSqOspite"];
        ?>
    </h1>

    <h3>Vincitore: 
        <?php
        if ($matches["match_2"]["puntiSqCasa"] > $matches["match_2"]["puntiSqOspite"]) {
            echo $matches["match_2"]["squadraCasa"];
        } else {
            echo $matches["match_2"]["squadraOspite"];
        }
        ?>
    </h3>

    <h1>PARTITA 3: 
        <?php 
            echo $matches["match_3"]["squadraCasa"];
            echo " - ";
            echo $matches["match_3"]["squadraOspite"];
            echo " | ";
            echo $matches["match_3"]["puntiSqCasa"];
            echo " - ";
            echo $matches["match_3"]["puntiSqOspite"];
        ?>
    </h1>

    <h3>Vincitore: 
        <?php
        if ($matches["match_3"]["puntiSqCasa"] > $matches["match_3"]["puntiSqOspite"]) {
            echo $matches["match_3"]["squadraCasa"];
        } else {
            echo $matches["match_3"]["squadraOspite"];
        }
        ?>
    </h3>
</body>
</html>