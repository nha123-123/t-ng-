<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <title>Document</title>
</head>
<style>
    .item1 {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        gap: 10px;
        width: 1000px;
    }

    .inputlabel {
        width: 400px;
        display: flex;
        gap: 10px;
    }

    .inputlabel input {
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 200px;
        height: 35px;
    }

    .inputlabel label {
        margin-top: 3px;
        font-size: 20px;
    }

    .form {
        display: flex;
        flex-direction: column;
    }

    .nutbam {
        border: 1px solid #ccc;
        width: 71px;
        height: 30px;
        border-radius: 5px;
        background: #007bff;
        font-weight: 600;
        color: white;
    }

    table,
    th,
    td {
        border: 1px solid #ccc;
        border-collapse: collapse;
    }
    th {
        width: 200px;
        text-align: center;
    }

    td {
        width: 100px;
        text-align: center;
    }
</style>

<body>
    <!-- <div class="item1">
        <div class="inputlabel">
            <label>Email</label>
            <input type="text">
        </div>
        <div class="inputlabel">
            <label>Email</label>
            <input type="text">
        </div>
        <div class="inputlabel">
            <label>Email</label>
            <input type="text">
        </div>
    </div> -->

    <!-- <div class="form">
        <div class="item1">
            <div class="inputlabel">
                <label>Email address</label>
                <input type="text" placeholder="Email">
            </div>
            <div class="inputlabel">
                <label>Password</label>
                <input type="password" placeholder="Password">
            </div>
        </div>
        <button class="nutbam">Submit</button>
    </div> -->
    <table>
        <thead>
            <th>Id</th>
            <th>Email</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Ghi chú</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>abc@gmail.com</td>
                <td>Duc Bo</td>
                <td>0987654321</td>
                <td>Bac Giang</td>
                <td>Sinh Vien</td>
            </tr>

        </tbody>
    </table>
</body>

</html>