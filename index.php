<?php
include ('db.php');
if($_GET)
{
	$last_msg_id = $_GET['last_msg_id'];
	$action = $_GET['action'];
}
else
{
	$last_msg_id = '';
	$action = '';
}

if($action <> "get")
{ 
?>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="jquery-1.2.6.pack.js"></script>
	 <script type="text/javascript" src="http://ajax.googleapis.com/
		ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
			
		function last_msg_funtion() 
		{ 
		   
           var ID=$(".message_box:last").attr("id");
			$('div#last_msg_loader').html('<img src="loader.gif">');
			$.post("index.php?action=get&last_msg_id="+ID,
			
			function(data){
				if (data != "") {
				$(".message_box:last").after(data);			
				}
				$('div#last_msg_loader').empty();
			});
		};  
		
		$(window).scroll(function(){
			if  ($(window).scrollTop() == $(document).height() - $(window).height()){
			   last_msg_funtion();
			}
		}); 
		
	});
	</script>
</head>
<body>
<?php
include('load_first.php'); //Include load_first.php
?>
<div id="last_msg_loader"></div>
</body>
</html>
<?php
}
else
{
	include('load_second.php'); //include load_second.php
}
?>