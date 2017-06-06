<?php 

date_default_timezone_set("Europe/Amsterdam"); 
$time = date("H:i:s");

?>

<html>
<head>
<title>Goede morgen</title>
<link rel="stylesheet" type="text/css" href="goede.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<script type="text/javascript">
var timeout = setTimeout(reload, 1000);
    function reload(){
        $("#reload").load('index.php #reload', function(){
            timeout = setTimeout(reload, 1000);
        });
    }
        </script>
<div id="reload">
<?php
if ($time >= "06:00" && $time < "12:00") {
	echo "<h1>Good morning</h1><p>The time is $time.</p>";
	echo "<style> body {background-image:url(backgrounds/morning.png); background-size: cover;} </style>";
} elseif ($time >= "12:00" && $time < "18:00") {
	echo "<h1>Good afternoon</h1><p>The time is $time.</p>";
	echo "<style> body {background-image:url(backgrounds/afternoon.png); background-size: cover;} </style>";
} elseif ($time >= "18:00" && $time < "24:00") {
	echo "<h1>Good evening</h1><p>The time is $time.</p>";
	echo "<style> body {background-image:url(backgrounds/evening.png); background-size: cover;} </style>";
} elseif ($time >= "00:00" && $time < "06:00") {
	echo "<h1>Good night</h1><p>The time is $time.</p>";
	echo "<style> body {background-image:url(backgrounds/night.png); background-size: cover;} </style>";
}
?>
</div>
</body>
</html>
