//Update Credit
function updateCredit(credit_amount) {
  const credit_id = 1;
  fetch(window.location.origin + `/backend/haptiplan/credit/update/${credit_id}`, {
    method: "PUT",
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
      "credit_amount": credit_amount
    })
  })
    .then(response => response.json())
    .then(data => {
    })
    .catch(error => console.error(error));
}

const creditRange = document.getElementById('credit');
/**
 * Trigger credit update when range changes
 */
function handleCreditChange() {
  rangeValue = creditRange.value;
  creditValue.innerText = rangeValue.toLocaleString('de-DE'); // Display value in millions
}

function handleCreditRelease() {
  updateCredit(rangeValue); // Trigger credit update with saved range value
  console.log(rangeValue);
}

creditRange.addEventListener('input', handleCreditChange);
creditRange.addEventListener('mouseup', handleCreditRelease);

