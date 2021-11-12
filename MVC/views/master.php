<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./mvc/public/css/style.css">
    <link rel="stylesheet" href="./mvc/public/css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src=" https://unpkg.com/sweetalert/dist/sweetalert.min.js "> </script>
    <title>Nguyễn Đăng Thành</title>
</head>

<body>
    <?php require_once "./mvc/views/blocks/header.php"; ?>
    <?php require_once "./mvc/views/Page/" . $data["Page"] . ".php" ?>
    <?php require_once "./mvc/views/blocks/footer.php"; ?>
</body>
</html>