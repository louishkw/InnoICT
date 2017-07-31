$(document).ready(function(){
	
	/* show the login panel*/
	$(".flip").click(function(){
		$("#LoginPanel").slideToggle("slow");
	});
	
	/* scroll to the archor */
	$("a.scroll").click(function(){
		if ($(this).attr('href') == "#top"){
			$('html,body').animate({scrollTop:0}, 700);
		}
		else{
			$('html,body').animate({scrollTop:target.offset().top}, 700); 
		}
	});
	
	/* Change interface before new question is completely created */
	$(".msgpanel").on("click", ".row.entry", function() {
		if ($(this).find("label[name='title']").text()==="新主題"){
			$(this).ShowButtonForNewQuestion();
	   } else if ($("#SendMessage").css("display")==="none"){
			$(this).ShowButtonForExistingQuestion();
	   } 
    });
	
	/* Complete the new created question */
	$("#SaveQuestion").click(function(){
		var content = $(this).GetMessage();
		var title = $(this).GetTitle();
		
		if (content == null){
			alert("請輸入內容");
			return;
		}else if (title == null){
			alert("請輸入題目");
			return;		
		}
		
		//find the current location to insert the text
		var targetparent =  $(".tab-pane.fade.active.in"); 
		var target = targetparent.find("ul");
		
		//insert a new 'li' between the 'ul'
		target.append(content);	

		//insert title
		targetparent.children("h3").text(title);
		var id = $(".tab-pane.fade.active.in").prop("id");
		var child = $(".msgpanel").children();
		$.each(child, function(){
			if ($(this).attr("href") === "#" + id){
				
				$(this).children().first().children().text(title);				
			}
		});
			
		$(this).siblings("textarea").val("");
		$(this).siblings("#NewTitle").val("");
		
		$(this).ShowButtonForExistingQuestion();
		targetparent.find("div.list").animate({ scrollTop: targetparent.find("div.list").prop("scrollHeight")}, 1000);
	});
	
	/* set the table row to be clickable */
	$(".clickable-row").click(function() {
        window.document.location = $(this).data("href");
    });
	
	/* Create new question in message center */
	$("#CreateQuestion").click(function(){
		var target1 = $("html").find(".col-xs-5.msgpanel").children().last();
		var currentDate = target1.myGetDate();
		var NumEntry = $("div.row.entry").length + 1;
		
		//insert new question on panel left
		target1.after("<div class=\"row entry\" id=\"entry_" + NumEntry + "\" data-toggle=\"pill\" href=\"#content_" + NumEntry + "\">" +
						"<div class=\"col-xs-5\"><label name=\"title\">新主題</label></div>" +
						"<div class=\"col-xs-3\"><label name=\"newreply\">0</label></div>" +
						"<div class=\"col-xs-4\"><label name=\"date\">" + currentDate + "</label></div>" +
					"</div>");
		
		var target2 = $("html").find(".tab-content").children().last();
		
		//insert new question content page
		target2.after(	"<div id=\"content_" + NumEntry + "\" class=\"tab-pane fade\">" +
							"<h3>新主題</h3>" +
							"<div class=\"list\">" +
						  		"<ul>" +
								"</ul>" +
							"</div>" +
						"</div>");
			
		$(this).ShowButtonForNewQuestion();
		
		$(".col-xs-5.msgpanel").animate({ scrollTop: $(".col-xs-5.msgpanel").prop("scrollHeight")}, 500);
		
		$("#entry_" + NumEntry).trigger('click');
		$("#SendMessage").prop('disabled', false);
		$("#ContentBox").prop('disabled', false);
	});
	
	/* submit the typed message */
	$("#SendMessage").click(function(){
		var content = $(this).GetMessage();
		
		if (content == null){
			alert("請輸入內容");
			return;
		}
		
		//find the current location to insert the text
		var targetparent =  $(".tab-pane.fade.active.in"); 
		var target = targetparent.find("ul").children().last();
		
		//insert a new 'li' after the last 'li'
		target.after(content);
					
		$(this).siblings("textarea").val("")
			
		targetparent.find("div.list").animate({ scrollTop: targetparent.find("div.list").prop("scrollHeight")}, 1000);
	});
	
	/* Customized file selector */
	$(document).on('click', '.browse', function(){
		var file = $(this).parent().parent().parent().find('.file');
		file.trigger('click');
	});
	
	$(document).on('change', '.file', function(){
		$(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
	});	
	
	/* Hide or show the number of new reply */
	var NumReply = $("label[name='newreply']");
	$.each(NumReply, function(){
		if ($(this).text() === "0"){
			$(this).css("visibility", "hidden");
		}else{
			$(this).css("visibility","visible");
		}
	});
	
	/* Enable the send button */
	$(".entry").click(function(){
		$("#SendMessage").prop('disabled', false);
		$("#ContentBox").prop('disabled', false);
	});
	
	
	//get full date in specific format
	jQuery.fn.extend({
		myGetDateAndTime: function () {		
			var today = new Date();
			var currentDateTime = 	today.getFullYear()+'/'+
									(today.getMonth()+1<10 ? '0' : '') +(today.getMonth()+1)+'/'+ 
									(today.getDate()<10 ? '0' : '') + today.getDate()+' '+
									(today.getHours()<10 ? '0' : '') + today.getHours()+':'+
									(today.getMinutes()<10 ? '0' : '') + today.getMinutes()+':'+
									(today.getSeconds()<10 ? '0' : '') + today.getSeconds();
		return currentDateTime;
		}
	});
	
	//get the date in specific format
	jQuery.fn.extend({
		myGetDate: function () {		
			var today = new Date();
			var currentDate =  	today.getFullYear()+'/'+
								(today.getMonth()+1<10 ? '0' : '') +(today.getMonth()+1)+'/'+ 
								(today.getDate()<10 ? '0' : '') + today.getDate();
		return currentDate;
		}
	});
	
	/* Display title textbox for new question */
	jQuery.fn.extend({
		ShowButtonForNewQuestion: function () {
			$("#SendMessage").css('display', "none");
			$("#SaveQuestion").css('display', "inline-block");
			$("#ContentBox").attr("placeholder", "　內容：");
			$("#NewTitle").css('display', "inline-block");
			$(".tab-content").css('height', "320px");
		}
	});
	
	/* Hide textbox for existing question */
	jQuery.fn.extend({
		ShowButtonForExistingQuestion: function () {
			$("#SendMessage").css('display', "inline-block");
			$("#SaveQuestion").css('display', "none");
			$("#ContentBox").attr("placeholder", "");
			$("#NewTitle").css('display', "none");
			$(".tab-content").css('height', "360px");
		}
	});

	jQuery.fn.extend({
		GetMessage: function () {
			// get the typed text
			var inputtext = $("#ContentBox").val();
			
			if (inputtext===""){
				return;
			}
			
			//get the date in specific format
			var currentDateTime = $("#ContentBox").myGetDateAndTime();
			var inserttext = "<li>" +
							"<div class=\"content\">" +
								"<div class=\"userName\"><a href=\"javascript:;\">病人</a>:</div>" +
								"<div class=\"msgInfo\">" + inputtext + "</div>" +
								"<div class=\"times\"><span>" + currentDateTime + "</span></div>" +
							"</div>" +
						"</li>"
			return inserttext;
		}
	});
	
	jQuery.fn.extend({
		GetTitle: function () {
			// get the typed text
			var inputtext = $("#NewTitle").val();
			
			if (inputtext===""){
				return;
			}
			return inputtext;
		}
	});
});



