<h1>Projects</h1>

<p class="text-warning">
    <?php
    if($this->session->flashdata('project_updated')):
        echo $this->session->flashdata('project_updated');
    endif;
    ?>
    <?php
    if($this->session->flashdata('project_deleted')):
        echo $this->session->flashdata('project_deleted');
    endif;
    ?>
</p>
<p class="text-success">
    <?php
    if($this->session->flashdata('project_created')):
        echo $this->session->flashdata('project_created');
    endif;
    ?>
</p>

<a href="<?php base_url(); ?>projects/create" class="btn btn-primary float-right mb-1">Create Project</a>

<table class="table table-hover">

    <thead>
        <tr>
            <th>
                Project Name
            </th>
            <th>
                Project Body
            </th>
            <th>
            </th>
        </tr>
    </thead>
    <tbod>

        <?php foreach ($projects as $project): ?>
        <tr>
            <?php echo '<td><a href="' . base_url() . 'projects/display/' . $project->id . '">' . $project->project_name . '</a></td>'; ?>
            <?php echo '<td>' . $project->project_body . '</td>'; ?>
            <td><a class="btn btn-sm btn-outline-danger" href="<?php echo base_url(); ?>projects/delete/<?php echo $project->id; ?>"><span class="oi oi-x"></span></a> </td>
        </tr>
        <?php endforeach; ?>


    </tbod>
</table>