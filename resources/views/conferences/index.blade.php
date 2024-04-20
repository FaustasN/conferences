<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Conference List</title>
</head>
<body>

<nav>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/login">Login</a></li>
    </ul>
</nav>

<div>
    <h1>Conference List</h1>

    <?php foreach ($conferences as $conference): ?>
    <div>
        <h2><?= $conference->title ?></h2>
        <p>Description: <?= $conference->description ?></p>
        <p>Date: <?= $conference->date ?></p>
        <p>Address: <?=$conference->address?></p>
    </div>
    <?php  endforeach; ?>
</div>
</body>
</html>
