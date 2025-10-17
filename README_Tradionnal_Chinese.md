# tronusdt
主要功能:這個框架用於快速為您的網站或APP接入USDT錢包功能或USDT收款功能，而無需任何區塊鏈知識，涵蓋交易查詢\轉幣轉帳\收款回調等常用的Web介面API。支援Python\JAVA\NodeJs\PHP\GO\Ruby\C#\火山易語言等眾多程式語言。下述USDT均指USTD-TRC20形式的USDT。TRX幣和USDT共用同個收款地址的。
**(如果有任何問題不要通過本帖子私聊、留言評論，很大可能不會有回覆，請通過本頁底部的郵箱聯絡我們即可，感謝理解)**
**(其實看本文檔和影片就能自行接入了，不會的底部郵箱聯絡我免費幫指導接入)**

### 框架優勢
1:提供原始碼：目前提供了PHP原始碼(payui.php)和其他主流原始碼都有提供，沒錯每種程式語言只需要1個檔案，20行左右程式碼，即可執行這個框架或收款系統。
2:可用性高：本框架長期可用，穩定性100%可用，長期有團隊維護，截止更新日期目前有129個商家使用本框架整合USDT外掛程式進行收款或錢包開發。
3:零學習成本：無需懂任何區塊鏈知識和技術，無需檢視其他數字貨幣API開發文件。通過本頁幾個介面的呼叫即可製作USDT錢包功能，或給您的網站APP繼承USDT收款功能。非常方便(No need to have any knowledge of blockchain)。
4:完美相容幣安的鏈下USDT轉帳交易。這種交易0手續費且到帳秒到，完全無需區塊鏈確認。即使用者和商家的USDT地址都為幣安旗下。這是目前市面上所有USDT框架中本框架首創相容(Support Binance internal transactions of USDT)。
5:全新升級了所有相容USDT各項協定，是最好用的USDT支付框架。。

### 英文說明:
Rapid development of USDT wallet and collection, including web interface for transfer/callback.
At present, the PHP source code is provided, which is the payui.exe file on this page. Yes, only one file and about 200 lines of code are needed to run this payment system.
The following USDT refers to USDT in the form of USTD-TRC20. TRX coin and USDT share the same receiving address.
If you are a user from the United States and Europe, we recommend that you use web translation to read this document.
All interfaces must be accessed through POST, otherwise it is likely to prompt for missing parameters. thank you!

