document.addEventListener('DOMContentLoaded', function() {
  console.log('JavaScript file loaded');

  const userButton = document.getElementById('userButton');
  const role = document.getElementById('role');
  const roleUser = document.getElementById('roleUser');
  const container = document.getElementById('container');
  const title = document.getElementById('title');

  console.log({ userButton, role, roleUser, container, title }); // Log the elements

  if (userButton && role && roleUser && container && title) {
      userButton.addEventListener('click', function() {
          console.log("User button clicked");

          // Hide the role selection and show the user role form
          role.classList.add('opacity-0');
          setTimeout(() => {
              role.classList.add('hidden');
              roleUser.classList.remove('hidden');
              setTimeout(() => {
                  roleUser.classList.remove('opacity-0');
              }, 25); // Slight delay to trigger transition
          }, 500); // Duration must match the CSS transition duration

          // Update the title and container padding with transitions
          title.classList.add('opacity-0');
          setTimeout(() => {
              title.innerText = "Register User";
              title.classList.remove('opacity-0');
              title.classList.add('opacity-100');
          }, 500); // Duration must match the CSS transition duration

          container.classList.remove('p-16');
          container.classList.add('px-16', 'py-12', 'transition-all', 'duration-500');
      });
  } else {
      console.error("One or more elements not found");
  }
});

document.addEventListener('DOMContentLoaded', function() {
  console.log('JavaScript file loaded');

  const mitraButton = document.getElementById('mitraButton');
  const role = document.getElementById('role');
  const roleMitra = document.getElementById('roleMitra');
  const container = document.getElementById('container');
  const title = document.getElementById('title');

  console.log({ mitraButton, role, roleMitra, container, title }); // Log the elements

  if (mitraButton && role && roleMitra && container && title) {
      mitraButton.addEventListener('click', function() {
          console.log("Mitra button clicked");

          // Hide the role selection and show the mitra role form
          role.classList.add('opacity-0');
          setTimeout(() => {
              role.classList.add('hidden');
              roleMitra.classList.remove('hidden');
              setTimeout(() => {
                  roleMitra.classList.remove('opacity-0');
              }, 25); // Slight delay to trigger transition
          }, 500); // Duration must match the CSS transition duration

          // Update the title and container padding with transitions
          title.classList.add('opacity-0');
          setTimeout(() => {
              title.innerText = "Register Mitra";
              title.classList.remove('opacity-0');
              title.classList.add('opacity-100');
          }, 500); // Duration must match the CSS transition duration

          container.classList.remove('p-16');
          container.classList.add('px-16', 'py-12', 'transition-all', 'duration-500');
      });
  } else {
      console.error("One or more elements not found");
  }
});