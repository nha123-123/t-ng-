<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Định dạng bảng */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        /* Định dạng phần tử hàng */
        tr {
            border-bottom: 1px solid #ddd;
        }

        /* Định dạng ô tiêu đề */
        th {
            padding: 8px;
            text-align: left;
            background-color: #f2f2f2;
        }

        /* Định dạng ô dữ liệu */
        td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
    <h1>Danh sách sản phẩm</h1>
    <table>
        <tr>
            <th>STT</th>
            <th>Ma sp</th>
            <th>Tên sản phẩm</th>
            <th>Nhà sản xuất</th>
            <th>Khuyen mai</th>
            <th>Thong tin them</th>
            
        </tr>
        <tr>
            <?php
            while ($row = mysqli_fetch_assoc($listSP)) { ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['ma_sp'] ?></td>
            <td><?php echo $row['ten_sp'] ?></td>
            <td><?php echo $row['ma_nhasx'] ?></td>
            <td><?php echo $row['khuyenmai'] ?></td>
            <td><?php echo $row['thongtinthem'] ?></td>
            



            <td><a class="text-danger" href="index.php?task=deletesanpham&id=<?php echo $row['id'] ?>">Xoa</a></td>
            <td><a class="text-danger" href="index.php?task=editsanpham&id=<?php echo $row['id'] ?>">Sua</a></td>

        </tr>
    <?php } ?>

    </tr>
    </table>
         <button class="btn"><a href="index.php?task=themsanpham">Thêm Sản Phẩm </a></button>
</body>

</html>