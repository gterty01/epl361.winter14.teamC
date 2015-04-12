function CheckSupplier(){

	var frm = document.forms["addSupplier"];
	
	if (frm.name.value == "Όνομα Προμηθευτή"){
		alert ('Καταχωρήστε το όνομα του προμηθευτή!');
	  	return false;
	}

	if (frm.til.value == "Τηλέφωνο" ){
	  	alert ('Καταχωρήστε το τηλέφωνο του προμηθευτή!');
	  	return false;
	}
	 
	if (frm.d1.value == "Διεύθυνση 1" ){
	  	alert ('Καταχωρήστε την διεύθυνση του προμηθευτή!');
	  	return false;
	}

	if (frm.city.value == "Πόλη" ){
	  	alert ('Καταχωρήστε τη πόλη που βρίσκεται ο προμηθευτής!');
	  	return false;
	}

	if (frm.tk.value == "Ταχυδρομικός Κώδικας" ){
	  	alert ('Καταχωρήστε τον ταχυδρομικό κώδικα!');
	  	return false;
	}
	
	if (frm.email.value == "Email" ){
	  	alert ('Καταχωρήστε το email του προμηθευτή!');
	  	return false;
	}
	
}


