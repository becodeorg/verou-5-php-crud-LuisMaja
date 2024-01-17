<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books Collection</title>
</head>
<body>

<h1>Books - track your collection of books you've read</h1>
<form>
    <button name = "submit" id = "submit">Add Book</button>
</form>
<ul>
    <?php foreach ($books as $book) : ?>
        <li><?= $book['name'] ?></li> <button>Edit</button> <button>Delete</button>
    <?php endforeach; ?>
</ul>

</body>
</html>