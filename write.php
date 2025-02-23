<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>WRITE</title>
  <link rel="stylesheet" href="./2.css" />
</head>

<body>
  <div class="head">
    <ul>
      <li><a href="/board.php">ホーム</a></li>
      <li><a href="/write.php">ボード</a></li>
      <li><a href="">ログイン</a></li>
    </ul>
  </div>
  <div class="title">
    <h1>ブログ作成</h1>
  </div>
  <form action="/board.php" method="post" class="post-form">
    <ul>
      <li>TITLE：</li>
      <li>
        <input
          type="text"
          name="title"
          placeholder="テーマ者を記入してください"
          required />
      </li>
    </ul>
    <ul>
      <li>書き方 :</li>
      <li>
        <input
          type="text"
          name="writer"
          placeholder="作成者を記入して下さい" />
      </li>
    </ul>

    <textarea name="content" required placeholder="開始版の内容"></textarea>
    <button type="submit">提出</button>
  </form>
</body>

</html>