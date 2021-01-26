<!-- Header -->
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Narasumber</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="#">Narasumber</a></li>
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
                <h3 class="mb-0">Narasumber</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <form class="needs-validation" id="submit_narasumber" method="POST" action="<?php echo base_url();?>narasumber/insert" novalidate>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label class="form-control-label" for="nama">Nama Lengkap</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-control-label" for="foto">Link Foto</label>
                      <input type="text" class="form-control" id="foto" name="foto" placeholder="Link Foto" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label class="form-control-label" for="telepon">No.Telepon</label>
                      <input type="text" class="form-control" id="telepon" placeholder="No.Telepon" name="telepon" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-control-label" for="email">Email</label>
                      <input type="text" class="form-control" id="email" placeholder="Email" name="email" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" style="display:none" id="hiddenArea"></textarea>
                    <div id="deskripsi" style="height:150px"></div>
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
        var quill = new Quill('#deskripsi', {
          modules: {
            toolbar: [
              ['bold', 'italic'],
              ['link', 'blockquote', 'code-block', 'image'],
              [{ list: 'ordered' }, { list: 'bullet' }]
            ]
          },
          placeholder: 'Deskripsi',
          theme: 'snow'
        });

        $("#submit_narasumber").on("submit",function(){
          $("#hiddenArea").val(quill.container.firstChild.innerHTML);
        });
      </script>