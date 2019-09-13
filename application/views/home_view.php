
<p class="bg-success">
    <?php
        if($this->session->flashdata('login_sucess')):
            echo $this->session->flashdata('login_sucess');
        endif;
    ?>
    <?php
    if($this->session->flashdata('user_registered')):
        echo $this->session->flashdata('user_registered');
    endif;
    ?>

</p>
<p class="bg-danger">
    <?php
    if($this->session->flashdata('login_failed')):
        echo $this->session->flashdata('login_failed');
    endif;
    ?>
</p>
<h1>HELLO this is a view</h1>