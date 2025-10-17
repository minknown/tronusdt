# tronusdt
Funciones principales: este marco se utiliza para acceder rápidamente a la función de billetera USDT o a la función de recopilación de USDT para su sitio web o aplicación sin ningún conocimiento de blockchain. Cubre las API de interfaz web comunes, como consultas de transacciones, transferencias de moneda y devolución de llamadas de cobros. Admite muchos lenguajes de programación como Python\JAVA\NodeJs\PHP\GO\Ruby\C#\Huoshan Yi Language. Todos los siguientes USDT se refieren al USDT en el formato USTD-TRC20. Las monedas TRX y USDT comparten la misma dirección de pago.
**(Si tiene alguna pregunta, no chatee en privado ni deje comentarios a través de esta publicación. Existe una alta probabilidad de que no haya respuesta. Por favor contáctenos a través del correo electrónico al final de esta página. Gracias por su comprensión)**
**(En realidad, puede acceder a él usted mismo leyendo este documento y video. Si no sabe cómo, comuníquese conmigo por correo electrónico en la parte inferior para obtener ayuda y orientación gratuitas)**

### Ventajas del marco
1: Proporcionar código fuente: actualmente, se proporciona código fuente PHP (payui.php) y otros códigos fuente convencionales. Sí, cada lenguaje de programación sólo requiere 1 archivo y unas 20 líneas de código para ejecutar este framework o sistema de pago.
2: Alta disponibilidad: este marco está disponible durante mucho tiempo, tiene 100% de estabilidad y un equipo lo mantiene durante mucho tiempo. A la fecha de actualización, actualmente hay 129 comerciantes que utilizan este marco para integrar el complemento USDT para el cobro de pagos o el desarrollo de billeteras.
3: Costo de aprendizaje cero: no es necesario comprender ningún conocimiento ni tecnología de blockchain, ni consultar otros documentos de desarrollo de API de moneda digital. Puede crear una función de billetera USDT llamando a varias interfaces en esta página o heredar la función de recopilación de USDT en la APLICACIÓN de su sitio web. Muy conveniente (no es necesario tener ningún conocimiento de blockchain).
4: Perfectamente compatible con las transacciones de transferencia de USDT fuera de la cadena de Binance. Este tipo de transacción no tiene tarifa de manejo y llega en segundos, sin necesidad de confirmación de blockchain. Es decir, las direcciones USDT de los usuarios y comerciantes son propiedad de Binance. Esta es la primera vez que este marco es compatible entre todos los marcos USDT actualmente en el mercado (soporta transacciones internas de Binance de USDT).
5: Recientemente actualizado y compatible con todos los protocolos USDT, es el marco de pago USDT más útil. .

### Descripción en inglés:
Rápido desarrollo de billetera y cobranza de USDT, incluida la interfaz web para transferencia/devolución de llamada.
Actualmente, se proporciona el código fuente PHP, que es el archivo payui.exe en esta página. Sí, sólo se necesita un archivo y unas 200 líneas de código para ejecutar este sistema de pago.
El siguiente USDT se refiere al USDT en forma de USTD-TRC20. La moneda TRX y el USDT comparten la misma dirección de recepción.
Si es un usuario de Estados Unidos y Europa, le recomendamos que utilice la traducción web para leer este documento.
Se debe acceder a todas las interfaces a través de POST; de lo contrario, es probable que se soliciten parámetros faltantes.  ¡gracias!

