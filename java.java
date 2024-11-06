//在Pom中引入包（hutool）
<dependencies>
    <dependency>
        <groupId>cn.hutool</groupId>
        <artifactId>hutool-http</artifactId>
    </dependency>
</dependencies>

  //访问https://tronusdt.xyz/?way=payui查看我们的演示程序
  //github:https://github.com/minknown/tronusdt
  
  //调用创建订单
static String name = "TJgooLjpQkZmxW1jgjscT8sCy7xaT4t8ZG";//your wallet address.
static String type = "usdt";//usdt or trx.
static String value = "1";//the count of coins.

String result1= HttpUtil.get("https://tronusdt.xyz?way=pay&name="+name+"&type="+type+"&value="+value+"&product=test");

  //调用创建订单
static String oid = "1";//your order id
String result2= HttpUtil.get("https://tronusdt.xyz?way=paycheck&oid="+oid);
