<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tong{
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin: 0 617px;
        }
        span{
            font-size: 20px;
            margin: auto;
        }
        .item1{
            display: flex;
            gap:10px;
            .btn{
            border: none;
            outline: none;
            background-color: orange;
            width: 191px;
            height: 30px;
            a{
                text-decoration: none;   
            }
        }
        }
        
    </style>
</head>
<body>
    <div class="tong">
    <span>Vui lòng chọn</span>
    <div class="item1">
        <button class="btn"><a href="index.php?task=danhsachsp">Danh Sách Sản Phẩm</a></button>
        <button class="btn"><a href="index.php?task=themsanpham">Thêm Sản Phẩm </a></button>
    </div>
    
    </div>
   
</body>
</html>