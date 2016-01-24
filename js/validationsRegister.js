
function DoCustomValidation()
{

		//alert ('Espasan ta nevra mou, ok?');
		
  var frm = document.forms["register"];
  var fr = frm.passwd.value.length;
	var fr2=parseInt( fr, 10);
	var sigkrisi = parseInt("6",10);
	
	
	if (fr2<sigkrisi){
		alert('Καταχωρήστε τον κωδικό σας, με τουλάχιστον 6 χαρακτήρες');
		return false;
	}
	var nameL = frm.name.value.length;
	var fr3 = parseInt(nameL,10);
	var sigkrisiString = parseInt("50",10);
	
	if (fr3>sigkrisiString){
		alert('Καταχωρήστε το όνομά σας, το πολύ 50 χαρακτήρες');
		return false;
	}
	
		var surnameL = frm.surname.value.length;
		var fr4 = parseInt(surnameL, 10);

	if (fr4>sigkrisiString){
		alert('Καταχωρήστε το Επώνυμό σας, το πολύ 50 χαρακτήρες');
		return false;
	}


  /*re='[0-9][0-9][0-9][0-9]-[0-9][0-9]-[0-9][0-9]';
  if (!(re.test(frm.birth.value))){
  			
  			alert ('Καταχωρήστε την Ημερομηνία Γέννησης σας στη μορφή YYYY-MM-DD');
  			return false;
  			}*/			
  if(frm.passwd.value != frm.passwdCon.value)
  {
    alert('Ο κωδικός που δώσατε δεν είναι ίδιος με την Επιβεβαίωσή του. Δώστε ίδιο κωδικό και στα δύο πεδία.');
    return false;
  }
  
 
  if (frm.name.value== "Όνομα"){
  	alert ('Καταχωρήστε το όνομά σας, το πολύ 50 χαρακτήρες.');
  	return false;
  	}
  	if (frm.surname.value == "Επώνυμο" ){
  			alert ('Καταχωρήστε το επώνυμό σας, το πολύ 50 χαρακτήρες.');
  			return false;
  		}
  		    
  	if (frm.passwd.value=="Κωδικός"){
  		alert ('Καταχωρήστε τον κωδικό σας, με τουλάχιστον 6 χαρακτήρες');
  		return false;
  	}
	re=/^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/;
  	if (!(re.test(frm.birth.value))){	
  		alert ('Καταχωρήστε την Ημερομηνία Γέννησης σας στη μορφή YYYY-MM-DD');
  		return false;
  	}	
  	
  	if (frm.address1.value=="Διεύθυνση 1"){
		alert ('Καταχωρήστε την κύρια διεύθυνσή σας, που θα χρησιμοποιείται για την αποστολή προϊόντων');
		return false;
	}
	if (frm.city.value=="Πόλη"){
		alert ('Καταχωρήστε την Πόλη που διαμένετε');
		return false;
	}
	
	
	var xwra = frm.country.value
			alert (xwra);

	if (frm.country.value==""){
		alert ('Διαλέξτε τη χώρα διαμονής σας');
		return false;
	}


  	
  }	
  	
  	/*
  	if (frm.passwd.value.length<6||frm.passwd.value==""){
  		alert ('Καταχωρήστε τον κωδικό σας, με τουλάχιστον 6 χαρακτήρες');
  		return false;
  	}
  	re='[0-9][0-9][0-9][0-9]-[0-9][0-9]-[0-9][0-9]';
  	if (!(re.test(frm.birth.value))){	
  		alert ('Καταχωρήστε την Ημερομηνία Γέννησης σας στη μορφή YYYY-MM-DD');
  		return false;
  	}		
  	else{					
 		return true; 	
 		}		*/
  
  
  
  
  
  
  
