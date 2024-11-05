# tronusdt
USDT钱包和收款的快速开发，涵盖转账\回调的Web接口  
目前提供了PHP源码，即本页中payui.php文件，没错只需要1个文件，200行左右代码，即可运行这个收款系统。

### 快速测试收款效果:
URL访问以创建支付订单：
>https://tronusdt.xyz/?way=payui (推荐点击此处)  
>https://tronusdt.xyz/?way=payui.php?name=TJgooLjpQkZmxW1jgjscT8sCy7xaT4t8ZG&type=usdt&product=buy_vip&value=2&jump=3421664 (直接创建订单并进入支付页)

**参数说明**
|  参数名   | 说明  | 必须性  |  示例值  |
|  ----  | ----  |   ----  |  ----  |
| name  | 您的收款的USDT钱包地址 |  是 | TJgooLjpQkZmxW1jgjscT8sCy7xaT4t8ZG | 
| type  | 收款币种类型,仅支持usdt和trx两种 | 是 | usdt | 
| product  | 收款产品名字，仅作显示不宜太长 | 是 | 购买会员卡密 | 
| value  | 收款的货币的数量,必须大于等于1 | 是 | 2.0 | 
| jump  | 支付成功后提示的信息或跳转的网址 | 是 | https://baidu.com | 

注意:
+ 测试时我们建议使用TRX收款测试，它无需手续费，每个TRX价格也不高。
+ name参数的钱包必须为通过tronusdt系统构建的钱包，在页面通过点击创建钱包即可免费获得一个钱包，您可将私钥保存并导入到Imtoken，即可浏览钱包余额并进行转账等其他操作。  
+ jump参数可填写为一个网址，则必须为http开头，它将在收款成功后进行页面跳转。也可填写为一句话或一个商品卡密，它将在收款成功后显示出来。如您不懂此参数可以直接填写-，但不能留空。
+ 您可以将本仓库的payui.php源码复制到您的服务器，自行部署，且可以设置收款成功后自己的业务逻辑，比如支付后发送短信通知等均可以实现（JavaScript处）。

### 我懂其他编程语言，支持JAVA、Python、C++、易语言吗？
您也可以使用Python\JAVA等其他编程语言和平台构建您的USDT收款程序，只需要调用这里提供的2个接口：  
+ 第一个接口是：创建订单。创建成功返回订单号。
+ 第二个接口是：检查订单是否支付成功。支付成功则自定义一些事情。  
在整个开发过程中，无法熟悉区块链相关知识，甚至不懂比特币、波场、NFT知识也没关系。   
您可在1小时内构造出专属于您的收款系统，用您自己熟悉的编程语言。 

### 我不会任何一门编程语言，怎么构建自己的收款系统？
 
如果您连一门编程语言都不会，也没关系，有两种解决方法：  
+ 第一种将本页的内容和接口拿给某个程序员看，他也能快速构建出一个收款系统，对编程技能并不要求很高。开发成本非常低  
+ 第二种就是使用我们的已有的系统，https://tronusdt.xyz/?way=payui.php?name=.... 拼接您的收款链接，发送给别人进行支付即可。

### 其他接口说明
以下接口均建议使用HTTPS头并以$\color{#FF0000}{POST方式访问}$，少量同样支持GET。  
调用速率：每秒15QPS，接口长期稳定可用。

#### 1、实时币价汇率查询API:
> https://usdtxyz.xyz/?way=price&coin=usdt

注意：以POST访问，如果GET访问会提示缺少coin参数(下述接口也一样)。  
![a.png](./images/a.png)  
其中high24h代表24小时内最高成交价格，change24h代表24小时涨幅等信息。  

#### 生成钱包API:
> https://tronusdt.xyz/?way=creat  
记录调用返回的钱包地址、私钥、wcode(后边要用到)。 
此处没有返回12单词助记词，但没关系可另外通过代码自行将私钥转为单词词组即可，网上有代码教程。    

#### 查看钱包余额等信息API:
> https://tronusdt.xyz/?way=info&wcode=[wcode]  
其中wcode是您之前调用way=creat创建钱包时会返回的。  

#### USDT转账API:
> https://tronusdt.xyz/?way=send&wcode=[wcode]&to=[to]&value=[value]   
to表示收款人的钱包地址，value表示转账数量，转出手续费8-10TRX。没错，转出USDT消耗的是TRX。  

#### TRX转账API:
> https://tronusdt.xyz/?way=sendtrx&wcode=[wcode]&to=[to]&value=[value]  
to表示收款人的钱包地址，value表示转账数量，转出手续费0-1TRX。

#### 查询交易记录API:
> https://tronusdt.xyz/?way=list&wcode=[wcode] (查询USDT交易记录)  
> https://tronusdt.xyz/?way=listtrx&wcode=[wcode] (查询TRX交易记录)

#### 针对收款支持的API:
> https://tronusdt.xyz/?way=pay&name=[name]&type=[type]&product=[product]&value=[value]&jump=[jump] (创建一个收款订单，其中name表示收款人钱包地址)    
> https://tronusdt.xyz/?way=paycheck&oid=[oid] (传入订单号判断是否支付成功)  
way=pay创建成功会返回一个qrcode的字段，它代表一个收款二维码图片，如果是前端界面的话，使用JavaScript语法:image.src='data:image/png;base64,'+qrcode即可显示图片。同时返回的oid表示订单号，可以调用way=paycheck&oid=[oid]检查订单是否已经成功支付，如果成功支付返回的status会为1。若为0表示未支付。  

#### UI-API:

#### 其他功能和API?
如果上述接口没有满足您的需求，可以访问下述TRON的官方提供API开放文档自行开发接入。承接区块链系统开发、收款开发、功能建议、BUG反馈，可电子邮件联系我。
>https://tron.network  
>Email:minknown@foxmail.com


