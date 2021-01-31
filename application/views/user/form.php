<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Users</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard');?>"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('user');?>">Users</a></li>
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
                    <h3 class="mb-0">Users</h3>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <form class="needs-validation" method="POST" action="<?php if(isset($id)){echo base_url('user/update/'.$id);} else {echo base_url('user/form/');}?>">
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="name">Nama Lengkap</label>
                                <input type="text" class="form-control <?php if(form_error('name')){ echo 'is-invalid';} ?>" value="<?php if(isset($name)){ echo $name; } else { echo set_value('name'); } ?>" id="name" name="name" placeholder="Nama Lengkap" required>
                                <div class="invalid-feedback">
                                    <?php echo form_error('name'); ?>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required <?php if(isset($id)) { echo "disabled";} ?>>
                                <div class="invalid-feedback">
                                    <?php echo form_error('password'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="tribe">Tribe</label>
                                <select class="form-control <?php if(form_error('tribe')){ echo 'is-invalid';} ?>" value="<?php if(isset($tribe)){ echo $tribe; } else { echo set_value('tribe'); } ?>" name="tribe" id="tribe" data-toggle="select">
                                </select>
                                <div class="invalid-feedback">
                                    <?php echo form_error('tribe'); ?>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="role">Role</label>
                                <select class="form-control <?php if(form_error('role')){ echo 'is-invalid';} ?>" value="<?php if(isset($role)){ echo $role; } else { echo set_value('role'); } ?>"  name="role" id="role" data-toggle="select">
                                </select>
                                <div class="invalid-feedback">
                                    <?php echo form_error('role'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="email">Email</label>
                                <input type="email" class="form-control <?php if(form_error('email')){ echo 'is-invalid';} ?>" value="<?php if(isset($email)){ echo $email; } else { echo set_value('email'); }  ?>" id="email" name="email" placeholder="Email" required>
                                <div class="invalid-feedback">
                                    <?php echo form_error('email'); ?>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="phone">Phone</label>
                                <input type="text" class="form-control <?php if(form_error('phone')){ echo 'is-invalid';} ?>" value="<?php if(isset($phone)){ echo $phone; } else { echo set_value('phone'); }  ?>" id="phone" name="phone" placeholder="phone" required>
                                <div class="invalid-feedback">
                                    <?php echo form_error('phone'); ?>
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
    <script>
        $(document).ready(function(){
            var $tribe = $('#tribe').select2({
                ajax: {
                    url: "<?php echo base_url('tribe/select')?>",
                    dataType: 'json',
                    delay: 250,
                    processResults: function (data) {
                        return {
                            results: data
                        };
                    },
                    cache: true
                }
            });

            var $role = $('#role').select2({
                ajax: {
                    url: "<?php echo base_url('role/select')?>",
                    dataType: 'json',
                    delay: 250,
                    processResults: function (data) {
                        return {
                            results: data
                        };
                    },
                    cache: true
                }
            });

            var role = "<?php if(isset($role)){ echo $role; } else { echo set_value('role'); } ?>";
            if(role != ""){
                $.ajax({
                    url: "<?php echo base_url('role/get/')?>"+role, 
                    success: function(response){
                        if(response['response'] == "success"){
                            data = response['data'];
                            var $option = $('<option selected>'+data['name']+'</option>').val(data['id']);
                            $role.append($option).trigger('change');
                            $role.trigger('change');
                        }
                    }
                });
            }

            var tribe = "<?php if(isset($tribe)){ echo $tribe; } else { echo set_value('tribe'); } ?>";
            if(tribe != ""){
                $.ajax({
                    url: "<?php echo base_url('tribe/get/')?>"+role, 
                    success: function(response){
                        if(response['response'] == "success"){
                            data = response['data'];
                            var $option = $('<option selected>'+data['name']+'</option>').val(data['id']);
                            $tribe.append($option).trigger('change');
                            $tribe.trigger('change');
                        }
                    }
                });
            }

        });
    </script>