#### Vídeo tutorial
[Video tutorial: Click here to play online - Comprehensive tutorial of this framework](https://tronusdt.xyz/?way=video&video=tron.mp4)      
[Video tutorial: Taking Python as an example, experience 3-minute high-speed access](https://tronusdt.xyz/?way=video&video=easy.mp4)       
[Our presentation on Youtube, with both Chinese and English subtitles](https://www.youtube.com/watch?v=raqksD9EOOs)    

El vídeo tutorial se divide en: explicación de la interfaz de pago, cómo importar la clave a la APP, explicación de la superposición de mantisa y otras preguntas y respuestas. Puedes saltarte los de lenguaje fácil tú mismo.
(El siguiente código fuente se muestra en el video tutorial. Puede saltar directamente al lenguaje de programación con el que está familiarizado para obtener más información).

| Lenguaje de programación | PHP | JavaScript | Pitón | Idioma fácil | Java | C++ |
|  ----  | ----  |   ----  |  ----  |  ----  |  ----  |  ----  |
| ¿Github proporciona código fuente de referencia? Sí | Sí | Sí | Sí | Sí | No |
| Hora aproximada de inicio de la explicación en vídeo | 3er minuto | 5to minuto | minuto 15 | Minuto 21 | No mencionado en el video | No mencionado en el video |

### Pruebe rápidamente el efecto del pago:
Acceso URL para crear orden de pago:
>https://tronusdt.xyz/?way=payui
( ↑Recomendado hacer clic aquí)
>https://tronusdt.xyz/?way=payui&name=TJgooLjpQkZmxW1jgjscT8sCy7xaT4t8ZG&type=usdt&product=buy_apple&value=5&jump=3421664&auto=no&note=Pague lo antes posible por el contenido adicional en final de la prueba
( ↑ Cree un pedido directamente e ingrese a la página de pago)
>way=pay y way=payui son diferentes. El primero devuelve datos json para crear un pedido, mientras que el segundo muestra que además de crear un pedido, también redirige la página a una interfaz gráfica de pago.
> La página de pago puede crearla usted mismo y el código fuente es PHP y se proporciona en este almacén.

**Descripción del parámetro**
| Nombre del parámetro | Descripción | Requisito | Valor de ejemplo |
|  ----  | ----  |   ----  |  ----  |
| nombre | Su dirección de billetera USDT para pago | Sí | TJgooLjpQkZmxW1jgjscT8sCy7xaT4t8ZG |
| tipo | Tipo de moneda de pago, solo se admiten usdt y trx | Sí | usdt |
| producto | El nombre del producto de pago, es sólo para visualización y no debe ser demasiado largo | Sí | Comprar contraseña de tarjeta de membresía |
| valor | La cantidad de moneda a pagar, debe ser mayor o igual a 1 | Sí | 5.0 |
| saltar | La información o URL de salto o URL de devolución de llamada que se solicita después de un pago exitoso | Sí | https://baidu.com |
| acerca de | Visualización del monto aproximado de moneda fiduciaria (no moneda digital), opcional | No | $32.00 |
| servicio | Visualización del enlace de servicio al cliente (puede ser URL https), opcional | No | correo a:yuminhong@gamil.com |
| automático | Ya sea para habilitar la devolución de llamada automática, solo admite sí o asíncrono o completar no | no | no |
| contraseña de nombre | Nuevos parámetros en la nueva versión: Si se ha creado protección comercial para su dirección, debe pasar este parámetro de contraseña para generar una orden de pago. De forma predeterminada, la nueva dirección se puede dejar en blanco | No | 35974982 |
| nota | Nuevos parámetros en la nueva versión: admite agregar código html o texto en la parte inferior de la página de pago. La longitud no debe exceder mucho. Generalmente, no es un gran problema. Solo se admite la entrada GET | No | Pague lo antes posible si tiene alguna pregunta, comuníquese con el servicio al cliente |

**Aviso:**
+ La billetera del parámetro de nombre debe ser una billetera creada a través del sistema tronusdt, o puede ser la dirección de su billetera Binance USDT (TRC20). Si desea crear una billetera, haga clic en Crear billetera en la interfaz way=creat o en la página de prueba para obtener una billetera gratis. Puede guardar e importar la clave privada a Imtoken para explorar el saldo de la billetera y realizar otras operaciones, como transferencias.  Si desea utilizar su billetera Binance como dirección de pago comercial de USDT, vincule su billetera Binance en https://tronusdt.xyz/?way=bindui antes de crear un pedido.
+ El parámetro de salto se puede completar como una URL, que debe comenzar con http. Saltará a la página después de que el pago se haya recibido correctamente. Si inicia automáticamente en modo de devolución de llamada (asíncrono/sí), JUMP representa la URL de devolución de llamada en segundo plano. También se puede completar como una oración o un código de tarjeta de producto, que se mostrará después de que el pago se reciba correctamente. Si no comprende este parámetro, puede completarlo directamente con -, pero no puede dejarlo en blanco.
+ Puede copiar el código fuente payui.php de este almacén a su servidor e implementarlo usted mismo. También puede configurar su propia lógica empresarial después de un pago exitoso, como enviar notificaciones por SMS después del pago, etc. (JavaScript).
+ about es sólo para visualización y tiene poco significado. El servicio es un enlace de servicio al cliente. No se recomienda que la URL sea demasiado larga o contenga &; de lo contrario, se puede informar un error. Se recomienda completar la dirección de correo electrónico.
+ Las transacciones descentralizadas en cadena están fuera de nuestro control, por lo que puedes utilizarlas con confianza.

**Código de error 182:**
Si se genera un pedido, se muestra un código de error 182. Esto se debe a que algunas personas sin escrúpulos utilizan ataques. El método de ataque consiste en utilizar scripts automáticos para crear pedidos en lotes, lo que hace que el importe del pago de la dirección siga aumentando. Por lo tanto, actualmente no todo el mundo puede generar un pedido de TJgooLjpQkZmxW1jgjscT8sCy7xaT4t8ZG. Hemos configurado una lista blanca de IP de llamadas para esta dirección y configuramos una verificación de contraseña requerida para generar un pedido (pase el parámetro de contraseña correcto) o ingresamos un código de verificación para crear un pedido exitosamente.
Si desea tratar y resolver el código de error 182, cambie la dirección de la billetera de pago (es decir, cambie el parámetro de nombre a su propia dirección. De forma predeterminada, la billetera recién creada no establece la lista blanca de llamadas ni la contraseña de verificación), o si simplemente experimenta el efecto de pago, puede usar directamente la [página UI] para ingresar el código de verificación para omitir la verificación 182 y hacer clic en el sitio web para experimentar la función de pago: https://tronusdt.xyz/?way=payui
Esta no es una opción necesaria. Si necesita configurar protección comercial para su dirección, lista blanca de IP o crear una orden de pago que requiera verificación de propiedad, puede contactarnos por correo electrónico para configurarlo de forma gratuita.

### Introducción de devolución de llamada automática de parámetros automáticos:
**** auto tiene un total de 3 valores opcionales, a saber, no, sí y async. Si auto está vacío y no se pasa, el valor predeterminado es no. ****
>Video explicativo de los parámetros automáticos: https://tronusdt.xyz/?way=video&video=async.mp4

##### (1)automático=sin modo
El modo inicial de este modo. Después de crear un pedido, el usuario debe hacer clic manualmente en el botón [He pagado] en la interfaz de pago para iniciar una solicitud ajax y verificar si el pedido se pagó correctamente. Si tiene éxito, la página saltará.   Si el usuario no hace clic y la página de pago no se ha cerrado, el fondo iniciará automáticamente una solicitud ajax para llamar al evento del botón [He pagado] cada pocos segundos de forma predeterminada. Su esencia es llamar a la interfaz way=paycheck para verificar activamente si el pedido está pagado. .

>Un defecto en esta situación es que después de que el usuario crea un pedido, cierra la página de pago y luego transfiere la moneda para el pago. Si la transferencia de moneda se realiza correctamente y el comerciante recibe las monedas, el usuario no puede hacer clic en el botón [He pagado] en la página de pago, la página de pago o la página de pago, y el estado del pedido no se puede cambiar a transacción exitosa, lo que resulta en que el usuario no pueda obtener los bienes y servicios correspondientes. Más tarde introdujimos la función de devolución de llamada automática. Al crear un pedido, especifique auto=yes o auto=async. Incluso si el usuario cierra la página de pago, siempre que el pago se realice correctamente (la billetera reciba USDT), nuestro servidor llamará automáticamente a la URL en el salto especificado en el pedido (esto no requiere que usted haga nada).

##### (2)auto=si modo
La devolución de llamada automática proporcionada por auto=yes no es una devolución de llamada en tiempo real. Verificamos el estado de pago del pedido a los minutos 5 y 15 después de crear el pedido. Nuestro backend inicia estas dos comprobaciones por sí solo (siempre que especifique auto=yes al crear un pedido).
Al consultar un pedido, auto también puede devolver dos valores de texto: primero y finalizar. Si no aparece, significa que el pedido no ha habilitado la devolución de llamada automática en segundo plano. Si aparece sí, significa que el pedido ha habilitado la devolución de llamada y está esperando dicha devolución. La aparición de primero significa que el pedido ha pasado por la primera verificación del estado de pago (generalmente el quinto minuto después de que se crea el pedido), y la aparición de fin significa que el pedido ha pasado por 2 verificaciones de estado de pago del pedido en nuestro servidor (el minuto 5 y el minuto 15). En estas dos comprobaciones, si el pedido se paga correctamente (estado = 1), se accederá automáticamente a la URL del parámetro de salto al realizar el pedido en forma de GET. Agregue usted mismo el número de pedido y otra información a la dirección JUMP.

##### (3)auto=modo asíncrono
auto=async proporciona devoluciones de llamada inmediatas o casi en tiempo real. Pero se admiten pedidos en moneda USDT. Siempre que se reciba la moneda correspondiente en la cuenta de la dirección de moneda digital (nombre), se accederá y ejecutará la devolución de llamada JUMP de forma rápida o incluso inmediata. Estos también son completamente automáticos.
Al consultar un pedido, auto puede devolver dos valores: asyncing y asyncok. El orden inicial es asíncrono. Si automáticamente cambia a asíncrono, significa que la dirección de moneda digital del comerciante (nombre) especificada en el pedido ha recibido la moneda digital de este pedido, pero el sistema de enlace en el salto aún no la ha leído ni accedido. Es decir, se recibe la moneda pero no se completa ninguna devolución de llamada. Si automáticamente cambia a asynok, significa que la dirección de moneda digital (nombre) del comerciante recibió la moneda digital de este pedido, se leyó y accedió al enlace en el salto y se completó la devolución de llamada.

****descripción del falsificador****
Si el estado de la devolución de llamada automática es olvido, significa olvido, es decir, se ha verificado varias veces, pero todos los resultados de la verificación no están pagados y no se volverá a verificar, incluso si se paga más tarde. El estado del pedido ya no se verifica ni se modifica. Generalmente dentro del período de validez del pedido (dentro de los 15 minutos), a menos que auto=no, el sistema lo verificará automáticamente. Si el cheque no se paga, se volverá a verificar varias veces, pero si supera los 15 minutos, ya no se verificará. Incluso si paga después de 15 minutos, el estado del pedido no cambiará a éxito (estado=1).

****Otras instrucciones****
Además de esto, nuestro servidor puede llamar a la URL de salto varias veces. Por lo tanto, si se trata de un tipo de recarga que aumenta el monto, preste atención a la URL de devolución de llamada y prepárese para evitar accidentes.
Cuando auto = no, jump es la dirección de salto de página. Si auto es sí o async, jump generalmente representa la URL de devolución de llamada en segundo plano. Una vez recibida la moneda digital, automáticamente volveremos a llamar y accederemos al enlace URL en el salto.
Además, no podremos realizar una verificación automática del estado del pago del pedido después de más de 15 minutos. Esto se debe a que no es necesario y el período de validez de nuestro pedido también es de 15 minutos.


### Conozco otros lenguajes de programación, ¿cómo puedo construir mi propio sistema de pago?
También puede utilizar otros lenguajes y plataformas de programación como Python\JAVA para crear su programa de colección USDT. Sólo necesita llamar a las 2 interfaces proporcionadas aquí:
+ La primera interfaz es: Crear un pedido. Si la creación es exitosa, se devolverá el número de pedido.
+ La segunda interfaz es: verifique si el pedido se pagó correctamente. Si el pago se realiza correctamente, algunas cosas se personalizarán.
Durante todo el proceso de desarrollo, no importa si no está familiarizado con los conocimientos relacionados con blockchain o incluso si no comprende Bitcoin, Tron y NFT.
Puede construir su propio sistema de cobro de pagos en 1 hora, utilizando su propio lenguaje de programación familiar.

### No conozco ningún lenguaje de programación, ¿cómo puedo construir mi propio sistema de pago?
 
Si ni siquiera conoces un lenguaje de programación, no importa. Hay dos soluciones:
+ El primer método es mostrar el contenido y la interfaz de esta página a un programador, quien podrá crear rápidamente un sistema de pago, lo que no requiere grandes conocimientos de programación. Los costos de desarrollo son muy bajos.
+ La segunda opción es utilizar nuestro sistema existente, https://tronusdt.xyz/?way=payui.php?name=.... para unir su enlace de pago y enviarlo a otros para que realicen el pago.

--------------------------

### Otras descripciones de interfaz
(Inglés: El acceso debe realizarse POST y HTTPS.)
Las siguientes interfaces deben **usar encabezados HTTPS y se debe acceder a ellas en modo POST**, y algunas también admiten GET.
Velocidad de llamada: 15 QPS por segundo, la interfaz es estable y está disponible durante mucho tiempo.
Es por eso que wcode se pasa claramente, pero sigue indicando que es necesario pasar el parámetro wcode. Esto se debe a que su método de llamada es get.

#### 1. API de consulta de tipo de cambio de moneda en tiempo real:
(英文:Interfaz de consulta de precio de moneda y tipo de cambio en tiempo real)
> https://tronusdt.xyz/?way=price&coin=btc

Nota: Si se accede a través de POST, si se accede a través de GET, le indicará que falta el parámetro de moneda (lo mismo se aplica a las siguientes interfaces).
![a.png](./images/a.png)  
Entre ellos, high24h representa el precio de transacción más alto en 24 horas y change24h representa el aumento de 24 horas y otra información. lastPr representa el último precio en RMB.

#### Generar API de billetera:
(Inglés: Para generar una billetera USDT gratis)
(英文:Aquí hemos obtenido el 'wcode' que se utilizará más adelante)
> https://tronusdt.xyz/?way=creat&mail=[correo]
Nota: reemplace [correo] arriba con su dirección de correo electrónico. Esta dirección de correo electrónico se puede utilizar más adelante para iniciar sesión en el backend y ver todas las órdenes de pago creadas. Se utiliza para administrar credenciales y otras funciones.
Asegúrese de registrar la dirección de la billetera, la clave privada y el código w devuelto por la llamada (para usarlo más adelante).
La frase mnemotécnica de 12 palabras no se devuelve aquí, pero no importa. También puede convertir la clave privada en frases de palabras mediante código. Hay tutoriales de código en línea.
**La clave privada generada se registra y puede usarse para la recopilación automática, o puede importarse a otras billeteras de moneda digital conocidas como imtoken, Bestwallet, Binance, etc. Puede operar la billetera en la interfaz gráfica, verificar el saldo, transferir transacciones, etc.**
**Simplemente descargue e instale cualquiera de las aplicaciones que se enumeran a continuación. Por supuesto, no estás limitado a estos dos. De todos modos, recuerda tener la clave privada: tu billetera se puede restaurar y mostrar en cualquier lugar. **
>https://imtoken.im (Es posible que no esté abierto en China continental. Después de abrirlo, descargue una nueva billetera e importe la clave para usar)
>https://tronusdt.xyz/?way=imtoken (tutorial detallado sobre el uso de imtoken, incluido el paquete de instalación de Android apk)
>https://bestwallet.com/ (Ábrelo, descarga la nueva billetera, importa la clave y úsala)


#### Ver el saldo de la billetera y otra API de información:
(英文:Para consultar el saldo y la información de los distintos artículos de la billetera)
> https://tronusdt.xyz/?way=info&wcode=[wcode]
El wcode es lo que se devolvió cuando previamente llamaste a way=creat para crear una billetera. balance_trx representa el saldo TRX restante en la billetera, balance_usdt representa el saldo USDT y otra información no se explicará aquí.

#### API de transferencia de USDT (Transferencia por USDT):
> https://tronusdt.xyz/?way=send&wcode=[wcode]&to=[to]&value=[valor]
to representa la dirección de billetera del beneficiario, el valor representa el monto de la transferencia y la tarifa de transferencia es 8-10TRX. Así es, transferir USDT consume TRX.

#### API de transferencia TRX (Transferencia para TRX):
> https://tronusdt.xyz/?way=sendtrx&wcode=[wcode]&to=[to]&value=[valor]
to representa la dirección de billetera del beneficiario, el valor representa el monto de la transferencia y la tarifa de transferencia es 0-1TRX.

#### Consultar API de registro de transacciones (mostrar lista de transacciones):
> https://tronusdt.xyz/?way=list&wcode=[wcode] (consultar registros de transacciones USDT)
> https://tronusdt.xyz/?way=listtrx&wcode=[wcode] (consultar registros de transacciones TRX)

--------------------------

#### API admitidas para el cobro de pagos (API de pago y devolución de llamada):
> https://tronusdt.xyz/?way=pay&name=[nombre]&type=[tipo]&product=[producto]&value=[valor]&jump=[saltar]
( ↑ Crear una orden de pago, donde el nombre representa la dirección de billetera del beneficiario)
> https://tronusdt.xyz/?way=paycheck&oid=[oid]
( ↑ Ingrese el número de pedido para determinar si el pago se realizó correctamente)
Si way=pay se crea correctamente, devolverá un campo qrcode, que representa una imagen de código QR de pago. Si se trata de una interfaz de usuario, utilice la sintaxis de JavaScript: image.src='data:image/png;base64,'+qrcode para mostrar la imagen. El oid devuelto al mismo tiempo representa el número de pedido. Puede llamar a way=paycheck&oid=[oid] para comprobar si el pedido se ha pagado correctamente. Si se recibe la cantidad correspondiente de moneda digital, el pago se realiza correctamente y el estado devuelto será 1. Si es 0, significa que no se ha pagado.
> https://tronusdt.xyz/?way=payui (el acceso saltará automáticamente a la interfaz de creación de pedidos de la interfaz gráfica de usuario)
> https://tronusdt.xyz/?way=ui (el acceso saltará automáticamente a la interfaz de administración de pedidos)

#### Admitimos perfectamente las transferencias internas fuera de la cadena de Binance (admitemos las transacciones internas de Binance):
Si la dirección de pago de su comerciante es una dirección de billetera en Binance, cuando use way=pay para generar órdenes de pago, asegúrese de que su billetera de Binance esté vinculada al marco tronusdt.
El propósito de la vinculación es que podemos llamar a la API de Binance a través de la clave para ver información de transacciones en el sitio.
Si no hay enlace, abra https://tronusdt.xyz/?way=bindui y complete algunos parámetros para enlazar.
Parámetros necesarios para el enlace: su correo electrónico de contacto (utilizado para notificaciones y visualización de órdenes de pago, etc.), dirección de billetera USDT (debe ser la misma que la dirección de pago de la red USDT-TRC20 en Binance), clave y clave secreta (creada en su backend de Binance).
Puede aprender cómo obtener claves y claves a través del tutorial en el sitio web oficial de Binance: https://www.binance.com/zh-CN/support/faq/detail/360002502072
Puedes conocer el tutorial de Binance KEY a través del vídeo: https://tronusdt.xyz/?way=video&video=biankey.mp4

##### Completo la clave y te la entrego al vincular. ¿Es seguro?
Las claves y claves secretas recién creadas solo pueden leer los datos básicos de la cuenta de forma predeterminada y no pueden realizar otras operaciones riesgosas como contratos, inversiones, transferencias, etc. en la cuenta de Binance. Solo accedemos a la lista de datos de depósito en USDT de su cuenta de Binance mediante clave y clave. No tenemos permiso para controlar sus otras operaciones en Binance, porque los permisos predeterminados de Binance Key solo pueden leer datos básicos de la cuenta y no tienen permisos para transferencias, transferencias, transacciones, etc., a menos que habilite estos permisos para esta clave en el fondo de administración de API. Estos se mencionan en las políticas de administración de API de Binance y en los documentos de ayuda oficiales de Binance. Si todavía estás preocupado, puedes usar una cuenta de Binance inactiva como cuenta receptora.
![bind.png](./images/bind.png)  

##### Respaldamos perfectamente las transferencias fuera de la cadena en el sitio de Binance. Esta es una característica muy útil.
Cuando los usuarios tradicionales transfieren USDT a las billeteras USDT de los comerciantes, utilizan la red blockchain USDT ordinaria. Habrá una tarifa de renovación. Esta tarifa se determina en función del grado de congestión de la red.
Cuando usa Binance como la dirección de pago USDT de su comerciante, asumiendo que el usuario también es un usuario de Binance, ***es decir, ambas cuentas USDT pertenecen a Binance, entonces Binance no enviará la transacción a través de la red blockchain USDT, sino que la transferirá dentro de Binance***, es decir, reducirá la operación en una cuenta y realizará la operación en segundo plano de aumentar la cantidad de monedas en la otra cuenta. Esto es muy fácil de hacer para Binance. Además de la rápida velocidad de pago, también existen ventajas como la eliminación de gastos de gestión. Binance y convertiremos esta transacción en una transacción dentro o fuera de la cadena.
***Dado que este tipo de transferencia de USDT no pasa por la red blockchain de USDT, el navegador blockchain no puede consultarla. Es por eso que algunos usuarios claramente transfirieron USDT a través de Binance de acuerdo con los requisitos de la interfaz de pago, pero el comerciante no generó automáticamente una devolución de llamada. La duda*** es que muchos marcos de recopilación de USDT no admiten este tipo de transferencia fuera de la cadena dentro del sitio. Sin embargo, este marco es perfectamente compatible con este tipo de transacciones dentro o fuera de la cadena de Binance.
Por supuesto, no hay forma de leer los registros de transacciones fuera de la cadena de una cuenta de Binance a través del marco blockchain. Solo puede interactuar con el backend de Binance. Es por eso que necesitamos la clave de su cuenta de Binance. A través de la Clave, podemos acceder a algunos datos de su cuenta. Luego determine si el pedido se pagó correctamente.

##### Cuando la dirección de billetera USDT de Binance se utiliza como dirección de pago del comerciante, la orden de pago creada no admite la devolución de llamada totalmente automática auto=async.
Cabe señalar que la dirección del comerciante Binance USDT no admite auto=async al crear órdenes de pago. Sin embargo, admitimos el modo de devolución de llamada semiautomático, es decir, el modo automático = sí. Los usuarios también pueden enviar manualmente way=paycheck para verificar de forma proactiva. Al acceder a la interfaz de way=paycheck, nos vincularemos a sus datos de Binance USDT a través de la clave y compararemos su información de recarga de Binance USDT para determinar si un usuario del pedido ha pagado correctamente.
También tenga en cuenta: Cabe señalar que al crear un pedido con la dirección del comerciante Binance USDT, también se admiten pedidos TRX, pero el modo automático solo admite los modos no/sí.

--------------------------------------   
#### Explicación de superposición de moneda de pago
De acuerdo con los parámetros técnicos de addvalue en index.js, la cantidad actual de monedas agregadas por USDT es 0,5 y la cantidad de monedas agregadas por vez para TRX es 0,2.
Es decir, dentro de 15 minutos o en un corto período de tiempo, cuando dos usuarios están listos para pagar 8 USDT, el primer usuario muestra el monto de pago requerido de 8 USDT, mientras que el segundo usuario muestra el monto de pago requerido de 8,5 USDT.
El propósito de esto es que después de que la billetera reciba las monedas, pueda distinguir qué usuario pagó.
Dado que el valor de 0,5 USDT no es grande, no constituye un costo de pago real excesivo para los usuarios y, en general, es aceptable.
Esto se menciona en nuestra explicación completa en video al principio, ubicada aproximadamente a los 44 minutos y 20 segundos del video.
*** Recuerde a los usuarios que paguen según sea necesario. Con respecto a los criterios para confirmar el pago exitoso, cuando se crea una orden de pago de 8 USDT, llamar a way=pay devuelve valor=8 USDT y la billetera USDT del comerciante recibe [8,0 (inclusive) a 8,5 (8,5 exclusivo)] USDT, entonces la orden del usuario se marcará como un pago exitoso. Cuando se crea una orden de pago de 10 USDT, dado que la cantidad de 10 está ocupada por otros usuarios durante el mismo período, llamar a way=pay devolverá valor=10,5 USDT. Luego, la billetera USDT del comerciante recibe [10,5 (inclusive) a 11,0 (excluyendo 11,0)] USDT, y el pedido del usuario se marcará como un pago exitoso. ***

#### ¿Cuál es la lista de titulares devuelta?
La lista de encabezado devuelta al llamar a la orden de pago con cheque way=paycheck representa los primeros 5 registros de transacciones más recientes de la billetera. Tenga en cuenta que si el estado del pedido es pago exitoso (estado = 1), no se mostrará la lista principal. La lista de encabezado se utiliza para la depuración. Si la lista principal muestra una transacción de transferencia, significa que la moneda digital se ha registrado en la plataforma pública blockchain.

#### Versión de Telegrama
Para la versión Telegram del robot Telegram, comuníquese conmigo para solicitar el código fuente.

#### Qué hacer si tu nombre de dominio está bloqueado (Error de acceso al dominio...)
Actualmente, se puede acceder a nuestros nombres de dominio en Estados Unidos, Japón, Corea del Sur, Singapur, África, China y otros lugares. Si no puede acceder a ellos, comuníquese con nosotros a través del correo electrónico que se encuentra al final de esta página para obtener los nombres de dominio más recientes. O si solo es inaccesible desde China continental, utilice un proxy para resolver el problema. .
Además, envíe un correo electrónico de RESPALDO con el título y el contenido del correo electrónico a nuestro buzón de correo y le responderemos dentro de las 24 horas para obtener el último nombre de dominio alternativo.

#### ¿Otras funciones y API (necesita otras...)?
Si las interfaces anteriores no satisfacen sus necesidades, puede visitar el documento abierto API oficial de TRON a continuación para desarrollarlo y acceder a él usted mismo. Para llevar a cabo el desarrollo del sistema blockchain, el desarrollo de cobros de pagos, sugerencias de funciones y comentarios sobre ERRORES, puede contactarme por correo electrónico.
>https://tron.network
>Correo electrónico:usdtadmin@protonmail.com
>Recompensa por patrocinio del USDT:TJgooLjpQkZmxW1jgjscT8sCy7xaT4t8ZG



#### Descargo de responsabilidad
1. tornusdt es el producto API oficial de código abierto de USDT y solo se utiliza para aprendizaje y comunicación.
2. No se puede utilizar para ningún propósito que viole las leyes y regulaciones de la República Popular China (incluida la provincia de Taiwán) o la región donde se encuentra el usuario.
3. Porque el propio autor solo ha completado el desarrollo y las actividades de código abierto del código (el código abierto significa que cualquiera puede descargarlo, usarlo o modificarlo y distribuirlo), y nunca ha participado en ninguna operación ni actividad lucrativa de los usuarios.
4. No sabemos para qué finalidad utilizará posteriormente el usuario el código fuente del programa, por lo que cualquier responsabilidad legal derivada del uso por parte del usuario será asumida por el propio usuario.

#### Consejos de advertencia (advertir)
1. Todos los tokens blockchain involucrados en el proyecto tienen fines de aprendizaje y el autor no está de acuerdo con los atributos financieros de los tokens derivados de blockchain.
2. Tampoco fomentamos ni apoyamos ninguna "minería", "especulación con monedas", "ICO de moneda virtual" y otras actividades ilegales.
3. El comportamiento del mercado de la moneda virtual no está sujeto a requisitos ni controles regulatorios, y las transacciones de inversión deben ser cautelosas. Es sólo para aprender conocimientos sobre blockchain.


