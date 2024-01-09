function getMachine() {
  fetch('http://localhost/haptiplan-backend/HaptiPlan/machine')
    .then(response => response.json())
    .then(data => {
      let data_list = document.getElementById('data_list');
      // Clear any existing items in the list
      data_list.innerHTML = '';
      const machine_template = document.getElementById('machine_template');

      // Loop through the data and create list items
      data.forEach(item => {
        const machine_instance = machine_template.content.cloneNode(true);
        machine_instance.querySelector('.machine_name').textContent = item.description;
        machine_instance.querySelector('input[name="machineId"]').value = item.machineId;
        const deleteFormElement = machine_instance.querySelector(".delete_form");
        
        if (deleteFormElement) {
            deleteFormElement.addEventListener('submit', deleteForm);
        }
        data_list.appendChild(machine_instance);
    });
    console.log(data);

})
}

getMachine();


document.getElementById('data_form').addEventListener('submit', submitForm);


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

function deleteForm(event) {
  event.preventDefault();

  const formData = new FormData(event.target);
  var description_value = formData.get('description');

  fetch('http://localhost/haptiplan-backend/haptiplan/machine/delete', {
    method: 'POST',
    body: JSON.stringify({ "description": description_value })
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
}