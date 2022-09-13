<?php
// デバッグ関数
function dd($param)
{
  echo "---------------------------------------------";
  print "<pre>";
  var_dump($param);
  exit;
}

//ドキュメントルート以下の階層を取得
$uri = $_SERVER['REQUEST_URI'];
//もし$uriの中にaction.phpという名前があったら削除
if (preg_match('/action.php/', $uri)) {
  $uri = str_replace('action.php', '', $uri);
  //$urlの最後の２文字が"//"だった場合"/"に変更する
  if (mb_substr($uri, '-2') == '//') {    //ここから
    $uri = substr_replace($uri, '', -1, 1);
  }                      //ここまで最後の文字が//の場合しか対応できないので修正する
}

function is_SSL()
{
  if (!empty($_SERVER['https']))
    return true;

  if (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
    return true;

  if (!isset($_SERVER['SERVER_PORT']))
    return false;

  if ($_SERVER['SERVER_PORT'] == 443)
    return true;

  return false;
};

$isSSL = is_SSL();
$prot = $isSSL ? 'https://' : 'http://';
$host = $_SERVER["HTTP_HOST"];
$config['base_url'] = $prot . $host . $uri;
//LP以外からのアクセスの場合はリダイレクトする
if (empty($_POST['from_lp'])) {
  header("Location: {$config['base_url']}index.php");
  exit;
}

//セッションにpostの値をいれる
session_start();
$_SESSION = $_POST;

//入力必須項目
$required = array(
  'name',
  'kana',
	'tel',
  'email',
	'email_confirm',
  'age',
);

// $_POST[]が空だったらindex.phpに戻る
foreach ($required as $value) {
  if (empty($_POST[$value])) {
    header("Location: {$config['base_url']}");
    exit;
  }
}

//メールアドレスがおかしかったらリダイレクト
if (!empty($_POST['email'])) {
  if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['email'])) {
    //正しいのでスルーしてOK
  } else {
    $email_test[] = 1;
  }
}

if (!empty($email_test)) {
  $_SESSION['email_test'] = $email_test;
}

//バリデーション通ったのでセッション削除する
session_destroy();



// 採用担当者送信メール
$to = "yu0210ta.sug@gmail.com";
$subject = '採用LPから応募が入りました';
$text = "
採用LPから応募がありました。
内容をご確認の上、1週間以内にご連絡をお願い致します。

下記の内容で応募いただいています。
==========================

お名前：
{$_POST['name']}

お名前（フリガナ）：
{$_POST['kana']}

電話番号：
{$_POST['tel']}

メールアドレス：
{$_POST['email']}

年齢：
{$_POST['age']}


==============================
";

// 回答者への自動返信メール
$toReply = $_POST['email'];
$subjectReply = '応募を受け付けました - あいおいニッセイ同和損保';
$textReply = "
あいおいニッセイ同和損保です。
この度は、お問い合わせいただき誠にありがとうございます。

内容を確認した上、一週間以内に担当者から改めてご連絡させていただきます。

※下記の内容でお問い合わせを頂いています。
==========================

お名前：
{$_POST['name']}

お名前（フリガナ）：
{$_POST['kana']}

電話番号：
{$_POST['tel']}

メールアドレス：
{$_POST['email']}

年齢：
{$_POST['age']}

==========================
";

if (sendMail($to, $subject,  $text) && sendMail($toReply, $subjectReply,  $textReply)) {
  //header("Location: http://0.0.0.0/confirm.php");
  header("Location: {$config['base_url']}thanks.php");
  exit;
} else {
  exit;
  //header("Location: http://0.0.0.0/index.php");
  header("Location: {$config['base_url']}");
  exit;
}

function sendMail($to = null, $subject = null, $text = null, $file = null)
{
  //初期化
  $res = false;

  //日本語の使用宣言
  mb_language("ja");
  mb_internal_encoding("UTF-8");

  if ($to === null || $subject === null || $text === null) {
    return false;
  }

  // 送信元の設定
  $sender_email = 'yu0210ta.sug@gmail.com';
  $org = '';
  $from = 'yu0210ta.sug@gmail.com';

  // ヘッダー設定
  $header = '';
  $header .= "Content-Type: multipart/mixed;boundary=\"__BOUNDARY__\"\n";
  $header .= "Content-Type: text/plain; charset=\"ISO-2022-JP\"\n";
  //$header .= "Return-Path: " . $sender_email . " \n";
  $header .= "From: " . $from . " \n";
  $header .= "Sender: " . $from . " \n";
  $header .= "Reply-To: " . $sender_email . " \n";
  $header .= "Organization: " . $org . " \n";
  $header .= "X-Sender: " . $org . " \n";
  $header .= "X-Priority: 3 \n";

  // テキストメッセージを記述
  $body = "--__BOUNDARY__\n";
  $body .= "Content-Type: text/plain; charset=\"ISO-2022-JP\"\n\n";
  $body .= $text . "\n";
  $body .= "--__BOUNDARY__\n";

  $returnPath = "-f " . $sender_email;

  //メール送信
  //mb_send_mailは成功したら、true, 失敗したらfalseがカエル
  $res = mb_send_mail($to, $subject, $body, $header, $returnPath);

  return $res;
}
