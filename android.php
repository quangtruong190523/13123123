<?
// ini_set("display_errors", 1);
ini_set("log_errors", 1);
ini_set("error_log", "log.txt");
// include your composer dependencies
require_once 'vendor/autoload.php';

$client = new Google_Client();
$client->setApplicationName('Avatar Musik');
// $client->setClientId('371017999734-oe1ki9d8so3qqmhm3gfenuovunb4quai.apps.googleusercontent.com');
$key = file_get_contents('api-project-671025607724-5ef9fb2012f8.p12');
// $service_account_name = '371017999734-6k0m5qnlp4bbic5jgfvc9fkrv7jc5fu9@developer.gserviceaccount.com';

$client->setAuthConfig('api-project-671025607724-42567b8b3da4.json');
$client->setScopes(array('https://www.googleapis.com/auth/androidpublisher'));

// OR use environment variables (recommended)

putenv('GOOGLE_APPLICATION_CREDENTIALS=api-project-671025607724-42567b8b3da4.json');
$client->useApplicationDefaultCredentials();
$client->refreshTokenWithAssertion();
$token = $client->getAccessToken(); //this should work now
$PACKAGE_NAME = "com.teamobi.avalarland";

$productSku = mysql_escape_string($_REQUEST['product']);
// $productSku = "htthgem25";
$productToken = mysql_escape_string($_REQUEST['token']);
// $productToken = "jheehncmmkaoikfnoajdilkk.AO-J1Oxb0kCm0h3xRdsvPXVxGsle_Ed_yDPRhpSL8HvFiIKnAD-v7Tk1t4Z3GdImhP98yGJrOMqu8kjv6mtZkGEtkRDLpgq58mHkI4MtqUjt7Ryp8sAZWPJYDhHxGf-Ww0ZzHeEqm9aZ";

try {
	// $service = new Google_Service_AndroidPublisher( $client ); 
	// var_dump($token['access_token']);
	// $googleApiResult = $service->inapppurchases->get($PACKAGE_NAME, $productSku, $productToken);
	$f = @file_get_contents("https://www.googleapis.com/androidpublisher/v3/applications/$PACKAGE_NAME/purchases/products/$productSku/tokens/$productToken?access_token=" . $token['access_token']);
	$check = json_decode($f);
	// var_dump($f);
	//{ "kind": "androidpublisher#productPurchase", "purchaseTimeMillis": "1539245729926", "purchaseState": 0, "consumptionState": 1, "developerPayload": "", "orderId": "GPA.3338-0685-5991-94944", "purchaseType": 0, "acknowledgementState": 1 }
	if ($check->acknowledgementState == 1 and $check->purchaseState == 0) {
		//dieuky: 7 ; thantien: 8; avatar musik 12
		//game_id
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		define("__HOST", "127.0.0.1");
		define("__USER", "am");
		define("__PASS", "Av@ta@RrMuISk@!#$");
		define("__DB_NAME", "`am`.");
		$link = mysql_connect(__HOST, __USER, __PASS);
		mysql_query("SET NAMES 'utf8';", $link);
		mysql_query("SET SESSION time_zone='+7:00';", $link);
		$che = mysql_fetch_row(mysql_query("select `id` from " . __DB_NAME . "gg where `token` = '" . $productToken . "';"));
		// error_log("check: select `id` from ".__DB_NAME."gg where `token` = '{".$productToken."}';");
		if ($che[0]) {
			// error_log("check: select `id` from ".__DB_NAME."gg where `token` = '".$productToken."';");
			error_log("double: $che[0] | " . $_REQUEST['username'] . " | " . $productToken);
			echo 0;
			exit;
		}
		// $che2 = mysql_fetch_row(mysql_query("select count(`id`) from ".__DB_NAME."gg where `username` = '".$_POST['username']."'
		// and `date` > '".date('Y-m-d')."';"));
		// if($che2[0] >= 5){
		// error_log("Max: $che2[0] | ".$_POST['username']." | ".$productToken);
		// echo 0;
		// exit;
		// }
		$query = "insert into " . __DB_NAME . "gg (`sku`,`token`,`game`,`username`,`date`, `orderid`) 
		value ('" . $productSku . "','" . $productToken . "','" . $_REQUEST['game'] . "', '" . $_REQUEST['username'] . "', NOW(), '" . $_REQUEST['orderid'] . "');";
		error_log($query);
		$check = mysql_query($query);
		$idd = mysql_insert_id();
		error_log($idd);
		// if($check){

		switch ($productSku) {
			case 'al_gold_1':
				$p = 23000;
				break;
			case 'al_gold_5':
				$p = 115000;
				break;
			case 'al_gold_10':
				$p = 230000;
				break;
			case 'al_gold_20':
				$p = 460000;
				break;
			case 'al_gold_50':
				$p = 1150000;
				break;
		}
		$t = "luong";
		if (!empty($idd)) {
			$ttt = file_get_contents("http://27.0.14.41/naptien/naptiendirect.php?provider=google&password=apple123&username=" . $_REQUEST['username'] . "&vnd=" . $p . "&game=11&s=0&moneytype=" . $t . "&inputid=" . time());
			mysql_query("update " . __DB_NAME . "gg set `text` = '{$ttt}' where `id` = '{$idd}';");
			error_log($ttt);
			echo 1;
		}
	} else {
		echo -1;
	}
} catch (Exception $e) {
	echo -1;
	error_log($e->getMessage());
	// var_dump( $e->getMessage() ); 
}
?>



