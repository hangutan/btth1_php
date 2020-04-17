<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT2</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="wapper">
        <form method="post" action="./result.php" class="table-form">
            <div class="title">THEO DÕI HỌC TẬP</div>
            <div class="form-td">
                <div>
                    <label>Họ tên học sinh :</label>
                    <input type="text" name="name"/>
                </div>
                <div>
                    <label>Giáo viên phụ trách :</label>
                    <input type="text" name="teacher"/>
                </div>
                <div>
                    <label>Lớp :</label>
                    <input type="text" name="class"/>
                    <label>Ngày :</label>
                    <input type="date" name="date"/>
                </div>
                <div>
                    <label>Những việc phân công chưa làm : </label>
                </div>
                <div>
                    <textarea name="phancong" rows="3"></textarea>
                </div>
                <div>
                    <label>Chọn hình thức hoàn thành </label>
                </div>
                <div>
                    <input type="checkbox" name="vc" value="1" checked/>Những việc chưa làm sẽ được hoàn thành ngay tại lớp<br/>
                    <input type="checkbox" name="vc" value="2"/>Sẽ hoàn thành tại nhà và nộp sau
                </div>
            </div>
            <button type="submit">Ghi nhận</button>
        </form>
    </div>
</body>
</html>