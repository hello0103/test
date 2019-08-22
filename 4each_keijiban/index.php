<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset="utf-8">
        <title>4eachblog掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
<body>
    
    <?php
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=yoshida;host=localhost;","root","mysql");
    $stmt = $pdo->query("select*from 4each_keijiban");
   
    
    
     ?>
    
    
        <img src="4eachblog_logo.jpg">
   
    
<header>
    <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
    </ul>
</header>
    
<main>
    <div class="main-container">
        <div class="left">
        
            <h1>プログラミングに役立つ掲示板</h1>
            
            <form method="post" action="insert.php">
                <h2>入力フォーム</h2>
                <div>
                <label>ハンドルネーム</label>
                <br>
                    <input type="text" class="text" size="30" name="handlename">
                </div>
                
                <div>
                <label>タイトル</label>
                    <br>
                    <input type="text" class="text" size="30" name="title">
                </div>
                
                <div>
                <label>コメント</label>
                    <br>
                    <textarea cols="40" rows="7" name="comments"></textarea>
                </div>
                
                <div>
                <input type="submit" class="submit" value="投稿する">
                </div> 
            </form>
       </div>
    
     <div class="right">     
    <div class="kiji">          
    <h3>人気の記事</h3>
      <ul>  
        <li>PHPオススメ本</li>
        <li>PHP MyAdminの使い方</li>
        <li>いま人気のエディタTop5</li>
        <li>HTMLの基礎</li>
       </ul> 
    <h3>オススメリンク</h3>
       <ul> 
        <li>インターノウス株式会社</li>
        <li>XAMPPのダウンロード</li>
        <li>Eclipseのダウンロード</li>
        <li>Braketsのダウンロード</li>
       </ul> 
    <h3>カテゴリ</h3>
      <ul>  
        <li>HTML</li>
        <li>PHP</li>
        <li>MySQL</li>
        <li>JavaScript</li>
      </ul>
          </div>  
   </div> 
        
        <?php
        while($row = $stmt->fetch()){
                echo "<div class='title'>";
                echo "<h2>".$row['title']."</h2>";
                echo $row['comments'];
                echo "<h4>posted by".$row['handlename']."</h4>";
                echo "</div>";
        }
        
              
        ?>
        
           
        </div>   
</main>
    
<footer>
    copyright internous | 4each blog is the one which provides A to Z about programing.
    
    </footer>
    
    
    
    
    
</body>
    
    
</html>