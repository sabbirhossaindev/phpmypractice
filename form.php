<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload</title>
</head>
<style>
button {
    background-color: crimson;
    color: #fff;
    height: 40px;
    width: 110px;
    border-radius: 10px;
}
</style>

<body>
    <div>
        <!-- form 4 ta kaj action, method, enctype, & input field name -->
        <form action="" method="POST" enctype="multipart/form-data">
            <labe>choose file</label>
                <input type="file" name="photo" required> <br> <br>
                <button type="submit">upload</button>
        </form>
        <br>
        <strong>Upload your image.</strong>
    </div>
</body>

</html>