function handleSubmit(event) {
    event.preventDefault(); //  default form submission is stooped

    // Get  password and re enter password values
    const password = document.getElementById('password').value;
    const retypePassword = document.getElementById('retype-password').value;

    // Check passwords match
    if (password !== retypePassword) {
        alert('Passwords not match'); 
    } else {
        alert('Sign Up success'); 
        
    }
}
