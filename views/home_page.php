<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>10times</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,200,300,700,900' rel='stylesheet' type='text/css' />     
<link href="https://im.gifbt.com/login/css/bootstrap.min.css" rel="stylesheet">
<link href="https://im.gifbt.com/login/css/bootstrap-responsive.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://im.gifbt.com/login/css/header.css">
<link  href="/bundles/acmeticket/css/responsive.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://im.gifbt.com/login/css/layout.css?v=0.2">
<script src="https://im.gifbt.com/js/jquery.min.js"></script>
<script src="https://im.gifbt.com/login/js/bootstrap-transition.js"></script>
<script src="https://im.gifbt.com/login/js/bootstrap-collapse.js"></script>
<script src="https://im.gifbt.com/login/js/bootstrap.min.js"></script>

<!--[if lte IE 9]>
<script src="/bundles/acmeticket/js/html5shiv.js"></script>
<script src="/bundles/acmeticket/js/respond.js"></script>
<script src="https://im.gifbt.com/js/jquery.xdomainrequest.min.js"></script>
<![endif]-->
<link rel="shortcut icon" href="https://10times.com/favicon.ico">
</head>
<body style="padding:0; margin-top:40px">
    <script src="https://im.gifbt.com/login/js/jquery-migrate-1.0.0.js"></script>
