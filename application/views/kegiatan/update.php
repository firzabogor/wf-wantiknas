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
                <h3 class="mb-0">Custom styles</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-8">
                    <p class="mb-0">
                      For custom form validation messages, you’ll need to add the novalidate boolean attribute to your <code>&lt;form&gt;</code>. This disables the browser default feedback tooltips, but still provides access to the form
                      validation APIs in JavaScript.
                      <br /><br />
                      When attempting to submit, you’ll see the<code>:invalid</code> and <code>:valid</code> styles applied to your form controls.
                    </p>
                  </div>
                </div>
                <hr />
                <form class="needs-validation" method="POST" action="<?php echo base_url();?>kegiatan/change/<?php echo $no;?>" novalidate>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label class="form-control-label" for="nama_kegiatan">Nama Kegiatan</label>
                      <input type="text" class="form-control" id="nama_kegiatan" value="<?php echo $nama_kegiatan;?>" name="nama_kegiatan" placeholder="Nama Kegiatan" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-control-label" for="tipe_agenda">Tipe Agenda</label>
                        <select class="form-control" name="tipe_agenda" id="tipe_agenda" data-toggle="select" required>
                            <option value="Agenda Utama">Agenda Utama</option>
                            <option value="Sub Agenda">Sub Agenda</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-row">
                  <div class="col-md-6 mb-3">
                        <label class="form-control-label" for="tribe">Tribe</label>
                        <select class="form-control" name="tribe" id="tribe" data-toggle="select" required>
                            <option value="Tribe 1">Tribe 1</option>
                            <option value="Tribe 2">Tribe 2</option>
                            <option value="Tribe 3">Tribe 3</option>
                            <option value="Tribe 4">Tribe 4</option>
                            <option value="Tribe 5">Tribe 5</option>
                            <option value="Tribe 6">Tribe 6</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-control-label" for="agenda_utama">Agenda Utama</label>
                        <select class="form-control" name="agenda_utama" id="agenda_utama" data-toggle="select">
                            <option value="Agenda Utama">Agenda Utama</option>
                            <option value="Sub Agenda">Sub Agenda</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label class="form-control-label" for="tipe_meeting">Tipe Meeting</label>
                        <select class="form-control" name="tipe_meeting" id="tipe_meeting" data-toggle="select" required>
                            <option value="Meeting Tanpa Narasumber di Kantor">Meeting Tanpa Narasumber di Kantor</option>
                            <option value="Meeting Tanpa Narasumber di Luar Kota (SPPD)">Meeting Tanpa Narasumber di Luar Kota (SPPD)</option>
                            <option value="Meeting Dengan Narasumber di Kantor">Meeting Dengan Narasumber di Kantor</option>
                            <option value="Meeting Dengan Narasumber di Hotel Dalam Kota">Meeting Dengan Narasumber di Hotel Dalam Kota</option>
                            <option value="Meeting Dengan Narasumber di Hotel Luar Kota (SPPD)">Meeting Dengan Narasumber di Hotel Luar Kota (SPPD)</option>
                            <option value="Undangan Meeting di Kantor Dalam Kota/Online">Undangan Meeting di Kantor Dalam Kota/Online</option>
                            <option value="Undangan Meeting di luar kota (SPPD)">Undangan Meeting di luar kota (SPPD)</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-control-label" for="kategori_meeting">Kategori Meeting</label>
                        <select class="form-control" name="kategori_meeting" id="kategori_meeting" data-toggle="select" required>
                            <option value="Rapat Rutin Tim Pelaksana">Rapat Rutin Tim Pelaksana</option>
                            <option value="Rapat Tim Sekretariat">Rapat Tim Sekretariat</option>
                            <option value="Rapat Koordinasi">Rapat Koordinasi</option>
                            <option value="Rapat Eksternal">Rapat Eksternal</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label class="form-control-label" for="tanggal">Tanggal</label>
                        <input class="form-control datepicker" value="<?php echo $tanggal;?>" id="tanggal" name="tanggal" placeholder="Tanggal" type="text">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-control-label" for="pukul">Pukul</label>
                        <input type="text" class="form-control" id="pukul" value="<?php echo $pukul;?>" name="pukul" placeholder="Pukul" required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label class="form-control-label" for="tempat">Tempat</label>
                      <input type="text" class="form-control" id="tempat" name="tempat" value="<?php echo $tempat;?>" placeholder="Tempat" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-control-label" for="link_meeting">Link Meeting</label>
                      <input type="text" class="form-control" id="link_meeting" value="<?php echo $link_meeting;?>" name="link_meeting" placeholder="Link Meeting" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label class="form-control-label" for="pimpinan_rapat">Pimpinan Rapat</label>
                      <input type="text" class="form-control" id="pimpinan_rapat" value="<?php echo $pimpinan_rapat;?>" placeholder="Pimpinan Rapat" name="pimpinan_rapat" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-control-label" for="moderator">Moderator</label>
                      <input type="text" class="form-control" id="moderator" value="<?php echo $moderator;?>" placeholder="Moderator" name="moderator" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label class="form-control-label" for="agenda">Agenda Rapat</label>
                        <textarea class="form-control" name="agenda" id="agenda" rows="3"><?php echo $agenda;?></textarea>
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
      <script>
      $(document).ready(function() {
        $("#tipe_agenda").val("<?php echo $tipe_agenda;?>").change();
        $("#tipe_meeting").val("<?php echo $tipe_meeting;?>").change();
        $("#kategori_meeting").val("<?php echo $kategori_meeting;?>").change();
        $("#tribe").val("<?php echo $tribe;?>").change();
      });
      </script>