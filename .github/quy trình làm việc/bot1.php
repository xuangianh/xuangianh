<?php




date_default_timezone_set('Asia/Ho_Chi_Minh');
$catkhung="\033[0m";
$khungdo="\033[1;41m";
$khungden="\033[1;40m";
$khungvang="\033[1;43m";
$khungluc="\033[1;42m";
$khungduong="\033[1;44m";
$khunghong="\033[1;45m";
$khungtrang="\033[1;47m";
$khungxam="\033[1;48m";

$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks",$startdate);
$ng= date("D");
$ngay1= date("Y");
$thang= date("m");
$nam= date("d");
$ngay= date("Y/m/d");
$den="\033[1;90m";
$do="\033[1;91m";
$luc="\033[1;92m";
$vang="\033[1;93m";
$xduong="\033[1;94m";
$xduong2="\033[1;96m";
$hong="\033[1;95m";
$trang="\033[1;97m";
$thoigian = date('H:i:s');
$time = date('H:i');
$xam="\033[1;30m"; 
$do="\033[1;31m";
$xanhla="\033[1;32m";
$vang="\033[1;33m";
$xanhduong="\033[1;34m";
$hong="\033[1;35m"; 
$ro="\033[1;36m"; 
$trang="\033[1;37m";
$do="\033[1;31m";
$xl="\033[1;32m";
$vang="\033[1;33m";
$xn="\033[1;34m";
$hong="\033[1;35m";
$nau="\033[1;36m";
$v="0";
$t="0";


@system('clear');


function curl($url, $post = 0, $httpheader = 0, $proxy = 0){ // url, postdata, http headers, proxy, uagent
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_COOKIE,TRUE);
        curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
        curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
        if($post){
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        }
        if($httpheader){
            curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
        }
        if($proxy){
            curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
            curl_setopt($ch, CURLOPT_PROXY, $proxy);
            // curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
        }
        curl_setopt($ch, CURLOPT_HEADER, true);
        $response = curl_exec($ch);
        $httpcode = curl_getinfo($ch);
        if(!$httpcode) return "Curl Error : ".curl_error($ch); else{
            $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            curl_close($ch);
            return array($header, $body);
        }
    }



