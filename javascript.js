//引入jquery
<script src="https://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
//创建支付订单(用户点击按钮触发)

//检查是否支付(用户点击按钮触发)
function paycheck(the_oid){
	$.ajax({
	    type: 'GET',
	    url: "https://tronusdt.xyz/?way=paycheck&oid="+the_oid,
		timeout: 10000,
		success:function(data){
			if(data.status==1){
				alert("支付成功。");
        // 在此处进行其他数据处理或业务操作。
			}else{
				alert("支付未完成。刚转币请等待大约30秒即可！");
			}
			
		}
		});
	
}


//创建一个支付订单
//the_type支持usdt或trx，the_name表示收款钱包地址，the_value表示币数量
//可以暂时使用the_name=TJgooLjpQkZmxW1jgjscT8sCy7xaT4t8ZG我们的收款钱包测试，小额测试用trx，转账无手续费，到账快。1个TRX不到1元人民币。

function pay(the_name,the_value,the_type){
  $.ajax({
	    type: 'GET',
	    url: "https://tronusdt.xyz/?way=pay&jump=-&product=buy_vip&name="+the_name+"&type="+the_type+"&value="+the_value,
		timeout: 15000,
		success:function(data){
			console.log(data);
			//这里只做输出，其他可以拿到data.oid得到订单号，做个轮询或者按钮让用户点，然后调用paycheck(oid)判断订单是否支付成功。
      //如果没有返回data.oid，则会提示相应的报错信息。
		}
		});
}
