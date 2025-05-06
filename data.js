const scriptURL = 'https://script.google.com/macros/s/AKfycbxwRpllURy80nSopFZwAjOrCur3JqE_d-AzXw7DnzvT49hZo9ZnXxkt10NGx_BpfQMC/exec';
const form = document.forms['contact-form'];

form.addEventListener('submit', e => {
  e.preventDefault();
  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
    .then(response => alert("Thank you! your form is submitted successfully."))
    .then(() => { window.location.reload(); })
    .catch(error => console.error('Error!', error.message));
})
