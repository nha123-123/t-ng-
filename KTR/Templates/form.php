<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form them SP</title>
	<style>
	body{
		width:500px ;
		height: 307;
		border:2px  solid;
	float: left;
	margin-left: 650px;
	}	
h1{
	padding:19px;
	margin-left: 125px;

	font-weight: bold;
	font-family: time new romans;
	font-size: 29px;
}
form{
	width:397px ;
	padding: 12px;
}

input{
	float: right;
}
select{
	
	float: right;
}
form .n{
	display: flex;
	margin-left: 220px;

}
label{
	padding: 10px;
	font-size: 21px;
}



	</style>
</head>
<body>
<form> 
<h1>Sửa sản phẩm</h1>
  <form action="index.php?task=addProduct" method="POST" >
            <label >Tên sản phẩm</label>
            <input type="text" id="productName" name="productName"><br>
    
            <label >Nhà sản xuất</label>
            <select id="ma_nhasx" name="ma_nhasx"> <!-- Sửa tên trường thành "ma_nhasx" -->
                        <option value="1">apple</option> <!-- Thêm các lựa chọn cho trường "Nhà sản xuất" -->
                        <option value="2">sámung</option>
                        <!-- Thêm các lựa chọn khác nếu cần -->
                    </select><br>

    <label >Ngày SX</label>
            <input type="number" id="quantity" name="quantity"><br>

            <label >Đơn giá</label>
            <input type="number" id="price" name="price"><br>
           
    
            
    
          <div class="n"> <button type="submit" name="getPageForm" class="btn btn-primary btn-lg">Them</button>
            <button type="button">Quay lại</button>
            </div>
        </form>







</form>
</body>
</html>