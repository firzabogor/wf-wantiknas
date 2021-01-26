<!-- Header -->
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Users</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item active"><a href="#">Users</a></li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <a href="#" class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#modal-default">New</a>
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
            <div class="table-responsive py-4">
              <table class="table table-flush" id="example" style="width:100%">
                <thead class="thead-light">
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No.Telepon</th>
                    <th>Jabatan</th>
                    <th>Tribe</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No.Telepon</th>
                    <th>Jabatan</th>
                    <th>Tribe</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      
      <!-- Modals -->
      <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h6 class="modal-title" id="modal-title-default">User Information</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body" style="padding-top:0px">
            <form class="needs-validation" id="myForm" method="post">
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label class="form-control-label" for="name">Nama Lengkap</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nama Lengkap" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                  <label class="form-control-label" for="role">Jabatan</label>
                  <select class="form-control" name="role" id="role" data-toggle="select" required>
                      <option value="1">Direktur Eksekutif</option>
                      <option value="2">Sekretaris Sekretariat</option>
                      <option value="3">Tribe Leader</option>
                      <option value="4">Tenaga Ahli</option>
                      <option value="5">Asisten TA (Konten)</option>
                      <option value="6">Asisten TA (Administrasi)</option>
                      <option value="7">Humas</option>
                      <option value="8">Design Grafis</option>
                      <option value="9">Administrasi Keuangan</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                  <label class="form-control-label" for="tribe">Tribe</label>
                  <select class="form-control" name="tribe" id="tribe" data-toggle="select" required>
                      <option value="-">-</option>
                      <option value="1">Tribe 1</option>
                      <option value="2">Tribe 2</option>
                      <option value="3">Tribe 3</option>
                      <option value="4">Tribe 4</option>
                      <option value="5">Tribe 5</option>
                      <option value="6">Tribe 6</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label class="form-control-label" for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label class="form-control-label" for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label class="form-control-label" for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                  </div>
                </div>
                <button class="btn btn-primary" id="submit" type="submit">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>


      <!-- Modals -->
      <div class="modal fade" id="modal-update" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h6 class="modal-title" id="modal-title-default">User Information</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body" style="padding-top:0px">
              <form class="needs-validation" action="" id="updateForm" method="post">
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label class="form-control-label" for="name">Nama Lengkap</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nama Lengkap" required>
                  </div>
                </div>
                <div class="form-row">
                <div class="col-md-12 mb-3">
                <label class="form-control-label" for="role">Jabatan</label>
                <select class="form-control" name="role" id="role_update" data-toggle="select" required>
                    <option value="1">Direktur Eksekutif</option>
                    <option value="2">Sekretaris Sekretariat</option>
                    <option value="3">Tribe Leader</option>
                    <option value="4">Tenaga Ahli</option>
                    <option value="5">Asisten TA (Konten)</option>
                    <option value="6">Asisten TA (Administrasi)</option>
                    <option value="7">Humas</option>
                    <option value="8">Design Grafis</option>
                    <option value="9">Administrasi Keuangan</option>
                  </select>
                </div>
                </div>
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                  <label class="form-control-label" for="tribe">Tribe</label>
                  <select class="form-control" name="tribe" id="tribe_update" data-toggle="select" required>
                      <option value="-">-</option>
                      <option value="1">Tribe 1</option>
                      <option value="2">Tribe 2</option>
                      <option value="3">Tribe 3</option>
                      <option value="4">Tribe 4</option>
                      <option value="5">Tribe 5</option>
                      <option value="6">Tribe 6</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label class="form-control-label" for="status">Status</label>
                  <select class="form-control" name="active" id="status" data-toggle="select" required>
                    <option value="1">Active</option>
                    <option value="0">Not Active</option>
                  </select>
                </div>
                </div>
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label class="form-control-label" for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label class="form-control-label" for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" required>
                  </div>
                </div>
                <button class="btn btn-primary" id="submit" type="submit">Update</button>
                </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Modals -->
      <div class="modal fade" id="modal-password" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h6 class="modal-title" id="modal-title-default">Change Password</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body" style="padding-top:0px">
              <form class="needs-validation" action="" id="passwordForm" method="post">
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label class="form-control-label" for="name">New Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="New Password" required>
                  </div>
                </div>
                <button class="btn btn-primary" id="submit" type="submit">Change Password</button>
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

      <script>
        var tabel = null;

        function delete_user(e,no){
          e.preventDefault();
          var base_url='<?php echo base_url(); ?>'
          $.ajax({
            url:base_url+'user/delete/'+no,
            type:'DELETE',
            success:function(data){
              tabel.ajax.reload();
            }
          }); 
          return false;
        }

        function show_user(no){
          var base_url='<?php echo base_url(); ?>'
          $.ajax({
            url:base_url+'user/get/'+no,
            type:'GET',
            success:function(data){
              $("#updateForm #name").val(data[0]['name']);
              $("#updateForm #email").val(data[0]['email']);
              $("#updateForm #phone").val(data[0]['phone']);
              $("#updateForm").attr('action',base_url+'user/update/'+no);
              $("#updateForm #role_update").val(data[0]['role']).change();
              $("#updateForm #status").val(data[0]['active']).change();
              $("#updateForm #tribe_update").val(data[0]['tribe']).change();
            }
          }); 
          $("#modal-update").modal("show");
        }

        function show_password(no){
          var base_url='<?php echo base_url(); ?>'
          $("#passwordForm").attr('action',base_url+'user/change/'+no);
          $("#modal-password").modal("show");
        }

        $(document).ready(function() {

          tabel = $('#example').DataTable({
            "processing": true,
            "serverSide": true,
            "ordering": true, // Set true agar bisa di sorting
            "order": [[ 0, 'asc' ]], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
            "ajax": {
              "url": "<?php echo base_url('auth/view') ?>", // URL file untuk proses select datanya
              "type": "POST"
            },
            "deferRender": true,
            "aLengthMenu": [[5, 10, 50],[ 5, 10, 50]], // Combobox Limit
            "columns": [
                  { "data": "no" },  // Tampilkan nama
                  { "data": "name" }, // Tampilkan telepon
                  { "data": "email" }, // Tampilkan alamat
                  { "data": "phone" }, // Tampilkan alamat
                  { "data": "role" }, // Tampilkan alamat
                  { "data": "tribe" }, // Tampilkan alamat
                  { "data": "active" }, // Tampilkan alamat
                  { "render": function ( data, type, row ) {
                    var html  =`<div class="dropdown">
                                  <a style="height:12px" class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="#" onclick="show_user(`+row.no+`)">Update</a>
                                    <a class="dropdown-item" href="#" onclick="delete_user(event,`+row.no+`)">Delete</a>
                                    <a class="dropdown-item" href="#" onclick="show_password(`+row.no+`)">Change Password</a>
                                  </div>
                                </div>`;
                        return html
                    }
                  },
              ],
            "language": {
              "paginate": {
                "next": '<i class="fas fa-angle-right"></i>', // or '→'
                "previous": '<i class="fas fa-angle-left"></i>' // or '←' 
              }
            }
          });

          $('#myForm').on('submit',function(e){
            e.preventDefault();
            var data = $('#myForm').serialize();
            var base_url='<?php echo base_url(); ?>'
            $.ajax({
              url:base_url+'auth/save',
              type:'POST',
              data:data,
              success:function(data){
                tabel.ajax.reload();
                $('#myForm').trigger("reset");
                $('#modal-default').modal('toggle');
                swal("Success", "A few words about this sweet alert ...", "success");
              }
            }); 
            return false;
          });

          $('#updateForm').on('submit',function(e){
            e.preventDefault();
            var update = $('#updateForm').serialize();
            var base_url= $('#updateForm').attr('action');
            $.ajax({
              url:base_url,
              type:'POST',
              data:update,
              success:function(data){
                tabel.ajax.reload();
                $('#updateForm').trigger("reset");
                $('#modal-update').modal('toggle');
                swal("Success", "A few words about this sweet alert ...", "success");
              }
            }); 
            return false;
          });

          $('#passwordForm').on('submit',function(e){
            e.preventDefault();
            var password = $('#passwordForm').serialize();
            var base_url= $('#passwordForm').attr('action');
            $.ajax({
              url:base_url,
              type:'POST',
              data:password,
              success:function(data){
                tabel.ajax.reload();
                $('#passwordForm').trigger("reset");
                $('#modal-password').modal('toggle');
                swal("Success", "A few words about this sweet alert ...", "success");
              }
            }); 
            return false;
          });
        });
      </script>