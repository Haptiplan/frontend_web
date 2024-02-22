function getUser() {
    fetch(window.location.origin + '/backend/HaptiPlan/user')
      .then(response => response.json())
      .then(data => {
  
        let dataList = document.querySelector('.dataList');
        // Clear any existing items in the list
        dataList.innerHTML = '';
  
        const userTemplate = document.querySelector('.userTemplate');
  
        // Loop through the data and create list items
        data.forEach(item => {
          const userInstance = userTemplate.content.cloneNode(true);
  
          userInstance.querySelector('input[name="user_id"]').value = item.user_id;
          userInstance.querySelector('.user_name').textContent = item.user_name;
          userInstance.querySelector('.user_password').textContent = item.user_password;
          userInstance.querySelector('.user_role').textContent = item.user_role;
          dataList.appendChild(userInstance);
        });
      });
  }
  
  getUser();
  const form = document.querySelector('.add_form');
  
  form.addEventListener('submit', (e) => {
    e.preventDefault();
  
  const formData = new FormData(form);
  const user_name = formData.get('user_name');
  const user_password= formData.get('user_password');
  const user_role= parseInt(formData.get('user_role'));
  
    fetch(window.location.origin + '/backend/HaptiPlan/user', {
      method: "POST",
      body: JSON.stringify({
          "user_name": user_name,
          "user_password":user_password,
          "user_role": user_role
      })
    })
    .then(response => response.json())
    .then(data => {
      getUser();
  
    })
    .catch(error => console.log(error))
  })

// Use querySelectorAll to select all delete buttons
const delete_buttons = document.querySelectorAll('.delete_button');

// Add an event listener to each delete button
delete_buttons.forEach(delete_button => {
  delete_button.addEventListener('click', (e) => {
    e.preventDefault();
    deleteUser(e.target);
  });
});

function deleteUser(deleteForm) {
  const formData = new FormData(deleteForm);
  const user_id = formData.get('user_id');
  console.log(user_id);


  fetch(window.location.origin + `backend/HaptiPlan/user/delete/${user_id}`, {
    method: 'DELETE',
  })
  .then(response => response.json())
  .then(data => {
    getUser();
  })
  .catch(error => console.log(error));
};