<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Meeting <?php echo ucwords($text);?></h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard');?>"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('meeting');?>">Meeting <?php echo ucwords($text);?></a></li>
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
                    <h3 class="mb-0">Meeting <?php echo ucwords($text);?></h3>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <form class="needs-validation" method="POST" action="<?php if(isset($id)){echo base_url('meeting/update/'.$text.'/'.$id);} else {echo base_url('meeting/form/'.$text);}?>">
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="name">Nama Meeting</label>
                                <input type="text" class="form-control <?php if(form_error('name')){ echo 'is-invalid';} ?>" value="<?php if(isset($name)){ echo $name; } else { echo set_value('name'); } ?>" id="name" name="name" placeholder="Nama Meeting" required>
                                <div class="invalid-feedback">
                                    <?php echo form_error('name'); ?>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="agenda">Agenda</label>
                                <input type="text" class="form-control <?php if(form_error('agenda')){ echo 'is-invalid';} ?>" value="<?php if(isset($agenda)){ echo $agenda; } else { echo set_value('agenda'); } ?>" id="agenda" name="agenda" placeholder="Agenda" required>
                                <div class="invalid-feedback">
                                    <?php echo form_error('agenda'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="mt">Tipe Meeting</label>
                                <select class="form-control" name="mt" id="mt" data-toggle="select" required>
                                    <?php
                                        if($text == 'internal'){
                                            echo '
                                                <option value="1">Meeting Tanpa Narasumber di Kantor</option>
                                                <option value="2">Meeting Tanpa Narasumber di Luar Kota (SPPD)</option>
                                                <option value="3">Meeting Dengan Narasumber di Kantor</option>
                                                <option value="4">Meeting Dengan Narasumber di Hotel Dalam Kota</option>
                                                <option value="5">Meeting Dengan Narasumber di Hotel Luar Kota (SPPD)</option>
                                            ';
                                        } else if($text == 'eksternal'){
                                            echo '
                                                <option value="6">Undangan Meeting di Kantor Dalam Kota/Online</option>
                                                <option value="7">Undangan Meeting di luar kota (SPPD)</option>
                                            ';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="mc">Kategori Meeting</label>
                                <select class="form-control" name="mc" id="mc" data-toggle="select" required>
                                    <?php
                                        if($text == 'internal'){
                                            echo '
                                                <option value="1">Rapat Rutin Tim Pelaksana</option>
                                                <option value="2">Rapat Tim Sekretariat</option>
                                                <option value="3">Rapat Koordinasi</option>
                                            ';
                                        } else if($text == 'eksternal'){
                                            echo '
                                                <option value="4">Rapat Eksternal</option>
                                            ';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-row internal">
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="moderator">Moderator</label>
                                <input type="text" class="form-control <?php if(form_error('moderator')){ echo 'is-invalid';} ?>" value="<?php if(isset($moderator)){ echo $moderator; } else { echo set_value('moderator'); } ?>" id="moderator" name="moderator" placeholder="Moderator" required>
                                <div class="invalid-feedback">
                                    <?php echo form_error('moderator'); ?>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="chairman">Pimpinan Rapat</label>
                                <input type="text" class="form-control <?php if(form_error('chairman')){ echo 'is-invalid';} ?>" value="<?php if(isset($chairman)){ echo $chairman; } else { echo set_value('chairman'); } ?>" id="chairman" name="chairman" placeholder="Pimpinan Rapat" required>
                                <div class="invalid-feedback">
                                    <?php echo form_error('chairman'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="location">Tempat</label>
                                <input type="text" class="form-control <?php if(form_error('location')){ echo 'is-invalid';} ?>" value="<?php if(isset($location)){ echo $location; } else { echo set_value('location'); } ?>" id="location" name="location" placeholder="Tempat" required>
                                <div class="invalid-feedback">
                                    <?php echo form_error('location'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="tribe">Tribe</label>
                                <select class="form-control" name="tribe" id="tribe" data-toggle="select">
                                    <?php
                                        echo '<option value="'.$session_tribe.'" selected>Tribe '.$session_tribe.'</option>';
                                    ?>
                                </select>
                                <div class="invalid-feedback">
                                    <?php echo form_error('tribe'); ?>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="link">Link Meeting</label>
                                <input type="text" class="form-control <?php if(form_error('link')){ echo 'is-invalid';} ?>" value="<?php if(isset($link)){ echo $link; } else { echo set_value('link'); } ?>" id="link" name="link" placeholder="Link Meeting" required>
                                <div class="invalid-feedback">
                                    <?php echo form_error('link'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3 eksternal">
                                <label class="form-control-label" for="host">Host</label>
                                <input type="text" class="form-control <?php if(form_error('host')){ echo 'is-invalid';} ?>" value="<?php if(isset($host)){ echo $host; } else { echo set_value('host'); } ?>" id="host" name="host" placeholder="host" required>
                                <div class="invalid-feedback">
                                    <?php echo form_error('host'); ?>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 eksternal">
                                <label class="form-control-label" for="assignment">Penugasan</label>
                                <select class="form-control <?php if(form_error('assignment')){ echo 'is-invalid';} ?>" name="assignment[]" id="assignment" data-toggle="select">
                                </select>
                                <div class="invalid-feedback">
                                    <?php echo form_error('assignment'); ?>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 internal">
                                <label class="form-control-label" for="at">Tipe Agenda</label>
                                <select class="form-control" name="at" id="at" data-toggle="select" required>
                                    <option value="1">Agenda Utama</option>
                                    <option value="2">Sub Agenda</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3 internal">
                                <label class="form-control-label" for="parent">Agenda Utama</label>
                                <select class="form-control <?php if(form_error('parent')){ echo 'is-invalid';} ?>" value="<?php if(isset($parent)){ echo $parent; } else { echo set_value('parent'); } ?>" name="parent" id="parent" data-toggle="select">
                                </select>
                                <div class="invalid-feedback">
                                    <?php echo form_error('parent'); ?>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="durasi">Durasi</label>
                                <select class="form-control" name="durasi" id="durasi" data-toggle="select" required>
                                    <option value="1">1 Hari</option>
                                    <option value="2" <?php if(isset($de)){ echo "selected"; }?>>Lebih dari 1 Hari</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="time">Pukul</label>
                                <input type="text" class="form-control <?php if(form_error('time')){ echo 'is-invalid';} ?>" value="<?php if(isset($time)){ echo $time; } else { echo set_value('time'); } ?>" id="time" name="time" placeholder="Pukul" required>
                                <div class="invalid-feedback">
                                    <?php echo form_error('time'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3 input-daterange datepicker">
                                <label class="form-control-label" for="ds">Tanggal Dimulai</label>
                                <input type="text" class="form-control datepicker <?php if(form_error('ds')){ echo 'is-invalid';} ?>" value="<?php if(isset($ds)){ echo $ds; } else { echo set_value('ds'); } ?>" id="ds" name="ds" placeholder="Tanggal Dimulai" required>
                                <div class="invalid-feedback">
                                    <?php echo form_error('ds'); ?>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 input-daterange datepicker">
                                <label class="form-control-label" for="de">Tanggal Berakhir</label>
                                <input type="text" class="form-control datepicker <?php if(form_error('de')){ echo 'is-invalid';} ?>" value="<?php if(isset($de)){ echo $de; } else { echo set_value('ds'); } ?>" id="de" name="de" placeholder="Tanggal Berakhir" required>
                                <div class="invalid-feedback">
                                    <?php echo form_error('de'); ?>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label class="form-control-label" for="tag">Tag</label>
                                <select class="form-control <?php if(form_error('tag')){ echo 'is-invalid';} ?>" name="tag[]" id="tag" data-toggle="select" multiple> 
                                </select>
                                <div class="invalid-feedback">
                                    <?php echo form_error('tag'); ?>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 internal">
                                <label class="form-control-label" for="speaker">Narasumber</label>
                                <select class="form-control <?php if(form_error('speaker')){ echo 'is-invalid';} ?>" name="speaker[]" id="speaker" data-toggle="select">
                                </select>
                                <div class="invalid-feedback">
                                    <?php echo form_error('speaker'); ?>
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
            var text = "<?php echo $text; ?>";
            if(text == "internal"){
                $('.eksternal').remove();
            } else if(text == "eksternal"){
                $('.internal').remove();
            }

            if($("#at").val() == "1"){
                $("#parent").prop('disabled', 'disabled');
            }

            $("#at").change(function () {
                var val = $(this).val();
                if (val == "1") {
                    $("#parent").prop('disabled', 'disabled');
                } else if (val == "2") {
                    $('#parent').removeAttr('disabled');
                }
            });

            if($("#durasi").val() == "1"){
                $("#de").prop('disabled', 'disabled');
            }

            $("#durasi").change(function () {
                var val = $(this).val();
                if (val == "1") {
                    $("#de").prop('disabled', 'disabled');
                } else if (val == "2") {
                    $('#de').removeAttr('disabled');
                }
            });
    
            var $parent = $('#parent').select2({
                ajax: {
                    url: "<?php echo base_url('meeting/select')?>",
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

            var $speaker = $('#speaker').select2({
                multiple:true,
                ajax: {
                    url: "<?php echo base_url('narasumber/select')?>",
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

            var $tag = $('#tag').select2({
                multiple:true,
                tags: true,
                ajax: {
                    url: "<?php echo base_url('tag/select')?>",
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

            var $assignment = $('#assignment').select2({
                multiple:true,
                ajax: {
                    url: "<?php echo base_url('user/select')?>",
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

            var at = "<?php if(isset($at)){ echo $at; } else { echo set_value('at'); } ?>";
            var mc = "<?php if(isset($mc)){ echo $mc; } else { echo set_value('mc'); } ?>";
            var mt = "<?php if(isset($mt)){ echo $mt; } else { echo set_value('mt'); } ?>";
            var de = "<?php if(isset($de)){ echo $de; } else { echo set_value('de'); } ?>";
            var parent = "<?php if(isset($parent)){ echo $parent; } else { echo set_value('parent'); } ?>";
            var tag = <?php if(isset($tag)){ echo  json_encode($tag); }?>;
            var speaker = <?php if(isset($speaker)){ echo  json_encode($speaker); }?>;
            var assignment = <?php if(isset($assignment)){ echo  json_encode($assignment); }?>;

            if(tag.length != 0){
                for(i=0; i<tag.length;i++){
                    var $option = $('<option selected>'+tag[i]['text']+'</option>').val(tag[i]['id']);
                    $tag.append($option).trigger('change');
                    $tag.trigger('change');
                }
            }

            if(speaker.length != 0){
                for(i=0; i<speaker.length;i++){
                    var $option = $('<option selected>'+speaker[i]['text']+'</option>').val(speaker[i]['id']);
                    $speaker.append($option).trigger('change');
                    $speaker.trigger('change');
                }
            }

            if(assignment.length != 0){
                for(i=0; i<assignment.length;i++){
                    var $option = $('<option selected>'+assignment[i]['text']+'</option>').val(assignment[i]['id']);
                    $assignment.append($option).trigger('change');
                    $assignment.trigger('change');
                }
            }

            if(at != ""){
                $("#at").val(at).change();
            }
            
            if(mc != ""){
                $("#mc").val(mc).change();
            }
            
            if(mt != ""){
                $("#mt").val(mt).change();
            }

            if(de != ""){
                $('#de').removeAttr('disabled');
            }

            if(parent != ""){
                $.ajax({
                    url: "<?php echo base_url('meeting/get/')?>"+parent+"/ajax", 
                    success: function(response){
                        if(response['response'] == "success"){
                            data = response['data'];
                            var $option = $('<option selected>'+data['name']+'</option>').val(data['id']);
                            $parent.append($option).trigger('change');
                            $parent.trigger('change');
                        }
                    }
                });
            }
        });
    </script>