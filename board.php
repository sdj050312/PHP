<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOARD</title>
    <link rel="stylesheet" href="./1.css">
</head>

<body>
    <div class="head">
        <ul>
            <li><a href="./board.php">ホーム</a></li>
            <li><a href="/write.php">ボード</a></li>
            <li><a href="/login.php">ログイン</a></li>
        </ul>
    </div>
    <div class="title">
        <h1>こんにちは！初めまして、よろしくお願いします。</h1>
        <p>開始版</p>
    </div>

    <div class="board-list">
        <table>
            <thead>
                <tr>
                    <th>番号</th>
                    <th>テーマ</th>
                    <th>書き方</th>
                    <th>日程</th>
                    <th>総回数</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($posts as $post): ?>
                    <tr>
                        <td><?= htmlspecialchars($post['id']) ?></td>
                        <td><a href="view.php?id=<?= $post['id'] ?>"><?= htmlspecialchars($post['title']) ?></a></td>
                        <td><?= htmlspecialchars($post['author']) ?></td>
                        <td class="date"><?= $post['created_at'] ?></td>
                        <td><?= htmlspecialchars($post['views']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>