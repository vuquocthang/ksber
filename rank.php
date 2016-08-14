<?php
    if( isset($_GET['id']) ){
        //header("Location: http://localhost/ksb/info.php/".$_GET['id']);
    }
?>


<html>
    <head>
        <link rel="stylesheet" href="http://localhost/ksb/rank.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="fb:app_id" content="1173055109402255" />
        <meta property="fb:admins" content="300712670138038"/>
    </head>
    <body>
        <div class="con">
            <div class="bannerRank">
                <div class="bannerContent"><span>Most Beautiful Girl In KSB</span>  </div>
                <div class="Bnt"><a class="RatingBnt" href="rating.php">RATING</a></div>
            </div>
            <div class="rows">
                <?php  for($i = 0; $i<10 ;$i++): ?>
                    <div class="row">
                        <div class="subrow icon <?php echo "r".$i?>"></div>
                        <div class="subrow infoGirl">
                            <div class="imgAva"><img style="zoom: 1" src="../ksb/upload/12321394_1744080442490421_1144498685800574512_n.jpg"></div>
                            <div class="name"><a href=<?php echo "http://localhost/ksb/info.php/?id=id"?>>Trần Thị Thơm</a></div>
                        </div>
                        <div class="subrow score">Score : 450</div>
                    </div>
                    <div class="dash"></div>
                <?php endfor;?>
            </div>
            
            <div class="cols">
                <textarea placeholder="cmt ... ^^'"></textarea>
                <button>Gửi</button>
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7&appId=1147051502017642";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                <div class="fb-comments" data-href="http://www.kimsonb.cf/rank.php" data-width="400" data-numposts="5"></div>
            </div>
            <div class="clear"></div>
            <div class="">
                <textarea></textarea>
            </div>
        </div>
    </body>
</html>
