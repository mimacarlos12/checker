<!DOCTYPE html>
<html lang="en">
<head>
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
           var url = document.getElementById('num_list').value.split('\n');
           var current = 0;
           var total = url.length;

           ajax();

           function ajax(){
               if(current < total){
                   var number = url[current];
                   // document.getElementById("load").innerHTML='check : ' + emailnya + '<div class="progress progress-striped active"><div class="progress-bar" style="width: 100%"><\/div><\/div>';//'<img src="ajax-loader.gif" />';
                   var http = new XMLHttpRequest();
                   http.open("POST", "amazon.php", true);
                   http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
                   http.send("email=" + url[current]);
                   current++;
                   http.onreadystatechange=function() {
                       if (http.readyState == 4) {

                        if(http.responseText.replace(/\s+/g, "") == "valid"){
                          $('#valid').append(number + "<br>");
                          
                        }else if(http.responseText.replace(/\s+/g, "") == "invalid"){
                          
                          $('#die').append(number + "<br>");
                          
                        }else{
                          
                          $('#die').append(number + "<br>");
                          $('#die').append(http.responseText+ "\n");
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
                        <div class="col-md-7">
                            <div class="card" style="height:auto;">
                               
                                <div class="content">
                                    <div class="alert alert-danger" id="incorrect" >
                                        <span><b><img src="https://logos-download.com/wp-content/uploads/2017/10/T-Soft_Mobile_logo.png" alt="Logo Dch" style=" width: 150px; "></b></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>List PHONE NUMBER</label> 
<textarea class="form-control" id="num_list" name="num_list" placeholder="Phone List" required="" style="resize: none;height: 400px;"></textarea>
                                            </div>
                                        </div>
                                    </div><button class="btn btn-info btn-fill pull-right" style=" background-color: #a35933; border-color: #5d4132; " onclick="hajar()" type="submit"><img src="./ASE/img/click.svg" alt="Logo Dch" style="width: 25px;">VERIFY</button>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="card">
                                <div class="header">
                                  <div class="alert alert-success" role="alert" style="background: linear-gradient(135deg,#da6c32,#784b33);" >
                            <span><strong>CHECKER</strong>&nbsp;&nbsp;<strong><i class="fab fa-facebook"></i></strong><b> </b></span>
                                         </div>
                                    <h4 class="title"><i class="fas fa-ellipsis-v"></i>&nbsp;&nbsp;VALID Statut!</h4>
                                </div>
                                <div class="content" id="valid" style="overflow-y: scroll;height:217px;">
                                </div>
                                <hr>
                                <h4 class="title" style=" padding-left: 15px; "><i class="fas fa-ellipsis-v"></i>&nbsp;&nbsp;INVALID Statut!</h4>
                                <div class="content" id="die" style="overflow-y: scroll;height:217px;">
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
</body>
</html> 