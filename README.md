# デザイン学部ウェブサイト
## 開発環境(15/12/3現在)
* WordPress 4.3.1
* WordPress Related Posts 3.6
* WP Social Bookmarking Light 1.7.10
* サーバー PHP バージョン 5.3.3

## 環境構築

### 1.MAMPをインストール
[https://www.mamp.info/en/](https://www.mamp.info/en/)

### 2.WordPressファイルをダウンロード
[https://ja.wordpress.org/](https://ja.wordpress.org/)

### 3.WordPressファイルをMAMPに移す
ダウンロードしたWordPressフォルダ内のファイルを、 `/Application/MAMP/htdocs/` に移す。

### 4.design_gakubuをcloneする
ターミナル上で `/Application/MAMP/htdocs/wp-content/themes/` に移動し、design_gakubuをcloneする。

### 5.WordPressの初期設定をする
[http://bazubu.com/how-to-insall-wp-in-mamp-23798.html](http://bazubu.com/how-to-insall-wp-in-mamp-23798.html)を参考に。

### 6.プラグインをインストールする
`ダッシュボード -> プラグイン -> 新規追加` から、 `WordPress Related Posts` と `WP Social Bookmarking Light` をインストールする。

### 7.プラグインを有効化する
`ダッシュボード -> プラグイン -> インストール済みプラグイン` から、`WordPress Related Posts` と `WP Social Bookmarking Light` を有効化する。

### 8.WordPress Related Postsの設定をする
1. `ダッシュボード -> 設定 -> WordPress Related Posts` に行く。
2. `Basic settings -> Related Posts Title` を `関連記事` にする。
3. `Basic settings -> Number of Posts` を `3` にする。
4. `Advanced settings -> Themes -> Layout` を `Momma` にする。
5. `Advanced settings -> Other Settings -> Auto Insert Related Posts` のチェックを外す。
6. 一番下にある `Save changes` を押す。

### 9.WP Social Bookmarking Lightの設定をする
1.  `ダッシュボード -> 設定 -> WP Social Bookmarking Light` に行く。
2. `一般設定 -> 位置` を `None` にする。
3. `一般設定 -> サービス` を、上から順に `twitter` `facebook_like` `line` にする。

## 開発手順

### 1.Issueを立てる

### 2.gitでブランチを切る
ブランチ名は `feature/Issue番号` にすること。

### 3.作業する

### 4.GitHubにプッシュする

### 5.プルリクを出し、マージしてブランチを消す。
プルリクの本文に、Issueをリンク付ける。(#Issue番号と本文中に書けば自動でリンク付けられます。)

### 6. masterをpullして、サーバーにアップロードする
※ masterブランチ以外のファイルをアップロードしないこと！！！！
