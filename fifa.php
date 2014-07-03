<html>
<head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52158312-1', 'carlangasbar.com');
  ga('send', 'pageview');

</script>
<title>Carlangasbar World Cup Insights - fifa.php</title>
<meta name='description' content='World Cup Predictions' />
<meta name='keywords' content='world, cup, analytics, colombia, carlangasbar' />
<meta property='og:site_name' content='Carlangasbar WC Insights' />
<meta property='og:title' content='Carlangasbar WC Insights' />
<meta property='og:description' content='World Cup Analytics' />
<meta property='og:image' content='http://carlangasbar.com/uploads/3/0/9/0/3090211/1403034627.png' />
<meta property='og:image' content='http://carlangasbar.com/uploads/3/0/9/0/3090211/header_images/1402982295.jpg' />
<meta property='og:image' content='http://carlangasbar.com/uploads/3/0/9/0/3090211/4266414.jpg?57' />
<meta property='og:image' content='http://www.dragndropbuilder.com/editor/images/na.png' />
<meta property='og:url' content='http://carlangasbar.com/' />

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  
<link rel="stylesheet" href="//assets.dragndropbuilder.com/css/sites.css?buildTime=1386132930" type="text/css" /><link rel="stylesheet" href="//assets.dragndropbuilder.com/css/mobile-sites.css?buildTime=1386132930" type="text/css" /><link rel='stylesheet' type='text/css' href='/files/mobile/main_style.css?1403035968' title='wsite-theme-css' />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,400italic,700italic' rel='stylesheet' type='text/css' />
<style type='text/css'>
.wmobile-line,
.wmobile-bar,
.wmobile-button {
  background-color: #d5d5d5 !important;
  }
</style>
<style type='text/css'>
.wsite-header, .wsite-header2, .wsite-header3 {
  height: auto !important;
  min-height: 0 !important;
  background: none;}
</style>
<script><!--
var STATIC_BASE = 'http://www.dragndropbuilder.com/';
var STYLE_PREFIX = 'wsite';
//-->
</script>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
<script src='//assets.dragndropbuilder.com/js/site/main-mobile.js?buildTime=1386132930'></script>
<script type='text/javascript' src='http://www.dragndropbuilder.com/editor/libraries/mobile_navigation.js?buildTime=1386132930'></script>
</head>
<body class=' no-touch header-page wsite-menu-slideright  wsite-theme-light wsite-page-index wsite-mobile wsite-render3d' ontouchstart="">
<div id="header" class="wmobile-bar"><a class="wsite-menu-button"> <span class="wsite-menu-button-text disable-user-select">Menu</span></a>
<div class="wsite-menu-button-bars">&nbsp;</div>
<h1><span class="wsite-logo"><a href="/"><img style="margin-top: -2px; margin-right: 33px;" src="/uploads/3/0/9/0/3090211/1403034627.png" alt="" /></a></span></h1>
<div style="clear: both;">&nbsp;</div>
</div>
<div id="menu-wrapper" class="wsite-menu-wrapper">
<div id="search">&nbsp;</div>
<div id="menu">
<ul class="wsite-menu-default">
<li id="active"><a href="/index.html?m">fifa.php</a></li>
</ul>
</div>
<div id="phone">&nbsp;</div>
<div id="social">&nbsp;</div>
</div>
<div class="header-wrapper">
<div class="wsite-header"><img style="width: 100%; height: auto; display: block;" src="/uploads/3/0/9/0/3090211/header_images/1402982295.jpg" alt="" /></div>





<span style="float: left; z-index: 10; position: relative; ;clear: left; margin-top: 0px; *margin-top: 0px;"><a><img class="galleryImageBorder" style="border-width: 0; margin: 5px 10px 10px 0px;" src="/uploads/3/0/9/0/3090211/4266414.jpg?57" alt="Picture" /></a></span>
<div class="paragraph" style="text-align: left; display: block;">&nbsp;</div>
<hr style="clear: both; visibility: hidden; width: 100%;" />
<div>
<div class="wsite-multicol">
<div class="wsite-multicol-table-wrap" style="margin: 0 -15px;">
<table class="wsite-multicol-table">
<tbody class="wsite-multicol-tbody">
<tr class="wsite-multicol-tr">
<td class="wsite-multicol-col" style="width: 50%; padding: 0 15px;"><basefont face="Arial" /></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<body>

<center>
<font face="Arial" size="5" color="red">Before Betting Check Your Stats!!</font>
</center>
<br>
<font face="Arial" size="3" color="red">Enter the code of two teams to compare</font>
<br>
Country FIFA Code Lookup
<br>

   <?php 
mysql_connect("carlangasbarcom.ipagemysql.com", "fifa", "fifa") or die("Connection Failed"); 
mysql_select_db("fifa")or die("Connection Failed");
 $query = "SELECT  concat( team , ' - ' , teamcode) as teamcode from team_player_powerindex order by 1"; $result = mysql_query($query); ?> 
<select name="select1">

 <?php
 while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) { 
?>
 <option value="<?php echo $line['teamcode'];?>"> 

<?php 
echo $line['teamcode'];?> </option>   
<?php } 
?> 

</select> 


<br>
<form name="team1" method="post" action="fifap.php"> <input type="text" name="tm"/>
<form name="team2" method="post" action="fifap.php"> <input type="text" name="tm2"/>
 <input type="submit" name="Submit" value="submit"/> </form> 
<br>
Compara dos equipos (eg,  COL      URU)
<br>
<br>
<br>
<br>


</body>



</html>