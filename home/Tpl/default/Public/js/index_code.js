/**
 *name : validate code javascript
 * code by fly
 * discription : There must be a css class name "code" for the output validate code .
 */
var code ; 
function createCode(){
	code = "" ; 
	var c_length = 4 ; 
	var checkCode = document.getElementById("checkCode");
	var selectChar = new Array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
	for(var i = 0 ; i < c_length ; ++i )
	{
		var charIndex = Math.floor(Math.random()*36);
		code += selectChar[charIndex];
	}
	if(checkCode)
    {
	    checkCode.className = "code";
	    checkCode.value = code ; 
    }
}
function checkInput(){
		if(!checkUsername($('#m_name').val())){
			return false ;
		}else if(!checkPassword($('#m_password').val())){
			return false ;
		}else if(!checkVcode($('#v_code_input').val())){
			return false ;
		}else return true ; 
}
function checkVcode(str){
	if(str.length <=0 )
	{
			  alert("请输入验证码！");
			  return false ; 
	}
	else if(str.toUpperCase() != code )
	{
		alert("验证码不正确！请重新输入");
		createCode();
		return false ; 
	}else return true ; 
}


function checkUsername(str){
	if( str.length > 5 || str.length<=0){
	   alert("姓名不能为空或超过5个字符！");
	   return false ; 
	}else return true ; 
}
function checkPassword(str){
	if( str.length > 12 || str.length<=0){
	   alert("密码不能为空或超过20个字符！");
	   return false ; 
	}else return true ; 
}
