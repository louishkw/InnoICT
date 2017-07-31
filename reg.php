<?php include '_header.php';?>
<?php include '_nav.php';?>

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="section-heading">註冊帳戶</h1>
        <h2 class="section-subheading text-muted"></h2>
      </div>
    </div>

	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">服務條例</div>
				<div class="panel-body" style="max-height:530px;overflow-y: scroll;">
					<p><?php include('statement.txt'); ?></p>
				</div>
			</div>
			<div class="checkbox text-center">
				<label>
					<input type="checkbox" id="AgreeStat" onchange="document.getElementById('SendRegis').disabled = !this.checked;">我已閱讀並同意以上內容
				</label>
			</div>
		</div>
		<div class="col-md-6">
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label for="InputAccountName" class="col-md-offset-1 col-md-3 control-label">帳號：</label>
					<div class="col-md-8">
						<input type="text" class="form-control round input-sm border-1" id="InputAccountName">
					</div>
				</div>
				
				<div class="form-group">
					<label for="InputPassword1" class="col-md-offset-1 col-md-3 control-label">密碼：</label>
					<div class="col-md-8">
						<input type="Password" class="form-control round input-sm" id="InputPassword1">
					</div>
				</div>
				
				<div class="form-group">
					<label for="InputPassword2" class="col-md-offset-1 col-md-3 control-label">重新輸入密碼：</label>
					<div class="col-md-8">
						<input type="Password" class="form-control round input-sm" id="InputPassword2">
					</div>
				</div>
			
				<!-- Space -->
				<div class="form-group" style="margin: 50px 0;"></div>
				
				
				<div class="form-group">
					<label for="Birth" class="col-md-offset-1 col-md-3 control-label">生日：</label>
					<div class="col-md-8">
						<input type="date" class="form-control round input-sm" id="Birth">
					</div>
				</div>
				
				<div class="form-group">
					<label for="Gender" class="col-md-offset-1 col-md-3 control-label">性別：</label>
					<div class="col-md-3">
						<div class="input-group">
							<span class="input-group-addon">&#9660</span>
							<select class="form-control round input-sm" id="Gender">
								<option>男</option>
								<option>女</option>						
							</select>
						</div>
					</div>
				</div>
				
				<!-- Space -->
				<div class="form-group" style="margin: 50px 0;"></div>
						
				<div class="form-group">
					<label for="Tel" class="col-md-offset-1 col-md-3 control-label">聯絡電話：</label>
					<div class="col-md-8">
						<input type="Telephone" class="form-control round input-sm border-1" id="Tel">
					</div>
				</div>
				
				<div class="form-group">
					<label for="Email" class="col-md-offset-1 col-md-3 control-label">聯絡電郵：</label>
					<div class="col-md-8">
						<input type="email" class="form-control round input-sm" id="Email">
					</div>
				</div>

				<div class="form-group">
					<label for="Region" class="col-md-offset-1 col-md-3 control-label">地區：</label>
					<div class="col-md-5">
						<div class="input-group">
							<span class="input-group-addon">&#9660</span>
							<select class="form-control round input-sm" id="Region">
								<option>澳門 Macau</option>
								<option>香港 Hong Kong</option>		
								<option>中國大陸 China</option>
								<option>台灣 Taiwan</option>				
							</select>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<label for="Address" class="col-md-offset-1 col-md-3 control-label">聯絡地址：</label>
					<div class="col-md-8">
						<textarea class="form-control round input-sm" id="Address" style="resize:none;"></textarea>
					</div>
				</div>
				
				<div class="form-group text-center">
					<button type="submit" class="btn btn-xs btn-primary2 btn-round" disabled="disabled" id="SendRegis">完成註冊</button>	
					<button type="reset" class="btn btn-xs btn-default btn-round">取消</button>
				</div>		
			</form>
		</div>
	</div>	
	
	
	<?php include '_footer.php';?>
