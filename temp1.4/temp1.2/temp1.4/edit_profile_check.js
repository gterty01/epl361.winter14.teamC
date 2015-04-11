
function CheckProfile()
{					
	var frm = document.forms["EditProfile"];
	var sigkrisi = parseInt("1",10);
	var nameL = frm.name.value.length;
	var fr3 = parseInt(nameL,10);
	var sigkrisiString = parseInt("50",10);
	var surnameL = frm.surname.value.length;
	var fr4 = parseInt(surnameL, 10);
	var address = frm.address1.value.length;
	var fr5 = parseInt(address, 10);
	var city = frm.city.value.length;
	var fr6 = parseInt(city, 10);
	var tk = frm.postalCode.value.length;	
	var fr7 = parseInt(tk, 10);
	var country = frm.country.value.length;
	var fr8 = parseInt(country, 10);
	
	if (fr3 > sigkrisiString){
		alert('Καταχωρήστε το όνομά σας, το πολύ 50 χαρακτήρες');
		return false;
	}
	if (fr3 < sigkrisi){
  		alert ('Καταχωρήστε το όνομα σας, το πολύ 50 χαρακτήρες.');
  		return false;
  	}

	if (fr4 > sigkrisiString){
		alert('Καταχωρήστε το Επώνυμό σας, το πολύ 50 χαρακτήρες');
		return false;
	}
		  
  	if (fr4 < sigkrisi){
  		alert ('Καταχωρήστε το Επώνυμό σας, το πολύ 50 χαρακτήρες.');
  		return false;
  	}
  	
  	re=/^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/;
  	if (!(re.test(frm.birth.value))){	
  		alert ('Καταχωρήστε την Ημερομηνία Γέννησης σας στη μορφή YYYY-MM-DD');
  		return false;
  	}	

	
  	if (fr5 < sigkrisi){
		alert ('Καταχωρήστε την κύρια διεύθυνσή σας, που θα χρησιμοποιείται για την αποστολή προϊόντων');
		return false;
	}
	
	if (fr6 < sigkrisi){
		alert ('Καταχωρήστε την Πόλη που διαμένετε');
		return false;
	}
	
	if (fr7 < sigkrisi){
		alert ('Καταχωρήστε τον Ταχυδρομικό Κώδικά σας');
		return false;
	}

	if (fr8 < sigkrisi){
		alert ('Διαλέξτε τη χώρα διαμονής σας');
		return false;
	}
  	
  }	