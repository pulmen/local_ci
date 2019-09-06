<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User View</title>
</head>
<body>

<h1>
<?php

    //echo $results;
    foreach ($results as $object){
        echo $object->username . "<br>";
    }

?>
</h1>

</body>
</html>