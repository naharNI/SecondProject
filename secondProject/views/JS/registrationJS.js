function isRegistrationValid(pForm) {
	const userEmail = pForm.email.value;
	const userPass = pForm.password.value;
	const rpass = pForm.rpass.value;
	const fname = pForm.fname.value;
	const cnum = pForm.cnum.value;
	const rGender = pForm.gender.value;

	let e1 = document.getElementById("rerr1");
	let e2 = document.getElementById("rerr2");
	let e3 = document.getElementById("rerr3");
	let e4 = document.getElementById("rerr4");
	let e5 = document.getElementById("rerr5");
	let e6 = document.getElementById("rerr6");
	let e7 = document.getElementById("rerr7");

	e1.innerHTML = "";
	e2.innerHTML = "";
	e3.innerHTML = "";
	e4.innerHTML = "";
	e5.innerHTML = "";
	e6.innerHTML = "";

	let flag = true;

	if (userEmail === "") {
		e3.innerHTML = "Please provide Email!";
		flag = false;
	}
	if (userPass === "") {
		e5.innerHTML = "Please provide Password!";
		flag = false;
	}
	if (rpass === "") {
		e6.innerHTML = "Please Confirm Password!";
		flag = false;
	}
	if (fname === "") {
		e1.innerHTML = "Please provide Full Name";
		flag = false;
	}
	if (cnum === "") {
		e2.innerHTML = "Please provide contact number";
		flag = false;
	}
	if (rGender === "") {
		e4.innerHTML = "Please provide Gender";
		flag = false;
	}

	if (userPass != rpass) {
		e7.innerHTML = "Password doesn't matched!!! ";
		flag = false;
	}

	return flag;
}