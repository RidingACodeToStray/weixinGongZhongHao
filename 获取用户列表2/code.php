<?php


$code = $_GET['code'];

//扫码访问 
//https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxd42ad81a37b5c46d&redirect_uri=http%3A%2F%2F1.weixin5open.applinzi.com%2Fcode.php&response_type=code&scope=snsapi_base&state=STATE#wechat_redirect;


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Document</title>
</head>
<body>
	<button>获取</button>
	<div></div>
</body>
<script type="text/javascript" src="jquery-3.0.0.min.js"></script>
<script type="text/javascript">
	$("button").on("click",function  () {
		$.ajax({
			type:"get",
			url:"get.php",
			data:{code:"<?php echo $code; ?>"},
			success:function(data){
				$("div").html(data);
			}
		})
	})

</script>
</html>




