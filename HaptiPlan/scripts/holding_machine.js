function getMachine() {
  fetch(window.location.origin + '/backend/HaptiPlan/machine')
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
/*
  function allowDrop(event) {
    event.preventDefault();
  }
  
  function drop(event) {
    event.preventDefault();
	const machineId = event.dataTransfer.getData('text');
    const newMachine = document.createElement(document.getElementById(machineId));
    event.target.appendChild(newMachine);
  }

  function dragMachine(event) {
    const machineId = event.target.querySelector('input[name="machine_id"]').value;
    event.dataTransfer.setData("text/plain", machineId);
    event.target.classList.add("dragging");
    event.target.addEventListener('dragend', dragEnd);
    
  }
  */
function allowDrop(event) {
  event.preventDefault();
}

function drop(event) {
  event.preventDefault();
  const machine_id = event.dataTransfer.getData("Number");

  fetch(window.location.origin +`/backend/HaptiPlan/machine/${machine_id}`, {
    method: 'GET',
  })
  .then(response => response.json())
  .then(data => {
    updateDropField(data.machine_name);
  })
  .catch(error => console.log(error));
}

function updateDropField(machine_name) {
  const dropField = document.getElementById('drop-zone2');
  dropField.innerHTML = machine_name;
}

function dragMachine(event) {
    const machine_id = event.target.querySelector('input[name="machine_id"]').value;
    event.dataTransfer.setData("text/plain", machine_id);
    event.target.classList.add("dragging");
    event.target.addEventListener('dragend', dragEnd);
}
  
function dragEnd(event) {
  event.target.classList.remove("dragging");
}
  