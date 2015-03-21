function checkEditProduct(){

	var frm = document.forms["editProduct"];
	
	var name = frm.name.value.length;
	var fr1 = parseInt(name, 10);
	var sigkrisi = parseInt("1",10);

	if (fr1 < sigkrisi){
		alert ('Καταχωρήστε το όνομα του προϊόντος!');
	  	return false;
	}

	var price = frm.price.value.length;
	var fr2 = parseInt(price, 10);
	if (fr2 < sigkrisi){
		alert ('Καταχωρήστε τιμή του προϊόντος!');
	  	return false;
	}
	
	if (isNaN(frm.price.value)){
    	alert("Η τιμή πρέπει να είναι αριθμός!");
    	return false;
  	}

	var quantity = frm.quantity.value.length;
	var fr3 = parseInt(quantity, 10);
	if (fr3 < sigkrisi){
		alert ('Καταχωρήστε ποσότητα του προϊόντος!');
	  	return false;
	}

	if (isNaN(frm.quantity.value)){
    	alert("Η ποσότητα πρέπει να είναι αριθμός!");
    	return false;
  	}

	var weight= frm.weight.value.length;
	var fr4 = parseInt(weight, 10);
	if (fr4 < sigkrisi){
	  	alert ('Καταχωρήστε το βάρος του προϊόντος!');
	  	return false;
	}
  	
  	if (isNaN(frm.weight.value)){
    	alert("Το βάρος πρέπει να είναι αριθμός!");
    	return false;
  	}

	var description = frm.description.value.length;
	var fr5 = parseInt(description, 10);
	if (fr5 < sigkrisi){
	  	alert ('Καταχωρήστε την περιγραφή του προϊόντος!');
	  	return false;
	}


}
