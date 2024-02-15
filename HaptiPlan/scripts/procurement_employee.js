function getEmployee() {
    fetch(window.location.origin + '/backend/HaptiPlan/employee')
      .then(response => response.json())
      .then(data => {
  
        let dataList = document.querySelector('.dataList');
        // Clear any existing items in the list
        dataList.innerHTML = '';
  
        const employeeTemplate = document.querySelector('.employeeTemplate');
  
        // Loop through the data and create list items
        data.forEach(item => {
          const employeeInstance = employeeTemplate.content.cloneNode(true);
  
          employeeInstance.querySelector('input[name="employee_id"]').value = item.employee_id;
          employeeInstance.querySelector('.employee_salary').textContent = item.employee_salary;
          
          dataList.appendChild(employeeInstance);
        });
      });
  }
  
getEmployee();
const form = document.querySelector('.add_form');

form.addEventListener('submit', (e) => {
    e.preventDefault();

    const formData = new FormData(form);
    const employee_salary = formData.get('employee_salary');


    fetch(window.location.origin + '/backend/HaptiPlan/employee', {
        method: "POST",
        body: JSON.stringify({
            "employee_salary": employee_salary
        })
    })
    .then(response => response.json())
    .then(data => {
        getEmployee();

    })
    .catch(error => console.log(error))
})
