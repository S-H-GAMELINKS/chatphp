# Chat App
## 概要

`HTML`/`CSS`/`Bootstrap4`/`PHP`を使って作成するチャットアプリのチュートリアルになります。

実際に、本チュートリアルを取り組む場合には`PHP`の実行環境が必要になります。予めご了承ください。

## チュートリアル
### HTMLでブラウザに文字を表示

`HTML`のタグを使い、`ブラウザ`に文字を表示してみましょう。

まずは、`PC`のデスクトップに`chat`というフォルダを作成します。作成後、`index.php`という`PHP`のソースファイルを以下のように作成します。

```php:index.php
<html>
    <body>
        <h1>Hello Chat's</h1>
    </body>
</html> 
```

後は`ターミナル`でデスクトップにある`chat`フォルダまで移動し、`php -S localhost:3000`とコマンドを実行します。

```shell
php -S localhost:3000
```

その後、`ブラウザ`のアドレスバーに`localhost:3000`と入力します。

`ブラウザ`に`Hello Chat's`と表示されていれば正しくコードが書かれています。

### Bootstrap4のインストール

次に`Bootstrap4`をインストールします。

`index.php`に以下のように追記します。

```php:index.php
<html>
+    <head>
+        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
+        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 +       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
+        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
+    </head>
    <body>
        <h1>Hello Chat's</h1>
    </body>
</html>
```

`+`の部分が新しく追加するコードになります。  
`CDN`というものを使い、インターネット越しに`Bootstrap4`をインストールしています。

これで`Bootstrap4`のインストールは完了です。

### ヘッダーの追加

まず、`index.php`を以下のように変更します。

```php:index.php
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
-        <h1>Hello Chat's</h1>
+        <?php include('components/header.php'); ?>
    </body>
</html>
```

`-`が削除する部分で、`+`が追加する部分です。

新しく`<?php include('components/header.php'); ?>`というコードを追加します。これは`components`フォルダ内の`header.php`というファイルで書かれているソースコードをその場所に埋め込むというコードです。
今はまだ`header.php`も`components`フォルダも作成していません。

それでは`components`フォルダを`chat`フォルダ内に作成し、`header.php`を以下のように作成します。

```php:components/header.php
<nav class="navbar navbar-dark" style="background-color:#F04242;">
    <a class="navbar-brand" href="/">
        <img src="https://getbootstrap.jp/docs/4.3/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        Samurai Chat!
    </a>
</nav>
```

これで`localhost:3000`にアクセスすると、ヘッダーが実装されているはずです。

### ジャンボトロンの作成

次に、ヘッダーの下に`ジャンボトロン`というものを作成します。これは`Webサイト`のトップページに表示される大きな見出しのことです。

まず、`index.php`に`<?php include('components/jumbotron.php'); ?>`を以下のように追加します。

```php:index.php
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include('components/header.php'); ?>
+        <?php include('components/jumbotron.php'); ?>
    </body>
</html>
```

その後、`components`フォルダ内に`jumbotron.php`を以下のように作成します。

```php:components/jumbotron.php
<div class="jumbotron">
    <div class="container">
        <h1 class="display-4">Samuri Chat!</h1>
        <p class="lead">侍チャットへようこそ！</p>
        <hr class="my-4">
        <p>侍チャットとは、「プログラミングを学びたい」という生徒同士でチャットを通じて交流できるコミュニティサイトです！</p>
    </div>
</div>
```

これで`ジャンボトロン`が実装できました！

### フッターの作成

次に、`フッター`を作成します。

まず、`index.php`を以下のように変更します。

```php:index.php
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include('components/header.php'); ?>
        <?php include('components/jumbotron.php'); ?>
+        <?php include('components/footer.php'); ?>
    </body>
</html>
```

次に、`<?php include('components/footer.php.php'); ?>`で読み込む`フッター`を`footer.php`として`components`フォルダ内に作成します。

```php:components/footer.php
<nav class="navbar navbar-dark fixed-bottom" style="background-color:#F04242;">
    <div class="m-auto text-light">
        Copy light © 2019 All Rights Reserved by Samurai
    </div>
</nav>
```

これで`フッター`の実装は完了です！

### チャットルーム作成機能の実装

次に、チャットルームの作成機能を実装していきます。

まずは、`チャットルーム`を作成するフォームを表示させたいと思います。

そこで、`index.php`に`<?php include('components/create_room_form.php'); ?>`などを追加します。

```php:index.php
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include('components/header.php'); ?>
        <?php include('components/jumbotron.php'); ?>
+        <div class="container mb-5">
+            <?php include('components/create_room_form.php'); ?>
+            <?php include('components/rooms.php'); ?>
+        </div>
        <?php include('components/footer.php'); ?>
    </body>
</html>
```

また余白なども整えたいので`Bootstrap4`の`.container`などを使い、余白を作っています。

次に、`components`フォルダ内に`create_room_form.php`を以下のように作成します。

