'user strict';

function show() {
	const profile = document.querySelector('.profile-container');
	profile.style.display = 'block';
}

function regValidation() {
	const name = document.getElementById('name');
	const username = document.getElementById('username');
	const email = document.getElementById('email');
	const password = document.getElementById('password');
	const conPass = document.getElementById('repass');
	const lname = document.getElementById('lname');
	const luser = document.getElementById('luser');
	const lemail = document.getElementById('lemail');
	const lpassword = document.getElementById('lpassword');
	const category = document.getElementsByName('category');
	const lradio = document.getElementById('lradio');
	const check = document.getElementById('checkbox');
	const lcheck = document.getElementById('lcheck');

	if (name.value.trim() == '' || name.value.trim() == null) {
		name.style.border = '1px solid red';
		lname.innerHTML = '*name can;t be empty';
		return false;
	} else if (name.value.length < 3) {
		name.style.border = '1px solid red';
		lname.innerHTML = '*name is too short';
		return false;
	} else if (name.value.length > 128) {
		name.style.border = '1px solid red';
		lname.innerHTML = '*name is too long';
		return false;
	} else if (username.value.trim() == '' || username.value.trim() == null) {
		username.style.border = '1px solid red';
		luser.innerHTML = "username can't be empty";
		return false;
	} else if (username.value.length < 3) {
		name.style.border = '1px solid red';
		luser.innerHTML = '*username is too short';
		return false;
	} else if (username.value.length > 128) {
		name.style.border = '1px solid red';
		luser.innerHTML = '*username is too long';
		return false;
	} else if (email.value.trim() == '' || email.value.trim() == null) {
		email.style.border = '1px solid red';
		lemail.innerHTML = "*email can't be empty";
		return false;
	} else if (password.value.trim() == '' || password.value.trim() == null) {
		password.style.border = '1px solid red';
		lpassword.innerHTML = "*password can't be empty";
		return false;
	} else if (password.value.length < 7) {
		password.style.border = '1px solid red';
		lpassword.innerHTML = '*password contain at least 6 character';
		return false;
	} else if (password.value != conPass.value) {
		conPass.style.border = '1px solid red';
		lpassword.innerHTML = "*password and confirm password does't match";
		return false;
	} else if (check.checked == false) {
		lcheck.innerHTML = '*Please check tearms and condition';
		return false;
	} else {
		let valid = false;
		let radio = '';
		for (let i = 0; i < category.length; i++) {
			if (category[i].checked) {
				radio = category[i].value;
				valid = true;
				break;
			}
		}
		if (valid == true) {
			let flagName = false;
			let flagUsername = false;

			for (let i = 0; i < name.value.length; i++) {
				if (
					(name.value[i] >= 'A' && name.value[i] <= 'Z') ||
					(name.value[i] >= 'a' && name.value[i] <= 'z') ||
					name.value[i] === ' '
				) {
					flagName = true;
				} else {
					lname.innerHTML = 'name conatin alphabets and white space';
					flagName = false;
					break;
				}
			}

			for (let i = 0; i < username.value.length; i++) {
				if (
					(username.value[i] >= 'A' && username.value[i] <= 'Z') ||
					(username.value[i] >= 'a' && username.value[i] <= 'z') ||
					username.value[i] === ' '
				) {
					flagUsername = true;
				} else {
					luser.innerHTML = 'username conatin alphabets and white space';
					flagUsername = false;
					break;
				}
			}

			let special = false;
			let upper = false;
			let lowerCase = false;
			let number = false;

			for (let i = 0; i < password.value.length; i++) {
				if (
					password.value[i] === '$' ||
					password.value[i] === '@' ||
					password.value[i] === '%' ||
					password.value[i] === '#'
				) {
					special = true;
				} else if (password.value[i] >= 'A' && password.value[i] <= 'Z') {
					upper = true;
				} else if (password.value[i] >= 'a' && password.value[i] <= 'z') {
					lowerCase = true;
				} else if (password.value[i] >= 0 && password.value[i] <= 9) {
					number = true;
				}
			}

			if (special == false) {
				password.style.border = '1px solid red';
				lpassword.innerHTML = '*password contain at least one special character($, #, $, %)';
			} else if (upper == false) {
				password.style.border = '1px solid red';
				lpassword.innerHTML = '*password contain at least one upper case';
			} else if (lowerCase == false) {
				password.style.border = '1px solid red';
				lpassword.innerHTML = '*password contain at least one lower case';
			} else if (number == false) {
				password.style.border = '1px solid red';
				lpassword.innerHTML = '*password contain at least one number';
			}

			let flagPass = special == true && upper == true && lowerCase == true && number == true;

			if (flagName == true && flagUsername == true && flagPass) {

				//ajax impement start for reg
				const xhttp = new XMLHttpRequest();
				xhttp.open('POST', '../controller/regCheck.php', true);
				xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send(
					'name=' + name.value + '&&username=' + username.value + '&&email=' + email.value +
					'&&password=' + password.value + '&&category=' + radio
				);

				xhttp.onreadystatechange = function () {
					if (this.readyState == 4 && this.status == 200) {
						const regMsg = document.getElementById('regMsg');
						regMsg.innerHTML = this.responseText;
						regMsg.style.display = 'block';
					}
				};
				return false;
			} else {
				return false;
			}
		} else {
			lradio.innerHTML = '*Please select one of them';
			return false;
		}
	}
}

