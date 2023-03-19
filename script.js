$(function () {
  // ボタンを押したら
  $("#changeButton").click(function() {
    // ボタン非表示にする
    $("#changeButton").hide();


    var cnt = 3;
    $("#countDown").text(cnt);
    cntDown = setInterval(function(){
      cnt--;

      if(cnt <= 0) {
        clearInterval(cntDown);
      }
      $("#countDown").text(cnt);
    },1000); //1秒ごとに減っていく

    setInterval(function(){
      $("#countDown").text("どっかーん！");
    },4000);

    // 4秒後におすすめ曲紹介
    $("#content").delay(4500).fadeIn(); //4秒後にオススメ曲の表示
  });
});

