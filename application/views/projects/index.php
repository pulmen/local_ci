<h1>Projects</h1>

<a href="<?php base_url(); ?>projects/create" class="btn btn-primary float-right">Create Project</a>

<table class="table table-hover">

    <thead>
        <tr>
            <th>
                Project Name
            </th>
            <th>
                Project Body
            </th>
        </tr>
    </thead>
    <tbod>

        <?php foreach ($projects as $project): ?>
        <tr>
            <?php echo '<td><a href="' . base_url() . 'projects/display/' . $project->id . '">' . $project->project_name . '</a></td>'; ?>
            <?php echo '<td>' . $project->project_body . '</td>'; ?>
        </tr>
        <?php endforeach; ?>


    </tbod>
</table>