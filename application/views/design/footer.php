<!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Your Website 2023</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div
      class="modal fade"
      id="logoutModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered shadow" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button
              class="close"
              type="button"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true"><i class="fas fa-times"></i></span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button
              class="btn bg-grey1 btn-common"
              type="button"
              data-dismiss="modal"
            >
              Cancel
            </button>
            <a class="btn btn-common bg-black2" href="<?php echo URL;?>/Logout">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo JS;?>jquery.min.js"></script>
    <script src="<?php echo VEN;?>bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo JS;?>sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo VEN;?>jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo VEN;?>chart.js/Chart.min.js"></script>
    <script src="<?php echo VEN;?>datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo VEN;?>datatables/dataTables.bootstrap4.min.js"></script>
    
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo JS;?>demo/chart-area-demo.js"></script>
    <script src="<?php echo JS;?>demo/datatables-demo.js"></script>
  </body>
</html>
