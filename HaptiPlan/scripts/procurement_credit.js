function getCredit() {
    fetch(window.location.origin + '/backend/HaptiPlan/credit')
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
/** 
const form = document.querySelector('.add_form');

form.addEventListener('submit', (e) => {
  e.preventDefault();

const formData = new FormData(form);
const credit_amount = formData.get('credit');


  fetch(window.location.origin + '/backend/HaptiPlan/credit', {
    method: "POST",
    body: JSON.stringify({
        "credit": credit_amount,
    })
  })
  .then(response => response.json())
  .then(data => {
    console.log("test");
  })
  .catch(error => console.log(error))
})

//Display Value from Range
const creditRange = document.getElementById('credit');
const creditValue = document.getElementById('creditValue');
creditRange.addEventListener('input', function() {
    const value = Number(creditRange.value).toLocaleString('de-DE');
    creditValue.innerText = value;
});
*/