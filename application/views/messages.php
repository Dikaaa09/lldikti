<?php if ($this->session->flashdata('success')) { ?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="icon fas fa-check"></i>
        <?php 
            echo $this->session->flashdata('success');
            unset($_SESSION['success']);
        ?>
    </div>
<?php } ?>

<?php if ($this->session->flashdata('error')) { ?>
    <div class="alert alert-danger alert-dismissible">
        <i class="bi bi-exclamation-octagon"></i>
        <?php 
            echo strip_tags(str_replace('</p>','',$this->session->flashdata('error')));
            unset($_SESSION['error']);
            ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } ?>