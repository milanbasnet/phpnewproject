<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$milan = 34;
$basnet = 45;
$milanbasnet = $milan + $basnet;
echo "$milanbasnet";
echo $milan + 1;
?>

    <?php
$languages = array("python", "c++");
$a = 0;
while ($a <= 5) {
    echo "<br> value of a is $a";
    // echo $a;
    $a++;
}
foreach ($languages as $value) {
    echo "<br> languages are $value";
}

$a = 0;
while ($a < count($languages)) {
    echo "<br> languages are:$languages[$a]";
    $a++;
}

for ($i = 0; $i < 6; $i++) {
    echo "<br> number is: $i";
}
?>
</body>
</html>

