# 代码来源：https://github.com/minknown/tronusdt
# 代码作用：python接入usdt收款程序。
# 请先根目录运行pip install requests安装依赖包requests

import requests

def ispay(the_oid):
	url = "https://tronusdt.xyz/?way=paycheck&oid="+the_oid  # 替换为你想访问的HTTPS URL
	response = requests.get(url)
	print("最新检查支付情况:status="+str(response.json()['status']))
	return False;
	
print("您好，这是Python程序接入usdt、TRX收款的示例程序.商家收款地址自行代码中去修改")
type=input("请输入支付的币种类型，支持usdt和trx两种:")
value=input("请输入支付的币的个数:")
name="TJgooLjpQkZmxW1jgjscT8sCy7xaT4t8ZG"

url = "https://tronusdt.xyz/?way=pay&name="+name+"&product=test_buy_vip&value="+value+"&type="+type+"&jump=-"  # 替换为你想访问的HTTPS URL
html = requests.get(url)

print("-------------------")
print("创建订单成功")
print("订单号",html.json()['oid'])
print("商家钱包地址",html.json()['name'])
print("支付金额",html.json()['value'])
print("支付币种",html.json()['type'])
print("扫码二维码图片",html.json()['qrcodeurl'])
print("-------------------")
d=0
while d==0:
	input("您还没有支付，如果您已经支付请按回车:")
	if ispay(html.json()['oid'])==True:
		d=1
		print("您已经支付成功")
		break
