# tronusdt
USDT钱包和收款的快速开发，涵盖转账\回调的Web接口，支持Python\JAVA\NODEJS\PHP\GO\易语言等等。  
目前提供了PHP源码，即本页中payui.php文件，没错只需要1个文件，20行左右代码，即可运行这个收款系统。
下述USDT均指USTD-TRC20形式的USDT。TRX币和USDT共用同个收款地址的。  

### 英文说明:
Rapid development of USDT wallet and collection, including web interface for transfer/callback.  
At present, the PHP source code is provided, which is the payui.exe file on this page. Yes, only one file and about 200 lines of code are needed to run this payment system.   
The following USDT refers to USDT in the form of USTD-TRC20. TRX coin and USDT share the same receiving address.  
If you are a user from the United States and Europe, we recommend that you use web translation to read this document.  
All interfaces must be accessed through POST, otherwise it is likely to prompt for missing parameters.  

#### 视频教程（Tutorial Video）  
[点此在线播放视频教程](https://mayizt.com/other_fun/tron.mp4)  
[我们在Youtube的演示,带中英双字幕版本](https://www.youtube.com/watch?v=raqksD9EOOs)  

视频教程分为:支付接口讲解、将密钥导入APP使用方法、尾数叠加解释等问题解答。易语言的可自行跳过。    

|  编程语言   | PHP  | JavaScript  |  Python  |  Java  |  Go  |  C++  |
|  ----  | ----  |   ----  |  ----  |  ----  |  ----  |  ----  |
|  是否提供源码  | 是  |   是  |  是  |  是   |  否  |  否  |

### 快速测试收款效果:
URL访问以创建支付订单：
>https://tronusdt.xyz/?way=payui  
  (↑推荐点击此处)    
>https://tronusdt.xyz/?way=payui&name=TJgooLjpQkZmxW1jgjscT8sCy7xaT4t8ZG&type=usdt&product=buy_vip&value=2&jump=3421664  
 (↑直接创建订单并进入支付页)  

**参数说明**
|  参数名   | 说明  | 必须性  |  示例值  |
|  ----  | ----  |   ----  |  ----  |
| name  | 您的收款的USDT钱包地址 |  是 | TJgooLjpQkZmxW1jgjscT8sCy7xaT4t8ZG | 
| type  | 收款币种类型,仅支持usdt和trx两种 | 是 | usdt | 
| product  | 收款产品名字，仅作显示不宜太长 | 是 | 购买会员卡密 | 
| value  | 收款的货币的数量,必须大于等于1 | 是 | 2.0 | 
| jump  | 支付成功后提示的信息或跳转的网址 | 是 | https://baidu.com | 
| about  | 新版新增参数:大约法币金额的显示(非数字币),可不填 | 否 | $32.00 | 
| service | 新版新增参数:客服链接的显示(可https网址),可不填 | 否 | mailto:yuminhong@gamil.com |   
| namepass | 新版新增参数:如果您的地址已创建商业保护，则需传入该密码参数才能生成支付订单,默认新地址可不填 | 否 | 35974982 |   

182错误码：
如果生成订单时，提示182错误码。这是因为有不法人士使用攻击，所以目前并不是所有人都能针对TJgooLjpQkZmxW1jgjscT8sCy7xaT4t8ZG生成订单，我们为这个地址设置了调用白名单、生成订单需要检验密码(传入正确的namepass参数)、或者输入验证码也能创建订单成功。  
如果您想解决182错误码，请更换收款钱包地址即可（默认新建的钱包没有设置调用白名单和检验密码），或者您先简单尝试可以UI页面输入验证码即可跳过182检验：https://tronusdt.xyz/?way=payui  

注意:
+ name参数的钱包必须为通过tronusdt系统构建的钱包，在页面通过点击创建钱包即可免费获得一个钱包，您可将私钥保存并导入到Imtoken，即可浏览钱包余额并进行转账等其他操作。  
+ jump参数可填写为一个网址，则必须为http开头，它将在收款成功后进行页面跳转。也可填写为一句话或一个商品卡密，它将在收款成功后显示出来。如您不懂此参数可以直接填写-，但不能留空。
+ 您可以将本仓库的payui.php源码复制到您的服务器，自行部署，且可以设置收款成功后自己的业务逻辑，比如支付后发送短信通知等均可以实现（JavaScript处）。
+ about和service仅对线上接口tronusdt.xyz/?way=payui&name=....&about=...&service=...生效。本源码的payui.php并不提供支持。  
+ 去中心化链上交易，我们无法控制，放心使用。  
  
### 我会其他编程语言，怎么构建自己的收款系统？
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
（英文:Access must be done POST and HTTPS.）  
以下接口均务必**使用HTTPS头并以POST方式访问**，少量同样支持GET。 
调用速率：每秒15QPS，接口长期稳定可用。  
这就是为什么wcode明明有传入，却一直提示需要传入参数wocde，这是因为你的调用方式为get导致的。  

#### 1、实时币价汇率查询API:  
（英文:Real time currency price and exchange rate query interface）   
> https://tronusdt.xyz/?way=price&coin=btc

注意：以POST访问，如果GET访问会提示缺少coin参数(下述接口也一样)。  
![a.png](./images/a.png)  
其中high24h代表24小时内最高成交价格，change24h代表24小时涨幅等信息。lastPr表示最新人民币价格。    

#### 生成钱包API:
（英文:To generate a free USDT wallet）   
（英文:Here we have obtained the 'wcode' that will be used later）  
> https://tronusdt.xyz/?way=creat  
记录调用返回的钱包地址、私钥、wcode(后边要用到）。 
此处没有返回12单词助记词，但没关系可另外通过代码自行将私钥转为单词词组即可，网上有代码教程。    
**生成的私钥记录下来，可以用于自动收款，也可以在imtoken、Bestwallet、币安等其他著名的数字货币钱包上导入，即可图形界面上操作钱包，查看余额，转账交易等。**  
**下述下载安装任一APP即可，当然不局限于这两款，反正记住有私钥：任何地方都可以恢复并显示您的钱包。**  
>https://imtoken.im (中国大陆可能打不开，打开后下载新建钱包，导入密钥即可使用)    
>https://bestwallet.com/ (打开后下载新建钱包，导入密钥即可使用)  
>https://godmedweb.xyz/bestwallet.apk (安卓手机打开本网址下载Bestwallet)    


#### 查看钱包余额等信息API:
（英文:To query the balance and information of the wallet's various items）  
> https://tronusdt.xyz/?way=info&wcode=[wcode]  
其中wcode是您之前调用way=creat创建钱包时会返回的。 balance_trx表示钱包剩余TRX余额，balance_usdt表示USDT余额，还有其他信息这里不做解释。  

#### USDT转账API（Transfer for USDT）:
> https://tronusdt.xyz/?way=send&wcode=[wcode]&to=[to]&value=[value]   
to表示收款人的钱包地址，value表示转账数量，转出手续费8-10TRX。没错，转出USDT消耗的是TRX。  

#### TRX转账API（Transfer for TRX）:
> https://tronusdt.xyz/?way=sendtrx&wcode=[wcode]&to=[to]&value=[value]  
to表示收款人的钱包地址，value表示转账数量，转出手续费0-1TRX。

#### 查询交易记录API（show transaction list）:
> https://tronusdt.xyz/?way=list&wcode=[wcode] (查询USDT交易记录)  
> https://tronusdt.xyz/?way=listtrx&wcode=[wcode] (查询TRX交易记录)

#### 针对收款支持的API（Payment and callback APIs）:
> https://tronusdt.xyz/?way=pay&name=[name]&type=[type]&product=[product]&value=[value]&jump=[jump]  
(↑创建一个收款订单，其中name表示收款人钱包地址)     
> https://tronusdt.xyz/?way=paycheck&oid=[oid]  
 (↑传入订单号判断是否支付成功)   
way=pay创建成功会返回一个qrcode的字段，它代表一个收款二维码图片，如果是前端界面的话，使用JavaScript语法:image.src='data:image/png;base64,'+qrcode即可显示图片。同时返回的oid表示订单号，可以调用way=paycheck&oid=[oid]检查订单是否已经成功支付，如果成功支付返回的status会为1。若为0表示未支付。   
> https://tronusdt.xyz/?way=payui (访问将自动跳转到UI图形界面的订单创建界面)  

#### 电报版本（Telegram Version） 
电报机器人Telegram版本可联系我索要源码。  

#### 其他功能和API（Need other...）?
如果上述接口没有满足您的需求，可以访问下述TRON的官方提供API开放文档自行开发接入。承接区块链系统开发、收款开发、功能建议、BUG反馈，可电子邮件联系我。
>https://tron.network  
>Email:minknown@foxmail.com  
>USDT赞助打赏:TJgooLjpQkZmxW1jgjscT8sCy7xaT4t8ZG

#### 免责声明（Disclaimer）
1. tornusdt为USDT官方开源的API产品，仅用于学习交流使用！  
2. 不可用于任何违反中华人民共和国(含台湾省)或使用者所在地区法律法规的用途。  
3. 因为作者即本人仅完成代码的开发和开源活动(开源即任何人都可以下载使用或修改分发)，从未参与用户的任何运营和盈利活动。  
4. 且不知晓用户后续将程序源代码用于何种用途，故用户使用过程中所带来的任何法律责任即由用户自己承担。  

#### 警告贴士（Warn）
1. 项目中所涉及区块链代币均为学习用途，作者并不赞成区块链所繁衍出代币的金融属性。  
2. 亦不鼓励和支持任何"挖矿"，"炒币"，"虚拟币ICO"等非法行为。  
3. 虚拟币市场行为不受监管要求和控制，投资交易需谨慎，仅供学习区块链知识。  


