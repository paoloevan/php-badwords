<?php
$paragraph = $_GET['paragraph'];
$bad_word = $_GET['cersored'];

$new_paragraph = str_replace($bad_word, '***', $paragraph);
echo "<pre>";
var_dump($new_paragraph);
echo "</pre>"
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
    <h1><?php echo $paragraph; ?></h1>
    <h3><?php echo "Lunghezza paragrafo: " . strlen($paragraph); ?></h3>
    <h1><?php echo $new_paragraph; ?></h1>
    <h3><?php echo "Lunghezza paragrafo: " . strlen($new_paragraph); ?></h3>
</body>
</html>