<script src="https://im.gifbt.com/js/10t_stall_new_1.js?v=0.3"></script>
<script src="https://im.gifbt.com/login/js/typeaheadmap.js"></script>
<script src="https://im.gifbt.com/js/jquery.xdomainrequest.min.js"></script>
<style>form .ferror{border: 2px red inset;border-style:solid;border-color:#ff0000;}.black {background-color:#111111;color:silver;}</style>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MMVJS3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MMVJS3');</script>
<!-- End Google Tag Manager -->
        <div class="container">
                <ul id="menu">
                        <li><a href="{{ path('_demo') }}">Ticket Booking</a></li>
                </ul>
                <div style="clear: both"></div>
                            <h2>Code behind this page</h2>
                <div class="symfony-content">mohit1</div>
        </div>
<div id='fb-root'></div>
<div id="home_add_1" class="container">
    <div class="row-fluid ">
        <div class="span8 offset2 ">
            <div class="home_box white_box" style="margin-top: 0px;">
                <span class="text" style="font-size:30px;">Add a Event</span>
                <div class="page-header" style="border-bottom:0px; margin-bottom:0px; padding-top:0px">
                    <a style="text-decoration:none" href="{{ Website_URL }}/{{ event.event_url }}" target="_blank"><h1>mohit</h1></a>
                    <span><b></b> city county name </span>
                </div>
                <div class="white_box">
<div class="linkedin_hide">
<div class="social_buttons">
<div class="inset"><a class="tw login_button"
    href="javascript:void(0);" onclick="linkedinAction();">
<div class="logo_wrapper"><span class="logo"></span></div>
<span>Linkedin</span> </a></div>
<div class="inset"><a class="fb login_button fbLogin" onclick="calltfbload();fbLogin();" href="javascript:void(0);" style="cursor:pointer">
<div class="logo_wrapper"><span class="logo"></span></div>
<span>Facebook</span> </a></div>
</div>
<div class="or" style="margin-bottom:10px; margin-top:5px">OR</div>
</div>
<div class="alert alert-error" id="error_div0" style="display:none;">
</div>  
<div class="alert alert-error" id="error_div" style="display:none;">Below fields are mandatory</div>
<div class="alert alert-error" id="error_div1" style="display:none;">
</div>
<div class="alert alert-error" id="error_div2" style="display:none;">
</div>
<div class="alert alert-error" id="error_div3" style="display:none;">
</div>
                    <div class="home_nourl_form_box t-lft">
                        <div class="row-fluid" style="padding:10px 0px">
<form id="register_exhibitor" class="frm mr" action="{{action_value}}" method="POST">
                        <input type="hidden" id="event_id" name="event_id" value="{{event.event_id}}" />
                        <input type="hidden" id="metadata" name="metadata" class="user_metadata" />
                        <input type="hidden" id="linkedinId" name="linkedinId" class="user_linkedinId" />
                        <input type="hidden" id="facebookId" name="facebookId" class="user_facebookId" />
                        <input type="hidden" id="source" name="source" class="" />
                        <input type="hidden" id="event_edition_id" name="event_edition_id" value="{{event.edition_id}}" />

                        <div class="row-fluid">
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label" for="city">Event Name</label>
                                        <div class="controls">
                                            <input type="text" id="name" name="name" required="required"    class="user_name span*" placeholder="Event Name" title="Blank characters not allowed" pattern="[a-zA-Z0-9 ]+$" />
                                        </div>
                                </div>
                            </div>
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label" for="city">Venue</label>
                                    <div class="controls">
                                        <input type="email" id="email" name="email" required="required"    class="user_email span*" placeholder="Venue" title="Blank characters not allowed" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9]+.[a-zA-Z]+$" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label" for="city">Event Type</label>
                                        <div class="controls">
                                            <input type="text" id="name" name="name" required="required"    class="user_name span*" placeholder="Your Name" title="Blank characters not allowed" pattern="[a-zA-Z0-9 ]+$" />
                                        </div>
                                </div>
                            </div>
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label" for="city">Email</label>
                                    <div class="controls">
                                        <input type="email" id="email" name="email" required="required"    class="user_email span*" placeholder="Email" title="Blank characters not allowed" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9]+.[a-zA-Z]+$" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row-fluid">
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label" for="city">Company</label>
                                    <div class="controls">
                                        <input type="text" id="company" name="company" required="required" class="user_company span*" placeholder="Company" title="Blank characters not allowed" pattern="[a-zA-Z0-9 ]+$" />
                                    </div>
                                </div>
                            </div>
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label" for="city" >Designation</label>
                                    <div class="controls">
                                        <input type="text" id="designation" name="designation" required="required" class="user_designation span*" placeholder="Designation" title="Blank characters not allowed" pattern="[a-zA-Z0-9. ]+$" autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="control-group">
                                <label class="control-label" for="city">City</label>
                                <input type="text" id="Gautocomplete" name="city" required="required" class="user_city span* city_name" placeholder="City" autocomplete="off">
                                <input type="hidden" id="cityCode" name="cityCode" class="city_code">
                                <input type="hidden" id="place_id" name="place_id" value="">
                                <p class="alert_location"></p>
                                <input type="hidden" id="countryCode" name="countryCode" class="user_country_code country_code" />
                                <input type="hidden" id="country" name="country" required="required" class="user_country span* country_name" placeholder="Country" autocomplete="off">
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label" for="city">Website</label>
                                    <div class="controls">
                                        <input type="text" id="website" name="website" class="user_website span*" placeholder="Website" />
                                    </div>
                                </div>
                            </div>
                            <div class="span6">
                                <label class="control-label" for="">Mobile</label>
                                <div class="row-fluid">
                                    <div class="input-prepend span12"><span class="add-on phone_code" style="width:10%"></span> 
                                    <input type="text" id="phone" name="phone" required="required" class="user_contact_number span10" placeholder="Contact Number" title="Only 6 to 16 digits number is valid. Blank characters not allowed" pattern="[0-9]{6,16}$" />
                                    <input type="hidden" id="phoneCode" name="phoneCode" class="phone_code_value" />
                                    <input type="hidden" id="currencyCode" name="currencyCode" class="currency_code_value" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span12">
                                <div class="control-group">
                                    <label class="control-label" for="city">Requirements</label>
                                    <div class="controls">
                                        <textarea id="s_comment" name="s_comment" class="span12" placeholder="Any specific requirements or products to display." autocomplete="off" row="5" wrap="Virtual"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span3">
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="button" class="btn btn-success btn-large span*" id="register_button" onclick="return disable();">Register</button>
                                    </div>
                                </div>
                            </div>
                            <div class="span9">
                                <div class="control-group updt pull-right">
                                    <div class="controls">
                                        <input type="checkbox" id="reminders" name="reminders" checked="checked" style="margin:0; float:left" value="1" />
                                        &nbsp;&nbsp;Send me periodic reminder and updates.</div>
                                </div>
                            </div>
                        </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script src="https://im.gifbt.com/js/jquery.xdomainrequest.min.js"></script>
