<?php
$pref = $_POST['pref'];
// var_dump($pref);

// 観光スポットデータ
//   name   : スポットの名前
//   detail : スポットの説明
//   image  : スポットの画像ファイル名
//
// ここにデータが無い都道府県は、観光スポット無し、として処理してください。
$places = array(

  // 栃木県の観光スポット
  9 => array(
    array(
      'name'   => '西洋の邸宅',
      'detail' => '西洋の邸宅はとても良い所です。西洋の邸宅はとても良い所です。
                   西洋の邸宅はとても良い所です。西洋の邸宅はとても良い所です。
                   西洋の邸宅はとても良い所です。西洋の邸宅はとても良い所です。
                   西洋の邸宅はとても良い所です。西洋の邸宅はとても良い所です。',
      'image'  => 'img/place_4.jpg',
    ),
  ),

  // 群馬県の観光スポット
  10 => array(
    array(
      'name'   => '赤い門',
      'detail' => '赤い門はとても良い所です。赤い門はとても良い所です。
                   赤い門はとても良い所です。赤い門はとても良い所です。
                   赤い門はとても良い所です。赤い門はとても良い所です。
                   赤い門はとても良い所です。赤い門はとても良い所です。',
      'image'  => 'img/place_5.jpg',
    ),
  ),

  // 東京都の観光スポット
  13 => array(
    array(
      'name'   => '緑の階段',
      'detail' => '緑の階段はとても良い所です。緑の階段はとても良い所です。
                   緑の階段はとても良い所です。緑の階段はとても良い所です。
                   緑の階段はとても良い所です。緑の階段はとても良い所です。
                   緑の階段はとても良い所です。緑の階段はとても良い所です。',
      'image'  => 'img/place_1.jpg',
    ),
    array(
      'name'   => '雷門',
      'detail' => '雷門はとても良い所です。雷門はとても良い所です。雷門はとても良い所です。
                   雷門はとても良い所です。雷門はとても良い所です。雷門はとても良い所です。
                   雷門はとても良い所です。雷門はとても良い所です。',
      'image'  => 'img/place_6.jpg',
    ),
    array(
      'name'   => '東京タワー',
      'detail' => '東京タワーはとても良い所です。東京タワーはとても良い所です。
                   東京タワーはとても良い所です。東京タワーはとても良い所です。
                   東京タワーはとても良い所です。東京タワーはとても良い所です。
                   東京タワーはとても良い所です。東京タワーはとても良い所です。',
      'image'  => 'img/place_7.jpg',
    ),
  ),

  // 神奈川県の観光スポット
  14 => array(
    array(
      'name'   => '日本の城',
      'detail' => '日本の城はとても良い所です。日本の城はとても良い所です。
                   日本の城はとても良い所です。日本の城はとても良い所です。
                   日本の城はとても良い所です。日本の城はとても良い所です。
                   日本の城はとても良い所です。日本の城はとても良い所です。',
      'image'  => 'img/place_2.jpg',
    ),
    array(
      'name'   => '旅館の部屋',
      'detail' => '旅館の部屋はとても良い所です。旅館の部屋はとても良い所です。
                   旅館の部屋はとても良い所です。旅館の部屋はとても良い所です。
                   旅館の部屋はとても良い所です。旅館の部屋はとても良い所です。
                   旅館の部屋はとても良い所です。旅館の部屋はとても良い所です。',
      'image'  => 'img/place_3.jpg',
    ),
  ),
);

$pref
$places

//もし配列の中に数値があれば､その配列を表示する
if( $place[$pref] === '')
{
  echo '観光スポットなし';
}
else{
  echo $place[$pref];
}



?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>関東地方の観光スポット検索</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <style>

    h1 {
      margin: 0 0 30px 0;
      padding: 20px 30px;
      border-bottom: 1px solid #ccc;
      background-color: #f8f8f8;
    }
    footer {
      text-align:center;
    }
    .search-result {
      margin: 10px 0;
    }
  </style>
</head>
<body>
  <h1>関東地方の観光スポット検索</h1>
  <div class="container">
    <form class="form-inline" action="" method="post">
      <div class="form-group">
        <select name="pref" class="form-control">
          <option value="">選択してください</option>
        </select>
      </div>
      <button class="btn btn-primary btn-sm"> 検 索 </button>
    </form>
    <p class="search-result">東京都の観光スポットは 3 件見つかりました。</p>
    <div class="media">
      <div class="media-left">
        <img src="place_1.jpg" class="media-object img-thumbnail">
      </div>
      <div class="media-body">
        <h4 class="media-heading">緑の階段</h4>
        緑の階段はとても良い所です。緑の階段はとても良い所です。緑の階段はとても良い所です。
        緑の階段はとても良い所です。緑の階段はとても良い所です。緑の階段はとても良い所です。
        緑の階段はとても良い所です。緑の階段はとても良い所です。
      </div>
    </div>
  </div>
  <hr>
  <footer>&copy; 観光スポット検索協会 </footer>
</body>
</html>
