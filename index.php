<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <h1>FizzBuzz問題</h1>
    <div class="form-wrap">
      <?php
        $fizz = $_POST['fizzNum'];
        $buzz = $_POST['buzzNum'];
      ?>
      <form action="./" method="POST">
        <p class="input-wrap">
          <span>FizzNum: </span><span><input type="text" name="fizzNum" value="<?php echo $_POST["fizzNum"] ?>" /></span>
        </p>
        <p class="input-wrap">
          <span>BuzzNum: </span><span><input type="text" name="buzzNum" value="<?php echo $_POST["buzzNum"] ?>" /></span>
        </p>
        <div class="button-wrap">
          <button type="submit" name="submit" id="resultBtn" value="実行する">実行する</button>
        </div>
      </form>
    </div>

    【出力】
    <div class="result-wrap">
      <?php
        $html = "";
        if($_POST['submit']) {
          if(preg_match("/^[0-9]+$/", $fizz) == "false" || preg_match("/^[0-9]+$/",$buzz) == "false") {
            echo '整数値を入力してください';
          } elseif($fizz > 99 || $buzz > 99) {
            echo "2桁以下の整数で入力してください";
          } elseif($fizz == 0 || $buzz == 0) {
            echo "1以上で２桁までの値を入力してください";
          } else {
            for($i=1; $i < 100; $i++) {
              if ($i % $fizz === 0 && $i % $buzz === 0) {
                $html .= "{$i} FizzBuzz<br>";
              } elseif ($i % $fizz === 0) {
                $html .= "{$i} Fizz<br>";
              } elseif ($i % $buzz === 0) {
                $html .= "{$i} Buzz<br>";
              }
            }
            echo "<pre>" .  $html . "/<pre>";
          }
        }
      ?>
    </div>
  </body>
</html>
