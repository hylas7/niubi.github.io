<!DOCTYPE html>
<html>
<head>
<title><?php echo $aik['sitename'];?>OktMoon</title>
<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
<meta name="Author" contect="OktMoon">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="Robots" contect= "none">
<meta charset="UTF-8">
</head>
<body>
<div class=wrapper>
<span>
Please submit in strict accordance with the following release format. The wrong submission will not get OktMoon<br><br>

</span>
<div>
<form method="POST" action="index.php"> 
     <div><textarea name="msg" rows="4" placeholder="Please leave a message in strict accordance with the format below"></textarea></div>
    <div class=btn>
        		<div class="container"><input name="Btn" type="submit" value="Submit"></div>
        
</form>
</div>

<?php
/**********************************************************************************/

$SAME_FILE = True;  

/***************************************************************************************/
$filename = "./posts.txt";
file_exists($filename) or file_put_contents($filename, "\xEF\xBB\xBF<div class=post><div class=time>".date("m-d h:i")."</div><div class=msg></div></div>");
$original_posts = file_get_contents($filename);
if (isset($_POST["msg"])) {
    $msg = $_POST["msg"];
    ($msg=='') and die('<b>Nothing...</b><br>Please copy the text format below to comment<br>
Transfer amount:2 OKT<br>
Transfer address:0x2eF24AF8E21D9F04652735Deea9a901ACE46c050<br>
OktMoon receiving address:0x0000000000000000000000000000000(Fill in the wallet address where you accept OktMoon tokens)');
    $msg = preg_replace("/\bhttp:\/\/(\w+)+.*\b/",'<a href="$0">$0</a>',$msg);
    preg_match("/(\d{1,2}).(\d{1,2}).##\d{2}:\d{2}##.{3}/u",$original_posts,$matches);
    $post_month= $matches[1];
    $post_day= $matches[2];
    $current_month = date("n");
    $current_day = date("j");
    if($SAME_FILE || ($current_month===$post_month)){
        if($current_day===$post_day && $current_month===$post_month){
            $time = date("m-d h:i");
        }
        else{
            $time = date("m-d h:i");
        }
        $posts = "<div class=post><div class=time>$time</div><div class=msg>$msg</div></div>" . $original_posts;
        file_put_contents($filename, $posts);
        $posts = preg_replace("/(>\d{1,2}.\d{1,2}.)##(\d{2}:\d{2})##(.{3}<)/u","$1<br />$2<br />$3",$posts);
        echo nl2br($posts);
    }
    else{
            $time = date("m-d h:i");
        $posts = "<div class=post><div class=time>$time</div><div class=msg>$msg</div></div>";
        if($post_month==='12' && $current_month==='1'){
            $newfile = "posts_".strval(intval(date("Y"))-1).'_'.$post_month.'.txt';
        }
        else{
            $newfile = "posts_".date("Y").'_'.$post_month.'.txt';
        }
        if (rename($filename, $newfile)){
            file_put_contents($filename, "\xEF\xBB\xBF".$posts);
        }
        else{
            die('rename $filename go $newfile Unsuccessful');
        }
        $posts = preg_replace("/(>\d{1,2}.\d{1,2}.)##(\d{2}:\d{2})##(.{3}<)/u","$1<br />$2<br />$3",$posts);
        echo nl2br($posts);
    }    
    redirect('index.php');
}
else{
    $posts = preg_replace("/(>\d{1,2}.\d{1,2}.)##(\d{2}:\d{2})##(.{3}<)/u","$1<br />$2<br />$3",$original_posts);
    echo nl2br($posts);
}

function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

?>
<script>

!function(){

function n(n,e,t){

return n.getAttribute(e)||t

}

function e(n){

return document.getElementsByTagName(n)

}

function t(){

var t=e("script"),o=t.length,i=t[o-1];

return{

l:o,z:n(i,"zIndex",-1),o:n(i,"opacity",.5),c:n(i,"color","0,0,0"),n:n(i,"count",99)

}

}

function o(){

a=m.width=window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth,

c=m.height=window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight

}

function i(){

r.clearRect(0,0,a,c);

var n,e,t,o,m,l;

s.forEach(function(i,x){

for(i.x+=i.xa,i.y+=i.ya,i.xa*=i.x>a||i.x<0?-1:1,i.ya*=i.y>c||i.y<0?-1:1,r.fillRect(i.x-.5,i.y-.5,1,1),e=x+1;e<u.length;e++)n=u[e],

null!==n.x&&null!==n.y&&(o=i.x-n.x,m=i.y-n.y,

l=o*o+m*m,l<n.max&&(n===y&&l>=n.max/2&&(i.x-=.03*o,i.y-=.03*m),

t=(n.max-l)/n.max,r.beginPath(),r.lineWidth=t/2,r.strokeStyle="rgba("+d.c+","+(t+.2)+")",r.moveTo(i.x,i.y),r.lineTo(n.x,n.y),r.stroke()))

}),

x(i)

}

var a,c,u,m=document.createElement("canvas"),

d=t(),l="c_n"+d.l,r=m.getContext("2d"),

x=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||

function(n){

window.setTimeout(n,1e3/45)

},

w=Math.random,y={x:null,y:null,max:2e4};m.id=l,m.style.cssText="position:fixed;top:0;left:0;z-index:"+d.z+";opacity:"+d.o,e("body")[0].appendChild(m),o(),window.onresize=o,

window.onmousemove=function(n){

n=n||window.event,y.x=n.clientX,y.y=n.clientY

},

window.onmouseout=function(){

y.x=null,y.y=null

};

for(var s=[],f=0;d.n>f;f++){

var h=w()*a,g=w()*c,v=2*w()-1,p=2*w()-1;s.push({x:h,y:g,xa:v,ya:p,max:6e3})

}

u=s.concat([y]),

setTimeout(function(){i()},100)

}();

</script>
</body>
</html>
