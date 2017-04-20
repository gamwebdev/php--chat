<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../styles/styles.css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>

</head>
<body>
	<h2>Welcome <span style="color:green;"> <?php echo $_SESSION['UserName'] ?> </span></h2>

	<div id="ChatBig">
		<div id="ChatMessages"></div>
		<textarea name="ChatText" id="ChatText"></textarea>
	</div>


	<script>
		$(document).ready(function(){

			$("#ChatText").keyup(function(e){
			
/*

				if(e.keyCode ==13){  

					alert($("#ChatText").val());
				}
*/
				


				if (e.keyCode ==13) {
					
					var ChatText = $("#ChatText").val();
					$.ajax({
						type:'POST',
						url:'InsertMessages.php',
						data:{ChatText:ChatText},
						success:function(){
							$("#ChatText").val("");
						}
					});
				}
			

			});

		});
	</script>
</body>
</html>