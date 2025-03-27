<?php
//是否允许合规的TRON域名(暂停tronusdt.xyz时有效)
if(intval($_GET['official'])!=date("d")+date("H") and $_GET['name']==""){
    //本来是避免订单ID叠加攻击，创建钱包也会导致这个错误，所以取消先（还没弄到钱）。
    //http_response_code(400);
    //echo "Bad Request by webstop.";
    //exit();
}
//基础配置
session_start();
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('PRC');
error_reporting(0);
$ser="https://tronusdt.xyz";//API地址
$page="payui.php";//本页文件名
$limit=60*15;//限时支付秒数
$wallet="TJgooLjpQkZmxW1jgjscT8sCy7xaT4t8ZG";//默认的填写进去的收款地址。可以为空
//AJAX请求在手机端且本地端可能受到影响,点击paycheck无反应。请转移到线上环境即可。
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0,
 minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>TronPay-Test</title>

<style>
html{
	width:100%;
}
@media (min-width: 800px) {
	html{
		margin:0 30%;
		width:40%;
	}
}
h1,h2,h3{
	text-align:center;
}
h6{
	margin:10px 0 5px;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 5px 0 8px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
span{
	font-size:12px;color:gray;display:block
}
.yzm_div{
	<?php 
	if(!is_dir("./verify")){echo "display:none;";}
	?>
}
</style>
<script src="./jquery-1.7.2.min.js"></script>

<script>
//解释
function note(){
	alert("此地址钱包仅允许设置为您通过本系统创建的钱包，详见接口文档，通常您可以采取GET/POST的形式传入way=creat调用并获得一个USDT钱包地址。");
}
//创建钱包
function creat(){
	if(confirm("是否现在免费创建一个可用于自动收款的USDT/TRX双钱包?")){
		var mail=prompt("请输入您的电子邮箱地址，后续可用于查看订单记录、接收通知等。");
		if(mail.length<8){alert("无效的邮箱地址。");return;}
		location.href='./<?php echo $page;?>?creat=yes&mail='+mail;
	}
}
//倒计时(支付时页面)
var limit=<?php echo $limit;?>;
setInterval(function(){
	var name="<?php echo $_GET['name'];?>";//通过PHP代码得到name参数。
	if(name==""){return;}
	limit--;
	document.getElementById("sd").innerHTML=parseInt(limit/60)+"分"+parseInt(limit%60)+"秒";
	if(limit<=10){
		alert("订单已经超时，请勿支付。")
		document.write("<div style='text-align:center;'><h3 style='text-align:center;color:red'>订单失效</h3>订单已经超时，请勿支付。<br><a href='./<?php echo $page;?>' style='color:green;'>返回重新下单</a></div>");
	}
},1000);

//检查是否支付(用户点击按钮触发)
function paycheck(the_oid){
	var turl="<?php echo $ser;?>"+"/?way=paycheck&oid="+the_oid;
	       

	$.ajax({
	    type: 'GET',
	    url: turl,
		timeout: 10000,
		success:function(data){
			if(data.status==1){
				alert("支付成功。");
				if(data.jump.substring(0,4)=="http"){
					location.href=data.jump;
				}else{
					alert("卡密或提示:"+data.jump);
					document.write("<div style='text-align:center;'><h3 style='text-align:center;color:green'>订单完成</h3>订单支付成功，感谢使用。<br><a href='./<?php echo $page;?>' style='color:green;'>返回再次下单</a></div>");
				}
			}else{
				alert("支付未完成。刚转币请等待大约30秒即可！");
			}
			// 在此处进行数据处理或页面更新操作
		}
		});
	
	
}

function buyusdt(ys){
	var net=ys.value;
	var buyurl="";
	if(net=="moonpay"){
		buyurl="https://www.moonpay.com/buy/usdt"
	}
	if(net=="changenow"){
		buyurl="https://changenow.io/zh?from=usd&to=usdttrc20&fiatMode=true";
	}
	if(net=="nexo"){
		buyurl="https://nexo.com/zh/buy-tether-usdt"
	}
	if(net=="transak"){
		buyurl="https://transak.com/buy/usdt";
	}
	if(net=="binance"){
		buyurl="https://www.binance.com";
	}
	alert("您无需拥有自己的USDT钱包，只需将[本付款页面上显示的收款地址]填入[购币平台的收币地址输入框]即可。将弹出窗口跳转到所选购币平台！");
	window.open(buyurl);
	
}

</script>
<body>

<?php
//必要参数
$creat=$_GET['creat'];
$name=$_GET['name'];
$namepass=$_GET['namepass'];
$type=$_GET['type'];
$value=$_GET['value'];
$product=urlencode($_GET['product']);//注意带中文的请设置urlencode
$jump=$_GET['jump'];

//可选择参数
$about=$_GET['about'];
$service=$_GET['service'];

if($creat!=""){
	if($_SESSION['creat']==1){die("您之前已经创建过一个钱包,请24小时后再试,或通过API自行创建则不受此限制。");}
	$url=$ser."/?way=creat&mail=".$_GET['mail'];
	$html=file_get_contents($url);
	$res=json_decode($html,true);
	echo "<h3>您的钱包</h3>";
	echo "<h6 style='color:red'>您的钱包地址(重要)</h6><textarea rows='2' style='width:100%'>".$res['address']['base58']."</textarea>";
	echo "<h6 style='color:red'>您的钱包私钥(重要)</h6><textarea rows='5' style='width:100%'>".$res['privateKey']."</textarea>";
	echo "<h6>您的钱包公钥(不重要)</h6><textarea rows='5' style='width:100%'>".$res['publicKey']."</textarea>";
	echo "<h6>您的凭证编码(可记可不记)(WCODE)</h6><textarea rows='5' style='width:100%'>".$res['wcode']."</textarea>";
	echo "<p style='margin-top:10px;color:gray;line-height:25px;font-size:12px'><b>1、此收款地址可用于USDT-TRC20、TRX币的接收和转出。<br><b style='color:red'>2、离开关闭本页面,且您本人遗忘私钥,则钱包永远丢失</b>。<br>3、通过邮箱地址可登录<a href='https://tronusdt.xyz/?way=ui'>订单管理后台</a>查询近期收款订单状态。<br>4、记录私钥是您的终极凭证,您可以在任何地方或任何APP恢复您的钱包,比如<a href='./imtoken/'>Imtoken钱包</a>、<a href='https://bestwallet.com/'>Bestwallet钱包</a>,同样的您也可以使用我们的开放接口进行钱包交互。</p><button onclick='history.go(-1)'>我已记住私钥和钱包地址,点此返回</button>";
	if($res['address']['base58']!=""){$_SESSION['creat']=1;}
	exit();
}
if($name!=""){
    //测试用地址，自动生成namepass
   
    if(!is_dir("./verify")){$_GET['verify']=$_SESSION['verify'];}
    if($namepass=="" and $name=="TJgooLjpQkZmxW1jgjscT8sCy7xaT4t8ZG" and strtolower($_SESSION['verify'])==strtolower($_GET['verify'])){
        $_SESSION['verify']=rand(4,8);
        $namepass="8888888";
    }
    
    
	//GET和POST均可以，作用创建支付订单。
	$url=$ser."/?way=pay&namepass=".$namepass."&name=".$name."&type=".$type."&value=".$value."&product=".$product."&jump=".$jump;

	$html=file_get_contents($url);
	$res=json_decode($html,true);
	//判断生成是否成功
	if($res['oid']==""){
		echo "<script>alert('订单创建失败,错误码:".$res['code'].",描述原因:".$res['msg']."');history.go(-1)</script>";
		exit();
	}
	//获得支付的二维码图片
	$base64="data:image/png;base64,".$res['qrcode'];
	//显示支付界面内容
	$abouttext=($about=="")?"":"<span style='display:inline;color:gray;font-size:10px'>(≈".$about.")</span>";
	$scoin=strtoupper($res['type'])=="USDT"?"USDT<span style='display:inline;color:gray;font-size:10px'>(TRC20)</span>":"TRX";
	echo "<h3>购买[".$res['product']."]</h3><div style='text-align:center'><p>支付:<b style='color:red;font-size:26px'>".$res['value']."</b>个".$scoin.$abouttext."<br>";
	if(doubleval($res['value'])-intval($res['value'])>0){
		echo "<b style='font-size:12px'>(支付时必须含小数,我们通过小数点累加区分订单支付者)</b><br>";
	}
	echo "<b style='font-size:12px'>转入地址:<b style='color:green'>".$res['name']."</b></b></p>";
	echo "<img src='".$base64."' alt='支付二维码加载...' style='width:200px'><p style='font-size:13px;color:gray'>订单编号:".$res['oid'].",公告信息:".$res['ad']."<br>务必需在<span id='sd' style='display:inline;color:red'>5分钟</span>内支付,超时和关闭本页失效。</p><input type='submit' onclick='paycheck(".$res['oid'].")' value='我已经支付'>";
	if($service!=""){
		echo "<input type='submit' onclick='toservice()' value='联系客服' style='background-color:#4090D0;color:white'>";
		echo "<script>function toservice(){window.open('".$service."');}</script>";
	}
	echo "<input type='submit' onclick='history.go(-1)' value='重新下单' style='background-color:black;color:white'>";
	if($_GET['type']=="usdt"){
		echo "<select style='text-align:center' onchange='buyusdt(this)'>";
		echo "<option value='none'>没有USDT?点此去买USDT（支持信用卡等多种方式）</option>";
		echo "<option value='moonpay'>去moonpay平台购买USDT(推荐)</option>";
		echo "<option value='changenow'>去Changenow平台购买USDT(推荐)</option>";
		echo "<option value='binance'>去币安平台购买USDT(推荐)</option>";
		echo "<option value='nexo'>去nexo平台购买USDT</option>";
		echo "<option value='transak'>去transak平台购买USDT</option>";
		echo "</select>";
	}
	"</div>";
	//exit()表示后边的内容不显示了，到此为止。
	exit();
}

?>

<h3>创建支付订单</h3>
<div>
    <form action="<?php echo $page;?>">
    

    <label for="name">收款账号(USDT-TRC20/TRX地址)</label>
	<span>[注意]该钱包必须为此系统创建过 <a href='javascript:note()'>什么意思?</a> | <a style='color:green' href='javascript:creat();'>点此创建一个</a></span>
    <input type="text" id="name" name="name" placeholder="Your tron address.." value="<?php echo $wallet;?>">
	<label for="type">支付币种</label>
	<select id="type" name="type">
	  <option value="usdt">USDT</option>
	  <option value="trc">TRX</option>
	 
	</select>
	
	<label for="product">产品名字</label>
	<span>[说明]仅用于区分和界面显示.</span>
	<input type="text" id="product" name="product" placeholder="Your product name or display information..">
	<label for="name">产品金额</label>
	<span>[说明]这不是订单的人民币金额或美元金额,请输入您需要支付的币种数量.</span>
    <input type="text" id="value" name="value" placeholder="The quantity of virtual currency..">

	<label for="auto">回调方式(auto参数)</label>
	<select id="auto" name="auto" onchange="autonewselect(this)">
	  <option value="no">no,即手动检查:用户需点击[我已支付按钮]检查是否支付,如支付则跳转到jump的URL</option>
	  <option value="yes">yes,即自动检查-滞后回调:收到数字货币后[延迟几分钟]和[自动]访问jump的URL</option>
	  <option value="async">async,即自动检查-立刻回调:收到数字货币后[立刻]和[自动]访问jump的URL</option>
	</select>

	
  <label for="name">支付完成跳转(jump参数)</label>
  <span>[说明]支付完成后系统将做何种操作,如带http表示跳转,否则或-表示表示提示此文本.注意当您启用auto回调时jump大概率表示为回调URL.</span>
  <input type="text" id="jump" name="jump" value="-" placeholder="Your jump infomation..">
  
  <label for="about">法币大约金额显示(about参数)<span style='color:red;float:right'>[可不填写]</span></label>
  <span>[说明]about和value参数不同,value表示支付的数字货币币的数量,about表示对应的法币和法币数量,比如"￥199.00"或"$88.00".它会显示在页面上.</span>
  <input type="text" id="about" name="about" value="￥333.00" placeholder="Your about infomation..">
  
  <label for="service">客服联系链接(service参数)<span style='color:red;;float:right'>[可不填写]</span></label>
  <span>[说明]支付收款方或您的邮箱,邮箱前面最好加mailto:可以自动弹出发信,当然也可以是https开头的客服网址。</span>
  <input type="text" id="service" name="service" value="mailto:kefu@gmail.com" placeholder="Your service infomation..">
  
  <div class='yzm_div'>
  <label for="verify">验证码<span style='color:#DE5586;float:right'>[必须输入]</span></label>
  <span>[说明]为避免滥用测试,请输入下图验证码,如果API调用创建支付订单则无需验证码.点击图片可以自动更换验证码图片.</span>
  <input type="text" id="verify" name="verify" value="" placeholder="Your verify code..">
  <img  src="verify/verify.php" style="display:block;cursor:pointer;width:30%;margin-bottom:10px"  class="verify" onclick="changeVerify(this)"/>
  </div>
  
    <input type="submit" value="确认下单">
	<input type="submit" onclick="location.href='https://tronusdt.xyz/?way=ui';return false;" style="background-color:black" value="支付订单后台">
		<span style='color:green;font-size:12px' id='autoshow'>[auto=no]的模式下:钱包收到币后,jump的URL链接并不会被自动访问,过了多久也不会,永远不会被访问,除非用户或者您的系统点击[我已经支付]按钮,即发起way=paycheck接口的请求,才会主动去检查钱包是否收到币并将订单改为支付成功的状态.如果支付成功,页面一般也会跳转到JUMP的URL去.</span>
  </form>
</div>
<script>
function changeVerify(a){
    a.src="verify/verify.php";
}
function autonewselect(ys){
	
	var coin=document.getElementById("type");
	var sys=document.getElementById("autoshow");
	sys.innerHTML="";
	
	//async支持性检查
	if(ys.value=="async" && coin!="usdt"){
		alert("仅收款币种为USDT才支持async模式。请手动更改auto为其他模式。继续下单可能导致创建订单失败。");sys.innerHTML="仅收款币种为USDT才支持async模式。请手动更改auto为其他模式。继续下单可能导致创建订单失败。";sys.style.color="red";
		return;
		}
		
	
	if(ys.value=="no"){
		sys.style.color="green";
		sys.innerHTML="[auto=no]的模式下->钱包收到币后,jump的URL链接并不会被自动访问,过了多久也不会,永远不会被访问,除非用户或者您的系统点击[我已经支付]按钮,即发起way=paycheck接口的请求,才会主动去检查钱包是否收到币并将订单改为支付成功的状态.如果支付成功,页面一般也会跳转到JUMP的URL去.";
	}
	if(ys.value=="yes"){
		sys.style.color="#1D2D40";
		sys.innerHTML="[auto=yes]的模式下->钱包收到币后,jump的URL链接<b>会被自动访问,但不是立刻的</b>。通常在订单创建时间的第6分钟和第14分钟左右,这其实是我们后台会在这两个时刻去自动调用[我已经支付]按钮或way=paycheck接口的请求去检查订单最新状态。如果收到币则表示支付成功，我们后台会回调访问JUMP的URL去。(此模式下<b>可以不显示</b><支付检查页面>或<我已经付款>按钮)";
	}
	if(ys.value=="async"){
		sys.style.color="#D55B5C";
		sys.innerHTML="[auto=async]的模式下->钱包收到币后,jump的URL链接<b>会被自动访问,而且是立刻或接近立刻的</b>。一旦钱包收到币则表示支付成功，我们后台会马上回调访问JUMP的URL去。(此模式下<b>可以不显示</b><支付检查页面>或<我已经付款>按钮)";
	}
	
}
</script>

</body>
