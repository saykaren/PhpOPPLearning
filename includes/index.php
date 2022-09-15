<?php
    include 'includes/autoloader.inc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
</html>
<body>
    <?php
        $person1 = new Person('Daniel', 'blue', 34);
        // $person1->setName("Daniel");
        echo $person1->name;
    ?>
</body>