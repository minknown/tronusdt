# Translation of d.txt into English

# [cite\_start]tronusdt [cite: 1]

[cite\_start]**Main function**: This framework is used to quickly integrate USDT wallet or USDT collection functionality into your website or APP [cite: 1][cite\_start], without requiring any blockchain knowledge[cite: 1]. [cite\_start]It covers commonly used Web API interfaces such as transaction query, coin transfer, and collection callback[cite: 1]. [cite\_start]It supports many programming languages including Python, JAVA, NodeJs, PHP, GO, Ruby, C\#, and Huoshan Easy Language[cite: 1]. [cite\_start]The USDT mentioned below all refers to USDT in the form of USTD-TRC20[cite: 4]. [cite\_start]TRX coin and USDT share the same receiving address[cite: 4].
[cite\_start]**(If you have any questions, please do not send a private message or leave comments through this post, as it is highly likely you will not receive a reply. Please contact us via the email at the bottom of this page. Thank you for your understanding)** [cite: 1]
[cite\_start]**(In fact, by viewing this document and the video, you can integrate it yourself. If you can't, contact me via the email at the bottom for free guidance on integration)** [cite: 1]

### Framework Advantages

[cite\_start]1: **Source Code Provided**: Currently, PHP source code (payui.php) and other mainstream source codes are provided[cite: 1]. [cite\_start]That's right, for each programming language, only 1 file and about 20 lines of code are needed to run this framework or collection system[cite: 1].
[cite\_start]2: **High Availability**: This framework is available long-term, 100% stable, and maintained by a team over the long term[cite: 1]. [cite\_start]As of the update date, 129 merchants are using this framework to integrate the USDT plugin for collection or wallet development[cite: 1].
[cite\_start]3: **Zero Learning Cost**: No need to understand any blockchain knowledge or technology [cite: 1][cite\_start], and no need to view other digital currency API development documentation[cite: 1]. [cite\_start]You can create USDT wallet functions or integrate USDT collection functionality into your website APP by calling the few interfaces on this page[cite: 1]. [cite\_start]It is very convenient (No need to have any knowledge of blockchain)[cite: 1].
[cite\_start]4: **Perfect Compatibility with Binance's Off-chain USDT Transfers**: These transactions have 0 transaction fees and arrive instantly, completely without the need for blockchain confirmation[cite: 1]. [cite\_start]This applies when both the user's and the merchant's USDT addresses are under Binance[cite: 1]. [cite\_start]This framework is the first of all USDT frameworks on the market to be compatible with this (Support Binance internal transactions of USDT)[cite: 1].
[cite\_start]5: **Completely Upgraded** to be compatible with all USDT protocols, it is the easiest-to-use USDT payment framework[cite: 1].

### English Description:

[cite\_start]Rapid development of USDT wallet and collection, including web interface for transfer/callback[cite: 1].

[cite\_start]At present, the PHP source code is provided, which is the payui.exe file on this page[cite: 2].
[cite\_start]Yes, only one file and about 200 lines of code are needed to run this payment system[cite: 3].
[cite\_start]The following USDT refers to USDT in the form of USTD-TRC20[cite: 4]. [cite\_start]TRX coin and USDT share the same receiving address[cite: 4].
[cite\_start]If you are a user from the United States and Europe, we recommend that you use web translation to read this document[cite: 5].
[cite\_start]All interfaces must be accessed through POST, otherwise it is likely to prompt for missing parameters [cite: 6][cite\_start]. thank you\! [cite: 6]

#### [cite\_start]视频教程（Tutorial Video） [cite: 7]

[cite\_start][视频教程:点此在线播放-本框架综合教程](https://tronusdt.xyz/?way=video&video=tron.mp4) [cite: 7]
[cite\_start][视频教程:以Python为例,体验3分钟极速接入](https://tronusdt.xyz/?way=video&video=easy.mp4) [cite: 7]
[cite\_start][我们在Youtube的演示,带中英双字幕版本](https://www.youtube.com/watch?v=raqksD9EOOs) [cite: 7]

[cite\_start]The video tutorial is divided into: explanation of the payment interface, how to import the key into the APP, explanation of the overlay of decimal places, and other Q\&A[cite: 7]. [cite\_start]Users of Easy Language can skip ahead[cite: 7].
(The source codes below are demonstrated in the video tutorial, you can skip directly to the programming language you are familiar with to watch and understand) [cite\_start][cite: 7].

| Programming Language | PHP | JavaScript | Python | Easy Language | Java | C++ |
| ---- | ---- | ---- | ---- | ---- | ---- | ---- |
| Is reference source code provided on Github | Yes | Yes | Yes | Yes | Yes | No |
| Video explanation approximate start time | 3rd minute | 5th minute | 15th minute | 21st minute | Not mentioned in the video | Not mentioned in the video |

### [cite\_start]Quick Test Collection Effect: [cite: 13]

[cite\_start]URL access to create a payment order: [cite: 13]

> [cite\_start][https://tronusdt.xyz/?way=payui](https://tronusdt.xyz/?way=payui) [cite: 13]
> (↑Recommended to click here) [cite\_start][cite: 13]
> [cite\_start][https://tronusdt.xyz/?way=payui\&name=TJgooLjpQkZmxW1jgjscT8sCy7xaT4t8ZG\&type=usdt\&product=buy\_apple\&value=5\&jump=3421664\&auto=no\&note=测试尾部追加内容请尽快支付](https://tronusdt.xyz/?way=payui&name=TJgooLjpQkZmxW1jgjscT8sCy7xaT4t8ZG&type=usdt&product=buy_apple&value=5&jump=3421664&auto=no&note=测试尾部追加内容请尽快支付) [cite: 13]
> (↑Directly create an order and enter the payment page) [cite\_start][cite: 13]
> [cite\_start]way=pay is different from way=payui[cite: 13]. [cite\_start]The former returns JSON data to create the order, while the latter, in addition to creating the order, redirects the page to a payment graphical interface[cite: 13].
> [cite\_start]The pay page can be built by yourself, the PHP source code is provided in this repository[cite: 13].

[cite\_start]**Parameter Description** [cite: 13]

| Parameter Name | Description | Required | Example Value |
| ---- | ---- | ---- | ---- |
| name | Your receiving USDT wallet address | Yes | TJgooLjpQkZmxW1jgjscT8sCy7xaT4t8ZG |
| type | Type of currency to be collected, only supports usdt and trx | Yes | usdt |
| product | Name of the product to be collected, for display only, should not be too long | Yes | Purchase Membership Card Code |
| value | Quantity of the currency to be collected, must be greater than or equal to 1 | Yes | 5.0 |
| jump | Message to be displayed after successful payment, or the jump URL, or the callback URL | Yes | [https://baidu.com](https://baidu.com) |
| about | Display of approximate fiat currency amount (non-digital currency), can be left blank | No | $32.00 |
| service | Display of customer service link (can be https URL), can be left blank | No | mailto:yuminhong@gamil.com |
| auto | Whether to enable automatic callback, only supports yes or async or fill in no | No | no |
| namepass | New parameter: If your address has created business protection, this password parameter must be passed in to generate the payment order. Default new addresses can be left blank | No | 35974982 |
| note | New parameter: Supports appending html code or text at the bottom of the payment page. Length should not be too long, generally not an issue, only supports GET input | No | Please pay as soon as possible, contact customer service if you have any questions |

[cite\_start]**Note:** [cite: 20]

  + [cite\_start]The wallet for the **name** parameter must be a wallet constructed through the tronusdt system, or it can also be your Binance USDT wallet address (TRC20)[cite: 20]. [cite\_start]If you want to create a wallet, click 'Create Wallet' on the `way=creat` interface or test page to get a free wallet[cite: 20]. [cite\_start]You can save the private key and import it into Imtoken to view the wallet balance and perform transfers and other operations[cite: 20]. [cite\_start]If you want to use your Binance wallet as the USDT merchant collection address, please first bind the Binance wallet via [https://tronusdt.xyz/?way=bindui](https://tronusdt.xyz/?way=bindui) before creating the order[cite: 20].
  + [cite\_start]The **jump** parameter can be a URL, which must start with `http`[cite: 20]. [cite\_start]It will perform a page jump after successful collection[cite: 20]. [cite\_start]If you enable **auto** for callback mode (async/yes), JUMP represents the backend callback URL[cite: 20]. [cite\_start]It can also be a sentence or a product card code, which will be displayed after successful collection[cite: 20]. [cite\_start]If you do not understand this parameter, you can fill in `-`, but it cannot be left empty[cite: 20].
  + [cite\_start]You can copy the `payui.php` source code from this repository to your server and deploy it yourself[cite: 20]. [cite\_start]You can also set up your own business logic after successful collection, such as sending SMS notifications after payment (in the JavaScript section)[cite: 20].
  + [cite\_start]**about** is only for display, with little practical significance[cite: 20]. [cite\_start]**service** is the customer service link[cite: 20]. [cite\_start]It is not recommended to use a very long URL or one containing `&`, otherwise it may cause an error[cite: 20]. [cite\_start]It is recommended to fill in an email address[cite: 20].
  + [cite\_start]We cannot control decentralized on-chain transactions, please use with confidence[cite: 20].

[cite\_start]**182 Error Code:** [cite: 20]
[cite\_start]If a 182 error code is prompted when generating an order, it is because illegal individuals are using an attack[cite: 20]. [cite\_start]The attack method involves using automatic scripts to batch-create orders, causing the payment amount for that address to be continuously raised[cite: 20]. [cite\_start]Therefore, currently not everyone can generate an order for `TJgooLjpQkZmxW1jgjscT8sCy7xaT4t8ZG`[cite: 20]. [cite\_start]We have set up an IP whitelist for calls to this address, and set that generating an order requires password verification (passing in the correct `namepass` parameter), or an input verification code can also successfully create an order[cite: 20].
[cite\_start]If you want to handle and resolve the 182 error code, you can change the collection wallet address (i.e., modify the **name** parameter to your own address; newly created wallets do not have call whitelists and password verification set by default) [cite: 20][cite\_start], or if you just want to experience the payment effect, you can directly use the [UI page] to enter a verification code to skip the 182 verification[cite: 20]. [cite\_start]Open this website to experience the payment function: [https://tronusdt.xyz/?way=payui](https://tronusdt.xyz/?way=payui) [cite: 20]
[cite\_start]This is not a necessary option[cite: 20]. [cite\_start]If you need to set up business protection for your address, an IP whitelist, or require verification of ownership to create a payment order, you can contact us via email for a free setup[cite: 20].

### [cite\_start]Introduction to the **auto** Parameter for Automatic Callback: [cite: 20]

\*\*\*\* The **auto** parameter has 3 available values: **no**, **yes**, and **async**. If **auto** is left blank, the default is **no**. [cite\_start]\*\*\*\* [cite: 20]

> [cite\_start]**auto** parameter video explanation: [https://tronusdt.xyz/?way=video\&video=async.mp4](https://tronusdt.xyz/?way=video&video=async.mp4) [cite: 20]

##### (1) [cite\_start]**auto=no** mode [cite: 20]

[cite\_start]This is the original mode[cite: 20]. [cite\_start]After creating an order, the user needs to manually click the **[I have paid]** button on the payment interface to initiate an AJAX request to check whether the order was paid successfully[cite: 20]. [cite\_start]If successful, the page will perform the **jump** redirection[cite: 20]. [cite\_start]If the user does not click, the backend will also automatically initiate an AJAX request to call the **[I have paid]** button event every few seconds if the payment page has not been closed[cite: 20]. [cite\_start]The essence is to call the `way=paycheck` interface to actively check whether the order has been paid[cite: 20].

> [cite\_start]There is a flaw in this situation [cite: 21][cite\_start]: if a user creates an order, closes the payment page, and then proceeds with the coin transfer payment[cite: 21]. [cite\_start]If the transfer is successful and the merchant receives the coins, because the user closed the payment page, the payment page and the **[I have paid]** button on the payment page can no longer be clicked[cite: 21]. [cite\_start]The order status cannot be changed to "transaction successful," which means the user cannot obtain the corresponding product or service[cite: 21]. [cite\_start]That's why we later introduced the automatic callback function[cite: 21]. [cite\_start]If you specify `auto=yes` or `auto=async` when creating the order, even if the user closes the payment page, as long as the payment is successful (the wallet receives USDT), our server will automatically access the URL specified in the order's **jump** parameter (you don't need to do anything)[cite: 21].

##### (2) [cite\_start]**auto=yes** mode [cite: 20]

[cite\_start]The automatic callback provided by `auto=yes` is not a real-time callback[cite: 20]. [cite\_start]We check the order payment status at the 5th and 15th minutes after the order is created[cite: 20]. [cite\_start]Our backend initiates these two checks itself (as long as you specify `auto=yes` when creating the order)[cite: 20].
[cite\_start]When querying the order, **auto** may also return the text values **first** and **finish**[cite: 20]. [cite\_start]The appearance of **no** means the order has not enabled automatic backend callback, and **yes** means the order has enabled callback and is waiting for it[cite: 20]. [cite\_start]**first** means the order has undergone the first payment status check (usually at the 5th minute after order creation) [cite: 20][cite\_start], and **finish** means the order has undergone 2 payment status checks on our server (the 5th and 15th minutes)[cite: 20]. [cite\_start]If the order is successfully paid (status=1) during these two checks, the URL in the **jump** parameter from the time of placing the order will be automatically accessed in the GET format[cite: 20]. [cite\_start]Please ensure you add order number and other information to the JUMP address yourself[cite: 20].

##### (3) [cite\_start]**auto=async** mode [cite: 20]

[cite\_start]`auto=async` provides immediate or near real-time callback[cite: 20]. [cite\_start]It only supports orders for the USDT currency[cite: 20]. [cite\_start]As long as the corresponding coin is received in the digital currency address's (**name**) account, the JUMP callback will be accessed and executed quickly, or even instantly[cite: 20]. [cite\_start]These are also fully automatic[cite: 20].
[cite\_start]When querying the order, **auto** may return two values: **asyncing** and **asyncok**[cite: 20]. [cite\_start]Initially, the order is `async`[cite: 20]. [cite\_start]If **auto** changes to **asyncing**, it means the merchant's digital currency address (**name**) specified in the order has received the digital currency for this order, but the system has not yet read and accessed the link in **jump**[cite: 20]. [cite\_start]In other words, the coins have been received but the callback is not yet completed[cite: 20]. [cite\_start]If **auto** changes to **asynok**, it means the merchant's digital currency address (**name**) has received the digital currency for this order, and the link in **jump** has been read and accessed, meaning the callback is complete[cite: 20].

[cite\_start]\*\*\*\* **forger** explanation \*\*\*\* [cite: 20]
[cite\_start]If the callback status **auto** is **forger**, it means "forgotten"[cite: 20]. [cite\_start]That is, it has been checked multiple times, but the result has always been "unpaid," and no further checks will be made, even if payment is made later[cite: 20]. [cite\_start]The order status will no longer be checked or changed[cite: 20]. [cite\_start]Usually, within the order's validity period (within 15 minutes), unless `auto=no`, the system will automatically check[cite: 20]. [cite\_start]If it checks and the order is unpaid, it will check again multiple times[cite: 20]. [cite\_start]However, if it exceeds 15 minutes, it will no longer check[cite: 20]. [cite\_start]Even if you pay after 15 minutes, the order status will not be changed to successful (status=1)[cite: 20].

[cite\_start]\*\*\*\* Other notes \*\*\*\* [cite: 20]
[cite\_start]Furthermore, our server might call the **jump** URL multiple times[cite: 20]. [cite\_start]Therefore, if it is for increasing the amount or top-up type transactions, please prepare your callback URL to prevent duplication[cite: 20].
[cite\_start]When `auto=no`, **jump** is the page redirection address[cite: 20]. [cite\_start]When **auto** is **yes** or **async**, **jump** usually represents the backend callback URL[cite: 20]. [cite\_start]Once the digital currency is received, we will automatically callback and access the URL link in **jump**[cite: 20].
[cite\_start]Additionally, we may not perform **auto** automatic order payment status checks after 15 minutes[cite: 20]. [cite\_start]This is because it is unnecessary, as our order validity period is also within 15 minutes[cite: 20].

### [cite\_start]I know other programming languages, how do I build my own collection system? [cite: 20]

[cite\_start]You can also use Python, JAVA, or other programming languages and platforms to build your USDT collection program[cite: 20]. [cite\_start]You only need to call the 2 interfaces provided here: [cite: 20]

  + [cite\_start]The first interface is: **Create Order**[cite: 20]. [cite\_start]If creation is successful, an order number is returned[cite: 20].
  + [cite\_start]The second interface is: **Check if the order is successfully paid**[cite: 20]. [cite\_start]If payment is successful, customize some actions[cite: 20].
    [cite\_start]Throughout the entire development process, it doesn't matter if you are not familiar with blockchain-related knowledge, or even if you don't understand Bitcoin, TRON, or NFT knowledge[cite: 20].
    [cite\_start]You can construct your own dedicated collection system in your familiar programming language within 1 hour[cite: 20].

### [cite\_start]I don't know any programming language, how do I build my own collection system? [cite: 20]

[cite\_start]If you don't even know a programming language, it doesn't matter, there are two solutions: [cite: 20]

  + [cite\_start]The first is to show the content and interfaces on this page to a programmer[cite: 20]. [cite\_start]They can also quickly build a collection system[cite: 20]. [cite\_start]It does not require high programming skills[cite: 20]. [cite\_start]The development cost is very low[cite: 20].
  + [cite\_start]The second is to use our existing system[cite: 20]. [cite\_start]You can concatenate your collection link: `https://tronusdt.xyz/?way=payui.php?name=....` and send it to others for payment[cite: 20].

-----

### [cite\_start]Other Interface Descriptions [cite: 20]

[cite\_start]（英文:Access must be done POST and HTTPS.） [cite: 20]
[cite\_start]All the following interfaces **must be accessed using an HTTPS header and POST method**[cite: 20]. [cite\_start]A small number also support GET[cite: 20].
[cite\_start]Call rate: 15 QPS per second[cite: 20]. [cite\_start]The interfaces are stable and available long-term[cite: 20].
[cite\_start]This is why even if `wcode` is clearly passed in, it keeps prompting that the parameter `wcode` is required[cite: 20]. [cite\_start]This is because your calling method is GET[cite: 20].

#### [cite\_start]1、Real-time Currency Price and Exchange Rate Query API: [cite: 20]

[cite\_start]（英文:Real time currency price and exchange rate query interface） [cite: 20]

> [cite\_start][https://tronusdt.xyz/?way=price\&coin=btc](https://tronusdt.xyz/?way=price&coin=btc) [cite: 20]

[cite\_start]Note: Access with POST[cite: 20]. [cite\_start]If accessed with GET, it will prompt that the `coin` parameter is missing (the same applies to the interfaces below)[cite: 20].
[cite\_start] [cite: 20]
[cite\_start]Where `high24h` represents the highest transaction price within 24 hours, and `change24h` represents the 24-hour increase, etc.[cite: 22]. [cite\_start]`lastPr` represents the latest RMB price[cite: 22].

#### [cite\_start]Generate Wallet API: [cite: 20]

[cite\_start]（英文:To generate a free USDT wallet） [cite: 20]
[cite\_start]（英文:Here we have obtained the 'wcode' that will be used later） [cite: 20]

> [cite\_start][https://tronusdt.xyz/?way=creat\&mail=](https://tronusdt.xyz/?way=creat&mail=)[mail] [cite: 20]
> [cite\_start]Note: Please replace `[mail]` above with your email address[cite: 20]. [cite\_start]This email can be used later to log in to the background to view all created payment orders[cite: 20]. [cite\_start]It is used for management credentials and other functions[cite: 20].
> [cite\_start]You must record the wallet address, private key, and **wcode** returned by the call (it will be used later)[cite: 20].
> [cite\_start]The 12-word mnemonic phrase is not returned here[cite: 20], but it doesn't matter. [cite\_start]You can convert the private key to a word phrase yourself using code[cite: 20]. [cite\_start]There are code tutorials online[cite: 20].
> [cite\_start]**Record the generated private key[cite: 20]. [cite\_start]It can be used for automatic collection, and can also be imported into Imtoken, Bestwallet, Binance, and other famous digital currency wallets[cite: 20]. [cite\_start]This allows you to operate the wallet on the graphical interface, view the balance, transfer transactions, etc.** [cite: 20]
> [cite\_start]**You can download and install any of the APPs listed below[cite: 20]. [cite\_start]Of course, you are not limited to these two[cite: 20]. [cite\_start]Just remember that with the private key: your wallet can be restored and displayed anywhere.** [cite: 20]
> [cite\_start][https://imtoken.im](https://imtoken.im) (May not open in mainland China. After opening, download and create a new wallet, import the key to use) [cite: 20]
> [cite\_start][https://tronusdt.xyz/?way=imtoken](https://tronusdt.xyz/?way=imtoken) (Detailed usage tutorial for imtoken, including Android installation package apk) [cite: 20]
> [cite\_start][https://bestwallet.com/](https://bestwallet.com/) (After opening, download and create a new wallet, import the key to use) [cite: 20]

#### [cite\_start]View Wallet Balance and Other Information API: [cite: 20]

[cite\_start]（英文:To query the balance and information of the wallet's various items） [cite: 20]

> [cite\_start][https://tronusdt.xyz/?way=info\&wcode=](https://tronusdt.xyz/?way=info&wcode=)[wcode] [cite: 20]
> [cite\_start]`wcode` is what was returned when you called `way=creat` to create the wallet[cite: 20]. [cite\_start]`balance_trx` represents the remaining TRX balance in the wallet, and `balance_usdt` represents the USDT balance[cite: 20]. [cite\_start]There is other information not explained here[cite: 20].

#### [cite\_start]USDT Transfer API (Transfer for USDT): [cite: 20]

> [cite\_start][https://tronusdt.xyz/?way=send\&wcode=](https://tronusdt.xyz/?way=send&wcode=)[wcode]\&to=[to]\&value=[value] [cite: 20]
> [cite\_start]`to` represents the recipient's wallet address, and `value` represents the transfer amount[cite: 20]. [cite\_start]The transfer fee is 8-10 TRX[cite: 20]. [cite\_start]That's right, transferring USDT consumes TRX[cite: 20].

#### [cite\_start]TRX Transfer API (Transfer for TRX): [cite: 20]

> [cite\_start][https://tronusdt.xyz/?way=sendtrx\&wcode=](https://tronusdt.xyz/?way=sendtrx&wcode=)[wcode]\&to=[to]\&value=[value] [cite: 20]
> [cite\_start]`to` represents the recipient's wallet address, and `value` represents the transfer amount[cite: 20]. [cite\_start]The transfer fee is 0-1 TRX[cite: 20].

#### [cite\_start]Query Transaction Record API (show transaction list): [cite: 20]

> [cite\_start][https://tronusdt.xyz/?way=list\&wcode=](https://tronusdt.xyz/?way=list&wcode=)[wcode] (Query USDT transaction record) [cite: 20]
> [cite\_start][https://tronusdt.xyz/?way=listtrx\&wcode=](https://tronusdt.xyz/?way=listtrx&wcode=)[wcode] (Query TRX transaction record) [cite: 23]

-----

#### [cite\_start]Payment and Callback APIs: [cite: 23]

> [cite\_start][https://tronusdt.xyz/?way=pay\&name=](https://tronusdt.xyz/?way=pay&name=)[name]\&type=[type]\&product=[product]\&value=[value]\&jump=[jump] [cite: 23]
> (↑Create a collection order, where `name` represents the recipient's wallet address) [cite\_start][cite: 23]
> [cite\_start][https://tronusdt.xyz/?way=paycheck\&oid=](https://tronusdt.xyz/?way=paycheck&oid=)[oid] [cite: 23]
> (↑Pass in the order number to determine if payment was successful) [cite\_start][cite: 23]
> [cite\_start]If `way=pay` is created successfully, a field `qrcode` will be returned, which represents a collection QR code image[cite: 23]. [cite\_start]If it is a frontend interface, you can display the image using the JavaScript syntax: `image.src='data:image/png;base64,'+qrcode`[cite: 23]. [cite\_start]The returned `oid` represents the order number[cite: 23]. [cite\_start]You can call `way=paycheck&oid=[oid]` to check if the order has been successfully paid[cite: 23]. [cite\_start]If the corresponding amount of digital currency is received, the payment is successful, and the returned `status` will be 1[cite: 23]. [cite\_start]If it is 0, it means unpaid[cite: 23].
> [cite\_start][https://tronusdt.xyz/?way=payui](https://tronusdt.xyz/?way=payui) (Access will automatically redirect to the UI graphical interface order creation interface) [cite: 23]
> [cite\_start][https://tronusdt.xyz/?way=ui](https://tronusdt.xyz/?way=ui) (Access will automatically redirect to the order backend management interface) [cite: 23]

#### [cite\_start]We Perfectly Support Binance Internal Off-chain Transfers (We support Binance internal transactions): [cite: 23]

[cite\_start]If your merchant collection address is a wallet address on Binance, when using `way=pay` to generate a payment order, please ensure that your Binance wallet has been bound on the tronusdt framework[cite: 23].
[cite\_start]The purpose of binding is that we can use the key to call the Binance API and view some internal transaction information[cite: 23].
[cite\_start]If you haven't bound it, please open [https://tronusdt.xyz/?way=bindui](https://tronusdt.xyz/?way=bindui) and fill in a few parameters to bind[cite: 23].
[cite\_start]Parameters required for binding: Your contact email (used for notifications and viewing payment orders, etc.), USDT wallet address (this must be the same as the collection address on the Binance USDT-TRC20 network), Key and Secret (obtained by creating them in your Binance backend)[cite: 23].
[cite\_start]You can learn how to obtain the key and secret through the Binance official website tutorial: [https://www.binance.com/zh-CN/support/faq/detail/360002502072](https://www.binance.com/zh-CN/support/faq/detail/360002502072) [cite: 23]
[cite\_start]You can learn about the Binance KEY tutorial through the video: [https://tronusdt.xyz/?way=video\&video=biankey.mp4](https://tronusdt.xyz/?way=video&video=biankey.mp4) [cite: 23]

##### [cite\_start]Is it safe to fill in the key and secret to you during binding? [cite: 23]

[cite\_start]Newly created keys and secrets can only read basic account data by default and cannot perform other risky operations on the Binance account such as futures, investment, or transfers[cite: 23]. [cite\_start]We only access the USDT deposit data list of your Binance account using the key and secret[cite: 23]. [cite\_start]We do not have the authority to control your other operations on Binance [cite: 23][cite\_start], because the default permission of the Binance Key is only to read basic account data, and does not have transfer, withdrawal, trading, or other permissions, unless you enable these permissions in the API management backend for this Key[cite: 23]. [cite\_start]These are all mentioned in the Binance API management policy and Binance official help documentation[cite: 23]. [cite\_start]If you are still worried, you can use an inactive Binance account as your collection account[cite: 23].
[cite\_start] [cite: 23]

##### We perfectly support Binance's internal off-chain transfers. [cite\_start]This is a very useful feature. [cite: 23]

[cite\_start]When a traditional user transfers USDT to a merchant's USDT wallet, it goes through the regular USDT blockchain network, which incurs transaction fees[cite: 23]. [cite\_start]These fees are determined by network congestion[cite: 23].
[cite\_start]When you use Binance as your merchant USDT collection address, and assuming the user is also a Binance user, ***meaning both your USDT accounts belong to Binance, then this type of transfer will not be sent by Binance through the USDT blockchain network, but will be transferred internally within Binance***[cite: 23]. [cite\_start]That is, a backend operation to decrease the amount in one account and increase the coin amount in the other account[cite: 23]. [cite\_start]This is very easy for Binance to do[cite: 23]. [cite\_start]The benefits of this include faster arrival speed and 0 transaction fees[cite: 23]. [cite\_start]Binance and us refer to this type of transaction as internal or off-chain transactions[cite: 23].
[cite\_start]***Since this type of USDT transfer does not go through the USDT blockchain network, it cannot be queried on blockchain explorers***[cite: 23]. [cite\_start]This is why some users clearly transferred USDT according to the payment interface requirements on Binance, but the merchant did not automatically receive a callback[cite: 23]. [cite\_start]***This is a limitation of many USDT collection frameworks that do not support querying this type of internal off-chain transfer***[cite: 23]. [cite\_start]However, this framework perfectly supports this type of Binance internal or off-chain transaction[cite: 23].
[cite\_start]Of course, reading the off-chain transaction records of a Binance account cannot be done through a blockchain framework[cite: 23]. [cite\_start]It can only be done by interacting with the Binance backend[cite: 23]. [cite\_start]This is why we need your Binance account's Key[cite: 23]. [cite\_start]Through the Key, we can access a portion of your account data, and then determine whether the order was successfully paid[cite: 23].

##### [cite\_start]When using a Binance USDT wallet address as the merchant collection address, created payment orders do not support the fully automatic callback `auto=async`. [cite: 23]

[cite\_start]It should be noted that Binance USDT merchant addresses do not support `auto=async` when creating payment orders[cite: 23]. [cite\_start]However, we support the semi-automatic callback mode, which is the `auto=yes` mode[cite: 23]. [cite\_start]Users can also manually send `way=paycheck` to actively check[cite: 23]. [cite\_start]When accessing the `way=paycheck` interface, we will connect to your Binance USDT data using the key[cite: 23]. [cite\_start]By comparing your Binance USDT deposit information, we can then determine whether a user has successfully paid a certain order[cite: 23].
[cite\_start]Also note: It should be noted that Binance USDT merchant addresses also support TRX orders when creating orders, but **auto** still only supports the **no/yes** two modes[cite: 23].

-----

#### [cite\_start]Amount Overlay and Payment Standard (Payment Currency Overlay Explanation) [cite: 24]

[cite\_start]According to the `addvalue` technical parameter in `index.js`, the current overlay amount is 0.5 for USDT and 0.2 for TRX per payment[cite: 24].
[cite\_start]That is, within 15 minutes or a short period, when two users are both ready to pay 8 USDT, the amount displayed for the first user to pay is 8 USDT, while the amount displayed for the second user to pay is 8.5 USDT[cite: 24].
[cite\_start]The purpose of this is to allow the wallet to distinguish which user made the payment after receiving the coins[cite: 24].
[cite\_start]Since 0.5 USDT is a small amount, it generally does not constitute too much actual payment cost for the user and is generally acceptable[cite: 24].
[cite\_start]This was mentioned in our comprehensive video explanation at the very beginning, around 44 minutes and 20 seconds into the video[cite: 24].
[cite\_start]***Please remind users to pay as required***[cite: 24]. [cite\_start]***Regarding the standard for confirming successful payment, when a payment order for 8 USDT is created, and `way=pay` returns `value=8 USDT`, if the merchant's USDT wallet receives [8.0 (inclusive) to 8.5 (exclusive of 8.5)] USDT, the user's order will be marked as successfully paid***[cite: 24]. [cite\_start]***When a payment order for 10 USDT is created, and this amount of 10 is occupied by another user in the same period, then `way=pay` will return `value=10.5 USDT`***[cite: 24]. [cite\_start]***If the merchant's USDT wallet receives [10.5 (inclusive) to 11.0 (exclusive of 11.0)] USDT, the user's order will be marked as successfully paid.*** [cite: 24]

#### [cite\_start]What is the returned `headlist`? [cite: 24]

[cite\_start]When calling `way=paycheck` to check a payment order, the returned `headlist` represents the top 5 latest transaction records of the wallet[cite: 24]. [cite\_start]Note that if the order status is successfully paid (`status=1`), `headlist` is not displayed[cite: 24]. [cite\_start]`headlist` is used for debugging[cite: 24]. [cite\_start]If `headlist` shows a transfer transaction, it means the digital currency has been credited on the blockchain public platform[cite: 24].

#### [cite\_start]Telegram Version [cite: 24]

[cite\_start]You can contact me to request the source code for the Telegram bot version[cite: 24].

#### [cite\_start]What to do if the domain is blocked (Domain access error...)? [cite: 24]

[cite\_start]Currently, our domain can be accessed in the United States, Japan, South Korea, Singapore, Africa, China, and other places[cite: 24]. [cite\_start]If you cannot access it, please contact us via the email at the bottom of this page to get the latest domain[cite: 24]. [cite\_start]Alternatively, if only mainland China cannot access it, you can solve it by using a proxy[cite: 24].
[cite\_start]In addition, send an email with the title and content "BACKUP" to our email address, and we will reply with the latest backup domain within 24 hours[cite: 24].

#### [cite\_start]Other Features and APIs (Need other...)? [cite: 24]

[cite\_start]If the above interfaces do not meet your needs, you can access the official TRON API open documentation below and develop and integrate it yourself[cite: 25]. [cite\_start]We undertake blockchain system development, collection development, feature suggestions, and bug feedback[cite: 25]. [cite\_start]You can contact me via email[cite: 25].

> [cite\_start][https://tron.network](https://tron.network) [cite: 25]
> [cite\_start]Email:usdtadmin@protonmail.com [cite: 25]
> [cite\_start]USDT Sponsorship/Donation:TJgooLjpQkZmxW1jgjscT8sCy7xaT4t8ZG [cite: 25]

#### [cite\_start]Disclaimer [cite: 25]

1.  [cite\_start]tronusdt is an official open-source API product for USDT, intended only for learning and communication purposes\! [cite: 25]
2.  [cite\_start]It must not be used for any purpose that violates the laws and regulations of the People's Republic of China (including Taiwan Province) or the user's local area[cite: 25].
3.  [cite\_start]The author only completed the code development and open-source activities (open source means anyone can download, use, modify, or distribute the code) [cite: 25][cite\_start], and has never participated in any user operations or profit activities[cite: 25].
4.  [cite\_start]Furthermore, the author does not know what purpose the user will use the program source code for later[cite: 25]. [cite\_start]Therefore, any legal liabilities arising from the user's use are borne by the user themselves[cite: 25].

#### [cite\_start]Warning Tips (Warn) [cite: 25]

1.  [cite\_start]The blockchain tokens involved in the project are for learning purposes[cite: 25]. [cite\_start]The author does not approve of the financial attributes derived from blockchain tokens[cite: 25].
2.  [cite\_start]Nor does the author encourage or support any illegal activities such as "mining," "speculative trading," or "virtual currency ICO"[cite: 25].
3.  [cite\_start]Virtual currency market behavior is not subject to regulatory requirements and control[cite: 25]. [cite\_start]Investment and trading require caution and are only for learning blockchain knowledge[cite: 25].