<script>
function initAutocomplete() {autocomplete = new google.maps.places.Autocomplete((document.getElementById('Gautocomplete')), {types: ['(cities)']});autocomplete.addListener('place_changed', fillInAddress);$('#Gautocomplete').keydown(function (e) {if (e.which == 13 && $('.pac-container:visible').length) return false;});}
function fillInAddress(){place = autocomplete.getPlace();hideCityLoading();$("#place_id").val(place.place_id);var phoneCodeFlag = 0 ;for (var i = 0; i < place.address_components.length; i++) {var addressType = place.address_components[i].types[0];if (addressType == "country") {var val = place.address_components[i]["short_name"];if(val != ""){for (var j = countryToPhone.length - 1; j >= 0; j--) {if( val.toLowerCase() == countryToPhone[j][1].toLowerCase() ){$('.phone_code').html("+"+countryToPhone[j][2]);$('.phone_code_value').val("+"+countryToPhone[j][2]);$('.user_country' ).val(val);$('.user_country_code' ).val(val);phoneCodeFlag = 1 ;break;}}}}}}
$('#Gautocomplete').on('keyup',function(){setTimeout(function() {var lenth= $(".pac-container").html().length;if(lenth==0 && $(".user_city").val() != ""){showCityLoading();}else{hideCityLoading();}if($("#place_id").val() != "")hideCityLoading();},500);});
$("#Gautocomplete").mouseout(function(){hideCityLoading();});$("#Gautocomplete").mouseleave(function(){hideCityLoading();});$('#Gautocomplete').on('blur' , function() {hideCityLoading();});
function calltfbload() {FB.init({appId: "172404889604820",cookie: true,version: 'v2.10'}); }
function getCookieNew1(e) {var t = e + "=";var n = document.cookie.split(";");for (var r = 0; r < n.length; r++) {var i = n[r];while (i.charAt(0) == " ") i = i.substring(1);if (i.indexOf(t) != -1 ){var name = i.split("=");if(name[0] == e)return i.substring(t.length, i.length)} }return ""}
switch(getCookieNew1('countryCode')){case '':case 'CN':case 'MO':loadSyncScript('https://maps.google.hk/maps/api/js?key=AIzaSyBtOXxR_DiGk_Ns0LbeTkOmCWhypSTe7sY&libraries=places&callback=initAutocomplete');if(getCookieNew1('countryCode') != ""){$('.fb.login_button').parent().hide();}else{loadSyncScript('https://connect.facebook.net/en_US/sdk.js');}break;default:loadSyncScript('https://maps.googleapis.com/maps/api/js?key=AIzaSyBtOXxR_DiGk_Ns0LbeTkOmCWhypSTe7sY&libraries=places&callback=initAutocomplete');loadSyncScript('https://connect.facebook.net/en_US/sdk.js');}
function loadSyncScript (src) {var jsMap = document.createElement("script");jsMap.type = "application/javascript";jsMap.src = src;document.body.appendChild(jsMap);}
function designation_autoComplete(B, A) {$.get("/json/autosuggest/designation/designation_autocomplete.json", function(C) {$(B).typeaheadmap({source: function(D, E) {E(C)},key: "text",value: "code",items: 7,listener: function(E, D) {},displayer: function(F, E, D) {return D}}).on("blur", function() {})})}
designation_autoComplete(".user_designation", "0");
</script>
<script type="text/javascript" src="https://platform.linkedin.com/in.js">
  api_key: {{ LinkedIn_APP_key }}
  onLoad: onLinkedInLoad
  authorize: false 
</script>
