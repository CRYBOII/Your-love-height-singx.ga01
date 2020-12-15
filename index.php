<?php
$str = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $last = substr($str, strrpos($str, '/') + 1);
  $lasg = urldecode($last);
  $ddc = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


$directory = '/storage/ssd5/986/2048986/public_html/images/';
if ($handle = opendir($directory)) { 
    while (false !== ($fileName = readdir($handle))) {
        $dd = explode('.', $fileName);
        $ss = str_replace('.jpg.jpg','.jpg',$dd[0]);
        $newfile = strtolower($ss.'.'.$dd[1]);
        rename($directory . $fileName, $directory.$newfile);
    }
    closedir($handle);
}

$height = 300;
$width = 300;
$fontsize = 100;
$fontsize2 = 60;
if (!isset($String))
$String = rand(150,190)."cm";
$String2 = "เเฟนคุณจะสูง";
$String3 = $lasg ; 
$im = imagecreate($width, $height );
$blue = imagecolorallocate($im,255,255,255);
$green = imagecolorallocate($im,0,0,0);
$font = "/storage/ssd5/986/2048986/public_html/LucidaTypewriterBold.ttf";
$textwidth = $width;
while (1){
    $box = imageTTFbbox( $fontsize,0, $font, $String );
    $textwidth =  abs( $box[2] );
    $textbodyheight = (abs($box[7]))-2;
    if ( $textwidth < $width - 20 )
        break;
    $fontsize--;
}
$Xcenter = (int)($width/2);
$Ycenter = (int)($height/1.5 );
imageTTFtext($im, $fontsize, 0,(int) ($Xcenter-($textwidth/2)),(int)($Ycenter+(($textbodyheight)/2) ),
             $green, $font, $String );
while (2){
    $box = imageTTFbbox( $fontsize,0, $font, $String2 );
    $textwidth =  abs( $box[2] );
    $textbodyheight = (abs($box[7]))-3;
    if ( $textwidth < $width - 20 )
        break;
    $fontsize--;
}
$Xcenter = (int)($width/3.8 );
$Ycenter = (int)($height/2.2 );
imageTTFtext($im, $fontsize, 0,(int) ($Xcenter-($textwidth/4)),(int)($Ycenter+(($textbodyheight)/3) ),
             $green, $font, $String2 );
while (3){
    $box = imageTTFbbox( $fontsize2, 0, $font, $String3 );
    $textwidth =  abs( $box[2] );
    $textbodyheight = (abs($box[7]))-3;
    if ( $textwidth < $width - 20 )
        break;
    $fontsize2--;
}
$Xcenter = (int)($width/2 );
$Ycenter = (int)($height/5.6 );
imageTTFtext($im, $fontsize2, 0,(int) ($Xcenter-($textwidth/2)),(int)($Ycenter+(($textbodyheight)/2) ),
             $green, $font, $String3 );


imagegif($im,"images/".$lasg.".jpg");
ImageDestroy ($im);
$regke = '/^([A-Za-z]+)/';
$regk = '/^()/';
$reg = '/^([ก-๙]+)/';
if (preg_match($regk,$lasg)) {
        echo "<meta property='og:title' content='💢💢💢'>";
        echo "<meta property='og:image' content='kuy.jpg'>";
    }elseif  (preg_match($reg,$lasg)) {
        echo "<meta property='og:title' content='จริงป่ะ?คลิ๊กดิ!!🌞🔥'>";
        echo "<meta property='og:image' content='http://singx.ga/images/".$last.".jpg'>";
    }elseif (preg_match($regke,$lasg)){
        echo "<meta property='og:title' content='🔧ต้องใส่ชื่อภาษาไทยค่ะ!!🔧'>";
        echo "<meta property='og:image' content='wrong.jpg'>"; 
    }else{
       echo "<meta property='og:title' content='🔧คุณใส่ชื่อเล่นไม่ถูกต้องค่ะ!!🔧'>";
        echo "<meta property='og:image' content='wrong.jpg'>"; 
}


$path = '/storage/ssd5/986/2048986/public_html/images/';
if ($handle = opendir($path)) {

    while (false !== ($file = readdir($handle))) { 
        $filelastmodified = filemtime($path . $file);
        //24 hours in a day * 3600 seconds per hour
        if((time() - $filelastmodified) > 20*50)
        {
           unlink($path . $file);
        }

    }

    closedir($handle); 
}


?>
<meta property="og:type" content="article" />
<meta property="og:url" content="http://singx.ga/<?php echo $lasg;?>"/>
<meta property="og:description" content="กดที่นี่เพื่อดูเพิ่มเติม💓"/>
<title>♥️เนื้อคู่คุณจะสูง?</title>
 <link href="hop.css" rel="stylesheet">
 <script src="//code.jquery.com/jquery.js"></script>
<script>
    function showModal(id) {   
		$('#'+id).fadeIn('slow');
		//$(this).fadeIn('slow');
	}
	function hideModal(id) {
		$('#'+id).fadeOut();
	}

$(document).ready(function() {
    var text = "";
    var count = 0;
    var maxspeed = 600;

    function typeit(tweet) {
        text = tweet;
        type();
    }

    function character(start, end, text) {
        return text.substring(start, end);
    }

    function type() {
        var random = Math.floor(Math.random() * maxspeed);
        setTimeout(type, random);
        $('.headline').append(character(count, count + 1, text));
        count++;
    }

    type();

    typeit(" สวัสดีครับ <?php echo $lasg;?>  ขอบคุณที่ช่วยไลค์  เเละเเชร์");

});
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=110209929608249";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<center><div class="headline"></div>
<div class="subtitle instructions" style="width: 270px;font-size:0.9em;color:gray;">singx.ga เป็นเกมส์ที่ให้ เล่นฟรี บนเฟสบุ๊ค
เมื่อคุณคอมเมนต์ มันจะบอก ความสูงของเนื้อคู่คุณ ลองเเชร์ เเล้วดูที่หน้าวอลตัวเองสิ</br>...............................................</br>
หากท่านอยากรับเกมส์เจ๋งๆก่อนใคร  <br> 💗กดติดตามที่ปุ่มด้านล่างนะครับ💗<br><br>
<center><div class="fb-follow" data-href="https://www.facebook.com/ta.znug" data-layout="button_count" data-size="large" data-show-faces="true"></div></center>
        <!--<span style="color:silver;"><br><br><b>Share</b> then<br> check your Facebook wall.</span>--></div></center>
 <div class="animated bounce" style="font-size: 70pt; text-align: center; margin: 0 auto; margin-top: 30px;">👇</div>
   <center> <a style="text-decoration: none;" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.facebook.com/photo.php?fbid=1932287536995194"><button class="big-button" style="display:block;margin: 0 auto;">
    อยากรู้เเชร์เลย
  </button>    </a></center>
   <div class="subtitle"><span style="font-weight:300;color:#737373;line-height:40px;font-size:0.8em;">Featured on</span><br><img src="http://i.imgur.com/ujAXDxl.png"></div>
