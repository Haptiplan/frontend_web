const buildingRange = document.getElementById('building');
 
function handleBuildingChange() {
    rangeValue = buildingRange.value;
    buildingValue.innerText = rangeValue.toLocaleString('de-DE');
  }
  buildingRange.addEventListener('input', handleBuildingChange);

  const form = document.querySelector('.add_form');

form.addEventListener('submit', (e) => {
  e.preventDefault();

  //Selected Building 
  const selectedOption = document.getElementById('dropdownMenu').value;

  //Create Building
const formData = new FormData(form);
const building_type_id = parseInt(selectedOption);
const building_name = formData.get('building_name');
const building_price = parseInt(formData.get('building_price'));

    fetch(window.location.origin + '/backend/haptiplan/building', {
      method: "POST",
      body: JSON.stringify({
        "building_type_id": building_type_id,
        "building_name" : building_name,
        "building_price": building_price
      })
    })
      .then(response => response.json())
      .then(data => {
        getBuilding();
      })
      .catch(error => console.error(error));
  })

  function getBuilding() {
    fetch(window.location.origin + '/backend/HaptiPlan/building')
      .then(response => response.json())
      .then(data => {
  
        let dataList = document.querySelector('.dataList');
        // Clear any existing items in the list
        dataList.innerHTML = '';
  
        const buildingTemplate = document.querySelector('.buildingTemplate');
  
        // Loop through the data and create list items
        data.forEach(item => {
          const buildingInstance = buildingTemplate.content.cloneNode(true);
  
          buildingInstance.querySelector('.building_name').textContent = item.building_name;
          buildingInstance.querySelector('.building_price').textContent = item.building_price;
          buildingInstance.querySelector('.building_type_id').textContent = item.machine_duration;
          dataList.appendChild(buildingInstance);
        });
      });
  }
  
  getBuilding();