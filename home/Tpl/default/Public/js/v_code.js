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
function checkVcode(){
	str = $("#v_code_input").val();
	if(str.length <=0 )
	{
			  alert("请输入验证码！");
			  return false ; 
	}
	else if(str.toUpperCase() != code )
	{
		alert("验证码不正确！请重新输入");
		return false ; 
	}else return true ; 
}