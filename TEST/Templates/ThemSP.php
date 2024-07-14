<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Style cho nhãn (label) */
        h1 {
            margin: auto;
        }

        form {
            width: 200px;
            margin: auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        /* Style cho ô nhập liệu (input) */
        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            /* Đảm bảo rằng padding và border không làm thay đổi kích thước thực tế của phần tử */
        }

        /* Style cho nút gửi (button) */
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Hover effect cho nút gửi */
        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h1>Thêm sản phẩm</h1>
    <form method="POST" action="">
        <label for="">Mã sản phẩm</label>
        <input type="text" name="ma_sp" />
        <label for="">Tên sản phẩm</label>
        <input type="text" name="ten_sp" />
        <label for="">Mã nhà sản xuất</label>
        <!-- <input type="text" name="ma_nhasx"/> -->
        <select name="ma_nhasx">
            <?php
            while ($row = mysqli_fetch_assoc($listNSX)) { ?>
                <option value="<?php echo $row['ma_nhasx']; ?>"><?php echo $row['ten_nhasx']; ?></option>
            <?php }; ?>
        </select>
        <label for="">Khuyen mai</label>
        <input type="checkbox" id="vehicle1" name="khuyenmai" value="10%">
        <label for="vehicle1">10%</label><br>
        <input type="checkbox" id="vehicle2" name="khuyenmai" value="20%">
        <label for="vehicle2"> 20%</label><br>
        <input type="checkbox" id="vehicle3" name="khuyenmai" value="Bảo hành 1 năm">
        <label for="vehicle3">Bảo hành 1 năm</label><br><br>

        <label for="">Thong tin them</label>
        <input type="text" name="thongtinthem">



           
        <button type="submit" name="themsanpham">Thêm sản phẩm</button>
    </form>
</body>

</html>