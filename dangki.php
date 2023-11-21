<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            width: 300px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="#">
        <h2>Đăng kí</h2>
        <label for="ten">Nhập tên:</label>
        <input type="text" name="ten" id="ten">

        <label for="sdt">Nhập số điện thoại:</label>
        <input type="number" name="sdt" id="sdt">

        <label for="password">Nhập mật khẩu:</label>
        <input type="password" name="password" id="password">

        <label for="confirm_password">Nhập lại mật khẩu:</label>
        <input type="password" name="confirm_password" id="confirm_password">

        <label for="ngaysinh">Ngày sinh:</label>
        <input type="date" name="ngaysinh" id="ngaysinh">

        <label>Giới tính:</label>
        <input type="radio" name="gioitinh" id="gioitinh_nam">
        <label for="gioitinh_nam">Nam</label>

        <input type="radio" name="gioitinh" id="gioitinh_nu">
        <label for="gioitinh_nu">Nữ</label>

        <button type="submit">Gửi</button>
    </form>
</body>
</html>