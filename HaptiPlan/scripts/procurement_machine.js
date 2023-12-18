function getMachine() {
  fetch('http://localhost/haptiplan-backend/HaptiPlan/machine')
    .then(response => response.json())
    .then(data => {

      let dataList = document.getElementById('dataList');
      // Clear any existing items in the list
      dataList.innerHTML = '';

      const machineTemplate = document.getElementById('machineTemplate');

      // Loop through the data and create list items
      data.forEach(item => {
        const machineInstance = machineTemplate.content.cloneNode(true);
        machineInstance.querySelector('.machine_name').textContent = item.description;
        dataList.appendChild(machineInstance);
    });
})
}

getMachine()


document.getElementById('dataForm').addEventListener('submit', submitForm);

function submitForm(event) {
  event.preventDefault();

  const formData = new FormData(event.target);
  var description_value = formData.get('description');

  fetch('http://localhost/haptiplan-backend/HaptiPlan/machine', {
    method: 'POST',
    body: JSON.stringify({ "description": description_value })
  })
    .then(response => {
       return response.json(); 
      })
    .then(data => {
      console.log('Data successfully inserted');
      getMachine();
    })

}





