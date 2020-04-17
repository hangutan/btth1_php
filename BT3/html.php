<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT2</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="wapper-form">
        <form method="post" action="./result.php">
            <div class="title">THÔNG TIN ĐẶT CHỖ</div>
            <table class="table-form">
                <tr>
                    <td>Số khách tham gia buổi tiệc :</td>
                    <td><input type="number" name="sokhach"/></td>
                    <td>Ngày :</td>
                    <td><input type="date" name="date" value="1/1/2020"/></td>
                </tr>
                <tr>
                    <td>Loại tiệc trong hôm nay :</td>
                    <td>
                        <input type="checkbox" name="tiec" value="1" checked/>Tiệc sáng 
                        <input type="checkbox" name="tiec" value="2"/>Tiệc trưa
                        <input type="checkbox" name="tiec" value="3"/>Tiệc tối
                    </td>
                </tr>
                <tr>
                    <td>Địa điểm diễn ra :</td>
                    <td>
                        <input type="radio" name="area" value="11" checked/>Trong nhà
                        <input type="radio" name="area" value="22"/>Ngoài trời
                    </td>
                </tr>
                <tr>
                    <td>Tên quý khách :</td>
                    <td><input type="text" name="tenkhach" value=""/></td>
                    <td>Địa chỉ liên lạc :</td>
                    <td><input type="text" name="diachi"/></td>
                </tr>
                <tr>
                    <td>Độ tuổi :</td>
                    <td>
                        <select name="dotuoi">
                            <option value="0 - 19 tuổi">0 - 19 tuổi</option>
                            <option value="19 - 34 tuổi">19 - 34 tuổi</option>
                            <option value="34 - 56 tuổi">34 - 56 tuổi</option>
                            <option value="trên 56 tuổi">trên 56 tuổi</option>
                        </select>
                    </td>
                    <td>Giới tính :</td>
                    <td>
                        <input type="radio" name="gender" value="Nam" checked/>Nam
                        <input type="radio" name="gender" value="Nữ"/>Nữ
                    </td>
                </tr>
                <tr>
                    <td>Quý khách biết nhà hàng qua :</td>
                    <td>
                        <select name="why">
                            <option value="Báo chí">Báo chí</option>
                            <option value="Truyền thanh">Truyền thanh</option>
                            <option value="Miệng thiên hạ">Miệng thiên hạ</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Các yêu cầu của quý khách :</td>
                    <td><textarea name="yeucau"></textarea></td>
                </tr>
            </table>
            <button type="submit">Đặt chỗ</button>
        </form>
    </div>
</body>
</html>