<!DOCTYPE html>
<html lang="en">

<?php //$this->db = \Config\Database::connect();
// $this->com_id = session('login')['com_id'];
// $this->id = session('login')['id']; 
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    LW | DASHBOARD </title>

  <!-- favicon -->
  <link rel="icon" type="image/png" href="https://Login.loyalwings.com/uploads/company_logo/favicon.png">

  <!-- Side bar -->
  <link href="https://Login.loyalwings.com/assets/css/sidebar.css" rel="stylesheet">

  <!-- icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--jquery-->
  <script type="text/javascript" src="https://Login.loyalwings.com/assets/js/jquery-3.3.1.js"></script>

  <!--moment js-->
  <script type="text/javascript" src="https://Login.loyalwings.com/assets/js/moment.js"></script>

  <!--Bootstrap 5 CSS--->
  <link rel="stylesheet" type="text/css" href="https://Login.loyalwings.com/assets/Bootstrap5/css/bootstrap.min.css">

  <!--Bootstrap Icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">

  <!--Bootstrap 5 JS--->
  <script type="text/javascript" src="https://Login.loyalwings.com/assets/Bootstrap5/js/bootstrap.bundle.min.js"></script>

  <!--datatables CSS--->
  <link rel="stylesheet" type="text/css" href="https://Login.loyalwings.com/assets/datatables/css/datatables.min.css">
  <link rel="stylesheet" type="text/css" href="https://Login.loyalwings.com/assets/datatables/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://Login.loyalwings.com/assets/datatables/css/buttons.dataTables.min.css">

  <!-- drag -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
  <script src="https://kit.fontawesome.com/de952d599f.js" crossorigin="anonymous"></script>

  <!--Datatables js-->
  <script type="text/javascript" src="https://Login.loyalwings.com/assets/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://Login.loyalwings.com/assets/js/dataTables.responsive.min.js"></script>

  <!--Datatable dropdown----->
  <script type="text/javascript" src="https://Login.loyalwings.com/assets/js/datatables.pdfmake.min.js"></script>
  <script type="text/javascript" src="https://Login.loyalwings.com/assets/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="https://Login.loyalwings.com/assets/js/datatables.vfs_fonts.js"></script>
  <script type="text/javascript" src="https://Login.loyalwings.com/assets/js/datatables.jszip.min.js"></script>
  <script type="text/javascript" src="https://Login.loyalwings.com/assets/js/buttons.html5.min.js"></script>
  <script type="text/javascript" src="https://Login.loyalwings.com/assets/js/buttons.print.min.js"></script>

  <!--Dropdown select-->
  <link rel="stylesheet" href="https://Login.loyalwings.com/assets/Bootstrap5/css/bootstrap-select.min.css">
  <script src="https://Login.loyalwings.com/assets/Bootstrap5/js/bootstrap-select.min.js"></script>

  <!-- Toastr -->
  <link rel="stylesheet" href="https://Login.loyalwings.com/assets/css/toastr.min.css">
  <script src="https://Login.loyalwings.com/assets/js/toastr.min.js"></script>

  <!--form validation files-->
  <script src="https://Login.loyalwings.com/assets/js/formValidation.min.js"></script>
  <script src="https://Login.loyalwings.com/assets/js/bootstrap_validation.min.js"></script>

  <!--Dropdown select-->

  <link rel="stylesheet" href="https://Login.loyalwings.com/assets/Bootstrap5/css/select2.min.css">
  <script src="https://Login.loyalwings.com/assets/Bootstrap5/js/select2.min.js"></script>

  <!--summernote-->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

  <!-- datepicker -->
  <link rel="stylesheet" href="https://Login.loyalwings.com/assets/datepicker/bootstrap-datepicker.standalone.min.css">
  <script src="https://Login.loyalwings.com/assets/datepicker/bootstrap-datepicker.min.js"></script>

  <!-- jquery confirm -->
  <link rel="stylesheet" href="https://Login.loyalwings.com/assets/jquery-confirm/jquery-confirm.min.css">
  <script src="https://Login.loyalwings.com/assets/jquery-confirm/jquery-confirm.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
  <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
  <!--<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>-->
  <!--<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />-->

  <!--main style css-->
  <link rel="stylesheet" href="https://Login.loyalwings.com/assets/css/style.css">

  <!-- this is for journal entry  -->
  <script src="https://bossanova.uk/jspreadsheet/v4/jexcel.js"></script>
  <script src="https://jsuites.net/v4/jsuites.js"></script>
  <link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />
  <link rel="stylesheet" href="https://bossanova.uk/jspreadsheet/v4/jexcel.css" type="text/css" />
  <!-- this is for journal entry  -->

  <!-- ctrl+v dropzone -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js" type="text/javascript"></script>

  <!--date range picker-->
  <link rel="stylesheet" href="https://Login.loyalwings.com/assets/css/daterangepicker.css">
  <script src="https://Login.loyalwings.com/assets/js/daterangepicker.min.js"></script>

  <!-- new file upload -->
  <link rel="stylesheet" href="https://Login.loyalwings.com/assets/file_upload/file_upload_style.css">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet" />

  <!-- Include Date Range Picker -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
  <!--Sidebar-->
  <script src="https://Login.loyalwings.com/assets/js/nav_notification.js"></script>
  <script src="https://Login.loyalwings.com/assets/js/nav_script.js"></script>
  <!--image navbar-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.2.0/tailwind.min.css" />


  <!--tab/accordion-->
  <link rel="stylesheet" href="https://Login.loyalwings.com/assets/css/activity.css">
  <link rel="stylesheet" href="https://Login.loyalwings.com/assets/css/tab.css">

  <!-- CRM -->
  <link href="https://Login.loyalwings.com/assets/css/CRM.css" rel="stylesheet">
  <!-- Include ApexCharts library -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

  <!--payroll-->
  <!--<link rel="stylesheet" type="text/css" href="https://Login.loyalwings.com/assets/css/payroll/employee.css">-->
  <!--<link rel="stylesheet" type="text/css" href="https://Login.loyalwings.com/assets/css/payroll/advance.css">-->
  <link rel="stylesheet" type="text/css" href="https://Login.loyalwings.com/assets/css/payroll/deduction.css">
  <link rel="stylesheet" type="text/css" href="https://Login.loyalwings.com/assets/css/payroll/newpayroll.css">

  <!--<link rel="stylesheet" type="text/css" href="https://Login.loyalwings.com/assets/css/payroll/payrun.css">-->
  <!--<link rel="stylesheet" type="text/css" href="https://Login.loyalwings.com/assets/css/payroll/setting.css">-->



  <!-- barchart script cdn -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <style>
    .help-block {
      margin-left: 10px;
      color: red;
    }

    .acctb {
      margin-bottom: -20px !important;
    }
  </style>

