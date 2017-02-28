<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
<?php
// include function files for this application
require_once('function_gather.php');
session_start();


//create short variable names
$username = $_POST['username'];
$passwd = $_POST['passwd'];
if ($username && $passwd) {
// they have just tried logging in
  try  {
    login($username, $passwd);
    // if they are in the database register the user id
    $_SESSION['valid_user'] = $username;
  }
  catch(Exception $e)  {
    // unsuccessful login
    do_html_header('Problem:');
    echo 'You could not be logged in.
          You must be logged in to view this page.';
    do_html_url('login.php', 'Login');
    do_html_footer();
    exit;
  }
}

check_valid_user();
$user=$_SESSION['valid_user'];

$filename='data/'.$user.'.txt';
$fp=fopen($filename,'r')or die("unable to open file");
$line=fgets($fp);
$info=explode(' ', $line);

$ID=$info[0];	
$username=$info[1];
if($info[2]=='0'){
	$gender='先生';
}
else{
	$gender='女士';
}
$age=$info[3];
$shuzhangya=$info[4];
$shousuoya=$info[5];
$xinlv=$info[6];
$shengao=$info[7];
$xiongwei=$info[8];
$yaowei=$info[9];
$tunwei=$info[10];
$yaotunbi=$info[11];
$tizhong=$info[12];
$tizhipercent=$info[13];
$zuoweitiqianqu=$info[14];
$woli=$info[15];
$baibizongtiaogaodu=$info[16];
$chayaozongtiaogaodu=$info[17];
$wuchengwu=$info[18];
$antusheng=$info[19];
$BMI=$info[20];
$maxo2=$info[21];



echo "<div id='logo'>";
echo "<img src='title.png'>";
echo "上海交通大学运动工程中心";
echo "</div>";
echo "<div class='prefix'>";
echo $username.' '.$gender;
echo "</div>";
echo "<div class='tab_menu'>";
echo "<ul>";
echo "<li class='on'>身体成分</li>";
echo "<li>心肺功能</li>";
echo "<li>身体素质</li>";
echo "<ul>";
echo "</div>";

echo "<div class='tab_box'>";
echo "<div class='box1'>";
echo "<p>身高:$shengao</p>";
echo "<p>体重:$tizhong</p>";
echo "<p>BMI:$BMI</p>";
echo "<p>体脂率:$tizhipercent</p>";
echo "<p>胸围:$xiongwei</p>";
echo "<p>腰围:$yaowei</p>";
echo "<p>臀围:$tunwei</p>";
echo "<p>腰臀比:$yaotunbi</p>";
echo "</div>";
echo "<div class='box2'>";
echo "<p>收缩压/舒张压:$shuzhangya / $shousuoya</p>";
echo "<p>心率:$xinlv</p>";
echo "<p>最大摄氧量:$maxo2</p>";
echo "</div>";
echo "<div class='box3'>";
echo "<p>握力:$woli</p>";
echo "<p>坐卧体前屈:$zuoweitiqianqu</p>";
echo "<p>摆臂纵跳高度:$baibizongtiaogaodu</p>";
echo "<p>叉腰纵跳高度:$chayaozongtiaogaodu</p>";
echo "<p>5*5折返跑:$wuchengwu</p>";
echo "<p>安徒生测试距离:$antusheng</p>";
echo "</div>";
echo "</div>";


// give menu of options
display_user_menu();

do_html_footer();
?>
<script type='text/javascript' src='jquery-3.0.0.min.js'></script>
<script type='text/javascript' src='home.js'></script>
</body>
</html>



