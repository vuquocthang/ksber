<?php
    require_once "db.php";
    require_once "get_random_girl.php";
    $conn->close();
?>
<html>
    <head>
        <link rel="stylesheet" href="rating.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no>
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="container">
            <div class="banner">Vote For Most KSBer Beautiful !
                <a class="rank_btn" href="">Rank</a>
            </div>
            <div class="message">
                <a href="#" class="close"></a>
                <div class="show mobile">Click vào ảnh của cô gái bạn yêu thích để vote !</div> <div class="hidden mobile">Click vào RANK để xem bảng xếp hạng !</div>
            </div>

            <div class="con-img left"><img class="img img1" id=<?php echo $info_girl[0]['image_link'];?> src="../ksb/upload/<?php echo $info_girl[0]['image_link'];?>"></div>
            <div class="con-img right"><img class="img img2" id=<?php echo $info_girl[1]['image_link'];?> src="../ksb/upload/<?php echo $info_girl[1]['image_link'];?>"></div>
            <div class="clear"></div>    
            <div class="info girl_1">
                <div class="content">
                    <span class="title">Họ Và Tên:        </span> <span class="0"><?php echo $info_girl[0]['name'];?>         </span><br/>
                    <span class="title">Tuổi:             </span> <span class="1"><?php echo $info_girl[0]['age'];?>          </span><br/>
                    <span class="title">Khóa:             </span> <span class="2"><?php echo $info_girl[0]['nien_khoa_ksb'];?></span><br/>
                    <span class="title">Đơn Vị Công Tác:  </span> <span class="3"><?php echo $info_girl[0]['cong_viec'];?>    </span><br/>
                    <span class="title">Hệ số Elo:        </span> <span class="4"><?php echo $info_girl[0]['Elo'];?>          </span>
                </div>
            </div>
            <div class="info girl_2">
                <div class="content">
                    <span class="title">Họ Và Tên:        </span> <span class="00"><?php echo $info_girl[1]['name'];?>         </span><br/>
                    <span class="title">Tuổi:             </span> <span class="11"><?php echo $info_girl[1]['age'];?>          </span><br/>
                    <span class="title">Khóa:             </span> <span class="22"><?php echo $info_girl[1]['nien_khoa_ksb'];?></span><br/>
                    <span class="title">Đơn Vị Công Tác:  </span> <span class="33"><?php echo $info_girl[1]['cong_viec'];?>    </span><br/>
                    <span class="title">Hệ số Elo:        </span> <span class="44"><?php echo $info_girl[1]['Elo'];?>          </span>
                </div>
            </div>
        </div>
        
        <script>
            //var width = $('.img').width();
            //$('.img').height(width);


            $('.close').click(function () {
                $('.message').remove();
            })
            $('.con-img').click(function (e) {
                /*var img_1_link = $('.img1').attr('src');
                var img_2_link = $('.img2').attr('src');
                $('.img1').attr('src',img_2_link);
                $('.img2').attr('src',img_1_link);*/
                

                $.ajax({
                    url : "process_rating.php", // gửi ajax đến file result.php
                    type : "post", // chọn phương thức gửi là post
                    dateType:   "json", // dữ liệu trả về dạng text
                    data : { // Danh sách các thuộc tính sẽ gửi đi
                        image_link_1 : $('.img1').attr("id"),
                        image_link_2 : $('.img2').attr("id"),
                        win : e.target.id
                    },
                    success : function (result){
                        var result = JSON.parse(result);
                        $('.img1').attr('src','../ksb/upload/'+ result[0].image_link);
                        $('.img2').attr('src','../ksb/upload/'+ result[1].image_link);
                        $('.img1').attr('id',result[0].image_link);
                        $('.img2').attr('id',result[1].image_link);


                        $('.0').html(result[0].name);
                        $('.1').html(result[0].age);
                        $('.2').html(result[0].nien_khoa_ksb);
                        $('.3').html(result[0].cong_viec);
                        $('.4').html(result[0].Elo);
                        $('.00').html(result[1].name);
                        $('.11').html(result[1].age);
                        $('.22').html(result[1].nien_khoa_ksb);
                        $('.33').html(result[1].cong_viec);
                        $('.44').html(result[1].Elo);


                    }
                })
            })
        </script>
    </body>
</html>

