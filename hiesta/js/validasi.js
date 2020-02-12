function validate_form(){
        var valid=true;
    	var name = document.getElementById("txtName").value;
		var nim = document.getElementById("txtNim").value;
		var phone = document.getElementById("txtPhone").value;
		var email = document.getElementById("txtEmail").value;
		// var vege = document.getElementById("txtVeges").checked.value;
		var event = 0;
		// alert(vege);
		if(name==''){
			document.getElementById("usernameStatus").innerHTML="Fill name<br>";
			valid=false;
		}
		else{
			document.getElementById("usernameStatus").innerHTML="";
		}

		if(nim == ''){
			document.getElementById("nimStatus").innerHTML="Fill NIM<br>";
			valid=false;
		}
		else{
			document.getElementById("nimStatus").innerHTML="";
		}

		if(phone == ''){
			document.getElementById("phoneStatus").innerHTML="Fill Phone Number<br>";
			valid=false;
		}
		else{
			document.getElementById("phoneStatus").innerHTML="";
		}

		if(email == ''){
			document.getElementById("emailStatus").innerHTML="Fill Email<br>";
			valid=false;
		}
		else{
			document.getElementById("emailStatus").innerHTML="";
		}

		if(document.getElementById("txtVegeYes").checked==false && document.getElementById("txtVegeNo").checked==false){
			document.getElementById("vegeStatus").innerHTML="Choose One";
			valid=false;
		}
		else{
			document.getElementById("vegeStatus").innerHTML=" ";
		}
		
		for(var i=0;i<7; i++){
			if(document.regisForm.txtEvent[i].checked==true){
				event++;
			}
		}
		// alert(event);
		if(event == 0){
			document.getElementById("eventStatus").innerHTML="Choose Events";
			valid=false;
		}
		else{
			document.getElementById("eventStatus").innerHTML="";
		}

        return valid;
}

function validate_form_stln(){
        var valid=true;
    	var name = document.getElementById("txtName").value;
		var nim = document.getElementById("txtNim").value;
		var phone = document.getElementById("txtPhone").value;
		var email = document.getElementById("txtEmail").value;
		// var vege = document.getElementById("txtVeges").checked.value;
		var event = 0;
		// alert(vege);
		if(name==''){
			document.getElementById("usernameStatus").innerHTML="Fill name<br>";
			valid=false;
		}
		else{
			document.getElementById("usernameStatus").innerHTML="";
		}

		if(nim == ''){
			document.getElementById("nimStatus").innerHTML="Fill NIM<br>";
			valid=false;
		}
		else{
			document.getElementById("nimStatus").innerHTML="";
		}

		if(phone == ''){
			document.getElementById("phoneStatus").innerHTML="Fill Phone Number<br>";
			valid=false;
		}
		else{
			document.getElementById("phoneStatus").innerHTML="";
		}

		if(email == ''){
			document.getElementById("emailStatus").innerHTML="Fill Email<br>";
			valid=false;
		}
		else{
			document.getElementById("emailStatus").innerHTML="";
		}

		if(document.getElementById("txtVegeYes").checked==false && document.getElementById("txtVegeNo").checked==false){
			document.getElementById("vegeStatus").innerHTML="Choose One";
			valid=false;
		}
		else{
			document.getElementById("vegeStatus").innerHTML=" ";
		}
		
		if(document.getElementById("txtCicilan").checked==false && document.getElementById("txtLangsung").checked==false){
			document.getElementById("tipeStatus").innerHTML="Choose One";
			valid=false;
		}
		else{
			document.getElementById("vegeStatus").innerHTML=" ";
		}

        return valid;
}