


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!-- 問６．Bootstrap のスタイルシートパスを href に記述-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>

<body style="background-color: #E6E6E6 ;">
　<header class=header  >

<style type="text/css">

.header {
  display       : inline-block;
  width         : 1500px;
  font-size     : 18pt;        /* 文字サイズ */
  text-align    : center;      /* 文字位置   */
  cursor        : pointer;     /* カーソル   */
  padding       : 10px 10px;   /* 余白       */
  background    : #3B5998;     /* 背景色     */
  color         : #ffffff;     /* 文字色     */
  line-height   : 1em;         /* 1行の高さ  */
  transition    : .3s;         /* なめらか変化 */
  box-shadow    : 0px 0px 0px #666666;  /* 影の設定 */
  border        : 0px solid #000066;    /* 枠の指定 */
}

</style>

    <div class="container">
      <div class="row">
        <h1>
        facebook
        </h1>


        <input type="submit" value=" 新しいアカウントを作成" class="button3" >

       <style type="text/css">
.button3 {
  display       : inline-block;
  border-radius : 5%;          /* 角丸       */
  font-size     : 8pt;        /* 文字サイズ */
  text-align    : center;      /* 文字位置   */
  cursor        : poinpter;     /* カーソル   */
  padding       : 1px 1px;   /* 余白       */
  background    : #04B431;     /* 背景色     */
  color         : #ffffff;     /* 文字色     */
  line-height   : 1em;         /* 1行の高さ  */
  transition    : .3s;         /* なめらか変化 */
  box-shadow    : 0px 0px 0px #666666;  /* 影の設定 */
  border        : 0px solid #000066;    /* 枠の指定 */
}
.button3:hover {

}

        </style>

        </header>
        
        <?php

echo '<br>';

   // 問１０．ログインフォームの値を取得しよう
   //echo "ユーザID:" . $_POST['id'];
  //echo "</br>";

  // echo "パスワード:" . $_POST['password'];
  // echo "</br>";

   // 問１１．フォームに値が入力されていない場合「ユーザIDとパスワードを入力してください」と表示しよう。
   if(empty($_POST['id']) || empty($_POST['password'])) {
       echo "</br>";
   } else {
       // 問１２．ファイルからパスワードを取得しよう
       $jsonContents = file_get_contents('./password.json');
       $json = json_decode($jsonContents);  

       // user に入ってる２つの配列のうち 0 番目のオブジェクトの id プロパティを取得したいとき
       echo "jsonファイルのユーザID：" . $json->user[0]->id;   
       echo "</br>";

       // user に入ってる２つの配列のうち 0 番目のオブジェクトの password プロパティを取得したいとき
       echo "jsonファイルのパスワード：" . $json->user[0]->password;  
       echo "</br>"; 
       // 問１３．フォームと json のパスワードを比較して一致したらログインできるようにしよう
       for ($i=0; $i < count($json->user); $i++) {
           if ($_POST['id'] == $json->user[$i]->id) {
               if ($_POST['password'] == $json->user[$i]->password) {
                   header('Location: ./index.php');
                   exit();   
               }
           }
       }
       echo "ユーザIDまたは、パスワードが間違っています。もう一度入力し直してください。";
   }
?>


<!DOCTYPE html>
  <div class="main">
    <div class="container">
    <div class="whiteback" style="text-align:center;width: 800px;">


       <style type="text/css">
.whiteback {
  display       : inline-block;
  width         : 800px;
  display       : flex;
  justify-content: center;
  align-items   : center;
  font-size     : 11pt;        /* 文字サイズ */
  text-align    : center;      /* 文字位置   */

  padding       : 30px 30px;   /* 余白       */
  background    : #FFFFFF;     /* 背景色     */
  color         : #000000;     /* 文字色     */
  line-height   : 1em;         /* 1行の高さ  */
  transition    : .3s;         /* なめらか変化 */
  box-shadow    : 0px 0px 0px #666666;  /* 影の設定 */
  border        : 0px solid #000066;    /* 枠の指定 */
}
.whiteback:hover {

}
</style>
    <!-- 問５．form の acrion属性 と method 属性の追加-->

    <h6 style="text-align:center">   <!-- 中央に寄せる-->
            facebookにログイン<br><br><br>
       

    <form action="login.php" method="post">
        <div class="form-group">
          
            <!-- <label>ユーザID</label> -->
            <input type="text" style="width:500px;height:40px;" class="form-control:center" name="id"  placeholder="メールアドレスまたは電話番号；(ほんとのところID)"><br><br>
          
            <!--style="width:500px;" 問７．Bootstrap のデザインを適用しよう -->

            <!-- 問８．プレースホルダをつけよう -->
            
            <!-- style="text-align"　 問９．必須バリデーションをつけよう -->
        </div>
        <div class="form-group">
            
            <!-- <label>パスワード</label> -->
            <input type="password"style="width:500px;height:40px;" class="form-control:center" name="password"  placeholder="パスワード" require><br><br>
            
            
          </div>
       <!-- 問５．ログインボタンを追加 -->
       
       <input type="submit" value="ログイン" class="button" style="width:500px;"><br><br>

       <style type="text/css">
.button {
  display       : inline-block;
  font-size     : 11pt;        /* 文字サイズ */
  text-align    : center;      /* 文字位置   */
  cursor        : pointer;     /* カーソル   */
  padding       : 12px 9px;   /* 余白       */
  background    : #3B5998;     /* 背景色     */
  color         : #ffffff;     /* 文字色     */
  line-height   : 1em;         /* 1行の高さ  */
  transition    : .3s;         /* なめらか変化 */
  box-shadow    : 0px 0px 0px #666666;  /* 影の設定 */
  border        : 0px solid #000066;    /* 枠の指定 */
}
.button:hover {

}
</style>


       <h8　style="text-align:center">
         アカウントを忘れた場合<br><br>
  </h8>

  <h8　style="text-align:center">
  ―――――または―――――<br><br>
  </h8>

       
        

        <input type="submit" value=" 新しいアカウントを作成" class="button2" style="width:500px;"><br><br>

       <style type="text/css">
.button2 {
  display       : inline-block;
  border-radius : 5%;          /* 角丸       */
  font-size     : 11pt;        /* 文字サイズ */
  text-align    : center;      /* 文字位置   */
  cursor        : pointer;     /* カーソル   */
  padding       : 12px 9px;   /* 余白       */
  background    : #04B431;     /* 背景色     */
  color         : #ffffff;     /* 文字色     */
  line-height   : 1em;         /* 1行の高さ  */
  transition    : .3s;         /* なめらか変化 */
  box-shadow    : 0px 0px 0px #666666;  /* 影の設定 */
  border        : 0px solid #000066;    /* 枠の指定 */
}
.button:hover {

}
  

       </h6>
       

    </form>
    </div>
    </div>
  </div>
</body>
</html>
