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
        machineInstance.querySelector('.machine_name').textContent = item.machine_name;
        machineInstance.querySelector('.machine_capacity').textContent = item.machine_capacity;
        machineInstance.querySelector('.machine_price').textContent = item.machine_price;
        machineInstance.querySelector('.machine_duration').textContent = item.machine_duration;
        machineInstance.querySelector('.machine_period').textContent = item.machine_period;

        dataList.appendChild(machineInstance);
    });
})
}

getMachine();


/** 
const form = document.querySelector('.add_form');

form.addEventListener('submit', (e) => {
  e.preventDefault();

const formData = new FormData(form);
const machine_name = formData.get('machine_name');
const machine_capacity= parseInt(formData.get('machine_capacity'));
const machine_price= parseFloat(formData.get('machine_price'));
const machine_duration = parseInt(formData.get('machine_duration'));
const machine_period = parseInt(formData.get('machine_period'));

  fetch('http://localhost/haptiplan-backend/HaptiPlan/machine', {
    method: "POST",
    body: JSON.stringify({
        "machine_name": machine_name,
        "machine_capacity":machine_capacity,
        "machine_price": machine_price,
        "machine_duration": machine_duration,
        "machine_period": machine_period
    })
  })
  .then(response => response.text())
  .then(data => {
    console.log(data);
    const parsedData = JSON.parse(data);
    console.log(parsedData);

    getMachine();

  })
  .catch(error => console.log(error))

})

function deleteForm(event) {
  event.preventDefault();

  const formData = new FormData(event.target);
  var description_value = formData.get('description');

  fetch('http://localhost/haptiplan-backend/haptiplan/machine/delete', {
    method: 'POST',
  })
  .then(response => {
    return response.json(); 
   })
    .then(data => {
      console.log('Data successfully deleted');
      console.log(data);
      getMachine();
    })
    .catch(error => console.error('Error deleting machine data:', error));
  }*/