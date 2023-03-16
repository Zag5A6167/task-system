<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <title>หน้าหลัก</title>
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

    <?php
    require 'conn.php';
    $query = "SELECT * FROM task";
    $result = mysqli_query($conn,$query);
    ?>

    <table class="table table-hover container tb">
        
        <thead>
            
            <tr>
                
                <th>id</th>
                <th>ชื่อ</th>
                <th>รุ่น</th>
                <th>จำนวน</th>
                <th>วัน</th>
                <th>เสีย/ส่งคืน</th>
                <th>เคลม</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($result as $row) { 
            ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['model_board'];?></td>
                <td><?php echo $row['amount'];?></td>
                <td><?php echo $row['date_task'];?></td>
                <td><?php echo $row['send_back'];?></td>
                <td><?php echo $row['claim_amount'];?></td>    
                <td><button class="btn btn-primary">แก้ไข</button></td>   
                <td><button class="btn btn-danger">ลบ</button></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php mysqli_close($conn)?>
</body>
</html>