function xg(){
 echo $xg=" \033[1;35m●▬▬▬๑۩۩๑▬▬▬●●▬▬▬๑۩[\033[1;32m XG - TOOL \033[1;35m]]۩๑▬▬▬●●▬▬▬๑۩۩๑▬▬▬●\n";
 
 
}
function ban(){
$vs="2.0";
 echo $ban="\033[1;34m
┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓ 
┃┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓┃ 
┃┃ \033[1;31m _  _  ___    ____  _____  _____  __ \033[1;33m   ┃            \033[1;34m   ┃┃ 
┃┃ \033[1;31m( \/ )/ __)  (_  _)(  _  )(  _  )(  ) \033[1;33m  ┃ \033[1;42m \033[1;37mSever : ON \033[0m \033[1;34m ┃┃ 
┃┃ \033[1;31m )  (( (_-.    )(   )(_)(  )(_)(  )(__ \033[1;33m ┃ \033[1;32mVersion : $vs \033[1;34m┃┃ 
┃┃ \033[1;31m(_/\_)\___/   (__) (_____)(_____)(____)\033[1;33m ┃            \033[1;34m   ┃┃ 
┃┃                                     \033[1;33m    ┃     \033[1;34m          ┃┃ 
┃┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛┃ 
┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛ 
";
}
function ban1(){
echo $ban1="\033[1;33m
┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓
┃ \033[1;37mBản quyền      :\033[1;32m Xuân Giành \033[1;33m                     ┃
┃ \033[1;37mYoutube        :\033[1;32m XG - Kiếm Tiền Online \033[1;33m          ┃
┃ \033[1;37mSupport Tool   :\033[1;32m Giành Tool  \033[1;33m                    ┃
┃ \033[1;37mZalo           :\033[1;32m 0868116812                   \033[1;33m   ┃    
┃ \033[1;37mGroup Zalo     :\033[1;32m https://zalo.me/g/lgmryh922 \033[1;33m    ┃
┃ \033[1;37mGroup Telegram :\033[1;32m https://t.me/hotrotooll \033[1;33m        ┃
┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛ \n";
}


function get($url,$host){
  return curl($url,'',head($host))[1];
}

function post($url,$data,$host){
  return curl($url,$data,head($host))[1];
}

function head($host){
  $h[]="Host: $host";
 // $h[]="content-type: application/x-www-form-urlencoded";
  $h[]="user-agent: Mozilla/5.0 (Linux; Android 7.0; Redmi Note 4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.152 Mobile Safari/537.36";
  return $h;
}



system('clear');

xg();
ban();
ban1();
echo$xduong."============{ ".$xl."TẠO DỮ LIỆU FILE ".$xduong."}============\n";
usleep(30000);

echo$xduong2."\t  Địa Chỉ Ví Được Lưu Tại File moonbitcoin.json\n";
usleep(30000);

if(!file_exists("moonbitcoin.json")){
while("true"){

//ban();
$api["Walet"]=readline("\033[1;97m Nhập Địa Chỉ Ví BTC FaucetPay     : \033[1;92m");
if($api["Walet"]!=""){
break;
}
}
save("moonbitcoin.json",$api);
//$a=next($ran);
}

$walet=json_decode(file_get_contents("moonbitcoin.json"),true)["Walet"];
system('clear');

function save($data,$data_post){
    if(!file_get_contents($data)){
      file_put_contents($data,"[]");}
    $json=json_decode(file_get_contents($data),1);
    $arr=array_merge($json,$data_post);
    file_put_contents($data,json_encode($arr,JSON_PRETTY_PRINT));
}

function timer($t){
     $timr=time()+$t;
      while(true):
      echo "\r                                                    \r";
      $res=$timr-time();
      if($res < 1){break;}
if($res==$res){
//  $str= str_repeat("\033[1;92m◼",$res)."              \r";
}
      echo " \033[1;30m Đang Chạy \033[1;91m".date('i:s',$res)." ";
      sleep(1);
      endwhile;
}
function timer1($t){
     $timr=time()+$t;
      while(true):
      echo "\r                                                    \r";
      $res=$timr-time();
      if($res < 1){break;}
if($res==$res){
//  $str= str_repeat("\033[1;92m◼",$res)."              \r";
}
      echo " \033[1;97m Hãy Thử Lại Sau \033[1;91m".date('i:s',$res)." ";
      sleep(1);
      endwhile;
}

function slow($str,$t){
$arr = str_split($str);
foreach ($arr as $az){
echo $az;
usleep($t);
}
}

$host="www.moonbitcoins.com";
$url="https://www.moonbitcoins.com/";
$res= get($url,$host);

$host="www.moonbitcoins.com";
$url="https://www.moonbitcoins.com/inc/session.php";
$data="wallet=$walet";
$res= post($url,$data,$host);



$host="www.moonbitcoins.com";
$url="https://www.moonbitcoins.com/dashboard/?id=".$walet;
$res= get($url,$host);

$btc= explode('<',explode('Lifetime <i class="fa fa-calculator" style="float: right;"></i></h5>
<strong>',$res)[1])[0];
$chay3= explode('<',explode('strong id="end-time">',$res)[1])[0];

xg();
ban();
ban1();
echo$xduong."============{ ".$xl."MOONBITCOINS.COM ".$xduong."}============\n";
sleep(2);

$t= $xl."        ĐANG ĐĂNG NHẬP      \r";
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(20000);
}
sleep(1);

if($chay3 == "600"){
 $t= $xl."      ĐĂNG NHẬP THÀNH CÔNG \r";
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(20000);
}
 sleep(2);
 
 
}else{
 
 
 $t= "$do"."      ĐANG NHẶP THẤT BẠI !\n";
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(20000);
}
die();
}
sleep(1);


echo$vang." Số Dư BTC Của Bạn :".$xanhduong."  $btc\n";
echo$xam."۩۩๑▬▬▬●●▬▬▬๑۩۩๑▬▬▬●《".$hong." Bắt Đầu Chạy ".$xam."》●▬▬▬๑۩۩๑▬▬▬●●▬▬▬๑۩۩\n";

while(true){
 
$host="www.moonbitcoins.com";
$url="https://www.moonbitcoins.com/dashboard/?id=".$walet;
$res= get($url,$host);

$chay1= explode("minutes",explode("Try again in 0 hours",$res)[1])[0];

if($chay1>=1){
 $chayy="900";
if($chayy!=""){
timer1($chayy);
}
 
}
$host="www.moonbitcoins.com";
$url="https://www.moonbitcoins.com/dashboard/?id=".$walet;
$res= get($url,$host);

$btc10= explode('<',explode('Lifetime <i class="fa fa-calculator" style="float: right;"></i></h5>
<strong>',$res)[1])[0];
$chay= explode('<',explode('strong id="end-time">',$res)[1])[0];
$ac= explode("'",explode("var amount     = '",$res)[1])[0];

 



if($chay!=""){
timer($chay);
}

$sock = @fsockopen('www.google.com', 80);
if($sock == true){
$host="www.moonbitcoins.com";
$url="https://www.moonbitcoins.com/dashboard/inc/terminal.php?refCus=".$walet;
$data="guv=".$ac;
$res= post($url,$data,$host);


$host="www.moonbitcoins.com";
$url="https://www.moonbitcoins.com/dashboard/?id=".$walet;
$res= get($url,$host);

$thoigian = date('H:i:s');
$v++;

$btc1= explode('<',explode('Lifetime <i class="fa fa-calculator" style="float: right;"></i></h5>
<strong>',$res)[1])[0];

echo$vang." [".$xl.$v.$vang."]".$do."[".$vang.$thoigian.$do."]".$trang."➱".$xduong2." Số Dư BTC : ".$xl." $btc1\n";


sleep(5);
}else{
for($x=3;$x>0;$x--){echo "\r \r";{
 
 echo$vang.$khungdo."      ⚠️      LỖI KHÔNG XÁC ĐỊNH  📴$khungden             \r";
 sleep(1);
}}
for($x=3;$x>0;$x--){echo "\r \r";{

 echo$xl."  📴 📡  Đang Kết Nối Lại                 \r";
 sleep(1);
}}
for($x=3;$x>0;$x--){echo "\r \r";{

 echo$vang."  📴 📡  Đang Kết Nối Lại               \r";
 sleep(1);
}}

}

 
}




