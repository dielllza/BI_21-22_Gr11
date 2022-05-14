if(sessionStorage.getItem('token') != null){
	location.href = 'profile.html';
}

let login_results = "";
function processLogin(){
	let email = document.getElementById("email").value;
	let password = document.getElementById("password").value;
	try{
		let user_str = localStorage.getItem(email);
		let user = JSON.parse(user_str);
		// throw("Email doesn't exist.");
		if(user.password === password){
			sessionStorage.setItem('token', email);
			location.href = 'profile.html';
		}
		else{
			console.log("Password is incorrect.");
			login_results += " Password is incorrect."
		}
	}
	catch(e){
		console.log("Email doesn't exist.");
		login_results += " Email doesn't exist."
	}
	sessionStorage.setItem("login_message", login_results)
	document.getElementById("login-results").innerHTML = sessionStorage.getItem("login_message");
	login_results = "";
	sessionStorage.removeItem("login_message")
	return false;

}