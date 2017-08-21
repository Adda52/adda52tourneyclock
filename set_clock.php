<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/clockstyle.css">

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <style>
            @font-face {
                font-family: digital;
                src: url(digital.ttf);
            }
            @font-face{
                font-family: copperplate;
                src:url(copperplate.ttf);
            }
            body{
                background: #000000;
                color:#BD1433;
            }
            label{ font-family: copperplate;}
            a{
                background:  transparent;   
            }


            .inner1{
                float:left; 
                font-size: 30px;
                width: 200px;
                clear:left;
            }
            .inner2{
                float:left; 
                clear: left;

            } 
            #start_bt{background: url(images/start_bt.png);height:94px;width:90px;border:0px;padding-top:47px;}
            .digital{font-family: digital; }
            .copperplate{font-family: copperplate;}

        </style>
    </head>
    <body>
        <script type="text/javascript">
            var sb = ['25','50','75','100','150','200','300','400','500','600','800','1000','1200','1500','2000','3000','4000','5000','6000','8000'];
            var bb = ['50','100','150','200','300','400','600','800','1000','1200','1600','2000','2400','3000','4000','6000','8000','10000','12000','16000'];
            var ante = ['-','-','-','25','25','50','75','100','100','200','200','300','400','500','500','500','1000','2000','2000','3000'];
            var level = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20'];
            var countLevel = 0;

            function updateValues()
            {
                $("#blind").html(sb[countLevel]+"/"+bb[countLevel]);
            }

            function increaseBlind(){
                if(countLevel < (level.length - 1) && typeof level[countLevel] !== 'undefined'){
                    countLevel++;
                    $("#blind").html(sb[countLevel]+"/"+bb[countLevel]);
                    $('[name=startBlind]').val(sb[countLevel]+"/"+bb[countLevel]);
                    $('[name=level]').val(countLevel);
                }
            }

            function decreaseBlind(){
                if(countLevel > 0  && typeof level[countLevel] !== 'undefined'){
                    --countLevel;
                    $("#blind").html(sb[countLevel]+"/"+bb[countLevel]);
                    $('[name=startBlind]').val(sb[countLevel]+"/"+bb[countLevel]);
                    $('[name=level]').val(countLevel);
                }
            }

            function increaseTime(){
                var minutes = $("[name=minutes]").val();

                if(parseInt( $("[name=minutes]").val()) < 50){
                    minutes++;
                    minutes = (minutes < 10) ? '0'+minutes : minutes;
                    $("#minutes").html(minutes);
                    $("[name=minutes]").val(minutes);
                }
            }

            function decreaseTime(){
                var minutes = $("[name=minutes]").val();

                if(parseInt( $("[name=minutes]").val()) > 0){
                    minutes--;
                    minutes = (minutes < 10) ? '0'+minutes : minutes;
                    $("#minutes").html(minutes);
                    $("[name=minutes]").val(minutes);
                }
            }


            $(function(){
                $("#blind").html(sb[countLevel]+"/"+bb[countLevel]);
                $("[name=startBlind]").val(sb[countLevel]+"/"+bb[countLevel]);
                $("[name=event]").on('change', function(){
                    if($("[name=event]").val() == 2){
                        level = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28'];
                        sb = ['25','50','75','100','150','200','300','400','500','600','800','1000','1200','1500','2000','3000','4000','5000','6000','8000','10000','12000','15000','20000','25000','30000','40000','50000'];
                        bb = ['50','100','150','200','300','400','600','800','1000','1200','1600','2000','2400','3000','4000','6000','8000','10000','12000','16000','20000','24000','30000','40000','50000','60000','80000','100000'];
                        ante = ['-','-','-','25','25','50','75','100','100','200','200','300','400','500','500','500','1000','2000','2000','3000','3000','4000','5000','5000','5000','10000','10000','10000'];
                    }else if($("[name=event]").val() == 4){
                        level = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28'];
                        sb = ['25','50','75','100','150','200','300','400','500','600','800','1000','1200','1500','2000','3000','4000','5000','6000','8000','10000','12000','15000','20000','25000','30000','40000','50000'];
                        bb = ['50','100','150','200','300','400','600','800','1000','1200','1600','2000','2400','3000','4000','6000','8000','10000','12000','16000','20000','24000','30000','40000','50000','60000','80000','100000'];
                        ante = ['-','-','-','-','50','50','100','100','100','200','200','300','400','500','500','500','1000','2000','2000','3000','3000','4000','5000','5000','5000','10000','10000','10000'];
                    }else if($("[name=event]").val() == 5){
                        level = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29];
                        sb = [50,75,100,150,200,250,300,400,500,600,800,1000,1200,1500,2000,2500,3000,4000,5000,6000,8000,10000,12000,15000,20000,25000,30000,40000,50000];
                        bb = [100,150,200,300,400,500,600,800,1000,1200,1600,2000,2400,3000,4000,5000,6000,8000,10000,12000,16000,20000,24000,30000,40000,50000,60000,80000,100000];
                        ante = ['~','~','~','25','50','75','100','100','100','200','200','200','300','300','400','500','1000 ','1000 ','1000 ','2000 ','2000 ','3000 ','4000 ','5000 ','5000 ','5000 ','10000 ','10000 ','10000'];
                    }else{
                        sb = ['25','50','75','100','150','200','300','400','500','600','800','1000','1200','1500','2000','3000','4000','5000','6000','8000'];
                        bb = ['50','100','150','200','300','400','600','800','1000','1200','1600','2000','2400','3000','4000','6000','8000','10000','12000','16000'];
                        ante = ['-','-','-','25','25','50','75','100','100','200','200','300','400','500','500','500','1000','2000','2000','3000'];
                        level = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20'];
                    }
                    updateValues();
                })
            });
        </script>
        <div class="row" >
            <div class="col-sm-12"  ><img src="images/adda52live.png" border="0" /></div>
            <div class="col-sm-12" style="background: url(images/mid_bgline.jpg) repeat-x scroll left top transparent; height:100%;">
                <div class="col-sm-12" style="top:5%;">
                    <span style="float:left;"><img src="images/round_bolt.png" border="0"></span>
                    <span style="float:right;"><img src="images/round_bolt.png" border="0"></span>
                </div>
                <form method="post" action="clock.php">
                    <input type="hidden" name="level" value="0">
                    <div class="col-sm-4 wrapper" style="height:70%;margin-top:5%;">
                        <label style="float:left;font-size:30px;font-weight: bold;clear:left;">ROUND LENGTH IN MINUTES</label>
                        <div id="minutes" class="inner1 digital" style="font-size: 100px !important;">00</div>
                        <input  type="hidden" name="minutes" id="minutes"  value="0"/>
                        <div class="inner2">
                            <a  id="addTime" onclick="increaseTime()"><img src="images/add.png"/></a><a onclick="decreaseTime()"><img src="images/minus.png" /></a>
                        </div>
                        <!--<input class="btn btn-info inner2" type="submit" ></input>-->

                    </div>
                    <div class="col-sm-4 wrapper" style="height:70%;margin-top:5%;">
                        <label style="float:left;font-size:30px;font-weight: bold;clear:left;">SELECT INITIAL BLINDS</label>
                        <div class="inner1 digital" id="blind"  style="font-size: 100px !important;">10/20</div>
                        <input  type="hidden" name="startBlind" value="10/20"/>
                        <div class="inner2">
                            <a onclick="increaseBlind()"><img src="images/add.png"/></a>
                            <a onclick="decreaseBlind()"><img src="images/minus.png" /></a>
                        </div> 
                    </div>
                    <div class="col-sm-4 wrapper setclockInner" style="height:70%;margin-top:5%;width: 232px; margin-left:4%;">
                        <label class="inner1 ">SELECT EVENT</label>
                        <select class="inner1" name="event" style="width: initial;">
                            <option value="1">
                                1 LAC GTD
                            </option>
                            <option value="2">
                                5 LAC GTD
                            </option>
                            <option value="3">
                                2 LAC GTD
                            </option>
                            <option value="4">
                                10 LAC GTD
                            </option>
                            <option value="5">
                                Poker Night
                            </option>
                        </select>
                        <label class="inner1 ">PRIZE POOL</label>
                        <input name="prizePool" required class="form-control">
                        <label class="inner1 ">PARTICIPANTS</label>
                        <input name="participants" required class="form-control">
                        <label class="inner1 ">Starting Stack</label>
                        <input name="startingStack" required class="form-control">
                    </div>
                    <span style="display:inline-block; margin-left:40%;">
                        <input type="submit" id="start_bt" name="theButton" value="Start" style="background:url(images/start_bt.png); position: absolute; top:70%;" ></span>
                </form>
                <div style="float:left;width:98%;padding:2% 1% 0 1%;">
                    <span style="float:left;"><img src="images/round_bolt.png" border="0"> </span>
                    <span style="float:right;"><img src="images/round_bolt.png" border="0"> </span>
                </div>
            </div>
        </div>
    </body>

</html>