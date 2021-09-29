<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Professor</title>
</head>
<body>
    <?php
        require_once 'professor.php';
        $prof = new Professor('Girafales', 'Linguiça', '(55) 012 546548713', false);

        $prof->setOculos(true);

        echo "<pre>";
            print_r($prof);
        echo "</pre>";
    ?>
</body>
</html>