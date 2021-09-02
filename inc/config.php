<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/common.php");

$val = $_COOKIE["switchScreen"];

/*=====================================================

	サイト情報

=====================================================*/

// サイトURL統一
if ($_SERVER['HTTPS'] == "on") {
	$PROTOCOL = "https://";
} else {
	$PROTOCOL = "http://";
}
define("CANONICAL", $PROTOCOL . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);


//サイト名
define("SITE_NAME", "SDGsへの取組み｜株式会社レンティック中部");

//キーワード
define("KEY_WORD", "リネンサプライ,寝具レンタル,家具リース,介護用品リース,ビル管理メンテナンス,リースキン,ビル清掃管理,ビル空調管理,玄関マット,業務用マット,オムツリース,ユニフォームレンタル,タオル類のサプライ");

//ディスクリプション
define("DESCRIPTION", "ホテル・医療施設などへのリネンサプライ、ユニフォームレンタル、寝具レンタル、介護用品販売・レンタル・ホームヘルプサービス、ビル管理・空調設備管理・清掃管理");

//H1文言
define("SEO_WORDS", "");
