<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Narasumber</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard');?>"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('narasumber');?>">Narasumber</a></li>
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
                    <h3 class="mb-0">Narasumber</h3>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <form class="needs-validation" method="POST" action="<?php if(isset($id)){echo base_url('narasumber/update/'.$id);} else {echo base_url('narasumber/form/');}?>">
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="name">Nama Lengkap</label>
                                <input type="text" class="form-control <?php if(form_error('name')){ echo 'is-invalid';} ?>" value="<?php if(isset($name)){ echo $name; } else { echo set_value('name'); } ?>" id="name" name="name" placeholder="Nama Lengkap" required>
                                <div class="invalid-feedback">
                                    <?php echo form_error('name'); ?>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="ktp">No.KTP</label>
                                <input type="text" class="form-control <?php if(form_error('ktp')){ echo 'is-invalid';} ?>" value="<?php if(isset($ktp)){ echo $ktp; } else { echo set_value('ktp'); } ?>" id="ktp" name="ktp" placeholder="No.KTP" required>
                                <div class="invalid-feedback">
                                    <?php echo form_error('ktp'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="npwp">NPWP</label>
                                <input type="text" class="form-control <?php if(form_error('npwp')){ echo 'is-invalid';} ?>" value="<?php if(isset($npwp)){ echo $npwp; } else { echo set_value('npwp'); } ?>" id="npwp" name="npwp" placeholder="NPWP" required>
                                <div class="invalid-feedback">
                                    <?php echo form_error('npwp'); ?>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="nip">NIP</label>
                                <input type="text" class="form-control <?php if(form_error('nip')){ echo 'is-invalid';} ?>" value="<?php if(isset($nip)){ echo $nip; } else { echo set_value('nip'); } ?>" id="nip" name="nip" placeholder="NIP" required>
                                <div class="invalid-feedback">
                                    <?php echo form_error('nip'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="institution">Instansi</label>
                                <select class="form-control <?php if(form_error('institution')){ echo 'is-invalid';} ?>" value="<?php if(isset($institution)){ echo $institution; } else { echo set_value('institution'); } ?>" name="institution" id="institution" data-toggle="select">
                                </select>
                                <div class="invalid-feedback">
                                    <?php echo form_error('institution'); ?>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="occupation">Jabatan</label>
                                <select class="form-control <?php if(form_error('occupation')){ echo 'is-invalid';} ?>" value="<?php if(isset($occupation)){ echo $occupation; } else { echo set_value('occupation'); } ?>" name="occupation" id="occupation" data-toggle="select">
                                </select>
                                <div class="invalid-feedback">
                                    <?php echo form_error('occupation'); ?>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="bank">Bank</label>
                                <select class="form-control <?php if(form_error('bank')){ echo 'is-invalid';} ?>" value="<?php if(isset($bank)){ echo $bank; } else { echo set_value('bank'); } ?>" name="bank" id="bank" data-toggle="select">
                                </select>
                                <div class="invalid-feedback">
                                    <?php echo form_error('bank'); ?>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="number">No.Rekening</label>
                                <input type="text" class="form-control <?php if(form_error('number')){ echo 'is-invalid';} ?>" value="<?php if(isset($number)){ echo $number; } else { echo set_value('number'); }  ?>" id="number" name="number" placeholder="No.Rekening" required>
                                <div class="invalid-feedback">
                                    <?php echo form_error('number'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="an">Nama Pada Rekening</label>
                                <input type="text" class="form-control <?php if(form_error('an')){ echo 'is-invalid';} ?>" value="<?php if(isset($an)){ echo $an; } else { echo set_value('an'); }  ?>" id="an" name="an" placeholder="Nama Pada Rekening" required>
                                <div class="invalid-feedback">
                                    <?php echo form_error('an'); ?>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="email">Email</label>
                                <input type="email" class="form-control <?php if(form_error('email')){ echo 'is-invalid';} ?>" value="<?php if(isset($email)){ echo $email; } else { echo set_value('email'); }  ?>" id="email" name="email" placeholder="Email" required>
                                <div class="invalid-feedback">
                                    <?php echo form_error('email'); ?>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="phone">No.Telepon</label>
                                <input type="text" class="form-control <?php if(form_error('phone')){ echo 'is-invalid';} ?>" value="<?php if(isset($phone)){ echo $phone; } else { echo set_value('phone'); }  ?>" id="phone" name="phone" placeholder="No.Telepon" required>
                                <div class="invalid-feedback">
                                    <?php echo form_error('phone'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="picture">Link Foto</label>
                                <input type="picture" class="form-control <?php if(form_error('picture')){ echo 'is-invalid';} ?>" value="<?php if(isset($picture)){ echo $picture; } else { echo set_value('picture'); }  ?>" id="picture" name="picture" placeholder="Link Foto" required>
                                <div class="invalid-feedback">
                                    <?php echo form_error('picture'); ?>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="cv">Link CV</label>
                                <input type="text" class="form-control <?php if(form_error('cv')){ echo 'is-invalid';} ?>" value="<?php if(isset($cv)){ echo $cv; } else { echo set_value('cv'); }  ?>" id="cv" name="cv" placeholder="Link CV" required>
                                <div class="invalid-feedback">
                                    <?php echo form_error('cv'); ?>
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
            var $bank = $('#bank').select2({
                ajax: {
                    url: "<?php echo base_url('bank/select')?>",
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

            var bank = "<?php if(isset($bank)){ echo $bank; } else { echo set_value('bank'); } ?>";
            if(bank != ""){
                $.ajax({
                    url: "<?php echo base_url('bank/get/')?>"+bank, 
                    success: function(response){
                        if(response['response'] == "success"){
                            data = response['data'];
                            var $option = $('<option selected>'+data['name']+'</option>').val(data['id']);
                            $bank.append($option).trigger('change');
                            $bank.trigger('change');
                        }
                    }
                });
            }

            var $institution = $('#institution').select2({
                ajax: {
                    url: "<?php echo base_url('instansi/select')?>",
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

            var institution = "<?php if(isset($institution)){ echo $institution; } else { echo set_value('institution'); } ?>";
            if(institution != ""){
                $.ajax({
                    url: "<?php echo base_url('instansi/get/')?>"+institution, 
                    success: function(response){
                        if(response['response'] == "success"){
                            data = response['data'];
                            var $option = $('<option selected>'+data['name']+'</option>').val(data['id']);
                            $institution.append($option).trigger('change');
                            $institution.trigger('change');
                        }
                    }
                });
            }

            var $occupation = $('#occupation').select2({
                ajax: {
                    url: "<?php echo base_url('occupation/select')?>",
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

            var occupation = "<?php if(isset($occupation)){ echo $occupation; } else { echo set_value('occupation'); } ?>";
            if(occupation != ""){
                $.ajax({
                    url: "<?php echo base_url('occupation/get/')?>"+occupation, 
                    success: function(response){
                        if(response['response'] == "success"){
                            data = response['data'];
                            var $option = $('<option selected>'+data['name']+'</option>').val(data['id']);
                            $occupation.append($option).trigger('change');
                            $occupation.trigger('change');
                        }
                    }
                });
            }

        });
    </script>