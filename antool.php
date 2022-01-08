<?php
//tuasnalamtoolnay no copyright
error_reporting(E_WARNING);
error_reporting(0);
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$yellow = "\033[0;33m";
$white = "\033[0;33m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$do="\033[1;91m";
$maufulldo= "\e[1;47;31m";
$mullxanh= "\e[1;47;34m";
$res="\033[0m";
$red="\e[1;31m";
$pink="\e[1;35m";
$green="\e[1;32m";
$yellow="\e[1;33m";
$y2="\033[0;33m";
$white= "\033[0;37m";
$cyan= "\e[1;36m";
$blue="\e[1;34m";
$ngreen="\033[42m";
$ngblack="\033[40m";
$nen="\033[1;47;1;34m";
date_default_timezone_set("Asia/Ho_Chi_Minh");
$device = php_uname('r');
//logo
print "\033[1;93m
▄▀█ █▄░█   ▀█▀ █▀█ █▀█ █░░
█▀█ █░▀█   ░█░ █▄█ █▄█ █▄▄\n";
//kiểm tra mạng
print"\033[1;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
if (!$sock = @fsockopen('www.google.com', 80)) {
    exit ("\033[1;91m[\033[1;92m An-Tool \033[1;91m] \033[1;97m=> \033[1;91mVui Lòng Bật Kết Nối Wifi Hoặc 4G.\n");
}else {
  $A = "\033[1;91m[\033[1;92m An-Tool \033[1;91m] \033[1;97m=> \033[1;92mĐang Kiểm Tra Sever...";
  $B = strlen($A);
  for ($x = 0; $x < $B; $x++) {
    echo $A[$x];
    usleep(5000);
  }
}
sleep(5);
echo "\r";
if (!$sock = @fsockopen('www.google.com', 80)) {
    exit ("\033[1;91m[\033[1;92m An-Tool \033[1;91m] \033[1;97m=> \033[1;91mVui Lòng Bật Kết Nối Wifi Hoặc 4G.\n");
}else {
  $C = "\033[1;91m[\033[1;92m An-Tool \033[1;91m] \033[1;97m=> \033[1;92mKiểm Tra Sever Hoàn Tất.";
  $D = strlen($C);
  for ($x = 0; $x < $D; $x++) {
    echo $C[$x];
    usleep(5000);
  }
}
sleep(5);
echo "\r";
if (!$sock = @fsockopen('www.google.com', 80)) {
    exit ("\033[1;91m[\033[1;92m An-Tool \033[1;91m] \033[1;97m=> \033[1;91mVui Lòng Bật Kết Nối Wifi Hoặc 4G.\n");
}else {
  $E = "\033[1;91m[\033[1;92m An-Tool \033[1;91m] \033[1;97m=> \033[1;92mĐang Vào Tool .\n";
  $G = strlen($E);
  for ($x = 0; $x < $G; $x++) {
    echo $E[$x];
    usleep(5000);
  }
}
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."TOOL GỘP".$do."[".$vang."^^".$do."] ".$luc."An - Tool\n";
//apikey free tuấn
$a=date('d'); // 
        $b=date("m");
        $thoigian=date('d/m');
$day = [];
$day= date('d-m-y');
$today = date("d-m-y");
$d = date("d-m");
$color2=array($a+$b+3740+$a*$b+49827);
$cl1=$color2[array_rand($color2)];

$color3=array($a+$b+3740+$a*$b+49827);
$cl2=$color3[array_rand($color3)];

$color4=array($a+$b+3740+$a*$b+49827);
$cl3=$color4[array_rand($color4)];

$color5=array($a+$b+3740+$a*$b+49827);
$cl4=$color5[array_rand($color5)];
$key = "$cl1"."$cl2"."$cl3"."$cl4";
$long_url = urlencode("https://antoolvip.000webhostapp.com/keytool.php?key=$key");
$api_token = '477cf16ae7095ebc3025ba9b7dd34bf1e373fea0';
$api_url = "https://link1s.com/api?api={$api_token}&url={$long_url}";
$result = @json_decode(file_get_contents($api_url), true);
$checkkey = file_get_contents(" https://antoolvip.000webhostapp.com/keytool.php?key=$key");
$d = date("d-m");
$_check = file_exists("keylikelvb$d.txt");
echo $BGreen."Truy Cập Vào Link : $BWhite".$result["shortenedUrl"]."".$BGreen." Để Lấy Key Miễn Phí\n";
echo "\033[1;31m[\033[1;33mTHÔNG BÁO\033[1;31m]\033[1;32m Đây Là Tool Free. Key Tool Phải Lấy Lại Mỗi Ngày Nhé \n";
if ($_check !='1'){
$gh = date("d-m", strtotime("yesterday"));
$yt = "keylikelvb$gh.txt";
$_check2 = file_exists("$yt");
if($_check2==1){
  unlink("$yt");
}
for($j = 3;$j> 0;$j--){
  echo $BCyan."Chuyển Hướng Đến Trang Lấy Key Sau $BCyan".$j;
  sleep(1);
  echo "\r";
  echo "                                          \r";
}
system("termux-open-url ".$result["shortenedUrl"]."");
echo $BWhite."- - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
    echo " \033[1;33m[\033[1;35mWARNING\033[1;33m] \033[1;32m Nhập Key Miễn Phí Đã Lấy : $BWhite";
    $keyy = trim(fgets(STDIN));
    }
if ($_check =='1'){
  $keyy = file_get_contents("keylikelvb$d.txt");
  $vt = 1;
  echo $BGreen."Đang Lấy Key...";
  sleep(2);
  echo "\r                                         \r";
}
if($keyy == ''){
  echo $BRed."Key Sai Rồi, Vào Link Phía Trên Để Lấy Key\n";
  exit;
}
  if($keyy == $key)
      {
             echo $BGreen."Key Hợp Lệ\n";
             $mf = fopen("keylikelvb$d.txt", "w");
             fwrite($mf, $keyy);
             fclose($mf);
      }
      else
      {
           echo $BRed."Key Sai Rồi, Vào Link Phía Trên Để Lấy Key\n";
           exit;
      }
//banner
@system('clear');
date_default_timezone_set("Asia/Ho_Chi_Minh");
print"\033[1;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
print "\033[1;93m
▄▀█ █▄░█   ▀█▀ █▀█ █▀█ █░░
█▀█ █░▀█   ░█░ █▄█ █▄█ █▄▄\n";
echo "\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\033[1;92m==\033[1;93m\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\033[1;92m=\033[1;93m=\n";
for($v=0;$v<= 26;$v++){
    echo "\033[1;37m▂";
    echo "\033[1;36m▂";
}
echo "\033[1;37m▂";
echo"\n\n";
//tds
echo "\033[1;37m▂";
echo"\n";
echo $green."╔════════════════╗\n";
echo $green."║ $hong Trao Đổi Sub $ngblack".$green." ║\n";
echo $green."╚════════════════╝\n";
echo $do."[".$luc."An".$do."] ".$trang."~>>> ".$green."Nhập ".$do."[".$vang."1".$do."]".$luc." Chọn Tool TDS Token\n";
echo $do."[".$luc."An".$do."] ".$trang."~>>> ".$green."Nhập ".$do."[".$vang."2".$do."]".$luc." Chọn Tool TDS Cookie\n";
echo "\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\n";
//tuongtaccheo
echo $green."╔══════════════════╗\n";
echo $green."║ $y2 Tương Tác Chéo $ngblack".$green." ║\n";
echo $green."╚══════════════════╝\n";
echo $do."[".$luc."An".$do."] ".$trang."~>>> ".$green."Nhập ".$do."[".$vang."3".$do."]".$luc." Chọn Tool TTC Token\n";
echo $do."[".$luc."An".$do."] ".$trang."~>>> ".$green."Nhập ".$do."[".$vang."4".$do."]".$luc." Chọn Tool TTC Cookie\n";
echo "\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\033[1;93m-\033[1;92m-\n";
//chonchedo
echo $do."[".$luc."An".$do."] ".$trang."=> ".$luc."Vui Lòng Nhập Chế Độ: $vang";
$chay = trim(fgets(STDIN));
if($chay=='1'){
  $connected = @fsockopen("www.google.com", 80); 
  if ($connected){
  eval(file_get_contents('https://run.mocky.io/v3/695091e0-66ac-4193-af4b-ed1245c7f6c4'));
  }else{
    echo $white." ➻❥ ".$red."Lỗi Mạng Hoặc Server Không Phản Hồi\n";
    exit;
  }
}else if($chay=='2'){
  $connected = @fsockopen("www.google.com", 80); 
  if ($connected){
    eval(file_get_contents('https://run.mocky.io/v3/0af16689-061c-424d-8946-1c7e48a5fc44'));
  }else{
    echo $white." ➻❥ ".$red."Lỗi Mạng Hoặc Server Không Phản Hồi\n";
    exit;
  }
}
else if($chay=='3'){
  $connected = @fsockopen("www.google.com", 80); 
  if ($connected){
    eval(file_get_contents('https://run.mocky.io/v3/ea044585-a73a-4491-8b52-11b347bfea5b'));
  }else{
    echo $white." ➻❥ ".$red."Lỗi Mạng Hoặc Server Không Phản Hồi\n";
    exit;
  }
}else if($chay=='4'){
  $connected = @fsockopen("www.google.com", 80); 
  if ($connected){
    eval(file_get_contents('https://run.mocky.io/v3/dd547dc9-d3f6-49d3-8d03-f2f876f86357'));
  }else{
    echo $white." ➻❥ ".$red."Lỗi Mạng Hoặc Server Không Phản Hồi\n";
    exit;
  }
function banner(){
echo "\033[1;93m
▄▀█ █▄░█   ▀█▀ █▀█ █▀█ █░░
█▀█ █░▀█   ░█░ █▄█ █▄█ █▄▄\n";
//kiểm tra mạng
print"\033[1;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
}
function lay($txt) {
$head[] = "user-agent:Mozilla/5.0 (Linux; Android 10; CPH1933) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Mobile Safari/537.36";
$head[] = "content-type:application/x-www-form-urlencoded; charset=UTF-8";
curl_setopt($ch, CURLOPT_PORT, "443");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_ENCODING, "");
curl_setopt($ch,CURLOPT_TIMEOUT,10);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
$result = curl_exec($ch);
curl_close($ch);
return $result;
}
}







