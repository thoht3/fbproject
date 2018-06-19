
<?php
if((sizeof($course['courses'])) != NULL){
    $i=0;
    while ($i<(sizeof($course['courses']))) {
        ?>
<!DOCTYPE html>
<html>
<head>
    <link href="<?=base_url()?>sss.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="wrapper1">
            <div class="left">
                <div class="left1">
                    <div class="left-img">
                        <img class="book" onload="callme()" src="<?=base_url()?>book.jpg">
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="right-top">
                    <div class="right-top-left">
                        <p class="right-top-left-1"><?php echo($course['courses'][$i]['courseid']) ?></p>
                        <p class="right-top-left-2"><?php echo($course['courses'][$i]['course_fullname']) ?></p>
                    </div>
                    <div class="right-top-right">
                        <span class="right-top-right-1"><?php echo($course['courses'][$i]['dateopen']) ?></span>
                    </div>
                </div>
                <div class="right-bot">
                    <div class="right-bot-up">
                        <div class="right-bot-up-left">
                            <p class="right-bot-up-left-1">GIẢNG VIÊN</p>
                            <p class="right-bot-up-left-2">Chưa có</p>
                        </div>
                        <div class="right-bot-up-space"></div>
                        <div class="right-bot-up-right"></div>
                    </div>
                    <div class="right-bot-down">
                        <div class="right-bot-down-left">
                            <p class="right-bot-down-left-1">NHIỆM VỤ HỌC TẬP</p>
                        </div>
                        <div class="right-bot-down-right">
                            <p class="right-bot-down-right-1">CHƯA TẠO LỊCH TUẦN</p>
                            <button type="button" class="button">VÀO LỚP ></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php 
   $i=$i+1;
    }
}else {
    echo 'Khong co du lieu!!!';
}
?>