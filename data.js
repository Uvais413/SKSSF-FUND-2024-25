document.addEventListener('DOMContentLoaded', function() {
  const form = document.getElementById('messageForm');

  form.addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    const formData = new FormData(form);

    fetch(form.action, {
      method: 'POST',
      body: formData,
    })
    .then(response => response.json())
    .then(data => {
      if (data.result === 'success') {
        alert('Message sent successfully!');
        form.reset(); // Clear the form
      } else {
        alert('Error sending message. Please try again.');
      }
    })
    .catch(error => {
      console.error('Error:', error);
      alert('Error sending message. Please try again.');
    });
  });
});