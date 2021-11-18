

function login(){
	
	var correoUsuario = document.getElementById("correo").value;
	var passUsuario = document.getElementById("pass").value;
	
	
	
	firebase.auth().signInWithEmailAndPassword(correoUsuario, passUsuario)
	  .then((userCredential) => {
		// Signed in
		var user = userCredential.user;
		// ...
	  })
	  .catch((error) => {
		var errorCode = error.code;
		var errorMessage = error.message;
  });
	
}