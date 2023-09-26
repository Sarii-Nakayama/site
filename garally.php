<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="robots" content="noindex,noarchive,nofollow,noimageindex">
  <title>夢絵置き場</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Round" rel="stylesheet">
  <link rel="stylesheet" href="newiine_app/newiine.css">
  <link rel="stylesheet" href="zubolog/zubolog.css">
  <?php
//  include：ずぼログ本体を読み込む関数です。
//  現在ファイルからの相対パスを記述してください。
include('zubolog/_core.php');
$zubologApp = new zubolog();
?>
</head>

<body oncontextmenu="return false;">

  <main>
    <div class="container">

          <h1 class="center"></h1>
          <section class="two-column">
          <dl class="memo">
                <dd>
                <a href="http://ammrmmr.daa.jp/">⇐TOP</a>
                </dd>
          </dl>
            <!-- ずぼログ　一覧出力　ここから -->
<ul class="zubolog zubolog_3 zubolog_md-5">
<?php

// 初期設定はじめ※※-----------------------------------------------

// 一覧表示したい画像が入っているフォルダの、現在ファイルからの相対パスを指定してください
// スラッシュなどの抜けにご注意ください
// 例　$zubolog_dir = ['images/logs/'];
// 例　$zubolog_dir = ['../images/logs/'];　←一つ階層が下にあるフォルダの場合
// 例　$zubolog_dir = ['logs/', 'old_logs/'];　←複数フォルダの画像を拾いたい場合は、半角コンマで区切ります
$zubolog_dir = ['img/pdl/pic/'];

// １ページあたりに表示したいログ数を半角英数字で指定して下さい
// １ページ10件表示の場合は'10'、全件表示は'-1'です
$zubolog_perpage = '-1';

// デフォルト（true）ではファイル名の降順（9→0、Z→A）でログが出力されます。
// 昇順（0→9、A→Z）でログを出力したい場合は$zubolog_sortの値をfalseに書き換えてください。
// マンガなど、ページを連番でファイル名につけている場合で、連番の通りに表示したい場合は「false」を指定します。
$zubolog_sort = false;

// 使用テンプレートファイルを変更する場合は、ファイル名を指定してください
$zubolog_temp = 'fancybox.php';

// テンプレートで変数を利用する場合は設定してください。
// fuwaimgの展示グループ分けなどに利用できます
$zubolog_var = 'logs1';

// 初期設定おわり---------------------------------------------------

// ログを出力する関数です。
echo $zubologApp->createZubolog($zubolog_dir, $zubolog_perpage, $zubolog_sort, dirname(__FILE__), $zubolog_temp, $zubolog_var);

?>

</ul>

<!-- ずぼログ　一覧出力　ここまで -->

<!-- ずぼログ　ページネーション　ここから -->

<?php

// ずぼログ　ページネーションを出力する関数です。
// ページネーションが不要の場合は削除してください。
echo $zubologApp->createZubologPagenation($zubolog_dir, $zubolog_perpage, $zubolog_sort, dirname(__FILE__));

?>

<!-- ずぼログ　ページネーション　ここまで -->

          </section>

    </div>
  </main>
</body>
<footer>
    <div class="container">
      <div class="row">
        <div class="col-12 center">
          <p class="bottom"><a href="https://do.gt-gt.org" target="_blank">template by do.</a></p>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="newiine_app/newiine.js"></script>
  <script>

    Fancybox.bind("[data-fancybox]", {
      Carousel: {
    Navigation: {
      prevTpl: "",
      nextTpl: "",
    },
  },
      Toolbar: {
        display: [
        { id: "counter", position: "left" },
        { id: "prev", position: "left" },
        { id: "next", position: "left" },
        { id: "zoom", position: "right" },
        { id: "close", position: "right" },
        ],
      },
      Thumbs: {
        autoStart: false
      },
    });
    
    
    $(function () {
      $('.long').jscroll({
        autoTrigger: false, 
        nextSelector: 'a.next',
      });
    });
    
  </script>
</body>

</html>


