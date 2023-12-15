<?php
function myq($str, $fetch=0){
  $sql=mysql_query($str);
  if($fetch==1){
    $sql=mfa($sql);
  }
  return($sql);
}

function mres($data, $force=0){

	if($force==2 || $force==3){
		$data=hc($data);
	}
    if($force==1 || $force==3){
		$data = trim(strip_tags($data));
    }
    if($force==3){
      $data=cch($data);
    }
    $data = mysql_real_escape_string($data);
    return $data;
}

function mfa($sql){
  $data=@mysql_fetch_array($sql);
  return($data);
}

function ekm( $string, $lowercase = true ) {
		$Str1 = array( 'Ú', 'ú', 'á', 'é', 'í', 'ü', 'ö', 'ű', 'ó', 'ő', 'Á', 'É', 'Í', 'Ü', 'Ű', 'Ó', 'Ö', 'Ő', 'ä', 'Ä', 'ß' );
		$Str2 = array( 'U', 'u', 'a', 'e', 'i', 'u', 'o', 'u', 'o', 'o', 'A', 'E', 'I', 'U', 'U', 'O', 'O', 'O', 'a', 'A', 'ss' );
		$string = str_replace( $Str1, $Str2, $string );
		$Out = '';
		$Hossz = strlen( $string );
		$Allow = 'qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM-1234567890';
		for ( $i = 0; $i < $Hossz; $i++ ) {
			$Out .= strpos( $Allow, $string[$i] ) === false ? '-' : $string[$i];
		}
		while ( strpos( $Out, '--' ) ) {
			$Out = str_replace( '--', '-', $Out );
		}
		$Hossz = strlen( $Out );
		$Out = $Out[$Hossz - 1] == '-' ? substr( $Out, 0, $Hossz - 1 ) : $Out;
		$Out = $Out[0] == '-' ? substr( $Out, 1, $Hossz - 1 ) : $Out;
		return $lowercase == false ? $Out : strtolower( $Out );
}

function getPath($restr=''){
$in=$_SERVER['REQUEST_URI'];
if(!empty($restr)){$in=str_replace($restr,'',$in);}
preg_match_all("/([^\?]*)(.*)/", $in, $__url_temp);
if ($__url_temp[1]) $__url['_path']=$__url_temp[1][0];
$__url_temp=explode('/', $__url['_path']);
array_shift($__url_temp);
$__url_temp2=array_pop($__url_temp);
if ($__url_temp2!=NULL) array_push($__url_temp, $__url_temp2);
if ($__url_temp) $__url['path']=$__url_temp;
if(!isset($__url['path'][0]) || empty($__url['path'][0])){
  $__url['path'][]='home';
}
return($__url['path']);
}

function earr($dt){
  echo'<pre>';
  print_r($dt);
  echo'</pre>';
}

function getLast(){
return rand(10000000,99999999);
}

function chkmail($email){
$isValid = true;
$atIndex = strrpos($email, "@");
if (is_bool($atIndex) && !$atIndex){$isValid = false;}else{
$domain = substr($email, $atIndex+1);
$local = substr($email, 0, $atIndex);
$localLen = strlen($local);
$domainLen = strlen($domain);
if ($localLen<1 || $localLen>64){
$isValid = false;
}else if($domainLen<1 || $domainLen>255){
$isValid = false;
}else if($local[0]=='.' ||$local[$localLen-1]=='.'){
$isValid = false;
}else if(preg_match('/\\.\\./',$local)){
$isValid = false;
}else if(!preg_match('/^[A-Za-z0-9\\-\\.]+$/',$domain)){
$isValid = false;
}else if(preg_match('/\\.\\./',$domain)){
$isValid = false;
}else if(!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/', str_replace("\\\\","",$local))){
if (!preg_match('/^"(\\\\"|[^"])+"$/',str_replace("\\\\","",$local))){$isValid = false;}
}
if ($isValid && !(checkdnsrr($domain,"MX") || checkdnsrr($domain,"A"))){$isValid = false;}
}
return $isValid;
}

function send_mail($mail, $recipient, $text, $title=''){
global $domain;
try {
  $mail->Host       = "smtp.nibroker.com";
  $mail->SMTPAuth   = true;
  $mail->SMTPSecure = "tls"; 
  $mail->Port       = 587;
  $mail->Username   = "noreply@doubledice.biz";
  $mail->Password   = "Joker648590$$";
  $mail->AddReplyTo('info@doubledice.co', 'DoubleDice.Co');
  $mail->AddAddress($recipient);
  $mail->SetFrom('noreply@doubledice.co', 'DoubleDice.Co');
  $mail->Subject = (empty($title)?'Double Dice.Co':$title);
  $mail->CharSet ='UTF-8';
  $mail->AddEmbeddedImage($_SERVER['DOCUMENT_ROOT'].'/hirlevel/imgtop.png', "imgtop", "imgtop.png", "base64","image/png");
  $mail->AddEmbeddedImage($_SERVER['DOCUMENT_ROOT'].'/hirlevel/imgbottom.png', "imgbottom", "imgbottom.png", "base64","image/png");
  $mail->AddEmbeddedImage($_SERVER['DOCUMENT_ROOT'].'/hirlevel/menu1.png', "menu1", "menu1.png", "base64","image/png");
  $mail->AddEmbeddedImage($_SERVER['DOCUMENT_ROOT'].'/hirlevel/menu2.png', "menu2", "menu2.png", "base64","image/png");
  $mail->AddEmbeddedImage($_SERVER['DOCUMENT_ROOT'].'/hirlevel/menu3.png', "menu3", "menu3.png", "base64","image/png");
  $mail->AddEmbeddedImage($_SERVER['DOCUMENT_ROOT'].'/hirlevel/menu4.png', "menu4", "menu4.png", "base64","image/png");
  $mail->AddEmbeddedImage($_SERVER['DOCUMENT_ROOT'].'/hirlevel/menu5.png', "menu5", "menu5.png", "base64","image/png");
  $mail->AddEmbeddedImage($_SERVER['DOCUMENT_ROOT'].'/hirlevel/menu6.png', "menu6", "menu6.png", "base64","image/png");
  $mail->AddEmbeddedImage($_SERVER['DOCUMENT_ROOT'].'/hirlevel/menu7.png', "menu7", "menu7.png", "base64","image/png");
  $html=file_get_contents($domain.'/hirlevel/template.html');
  $html=str_replace('{content}',$text,$html);
  $mail->MsgHTML($html);
  $mail->Send();
  echo "Message Sent OK<p></p>\n";
} catch (phpmailerException $e) {
  //file_put_contents($_SERVER['DOCUMENT_ROOT'].'/logs/mail-'.time().'.txt',$e->errorMessage());
} catch (Exception $e) {
  //file_put_contents($_SERVER['DOCUMENT_ROOT'].'/logs/mail-'.time().'.txt',$e->getMessage());
}
}

?>