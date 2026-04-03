document.addEventListener('DOMContentLoaded', function() {
    
    // Form Validation (Add Record)
    const addForm = document.getElementById('addRecordForm');
    if (addForm) {
        addForm.addEventListener('submit', function(e) {
            let isValid = true;
            let errorMessage = '';

            const studentId = document.getElementById('student_id').value.trim();
            const fullName = document.getElementById('full_name').value.trim();
            const email = document.getElementById('email').value.trim();
            const phone = document.getElementById('phone').value.trim();

            // 1. Check for empty fields
            if (!studentId || !fullName || !email || !phone) {
                isValid = false;
                errorMessage += "All fields are required.\n";
            }

            // 2. Validate Email Format using Regex
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (email && !emailPattern.test(email)) {
                isValid = false;
                errorMessage += "Please enter a valid email address.\n";
            }

            // If invalid, prevent submission and show alert
            if (!isValid) {
                e.preventDefault();
                alert("Validation Failed:\n\n" + errorMessage);
            }
        });
    }

    // Confirmation Box for Deletion
    const deleteButtons = document.querySelectorAll('.delete-btn');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            const confirmDelete = confirm("Are you sure you want to delete this student record? This action cannot be undone.");
            if (!confirmDelete) {
                e.preventDefault(); // Stop the link from navigating if cancelled
            }
        });
    });

});