</head>
<body>
  <?php echo view('template/navbar');?>
    <div class="container-fluid">
        <div class="row">
            <div id="first_col" class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <h1>Payments</h1>

                                <div class="button_su">
                                    

                                    <span class="su_button_circle">
                                    

                                    </span>
                                    <button type="button" class="hrbtns contractbtn addbttn" onclick="showModal('<?= base_url() ?>payments/add','ADD Customers')"> <span class="button_text_container">
                                            <i class="fa fa-plus"></i> ADD
                                        </span></button>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="demo-html mt-0">
                                    <table class="example display dataTable display responsive nowrap tblalign table borderless" style="width: 100%" id="example" aria-describedby="example_info">
                                        <thead class="theadrow">
                                            <tr>
                                                <th>S.No</th>
                                                <th>
                                                   Customer Name
                                                </th>
                                                <th>
                                                    Vehicle Names
                                                </th>
                                                <th>
                                                    Payment Amount
                                                </th>
                                                <th>
                                                    Pending Amount
                                                </th>
                                                <th>
                                                    Options
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="appenddata">
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sec_col" class="col-md-8" style="display: none;">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 relative">
                                <div class="fixed-buttons-right">

                                    <button type="button" class="editpenbtn " data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Edit Expense" id="view_edit"><i class="fa fa-edit expicon "></i></button>
                                    <button id="view_print" type="button" class="editpenbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Print"><i class="bi bi-printer expicon "></i></button>
                                    <button id="view_pdf" type="button" class="editpenbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Pdf"><i class="bi bi-file-earmark-pdf"></i></button>
                                    <button type="button" class="editpenbtn" id="view_copy" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Copy"><i class="fa fa-clone expicon "></i></i></button>
                                    <!-- <button type="button" class="closexbtn close-button" id="delete_view"
                                data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Delete"><i
                                    class="fa fa-times expicon"></i></button> -->
                                    <button type="button" class="editpenbtn  " id="delete_view" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Delete">
                                        <!-- <i class="fa fa-times expicon"></i> -->
                                        <img src="./delete.svg" alt="">
                                    </button>
                                    <button type="button" onclick="toggleViews(id)" class="editpenbtn " class="contractfilter edittglbtn5 edittglbtn6 viewbtnByToggle" data-bs-toggle="tooltip" data-bs-title="Toggle Table" data-bs-original-title="" title="" data-bs-trigger="hover">
                                        <i class="fa-solid fa-angle-left" style="font-size: 12px" aria-hidden="true"></i>
                                    </button>
                                    <span id="view_invoice"></span>
                                </div>

                                <table class="details-table table table-striped">
                                    <tbody>
                                        <tr class="project-overview greyback">
                                            <td class="viewjobft " width="20%"><b>Origin :</b></td>
                                            <td class="viewjobft "></td>
                                        </tr>
                                        <tr class="project-overview">
                                            <td class="viewjobft "><b>Colours :</b></td>
                                            <td class="viewjobft "></td>
                                        </tr>
                                        <tr class="project-overview">
                                            <td class="viewjobft "><b>Styles :</b></td>
                                            <td class="viewjobft ">Baju anak</td>
                                        </tr>
                                        <tr class="project-overview">
                                            <td class="viewjobft "><b>Sales price :</b></td>
                                            <td class="viewjobft ">900.00</td>
                                        </tr>
                                        <tr class="project-overview">
                                            <td class="viewjobft "><b>Default Profit Rate(%) :</b></td>
                                            <td class="viewjobft "></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal_md" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header hdrbg">
                    <button type="button" class="btn-close closebtn" data-bs-dismiss="modal"></button>
                    <!-- <h5 class="modal-title"></h5> -->
                    <h5 class="fnt_head">

                        <b class="modal-title"></b>
                        <div class="vertical-line">

                            <span class="Bcgtop capsule"></span>
                            <span class="Bcgbttm capsule"></span>
                        </div>
                    </h5>
                </div>
                <div class="modal-body mbdclr">
                </div>
            </div>
        </div>
    </div>

    <!-- modal -->
    <script>
        function showModal(url, title) {
            $('#modal_md').on('shown.bs.modal', function() {
                $('.selectpicker').selectpicker('refresh');
            });
            $('#modal_md').modal('show', {
                backdrop: 'true'
            });
            $.ajax({
                url: url,
                success: function(response) {
                    $('#modal_md .modal-title').html(title);
                    $('#modal_md .modal-body').html(response);
                }
            });
        }
    </script>

    <script>
        function toggleViews(id) {
            var hidden_columns = [4, 5, 6, 7];
            var _visible = true;
            if ($("#first_col").hasClass("col-md-12")) {
                $("#first_col").removeClass("col-md-12").addClass("col-md-4");
                _visible = false;
                $("#sec_col").show();
                $("#toggle_btn")
                    .find("i")
                    .removeClass("fa fa-angle-double-left")
                    .addClass("fa fa-angle-double-right");
            } else {
                $("#first_col").removeClass("col-md-4").addClass("col-md-12");
                $("#sec_col").hide();
                $("#toggle_btn")
                    .find("i")
                    .removeClass("fa fa-angle-double-right")
                    .addClass("fa fa-angle-double-left");
            }
            var _table = $("#example").DataTable();
            // Show hide hidden columns
            _table.columns(hidden_columns).visible(_visible, true);
            _table.columns.adjust();
        }
    </script>

