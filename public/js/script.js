function validate(event) {
    var email = document.getElementById("email").value;
    var usernameElement = document.getElementById("login");
    var username = usernameElement.value;
    var emailReg = /\w+@\w+\.\w+/;
    var allowSubmit = true;
    if (!emailReg.test(email)) {
        handleException("email", "Email address should be non-empty with the format xyz@xyz.xzy.");
        allowSubmit = false;
    }
    if (!username || username.length > 30) {
        handleException("login", "User name should be non-empty, and within 30 characters long.");
        allowSubmit = false;
    } else {
        usernameElement.value = username.toLowerCase();

    }
    var pass = document.getElementById("pass").value;
    if (pass.length < 8) {
        handleException("pass", "Password should be at least 8 characters.");
        allowSubmit = false;
    }
    var pass2 = document.getElementById("pass2").value;
    if (pass != pass2) {
        handleException("pass2", "Please retype password.");
        allowSubmit = false;
    }

    var terms = document.getElementById("terms");
    if (!terms.checked) {
        handleExceptionSpan("terms", "Please accept the forms and conditions.");
        allowSubmit = false;
    }
    if (!allowSubmit) {
        event.preventDefault();
    }
    return allowSubmit;
}

function validateEmail(element) {
    var emailReg = /\w+@\w+\.\w+/;
    if (emailReg.test(element.value)) {
        removeErrorDiv(element);
    }
}

function validateUsername(element) {
    var username = element.value;
    if (username && username.length <= 30) {
        removeErrorDiv(element);
    }
}

function validatePass(element) {
    var pass = element.value;
    if (pass.length >= 8) {
        removeErrorDiv(element);
    }
}

function validatePass2(element) {
    var pass2 = element.value;
    var pass = document.getElementById("pass").value;
    if (pass2 == pass) {
        removeErrorDiv(element);
    }
}

function validateTerms(element) {
    if (element.checked && element.parentElement.children.length == 3) {
        element.parentElement.lastElementChild.remove();
    }
}

function removeErrorDiv(element) {
    if (element.classList.contains("redDiv")) {
        element.classList.remove("redDiv");
    }
    if (element.nextElementSibling) {
        element.nextElementSibling.remove();
    }
}

function handleException(id, message) {
    var main = document.getElementById(id);
    if (main.parentElement.lastElementChild.classList.contains("errorMsg")) {
        return;
    }
    var errorMsgDiv = document.createElement("div");
    errorMsgDiv.setAttribute("class", "errorMsg");
    var content = document.createTextNode("X " + message);
    errorMsgDiv.appendChild(content);

    main.after(errorMsgDiv);
    var classAttr = main.getAttribute("class");
    main.setAttribute("class", classAttr + " redDiv");
}

function handleExceptionSpan(id, message) {
    var main = document.getElementById(id);
    if (main.parentElement.lastElementChild.classList.contains("errorMsg")) {
        return;
    }
    var errorMsgDiv = document.createElement("span");
    errorMsgDiv.setAttribute("class", "errorMsg");
    var content = document.createTextNode("X " + message);
    errorMsgDiv.appendChild(content);
    main.nextElementSibling.after(errorMsgDiv);
}

function alertNewsLetter() {
    var newsletter = document.getElementById("newsletter");
    if (newsletter.checked) {
        alert("You will receive news letters.");
    }
}
