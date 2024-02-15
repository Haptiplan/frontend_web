<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/procurement.css">
</head>

<body>
    <?php include_once('header.php'); ?>
    <h1>Mitarbeiter:</h1>
    <form class="add_form">
        <div>
            <label for="employee_salary">Salary</label>
            <input type="text" name="employee_salary" id="employee_salary">
        </div>
        <button type="submit">create employee</button>
    </form>
    <ul class='dataList'></ul>
    <template class="employeeTemplate">
        <div class="employee_list" draggable="true" ondragstart="dragMachine(event)">
            <div class="employee_salary"></div>
            <form class="delete_form">
                <input type="hidden" name="employee_id">
            </form>
        </div>
    </template>
    <script scr="../scripts/procurement_employee.js"></script>
</body>

</html>