</body>
<script>
    // // Get the element with the class "fa-align-left"
    // var navButton = document.querySelector('.fa-align-left');
    // // Get the sidebar element
    // var sidebar = document.querySelector('.sidebar');
    // // Get the main content element
    // var mainContent = document.querySelector('.main-content');

    // // Add a click event listener to the nav button
    // navButton.addEventListener('click', function() {
    //     // Toggle the "active" class on the sidebar and main content
    //     sidebar.classList.toggle('active');
    //     mainContent.classList.toggle('active');
    // });
</script>
<script>


   
    function getResponse(){
        var table = $('.example').DataTable({

rowReorder: {
    selector: 'td:nth-child(2)'
},
language: {
    lengthMenu: '_MENU_',
    search: '',
    searchPlaceholder: " Search for order ID, customer, order status or something..."
},
responsive: true,
dom: 'Blfrtip',

buttons: [{

    },

    {
        text: '<i class="fa-solid fa-arrow-rotate-right p-1" style="font-size:.9rem"></i>'
    },
    {
        text: '<button type="button" style="font-size:0.9rem; font-weight:400; border:none;padding:0;background-color: inherit;"><i class="fas fa-cog text-muted"></i> MANIPULATION</button>',
    },
    {
        text: '<i class="fa-solid fa-arrow-right-from-bracket"></i> EXPORT',
        extend: 'collection',
        buttons: [
            // '<span class="fexport"><i class="fa-regular fa-file-excel icn me-2"></i> EXCEL</span>', '<span class="fexport"><i class="fa-regular fa-file-lines icn me-2"></i> CSV</span>', '<span class="fexport"><i class="fa-regular fa-file-pdf icn me-2"></i> PDF</span>', '<span class="fexport"><i class="fa-solid fa-print me-2 icn"></i> PRINT</span>'
            {},
            {
                text: '<i class="fa-regular fa-file-excel icn me-2 excel-icon"></i> Excel',
                extend: 'excel',

            },
            {
                text: '<i class="fa-regular fa-file-lines icn me-2 csv-icon"></i> CSV',
                extend: 'csv',
            },
            {
                text: '<i class="fa-regular fa-file-pdf icn me-2 pdf-icon"></i> PDF',
                extend: 'pdf'
            },
            {
                text: '<i class="fa-solid fa-print me-2 icn print-icon"></i> PRINT',
                extend: 'print'
            },
        ],
        className: 'px-3'

    }

],


});

       }

    function getData(){
        var tabl=$('#example').DataTable();
        tabl.destroy();
        $.ajax({
            type:'POST',
            url:'<?= base_url()?>payments/getData',
            dataType:'json',
            success:function(result){
                $('#appenddata').html(result);
                getResponse();
            }
        })
       }
       
function deletedata(id){
$.ajax({
    type:'POST',
    url:'<?= base_url() ?>payments/delete/'+id,
    dataType:'json',
    success:function(result){
        alert("deleted data");
        getData();
    }
})

}




 getData();
</script>
<div class="modal fade" id="modal_md" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header hdrbg">
                    <button type="button" class="btn-close closebtn" data-bs-dismiss="modal"></button>
                    <!-- <h5 class="modal-title"></h5> -->
                    <h5 class="fnt_head">

                        <b class="modal-title"></b>
                        <div class="vertical-line">

                            <span class="Bcgtop capsule"></span>
                            <span class="Bcgbttm capsule"></span>
                        </div>
                    </h5>
                </div>
                <div class="modal-body mbdclr">
                </div>
            </div>
        </div>
    </div>





    <!-- modal -->
    <script>
        function showModal(url, title) {
            $('#modal_md').on('shown.bs.modal', function() {
                $('.selectpicker').selectpicker('refresh');
            });
            $('#modal_md').modal('show', {
                backdrop: 'true'
            });
            $.ajax({
                url: url,
                success: function(response) {
                    $('#modal_md .modal-title').html(title);
                    $('#modal_md .modal-body').html(response);
                }
            });
        }
    </script>

</html>