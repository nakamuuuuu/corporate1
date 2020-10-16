<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="./style.css">
      <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    </head>
    <body>
    <header>
      <div class="header-left">
      <div class="logo"><i class="far fa-smile"></i>SMILING</div>
      </div>
      <div class="header-right">
      <nav>
    <ul>
      <li><a class="menu"href="#home">home</a></li>
      <li><a class="menu"href="#feature">feature</a></li>
      <li><a class="menu"href="#access">access</a></li>
      <li><a class="menu"href="#news">news</a></li>
      <li><a class="menu"href="#contact">contact</a></li>
</ul>
    </nav>
      </div>
    </header>
    <main>
      <section id="home"class="main1">
        <div class="main-vitual">
          <h1>SMAILING</h1>
        </div>
      </section>
      <section id="feature" class="main2">
        <div class="feature-top">
          <h1>FEATURE</h1>
        </div>
        <div class="feature-bottom">
          <div class="contents">
            <img src="../corporate1/img/pexels-vova-krasilnikov-4199723.jpg"alt="" height="150px" width="200px">
            <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
          </div>
          <div class="contents">
            <img src="../corporate1/img/pexels-lisa-fotios-5378392.jpg" alt=""height="150px" width="200px">
            <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
          </div>
          <div class="contents">
            <img src="../corporate1/img/pexels-julia-kuzenkov-1132276.jpg" alt=""height="150px" width="200px">
            <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
          </div>
        </div>
      </section>
      <section id="access"class="main3">
        <div class="access">
          <h1>ACCESS</h1>
        </div>
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.8280303808788!2d139.76493611525882!3d35.68123618019432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1602615974348!5m2!1sja!2sjp" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
         </div>
      </section>
      <section id="news" class="main4">
        <div class="news">
          <h1>NEWS</h1>
        </div>
        <div class="news_block">
              
          <dl>
            <dt>2020.09.30</dt>
            <dd><a href="">お知らせを更新しました。</a></dd>
          </dl>
        
          <dl>
            <dt>2020.09.16</dt>
            <dd><a href="">ブログを更新しました。</a></dd>
          </dl>
        
          <dl>
            <dt>2019.10.23</dt>
            <dd><a href="">お知らせを更新しました。</a></dd>
          </dl>
        
          <dl>
            <dt>2019.09.30</dt>
            <dd><a href="">ブログを更新しました。</a></dd>
          </dl>
        </div>
        <div class="news-button">
          <a href="#" class="btn">News一覧へ</a>
        </div>
      </section>
      <section id ="contact"class="main5">
        <div class="contact">
        <h1>CONTACT</h1>
      </div>
      <div class="Form">
        <form method="POST" action="./check.php">
        <div class="Form-Item">
          <p class="Form-Item-Label">会社名</p>
          <input type="text" name="firm"class="Form-Item-Input" placeholder="例）株式会社令和">
        </div>
        <div class="Form-Item">
          <p class="Form-Item-Label">氏名</p>
          <input type="text" name="name"class="Form-Item-Input" placeholder="例）山田太郎">
        </div>
        <div class="Form-Item">
          <p class="Form-Item-Label">電話番号</p>
          <input type="text" name="phone"class="Form-Item-Input" placeholder="例）000-0000-0000">
        </div>
        <div class="Form-Item">
          <p class="Form-Item-Label">メールアドレス</p>
          <input type="email" name="mail" class="Form-Item-Input" placeholder="例）example@gmail.com">
        </div>
        <div class="Form-Item">
          <p class="Form-Item-Label isMsg">お問い合わせ内容</p>
          <textarea name="comments"class="Form-Item-Textarea"></textarea>
        </div>
        <input type="submit" class="Form-Btn" value="送信する">
      </div>
      </form>
      </section>
    </main>
    <footer></footer>
    </body>
    </html>