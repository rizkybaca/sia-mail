<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.11.5/af-2.3.7/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/cr-1.5.5/date-1.1.2/fc-4.0.2/fh-3.2.2/kt-2.6.4/r-2.2.9/rg-1.1.4/rr-1.2.8/sc-2.0.5/sb-1.3.2/sp-2.0.0/sl-1.3.4/sr-1.1.0/datatables.min.js"></script>

<script>
        $(document).ready( function () {
            $('#a').DataTable();

            // var jenjang_id=$("#jenjang_id").val();
            // $.ajax({
            //     type: 'POST',
            //     url: "../helper/index_pelajaran_kelas.php",
            //     data:{kelas_id: kelas_id},
            //     cache: false, 
            //     success: function(msg){
            //         console.log(msg);
            //         $("#pelajaran_id").html(msg);
            //     }
            // });

            $("#kelas_id").change(function(){
            var kelas_id=$("#kelas_id").val();
                $.ajax({
                    type:'POST',
                    url:"../helper/index_pelajaran_kelas.php",
                    data:{kelas_id: kelas_id},
                    cache:false,
                    success:function(msg){
                        // console.log(msg);
                        $("#pelajaran_id").html(msg);
                    }
                });
            });

        } );
</script>

</body>

</html>