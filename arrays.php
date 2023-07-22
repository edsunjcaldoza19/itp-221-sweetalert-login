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
        $fruits = array("Apple", "Mango", "Banana", "Orange");
        sort($fruits);

        $clength = count($fruits);

        //Output the array
        for($x = 0; $x < $clength; $x++) {
            echo $fruits[$x];
            echo "<br>";
          }
    ?>
</body>
</html>