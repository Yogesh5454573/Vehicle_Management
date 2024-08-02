<form id="editform">
    <div class="row">
        <input type="hidden" name="id" value="<?= $edit->id?>" >
        <div class="col-md-12">
            <div class="purchasegrp">
                <label class="purchaseinfo"><span class="aster">* </span>Name</label>
                <input type="text" class="form-control purchaseselects" name="name" value="<?= $edit->name?>">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="purchasegrp">
                <label class="purchaseinfo">Model</label>
                <input type="text" class="form-control purchaseselects" name="model" value="<?= $edit->model?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="purchasegrp">
                <label class="purchaseinfo">Price</label>
                <input type="number" class="form-control purchaseselects" name="price" value="<?= $edit->price?>">
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col-md-12">
        <div class="purchasegrp">
            <label class="purchaseinfo">Price</label>
            <select class="form-control purchaseselects" name="status">
                <option value="Available" <?= $edit->status === 'Available' ? 'selected' : '' ?>>Available</option>
                <option value="Booked" <?= $edit->status === 'Booked' ? 'selected' : '' ?>>Booked</option>
                <option value="Pending" <?= $edit->status === 'Pending' ? 'selected' : '' ?>>Pending</option>
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
    })
        .on('success.form.fv', function (e) {
            // Prevent form submission
            e.preventDefault();
            var form = document.querySelector('#editform');
            var dataForm = new FormData(form);
            $.ajax({
                type: 'POST',
                url: '<?=base_url()?>vehicles/update/<?=$edit->id?>',
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