<?php
$pref = $_POST['pref'];
// var_dump($pref);

$prefectures = array(
  8  => "茨城県",
  9  => "栃木県",
  10 => "群馬県",
  11 => "埼玉県",
  12 => "千葉県",
  13 => "東京都",
  14 => "神奈川県",
);

$selectedpref = $prefectures[$pref];


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

//var_dump($places);
// var_dump($places[$pref]);
// var_dump($pref);

$key = array_key_exists($pref, $places);

// var_dump($key);
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
          <?php foreach($prefectures as $number => $prefecture) : ?>
          <option value= "<?php echo $number; ?>"
          <?php if($pref == $number) : ?>selected <?php endif; ?>>
          <?php echo $prefecture; ?>
          <option value="" selected><?php echo $selectedpref ?></option>
          <?php foreach($prefectures as $number => $prefecture) : ?>
          <option value= "<?php echo $number; ?>" ><?php echo $prefecture; ?>
          </option>
         <?php endforeach; ?>
        </select>
      </div>
      <button class="btn btn-primary btn-sm"> 検 索 </button>
    </form>

    <p class="search-result">
      <?php if( $key === false) : ?>
      <?php echo $selectedpref; ?>
      の観光スポットは見つかりませんでした｡
      <?php exit;?>
      <?php endif ;?>
      <?php if($key === true ) :?>
      <?php $displays = $places[$pref]; ?>
      <?php echo $selectedpref; ?>の観光スポットは
      <?php echo count($displays); ?> 件見つかりました｡
    </p>



      <?php if(count($displays)) : ?>
      <?php foreach ($displays as $display) : ?>
          <div class="media">
          <div class="media-left">
          <img src="<?php echo $display['image']; ?>" class="media-object img-thumbnail" ?>
          </div>

          <div class="media-body">
          <h4 class="media-heading"><?php echo $display['name']; ?></h4>
          <?php echo $display['detail']; ?>

        <?php foreach($display as $theme => $contents) : ?>
          <div class="media">
          <div class="media-left">
          <?php if($theme === 'image') : ?>
          <?php echo '<img src="' . $contents . '" class="media-object img-thumbnail" >' ; ?>
          <?php endif; ?>
          </div>

          <div class="media-body">
          <h4 class="media-heading">
          <?php if($theme === 'name') : ?>
          <?php echo $contents; ?></h4>
          <?php endif; ?>
          <?php if($theme === 'detail') : ?>
          <?php echo $contents; ?>
          <?php endif; ?>
          </div>

          </div>
        <?php endforeach; ?>
    <?php endif; ?>
  <?php endif; ?>
      <?php endforeach; ?>
    <?php endif; ?>
    <?php endif; ?>


  </div>
  <hr>
  <footer>&copy; 観光スポット検索協会 </footer>
</body>
</html>