<!DOCTYPE html>
<html>
    <head>
        <title>index </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- <script language="javascript">
            function load_ajax(){
                //alert('Clicked');
                //tao doi tuong XML HTTP
                var xml_http;

                //neu trinh duyet la IE 7+, Opera, Chorme, Coc Coc, Safari, FireFox
                if(window.XMLHttpRequest){
                    xml_http = new XMLHttpRequest();
                }
                //neu trinh duyet la IE 5,6
                else {
                    xml_http = new ActiveXObject("Microsoft.XMLHTTP");
                }

                xml_http.open("GET","result.php",true);

                //khoi tao ham gui ajax
                xml_http.onreadystatechange = function () {

                    //neu object xml_http tra ve 2 thong so nhu duoi day thi thay doi noi dung o the div
                    if(xml_http.readyState == 4 && xml_http.status == 200){
                        document.getElementById("result").innerHTML = xml_http.responseText;
                    }
                };


                xml_http.send();

            }
        </script> -->
        <script language="JavaScript" src="https://code.jquery.com/jquery-3.1.0.js"> </script>
        <!-- <script language="JavaScript">
            var count = 6;
            function count_down_timer() {

                if(count >0){
                    count--;
                    $("#count_down_timer").html("This page will redirect in "+count+" seconds.");
                    setTimeout("count_down_timer()" ,1000);
                }
                else {
                    window.location.replace("http://stackoverflow.com");
                    //load_ajax();
                }
            }
            function load_ajax() {
                $.ajax({
                        url:"result.php",
                        type:"post",
                        dataType:"text",
                        data:{

                        },
                        success: function(result){
                            $("#result").html(result);
                            //window.location.replace("http://stackoverflow.com");

                        }
                });

                count_down_timer();
            }
        </script> -->

        <script language="JavaScript">
            function load_ajax(){
                $.ajax({
                    url : "result.php", // gửi ajax đến file result.php
                    type : "post", // chọn phương thức gửi là post
                    dateType:"text", // dữ liệu trả về dạng text
                    data : { // Danh sách các thuộc tính sẽ gửi đi
                        num : $('#number').val()
                    },
                    success : function (result){
                        // Sau khi gửi và kết quả trả về thành công thì gán nội dung trả về
                        // đó vào thẻ div có id = result
                        $('#result').html(result);
                    }
                });
            }
        </script>




    </head>
    <body>
        <div id="result">
            Nội dung ajax sẽ được load ở đây
        </div>
        <div id="count_down_timer"></div> 
        <input type="text" value="" id="number" name="number" title="a"/>
        <input type="button" name="clickme" id="clickme" onclick="load_ajax()" value="Click Me"/>
    </body>
</html>