<?php

$blogs = [
    ['name' => 'John', 'age' => 25],
    ['name' => 'Lia', 'age' => 20],
    ['name' => 'Sam', 'age' => 23]
];

// for($i = 0; $i < count($blogs); $i++) {
//     echo $blogs[$i]['name'] . ' - ' . $blogs[$i]['age'];
//     echo '<br />';
// }

// echo "<h5>Name - Age </h5>";

// foreach($blogs as $blog) { 
//     echo $blog['name'] . ' - ' . $blog['age'];
//     echo '<br />';
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials</title>
</head>

<body>

    <div>
        <ul>
            <?php foreach ($blogs as $blog) { ?>
                <?php if ($blog['age'] > 20) { ?>
                    <li> <?php echo $blog['name'] . ' - ' . $blog['age'] . "<br />"; ?> </li>
                <?php } ?>
            <?php } ?>
        </ul>
    </div>

</body>

</html>