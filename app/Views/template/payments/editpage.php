<form id="editform">
    <div class="row">
        <div class="col-md-12">
            <div class="purchasegrp">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?= $edit->id ?>">
                    <label for="exampleFormControlSelect1">Customer Name</label>
                    <select class="selectpicker form-control" id="ecustomerid" name="customer_id" multiple data-live-search="true">
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="purchasegrp">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Vehicle Name</label>
                    <select class="selectpicker form-control" id="evehicleid" name="vehicle_id" multiple data-live-search="true">
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="purchasegrp">
                <label class="purchaseinfo">Mobile Number</label>
                <input type="number" class="form-control purchaseselects" name="amount" value="<?= $edit->amount?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 blkftr">
            <div class="modal-footer taskfooter">
                <button type="submit" class="tasksave1">
                    SAVE
                </button>
            </div>
        </div>
    </div>
</form>

<script>
function getF(editCustomerId, editVehicleId) {
    $.ajax({
        type: 'POST',
        url: '<?= base_url()?>getcustomers',
        dataType: 'json',
        success: function(result) {
            $('#ecustomerid').html(result);
            // Set the selected option based on the edit Customer ID
            $('#ecustomerid').val(editCustomerId);
            $('#ecustomerid').selectpicker('refresh');
        }
    });
    $.ajax({
        type: 'POST',
        url: '<?= base_url()?>getvehicles',
        dataType: 'json',
        success: function(result) {
            $('#evehicleid').html(result);
            // Set the selected option based on the edit Vehicle ID
            $('#evehicleid').val(editVehicleId);
            $('#evehicleid').selectpicker('refresh');
        }
    });
}

$(document).ready(function() {
    var editCustomerId = '<?= $edit->customer_id ?>';
    var editVehicleId = '<?= $edit->vehicle_id ?>';
    getF(editCustomerId, editVehicleId);

    $('#editform').formValidation({
        framework: 'bootstrap',
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'Enter Name'
                    },
                },
            },
        },
    }).on('success.form.fv', function(e) {
        // Prevent form submission
        e.preventDefault();
        var form = document.querySelector('#editform');
        var dataForm = new FormData(form);
        $.ajax({
            type: 'POST',
            url: '<?=base_url()?>payments/update/<?=$edit->id?>',
            data: dataForm,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(result) {
                if (result == 1) {
                    $('#modal_md').modal('hide');
                    alert('Saved successfully');
                    getData();
                } else {
                    alert('Already exist');
                }
            }
        });
    });
});
</script>
