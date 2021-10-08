<?
if(isset ($_POST['title'])) {$title=$_POST['title'];}
if(isset ($_POST['name'])) {$name=$_POST['name'];}
if(isset ($_POST['phone'])) {$phonenum=$_POST['phone'];}
if(isset ($_POST['service'])) {$service=$_POST['service'];}
if(isset ($_POST['business'])) {$business=$_POST['business'];}
if(isset ($_POST['email'])) {$email=$_POST['email'];}

if(isset ($_POST['lang'])) {$lang=$_POST['lang'];}
if(isset ($_POST['page'])) {$page=$_POST['page'];}


$to = "info@wamp.com.ua";

$utm_source=$_COOKIE['utm_source'];
$utm_medium=$_COOKIE['utm_medium'];
$utm_term=$_COOKIE['utm_term'];
$utm_content=$_COOKIE['utm_content'];
$utm_campaign=$_COOKIE['utm_campaign'];


$message = "Форма: $title <br><br>Языковая версия: $lang <br>Страница отправки: $page<br><hr><br>";
if ( $page || $name || $phonenum || $service || $business || $email || $utm_source || $utm_medium || $utm_term || $utm_content || $utm_campaign ) {
	$message .= ""
		. ( $name ?" Имя:  $name <br>" : "")
		. ( $phonenum ?" Телефон:  $phonenum <br>" : "")
		. ( $service ?" Услуга:  $service <br>" : "")
		. ( $business ?" Какая у Вас сфера?:  $business <br>" : "")
		. ( $utm_source  ? "<hr><br> utm source: $utm_source <br>" : "")
		. ( $utm_medium  ? " utm medium: $utm_medium <br>" : "")
		. ( $utm_term  ? " utm term: $utm_term <br>" : "")
		. ( $utm_content  ? " utm content: $utm_content <br>" : "")
		. ( $utm_campaign  ? " utm campaign: $utm_campaign <br>" : "");
}

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= 'From: "Заявки с сайта" <no-reply@wamp.com.ua>';

if (!$title || !$phonenum) {
} else {
	mail($to,"New lead(wamp.com.ua)",$message,$headers);
}

?>