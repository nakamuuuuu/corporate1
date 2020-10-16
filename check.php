<?php
  $firm = htmlspecialchars($_POST['firm']);
  $name = htmlspecialchars($_POST['name']);
  $phone = htmlspecialchars($_POST['phone']);
  $mail = htmlspecialchars($_POST['mail']);
  $comments = htmlspecialchars($_POST['comments']);

  if ($firm == '') {
    $firm_result = '会社名が入力されていません。';
  } else {
    $firm_result = '会社名：' . $firm ;
  }
  if ($name == '') {
    $name_result = '氏名が入力されていません。';
  } else {
    $name_result = '氏名：' . $name.'様';
  }
  if ($phone == '') {
    $phone_result = '電話番号が入力されていません。';
  } else {
    $phone_result = '電話番号：' . $phone;
  }
  if ($mail == '') {
    $mail_result = 'メールアドレスが入力されていません。';
  } else {
    $mail_result = 'メールアドレス：' . $mail;
  }
  // お問い合わせ内容
  if ($comments == '') {
    $comments_result = 'お問い合わせ内容が入力されていません。';
  } else {
    $comments_result = 'お問い合わせ内容：' . $comments;
  }

?>
    <!DOCTYPE html>
    <html lang="ja">
    <head>
      <title>入力内容確認</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="./style2.css">
    </head>
    <body>
      <section>
        <div class="confirm">
      <h1>お問い合わせ内容の確認</h1>
      <p>お問い合わせ内容はこちらで宜しいでしょうか？<br>
         よろしければ「送信する」ボタンを押して下さい。</p>
         </div>
         <div class="confirm-contain">
      <p><?php echo $firm_result; ?></p>
      <p><?php echo $name_result; ?></p>
      <p><?php echo $phone_result; ?></p>
      <p><?php echo $mail_result; ?></p>
      <p><?php echo $comments_result; ?></p>
      <form method="post" action="thanks.php">

          <input type="hidden" name="nickname" value="<?php echo $nickname; ?>">
          <input type="hidden" name="email" value="<?php echo $email; ?>">
          <input type="hidden" name="content" value="<?php echo $content; ?>">

          <input type="button" onclick="history.back()" value="戻る">
          <?php if ($nickname != '' && $email != '' && $content != ''): ?>
            <input type="submit" value="OK">
          <?php endif; ?>
      </form>
      </div>
      </section>
    </body>
    </html>