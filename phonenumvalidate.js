'use strict';
//<script>
       function validatePhoneNumber() {
            var phoneNumber = document.getElementById("pnum").value;
    //        var cleanedPhoneNumber = phoneNumber.replace(/\D/g, '');

            if (cleanedPhoneNumber.length !== 10) {
                alert("Please enter a 10-digit phone number.");
                return false;
            }

            if (cleanedPhoneNumber.charAt(0) === '0' || cleanedPhoneNumber.charAt(0) === '1') {
                alert("Please enter a valid phone number.");
                return false;
            }

            if (!/^\d+$/.test(cleanedPhoneNumber)) {
                alert("Please enter a valid phone number.");
                return false;
            }

            alert("Phone number is valid.");
            return true;
        }
   // </script>