#### 影片教程（Tutorial Video）
[影片教程:點此線上播放-本框架綜合教程](https://tronusdt.xyz/?way=video&video=tron.mp4)
[影片教程:以Python為例,體驗3分鐘極速接入](https://tronusdt.xyz/?way=video&video=easy.mp4)
[我們在Youtube的演示,帶中英雙字幕版本](https://www.youtube.com/watch?v=raqksD9EOOs)

影片教程分為:支付介面講解、將金鑰匯入APP使用方法、尾數疊加解釋等問題解答。易語言的可自行跳過。
(在影片教程內均有以下原始碼的展示，可直接跳到您熟悉的程式語言進行播放瞭解。。)

| 程式語言 | PHP | JavaScript | Python | 易語言 | Java | C++ |
| ---- | ---- | ---- | ---- | ---- | ---- | ---- |
| Github是否提供參考原始碼 | 是 | 是 | 是 | 是 | 是 | 否 |
| 影片講解大約開始時間 | 第3分鐘 | 第5分鐘 | 第15分鐘 | 第21分鐘 | 影片內未提及 | 影片內未提及 |

### 快速測試收款效果:
URL訪問以建立支付訂單：
>https://tronusdt.xyz/?way=payui
(↑推薦點選此處)
>https://tronusdt.xyz/?way=payui&name=TJgooLjpQkZmxW1jgjscT8sCy7xaT4t8ZG&type=usdt&product=buy_apple&value=5&jump=3421664&auto=no&note=測試尾部追加內容請儘快支付
(↑直接建立訂單並進入支付頁)
>way=pay和way=payui不同，前者返回json資料建立訂單，後者顯示除了建立訂單，還將頁面重新導向到一個支付圖形介面。
>pay頁面可以自己搭建，原始碼為PHP在本倉庫有提供。

**參數說明**
| 參數名 | 說明 | 必須性 | 示例值 |
| ---- | ---- | ---- | ---- |
| name | 您的收款的USDT錢包地址 | 是 | TJgooLjpQkZmxW1jgjscT8sCy7xaT4t8ZG |
| type | 收款幣種型別,僅支援usdt和trx兩種 | 是 | usdt |
| product | 收款產品名字，僅作顯示不宜太長 | 是 | 購買會員卡密 |
| value | 收款的貨幣的數量,必須大於等於1 | 是 | 5.0 |
| jump | 支付成功後提示的訊息或跳轉的網址或回撥URL | 是 | https://baidu.com |
| about | 大約法幣金額的顯示(非數字幣),可不填 | 否 | $32.00 |
| service | 客服連結的顯示(可https網址),可不填 | 否 | mailto:yuminhong@gamil.com |
| auto | 是否啟用自動回撥,僅支援yes或者async或者填no | 否 | no |
| namepass | 新版新增參數:如果您的地址已建立商業保護，則需傳入該密碼參數才能生成支付訂單,預設新地址可不填 | 否 | 35974982 |
| note | 新版新增參數:支援在支付頁面底部追加html程式碼或文字，長度不要超過很長一般問題不大僅支援GET傳入 | 否 | 請儘快支付有問題聯絡客服 |

**注意:**
+ name參數的錢包必須為通過tronusdt系統構建的錢包，或者也可以是您的幣安USDT錢包地址(TRC20)。如果您想建立錢包，在way=creat介面或測試頁面上點選建立錢包即可免費獲得一個錢包，您可將私鑰儲存並匯入到Imtoken，即可瀏覽錢包餘額並進行轉帳等其他操作。 如果您想使用您的幣安錢包作為USDT商家收款地址，建立訂單前先 https://tronusdt.xyz/?way=bindui 進行幣安錢包繫結。
+ jump參數可填寫為一個網址，則必須為http開頭，它將在收款成功後進行頁面跳轉，如果您啟動auto為回撥模式(async/yes)，JUMP則代表後臺回撥URL。也可填寫為一句話或一個商品卡密，它將在收款成功後顯示出來。如您不懂此參數可以直接填寫-，但不能留空。
+ 您可以將本倉庫的payui.php原始碼複製到您的伺服器，自行部署即可，且可以設定收款成功後自己的業務邏輯，比如支付後傳送簡訊通知等均可以實現（JavaScript處）。
+ about僅做顯示，意義不大。service是客服連結，不建議太長的網址或者包含&否則可能報錯，建議填寫郵箱即可。
+ 去中心化鏈上交易，我們無法控制，放心使用。

**182錯誤碼：**
如果生成訂單時，提示182錯誤碼。這是因為有不法人士使用攻擊，攻擊手段為採用自動指令碼批量建立訂單，導致該地址的支付金額不斷抬高。所以目前並不是所有人都能針對TJgooLjpQkZmxW1jgjscT8sCy7xaT4t8ZG生成訂單，我們為這個地址設定了呼叫IP白名單、以及設定了生成訂單需要檢驗密碼(傳入正確的namepass參數)、或者輸入驗證碼也能建立訂單成功。
如果您想處理並解決182錯誤碼，請更換收款錢包地址即可（即修改name參數為您自己的地址，預設新建的錢包沒有設定呼叫白名單和檢驗密碼），或者如果您只是體驗支付效果，可直接使用[UI頁面]輸入驗證碼即可跳過182檢驗,點開該網站即可體驗支付功能：https://tronusdt.xyz/?way=payui
這不是必要的選項，如果需要為您的地址設定商業保護，IP白名單或者建立支付訂單需要檢驗所有權，可郵件聯絡我們免費設定即可。

### auto參數自動回撥介紹：
**** auto總共有3個值可選，分別是no、yes和async，如果auto為空不傳，則預設為no。****
>auto參數影片講解：https://tronusdt.xyz/?way=video&video=async.mp4

##### (1)auto=no模式
此模式最開始的模式。建立訂單後，使用者需要手動點選支付介面上的[我已經支付]按鈕去發起ajax請求檢查訂單是否支付成功，如果成功則頁面發生jump跳轉。 如果使用者沒有點選，支付頁面如果還沒有關閉的話，後臺預設也會每隔幾秒自動發起ajax請求呼叫[我已經支付]按鈕事件。其本質是呼叫way=paycheck介面去主動檢查訂單是否支付。.

>這種情況有個缺陷，就是當使用者建立訂單後，關閉支付頁面，然後進行了轉幣支付，如果轉幣成功，商家收到了幣，使用者由於關閉支付頁面，支付頁面，以及支付頁面的[我已經支付]按鈕也點選不到了，訂單狀態無法變為交易成功，導致使用者也無法獲得相應商品和服務。所以後來我們引入自動回撥功能了，建立訂單時指定auto=yes或auto=async，則使用者哪怕關閉了支付頁面，只要有支付成功(錢包收到USDT)，我們的伺服器就會自動呼叫訪問訂單指定的jump上的網址（這不需要你做什麼）。

##### (2)auto=yes模式
auto=yes提供的自動回撥並不是實時回撥，我們是在建立訂單後的第5分鐘和第15分鐘進行訂單支付狀態檢查。這是我們後臺自己去發起這兩次檢查的（只要你建立訂單時指定auto=yes）。
當查詢訂單時auto還可能返回first和finish兩個文字值。出現no表示訂單沒有開啟自動後臺回撥，出現yes表示訂單開啟回撥等待回撥。出現first表示訂單已經進行第一次檢查支付狀態（通常在訂單建立後的第5分鐘），出現finish表示訂單已經在我們的伺服器經歷了2次訂單支付狀態檢查（第5分鐘和第15分鐘）。這兩次檢查中如果訂單為支付成功（status=1）則會以GET的形式自動訪問下單時的jump參數URL。請自行在JUMP地址中新增訂單號等資訊。

##### (3)auto=async模式
auto=async提供的是立刻或接近實時的回撥。但支援USDT幣種的訂單。只要數字貨幣地址(name)的帳目上收到對應的幣，JUMP回撥很快甚至是立刻被訪問和執行。這些也是全自動的。
當查詢訂單時auto可能返回asyncing和asyncok兩個值，一開始下單是async的，如果auto變為asyncing，表示訂單指定的商家數字貨幣地址(name)已經收到此訂單的數字貨幣，但是jump中的連結系統還未讀取訪問。也就是以收到幣但未回撥完成。如果auto變為asynok，則表示商家數字貨幣地址(name)已經收到此訂單的數字貨幣，而且jump中的連結已經被讀取訪問，回撥完成了。

****forger說明****
回撥狀態auto若為forger表示遺忘，即檢查多次過，但檢查結果都為未支付,後續不再檢查了，哪怕後續支付了。也不再檢查和更改訂單狀態，通常在訂單有效期內（在15分鐘內），除非auto=no，系統會自動檢查，檢查了沒支付，會多次再檢查，但超過15分鐘那就不再檢查了，哪怕你在15分鐘後支付，那訂單狀態也不會改為成功(status=1)。

****其他說明****
除此之外要說的是，我們伺服器呼叫jump的URL可能會多次。所以如果是增加金額充值類，請注意回撥網址作好防重準備。
auto=no時jump為頁面跳轉地址，如果auto為yes或async時，jump通常表示後臺回撥URL。數字貨幣一旦收到我們會自動回撥訪問jump上的網址連結。
另外，我們可能不會在超過15分鐘後進行auto自動訂單支付狀態檢查，這是因為毫無必要，我們的訂單有效期也在15分鐘以內。

### 我會其他程式語言，怎麼構建自己的收款系統？
您也可以使用Python\JAVA等其他程式語言和平台構建您的USDT收款程式，只需要呼叫這裡提供的2個介面：
+ 第一個介面是：建立訂單。建立成功返回訂單號。
+ 第二個介面是：檢查訂單是否支付成功。支付成功則自定義一些事情。
在整個開發過程中，無法熟悉區塊鏈相關知識，甚至不懂比特幣、波場、NFT知識也沒關係。
您可在1小時內構造出專屬於您的收款系統，用您自己熟悉的程式語言。

### 我不會任何一門程式語言，怎麼構建自己的收款系統？

如果您連一門程式語言都不會，也沒關係，有兩種解決方法：
+ 第一種將本頁的內容和介面拿給某個程式設計師看，他也能快速構建出一個收款系統，對程式設計技能並不要求很高。開發成本非常低
+ 第二種就是使用我們的已有的系統，https://tronusdt.xyz/?way=payui.php?name=.... 拼接您的收款連結，傳送給別人進行支付即可。

--------------------------

### 其他介面說明
（英文:Access must be done POST and HTTPS.）
以下介面均務必**使用HTTPS頭並以POST方式訪問**，少量同樣支援GET。
呼叫速率：每秒15QPS，介面長期穩定可用。
這就是為什麼wcode明明有傳入，卻一直提示需要傳入參數wcode，這是因為你的呼叫方式為get導致的。

#### 1、實時幣價匯率查詢API:
（英文:Real time currency price and exchange rate query interface）
> https://tronusdt.xyz/?way=price&coin=btc

注意：以POST訪問，如果GET訪問會提示缺少coin參數(下述介面也一樣)。
![a.png](./images/a.png)
其中high24h代表24小時內最高成交價格，change24h代表24小時漲幅等資訊。lastPr表示最新人民幣價格。

#### 生成錢包API:
（英文:To generate a free USDT wallet）
（英文:Here we have obtained the 'wcode' that will be used later）
> https://tronusdt.xyz/?way=creat&mail=[mail]
注意：請將上邊的[mail]替換為您的電子郵箱地址。此郵箱後續可以登入後臺檢視所有建立的支付訂單。用於管理憑證等功能。
請您務必記錄呼叫返回的錢包地址、私鑰、wcode(後邊要用到）。
此處沒有返回12單詞助記詞，但沒關係可另外通過程式碼自行將私鑰轉為單詞詞組即可，網上有程式碼教程。
**生成的私鑰記錄下來，可以用於自動收款，也可以在imtoken、Bestwallet、幣安等其他著名的數字貨幣錢包上匯入，即可圖形介面上操作錢包，檢視餘額，轉帳交易等。**
**下述下載安裝任一APP即可，當然不侷限於這兩款，反正記住有私鑰：任何地方都可以恢復並顯示您的錢包。**
>https://imtoken.im (中國大陸可能打不開，開啟後下載新建錢包，匯入金鑰即可使用)
>https://tronusdt.xyz/?way=imtoken (imtoken的詳細使用教程，含安卓安裝包apk)
>https://bestwallet.com/ (開啟後下載新建錢包，匯入金鑰即可使用)

#### 檢視錢包餘額等資訊API:
（英文:To query the balance and information of the wallet's various items）
> https://tronusdt.xyz/?way=info&wcode=[wcode]
其中wcode是您之前呼叫way=creat建立錢包時會返回的。 balance_trx表示錢包剩餘TRX餘額，balance_usdt表示USDT餘額，還有其他資訊這裡不做解釋。

#### USDT轉帳API（Transfer for USDT）:
> https://tronusdt.xyz/?way=send&wcode=[wcode]&to=[to]&value=[value]
to表示收款人的錢包地址，value表示轉帳數量，轉出手續費8-10TRX。沒錯，轉出USDT消耗的是TRX。

#### TRX轉帳API（Transfer for TRX）:
> https://tronusdt.xyz/?way=sendtrx&wcode=[wcode]&to=[to]&value=[value]
to表示收款人的錢包地址，value表示轉帳數量，轉出手續費0-1TRX。

#### 查詢交易記錄API（show transaction list）:
> https://tronusdt.xyz/?way=list&wcode=[wcode] (查詢USDT交易記錄)
> https://tronusdt.xyz/?way=listtrx&wcode=[wcode] (查詢TRX交易記錄)

--------------------------

#### 針對收款支援的API（Payment and callback APIs）:
> https://tronusdt.xyz/?way=pay&name=[name]&type=[type]&product=[product]&value=[value]&jump=[jump]
(↑建立一個收款訂單，其中name表示收款人錢包地址)
> https://tronusdt.xyz/?way=paycheck&oid=[oid]
(↑傳入訂單號判斷是否支付成功)
way=pay建立成功會返回一個qrcode的欄位，它代表一個收款二維碼圖片，如果是前端介面的話，使用JavaScript語法:image.src='data:image/png;base64,'+qrcode即可顯示圖片。同時返回的oid表示訂單號，可以呼叫way=paycheck&oid=[oid]檢查訂單是否已經成功支付，如果收到對應數量的數字貨幣，則成功支付，返回的status會為1。若為0表示未支付。
> https://tronusdt.xyz/?way=payui (訪問將自動跳轉到UI圖形介面的訂單建立介面)
> https://tronusdt.xyz/?way=ui (訪問將自動跳轉到訂單後臺管理介面)

#### 我們完美支援幣安站內鏈下轉帳（We support Binance internal transactions）:
如果您的商家收款地址為幣安上的錢包地址，在使用way=pay生產支付訂單時，請確保您的幣安錢包已經在tronusdt本框架上繫結過了。
繫結的作用是，我們可以通過key呼叫幣安API，檢視一些站內交易資訊。
如果沒有繫結，請開啟 https://tronusdt.xyz/?way=bindui 填寫幾個參數即可繫結。
繫結所需參數：您的聯絡郵箱（用於通知和檢視支付訂單等）、USDT錢包地址（這個必須和幣安上USDT-TRC20網路的收款地址一樣）、Key和金鑰（在您的幣安後臺建立得到）。
您可以通過幣安官網的教程瞭解如何獲取key和金鑰:https://www.binance.com/zh-CN/support/faq/detail/360002502072
您可以通過影片瞭解幣安KEY的教程：https://tronusdt.xyz/?way=video&video=biankey.mp4

##### 繫結時填寫key和金鑰給你們，那麼安全嗎？
新建的key和金鑰預設只能讀取帳戶內的基礎資料，並不能進行幣安帳戶進行合約、投資、轉帳等其他風險操作。我們僅通過key和金鑰訪問您的幣安帳戶的USDT充值資料列表。我們沒有許可權可以去操控您的幣安其他操作，因為幣安的Key預設許可權只能讀取帳戶基礎資料，沒有劃轉、轉帳、交易等許可權，除非您在API管理的後臺給這個Key開啟打勾上這些許可權。這些都是幣安API管理策略和幣安官方幫助文件提到的。如果您依舊不放心，可以使用一個閒置的幣安帳戶作為收款帳戶。
![bind.png](./images/bind.png)

##### 我們完美支援幣安的站內鏈下轉帳。這是非常有用的功能。
傳統使用者轉出USDT給商家的USDT錢包，走的是普通的USDT區塊鏈網路，這會有有續費，這個手續費根據網路擁擠程度決定的。
當您使用幣安作為您的商家USDT收款地址，假設使用者也是幣安使用者，***即你們兩個USDT帳戶都屬於幣安旗下的，那麼這種轉帳幣安不會把交易通過USDT區塊鏈網路進行傳送，而是在幣安的內部進行轉移***，即對一個帳戶進行減少操作，對另一個帳戶進行增加幣數的後臺操作，這對於幣安非常容易做到。這樣的好處除了到帳速度快，還有0手續費等優點。幣安和我們，會把這種交易成為站內或鏈下交易。
***由於這種USDT轉帳不經過USDT區塊鏈網路，區塊鏈瀏覽器無法查詢到，這就是為什麼有些使用者明明通過幣安按付款介面的要求轉帳了USDT，但是商家卻沒有自動產生回撥。這是很多USDT收款框架不支援這種站內鏈下轉帳的查詢***。然而本框架完美相容這種幣安的站內或鏈下交易。
當然讀取一個幣安帳戶的鏈下交易記錄，沒有辦法通過區塊鏈框架讀取，只能和幣安後臺互動，這就是為什麼我們需要您的幣安帳戶的Key.通過Key我們可以訪問您帳戶的部分資料。進而確定訂單是否支付成功。

##### 幣安USDT錢包地址作為商家收款地址時，建立的支付訂單不支援全自動回撥auto=async。
需要注意的是幣安USDT商家地址，建立支付訂單時不支援auto=async。但是我們支援半自動回撥模式，即auto=yes這種模式，使用者也可以手動傳送way=paycheck主動檢查。訪問way=paycheck的介面時，我們會通過key連結到您的幣安USDT資料，通過比對您的幣安USDT充值資訊，進而判斷某個訂單使用者是否支付成功。
另外注意：需要注意的是幣安USDT商家地址建立訂單時，同樣支援TRX訂單，但auto依舊只是支援no/yes兩種模式。

--------------------------------------
#### 金額疊加和支付標準（Payment Currency Overlay Explanation）
依據index.js中addvalue的技術參數，目前USDT的每次疊加幣數為0.5，TRX的每次疊加幣數為0.2。
即15分鐘內或短期之內，當兩個使用者都準備支付8個USDT時，第一個使用者顯示出來的需要支付數為8個USDT，而第二個使用者顯示出來的所需支付數為8.5個USDT。
這麼做的目的是為了錢包收到幣後，能區分是哪個使用者支付的。
由於0.5USDT數值不大，對使用者來說並不構成太多實際的支付成本，一般情況也能接受。
這在最開頭的我們的綜合影片講解中有提到，位於影片的44分鐘20秒左右。
***請提醒使用者按要求進行支付，關於確認支付成功的標準，當建立了一個8USDT的支付訂單，呼叫way=pay返回value=8 USDT，則商家的USDT錢包收到 [8.0(含)到8.5(不含8.5)]個USDT，則此使用者的訂單會被標記為支付成功。當建立了一個10USDT的支付訂單，由於10這個數額被同一時段其他使用者佔用，則呼叫way=pay會返回value=10.5 USDT，則商家的USDT錢包收到 [10.5(含)到11.0(不含11.0)]個USDT，則此使用者的訂單會被標記為支付成功。***

#### 返回的headlist是什麼
在呼叫檢查支付訂單way=paycheck時返回的 headlist表示該錢包前5個最新的交易記錄，注意如果訂單狀態為支付成功（status=1），則不顯示 headlist。 headlist作為除錯使用。如果 headlist有顯示轉帳交易，表示數字貨幣在區塊鏈公共平台上時入帳入幣了。

#### 電報版本（Telegram Version）
電報機器人Telegram版本可聯絡我索要原始碼。

#### 域名被牆怎麼辦（Domain access error...）
目前我們的網域在美國、日本、韓國、新加坡、非洲、中國等地均能訪問，如果訪問不了請通過本頁底部郵件聯絡我們獲取最新的網域。或者如果只是中國大陸無法訪問，請使用代理解決即可。。
另外傳送郵件標題和內容BACKUP的郵件傳送到我們郵箱，24小時內會回覆您獲得最新備用網域。

#### 其他功能和API（Need other...）?
如果上述介面沒有滿足您的需求，可以訪問下述TRON的官方提供API開放文件自行開發接入。承接區塊鏈系統開發、收款開發、功能建議、BUG反饋，可電子郵件聯絡我。
>https://tron.network
>Email:usdtadmin@protonmail.com
>USDT贊助打賞:TJgooLjpQkZmxW1jgjscT8sCy7xaT4t8ZG

#### 免責聲明（Disclaimer）
1. tornusdt為USDT官方開源的API產品，僅用於學習交流使用！
2. 不可用於任何違反中華人民共和國(含臺灣省)或使用者所在地區法律法規的用途。
3. 因為作者即本人僅完成程式碼的開發和開源活動(開源即任何人都可以下載使用或修改分發)，從未參與使用者的任何營運和盈利活動。
4. 且不知曉使用者後續將程式碼原始碼用於何種用途，故使用者使用過程中所帶來的任何法律責任即由使用者自己承擔。

#### 警告貼士（Warn）
1. 項目中所涉及區塊鏈代幣均為學習用途，作者並不贊成區塊鏈所繁衍出代幣的金融屬性。
2. 亦不鼓勵和支援任何"挖礦"，"炒幣"，"虛擬幣ICO"等非法行為。
3. 虛擬幣市場行為不受監管要求和控制，投資交易需謹慎，僅供學習區塊鏈知識。
