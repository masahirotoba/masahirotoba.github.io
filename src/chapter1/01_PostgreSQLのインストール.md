それでは早速、PostgreSQLのインストール方法をご紹介します。

# インストーラのダウンロード

まずはEDB社の公式サイトにアクセスします（EDB社とは、PostgreSQLのエンタープライズ向け拡張・サポートを提供する会社です）。

https://www.enterprisedb.com/downloads/postgres-postgresql-downloads

今回は、Windows 11にバージョン17をインストールします。「Windows x86-64」と「17.x」が交わったところの矢印を選択してください。

<div style="text-align: center;">
<img src="images/01.png" alt="Windowsの64ビット版を選択" width="500">
</div>

別のページに遷移して、ダウンロードが開始されます。

<div style="text-align: center;">
<img src="images/02.png" alt="インストーラがダウンロードされる" width="500">
</div>

ここからは.exeファイルを実行する作業へと移ります。

# .exeファイルの実行

ダウンロードフォルダに *postgresql-17.5-1-windows-x64.exe* がインストールされます。こちらをダブルクリックで実行します。

<div style="text-align: center;">
<img src="images/03.png" alt="exeファイルの実行" width="400">
</div>

自動的にセットアップの画面が起動します。[Next] を選択します。

<div style="text-align: center;">
<img src="images/04.png" alt="セットアップウィザード" width="400">
</div>

インストール先のフォルダを指定します。デフォルトでは、C:\Program Files\PostgreSQL\17になります。特に変更は必要ないので、[Next] を選択します。

<div style="text-align: center;">
<img src="images/05.png" alt="インストール先の指定" width="400">
</div>

インストールするコンポーネントを選択します。こちらも特に変更は必要ないので、[Next] を選択します。

<div style="text-align: center;">
<img src="images/06.png" alt="コンポーネントの選択" width="400">
</div>

データディレクトリを選択します。データディレクトリとは、PostgreSQLがデータベースのファイルを保存する場所です。そのまま [Next] を選択します。

<div style="text-align: center;">
<img src="images/07.png" alt="データディレクトリの選択" width="400">
</div>

パスワードを指定します。パスワードは確認のため、同じものを2回入力します。入力できたら、[Next] をクリックします。

<div style="text-align: center;">
<img src="images/08.png" alt="パスワードの設定" width="400">
</div>

クライアントからの接続を受けつけるポート番号を入力します。デフォルトでは5432ポートになります。問題なければ、[Next] を選択します。

<div style="text-align: center;">
<img src="images/09.png" alt="ポート番号の設定" width="400">
</div>

デフォルトのロケールを選択します。[Japanese, Japan] を選択して、[Next] をクリックします。

<div style="text-align: center;">
<img src="images/10.png" alt="ロケールの選択" width="400">
</div>

インストールの設定内容を確認する画面が出てくるので、問題なければ [Next] を選択します。

<div style="text-align: center;">
<img src="images/11.png" alt="設定内容の確認" width="400">
</div>

最終の確認画面が出てきます。このままインストールでよければ [Next] を選択します。

<div style="text-align: center;">
<img src="images/12.png" alt="最終確認" width="400">
</div>

インストール作業が開始されますので、しばらく待ちます。

<div style="text-align: center;">
<img src="images/13.png" alt="インストール中" width="400">
</div>

こちらの画面が出ればインストールは完了です。

<div style="text-align: center;">
<img src="images/14.png" alt="インストール完了" width="400">
</div>
