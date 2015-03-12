function CheckProduct(){

	var frm = document.forms["addProduct"];
	
	if (frm.name.value== "Όνομα Προϊόντος"){
		alert ('Καταχωρήστε το όνομα του προϊόντος!');
	  	return false;
	}
	
	if (frm.price.value == "Τιμή" ){
	  	alert ('Καταχωρήστε την τιμή του προϊόντος!');
	  	return false;
	}

	if (frm.quantity.value == "Ποσότητα" ){
	  	alert ('Καταχωρήστε την ποσότητα του προϊόντος!');
	  	return false;
	}

	if (frm.weight.value == "Βάρος σε Kg" ){
	  	alert ('Καταχωρήστε το βάρος του προϊόντος!');
	  	return false;
	}
	
	if (frm.category.value == "" ){
	  	alert ('Καταχωρήστε την κατηγορία του προϊόντος!');
	  	return false;
	}
	
	if (frm.supplier.value == "" ){
	  	alert ('Καταχωρήστε τον προμηθευτή του προϊόντος!');
	  	return false;
	}
	

	if (frm.description.value == "Περιγραφή Προϊόντος:" ){
	  	alert ('Καταχωρήστε την περιγραφή του προϊόντος!');
	  	return false;
	}

}

