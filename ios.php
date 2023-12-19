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
$client->setScopes(array('https://www.googleapis.com/auth/androidpublisher') );

// OR use environment variables (recommended)

putenv('GOOGLE_APPLICATION_CREDENTIALS=api-project-671025607724-42567b8b3da4.json');
$client->useApplicationDefaultCredentials();
$client->refreshTokenWithAssertion();
$token = $client->getAccessToken(); //this should work now
$PACKAGE_NAME = "com.teamobi.avalarland";

$productSku = mysql_escape_string($_POST['product']);
// $productSku = "htthgem25";
$productToken = mysql_escape_string($_POST['token']);
// $productToken = "jheehncmmkaoikfnoajdilkk.AO-J1Oxb0kCm0h3xRdsvPXVxGsle_Ed_yDPRhpSL8HvFiIKnAD-v7Tk1t4Z3GdImhP98yGJrOMqu8kjv6mtZkGEtkRDLpgq58mHkI4MtqUjt7Ryp8sAZWPJYDhHxGf-Ww0ZzHeEqm9aZ";

try {  
    // $service = new Google_Service_AndroidPublisher( $client ); 
	// var_dump($token['access_token']);
    // $googleApiResult = $service->inapppurchases->get($PACKAGE_NAME, $productSku, $productToken);
	$f = file_get_contents("https://www.googleapis.com/androidpublisher/v3/applications/$PACKAGE_NAME/purchases/products/$productSku/tokens/$productToken?access_token=".$token['access_token']);
	$check = json_decode($f);
	// var_dump($f);
	//{ "kind": "androidpublisher#productPurchase", "purchaseTimeMillis": "1539245729926", "purchaseState": 0, "consumptionState": 1, "developerPayload": "", "orderId": "GPA.3338-0685-5991-94944", "purchaseType": 0, "acknowledgementState": 1 }
	if($check->acknowledgementState == 1 AND $check->purchaseState == 0){
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
		$che = mysql_fetch_row(mysql_query("select `id` from ".__DB_NAME."gg where `token` = '".$productToken."';"));
		// error_log("check: select `id` from ".__DB_NAME."gg where `token` = '{".$productToken."}';");
		if($che[0]){
			// error_log("check: select `id` from ".__DB_NAME."gg where `token` = '".$productToken."';");
			error_log("double: $che[0] | ".$_POST['username']." | ".$productToken);
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
		$query = "insert into ".__DB_NAME."gg (`sku`,`token`,`game`,`username`,`date`, `orderid`) 
		value ('".$productSku."','".$productToken."','".$_POST['game']."', '".$_POST['username']."', NOW(), '".$_POST['orderid']."');";
		error_log($query);
		$check = mysql_query($query);
		// if($check){
			
		switch($productSku){
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
		$ttt = file_get_contents("http://27.0.14.41/naptien/naptiendirect.php?provider=google&password=apple123&username=".$_POST['username']."&vnd=".$p."&game=11&s=0&moneytype=".$t."&inputid=".time());
		error_log($ttt);
		echo 1;
	}else{
		echo -1;
	}
} catch (Exception $e) {  
	echo -1;
	error_log($e->getMessage());
    // var_dump( $e->getMessage() ); 
}
