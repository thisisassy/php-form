<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>お問い合わせフォーム</title>
</head>
<body>
    <div class="contents">
        <div class="contact-form">
            <div class="thanks-msg">お問い合わせありがとうございました。</div>
            <form class="form-contents" action="sent.php" method="post">
                <div class="form-title-02">以下の内容で送信されました。</div>
                <div class="form-item">名前</div>
                <?php echo $_POST['name']; ?>

                <div class="form-item">年齢</div>
                <?php echo $_POST['age']; ?>

                <div class="form-item">内容</div>
                <?php echo $_POST['body']; ?>

                <input class="btn" type="submit" value="送信">
                </form>
            </div>
        </div>
</body>
</html>