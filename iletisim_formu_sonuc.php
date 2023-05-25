<?php
header("content-type:text/html;charset=utf-8");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



/*
$mailgonder = new PHPMailer(true);

try {
    //Sunucu Ayarları
    $mailgonder->SMTPDebug = 2;// debug çıktısı (0 kapalı,2 detaylı )    
    $mailgonder->isSMTP(); //Send using SMTP
    $mailgonder->Host       = 'mail.extraegitim.net';//Set the SMTP server to send through 
	 $mailgonder->SMTPAuth   = true;
	 $mailgonder->Username   = 'user@example.com';//mailin gonderilecek mail 
	$mailgonder->Password   = 'secret';// mail sifresi      
	$mailgonder->SMTPSecure = "tls";    
    $mailgonder->Port       = 587;                            
    $mailgonder->SMTPOptions =array( 'ssl'=>[
	  'verify_peer'=>false,// ssl dogrulaması
	  'verify_peer_name'=>false,
	  'allow_self_signed'=>true,// imza
		
	],	
);                            

     // kim gonderecek
    $mailgonder->setFrom('info@extaregitim', 'Extra Egitim');// kimden gidecek
	
	 $mailgonder->addAddress('Volksn@gmail.com', "volkan");// kime gidicek
	 $mailgonder->addReplyTo('info@example.com', 'Information');//cevaplama-yanıtla

	
      
   /*
    // mail içindeki resim dosya vs 
    $mailgonder->addAttachment('/var/tmp/file.tar.gz'); //Add attachments
    $mailgonder->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
*/
	
	
	/*
    //Gönderim turu
    $mailgonder->isHTML(true);  // html icerbilirmi
    $mailgonder->Subject = 'Here is the subject';// konu
	$mailgonder->MsgHTML("mailin govdesi");// mail icerigi aynı bu dah iyi ama
	*/

	/*
    $mailgonder->Body    = 'This is the HTML message body <b>in bold!</b>';// mail icerigi
    $mailgonder->AltBody = 'This is the body in plain text for non-HTML mail clients';//mailin   icerigi (html maili kabul etmeyen sunuclar için )
*\/
    $mailgonder->send();// maili gonderilmesini sağlar
    echo  "mail gonderiledi";

} catch (Exception $e) {
    echo "Mail gonderim  hatası <br> hata aciklamsı : ",$mailgonder->ErrorInfo;
}

// not: attecment ve gizili içerik (adcc ) harici başka birşey eklemene gerek yok en doğru yapı budur smtp leri sana sunucu firması vericek 


*/


 function filtrele($deger){
	   $islembir=trim($deger);
	   $islemiki=strip_tags($islembir);
	   $islemuc=htmlspecialchars($islemiki,ENT_QUOTES);
	     $sonuc=$islemuc;
	 return $sonuc;
	 
	 
 }


$gelenad=filtrele($_POST["AdinizSoyadiniz"]);
$gelentelefon=filtrele($_POST["TelefonNumarasi"]);
$gelenmail=filtrele($_POST["MailAdresi"]);
$gelenkonu=filtrele($_POST["Konusu"]);
$gelenmsj=filtrele($_POST["mesaj"]);

die();

$mailgonder = new PHPMailer(true);

try {
    $mailgonder->SMTPDebug = 2;   
    $mailgonder->isSMTP(); 
    $mailgonder->Host       = 'mail.extraegitim.net';
	$mailgonder->SMTPAuth   = true;
	
	$mailgonder->Charset  ="utf-8";
	
	$mailgonder->Username   = 'user@example.com';
	$mailgonder->Password   = 'secret';     
	$mailgonder->SMTPSecure = "tls";    
    $mailgonder->Port       = 587;                            
    $mailgonder->SMTPOptions =array( 'ssl'=>[
	  'verify_peer'=>false,
	  'verify_peer_name'=>false,
	  'allow_self_signed'=>true
		
	],	
);
	
	  $mailgonder->setFrom($gelenmail, $gelenad);
	 $mailgonder->addAddress('Volkanalakent@gmail.com', "volkan");
	 $mailgonder->addReplyTo($gelenmail, $gelenad);

	
    $mailgonder->isHTML(true);  
    $mailgonder->Subject = $gelenkonu;
	$mailgonder->MsgHTML($gelenmsj);
	
	
   
    $mailgonder->send();
    echo  "mail gonderiledi";

} catch (Exception $e) {
    echo "Mail gonderim  hatası <br> hata aciklamsı : ",$mailgonder->ErrorInfo;	
}
?>