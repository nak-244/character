<?php

// ----------基本設定開始---------- //

// 送信先メールアドレス
$adminMail = "t09024656860@gmail.com";


// 送信先メールアドレスを配列化(編集しないでください)
$adminArray = array();
$adminArray = explode(',', $adminMail);


// 送信者名
$adminName = "株式会社オープンループパートナーズ";


// 送信後に戻るURL
$returnUrl = "https://www.olp.co.jp/lp/2019character/";


// 送信完了メッセージ
$completionMessage = <<<EOD
エントリー受付完了しました。
ありがとうございます。
EOD
;

// リターンメールのメールタイトル
$returnMailTitle = "【しごとらオリジナルキャラクター】エントリー受け付けました。";

// リターンメールのヘッダーメッセージ
$returnMailHeader = <<<EOD
【しごとらオリジナルキャラクター】エントリーありがとうございます。

厳正な審査の上、選考を進めさせていただきます。

EOD
;


// リターンメールのフッターメッセージ
$returnMailFooter = <<<EOD

株式会社オープンループパートナーズ

EOD
;

// ----------基本設定終了---------- //


// ----------添付ファイル設定開始---------- //

// 拡張子制限（0=しない・1=する）
$ext_denied = 0;
// 許可する拡張子リスト
$ext_allow1 = "jpg";
$ext_allow2 = "jpeg";
$ext_allow3 = "gif";
$ext_allow4 = "pdf";
// 配列に格納しておく
$EXT_ALLOWS = array($ext_allow1, $ext_allow2, $ext_allow3, $ext_allow4);

// アップロード容量制限（0=しない・1=する）
$maxmemory = 1;
// 最大容量（KB）
$max = 3000;

// ----------添付ファイル設定終了---------- //


// ----------ここから下は変更不要---------- //

require_once(__DIR__ . "/../lib/functions.php");
require_once(__DIR__ . "/autoload.php");

session_start();
