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