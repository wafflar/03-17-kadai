<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="script.js"></script>
  <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
    <title>おすすめ曲</title>
</head>
<body>

<!-- データ格納 -->
<?php
$list = [
  ["group"=>"しんみりしたい時に","list"=>[
                          ["name"=>"KOKIA/「ありがとう」","description"=>"苦しんでる時、力強く、優しく包み込んでくれる歌詞と歌声。心がキューってなる。ありがとう。","url"=>"https://www.youtube.com/watch?v=z2bVk_nP9JM"],
                          ["name"=>"島谷ひとみ/「YUME日和」","description"=>"「星を結んで空のリボン」「夕日のレース肩にかけて」など歌詞が凄く素敵で、癒されると同時に励まされる曲。","url"=>"https://www.youtube.com/watch?v=LuNmfDmeCTc"],
                          ["name"=>"ポケモン  風と一緒に","description"=>"曲以上に映画の内容が良くて、どちらかというと大人向けの内容なので、映画も見てほしい。","url"=>"https://www.youtube.com/watch?v=MqKXG9IrQy8"]
                        ]
  ],
  ["group"=>"旅立ちたい時に","list"=>[
                          ["name"=>"少年よ","description"=>"新しいことに挑戦しようとした時、そして挫けそうになった時、この曲を聴くとどんな時でも前に進める勇気を貰える。","url"=>"https://www.youtube.com/watch?v=jt8bnWZnxDU"],
                          ["name"=>"doa ~英雄~","description"=>"この曲を聴くと出来ないことも出来るような自身がつき、何かに挑戦したくなる。","url"=>"https://www.youtube.com/watch?v=zSB_f4ORMvQ"],
                          ["name"=>"つないだ手","description"=>"数々の名言を生み出したアニメ「鋼の錬金術師」のED。自分の葬式の時にこの曲を流してほしい。","url"=>"https://www.youtube.com/watch?v=OchB4oXGQLk"]
                        ]
  ],
  ["group"=>"テンション上げたい時に","list"=>[
                          ["name"=>"オトノナルホウへ→/Goose house","description"=>"聞いててとても楽しいなり、さらに演奏してる人たちの楽しさがとても伝わってくる曲","url"=>"https://www.youtube.com/watch?v=ONNFHTOueXo"],
                          ["name"=>"Butter-Fly 和田光司","description"=>"何年経っても、どんな時でも、聞くたびに少年に戻してくれる曲。テンション爆上げ。","url"=>"https://www.youtube.com/watch?v=hf3DcnSByTA"],
                          ["name"=>"曇天","description"=>"ただただかっこいい。","url"=>"https://www.youtube.com/watch?v=AAJq8YCcSfk"]
                        ]
  ],
  ["group"=>"なんか耳に残る","list"=>[
                          ["name"=>"BLACK LAGOON ED","description"=>"なんか耳に残るわー","url"=>"https://www.youtube.com/watch?v=y110DYSpe8A"],
                          ["name"=>"ミサの歌","description"=>"なんか耳に残るねー","url"=>"https://www.youtube.com/watch?v=bW0gkWJiDHo"],
                          ["name"=>"フラクタル ED","description"=>"耳に残っちゃうねー","url"=>"https://www.youtube.com/watch?v=Qpdmt3G2QyE"]
                        ]
  ]
];
?>
<!-- データ格納ここまで -->

<!-- 切り替えボタン -->
<button id="changeButton">押すと爆発するけど良いん？</button>
<!-- 切り替えボタンここまで -->

<!-- カウントダウン -->
<div id="countDown"></div>

<!-- 最初非表示、後から表示される範囲 -->
<div id="content" hidden>

  <h1>オススメの曲紹介</h1>
  <?php
  for($i=0; $i<=40; $i++){
    echo "↓";
  }
  ?>
  <?php foreach ($list as $item) { ?>
    <h2 class="food_title"><?php echo $item["group"]; ?></h2>
    <ul>
      <?php $i = 0; ?>
      <?php foreach ($item["list"] as $foodList) { ?>
        <?php $i++; ?>
        <li>
        <h3 class="food_title type<?php echo $i; ?>">
          <a href="<?php echo $foodList["url"]; ?>" target="_blank">
            <?php echo $foodList["name"]; ?>
          </a>
        </h3>
        <div><?php echo $foodList["description"]; ?></div>
      </li>
      <?php } ?>
    </ul>
  <?php } ?>
</div>
</body>
</html>