// login.js

function handleLogin() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // Simple client-side validation (replace with actual logic)
    if (username === "user" && password === "password") {
     
        window.location.href = "index.html";
        return false; // Prevent default form submission
    } else {
        alert("Invalid username or password.");
        return false; // Prevent default form submission
    }
}