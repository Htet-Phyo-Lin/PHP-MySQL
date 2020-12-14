<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial=scale=1.0">
    <title></title>
</head>

<body>

    <?php foreach($person as $key=>$info):?>
        <li><?= $key." - ".$info ?></li>
    <?php endforeach; ?>

</body>

</html>