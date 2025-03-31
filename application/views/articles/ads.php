<div class="content-wrapper-main">
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <!-- DataTables -->
                <div class="card shadow mb-4">
                    <div class="card-header pt-4 pb-3 d-flex justify-content-between align-items-center">
                        <h6 class="m-0">Ad Blocks for : "<?php echo $article['title'] ?>"</h6>
                    </div>
                    <form name="ads" method="POST" action="<?php echo current_url() ?>" >
                      <label for="">Block Text</label>

                      <textarea required class="form-control" name="blockText"></textarea>
                      <input class="btn-success" type="submit" name="Add" value="ADD" />
                    </form>
                    <hr/>
                    <div class="card-body">

                        <div class="table-responsive">
                            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table
                                            class="table table-striped dataTable table-responsive table-width table-ellipses"
                                            id="dataTable" width="100%" cellspacing="0" role="grid"
                                            aria-describedby="dataTable_info">
                                            <thead>


                                                <tr role="row">
                                                    <th id="clientProfile" class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="dataTable" rowspan="1" colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="Category: activate to sort column descending">
                                                        ID
                                                    </th>
                                                    <th id="clientProfile" class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="dataTable" rowspan="1" colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="Category: activate to sort column descending">
                                                        Block Text
`                                                    </th>

                                                    <th id="clientProfile" class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="dataTable" rowspan="1" colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="Category: activate to sort column descending">
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach($adsData as $ads){?>
                                                <tr>
                                                    <td><?php echo $ads['id'];?></td>
                                                    <td><?php echo $ads['title'];?></td>



                                                    <td>
                                                        <a class="dropdown-item" href="#"
                                                            onclick="deleteBlock(<?php echo $ads['id'];?>)">
                                                            <i class="fa-solid fa-trash me-2"></i>
                                                            <span>Delete</span>
                                                        </a>

                                                    </td>
                                                </tr>
                                                <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
</div>
</div>
</div>
<!-- End of Main Content -->
<script>
var BASE_URL = "<?php echo URL ?>";
function deleteBlock(adsId){
  $.post(BASE_URL+"/articles/blockDelete",
 {
   adsId: adsId
 },
 function(data, status){
   alert("deleted successfully");
   location.reload();
 });
}
</script>
