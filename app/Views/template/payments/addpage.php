<form id="addform">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="purchasegrp">
                    <div class="form-group">
                        <label for="customerid">Customer Name</label>
                        <select class="selectpicker form-control" id="customerid" name="customer_id" multiple data-live-search="true">
                            <!-- Options will be populated by AJAX -->
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="purchasegrp">
                    <div class="form-group">
                        <label for="vehicleid">Vehicle Name</label>
                        <select class="selectpicker form-control" id="vehicleid" name="vehicle_id" multiple data-live-search="true">
                            <!-- Options will be populated by AJAX -->
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="purchasegrp">
                    <label class="purchaseinfo">Payment Amount</label>
                    <input type="number" class="form-control purchaseselects" name="amount" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 blkftr">
                <div class="modal-footer taskfooter">
                    <button type="submit" class="tasksave1">SAVE</button>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
$(document).ready(function() {
    function getF() {
        $.ajax({
            type: 'POST',
            url: '<?= base_url() ?>getcustomers',
            dataType: 'json',
            success: function(result) {
                $('#customerid').html(result);
                $('.selectpicker').selectpicker('refresh');
            },
            error: function() {
                alert('Error loading customers.');
            }
        });

        $.ajax({
            type: 'POST',
            url: '<?= base_url() ?>getvehicles',
            dataType: 'json',
            success: function(result) {
                $('#vehicleid').html(result);
                $('.selectpicker').selectpicker('refresh');
            },
            error: function() {
                alert('Error loading vehicles.');
            }
        });
    }

    getF();

    $('#addform').formValidation({
        framework: 'bootstrap',
        fields: {
            customer_id: {
                validators: {
                    notEmpty: {
                        message: 'Select a customer'
                    }
                }
            },
            vehicle_id: {
                validators: {
                    notEmpty: {
                        message: 'Select a vehicle'
                    }
                }
            },
            amount: {
                validators: {
                    notEmpty: {
                        message: 'Enter payment amount'
                    },
                    numeric: {
                        message: 'Enter a valid number'
                    }
                }
            }
        }
    }).on('success.form.fv', function (e) {
        e.preventDefault();
        var form = document.querySelector('#addform');
        var dataForm = new FormData(form);

        $.ajax({
            type: 'POST',
            url: '<?= base_url() ?>payments/addData',
            data: dataForm,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(result) {
                if (result === 1) {
                    $('#modal_md').modal('hide');
                    alert('Saved successfully');
                    getData(); // Ensure this function is defined somewhere
                } else {
                    alert('Data already exists.');
                }
            },
            error: function() {
                alert('Error saving data.');
            }
        });
    });
});
</script>
