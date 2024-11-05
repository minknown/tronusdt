<?php
//基础配置
session_start();
header('Content-Type: text/html; charset=utf-8');
$ser="https://tronusdt.xyz";//API地址
$page="payui.php";//本页文件名
$limit=60*15;//限时支付秒数
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
  padding: 14px 20px;
  margin: 8px 0;
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

</style>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>

<script>
//解释
function note(){
	alert("此地址钱包仅允许设置为您通过本系统创建的钱包，详见接口文档，通常您可以采取GET/POST的形式传入way=creat调用并获得一个USDT钱包地址。");
}
//创建钱包
function creat(){
	if(confirm("是否现在免费创建一个可用于自动收款的USDT/TRX双钱包?")){
		location.href='./<?php echo $page;?>?creat=yes';
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
</script>
<body>

<?php
$creat=$_GET['creat'];
$name=$_GET['name'];
$type=$_GET['type'];
$value=$_GET['value'];
$product=urlencode($_GET['product']);//注意带中文的请设置urlencode
$jump=$_GET['jump'];


if($creat!=""){
	if($_SESSION['creat']==1){die("您之前已经创建过一个钱包,请24小时后再试,或通过API自行创建则不受此限制。");}
	$url=$ser."/?way=creat";
	$html=file_get_contents($url);
	$res=json_decode($html,true);
	echo "<h3>您的钱包</h3>";
	echo "<h6 style='color:red'>您的钱包地址(重要)</h6><textarea rows='2' style='width:100%'>".$res['address']['base58']."</textarea>";
	echo "<h6 style='color:red'>您的钱包私钥(重要)</h6><textarea rows='5' style='width:100%'>".$res['privateKey']."</textarea>";
	echo "<h6>您的钱包公钥(不重要)</h6><textarea rows='5' style='width:100%'>".$res['publicKey']."</textarea>";
	echo "<h6>您的凭证编码(可记可不记)(WCODE)</h6><textarea rows='5' style='width:100%'>".$res['wcode']."</textarea>";
	echo "<p style='margin-top:10px;color:gray;line-height:25px;font-size:12px'><b>1、此收款地址可用于USDT-TRC20、TRX币的接收和转出。<br><b style='color:red'>2、离开关闭本页面,且您本人遗忘私钥,则钱包永远丢失</b>。<br>3、记录私钥是您的终极凭证,您可以在任何地方或任何APP恢复您的钱包,比如<a href='https://www.token.im/'>Imtoken钱包</a>、<a href='https://bestwallet.com/'>Bestwallet钱包</a>,同样的您也可以使用我们的开放接口进行钱包交互。</p><button onclick='history.go(-1)'>我已记住私钥和钱包地址,点此返回</button>";
	if($res['address']['base58']!=""){$_SESSION['creat']=1;}
	exit();
}
if($name!=""){
	//GET和POST均可以，作用创建支付订单。
	$url=$ser."/?way=pay&name=".$name."&type=".$type."&value=".$value."&product=".$product."&jump=".$jump;
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
	echo "<h3>购买[".$res['product']."]</h3><div style='text-align:center'><p>支付:<b style='color:red;font-size:26px'>".$res['value']."</b>个".strtoupper($res['type'])."<br><b style='font-size:12px'>(支付时必须含小数,我们通过小数点累加区分订单支付者)</b><br><b style='font-size:12px'>转入地址:<b style='color:green'>".$res['name']."</b></b></p>";
	echo "<img src='".$base64."' alt='支付二维码加载...' style='width:200px'><p style='font-size:13px;color:gray'>订单编号:".$res['oid'].",公告信息:".$res['ad']."<br>务必需在<span id='sd' style='display:inline;color:red'>5分钟</span>内支付,超时和关闭本页失效。</p><input type='submit' onclick='paycheck(".$res['oid'].")' value='我已经支付'><input type='submit' onclick='history.go(-1)' value='重新下单' style='background-color:black;color:white'></div>";
	//exit()表示后边的内容不显示了，到此为止。
	exit();
}

?>

<h3>创建支付订单</h3>
<div>
  <form action="<?php echo $page;?>">
    

    <label for="name">收款账号(USDT-TRC20/TRX地址)</label>
	<span>[注意]该钱包必须为此系统创建过 <a href='javascript:note()'>什么意思?</a> | <a style='color:green' href='javascript:creat();'>点此创建一个</a></span>
    <input type="text" id="name" name="name" placeholder="Your tron address..">
	<label for="type">支付币种</label>
	<select id="type" name="type">
	  <option value="usdt">USDT</option>
	  <option value="trc">TRC</option>
	 
	</select>
	
	<label for="product">产品名字</label>
	<span>[说明]仅用于区分和界面显示.</span>
	<input type="text" id="product" name="product" placeholder="Your product name or display information..">
	<label for="name">产品金额</label>
	<span>[说明]这不是订单的人民币金额或美元金额,请输入您需要支付的币种数量.</span>
    <input type="text" id="value" name="value" placeholder="The quantity of virtual currency..">
   
  <label for="name">支付完成跳转</label>
  <span>[说明]支付完成后系统将做何种操作,如带http表示跳转,否则或-表示表示提示此文本.</span>
  <input type="text" id="jump" name="jump" value="-" placeholder="Your jump infomation..">
  
    <input type="submit" value="确认下单">
  </form>
</div>


</body>
