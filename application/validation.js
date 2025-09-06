// validate.js
function validate_form1(theForm) {
  //^ and $ anchors: the entire string must match the pattern (not just a part)
  //[ ... ] a character class: “any one of these characters”.
  //+ (after the class): one or more allowed characters.
  const nameReEx = /^[A-Za-z\-'\s]+$/; // name contains letters (uppercase, lowercase), dash(-), apostrophe ('), spaces (s)

  // First name
  if (isEmpty(theForm.firstName.value)) {
    alert("Error: You must provide your first name!");
    theForm.firstName.focus();
    return false;
  } else if (!isValid(theForm.firstName.value, nameReEx)) {
    alert("Error: You must provide valid first name!");
    theForm.firstName.focus();
    return false;
  }
  // Last name
  else if (isEmpty(theForm.lastName.value)) {
    alert("Error: You must provide your last name!");
    theForm.lastName.focus();
    return false;
  } else if (!isValid(theForm.lastName.value, nameReEx)) {
    alert("Error: You must provide valid last name!");
    theForm.lastName.focus();
    return false;
  }
  // Date of birth
  else if (
    theForm.day.selectedIndex == 0 ||
    theForm.year.selectedIndex == 0 ||
    theForm.year.selectedIndex == 0
  ) {
    alert("Error: You must provide your date of birth!");
    theForm.day.focus();
    return false;
  } else if (theForm.nationality.selectedIndex == 0) {
    alert("Error: You must provide your Nationality!");
    theForm.nationality.focus();
    return false;
  } else {
    //FORM PASSED
    return true;
  }
}

function validate_form2(theForm) {
  const adderessReEx = /^[A-Za-z0-9\s.,#\-\/()]+$/;
  const phoneReEx = /^[+0-9\s().-]+$/;
  const emailReEx = /^(\w+\.)*\w+@(\w+\.)+[A-Za-z]+$/;
  const cityReEx = /^([a-zA-Z-\s0-9])+$/;

  if (theForm.addressCountry.selectedIndex == 0) {
    alert("Error: You must enter your Country!");
    theForm.addressCountry.focus();
    return false;
  } else if (isEmpty(theForm.address1.value)) {
    alert("Error: You must provide the Address Line 1!");
    theForm.address1.focus();
    return false;
  } else if (!isValid(theForm.address1.value, adderessReEx)) {
    alert("Error: You must provide valid Address Line 1!");
    theForm.address1.focus();
    return false;
  }
  //validate address 2 if it is not empty
  else if (!isValid(theForm.address2.value, adderessReEx) && !isEmpty(theForm.address2.value)) {
    alert("Error: You must provide valid Address Line 2!");
    theForm.address2.focus();
    return false;
  } else if (isEmpty(theForm.city.value)) {
    alert("Error: You must provide the Town/City!");
    theForm.city.focus();
    return false;
  } else if (!isValid(theForm.city.value, cityReEx)) {
    alert("Error: You must provide valid Town/City!");
    theForm.city.focus();
    return false;
  } else if (isEmpty(theForm.postCode.value)) {
    alert("Error: You must provide the Post Code!");
    theForm.postCode.focus();
    return false;
  } else if (!isValid(theForm.postCode.value, adderessReEx)) {
    alert("Error: You must provide valid Post Code!");
    theForm.postCode.focus();
    return false;
  } else if (
    !isEmpty(theForm.phone.value) &&
    !isValid(theForm.phone.value, phoneReEx)
  ) {
    alert("Error: The Phone Number contains illegale character!");
    theForm.phone.focus();
    return false;
  }
  //validate fax if it is not empty
  else if (
    !isEmpty(theForm.fax.value) &&
    !isValid(theForm.fax.value, phoneReEx)
  ) {
    alert("Error: The Fax Number contains illegale character!");
    theForm.fax.focus();
    return false;
  } else if (
    !isEmpty(theForm.email.value) &&
    !isValid(theForm.email.value, emailReEx)
  ) {
    //yahya@fgg.com   yahya.hamoouda@yahoo.com   yahya-hamouda@yahoo.com
    alert("Error: You must provide valid email address!");
    theForm.email.focus();
    return false;
  } else {
    //FORM PASSED
    return true;
  }
}

function validate_form3(theForm) {
  if (theForm.courseType.selectedIndex == 0) {
    alert("Error: You must provide the Type of the Course!");
    theForm.courseType.focus();
    return false;
  } else if (theForm.courseMode.selectedIndex == 0) {
    alert("Error: You must provide the Mode of the Course!");
    theForm.courseMode.focus();
    return false;
  } else if (theForm.program.selectedIndex == 0) {
    alert("Error: You must choose the program!");
    theForm.program.focus();
    return false;
  } else {
    return true;
  }
}

function validate_form4(theForm) {
  const nameReEx = /^([a-zA-Z-\s])+$/;
  const titleReEx = /^([a-zA-Z-\s])+$/;

  if (isEmpty(theForm.uniName.value)) {
    alert("Error: You must provide the institution name!");
    theForm.uniName.focus();
    return false;
  } else if (!isValid(theForm.uniName.value, nameReEx)) {
    alert("Error: You must provide valid institution name!");
    theForm.uniName.focus();
    return false;
  } else if (theForm.country.selectedIndex == 0) {
    alert("Error: You must choose the country!");
    theForm.country.focus();
    return false;
  } else if (theForm.level.selectedIndex == 0) {
    alert("Error: You must choose the Academic Level!");
    theForm.level.focus();
    return false;
  } else if (isEmpty(theForm.title.value)) {
    alert("Error: You must provide the Degree Title!");
    theForm.title.focus();
    return false;
  } else if (!isValid(theForm.title.value, titleReEx)) {
    alert("Error: You must provide valid Degree Title!");
    theForm.title.focus();
    return false;
  } else if (theForm.length.selectedIndex == 0) {
    alert("Error: You must choose the Length of Study!");
    theForm.length.focus();
    return false;
  } else {
    return true;
  }
}

function validate_form5(theForm) {
  if (!isChecked()) {
    alert("You must agree to the declaration before submitting!");
    return false;
  } else {
    return true;
  }
}

// non-empty textbox
function isEmpty(fieldValue) {
  if (fieldValue.trim() === "") {
    return true;
  }
  return false;
}

function isValid(fieldValue, regExp) {
  if (regExp.test(fieldValue.trim())) {
    return true;
  }
  return false;
}

function isChecked() {
  const checkbox = document.getElementById("declaration");

  if (!checkbox.checked) {
    return false;
  }

  return true;
}
