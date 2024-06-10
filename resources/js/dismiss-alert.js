document.addEventListener('DOMContentLoaded', function() {
  const dismissButtons = document.querySelectorAll('[data-dismiss-target]');
  dismissButtons.forEach(button => {
    button.addEventListener('click', function() {
      const alert = button.closest('.alert');
      alert.classList.add('opacity-0');
      alert.classList.remove('hidden');
      alert.classList.add('pointer-events-none');
      setTimeout(() => {
        alert.remove();
      }, 300); // Match this duration to the transition duration
    });
  });
});