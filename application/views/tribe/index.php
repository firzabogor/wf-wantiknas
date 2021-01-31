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
                            <li class="breadcrumb-item active"><a href="<?php echo base_url('tribe');?>">Tribe</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="<?php echo base_url('tribe/form');?>" class="btn btn-sm btn-neutral">New</a>
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
                <div class="table-responsive py-4">
                    <table class="table table-flush" id="tribe" style="width:100%">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tanggung Jawab</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody> 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Optional JS -->
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

        function delete_tribe(e,id){
            e.preventDefault();
            $.ajax({
                url:"<?php echo base_url('tribe/delete/');?>"+id,
                type:'DELETE',
                success:function(data){
                    if(data == "success"){
                        table.ajax.reload();
                    }
                }
            }); 
            return false;
        }

        $(document).ready(function(){
            table = $('#tribe').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": true,
                "order": [[ 0, 'asc' ]],
                "ajax": {
                    "url": "<?php echo base_url('tribe/datatables') ?>",
                    "type": "POST"
                },
                "deferRender": true,
                "aLengthMenu": [[5, 10, 50],[ 5, 10, 50]],
                "columns": [
                    { "data": "id" },
                    { "data": "name" },
                    { "data": "responsibility" },
                    { "render": function ( data, type, row ) {
                            var html  =`<div class="dropdown">
                                            <a style="height:12px" class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="<?php echo base_url('tribe/update/')?>`+row.id+`">Update</a>
                                                <a class="dropdown-item" href="#" onclick="delete_tribe(event,`+row.id+`)">Delete</a>
                                            </div>
                                        </div>`;
                            return html
                        }
                    },
                ],
                "language": {
                    "paginate": {
                        "next": '<i class="fas fa-angle-right"></i>',
                        "previous": '<i class="fas fa-angle-left"></i>' 
                    }
                }
            });
        });
    </script>