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
const form = document.querySelector('.add_form');

form.addEventListener('submit', (e) => {
  e.preventDefault();

const formData = new FormData(form);
const machine_name = formData.get('machine_name');
const machine_capacity= parseInt(formData.get('machine_capacity'));
const machine_price= parseFloat(formData.get('machine_price'));
const machine_duration = parseInt(formData.get('machine_duration'));
const machine_period = parseInt(formData.get('machine_period'));

  fetch(window.location.origin + '/backend/HaptiPlan/machine', {
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
    getMachine();

  })
  .catch(error => console.log(error))
})

function allowDrop(event) {
  event.preventDefault();
}

function drop(event) {
  event.preventDefault();
  const machineId = event.dataTransfer.getData("text");
  
  fetch(window.location.origin +`/backend/HaptiPlan/machine/delete/${machineId}`, {
    method: 'DELETE',
  })
  .then(response => response.json())
  .then(data => {
    getMachine();
  })
  .catch(error => console.log(error));
}

function dragMachine(event) {
  const machineId = event.target.querySelector('input[name="machine_id"]').value;
  event.dataTransfer.setData("text/plain", machineId);
  event.target.classList.add("dragging");
  const meinBild = document.getElementById('trashcan-image');
  meinBild.src = "./Haptiplan/styles/trashcanopen.png";
  event.target.addEventListener('dragend', dragEnd);
  
}

function dragEnd(event) {
  event.target.classList.remove("dragging");
  const meinBild = document.getElementById('trashcan-image');
  meinBild.src = "./Haptiplan/styles/trashcanclosed.png";
}

//Optional
const dropZone = document.getElementById('drop-zone');

dropZone.addEventListener('dragenter', () => {
    dropZone.classList.add('dragover');
});

dropZone.addEventListener('dragleave', () => {
    dropZone.classList.remove('dragover');
});

dropZone.addEventListener('drop', () => {
    dropZone.classList.remove('dragover');
});