<?php
	include "./db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>선문대학교 종합프로젝트 5조 영화 추천 사이트</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/registration.css"/>
	<script>
		$(function() {
			$("#chk").on('click',function(){
				var id = $("#uid").val();
				if(id){
					id = "check.php?userid="+id;
					window.open(id,"_blank","width=300,height=100");
					}else{
						alert("아이디를 입력세요");
					}
			});

			$(".r").on('click',function() {
				$("#mform").submit();
			});

			$(".re").on('click',function() {
				$(location).attr('href',"./member.php" );
			});
		});
	</script>
</head>
<body>
	<div id="login_box">
	<form id="mform" method="post" action="member_ok.php">
		<h1>Membership Registration</h1>
		<div class="title-container"></div>
			<fieldset class="line">
				<legend>Required</legend>
					<table align="center" border="0" cellspacing="0" width="600">
						<tr>
							<td>Id</td>
							<td colspan="9">
								<input type="text" size="35" name="userid" id="uid" placeholder="아이디" required>
								<input type="hidden" value="0" name="chs"/>
							</td>
							<td><div id="chk"/>duplication</td>
						</tr>
						<tr>
							<td>Pwd</td>
							<td colspan="9">
								<input type="password" size="35" name="userpw" placeholder="비밀번호"></td>
						</tr>
						<tr>
							<td>Name</td>
							<td colspan="9">
								<input type="text" size="35" name="name" placeholder="이름"></td>
						</tr>
						<tr>
							<td>Age</td>
							<td colspan="9">
								<input type="number" size="35" name="age" required value="20"></td>
						</tr>
						<tr>
							<td>sex</td>
							<td>&nbsp</td>
							<td colspan="4">
								Male<input type="radio" name="sex" value="1">
								</td>
							<td colspan="2">
								Female<input type="radio" name="sex" value="0">
								</td>
						</tr>
						<tr>
							<td colspan="11"><div class="line">	</div></td>
						</tr>
						<tr>
							<td align="center" colspan="5">
								<div class="mine r" type="submit" />Register
							</td>
							<td align="center" colspan="6">
								<div class="mine re" type="reset" />Rewrite
							</td>
						</tr>
						<tr>
							<td  colspan="9">&nbsp</td>
						</tr>
					</table>


		</fieldset>
	</form>
	</div>
</body>
</html>
