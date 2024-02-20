function getMachine() {
  fetch(window.location.origin + '/backend/HaptiPlan/machine')
  .then(response => response.json())
  .then(data => {
  console.log(data);
    let dataList = document.querySelector('.dataList2');
    // Clear any existing items in the list
    dataList.innerHTML = '';
  
    const machineTemplate = document.querySelector('.machineTemplate2');
  
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
  const meinBild = document.getElementById('machine-image'); // Das Bild-Element
  meinBild.src = "../styles/machine.png";
  meinBild.style.display = "block";  

  // Das Ziel-Div, in das das Bild eingefügt werden soll
  const targetDiv = event.target;
  targetDiv.appendChild(meinBild);
}

function updateDropField(machine_name) {
  const dropField = document.getElementsByClassName("buildingPlace");
  dropField.innerHTML = machine_name;
}

function dragMachine(event) {
    const machine_id = event.target.querySelector('input[name="machine_id"]').value;
    event.dataTransfer.setData("text/plain", machine_id);
    event.target.classList.add("dragging");
    event.target.addEventListener("dragend", dragEnd);
}
  
function dragEnd(event) {
  event.target.classList.remove("dragging");
}

