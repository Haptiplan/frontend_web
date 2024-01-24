function getMachine() {
  fetch('http://localhost/haptiplan-backend/HaptiPlan/machine')
    .then(response => response.json())
    .then(data => {

      let dataList = document.querySelector('.dataList');
      // Clear any existing items in the list
      dataList.innerHTML = '';

      const machineTemplate = document.querySelector('.machineTemplate');

      // Loop through the data and create list items
      data.forEach(item => {
        const machineInstance = machineTemplate.content.cloneNode(true);
        machineInstance.querySelector('input[name="machine_id"]').value = item.machine_id;
        machineInstance.querySelector('.machine_name').textContent = item.machine_name;
        machineInstance.querySelector('.machine_capacity').textContent = item.machine_capacity;
        machineInstance.querySelector('.machine_price').textContent = item.machine_price;
        machineInstance.querySelector('.machine_duration').textContent = item.machine_duration;
        machineInstance.querySelector('.machine_period').textContent = item.machine_period;

        dataList.appendChild(machineInstance);
      });
    });
}

getMachine();

const form = document.querySelector('.add_form');

form.addEventListener('submit', (e) => {
  e.preventDefault();
  const formData = new FormData(form);
  
  // ... (rest of your form submission code)
});

// Use querySelectorAll to select all delete buttons
const delete_machines = document.querySelectorAll('.delete_machine');

// Add an event listener to each delete button
delete_machines.forEach(delete_machine => {
  delete_machine.addEventListener('submit', (e) => {
    e.preventDefault();
    deleteMachine(e.target);
  });
});

function deleteMachine(deleteForm) {
  const formData = new FormData(deleteForm);
  const machine_id = formData.get('machine_id');
  console.log(machine_id);


  fetch(`http://localhost/haptiplan-backend/HaptiPlan/machine/${machine_id}`, {
    method: 'DELETE',
  })
  .then(response => response.json())
  .then(data => {
    console.log(data);
    getMachine();
  })
  .catch(error => console.log(error));
}