function productValidation() {
	const productName = document.getElementById('name');
	const lproduct = document.getElementById('lproduct');

	if (productName.value.trim() == '' || productName.value.trim() == null) {
		lproduct.innerHTML = "*category name can't be empty";
		productName.style.border = '1px solid red';
		return false;
	} else if (productName.value.length < 3) {
		lproduct.innerHTML = '*category name is too short';
		productName.style.border = '1px solid red';
		return false;
	} else {
		let flagName = false;
		for (let i = 0; i < productName.value.length; i++) {
			if (
				(productName.value[i] >= 'A' && productName.value[i] <= 'Z') ||
				(productName.value[i] >= 'a' && productName.value[i] <= 'z') ||
				productName.value[i] == ' '
			) {
				flagName = true;
			} else {
				lproduct.innerHTML = 'name conatin alphabets and white space';
				productName.style.border = '1px solid red';
				flagName = false;
				break;
			}
		}

		if (flagName == true) {
			const xhttp = new XMLHttpRequest();
			xhttp.open('POST', '../controller/addProductCategory.php', true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp.send('name=' + productName.value);

			xhttp.onreadystatechange = function () {
				if (this.readyState == 4 && this.status == 200) {
					const regMsg = document.getElementById('msg');
					regMsg.innerHTML = this.responseText;
					regMsg.style.display = 'block';
				}
			}

			return false;
		}

		return false;
	}
}

function editCategoryValidation() {
	const name = document.getElementById('name');
	const lproduct = document.getElementById('lproduct');

	if (name.value == '' || name.value == null) {
		lproduct.innerHTML = "*category name can't be empty";
		return false;
	} else if (name.value.length < 3) {
		lproduct.innerHTML = '*category name is too short';
		lproduct.style.display = 'block';
		return false;
	} else {
		let flagName = false;
		for (let i = 0; i < name.value.length; i++) {
			if (
				(name.value[i] >= 'A' && name.value[i] <= 'Z') ||
				(name.value[i] >= 'a' && name.value[i] <= 'z') ||
				name.value[i] == ' '
			) {
				flagName = true;
			} else {
				lproduct.innerHTML = 'category name conatin alphabets and white space';
				name.style.border = '1px solid red';
				flagName = false;
				break;
			}
		}

		if (flagName == true) {
			return true;
		} else {
			return false;
		}
	}
}

function deleteCategory() {
	let check = confirm('Are you sure? You want to delete this?', '');
	if (check) {
		window.open('../controller/deleteCategory.php', '_self');
	} else {
		window.open('productCategoryList.php', '_self');
	}
}

//----------------------------toolValidation start ------------------------------------

function toolValidation() {
	const name = document.getElementById('name');
	const price = document.getElementById('price');
	const desc = document.getElementById('desc');
	const itoolName = document.getElementById('itoolName');
	const lprice = document.getElementById('lprice');
	const ldesc = document.getElementById('ldesc');

	if (name.value.trim() == '' || name.value.trim() == null) {
		itoolName.innerHTML = "*name can't be empty";
		name.style.border = '1px solid red';
		return false;
	} else if (price.value.trim() == '' || price.value.trim() == null) {
		lprice.innerHTML = "*price can't be empty";
		price.style.border = '1px solid red';
		return false;
	} else if (desc.value.trim() == '' || desc.value.trim() == null) {
		ldesc.innerHTML = "*Description can't be empty";
		desc.style.border = '1px solid red';
		return false;
	} else {
		let flagName = false;
		let flagPrice = false;

		for (let i = 0; i < name.value.length; i++) {
			if (
				(name.value[i] >= 'A' && name.value[i] <= 'Z') ||
				(name.value[i] >= 'a' && name.value[i] <= 'z') ||
				name.value[i] == ' '
			) {
				flagName = true;
			} else {
				itoolName.innerHTML = 'name conatin alphabets and white space';
				name.style.border = '1px solid red';
				flagName = false;
				break;
			}
		}

		for (let i = 0; i < price.value.length; i++) {
			if (price.value[i] >= 0 && price.value[i] <= 9) {
				flagPrice = true;
			} else {
				lprice.innerHTML = '*Plsease enter number';
				price.style.border = '1px solid red';
				break;
			}
		}

		if (flagName == true && flagPrice == true) {
			return true;
		} else {
			return false;
		}
	}
}

//----------------------------toolValidation end ------------------------------------

////////////////////////////////// add user validation////////////////////

function userValidation() {
	const name = document.getElementById('name');
	const username = document.getElementById('username');
	const email = document.getElementById('email');
	const password = document.getElementById('password');
	const lname = document.getElementById('lname');
	const luser = document.getElementById('luser');
	const lemail = document.getElementById('lemail');
	const lpassword = document.getElementById('lpassword');
	const category = document.getElementsByName('category');
	const lradio = document.getElementById('lradio');

	if (name.value.trim() == '' || name.value.trim() == null) {
		name.style.border = '1px solid red';
		lname.innerHTML = '*name can;t be empty';
		return false;
	} else if (name.value.length < 3) {
		name.style.border = '1px solid red';
		lname.innerHTML = '*name is too short';
		return false;
	} else if (name.value.length > 128) {
		name.style.border = '1px solid red';
		lname.innerHTML = '*name is too long';
		return false;
	} else if (username.value.trim() == '' || username.value.trim() == null) {
		username.style.border = '1px solid red';
		luser.innerHTML = "username can't be empty";
		return false;
	} else if (username.value.length < 3) {
		name.style.border = '1px solid red';
		luser.innerHTML = '*username is too short';
		return false;
	} else if (username.value.length > 128) {
		name.style.border = '1px solid red';
		luser.innerHTML = '*username is too long';
		return false;
	} else if (email.value.trim() == '' || email.value.trim() == null) {
		email.style.border = '1px solid red';
		lemail.innerHTML = "*email can't be empty";
		return false;
	} else if (password.value.trim() == '' || password.value.trim() == null) {
		password.style.border = '1px solid red';
		lpassword.innerHTML = "*password can't be empty";
		return false;
	} else if (password.value.length < 6) {
		password.style.border = '1px solid red';
		lpassword.innerHTML = '*password contain at least 6 character';
		return false;
	} else {
		let valid = false;
		let radio = '';
		for (let i = 0; i < category.length; i++) {
			if (category[i].checked) {
				radio = category[i].value;
				valid = true;
				break;
			}
		}
		if (valid == true) {
			let flagName = false;
			let flagUsername = false;

			for (let i = 0; i < name.value.length; i++) {
				if (
					(name.value[i] >= 'A' && name.value[i] <= 'Z') ||
					(name.value[i] >= 'a' && name.value[i] <= 'z') ||
					name.value[i] == ' '
				) {
					flagName = true;
				} else {
					lname.innerHTML = 'name conatin alphabets and white space';
					flagName = false;
					break;
				}
			}

			for (let i = 0; i < username.value.length; i++) {
				if (
					(username.value[i] >= 'A' && username.value[i] <= 'Z') ||
					(username.value[i] >= 'a' && username.value[i] <= 'z') ||
					username.value[i] === ' '
				) {
					flagUsername = true;
				} else {
					luser.innerHTML = 'username conatin alphabets and white space';
					flagUsername = false;
					break;
				}
			}

			let special = false;
			let upper = false;
			let lowerCase = false;
			let number = false;

			for (let i = 0; i < password.value.length; i++) {
				if (
					password.value[i] === '$' ||
					password.value[i] === '@' ||
					password.value[i] === '%' ||
					password.value[i] === '#'
				) {
					special = true;
				} else if (password.value[i] >= 'A' && password.value[i] <= 'Z') {
					upper = true;
				} else if (password.value[i] >= 'a' && password.value[i] <= 'z') {
					lowerCase = true;
				} else if (password.value[i] >= 0 && password.value[i] <= 9) {
					number = true;
				}
			}

			if (special == false) {
				password.style.border = '1px solid red';
				lpassword.innerHTML =
					'*password contain at least one special character($, #, $, %)';
			} else if (upper == false) {
				password.style.border = '1px solid red';
				lpassword.innerHTML = '*password contain at least one upper case';
			} else if (lowerCase == false) {
				password.style.border = '1px solid red';
				lpassword.innerHTML = '*password contain at least one lower case';
			} else if (number == false) {
				password.style.border = '1px solid red';
				lpassword.innerHTML = '*password contain at least one number';
			}

			let flagPass = special == true && upper == true && lowerCase == true && number == true;

			if (flagName == true && flagUsername == true && flagPass) {
				const xhttp = new XMLHttpRequest();
				xhttp.open('POST', '../controller/addUser.php', true);
				xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send(
					'name=' + name.value + '&&username=' + username.value + '&&email=' + email.value +
					'&&password=' + password.value + '&&category=' + radio
				);

				xhttp.onreadystatechange = function () {
					if (this.readyState == 4 && this.status == 200) {
						const regMsg = document.getElementById('msg');
						regMsg.innerHTML = this.responseText;
						regMsg.style.display = 'block';
					}
				};

				return false;

			} else {
				return false;
			}
		} else {
			lradio.innerHTML = '*Please select one of them';
			return false;
		}
	}
}

function toolsSearch() {
	const name = document.getElementById('src-input').value;

	if (name.trim() === '' || name.trim() == null) {
		document.getElementById('search-result').style.display = 'none';
	} else {
		xhttp = new XMLHttpRequest();
		xhttp.open('POST', '../controller/toolsSearch.php', true);
		xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xhttp.send('name=' + name);

		xhttp.onreadystatechange = function () {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById('search-result').innerHTML = this.responseText;
				document.getElementById('search-result').style.display = 'block';
			}
		};
	}
}

