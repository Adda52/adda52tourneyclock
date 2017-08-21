<?php //print_r($_POST); die;?>
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
            .digital{font-family: digital; }
            .copperplate{font-family: copperplate;}


            body{
                background: #000000;
                color:#BD1433;
            }

            a{
                background:  transparent;   
            }

            .wrapper{
                top : 5%;
                width:33%
            }
            .inner1{
                float:left; 
                font-size: 117px;
                width: 200px;
                clear:left;
            }
            .inner2{
                float:left; 
                clear: left;

            } 

            #start_bt{background: url(images/start_bt.png);height:94px;width:90px;border:0px;padding-top:47px;}
            .ante { width:28%; padding:0 8%; text-align:center;}
            .ante label { float:none;}
            .paddingsep {padding:0 5%; text-align:center;}
            .startstop { width:50%; float:left;}
            .clr { clear:both;}
            .clockstartstopCount { padding:45px 0 0 0;}
            .default_next{
                font-family: copperplate;
                background: url(images/big_bt-strip.jpg);
                -webkit-border-radius: 7px;
                -moz-border-radius: 7px;
                border-radius:7px;
                width:49%; margin: auto;
                font-size:33px;
                padding-left: 4%;
            }
            .bottom_tab{
                background: url(images/big_bt-strip.jpg) repeat-x scroll left top transparent;
                -webkit-border-radius: 7px;
                -moz-border-radius: 7px;
                border-radius:7px;
                float: left;
                font-size: 27px;
                width:399px;
                padding: 10px;

            }
        </style>
    </head>
    <body>
        <script type="text/javascript">
            var startingStack = <?php echo (int)$_POST['startingStack']; ?>;
            <?php if($_POST['event'] == 2) { ?>
            var sb = ['25','50','75','100','150','200','300','400','500','600','800','1000','1200','1500','2000','3000','4000','5000','6000','8000','10000','12000','15000','20000','25000','30000','40000','50000'];
            var bb = ['50','100','150','200','300','400','600','800','1000','1200','1600','2000','2400','3000','4000','6000','8000','10000','12000','16000','20000','24000','30000','40000','50000','60000','80000','100000'];
            var ante = ['-','-','-','25','25','50','75','100','100','200','200','300','400','500','500','500','1000','2000','2000','3000','3000','4000','5000','5000','5000','10000','10000','10000'];
            var round = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28'];
            var breakTimer =  ['6','11','16','21'];
            <?php }else if($_POST['event'] == 4) { ?>
            var sb = ['25','50','75','100','150','200','300','400','500','600','800','1000','1200','1500','2000','3000','4000','5000','6000','8000','10000','12000','15000','20000','25000','30000','40000','50000'];
            var bb = ['50','100','150','200','300','400','600','800','1000','1200','1600','2000','2400','3000','4000','6000','8000','10000','12000','16000','20000','24000','30000','40000','50000','60000','80000','100000'];
            var ante = ['-','-','-','-','50','50','100','100','100','200','200','300','400','500','500','500','1000','2000','2000','3000','3000','4000','5000','5000','5000','10000','10000','10000'];
            var round = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28'];
            var breakTimer =  ['6','11','16','21'];
            <?php }else if($_POST['event'] == 5) { ?>
            var round = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29];
            var sb = [50,75,100,150,200,250,300,400,500,600,800,1000,1200,1500,2000,2500,3000,4000,5000,6000,8000,10000,12000,15000,20000,25000,30000,40000,50000];
            var bb = [100,150,200,300,400,500,600,800,1000,1200,1600,2000,2400,3000,4000,5000,6000,8000,10000,12000,16000,20000,24000,30000,40000,50000,60000,80000,100000];
            var ante = ['~','~','~','25','50','75','100','100','100','200','200','200','300','300','400','500','1000 ','1000 ','1000 ','2000 ','2000 ','3000 ','4000 ','5000 ','5000 ','5000 ','10000 ','10000 ','10000'];
            var breakTimer =  [4,8,12,15,18,21,25,28];
            var breakMin = {'4': '20' , '8' : '10' , '12' : '10' , '15' : '10', '18': '15','21':'10', '25':'15', '28':'15'};
            <?php }else{?>
            var sb = ['25','50','75','100','150','200','300','400','500','600','800','1000','1200','1500','2000','2500','3000','4000','5000','6000','8000','10000'];
            var bb = ['50','100','150','200','300','400','600','800','1000','1200','1600','2000','2400','3000','4000','5000','6000','8000','10000','12000','16000','20000'];
            var ante = ['-','-','-','25','25','50','75','100','100','200','200','300','300','400','500','500','1000','1000','1000','2000','2000','3000'];
            var round = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22'];
            var breakTimer =  ['6','11','16','21'];
            <?php }; ?>

            var current_level = <?php echo (int)$_POST['level'] ?>;

            var minute = <?php echo (int)$_POST['minutes']; ?>;
            var users = 180;
            //var minute = 2;
            var timer = 0;
            var sec = 0;
            var m = 20;
            var s = 0;
            //var audio = document.getElementById("clockSound"); 
            var startStopWatchStatus = false;
            $(function(){
                var text = (minute < 10) ? "0"+minute : minute;
                text += ":0";
                text += sec;
                $("#time").html(text);
                $("#ante").html(ante[current_level]);

                //counter for current time
                /* var myVar=setInterval(function(){
                    var d = new Date();
                    $("#timecounter").html(d.toLocaleTimeString());
                },1000);*/

                $("#round").html(round[current_level]);

                calculateAvgStack();
            });

            function startStopWatch(){
                if(startStopWatchStatus){
                    clearInterval(timer);
                    startStopWatchStatus = false;
                    $("#start_bt").val('Start');
                    return false;

                }else{
                    startStopWatchStatus =true;
                    $("#start_bt").val('Stop');
                    timer = setInterval(function(){

                        if(minute == 0 && sec == 0){
                            current_level++;
                            if(typeof round[current_level] === 'undefined'){
                                clearInterval(timer);
                            }else if( $.inArray( round[current_level], breakTimer ) > -1){
                                clearInterval(timer);
                                //alert('break');
                                $(".breakModal").modal({
                                    backdrop: false,
                                    keyboard: false,
                                    show: true,
                                });
                                if(typeof breakMin != 'undefined'){
                                    console.log(breakMin , current_level,round[current_level] ,breakMin[round[current_level]] )
                                    m = breakMin[round[current_level]];
                                    m = parseInt(m);
                                }
                                var breakInterval = setInterval(function () {
                                    if(m == 0 && s == 0){
                                        $(".breakModal").modal('hide')
                                    }else if(s == 0){
                                        s = 59;
                                        m--;
                                        var t = (m < 10) ? "0" + m : m;
                                        t += ":";
                                        t += (s < 10) ? "0"+s : s;  
                                    }else{
                                        s--;var t = (m < 10) ? "0" + m : m;
                                        t += ":";
                                        t += (s < 10) ? "0"+s : s;  
                                    }
                                    $("#breakTime").html(t)
                                } , 1000);
                                sec = 0;
                                minute = <?php echo (int)$_POST['minutes']; ?>;
                                $("#blind").html(sb[current_level]+"/"+bb[current_level]);
                                $("#round").html(round[current_level]);
                                $("#ante").html(ante[current_level]);
                            }else{ 

                                sec = 0;
                                minute = <?php echo (int)$_POST['minutes']; ?>;
                                $("#blind").html(sb[current_level]+"/"+bb[current_level]);
                                $("#round").html(round[current_level]);
                                $("#ante").html(ante[current_level]);
                            }                       
                        }
                        if(typeof round[current_level] !== 'undefined'){
                            var text = "";
                            sec--;
                            if(sec < 0){
                                minute--;
                                sec = 59;
                            }
                            text = (minute < 10) ? "0"+minute : minute;
                            text += ":";
                            text += (sec < 10) ? "0"+sec : sec;    
                            $("#time").html(text);


                            if(minute == 0 && sec == 18){
                                initialStage.loop = true;
                                initialStage.play();
                            } else if(minute == 0 && sec == 3){
                                initialStage.pause();
                                finalStage.play();
                            } else if(minute == 0 && sec == 0){
                                finalStage.pause();
                            }


                        }
                    }, 1000);


                }
            }


            function increaseUsers(){
                var users = $("#act_users").html();
                if(parseInt( users) < parseInt($("#participants").html())){
                    users++;
                    $("#act_users").html(users);
                    calculateAvgStack();
                }
            }

            function decreaseUsers(){
                var users = $("#act_users").html();
                if(parseInt( users) > 0){
                    users--;
                    $("#act_users").html(users);
                    calculateAvgStack();
                }
            }

            function increaseParticipant(){
                var participants = $("#participants").html();
                $("#act_users").html()
                if(parseInt(participants) < 1000){
                    participants++;
                    $("#participants").html(participants);
                    calculateAvgStack();
                }
            }

            function decreaseParticipants(){
                var participants = $("#participants").html();
                if(parseInt(participants) > 0 && parseInt(participants) > parseInt($("#act_users").html())){
                    participants--;
                    $("#participants").html(participants);
                    calculateAvgStack();
                }
            }

            function calculateAvgStack(){
                var integer = (parseInt($("#participants").html()) * <?php echo $_POST['startingStack']?> )/parseInt($("#act_users").html());
                $("#timecounter").html(integer.toFixed());
            }

        </script>
        <audio id="initialStage">
            <source src="sound/last15sec.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <audio id="finalStage">
            <source src="sound/finished.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <div class="row" >
            <div class="col-sm-12"  ><img src="images/adda52live.png" width="100%" border="0"/></div>
            <div class="col-sm-12" style="background: url(images/mid_bgline.jpg) repeat-x scroll left top transparent; padding-top: 30px;">
                <div class="col-sm-12" style="top:5%;">
                    <span style="float:left;"><img src="images/round_bolt.png" border="0"></span>
                    <span style="float:right;"><img src="images/round_bolt.png" border="0"></span>
                </div>
                <div class="col-sm-4 wrapper paddingsep" >
                    <label >MINUTES : SECONDS</label>
                    <div id="time" class="inner1 digital" ></div>

                </div>
                <div class="col-sm-4 wrapper ante" >
                    <label>ANTE</label>
                    <div id="ante" class="inner1 digital" style="padding-left:5%;"></div>
                </div>

                <div class="col-sm-4 wrapper paddingsep" >
                    <label >INITIAL BLINDS</label>
                    <div class="inner1 digital" id="blind"  ><?php echo $_POST['startBlind']; ?></div>
                    <input  type="hidden" name="startBlind" value="<?php echo $_POST['startBlind']; ?>"/>                
                </div>
                <div class="clr"></div>
                <div class="clockstartstopCount">
                    <span style="display:inline-block; float:left; width:25%;"><img src="images/round_bolt.png" border="0"></span>
                    <div class="startstop">
                        <span style="display:inline-block; margin-left:40%;"><input type="button" id="start_bt" name="theButton" value="Start" onclick="startStopWatch();"></span>
                        <div class="default_next">
                            <span>Active Players : <span id="act_users"><?php echo $_POST['participants']; ?></span>/<span id="participants"><?php echo $_POST['participants']; ?></span></span>
                        </div>
                        <div class="pluseminsButton">
                            <a onclick="increaseUsers()"><img src="images/plus_btn.png" border="0"></a>
                            <a onclick="decreaseUsers()"><img src="images/minus_btn.png" border="0"></a>
                            <a onclick="increaseParticipant()"><img src="images/plus_btn.png" border="0"></a>
                            <a onclick="decreaseParticipants()"><img src="images/minus_btn.png" border="0"></a>
                        </div>
                    </div>
                    <span style="display:inline-block; float:right; text-align:right; width:25%;"><img src="images/round_bolt.png" border="0" style="text-align:right;"></span>
                    <div class="clr"></div>
                </div>  
            </div>

            <div style="margin: 2% 0 2% 0px;float: left;width:100%;">
                <!--<div class="bottom_tab" style="width:30%;padding:20px 0 0 0;text-align:center;vertical-align:middle;margin-left:2%;">CURRENT TIME <span id="timecounter"></span></div>-->
                <div class="bottom_tab" style="width:30%;padding:20px 0 0 0;text-align:center;vertical-align:middle;margin-left:2%;">AVG STACK : <span id="timecounter"></span></div>

                <div class="bottom_tab" style="width:25%;padding:20px 0 0 0;text-align:center;vertical-align:middle;margin-left:4%;">LEVEL : <span id="round"></span></div>

                <div class="bottom_tab" style="width:30%;padding:20px 0 0 0;text-align:center;vertical-align:middle;margin-left:4%;">TOTAL PRIZE : <span id=""><?php echo $_POST['prizePool']; ?></span></div>

            </div>

        </div>
        <!-- Large modal
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".breakModal">Large modal</button> -->
        <div class="modal fade breakModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!--<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="myModalLabel">Break Timer</h4>
</div>-->
                    <div class="modal-body" style="background: url(images/mid_bgline.jpg) repeat-x scroll left top transparent; padding-top: 30px;height:425px;">
                        <center style="font-size: 40px;">Break Timer</center>
                        <center><div id="breakTime" class="digital" style="font-size:200px;" >00:00</div></center>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>


                </div>
            </div>
        </div>

    </body>

</html>