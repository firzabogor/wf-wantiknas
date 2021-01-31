<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Tribe</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard');?>"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('tribe');?>">Tribe</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php if(isset($id)){echo "Update";} else {echo "Create";}?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <h3 class="mb-0">Tribe</h3>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <form class="needs-validation" method="POST" action="<?php if(isset($id)){echo base_url('tribe/update/'.$id);} else {echo base_url('tribe/form/');}?>">
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="name">Nama</label>
                                <input type="text" class="form-control <?php if(form_error('name')){ echo 'is-invalid';} ?>" value="<?php if(isset($name)){ echo $name; } else { echo set_value('name'); } ?>" id="name" name="name" placeholder="Nama" required>
                                <div class="invalid-feedback">
                                    <?php echo form_error('name'); ?>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="responsibility">Tanggung Jawab</label>
                                <input type="text" class="form-control <?php if(form_error('responsibility')){ echo 'is-invalid';} ?>" value="<?php if(isset($responsibility)){ echo $responsibility; } else { echo set_value('responsibility'); } ?>" id="responsibility" name="responsibility" placeholder="Tanggung Jawab" required>
                                <div class="invalid-feedback">
                                    <?php echo form_error('responsibility'); ?>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">
                            <?php if(isset($id)) { echo "Update";} else {echo "Create";}?>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Optional JS -->
    <script src="<?php echo asset_url();?>vendor/select2/dist/js/select2.min.js"></script>
    <script src="<?php echo asset_url();?>vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo asset_url();?>vendor/quill/dist/quill.min.js"></script>
    <script src="<?php echo asset_url();?>vendor/clockpicker/dist/bootstrap-clockpicker.min.js"></script>