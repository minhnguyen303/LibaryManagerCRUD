<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Library Manager</h1>
<div id="menu">
    <a href="" class="lBorder"><strong>Home</strong></a>
    <a href="" class="lBorder"><strong>Book</strong></a>
    <a href="" class="lBorder"><strong>Reader</strong></a>
    <a href="" class="lBorder"><strong>Borrow books</strong></a>
    <a href="" class="lBorder"><strong>Author</strong></a>
    <a href=""><strong>Categories</strong></a>
</div>
<h2>Categories List</h2>
<table id="table">
    <tr>
        <th id="row1">Code</th>
        <th id="row2">Category Name</th>
        <th id="row3">Description</th>
        <th id="row4">Actions</th>
    </tr>
    <?php if (!empty($categories)) {
        foreach ($categories as $category): ?>
            <tr>
                <td><?php echo $category->getId()?></td>
                <td><?php echo $category->getName()?></td>
                <td><?php echo $category->getDescription()?></td>
                <td>
                    <button><a href="index.php?page=edit&id=<?php echo $category->getId()?>">Edit</a></button>
                    <button><a href="index.php?page=delete&id=<?php echo $category->getId()?>">Delete</a></button>
                </td>
            </tr>
        <?php endforeach;
    } ?>
</table>
<br>
<a href="index.php?page=add-category" id="addCategory"><strong>Add new category</strong></a>
</body>
</html>