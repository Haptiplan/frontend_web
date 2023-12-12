function getMachine() {
  fetch('http://localhost/haptiplan-backend/HaptiPlan/machine')
  .then(response => response.json())
  .then(data => {

      let dataList = document.getElementById('dataList');
      // Clear any existing items in the list
      dataList.innerHTML = '';

      // Loop through the data and create list items
      data.forEach(item => {
          const listItem = document.createElement('li');
          listItem.textContent = item.description;
          dataList.appendChild(listItem);
      });
  })
}

getMachine()


document.getElementById('dataForm').addEventListener('submit', submitForm);

function submitForm(event) {

  event.preventDefault();

  const formData = new FormData(event.target);

  fetch('http://localhost/haptiplan-backend/HaptiPlan/machine', {
      method: 'POST',
      body: formData
  })
  .then(response => { return response.json(); })
  .then(data => {
      console.log('Data successfully inserted');
      getMachine();
  })
}
  




