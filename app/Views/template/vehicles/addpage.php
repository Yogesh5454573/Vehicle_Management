<form id="addform">
    <div class="row">
        <div class="col-md-12">
            <div class="purchasegrp">
                <label class="purchaseinfo"><span class="aster">* </span>Name</label>
                <input type="text" class="form-control purchaseselects" name="name">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="purchasegrp">
                <label class="purchaseinfo">Model</label>
                <input type="text" class="form-control purchaseselects" name="model">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="purchasegrp">
                <label class="purchaseinfo">Price</label>
                <input type="number" class="form-control purchaseselects" name="price">
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-12">
        <div class="purchasegrp">
            <label class="purchaseinfo">Price</label>
            <select class="form-control purchaseselects" name="status">
            <option value="Available" selected>Available</option>
            <option value="Booked">Booked</option>
               
                <option value="Pending">Pending</option>
    
            </select>
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
    $('#addform').formValidation({
        framework: 'bootstrap',
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'Enter name'
                    },
                },
            },
        },
    })
        .on('success.form.fv', function (e) {
            // Prevent form submission
            e.preventDefault();
            var form = document.querySelector('#addform');
            var dataForm = new FormData(form);
            $.ajax({
                type: 'POST',
                url: '<?=base_url()?>/vehicles/addData',
                data: dataForm,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function (result) {
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
</script>