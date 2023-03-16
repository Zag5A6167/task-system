<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <header>
     <div class="logo">
     <img src="img/wrench.png" alt="">
    ระบบบันทุกงาน</div>
        <nav class="nav-bar">
            
            <ul>
                <li><a href="index.php">หน้าหลัก</a></li>
                <li><a href="add.php">แก้ไข/เพิ่ม</a></li>
              
            </ul>
        </nav>
    </header>


    <form  action="register.php" method="post">
        <label  for="username">ชื่อ</label>
        <input type="text" name="username" required>
        <label for="data_task">วันที่</label>
        <input type="date" name="date_task" >
        <label for="amount">จำนวน</label>
        <input type="number" name="amount" >
       <input class="button-save" type="submit" value="บันทึก">
    </form>


    
</body>
</html>