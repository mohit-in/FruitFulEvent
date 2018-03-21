<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
     
        <title>10times</title>
  

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="https://im.gifbt.com/css/10t_common.css?v=10.0" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
<script src="https://im.gifbt.com/js/10T_jquery.min.js?v=0.1"></script>
</head>

<body>


    <header>
    <nav class="navbar navbar-fixed-top navbar-default">
        <div class="container">
                <div class="collapse navbar-collapse">
                    <div class="col-md-1 navbar-brand">
                        <a href="{{site_url_http}}">
                            <img src="https://im.gifbt.com/images/bootlogo.png" alt="10times">
                            </a>
                        </div>
                        <div class="col-md-6">
                            <ul class="nav navbar-nav bold">
                                <li>
                                    <?php $a = 10000;?>
                                    <a href="{{site_url_http}}/tradeshows"><? php echo $a;?></a>
                                </li>
                                <li>
                                    <a href="{{site_url_http}}/conferences">Conferences</a>
                                </li>
                                <li>
                                    <a href="{{site_url_http}}/top100">Top 100</a>
                                </li>
                                <li>
                                    <a href="{{site_url_http}}/venues">Venues</a>
                                </li>
                 
                            </ul>
                        </div>
                        <div class="col-md-5">
                            <ul class="nav navbar-nav navbar-right">
                                  <li id="loginLi">
                                        <a id="loginHide" class="x-thm"  href="javascript:void(0);" onclick="signInTT('signup','email');">Login</a>
                                    </li>
                                      

                                                
                                     
                                           
                                </ul>
                                         
                                        </div>
                                    </div>
                            </div>
                        </nav>
                    </header>
                </body>
                </html>




