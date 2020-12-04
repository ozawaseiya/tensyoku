# Title: 未経験エンジニア転職サイト

サイトのURL：https://tensyoku.awsmikawa.com/ 

ソースコードの保存先 GitHub：https://github.com/ozawaseiya/tensyoku

このサイトの特徴：

**未経験や経験の浅いエンジニア専用の転職サイトで、通常の転職サイトを利用するよりも採用されやすくなる独自の採用方法を用いている**


# tensyoku(name of repository)

　通常は新規社員の採用に成功した会社が成功報酬又は掲載料をサイト運営社に支払う。しかし、この仕組みだとコストの観点から、実力の不明瞭な未経験・経験が浅いエンジニアの採用に対して会社側が採用に慎重にならざるをえない。能力の分からないエンジニアに大きな初期費用は出せないためだ。このことから、未経験・経験が浅いエンジニアの転職の難易度は相当高くなってしまっている。しかし、彼らの一途なモチベーションをポテンシャルとして理解、評価してくれる会社も世の中には数多く存在する。要するに現行の採用システムでは需要と供給のミスマッチが生じているのである。
　この問題を解決するために未経験・経験が浅いエンジニアから成功報酬をサイト運営社に支払う方法にすれば、会社は大きな初期費用も必要なく、コスト不要で採用することができる。これにより、現行の採用システムによって生じていた需要と供給のミスマッチを緩和される。結果的に多くの「希望」を未経験や経験が浅いエンジニアたちに与え、採用する会社側も彼らのポテンシャルを大いに生かすことができるようになる。

# Dependency

PHP7.3, HTML5, CSS3, MySQL8, フレームワーク:Laravel6.20.4, Bootstrap4

# Setup

環境構築手順：

1.AWSのEC2上でDockerとDocker-Composeをインストールする

2.ドキュメントルート上にgithub上から「tensyoku」をgit cloneする

3.「tensyoku」フォルダをカレントフォルダにし、docker-compose up -dで（PHPとNginx）の2つのイメージ作成とコンテナを立ち上げ、起動させる（このケースではデータベース用のコンテナは立ち上げず、RDSを用いている）

使用した技術：

AWS(IAM,VPC,EC2,RDS,ELB,EIP,Route53,Amazon Certificate Manager), Github, Visual Stadio Code, Docker(Docker-compose)

# Usage


サイトの使い方（求人への応募と採用と募集停止までの一連の流れ）  


1.ユーザー側から見たサイトのファーストビュー  
  ![1全体](https://user-images.githubusercontent.com/32008816/101148289-cb452a00-3660-11eb-9f0e-7e549075ff0b.png)  
***
2.検索条件を用いて求人を検索  
  ![2検索条件](https://user-images.githubusercontent.com/32008816/101148355-de57fa00-3660-11eb-802f-8c45bb502f9c.png)  
***
3.ユーザー登録を実行  
  ![3ユーザー登録](https://user-images.githubusercontent.com/32008816/101148402-ea43bc00-3660-11eb-891f-44dc6c63f075.png)  
***
4.ユーザー登録後、自動的にログインされ、プロフィール情報を閲覧  
  ![4ユーザー情報](https://user-images.githubusercontent.com/32008816/101148433-f4fe5100-3660-11eb-99c0-09ec4e2e5af4.png)  
***
5.求人の詳細画面から「この求人に応募する」ボタンをクリック  
  ![5応募画面と詳細画面](https://user-images.githubusercontent.com/32008816/101148478-0182a980-3661-11eb-8493-5a65d5cec603.png)  
***
6.応募メッセージを求人を掲載している企業側に送信  
  ![6応募メッセージを送る](https://user-images.githubusercontent.com/32008816/101148517-0d6e6b80-3661-11eb-8351-d4e211d04fa8.png)  
***
7.求人を掲載した企業側でのファーストビュー  
  ![7企業側管理画面](https://user-images.githubusercontent.com/32008816/101148534-152e1000-3661-11eb-8998-e8bd0e33475b.png)  
***
8.求人を出した募集要項一覧を確認  
  ![8募集要項を一覧](https://user-images.githubusercontent.com/32008816/101148564-2119d200-3661-11eb-93c7-29a4670b999f.png)  
***
9.「応募者からのメッセージを確認する」で応募があるか確認  
  ![9応募者からのメッセージ確認](https://user-images.githubusercontent.com/32008816/101148582-29720d00-3661-11eb-878f-13b08439d217.png)  
***
10.応募者からメッセージが来ていることを応募者フォルダで確認  
  ![10応募者からのメッセージフォルダを確認](https://user-images.githubusercontent.com/32008816/101148634-368efc00-3661-11eb-9fb1-4b14728295cd.png)  
***
11.応募者からのメッセージとプロフィールを確認  
  ![11応募者からのメッセージとプロフィールを確認](https://user-images.githubusercontent.com/32008816/101148659-427abe00-3661-11eb-90a9-8a1885db3a7b.png)  
***
12.企業側から面接確約メッセージを送信  
  ![12面接確約の返信メールを送る](https://user-images.githubusercontent.com/32008816/101148686-4c042600-3661-11eb-8c26-0d1eb9f5ab7d.png)  
***
13.ユーザー側で応募した企業側からのメッセージが来てることをメッセージフォルダで確認  
  ![13応募した企業からのメッセージフォルダを確認](https://user-images.githubusercontent.com/32008816/101148716-54f4f780-3661-11eb-9e82-1082daa9ba44.png)  
***
14.応募した企業から面接の案内が届く  
  ![14応募した企業から面接の案内を受ける](https://user-images.githubusercontent.com/32008816/101148743-5d4d3280-3661-11eb-8852-58b4e032be41.png)  
***
15.企業側で応募者の採用を決定し、「この応募者を採用する」ボタンをクリック  
  ![15採用の決定](https://user-images.githubusercontent.com/32008816/101148782-663e0400-3661-11eb-804e-945e5f7157ab.png)  
***
16.企業側で採用一覧者に採用された応募者が表記される  
  ![16採用者一覧に表示される](https://user-images.githubusercontent.com/32008816/101148823-70f89900-3661-11eb-8176-ecf565a734c7.png)  
***
17.ユーザー側でも企業からの採用通知を確認  
  ![17ユーザー側でも採用を確認](https://user-images.githubusercontent.com/32008816/101148863-7ce45b00-3661-11eb-8eb1-1b31f65e699e.png)  
***
18.企業側でこの求人の募集を停止  
  ![18企業側がこの求人の募集を停止](https://user-images.githubusercontent.com/32008816/101148885-866dc300-3661-11eb-9ea2-973f22457f3f.png)  
***
19.別のユーザー側からこの求人を確認すると募集が停止されているのが確認される  
  ![19別のユーザーが求人を確認すると募集が停止されているのが確認できる](https://user-images.githubusercontent.com/32008816/101148915-8e2d6780-3661-11eb-8d88-fc6aca348bee.png)  
***
  
Webシステム機能一覧：

1.ユーザー/管理者登録・削除機能, 2.ユーザー/管理者ログイン・ログアウト機能, 3.求人検索機能（キーワード検索,年収検索,スキル検索）, 4.求人への応募機能, 5.ユーザー・管理者間メッセージ機能 6.求人作成・編集・削除機能, 7.求人募集停止・削除機能, 8.採用通知機能

# License Copyright(c) 2020 Seiya Ozawa This software is released under the MIT License, see LICENSE.
 https://opensource.org/licenses/mit-license.php

# Authors and References
転職サイトGreen：https://www.green-japan.com/