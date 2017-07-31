<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
      
    <link rel="icon" href="../../favicon.ico">

    <title>Porto</title>

	<!-- Customize CSS for scrollbar, these codes must be type here. It won't work at css file -->
	<style>
		/* Scrollbar styles */
		::-webkit-scrollbar {
			width: 20px;
		}

		::-webkit-scrollbar-track {
			background: white;
			border-radius: 0 20px 20px 0;
			border-left: 1.5px solid grey;
		}

		::-webkit-scrollbar-thumb {
			border-radius: 18px;
			background: white;  
			border: 1px solid;
		}

		::-webkit-scrollbar-thumb:hover {
			background: #58A0D8;  
		}

	</style>
    <!-- Bootstrap core CSS -->
    <link href="./dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="CSS/style.css" rel="stylesheet" charset="utf-8">
	
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="./assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


  </head>
  
  	<?php include '_nav.php';?>
  
  <div class="container">
	<div class="row">
		<div class="col-xs-12">
			<h1 class="section-heading">信息中心</h1>
		</div>
	</div>
	<div class="row" class="paneltop">
		<div class="panel panel-default" >
			<div class="panel-heading" style="height:50px;font-size:1.05em;font-weight: bold;border-bottom:2px solid">
				<div class="col-xs-2" style="padding-right:0">
					主題
				</div>
				<div class="col-xs-1" style="padding-left:0">
					回覆
				</div>
				<div class="col-xs-2">
					創建時間
				</div>
				<div class="col-xs-5">
					內容
				</div>
				<div class="col-xs-2">
					<a href="#paneltop" style="text-decoration: none;" id="CreateQuestion">+創建新主題</a>
				</div>
			</div>
			<div class="panel-body" style="max-height:530px;padding:0;">
				<div class="col-xs-5 msgpanel">
					<div class="row entry" id="entry_1" data-toggle="pill" href="#content_1">
						<div class="col-xs-5"><label name="title">系統消息通知</label></div>
						<div class="col-xs-3"><label name="newreply">0</label></div>
						<div class="col-xs-4"><label name="date">2017/07/01</label></div>
					</div>
					<div class="row entry" id="entry_2" data-toggle="pill" href="#content_2">
						<div class="col-xs-5"><label name="title">我是主題一</label></div>
						<div class="col-xs-3"><label name="newreply">1</label></div>
						<div class="col-xs-4"><label name="date">2017/07/03</label></div>
					</div>
					<div class="row entry" id="entry_3" data-toggle="pill" href="#content_3">
						<div class="col-xs-5"><label name="title">我是主題二</label></div>
						<div class="col-xs-3"><label name="newreply">0</label></div>
						<div class="col-xs-4"><label name="date">2017/07/04</label></div>
					</div>
				</div>
				<div class="col-xs-7" id="MessageContentArea">
					<div class="tab-content" style="height:360px;padding: 10px 0;">
						<div id="content_1" class="tab-pane fade">
							<h3>系統消息通知</h3>
							<div class="list">
								<ul>
									<li>
										<div class="content">
											<div class="userName"><a href="javascript:;">病人</a>:</div>
											<div class="msgInfo">ASDASD</div>
											<div class="times"><span>2017/07/01 15:20:45</span></div>
										</div>
									</li>
									<li>
										<div class="content">
											<div class="userName"><a href="javascript:;">柏途PORTO</a>:</div>
											<div class="msgInfo">SDFSDF</div>
											<div class="times"><span>2017/01/09 12:24:54</span></div>
										</div>
									</li>
									<li>
										<div class="content">
											<div class="userName"><a href="javascript:;">病人</a>:</div>
											<div class="msgInfo">ABCC</div>

											<div class="times"><span>2017/01/09 17:08:54</span></div>
										</div>
									</li>
									<li>
										<div class="content">
											<div class="userName"><a href="javascript:;">病人</a>:</div>

											<div class="msgInfo">ABCABC</div>
											<div class="times"><span>2017/01/10 22:55:03</span></div>
										</div>
									</li>
									<li>
										<div class="content">
											<div class="userName"><a href="javascript:;">柏途PORTO</a>:</div>
											<div class="msgInfo">SDFSDF</div>
											<div class="times"><span>2017/01/09 12:24:54</span></div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div id="content_2" class="tab-pane fade">
							<h3>我是主題一</h3>
							<div class="list">
						  		<ul>
									<li>
										<div class="content">
											<div class="userName"><a href="javascript:;">病人</a>:</div>
											<div class="msgInfo">ASDASD</div>
											<div class="times"><span>2017/07/01 15:20:45</span></div>
										</div>
									</li>
									<li>
										<div class="content">
											<div class="userName"><a href="javascript:;">柏途PORTO</a>:</div>
											<div class="msgInfo">SDFSDF</div>
											<div class="times"><span>2017/01/09 12:24:54</span></div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div id="content_3" class="tab-pane fade">
							<h3>我是主題二</h3>
						    <div class="list">
						  		<ul>
									<li>
										<div class="content">
											<div class="userName"><a href="javascript:;">病人</a>:</div>
											<div class="msgInfo">ASDASD</div>
											<div class="times"><span>2017/07/01 15:20:45</span></div>
										</div>
									</li>
									<li>
										<div class="content">
											<div class="userName"><a href="javascript:;">柏途PORTO</a>:</div>
											<div class="msgInfo">SDFSDF</div>
											<div class="times"><span>2017/01/09 12:24:54</span></div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-7">
					<form>
						<input type="text" class="form-control round input-sm border-1" id="NewTitle" placeholder="　主題：">
						<textarea id="ContentBox" class="f-text round" style="border:1px solid #232854" disabled"></textarea>
						<button type="button" class="btn btn-xs btn-primary2 btn-round" id="SendMessage" disabled>傳送</button>
						<button type="button" class="btn btn-xs btn-primary2 btn-round" id="SaveQuestion">傳送</button>
					</form>
				</div>
			</div>
		</div>
	</div>	
	<?php include '_footer.php';?>