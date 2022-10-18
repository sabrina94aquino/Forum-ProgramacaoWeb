<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Significados do signos</title>
</head>
<body>
    <?php
        $date = new DateTime($_POST['dataNasc']);
        $dtSig = $date->format('m-d');  
        $xml = simplexml_load_file('dataSg.xml');
        echo '<h1>Signo: ';
            foreach ($xml->signo as $reg) :
                if ($dtSig >= $reg->dataInicio and $dtSig <= $reg->dataFim){
                    echo $reg->signoNome . '</h1>';
                    echo '<p> -' . $reg->descricao . '<p>';
                }
            endforeach;
    ?>
</body>
</html>