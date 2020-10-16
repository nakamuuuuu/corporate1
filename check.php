<?php
  $firm = htmlspecialchars($_POST['firm']);
  $name = htmlspecialchars($_POST['name']);
  $phone = htmlspecialchars($_POST['phone']);
  $mail = htmlspecialchars($_POST['mail']);
  $comments = htmlspecialchars($_POST['comments']);

  if ($firm == '') {
    $firm_result = '入力されていません。';
  } else {
    $firm_result =  $firm ;
  }
  if ($name == '') {
    $name_result = '入力されていません。';
  } else {
    $name_result =  $name.'様';
  }
  if ($phone == '') {
    $phone_result = '入力されていません。';
  } else {
    $phone_result =  $phone;
  }
  if ($mail == '') {
    $mail_result = '入力されていません。';
  } else {
    $mail_result =  $mail;
  }
  // お問い合わせ内容
  if ($comments == '') {
    $comments_result = '入力されていません。';
  } else {
    $comments_result =  $comments;
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
      <div class="form">
      <h1>お問い合わせ内容確認</h1>
      <p>お問い合わせ内容はこちらで宜しいでしょうか？<br>
         よろしければ「送信する」ボタンを押して下さい。</p>
      </div>
      <div class="list">
                    <label>会社名</label>
                    <p><?php echo $firm_result; ?></p>
                </div>
                <div class="list">
                    <label>氏名</label>
                    <p><?php echo $name_result; ?></p>
                </div>
                <div class="list">
                    <label>電話番号</label>
                    <p><?php echo $phone_result; ?></p>
                </div>
                <div class="list">
                    <label>メールアドレス</label>
                    <p><?php echo $mail_result; ?></p>
                </div>
                <div class="list">
                    <label>お問い合わせ内容</label>
                    <p><?php echo $comments_result ?></p>
                </div>
              
            </div>
        <input type="button" value="内容を修正する" onclick="history.back(-1)">
        <button type="submit" name="submit">送信する</button>
    </form>
</div>
      </section>
    </body>
    </html>