$("#submit").click(function(){ 
	var v1 = $("#v1").val();
	var v1 = $("#v2").val();
	
	if( v1 != '' && v2 !='' ){
		return true; 
	}	
	else{
		alert("Tolong diisi...!!!!!!");
		return false;
	}
});