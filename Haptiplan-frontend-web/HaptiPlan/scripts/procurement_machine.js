
/*fetch("http://localhost/Haptiplan-backend/HaptiPlan/machine")
.then(respone => respone.json())
.then(function(machines){
    var machineList = document.getElementById("machineList");
 
    machines.forEach(function (machine) {
        var machineItem = document.createElement("li");
        machineItem.innerHTML = "Name: " + machine.name;
        machineList.appendChild(machineItem);
    });
})*/

fetch("http://localhost/Haptiplan-backend/HaptiPlan/machine")
  .then((response) => {
    return response.json();
  })
  .then((machines) => {
    console.log("Daten erfolgreich abgerufen:", machines);
    const machineList = document.getElementById("machines");
    machines.forEach((machine) => {
      const tmpl = document.getElementById("machine-template").content.cloneNode(true);
      tmpl.querySelector(".machineName").innerText = machine.machine_name;
      tmpl.querySelector(".machineID").innerText = machine.id;
      machineList.appendChild(tmpl);
    });
  })
  




