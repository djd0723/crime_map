<?php include($_SERVER['DOCUMENT_ROOT'].'/app/crime_map/templates/template_top.php'); ?>
<body style="padding-top: 10px; padding-bottom: 0px;">
<div id="main_content">

<div class="hidden-phone">
<div id="nav-primary">
	<ul class="nav nav-tabs">
    	<li>
    		<a href="profile.php">Community Profile</a>
    	</li>
		<li>
    		<a href="map_index_all.php">All Reports</a>
    	</li>
		<li>
    		<a href="map_index_jan.php">January</a>
    	</li>
		<li>
    		<a href="map_index_feb.php">February</a>
    	</li>
        <li class="active">
            <a href="map_index_march.php">March</a>
        </li>
        <li>
            <a href="map_index_april.php">April</a>
        </li>
        <li>
            <a href="map_index_may.php">May</a>
        </li>
        <li>
            <a href="map_index_june.php">June</a>
        </li>
        <li>
            <a href="map_index_july.php">July</a>
        </li>
    </ul>
</div>
</div>

<div class="visible-phone">
	<div class="dropdown" style="padding-bottom: 20px; font-size: 14px;">
		<a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" href="#">
    		Click here toggle between months
        	<b class="caret"></b>
    	</a>
    	<ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
    		<li><a href="profile.php">Community Profile</a></li>
			<li><a href="map_index_all.php">All reports of crime</a></li>
        	<li><a href="map_index_jan.php">January reports</a></li>
			<li><a href="map_index_feb.php">February reports</a></li>
            <li><a href="map_index_march.php">March reports</a></li>
            <li><a href="map_index_april.php">April reports</a></li>
            <li><a href="map_index_may.php">May reports</a></li>
            <li><a href="map_index_june.php">June reports</a></li>
            <li><a href="map_index_july.php">July reports</a></li>
    	</ul>
	</div>
	<h2>Compare crimes: March 2013</h2>
    This chart compares how often crimes in this month were reported.
</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/app/crime_map/templates/template_middle.php'); ?>
<script src="http://wcfcourier.com/app/crime_map/JSON_cf/crime_data_march.json"></script>

<?php include($_SERVER['DOCUMENT_ROOT'].'/app/crime_map/templates/template_bottom.php'); ?>