<html>
<head>
<title>test</title>


</head>

<body>
	<div id = "show"></div>

<script type="text/javascript" src = "jquery.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	setInterval(function(){
		$('#show').load('DB.php')
	}, 3000);

});


</script>
</body>

</html>