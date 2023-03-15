<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1_add">
    <title>Document</title>
</head>
<body>
    <form  action="register.php" method="post">
        <label  for="username">ชื่อ</label>
        <input type="text" name="username" required>
        <label for="data_task">วันที่</label>
        <input type="date" name="date_task" required>
        <label for="amount">จำนวน</label>
        <input type="number" name="amount" required>
       <input class="btn" type="submit" value="บันทึก">
    </form>
</body>
</html>