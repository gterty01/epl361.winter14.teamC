function CheckSupplier(){

	var frm = document.forms["addSupplier"];
	
	var name = frm.name.value.length;
	var fr1 = parseInt(name, 10);
	var sigkrisi = parseInt("1",10);

	if (fr1 < sigkrisi){
		alert ('Καταχωρήστε το όνομα του προμηθευτή!');
	  	return false;
	}

	if (frm.name.value == "Όνομα Προμηθευτή"){
		alert ('Καταχωρήστε το όνομα του προμηθευτή!');
	  	return false;
	}

	var tilefwno = frm.til.value.length;
	var fr2 = parseInt(tilefwno, 10);
	if (fr2 < sigkrisi){
		alert ('Καταχωρήστε το τηλέφωνο του προμηθευτή!');
	  	return false;
	}

	if (frm.til.value == "Τηλέφωνο" ){
	  	alert ('Καταχωρήστε το τηλέφωνο του προμηθευτή!');
	  	return false;
	}

	var dieuthinsi = frm.d1.value.length;
	var fr3 = parseInt(dieuthinsi, 10);
	if (fr3 < sigkrisi){
		alert ('Καταχωρήστε την διεύθυνση του προμηθευτή!');
	  	return false;
	}

	if (frm.d1.value == "Διεύθυνση 1" ){
	  	alert ('Καταχωρήστε την διεύθυνση του προμηθευτή!');
	  	return false;
	}

	var poli = frm.city.value.length;
	var fr4 = parseInt(poli, 10);
	if (fr4 < sigkrisi){
		alert ('Καταχωρήστε τη πόλη που βρίσκεται ο προμηθευτής!');
	  	return false;
	}

	if (frm.city.value == "Πόλη" ){
	  	alert ('Καταχωρήστε τη πόλη που βρίσκεται ο προμηθευτής!');
	  	return false;
	}

	var tk = frm.tk.value.length;
	var fr5 = parseInt(tk, 10);
	if (fr5 < sigkrisi){
		alert ('Καταχωρήστε τον ταχυδρομικό κώδικα!');
	  	return false;
	}

	if (frm.tk.value == "Ταχυδρομικός Κώδικας" ){
	  	alert ('Καταχωρήστε τον ταχυδρομικό κώδικα!');
	  	return false;
	}

	var email = frm.email.value.length;
	var fr6 = parseInt(email , 10);
	if (fr6 < sigkrisi){
		alert ('Καταχωρήστε το email του προμηθευτή!');
	  	return false;
	}
	
	if (frm.email.value == "Email" ){
	  	alert ('Καταχωρήστε το email του προμηθευτή!');
	  	return false;
	}
	
}


