# Apprentice Conduit App

Laravelで作成したブログ風アプリです。記事の作成・編集・削除ができます。

## 技術スタック
- Laravel Framework 12.28.1
- PHP 8.4
- MySQL 9.3.0


## 主なファイル構成
```
app/Http/Controllers/
├── ArticleController.php   # 記事のCRUD処理

resources/views/
├── home.blade.php          # トップページ（記事一覧）
├── article.blade.php       # 記事詳細
├── create.blade.php        # 記事作成
└── edit.blade.php          # 記事編集

routes/
└── web.php                 # ルーティング定義
```
