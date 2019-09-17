
<h2>Edit Project</h2>

<?php
$attributes = array(
    'id' => 'register_form',
    'class' => 'form_horizontal'
);
?>

<?php
//    if ($this->session->flashdata('error')):
//        echo $this->session->flashdata('error');
//    endif;
echo validation_errors('<p class="bg-danger">');
?>

<?php echo form_open('projects/edit/' . $project_data->id . '', $attributes); ?>

<div class="form-group">
    <?php
    echo form_label('Project Name');
    $data = array(
        'class' => 'form-control',
        'name' => 'project_name',
        'value' => $project_data->project_name
    );
    echo form_input($data);
    ?>
</div>
<div class="form-group">
    <?php
    echo form_label('Project Description');
    $data = array(
        'class' => 'form-control',
        'name' => 'project_body',
        'value' => $project_data->project_body
    );
    echo form_textarea($data);
    ?>
</div>


<div class="form-group">
    <?php
    $data = array(
        'class' => 'btn btn-primary',
        'name' => 'submit',
        'value' => 'Update'
    );
    echo form_submit($data);
    ?>
</div>

<?php echo form_close(); ?>
