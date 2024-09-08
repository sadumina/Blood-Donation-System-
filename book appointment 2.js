function formDetails(event) {
  event.preventDefault(); // Prevent the default form submission behavior

  var name = document.getElementById("name ").value;
  var phone = document.getElementById("num").value;
  var date = document.getElementById("date").value;
  var terms = document.getElementById("terms").checked;

  if (name === "" || phone === "" || date === "" || !terms) {
      alert("Please fill in all required fields.");
      return false;
  }

  if (!validatePhoneNum(phone)) {
      alert("Enter a valid phone number!!!");
      return false;
  }

  if (confirm("Are you sure you want to book an Appointment?")) {
      // Simulate a successful booking process
      document.getElementById("appointment-form").style.display = "none";
      document.getElementById("success-message").style.display = "block";

      // Redirect to home page after a short delay
      setTimeout(function() {
          window.location.href = "index.html"; // Change 'index.html' to the URL of your home page
      }, 2000); // 2 seconds delay before redirect

      return false;
  } else {
      return false;
  }
}


 function selectTimeSlot(time){

  var timeSlotButtons =document.querySelectorAll("#time-slots button");

  timeSlotButtons.forEach(function(button){
          button.classList.remove("selected");
  });
  var selectedButton = document.querySelector(`#time-slots button[data-time="${time}"]`);
  if(selectedButton){
      selectedButton.classList.add("selected");
      document.getElementById("timeslot").value=time;
  }
 }
  
 function validatePhoneNum(phone){
  var numLength =  phone.length;
var num;
if(numLength ===10 || numLength=== 15){
 return true;
}else{
 return false;
}
// book appointment 2.js
function formDetails(successPage) {
  // Optionally, handle form validation or processing here

  // Redirect to the success page
  window.location.href = "success.html";
  return false; // Prevent the form from submitting normally
}

}

