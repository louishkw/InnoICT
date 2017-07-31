<?php include '_header.php';?>
<?php include '_nav.php';?>

  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h1 class="section-heading">會員中心</h1>
        <h3 class="section-subheading">您好，您將會在此更新您相關的個人信息，並且我們會謹守以下私隱條例，以保障您的私隱安全。</h3>
      </div>
    </div>

	<div class="row">
		<div class="col-md-offset-1 col-md-7">
			<div class="panel panel-primary">
				<div class="panel-heading">私隱條例</div>
				<div class="panel-body" style="max-height:530px;overflow-y: scroll;">
					<p><?php include('statement.txt'); ?></p>
				</div>
			</div>
			<div class="checkbox text-center">
				<label>
					<input type="checkbox" id="AgreePri" onchange="document.getElementById('ConFirmPrivacy').disabled = !this.checked;">我已閱讀並同意以上內容
				</label>
			</div>
	
			<div class="text-center">
				<button type="submit" class="btn btn-xs btn-primary2 btn-round" disabled="disabled" id="ConFirmPrivacy" onclick="window.location='info.php';">繼續</button>	
				<button type="reset" class="btn btn-xs btn-default btn-round">取消</button>
			</div>	
		</div>	
	</div>
	
	
	<?php include '_footer.php';?>
