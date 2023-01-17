<html lang="en"><head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta content="width=device-width" name="viewport">
    <link href="ASE/css/bootstrap.min.css" rel="stylesheet">
    <link href="ASE/css/All.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">
    <link href="ASE/css/pe-icon-7-stroke.css" rel="stylesheet">
    <script type="text/javascript">
           function hajar(){
           var from = document.getElementById('from').value;
           var code_contry = document.getElementById('code_contry').value;
           var current = 0;
           var total = 0;

           ajax();

           function ajax(){
               if(current  == total){
                   // document.getElementById("load").innerHTML='check : ' + emailnya + '<div class="progress progress-striped active"><div class="progress-bar" style="width: 100%"><\/div><\/div>';//'<img src="ajax-loader.gif" />';
                   var http = new XMLHttpRequest();
                   http.open("POST", "num.php", true);
                   http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
                   http.send("from=" + from + "&code_contry=" + code_contry);
                   current++;
                   http.onreadystatechange=function() {
                       if (http.readyState == 4) {
                           if(http.responseText.replace(/\s+/g, "") == "SENT")
                           {
                               $('#num_list').append(http.responseText);
                               
                           }else{
                               
                               $('#num_list').append(http.responseText);

                               
                           }
       
                           

                           ajax();
                       }
                   }
               }else{
                   document.getElementById("load").innerHTML='';
               }
           }
       }
    </script>
    <title></title>
</head>
<body style="">
    <div class="wrapper" style="margin-left:-270px;">
        <div class="main-panel" style="background: linear-gradient(135deg,#f47532,#333333);">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card" style="height:auto;">
                               
                                <div class="content">
                                    <div class="alert alert-danger" id="incorrect" style=" background-color: #efefef; ">
                                        <span><b><img src="https://logos-download.com/wp-content/uploads/2017/10/T-Soft_Mobile_logo.png" alt="Logo Dch" style=" width: 150px; "></b></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Account Sender</label> <input class="form-control" id="from" name="sender_name" placeholder="10" required="" type="text" value="10" >
                                            </div>
                                            
                                        </div>
                                    </div>
                                        <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>EXAMPLE</label> <input class="form-control" id="code_contry" name="code_contry"  required="" type="text" value="+33603xxxxxx,+33606xxxxxx,+33607xxxxxx,+33608xxxxxx,+33630xxxxxx,+33643xxxxxx,+33653xxxxxx" >
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Id Users List</label> 
                                                <textarea class="form-control" id="num_list" name="num_list" placeholder="Phone List" required="" style="resize: none;height:180px;"></textarea>
                                            </div>
                                        </div>
                                    </div><button class="btn btn-info btn-fill pull-right" onclick="hajar()" style=" background-color: #a35933; border-color: #5d4132; " type="submit"><img src="./ASE/img/click.svg" alt="Logo Dch" style="width: 25px;">GENERATE</button>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
           $(document).ready(function(){

               demo.initChartist();

               $.notify({
                   icon: 'pe-7s-note2',
                   message: "Info - Hy This is a devlopped tool that help you send Bulk Spam SMS With Any Sender Name You Want!"

               },{
                   type: 'info',
                   timer: 3000
               });

           });
    </script>

 </body></html>