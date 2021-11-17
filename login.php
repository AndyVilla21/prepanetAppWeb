<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet"> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Prepanet Login Admin</title>
</head>

<style>
@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap');
body{
	font-family: 'Raleway', sans-serif;
}
input[type=text], select{
	display: inline-block;
    width: 100%;
    box-sizing: border-box;
	border-style:solid ;
	border-width:thin;
	border-color:#CCC;
    font-size: 1em;
    padding: 8px 10px 8px 10px;
    color: ;
	border-radius: .3em;
}
input:focus{
	border-style:solid ;
	border-width:medium;
	border-color:#55595d;
	outline:0px;
}
input[type=button] {
	background-color: "white";
	color: "black";
	padding:  12px; 
	border: none;
	width: 30%;  
	font-size:1.4em;
	border-radius: .3em;
}
input[type=button]:hover {
	background-color: #55595d;
	color: #ffffff;
	transition: all .50s ease 0s;
}
</style>

<body>
    
    <form>
    	<table border="0" cellpadding="10" cellspacing="0" width="100%">
        
        	<tr bgcolor="black">
            	<td align="center">
                	<h1> <font color="white"> Login Administradores Prepanet </font></h1>
                </td>
            </tr>
            <tr>
                <td align="center">
                	<br />
                    <br />
                    <table border="0" cellpadding="15" cellspacing="0" bgcolor="black" width="43%">
                    
                    	<tr>
                        	<td align="center">
                            	<h2><font color="white">Ingrese a su cuenta</font></h2>
                            </td>
                        </tr>
                    
                    	<tr>
                        	<td align="center">
                            	<input type="text" placeholder="Usuario" />
                            </td>
                        </tr>
                        <tr>
                        	<td align="center">
                            	<input type="text" placeholder="Contraseña" />
                            </td>
                        </tr>
                        <tr>
							<td align="center">
                            	<input type="button" value="Login" />
                            </td>
    					</tr>
                        <tr>
                        	<td>
                            	<br />

                            </td>
                        </tr>              
                    </table>
                </td>
            
            </tr>
    	
    
    	</table>
    </form>
    
    <script type="module">
	  // Import the functions you need from the SDKs you need
	  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.4.1/firebase-app.js";
	  // TODO: Add SDKs for Firebase products that you want to use
	  // https://firebase.google.com/docs/web/setup#available-libraries
	  // Your web app's Firebase configuration
	  const firebaseConfig = {
		apiKey: "AIzaSyA3W4y_H7SvtoR05x87awW2_ozW9NpLmQA",
		authDomain: "prepanet-4015e.firebaseapp.com",
		projectId: "prepanet-4015e",
		storageBucket: "prepanet-4015e.appspot.com",
		messagingSenderId: "754150451770",
		appId: "1:754150451770:web:bef0f7afbc65fa40832303"
	  };
	  // Initialize Firebase
	  const app = initializeApp(firebaseConfig);

	</script>

</body>
</html>