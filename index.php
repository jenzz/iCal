<?php
    require_once('php/utils.php');
?>
<!DOCTYPE html>
<html> 
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>Football Fixtures to iCal</title>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
    <script src="js/script.js"></script>
</head> 
 
<body> 

<div data-role="page" id="home">
 
    <div data-role="header" data-position="inline">
		<h1>Football Fixtures to iCal</h1>
		<a href="#info" class="ui-btn-right" data-icon="info">Info</a>
    </div>
 
    <div data-role="content">

        <h2>National Leagues (<?php echo getSeason(); ?>)</h2>
    
    	<div data-role="collapsible" data-theme="a" data-content-theme="c" data-url="eng1">
    		<h3>Barclays Premier League</h3>
    		<div class="teams"></div>
    	</div>
    
    	<div data-role="collapsible" data-theme="a" data-content-theme="c" data-url="ger1">
    		<h3>German Bundesliga</h3>
    		<div class="teams"></div>
    	</div>
    	
    	<div data-role="collapsible" data-theme="a" data-content-theme="c" data-url="ger2">
    		<h3>German 2nd Division</h3>
    		<div class="teams"></div>
    	</div>
    	
    	<div data-role="collapsible" data-theme="a" data-content-theme="c" data-url="ger3">
    		<h3>German 3rd Division</h3>
    		<div class="teams"></div>
    	</div>
    	
    	<div data-role="collapsible" data-theme="a" data-content-theme="c" data-url="esp1">
    		<h3>Spanish Liga BBVA</h3>
    		<div class="teams"></div>
    	</div>
    	
    	<div data-role="collapsible" data-theme="a" data-content-theme="c" data-url="ita1">
    		<h3>Italian Serie A</h3>
    		<div class="teams"></div>
    	</div>
    	
    	<div data-role="collapsible" data-theme="a" data-content-theme="c" data-url="fra1">
    		<h3>French Ligue 1</h3>
    		<div class="teams"></div>
    	</div>
    	
    	<br />
    	<h2>International Competitions (<?php echo getSeason(); ?>)</h2>

    	 <div data-role="collapsible" data-theme="a" data-content-theme="c" data-url="cl">
    		<h3>UEFA Champions League</h3>
    		<div class="teams"></div>
    	</div>   
    
    	<div data-role="collapsible" data-theme="a" data-content-theme="c" data-url="eu">
    		<h3>Europa League</h3>
    		<div class="teams"></div>
    	</div>
    	
    </div>

</div>

<div data-role="page" id="info">
 
    <div data-role="header">
    	<a href="#home" class="ui-btn-left" data-icon="home">Home</a>
        <h1>Info</h1>
    </div>
 
    <div data-role="content">
        <p>
        	This web app reads out selected football fixtures from the german sports website <a href="http://www.kicker.de">kicker.de</a>
        	and converts them into an importable <span class="bold">iCalendar</span> format<br />
            which is compatible with Outlook, Thunderbird, Google Calendar and Steve Jobs's iCal (!)<br />
            Woohoou..
        </p>
        
        <p>
        	Based on <a href="http://www.php.net/">PHP</a>, <a href="http://querypath.org/">QueryPath</a> and <a href="http://jquerymobile.com/">jQuery Mobile</a>.
        </p>
        
        <br /><p>
        	...blaaa blaaa blluurrrpp more description coming maybe, who cares?......
        </p>
    </div>
 
</div>

</body>
</html>