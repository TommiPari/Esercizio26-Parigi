<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = $_GET["nome"];
        $cognome = $_GET["cognome"];
        $data = $_GET["data"];
        $orario = $_GET["orario"];
        $mezzi = (isset($_GET["mezzi"])) ? $_GET["mezzi"] : " - ";
        $corsi = (isset($_GET["corsi"])) ? $_GET["corsi"] : "Nessuna attività";
    ?>
    <table>
        <tr>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Data di nascita</th>
            <th>Orario di arrivo a casa nel giorno più lungo</th>
            <th>Mezzo di trasporto</th>
            <th>Corsi seguiti</th>
        </tr>
        <tr>
            <td><?php echo $nome?></td>
            <td><?php echo $cognome?></td>
            <td><?php echo $data?></td>
            <td><?php echo $orario?></td>
            <td><?php echo $mezzi?></td>
            <td>
            <?php 
                if (isset($_GET["corsi"])) {
                    foreach($corsi as $corso) {
                        echo $corso. " ";
                    }
                } else {
                    echo $corsi;
                }
            ?>
            </td>
        </tr>
    </table>
</body>
</html>