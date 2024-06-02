// Slide Indicator

// Get the buttons
const buttons1 = document.querySelectorAll('#SlideIndicator1 button');

// Function to handle button click
function handleButtonClick(event) {
    // Remove the 'active' class from all buttons
    buttons1.forEach(button => button.classList.remove('active'));

    // Add the 'active' class to the clicked button
    event.target.classList.add('active');
}

// Attach click event listeners to buttons
buttons1.forEach(button => button.addEventListener('click', handleButtonClick));

// Get the buttons
const buttons2 = document.querySelectorAll('#SlideIndicator2 button');

// Function to handle button click
function handleButtonClick(event) {
    // Remove the 'active' class from all buttons
    buttons2.forEach(button => button.classList.remove('active'));

    // Add the 'active' class to the clicked button
    event.target.classList.add('active');
}

// Attach click event listeners to buttons
buttons2.forEach(button => button.addEventListener('click', handleButtonClick));