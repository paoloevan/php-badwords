<?php
$paragraph = $_GET['paragraph'];
$bad_word = $_GET['cersored'];

$new_paragraph = str_replace($bad_word, '***', $paragraph)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?php echo $paragraph . " Lunghezza paragrafo: " . strlen($paragraph); ?></h3>
    <h3><?php echo $new_paragraph . " Lunghezza paragrafo: " . strlen($new_paragraph); ?></h3>
</body>
</html>