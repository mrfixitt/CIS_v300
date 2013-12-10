
$(document).ready(function(){

	var form = $("#customForm");
	var name = $("#name");
	var nameInfo = $("#nameInfo");
	var email = $("#email");
	var emailInfo = $("#emailInfo");
	var pass1 = $("#pass1");
	var pass1Info = $("#pass1Info");
	var pass2 = $("#pass2");
	var pass2Info = $("#pass2Info");
	var state = false;
	
	name.keyup(validateName);
	
	function validateName(){
		if(name.val().length<=4){
			name.removeClass('valid');
			nameInfo.removeClass('valid');
			name.addClass("error");
			nameInfo.addClass("error");
			nameInfo.text("Username must be at least 4 characters in length");
			state = false;
		}
		else{
			if(name.val().length>4){
				var uname=name.val();
				$.post('validate.php', {names:uname}, function(data){
					if(data!=0){
						name.removeClass('valid');
						nameInfo.removeClass('valid');
						name.addClass("error");
						nameInfo.addClass("error");
						nameInfo.text("Username is already registered!");
						state = false;
					}
					else{
						name.removeClass('error');
						nameInfo.removeClass('error');
						name.addClass("valid");
						nameInfo.addClass("valid");
						nameInfo.text("Username is available!");
						state = true;
					}
				});
			}
		}
		return state;
	}
});