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
              <li class="breadcrumb-item active"><a href="#">Narasumber</a></li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <a href="narasumber/save" class="btn btn-sm btn-neutral">New</a>
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
            <div class="table-responsive py-4">
              <table class="table table-flush" id="example" style="width:100%">
                <thead class="thead-light">
                      <tr>
                          <th></th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Telepon</th>
                          <th>Foto</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                          <th></th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Telepon</th>
                          <th>Foto</th>
                          <th>Action</th>
                      </tr>
                  </tfoot>
              </table>
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
            var table = null;
            function delete_kegiatan(e,no){
              e.preventDefault();
              console.log(no);
              var base_url='<?php echo base_url(); ?>'
              $.ajax({
                url:base_url+'narasumber/delete/'+no,
                type:'DELETE',
                success:function(data){
                  table.ajax.reload();
                }
              }); 
              return false;
            }
        /* Formatting function for row details - modify as you need */
        function format ( d ) {
            // `d` is the original data object for the row
            return '<table>'+
                      '<tr>'+
                          '<td style="width:10px;letter-spacing: 1px;font-weight: 600;font-size: .65rem;color:#8898aa;text-transform: uppercase;width: 20px;">Deskripsi</td>'+ 
                          '<td id="deskripsi_narasumber">'+d.deskripsi+'</td>'+
                      '</tr>'+
                  '</table>';
        }
        var baseurl = "<?php echo base_url() ?>";
        $(document).ready(function() {
            table = $('#example').DataTable({
              "processing": true,
              "serverSide": true,
              "ordering": true, // Set true agar bisa di sorting
              "order": [[ 0, 'asc' ]], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
              "ajax": {
                "url": "<?php echo base_url('narasumber/view') ?>", // URL file untuk proses select datanya
                "type": "POST"
              },
              "deferRender": true,
              "aLengthMenu": [[5, 10, 50],[ 5, 10, 50]], // Combobox Limit
              "columns": [
                    {
                        'className':      'details-control',
                        'orderable':      false,
                        'data':           null,
                        'defaultContent': ''
                    },
                    { "data": "nama" },  // Tampilkan nama
                    { "data": "email" }, // Tampilkan telepon
                    { "data": "telepon" }, // Tampilkan alamat
                    { "data": "foto" }, // Tampilkan alamat
                    { "render": function ( data, type, row ) {
                      var html  =`<div class="dropdown">
                                    <a style="height:12px" class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="fas fa-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                      <a class="dropdown-item" href="`+baseurl+`narasumber/update/`+row.no+`">Update</a>
                                      <a class="dropdown-item" href="#" onclick="delete_kegiatan(event,`+row.no+`)">Delete</a>
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
            } );

            // Add event listener for opening and closing details
            $('#example tbody').on('click', 'td.details-control', function(){
                var tr = $(this).closest('tr');
                var row = table.row( tr );

                if(row.child.isShown()){
                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');
                } else {
                    // Open this row
                    row.child(format(row.data())).show();
                    tr.addClass('shown');
                }
            });

            // Handle click on "Expand All" button
            $('#btn-show-all-children').on('click', function(){
                // Enumerate all rows
                table.rows().every(function(){
                    // If row has details collapsed
                    if(!this.child.isShown()){
                        // Open this row
                        this.child(format(this.data())).show();
                        $(this.node()).addClass('shown');
                    }
                });
            });

            // Handle click on "Collapse All" button
            $('#btn-hide-all-children').on('click', function(){
                // Enumerate all rows
                table.rows().every(function(){
                    // If row has details expanded
                    if(this.child.isShown()){
                        // Collapse row details
                        this.child.hide();
                        $(this.node()).removeClass('shown');
                    }
                });
            });
        });
      </script>