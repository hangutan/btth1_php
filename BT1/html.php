<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Học php </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php 
        if(isset($_POST['hk1'])) $hk1= $_POST['hk1'];
        if(isset($_POST['hk2'])) $hk2 = $_POST['hk2'];
        if(isset($_POST['hk1']) && isset($_POST['hk2'])) $dtb = ($hk1 + $hk2)/2;
        if(isset($_POST['hk1']) && isset($_POST['hk2']))
        {
            if($dtb >= 5){
                $kqht = "Được lên lớp";
            }else{
                $kqht = "Học ngu, ở lại lớp nhé !!";
            }
        }
        if(isset($_POST['hk1']) && isset($_POST['hk2'])){
            if($dtb >=8){
                $xl = "Thằng này học Giỏi";
            }else if($dtb <8 && $dtb >=5){
                $xl = "Thằng này học KHÁ";
            }else{
                $xl="Học YẾU, TỆ , DỐT";
            }
        }
        
    ?>
    <div class="wapper-form">
        <div class="title">KẾT QUẢ HỌC TẬP</div>
        <form method="post" action="">
            <table class="table-form">
                <tr>
                    <td>Điểm HK I</td>
                    <td>
                        <input type="text" name="hk1" value="<?php if(isset($_POST['hk1'])) echo $hk1;?>"/>
                    </td>
                </tr>
                <tr>
                    <td>Điểm HK II</td>
                    <td>
                        <input type="text" name="hk2" value="<?php if(isset($_POST['hk2'])) echo $hk2;?>"/>
                    </td>
                </tr>
                <tr>
                    <td>Điểm trung bình</td>
                    <td>
                        <input type="text" value="<?php if(isset($_POST['hk1']) && isset($_POST['hk2'])) echo $dtb; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>Kết quả học tập</td>
                    <td>
                        <input type="text" value="<?php  if(isset($_POST['hk1']) && isset($_POST['hk2'])) echo $kqht;?>"/>
                    </td>
                </tr>
                <tr>
                    <td>Xếp loại học lực</td>
                    <td>
                        <input type="text" value ="<?php if(isset($_POST['hk1']) && isset($_POST['hk2'])) echo $xl?>"/>
                    </td>
                </tr>
            </table>
            <button type="submit" name="cal">Xem kết quả</button>
        </form>
    </div>
</body>
</html>