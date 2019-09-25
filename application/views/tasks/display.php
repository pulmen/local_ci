<h1>Project Tasks</h1>


<table class="table table-hover">

    <thead>
    <tr>
        <th>
            Task Name
        </th>
        <th>
            Task Description
        </th>
        <th>
            Date Created
        </th>
    </tr>
    </thead>
    <tbod>
        <tr>
            <?php echo '<td>' . $task->task_name . '</td>'; ?>
            <?php echo '<td>' . $task->task_body . '</td>'; ?>
            <?php echo '<td>' . $task->date_created . '</td>'; ?>
        </tr>
    </tbod>
</table>
