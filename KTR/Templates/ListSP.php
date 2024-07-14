<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Thêm Sản Phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Hiển thị</h2>
    <form action="process.php" method="POST">
        <table>
            <tr>
                <th>STT</th>
                <th>Tên Sản Phẩm</th>
                <th>Nhà Sản Xuất</th>
                <th>Ngày Sản Xuất</th>
                <th>Đơn Giá</th>
            </tr>
        <?php
            while ($row = mysqli_fetch_assoc($ListSP)) { ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['ma_nhasx'] ?></td>
            <td><?php echo $row['ten_nhasx'] ?></td>
            <td><?php echo $row['ma_sp'] ?></td>
            <td><?php echo $row['ten_sp'] ?></td>
            <td><?php echo $row['ngaysx'] ?></td>
            <td><?php echo $row['dongia'] ?></td>
            
        </tr>
    <?php } ?>
        </table>
        <br>
        
    </form>
</body>
</html>
