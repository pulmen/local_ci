<p class="bg-success">
    <?php
    if ($this->session->flashdata('login_sucess')):
        echo $this->session->flashdata('login_sucess');
    endif;
    ?>
    <?php
    if ($this->session->flashdata('user_registered')):
        echo $this->session->flashdata('user_registered');
    endif;
    ?>
</p>
<p class="bg-danger">
    <?php
    if ($this->session->flashdata('login_failed')):
        echo $this->session->flashdata('login_failed');
    endif;
    ?>
</p>
<p class="bg-warning">
    <?php
    if ($this->session->flashdata('no_access')):
        echo $this->session->flashdata('no_access');
    endif;
    ?>
</p>

<?php if (!isset($projects)): ?>
    <div class="jumbotron">
<!--        <img src="--><?php //echo base_url('images/codeigniter-web-development.jpg'); ?><!--" />-->
        <h1 class="text-center">Welcome to MyApp!</h1>
    </div>
<?php else: ?>
    <h1>Projects</h1>

    <table class="table table-bordered">

        <thead>
        <tr>
            <th>
                Project Name
            </th>
            <th>
                Project Description
            </th>
            <th>

            </th>
        </tr>
        </thead>
        <tbod>

            <?php foreach ($projects as $project): ?>
                <tr>
                    <?php echo '<td>' . $project->project_name . '</td>'; ?>
                    <?php echo '<td>' . $project->project_body . '</td>'; ?>
                    <td><a href="<?php echo base_url(); ?>projects">view</a></td>
                </tr>
            <?php endforeach; ?>


        </tbod>
    </table>
<?php endif; ?>