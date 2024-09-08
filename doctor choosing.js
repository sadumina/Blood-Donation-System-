document.addEventListener('DOMContentLoaded', function() {
    const doctors = document.querySelectorAll('.doctor');
    
    doctors.forEach(function(doctor) {
        doctor.addEventListener('click', function() {
            // Remove 'selected' class from all doctors
            doctors.forEach(function(doc) {
                doc.classList.remove('selected');
            });

            // Add 'selected' class to the clicked doctor
            doctor.classList.add('selected');
        });
    });
});