[23-Mar-2023 10:08:37 Asia/Ho_Chi_Minh] 0|2153028|1150|11: Ban da nap 1150 luong vao tai khoan SoloPlayer.
[23-Mar-2023 10:08:37 Asia/Ho_Chi_Minh] 0|2153027|1150|11: Ban da nap 1150 luong vao tai khoan SoloPlayer.
[23-Mar-2023 10:08:37 Asia/Ho_Chi_Minh] double: 181710 | SoloPlayer | maacmochoekcpnibcdpgmomo.AO-J1OyxMEv6i3ydxtN7GzJL8Ia4juxFa90ELUmrbbpFvOyk7fAgV2ON2l6F0CKr-tBCx9R3q1IBsccSsFoI3CReWTJfgUyEcOlAFz8VtIBi-NgqheBGQSM
[23-Mar-2023 10:08:37 Asia/Ho_Chi_Minh] double: 181710 | SoloPlayer | maacmochoekcpnibcdpgmomo.AO-J1OyxMEv6i3ydxtN7GzJL8Ia4juxFa90ELUmrbbpFvOyk7fAgV2ON2l6F0CKr-tBCx9R3q1IBsccSsFoI3CReWTJfgUyEcOlAFz8VtIBi-NgqheBGQSM
[23-Mar-2023 10:10:18 Asia/Ho_Chi_Minh] insert into `am`.gg (`sku`,`token`,`game`,`username`,`date`, `orderid`)
value ('al_gold_50','hboidhiemfabjflolkjklmon.AO-J1OzeoY1H2GL6BEbruDffQa_Y_V-sqhtaF_oIm21t7IZKU9VgAZ8MgE6EKBJG9gpXAPu9IDQJdakG4yy8XMf9GVFJBPq89eUaUB7Nno7hCQZETYyaPnA','', 'SoloPlayer', NOW(), 'GPA.3396-1047-6147-11771');
[23-Mar-2023 10:10:18 Asia/Ho_Chi_Minh] 0|2153030|1150|11: Ban da nap 1150 luong vao tai khoan SoloPlayer.
[23-Mar-2023 10:10:18 Asia/Ho_Chi_Minh] double: 181711 | SoloPlayer | hboidhiemfabjflolkjklmon.AO-J1OzeoY1H2GL6BEbruDffQa_Y_V-sqhtaF_oIm21t7IZKU9VgAZ8MgE6EKBJG9gpXAPu9IDQJdakG4yy8XMf9GVFJBPq89eUaUB7Nno7hCQZETYyaPnA
[23-Mar-2023 10:10:18 Asia/Ho_Chi_Minh] double: 181711 | SoloPlayer | hboidhiemfabjflolkjklmon.AO-J1OzeoY1H2GL6BEbruDffQa_Y_V-sqhtaF_oIm21t7IZKU9VgAZ8MgE6EKBJG9gpXAPu9IDQJdakG4yy8XMf9GVFJBPq89eUaUB7Nno7hCQZETYyaPnA
[23-Mar-2023 10:10:19 Asia/Ho_Chi_Minh] double: 181711 | SoloPlayer | hboidhiemfabjflolkjklmon.AO-J1OzeoY1H2GL6BEbruDffQa_Y_V-sqhtaF_oIm21t7IZKU9VgAZ8MgE6EKBJG9gpXAPu9IDQJdakG4yy8XMf9GVFJBPq89eUaUB7Nno7hCQZETYyaPnA
[23-Mar-2023 10:10:59 Asia/Ho_Chi_Minh] insert into `am`.gg (`sku`,`token`,`game`,`username`,`date`, `orderid`)
value ('al_gold_50','ihbakccgbkgjmbbhagpagldo.AO-J1OwwaxLT7_2owRjtS9xLBrfAi6q_VQ4eaHrGv5-yoZTgybzBlur_yLFJ2aGu4HdvAmPeBnM8PDFq1IYeVwB-igzOn6h2mfqoKbLz-Z8vLPDcvAjh4KA','', 'SoloPlayer', NOW(), 'GPA.3306-0507-8455-21707');
[23-Mar-2023 10:10:59 Asia/Ho_Chi_Minh] insert into `am`.gg (`sku`,`token`,`game`,`username`,`date`, `orderid`)
value ('al_gold_50','ihbakccgbkgjmbbhagpagldo.AO-J1OwwaxLT7_2owRjtS9xLBrfAi6q_VQ4eaHrGv5-yoZTgybzBlur_yLFJ2aGu4HdvAmPeBnM8PDFq1IYeVwB-igzOn6h2mfqoKbLz-Z8vLPDcvAjh4KA','', 'SoloPlayer', NOW(), 'GPA.3306-0507-8455-21707');
[23-Mar-2023 10:10:59 Asia/Ho_Chi_Minh] insert into `am`.gg (`sku`,`token`,`game`,`username`,`date`, `orderid`)
value ('al_gold_50','ihbakccgbkgjmbbhagpagldo.AO-J1OwwaxLT7_2owRjtS9xLBrfAi6q_VQ4eaHrGv5-yoZTgybzBlur_yLFJ2aGu4HdvAmPeBnM8PDFq1IYeVwB-igzOn6h2mfqoKbLz-Z8vLPDcvAjh4KA','', 'SoloPlayer', NOW(), 'GPA.3306-0507-8455-21707');
[23-Mar-2023 10:10:59 Asia/Ho_Chi_Minh] double: 181712 | SoloPlayer | ihbakccgbkgjmbbhagpagldo.AO-J1OwwaxLT7_2owRjtS9xLBrfAi6q_VQ4eaHrGv5-yoZTgybzBlur_yLFJ2aGu4HdvAmPeBnM8PDFq1IYeVwB-igzOn6h2mfqoKbLz-Z8vLPDcvAjh4KA
[23-Mar-2023 10:10:59 Asia/Ho_Chi_Minh] 0|2153032|1150|11: Ban da nap 1150 luong vao tai khoan SoloPlayer.
[23-Mar-2023 10:10:59 Asia/Ho_Chi_Minh] 0|2153033|1150|11: Ban da nap 1150 luong vao tai khoan SoloPlayer.
[23-Mar-2023 10:10:59 Asia/Ho_Chi_Minh] 0|2153031|1150|11: Ban da nap 1150 luong vao tai khoan SoloPlayer.
[23-Mar-2023 10:13:47 Asia/Ho_Chi_Minh] insert into `am`.gg (`sku`,`token`,`game`,`username`,`date`, `orderid`)
value ('al_gold_50','iaapaogjddhfpenmnkbaeoef.AO-J1OwqF6-Vahges40qLA81znyc5q_k9E0YahwkhJ3Q89SUhgEU8To4_BqnRSPwX4zaiy6zklEBWK-gucburOGOoxBz_P-9Ly6GFI-TQ4cyj0fe40FrvHk','', 'SoloPlayer', NOW(), 'GPA.3302-9460-5935-78010');
[23-Mar-2023 10:13:47 Asia/Ho_Chi_Minh] double: 181713 | SoloPlayer | iaapaogjddhfpenmnkbaeoef.AO-J1OwqF6-Vahges40qLA81znyc5q_k9E0YahwkhJ3Q89SUhgEU8To4_BqnRSPwX4zaiy6zklEBWK-gucburOGOoxBz_P-9Ly6GFI-TQ4cyj0fe40FrvHk
[23-Mar-2023 10:13:47 Asia/Ho_Chi_Minh] double: 181713 | SoloPlayer | iaapaogjddhfpenmnkbaeoef.AO-J1OwqF6-Vahges40qLA81znyc5q_k9E0YahwkhJ3Q89SUhgEU8To4_BqnRSPwX4zaiy6zklEBWK-gucburOGOoxBz_P-9Ly6GFI-TQ4cyj0fe40FrvHk
[23-Mar-2023 10:13:47 Asia/Ho_Chi_Minh] double: 181713 | SoloPlayer | iaapaogjddhfpenmnkbaeoef.AO-J1OwqF6-Vahges40qLA81znyc5q_k9E0YahwkhJ3Q89SUhgEU8To4_BqnRSPwX4zaiy6zklEBWK-gucburOGOoxBz_P-9Ly6GFI-TQ4cyj0fe40FrvHk
[23-Mar-2023 10:13:47 Asia/Ho_Chi_Minh] 0|2153036|1150|11: Ban da nap 1150 luong vao tai khoan SoloPlayer.
[23-Mar-2023 10:14:01 Asia/Ho_Chi_Minh] insert into `am`.gg (`sku`,`token`,`game`,`username`,`date`, `orderid`)
value ('al_gold_1','fodojcfmpnmnkpkmpdlloape.AO-J1OyoNy1vc61kN6lFvDNZqg5MvjvTa86Zo656RZCQhFqIvUwFlImIOohHrfVOq9udGtYW4dn--QuZtXitl0WPVyhtZ82fi6l4_LX5ksS1XquOMsp3yYY','', 'SoloPlayer', NOW(), 'GPA.3352-9091-3875-55388');
[23-Mar-2023 10:14:01 Asia/Ho_Chi_Minh] insert into `am`.gg (`sku`,`token`,`game`,`username`,`date`, `orderid`)
value ('al_gold_1','fodojcfmpnmnkpkmpdlloape.AO-J1OyoNy1vc61kN6lFvDNZqg5MvjvTa86Zo656RZCQhFqIvUwFlImIOohHrfVOq9udGtYW4dn--QuZtXitl0WPVyhtZ82fi6l4_LX5ksS1XquOMsp3yYY','', 'SoloPlayer', NOW(), 'GPA.3352-9091-3875-55388');
[23-Mar-2023 10:14:01 Asia/Ho_Chi_Minh] double: 181714 | SoloPlayer | fodojcfmpnmnkpkmpdlloape.AO-J1OyoNy1vc61kN6lFvDNZqg5MvjvTa86Zo656RZCQhFqIvUwFlImIOohHrfVOq9udGtYW4dn--QuZtXitl0WPVyhtZ82fi6l4_LX5ksS1XquOMsp3yYY
[23-Mar-2023 10:14:01 Asia/Ho_Chi_Minh] 0|2153037|23|11: Ban da nap 23 luong vao tai khoan SoloPlayer.
[23-Mar-2023 10:14:01 Asia/Ho_Chi_Minh] 0|2153038|23|11: Ban da nap 23 luong vao tai khoan SoloPlayer.
[23-Mar-2023 10:14:02 Asia/Ho_Chi_Minh]