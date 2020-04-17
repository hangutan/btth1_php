<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả bài 2</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="wapper">
        <div class="title">Thông tin phiếu theo dõi</div>
        <div class="k-form">
            <div>
                <p>Tên học sinh : <?php if(isset($_POST['name'])){
                    echo "<span>" .$_POST['name'] ."</span";
                } ?>
                <label>- Lớp : <label><?php if(isset($_POST['class'])){
                    echo "<span>" .$_POST['class'] ."</span";
                } ?>
                </p>
            </div>
            <div>
                <p><label>Ngày đăng kí : </label><?php if(isset($_POST['date'])){
                    echo "<span>" .$_POST['date'] ."</span";
                } ?>
                <label>Giáo viên phụ trách : </label><?php if(isset($_POST['teacher'])){
                    echo "<span>" .$_POST['teacher'] ."</span";
                } ?>
                </p>
            </div>
            <div>
                <p>Những công việc phân công chưa hoàn thành : 
                <?php if(isset($_POST['phancong']))
                    {
                        $req = $_POST['phancong'];
                        $rt = explode("&nbsp;",$req);
                        foreach ($rt as $value) {
                        echo "<pre>";
                        echo $value;
                        echo "</pre>";
                        }
                    }
                ?>
                </p>
            </div>
            <div>
                <p>Cam kết sẽ hoàn thành tại : <?php if(isset($_POST['vc'])){
                    if($_POST['vc'] == 1){
                        echo "Tại lớp .";
                    }else{
                        echo "Về nhà";
                    }
                } ?>
                </p>
            </div>
        </div>
    </div>
</body>
</html>