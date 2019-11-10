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
            <div class="form-title">お問い合わせ</div>
            <form class="form-contents" action="sent.php" method="post">
                <div class="form-item">名前</div>
                <input type="text" name="name" placeholder="お名前" />

                <div class="form-item">年齢</div>
                <select class="selectbox" name="age" id="">
                    <option value="未選択">選択してください</option>
                    <option value="20~29">20~29</option>
                    <option value="30~39">30~39</option>
                </select>

                <div class="form-item">内容</div>
                <textarea name="body" id="" cols="30" rows="10" placeholder="内容" ></textarea>

                <input class="btn" type="submit" value="送信">
                </form>
            </div>
        </div>
</body>
</html>