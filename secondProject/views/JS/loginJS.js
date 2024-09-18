function isLoginValid(pForm) {
	const userEmail = pForm.email.value;
	const userPass = pForm.password.value;

	let e1 = document.getElementById("err1");
	let e2 = document.getElementById("err2");

	e1.innerHTML = "";
	e2.innerHTML = "";

	let flag = true;

	if (userEmail === "") {
		e1.innerHTML = "Please provide Email!";
		flag = false;
	}
	if (userPass === "") {
		e2.innerHTML = "Please provide Password!";
		flag = false;
	}
	return flag;
}