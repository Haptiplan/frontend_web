const buildingRange = document.getElementById('building');
 
function handleCreditChange() {
    rangeValue = buildingRange.value;
    buildingValue.innerText = rangeValue.toLocaleString('de-DE');
  }
  buildingRange.addEventListener('input', handleCreditChange);

  const form = document.querySelector('.add_form');

form.addEventListener('submit', (e) => {
  e.preventDefault();

  //Selected Building 
  const selectedOption = document.getElementById('dropdownMenu').value;

  //Create Building
const formData = new FormData(form);
const building_type_id = parseInt(selectedOption);
const building_price = parseInt(formData.get('building_price'));

    fetch(window.location.origin + '/backend/haptiplan/building', {
      method: "POST",
      body: JSON.stringify({
        "building_type_id": building_type_id,
        "building_price": building_price
      })
    })
      .then(response => response.json())
      .then(data => {
        console.log(selectedOption);
      })
      .catch(error => console.error(error));
  })