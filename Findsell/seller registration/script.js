function setCookie(name, value, days) {
    const expires = new Date(Date.now() + days * 864e5).toUTCString();
    document.cookie = name + '=' + encodeURIComponent(value) + '; expires=' + expires + '; path=/';

    setCookie('usname', 'shenolka', 7);

}
    
    document.getElementById('sellerForm').addEventListener('submit', function(event) {
    // stop initial form submit
    event.preventDefault();

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const sellerType = document.getElementById('sellerType').value;
    const termsChecked = document.getElementById('terms').checked;

    // password check
    if (password !== confirmPassword) {
        alert("Passwords  unmatch!");
        return; // Stop the form submission
    }

    

    
    this.submit(); 
});
