 // Get the form element
            const form = document.getElementById('contactForm');

            // Add event listener for form submission
            form.addEventListener('submit', function(event) {
                // Prevent form from submitting
                event.preventDefault();

                // Get form values
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const phone = document.getElementById('phone').value;
                const message = document.getElementById('message').value;

                // Basic validation
                if (name === '' || email === '' || phone === '' || message === '') {
                    alert('All fields are required.');
                } else if (!validateEmail(email)) {
                    alert('Please enter a valid email address.');
                } else {
                    // Show success message
                    alert('Your message has been sent successfully!');

                    // Optionally, submit the form
                    form.submit();
                }
            });

            // Function to validate email format
            function validateEmail(email) {
                const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(email);
            }