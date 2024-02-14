function getCredit() {
  fetch(window.location.origin + '/backend/haptiplan/credit')
    .then(response => response.json())
    .then(data => {

      let dataList = document.querySelector('.dataList');
      // Clear any existing items in the list
      dataList.innerHTML = '';

      const creditTemplate = document.querySelector('.creditTemplate');

      // Loop through the data and create list items
      data.forEach(item => {
        const creditInstance = creditTemplate.content.cloneNode(true);

        creditInstance.querySelector('.credit_amount').textContent = item.credit_amount;
        dataList.appendChild(creditInstance);
      });
    });
}

getCredit();

//Add Credit

const form = document.querySelector('.update_form');

form.addEventListener('submit', (e) => {
  e.preventDefault();

  const formData = new FormData(form);
  const credit_amount = formData.get('credit');
  const credit_id = 1;

  fetch(window.location.origin + `/backend/haptiplan/credit/update/${credit_id}`, {
    method: "PUT",
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
      "credit_amount": credit_amount
    })
  })
  .then(response => response.json())
  .then(data => {
    getCredit();
  })
  .catch(error => console.error(error));
});

//Display Value from Range
const creditRange = document.getElementById('credit');
const creditValue = document.getElementById('creditValue');
creditRange.addEventListener('input', function() {
  const value = Number(creditRange.value).toLocaleString('de-DE');
  creditValue.innerText = value;
});