```php:components/create_room_form.php
<form method="post" action="php/create_room.php">
    <div class="form-group">
        <label for="newChatRoom" class="h2">新しいチャットルームを作成</label>
        <input class="form-control" id="newChatRoom" name="room" placeholder="新しく作るチャットルーム名を入力してください">
    </div>
    <button type="submit" class="btn btn-outline-danger">作成</button>
</form>
```

`method="post" action="php/create_room.php"`と指定することで新しく作成する`チャットルーム`の名前をサーバー側で処理できます。

次に、`index.php`と同じ位置に`php`フォルダを作成します。作成後、`create_room.php`を以下のように作成します。

```php:php/create_room.php
<?php
    $rooms_path = "../data/room.json";

    $all_room = file_get_contents($rooms_path);
    $array = json_decode($all_room);
    $array[] = [
        'No' => count($array),
        'Content' => $_REQUEST['room']
    ];
    file_put_contents($rooms_path, json_encode($array));
    header('Location: /', true, 301);
?>
```

上記のコードで新しい`チャットルーム`のデータなどが`data`フォルダ内の`room.json`に作成されます。
また、データが保存される`data`フォルダを`index.php`と同じ位置に作成しましょう。

最後に、作成した`チャットルーム`一覧を表示する`rooms.php`を`components`フォルダに作成します。

```php:components/rooms.php
<div class="row">
    <?php
        $all_room = file_get_contents('data/room.json');
        $array = json_decode($all_room);
        foreach ($array as $key => $value) {
            echo "
                <div class=\"col-md-4 col-sm-12 mt-3 mb-3 d-flex justify-content-center\">
                    <div class=\"card border border-dark\" style=\"width: 18rem;\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$value->Content</h5>
                            <a class=\" btn btn-outline-danger\" href=\"room.php?id=$key&name=$value->Content\" name=\"id\" value=\"$key\">入室する</a>
                        </div>
                    </div>
                </div>
            ";
        }
    ?>
</div>
```

これで新しい`チャットルーム`作成機能は実装完了です！

### チャット機能の実装

次に、`チャットルーム`に入室して`チャット`ができるようにします。

まずは、`index.php`と同じ位置に`room.php`を以下のように作成します。

```php:room.php
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include('components/header.php'); ?>
        <div class="container mb-5">
            <?php include('components/room_name.php'); ?>
            <?php include('components/talks.php'); ?>
            <?php include('components/create_talk_form.php'); ?>
        </div>
        <?php include('components/footer.php'); ?>
    </body>
</html>
```

次に、`components`フォルダ内に`room_name.php`を以下のように作成します。

```php:components/room_name.php
<div class="text-center h2 mt-5 mb-5">
    <?php 
        echo "チャットルーム : ". $_REQUEST['name'];
    ?>
</div>
```

また同様に`components`フォルダ内に`talks.php`を以下のように作成します。

```php:components/talks.php
<style>
    .balloon-left {
        position: relative;
        display: inline-block;
        margin: 1.5em 0 1.5em 15px;
        padding: 7px 10px;
        min-width: 120px;
        max-width: 100%;
        color: #555;
        font-size: 16px;
        background: #83F0A6;
        border-radius: 10px;
    }

    .balloon-left p {
        margin: 0;
        padding: 0;
    }
</style>

<div class="row">
    <?php
    $all_talk = file_get_contents('data/' . $_REQUEST['id'] . '.json');
    $array = json_decode($all_talk);
    foreach ($array as $key => $value) {
        echo "
            <div class=\"col-12 mt-0 mb-0\">
                <p class=\"balloon-left w-100\">$value->Content</p>
            </div>        
        ";
    }
    ?>
</div>
```

これで新しく作った`チャット`の内容を表示させる機能は実装できました。

あとは、新しく`チャット`の内容を作成できるように実装していきます。

まずは、`components`フォルダ内に`create_talk_form.php`を以下のように作成します。

```php:components/create_talk_form.php
<form method="post" action="php/create_talk.php">
    <div class="form-group">
        <input value="<?php echo $_REQUEST['id'] ?>" name="id" type="hidden">
        <input value="<?php echo $_REQUEST['name'] ?>" name="name" type="hidden">
        <textarea class="form-control" name="talk"></textarea>
    </div>
    <button type="submit" class="btn btn-outline-danger">作成</button>
</form>

<a href="/" class="btn btn-primary">トップページに戻る</a>
```

次に、`php`フォルダ内に`create_talk.php`を以下のように作成します

```php:php/create_talk.php
<?php
    $rooms_path = "../data/".$_REQUEST['id'].".json";

    $all_talk = file_get_contents($rooms_path);
    $array = json_decode($all_talk);
    $array[] = [
        'No' => count($array) + 1,
        'Content' => $_REQUEST['talk']
    ];
    file_put_contents($rooms_path, json_encode($array));
    header('Location: /room.php?id='.$_REQUEST['id']."&name=".$_REQUEST['name'], true, 301);
?>
```

これで`チャット`を新しく作成することができるようになりました！

## おわりに

以上で、`PHP`での簡単なチャットアプリのチュートリアルは終了です！  
今後は改造などを加えて独自なチャットアプリにしていきましょう！

