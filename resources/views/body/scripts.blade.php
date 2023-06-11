  <!-- Vendor js -->
  <script src="{{ asset('backend/assets/js/vendor.min.js') }}"></script>

  <!-- Plugins js-->
  <script src="{{ asset('backend/assets/libs/flatpickr/flatpickr.min.js') }}"></script>
  <script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

  <script src="{{ asset('backend/assets/libs/selectize/js/standalone/selectize.min.js') }}"></script>

  <!-- Dashboar 1 init js-->
  <script src="{{ asset('backend/assets/js/pages/dashboard-1.init.js') }}"></script>

  <!-- App js-->
  <script src="{{ asset('backend/assets/js/app.min.js') }}"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <script>
        @if(Session::has('message'))
            var type = "{{ Session::get('alert-type','info') }}"
            switch(type){
                case 'info':
                toastr.info(" {{ Session::get('message') }} ");
                break;
                case 'success':
                toastr.success(" {{ Session::get('message') }} ");
                break;
                case 'warning':
                toastr.warning(" {{ Session::get('message') }} ");
                break;
                case 'error':
                toastr.error(" {{ Session::get('message') }} ");
                break;
            }
        @endif
  </script>

   <!-- datatables js -->
   <script src="{{ asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
   <script src="{{ asset('backend/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
   <script src="{{ asset('backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
   <script src="{{ asset('backend/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
   <script src="{{ asset('backend/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
   <script src="{{ asset('backend/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
   <script src="{{ asset('backend/assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
   <script src="{{ asset('backend/assets/libs/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
   <script src="{{ asset('backend/assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
   <script src="{{ asset('backend/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
   <script src="{{ asset('backend/assets/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>
   <script src="{{ asset('backend/assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
   <script src="{{ asset('backend/assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
   <!-- third party js ends -->

   <script src="{{ asset('backend/assets/js/pages/datatables.init.js') }}"></script>
    <!-- Datatables Eend -->


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('backend/assets/js/code.js') }}"></script>
    <script src="{{ asset('backend/assets/js/validate.min.js') }}"></script>

</body>
</html>
