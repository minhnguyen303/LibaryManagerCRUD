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
<form action="" method="post">
    <?php if(!empty($category)): ?>
    <fieldset>
        <legend>Edit Category</legend>
        <input type="text" name="id" hidden="hidden" value="<?php echo $category[0]['id']; ?>">
        Id: <input type="number" value="<?php echo $category[0]['id']; ?>" disabled="disabled">
        Name: <input type="text" name="name" value="<?php echo $category[0]['name']; ?>" required>
        Description: <textarea name="description"><?php echo $category[0]['description']; ?></textarea>
        <button type="submit">Save</button>
    </fieldset>
    <?php endif;?>
</form>
</body>
</html>
