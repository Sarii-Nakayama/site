<?php
// 画像１枚ごとに、ここに記述したHTMLに沿って出力されます。
// $filepass　は取得した画像ファイルの相対パスです。
// 出力したいログ展示HTMLに併せてカスタマイズしてOKです。
?>

<p class="zubolog_comic">
    <a href="<?php echo $filepass; ?>" data-fancybox="<?php echo $zubolog_var; ?>" data-caption="<?php echo $caption; ?>">
    <img src="<?php echo $filepass; ?>">
    </a>
</p>