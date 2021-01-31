<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Bank</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard');?>"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active"><a href="<?php echo base_url('bank');?>">Bank</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="#" class="btn btn-sm btn-neutral" onclick="open_form()">New</a>
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
                    <h3 class="mb-0">Bank</h3>
                </div>
                <div class="table-responsive py-4">
                    <table class="table table-flush" id="bank" style="width:100%">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
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

    <!-- Modals -->
    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-default">Bank</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" style="padding-top:0px">
                    <form id="form-input" action="" method="post">
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label class="form-control-label" for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                            </div>
                        </div>
                        <button class="btn btn-primary" id="submit" type="submit"></button>
                    </form>
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

        function open_form(id = null){
            $("#modal-form").modal("show");
            if(id == null){
                var link = "<?php echo base_url('bank/post'); ?>";
                $("#form-input").attr('action', link);
                $("#submit").html("Create");
            } else {
                var link = "<?php echo base_url('bank/put/'); ?>"+id;
                $("#form-input").attr('action', link);
                $("#submit").html("Update");
                $.ajax({
                    url:"<?php echo base_url('bank/get/');?>"+id,
                    type:'GET',
                    success:function(data){
                        if(data['response'] == 'success'){
                            $('#name').val(data['data']['name']);
                        }
                    }
                }); 
            }
        }
        
        $('#form-input').on('submit',function(e){
            e.preventDefault();
            $form = $(this);
            var data = $('#form-input').serialize();
            $.ajax({
                url: $form.attr('action'),
                type: 'POST',
                data: data,
                success:function(response){
                    table.ajax.reload();
                    $('#form-input').trigger("reset");
                    $('#modal-form').modal('toggle');
                }
            }); 
            return false;
        });

        function delete_bank(e,id){
            e.preventDefault();
            $.ajax({
                url:"<?php echo base_url('bank/delete/');?>"+id,
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
            table = $('#bank').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": true,
                "order": [[ 0, 'asc' ]],
                "ajax": {
                    "url": "<?php echo base_url('bank/datatables') ?>",
                    "type": "POST"
                },
                "deferRender": true,
                "aLengthMenu": [[5, 10, 50],[ 5, 10, 50]],
                "columns": [
                    { "data": "id" },
                    { "data": "name" },
                    { "render": function ( data, type, row ) {
                            var html  =`<div class="dropdown">
                                            <a style="height:12px" class="btn btn-sm btn-icon-only text-light" href="#" bank="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#" onclick="open_form(`+row.id+`)">Update</a>
                                                <a class="dropdown-item" href="#" onclick="delete_bank(event,`+row.id+`)">Delete</a>
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