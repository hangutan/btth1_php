<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="wapper-form">
        <div class="title">THÔNG TIN ĐẶT CHỖ</div>
        <div class="content">
            <div><strong>Thông tin khách hàng</strong></div>
            <p>Họ tên : <?php if(isset($_POST["tenkhach"]))
                { echo "<span class='capitalize'>" .$_POST['tenkhach'] . "</span>";}?>
                Độ tuổi : <?php  if(isset($_POST["dotuoi"])){
                    echo "<span class='age'>" . $_POST['dotuoi'] . "</span>";
                } ?>
                /Giới tính : <?php  if(isset($_POST["gender"])){
                    echo "<span class='gender'>" . $_POST['gender'] . "</span>";
                } ?>
            </p>
            <p>
                Địa chỉ : <?php if(isset($_POST["diachi"])){
                    echo "<span class='diachi'>" . $_POST["diachi"] . "</span";
                }?>
            </p>
            <div><strong>Thông tin đặt chỗ</strong></div>
            <p>Số khách tham gia buổi tiệc : <?php if(isset($_POST["sokhach"])){
                    echo "<span class='sokhach'>" . $_POST["sokhach"] . "</span";
                } ?>
                - Ngày đặt tiệc :  <?php if(isset($_POST["date"])){
                    echo "<span class='date'>" . $_POST["date"] . "</span";
                } ?>
            </p>
            <p>
                Loại tiệc : <?php if(isset($_POST["tiec"])){
                    echo "<span class='tiec'>" . $_POST["tiec"] . "</span";
                } ?>
                Địa điểm :  <?php if(isset($_POST["area"])){
                    echo "<span class='area'>" . $_POST["area"] . "</span";
                } ?>
            </p>
            <div><strong>Các yêu cầu kèm theo</strong></div>
            <?php if(isset($_POST['yeucau']))
                {
                    $requires = $_POST['yeucau'];
                    $rt = explode("&nbsp;",$requires);
                    foreach ($rt as $value) {
                    echo "<pre>";
                    echo $value;
                    echo "</pre>";
                    }
                }
            ?>
            <p>
                <em>Quý khách biết đến nhà hàng chúng tôi thông qua : <?php if(isset($_POST["why"])){
                        echo "<span class='why'>" . $_POST["why"] . "</span";
                    } ?>
                </em>
            </p>
            <p class="show_text">Chúng tôi nhận được thông tin của quý khách vào lúc: 
                <?php 
                    date_default_timezone_set("Asia/Ho_Chi_Minh");
                    echo "<strong>".date("h:i:s") . ' - ' . date('d-m-Y'). "</strong>";
                ?>
            </p>
        </div>
    </div>
</body>
</html>