function searchUser() {
	const name = document.getElementById('src-input').value;

	if (name.trim() === '' || name.trim() == null) {
		document.getElementById('search-result').style.display = 'none';
	} else {
		xhttp = new XMLHttpRequest();
		xhttp.open('POST', '../controller/userSearch.php', true);
		xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xhttp.send('name=' + name);

		xhttp.onreadystatechange = function () {
			if (this.readyState == 4 && this.status == 200) {
				const search = document.getElementById('search-result');
				search.innerHTML = this.responseText;
				search.style.display = 'block';
			}
		}
	}
}

function productSearch() {

	const name = document.getElementById('src-input').value;

	if (name.trim() === '' || name.trim() == null) {
		document.getElementById('search-result').style.display = 'none';
	}

	else {
		xhttp = new XMLHttpRequest();
		xhttp.open('POST', '../controller/productSearch.php', true);
		xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xhttp.send('name=' + name);

		xhttp.onreadystatechange = function () {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById('search-result').innerHTML = this.responseText;
				document.getElementById('search-result').style.display = 'block';
			}
		}
	}
}

function profileValidation() {
	const name = document.getElementById('name1');
	const username = document.getElementById('username1');
	const email = document.getElementById('email1');
	const lname = document.getElementById('lname');
	const luser = document.getElementById('luser');
	const lemail = document.getElementById('lemail');

	if (name.value.trim() == '' || name.value.trim() == null) {
		name.style.border = '1px solid red';
		lname.innerHTML = '*name can;t be empty';
		return false;
	} else if (name.value.length < 3) {
		name.style.border = '1px solid red';
		lname.innerHTML = '*name is too short';
		return false;
	} else if (name.value.length > 128) {
		name.style.border = '1px solid red';
		lname.innerHTML = '*name is too long';
		return false;
	} else if (username.value.trim() == '' || username.value.trim() == null) {
		username.style.border = '1px solid red';
		luser.innerHTML = "username can't be empty";
		return false;
	} else if (username.value.length < 3) {
		name.style.border = '1px solid red';
		luser.innerHTML = '*username is too short';
		return false;
	} else if (username.value.length > 128) {
		name.style.border = '1px solid red';
		luser.innerHTML = '*username is too long';
		return false;
	} else if (email.value.trim() == '' || email.value.trim() == null) {
		email.style.border = '1px solid red';
		lemail.innerHTML = "*email can't be empty";
		return false;
	} else {
		let flagName = false;
		let flagUsername = false;

		for (let i = 0; i < name.value.length; i++) {
			if (
				(name.value[i] >= 'A' && name.value[i] <= 'Z') ||
				(name.value[i] >= 'a' && name.value[i] <= 'z') ||
				name.value[i] == ' '
			) {
				flagName = true;
			} else {
				lname.innerHTML = 'name conatin alphabets and white space';
				name.style.border = '1px solid red';
				flagName = false;
				break;
			}
		}

		for (let i = 0; i < username.value.length; i++) {
			if (
				(username.value[i] >= 'A' && username.value[i] <= 'Z') ||
				(username.value[i] >= 'a' && username.value[i] <= 'z') ||
				username.value[i] === ' '
			) {
				flagUsername = true;
			} else {
				luser.innerHTML = 'username conatin alphabets and white space';
				username.style.border = '1px solid red';
				flagUsername = false;
				break;
			}
		}

		if (flagName == true && flagUsername == true) {
			return true;
		} else {
			return false;
		}
	}
}
