

function handleSignup() {
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm-password").value;

    
    if (username === "" || email === "" || password === "" || confirmPassword === "") {
        alert("Please fill out all fields.");
        return false; // Prevent form submission
    }

    if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return false; // Prevent form submission
    }

  
    window.location.href = "index.html";
    return false; // Prevent default form submission
}