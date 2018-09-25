<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="http://localhost/repository_test/save_user">
    <?php foreach ($data as $user) : ?>
    <div class="user" style="margin: 10px; display: flex; flex-direction: row;">
        <div class="prop">
            Id: <?= $user['id'] ?>;
        </div>
        <div class="prop">
            Name: <?= $user['name'] ?>;
        </div>
        <div class="prop">
            Surname: <?= $user['surname'] ?>;
        </div>
        <div class="prop">
            Email: <?= $user['email']?>;
        </div>
    </div>
    <?php endforeach; ?>
</div>

</body>
</html>