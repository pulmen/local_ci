<?php if($this->session->userdata('logged_in')): ?>
    <h2>Logout</h2>
    <?php
        echo form_open('users/logout');
    ?>

    <p>
        <?php
            if($this->session->userdata('username')):
                echo "You are logged in as: ".$this->session->userdata('username');
            endif;
        ?>
    </p>

    <?php
        $data = array(
            'class' => 'btn btn-primary',
            'name' => 'submit',
            'value' => 'Logout'
        );
        echo form_submit($data);
        echo form_close();
    ?>


<?php else: ?>
<h2>Login form</h2>

<?php
$attributes = array(
    'id' => 'login_form',
    'class' => 'form_horizontal'
);
?>

<?php
    if($this->session->flashdata('error')):
        echo $this->session->flashdata('error');
    endif;
?>

<?php echo form_open('users/login', $attributes); ?>

<div class="form-group">
    <?php
    echo form_label('Username');
    $data = array(
        'class' => 'form-control',
        'name' => 'username',
        'placeholder' => 'Enter Username'
    );
    echo form_input($data);
    ?>
</div>
<div class="form-group">
    <?php
    echo form_label('Password');
    $data = array(
        'class' => 'form-control',
        'name' => 'password',
        'placeholder' => 'Enter Password'
    );
    echo form_password($data);
    ?>
</div>
<div class="form-group">
    <?php
    echo form_label('Confirm Password');
    $data = array(
        'class' => 'form-control',
        'name' => 'confirm_password',
        'placeholder' => 'Confirm Password'
    );
    echo form_password($data);
    ?>
</div>
<div class="form-group">
    <?php
    $data = array(
        'class' => 'btn btn-primary',
        'name' => 'submit',
        'value' => 'Login'
    );
    echo form_submit($data);
    ?>
</div>

<?php echo form_close(); ?>
<?php endif; ?>