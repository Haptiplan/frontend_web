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
        dataList.appendChild(machineInstance);
    });
})
}

getMachine()


const form = document.querySelector('form');

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
  .then(response => response.json())
  .then(data => {
    console.log(data);
    getMachine();

  })
  .catch(error => console.log(error))

})








