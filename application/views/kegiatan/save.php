<!-- Header -->
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Kegiatan</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="#">Kegiatan</a></li>
              <li class="breadcrumb-item active" aria-current="page">Save</li>
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
                <h3 class="mb-0">Kegiatan</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <form class="needs-validation" id="submit_kegiatan" method="POST" action="<?php echo base_url();?>kegiatan/insert" novalidate>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label class="form-control-label" for="nama_kegiatan">Nama Kegiatan</label>
                      <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" placeholder="Nama Kegiatan" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-control-label" for="agenda">Agenda</label>
                      <input type="text" class="form-control" id="agenda" placeholder="Agenda" name="agenda" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label class="form-control-label" for="tipe_agenda">Tipe Agenda</label>
                        <select class="form-control" name="tipe_agenda" id="tipe_agenda" data-toggle="select" required>
                            <option value="1" selected>Agenda Utama</option>
                            <option value="0">Sub Agenda</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-control-label" for="agenda_utama">Agenda Utama</label>
                        <select class="form-control" name="agenda_utama" id="agenda_utama" data-toggle="select">
                        </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label class="form-control-label" for="tipe_meeting">Tipe Meeting</label>
                        <select class="form-control" name="tipe_meeting" id="tipe_meeting" data-toggle="select" required>
                            <option value="1">Meeting Tanpa Narasumber di Kantor</option>
                            <option value="2">Meeting Tanpa Narasumber di Luar Kota (SPPD)</option>
                            <option value="3">Meeting Dengan Narasumber di Kantor</option>
                            <option value="4">Meeting Dengan Narasumber di Hotel Dalam Kota</option>
                            <option value="5">Meeting Dengan Narasumber di Hotel Luar Kota (SPPD)</option>
                            <option value="6">Undangan Meeting di Kantor Dalam Kota/Online</option>
                            <option value="7">Undangan Meeting di luar kota (SPPD)</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-control-label" for="kategori_meeting">Kategori Meeting</label>
                        <select class="form-control" name="kategori_meeting" id="kategori_meeting" data-toggle="select" required>
                            <option value="1">Rapat Rutin Tim Pelaksana</option>
                            <option value="2">Rapat Tim Sekretariat</option>
                            <option value="3">Rapat Koordinasi</option>
                            <option value="4">Rapat Eksternal</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label class="form-control-label" for="tanggal">Tanggal</label>
                        <input class="form-control datepicker" id="tanggal" name="tanggal" placeholder="Tanggal" type="text">
                    </div>
                    <div class="col-md-6 mb-3">
                      <!-- Or just a input -->
                      <label class="form-control-label" for="pukul">Pukul</label>
                      <input class="form-control" name="pukul" id="demo-input" placeholder="Pukul"/>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label class="form-control-label" for="tempat">Tempat</label>
                      <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Tempat" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-control-label" for="link_meeting">Link Meeting</label>
                      <input type="text" class="form-control" id="link_meeting" name="link_meeting" placeholder="Link Meeting" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label class="form-control-label" for="pimpinan_rapat">Pimpinan Rapat</label>
                      <input type="text" class="form-control" id="pimpinan_rapat" placeholder="Pimpinan Rapat" name="pimpinan_rapat" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-control-label" for="moderator">Moderator</label>
                      <input type="text" class="form-control" id="moderator" placeholder="Moderator" name="moderator" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label class="form-control-label" for="narasumber">Narasumber</label>
                      <select class="form-control" name="narasumber[]" id="narasumber" data-toggle="select">
                      </select>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-control-label" for="tag">Tag</label>
                      <input type="text" class="form-control" id="tag" placeholder="Tag" name="tag[]" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
                  <button class="btn btn-primary" type="submit">Save</button>
                </form>
              </div>
            </div>
        </div>
    </div>


      <!-- Optional JS -->
      <script src="<?php echo asset_url();?>vendor/select2/dist/js/select2.min.js"></script>
      <script src="<?php echo asset_url();?>vendor/datatables.net/js/jquery.dataTables.min.js"></script>
      <script src="<?php echo asset_url();?>vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
      <script src="<?php echo asset_url();?>vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
      <script src="<?php echo asset_url();?>vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
      <script src="<?php echo asset_url();?>vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
      <script src="<?php echo asset_url();?>vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
      <script src="<?php echo asset_url();?>vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
      <script src="<?php echo asset_url();?>vendor/datatables.net-select/js/dataTables.select.min.js"></script>
      <script src="<?php echo asset_url();?>vendor/sweetalert2/dist/sweetalert2.min.js"></script>
      <script src="<?php echo asset_url();?>vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
      <script src="<?php echo asset_url();?>vendor/quill/dist/quill.min.js"></script>
      <script src="<?php echo asset_url();?>vendor/clockpicker/dist/bootstrap-clockpicker.min.js"></script>
      <script>
        $('.clockpicker').clockpicker()
          .find('input').change(function(){
            // TODO: time changed
            console.log(this.value);
          });
        $('#demo-input').clockpicker({
          autoclose: true
        });

        $(document).ready(function() {
          if($("#tipe_agenda").val() == "1"){
            $("#agenda_utama").prop('disabled', 'disabled');
          }
          $("#tipe_agenda").change(function () {
            var val = $(this).val();
            if (val == "1") {
              $("#agenda_utama").prop('disabled', 'disabled');
            } else if (val == "0") {
              $('#agenda_utama').removeAttr('disabled');
            }
          });

          $('#agenda_utama').select2({
          ajax: {
            url: "<?php echo base_url('kegiatan/select')?>",
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


        $('#narasumber').select2({
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

          
        });
      </script>