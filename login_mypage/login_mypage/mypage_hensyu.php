<?php
mb_internal_encoding("utf8");

//セッションスタート
session_start();
if(empty($_POST['form_mypage'])){
header("Location:login_error.php");
}
?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css"href="mypage_hensyu.css">
    </head>
    <body>
    <header>
            <img src="4eachblog_logo.jpg">
        </header>
       <main>
        <div class=form>
            <h2>会員情報</h2>
            <p class="helloname">こんにちは！<?php echo $_SESSION['name'];?>さん</p>
            <br>
            <div class="photo">
             <img src="<?php echo $_SESSION['picture'];?>">
            </div>    
            <div class="jyouhou">  
            <form action="mypage_update.php"method="post">
            <p>氏名：<input type="text" value="<?php echo $_SESSION['name'];?>"name="name"></p>
            <br>
            <p>メール：<input type="text" value="<?php echo $_SESSION['mail'];?>"name="mail"></p>
            <br>
            <p>パスワード：<input type="text" value="<?php echo $_SESSION['password'];?>"name="password"></p>
            <br>
            </div>
            <div class="comments">
            <textarea value="<?php echo $_SESSION['comments'];?>"name="comments"></textarea>
            </div>
            <div class="botan">
                <input type="submit" class=button2 value="この内容に変更する">
            </form>
            </div>
        </div>
        </main>
    </body>
</html>