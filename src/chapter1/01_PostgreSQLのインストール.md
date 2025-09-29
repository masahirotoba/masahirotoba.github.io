それでは早速、PostgreSQLのインストール方法をご紹介します。

# インストーラのダウンロード

まずはEDB社の公式サイトにアクセスします（EDB社とは、PostgreSQLのエンタープライズ向け拡張・サポートを提供する会社です。）

[https://www.enterprisedb.com/downloads/postgres-postgresql-downloads:embed:cite]

今回は、Windows 11にバージョン17をインストールします。「Windows x86-64」と「17.x」が交わったところの矢印を選択してください。

<figure class="figure-image figure-image-fotolife" title="Windowsの64ビット版を選択">[f:id:masahirotoba_blog:20250516211315p:plain:w500]<figcaption>Windowsの64ビット版を選択</figcaption></figure>

別のページに遷移して、ダウンロードが開始されます。

<figure class="figure-image figure-image-fotolife" title="インストーラがダウンロードされる">[f:id:masahirotoba_blog:20250516211523p:plain:w500]<figcaption>インストーラがダウンロードされる</figcaption></figure>

ここからは.exeファイルを実行する作業へと移ります。

# .exeファイルの実行

ダウンロードフォルダに *postgresql-17.5-1-windows-x64.exe* がインストールされます。こちらをダブルクリックで実行します。

<figure class="figure-image figure-image-fotolife" title=" ">[f:id:masahirotoba_blog:20250516211759p:plain:w400]<figcaption> </figcaption></figure>

自動的にセットアップの画面が起動します。[Next] を選択します。

<figure class="figure-image figure-image-fotolife" title=" ">[f:id:masahirotoba_blog:20250516212033p:plain:w400]<figcaption> </figcaption></figure>

インストール先のフォルダを指定します。デフォルトでは、C:\Program Files\PostgreSQL\17になります。特に変更は必要ないので、[Next] を選択します。

<figure class="figure-image figure-image-fotolife" title=" ">[f:id:masahirotoba_blog:20250516212122p:plain:w400]<figcaption> </figcaption></figure>

インストールするコンポーネントを選択します。こちらも特に変更は必要ないので、[Next] を選択します。

<figure class="figure-image figure-image-fotolife" title=" ">[f:id:masahirotoba_blog:20250516212220p:plain:w400]<figcaption> </figcaption></figure>

データディレクトリを選択します。データディレクトリとは、PostgreSQLがデータベースのファイルを保存する場所です。そのまま [Next] を選択します。

<figure class="figure-image figure-image-fotolife" title=" ">[f:id:masahirotoba_blog:20250516212323p:plain:w400]<figcaption> </figcaption></figure>

パスワードを指定します。パスワードは確認のため、同じものを2回入力します。入力できたら、[Next] をクリックします。

<figure class="figure-image figure-image-fotolife" title=" ">[f:id:masahirotoba_blog:20250516212543p:plain:w400]<figcaption> </figcaption></figure>

クライアントからの接続を受けつけるポート番号を入力します。デフォルトでは5432ポートになります。問題なければ、[Next] を選択します。

<figure class="figure-image figure-image-fotolife" title=" ">[f:id:masahirotoba_blog:20250516212709p:plain:w400]<figcaption> </figcaption></figure>

デフォルトのロケールを選択します。[Japanese, Japan] を選択して、[Next] をクリックします。

<figure class="figure-image figure-image-fotolife" title=" ">[f:id:masahirotoba_blog:20250516212956p:plain:w400]<figcaption> </figcaption></figure>

インストールの設定内容を確認する画面が出てくるので、問題なければ [OK] を選択します。

<figure class="figure-image figure-image-fotolife" title=" ">[f:id:masahirotoba_blog:20250516213051p:plain:w400]<figcaption> </figcaption></figure>

最終の確認画面が出てきます。このままインストールでよければ  [OK] を選択します。

<figure class="figure-image figure-image-fotolife" title=" ">[f:id:masahirotoba_blog:20250516213148p:plain:w400]<figcaption> </figcaption></figure>

インストール作業が開始されますので、しばらく待ちます。

<figure class="figure-image figure-image-fotolife" title=" ">[f:id:masahirotoba_blog:20250516213248p:plain:w400]<figcaption> </figcaption></figure>

こちらの画面が出ればインストールは完了です。

<figure class="figure-image figure-image-fotolife" title=" ">[f:id:masahirotoba_blog:20250516214527p:plain:w400]<figcaption> </figcaption></figure>
