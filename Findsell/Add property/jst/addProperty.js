// AddProperties.js

// Function to validate the form inputs
function validateForm() {
    // Get elements by their ID
    let propertyType = document.getElementById('propertyType').value.trim();
    let price = document.getElementById('price').value.trim();
    let listingType = document.getElementById('listingType').value.trim();
    let location = document.getElementById('location').value.trim();
    let description = document.getElementById('description').value.trim();
    let ownerName = document.getElementById('ownerName').value.trim();
    let phoneNo = document.getElementById('phoneNo').value.trim();

    // Validate required fields
    if (propertyType === "") {
        alert("Property Type is required");
        return false;
    }
    if (price === "" || isNaN(price)) {
        alert("Valid Price is required");
        return false;
    }
    if (listingType === "") {
        alert("Listing Type is required");
        return false;
    }
    if (location === "") {
        alert("Location is required");
        return false;
    }
    if (description === "") {
        alert("Description is required");
        return false;
    }
    if (ownerName === "") {
        alert("Owner Name is required");
        return false;
    }
    if (phoneNo === "" || isNaN(phoneNo)) {
        alert("Valid Phone Number is required");
        return false;
    }

    // If all validations pass, allow form submission
    return true;

    
}
