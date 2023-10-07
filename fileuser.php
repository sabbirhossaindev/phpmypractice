<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File User</title>
</head>

<body>
    <h3>
        <?php
        if(isset($_GET['msg'])){
            echo $_GET['msg'];
        }
    ?>
    </h3>
    <form action="index.php">
        <label for="username">Name</label>
        <input type="text" name="username">
        <button type="submit">Save</button>
    </form>
</body>

</html>