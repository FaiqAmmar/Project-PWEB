// Slide Indicator

// Get the buttons
const buttons = document.querySelectorAll('#SlideIndicator button');

// Function to handle button click
function handleButtonClick(event) {
    // Remove the 'active' class from all buttons
    buttons.forEach(button => button.classList.remove('active'));

    // Add the 'active' class to the clicked button
    event.target.classList.add('active');
}

// Attach click event listeners to buttons
buttons.forEach(button => button.addEventListener('click', handleButtonClick));


// Attach click event listeners to buttons
buttons2.forEach(button => button.addEventListener('click', handleButtonClick));