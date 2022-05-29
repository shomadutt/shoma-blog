<form id="enquiry">

    <div id="success-message" class="alert alert-success" style="display:none"></div>

    <div id="error-message" class="alert alert-danger" style="display:none"></div>

    <div class="mb-3">
        <label for="fname" class="form-label">First name</label>
        <input type="fname" class="form-control" name="fname" required>

    </div>
    <div class="mb-3">
        <label for="lname" class="form-label">Last name</label>
        <input type="lname" class="form-control" name="lname" required>

    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" required>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone number</label>
        <input type="tel" class="form-control" name="phone" required>
    </div>

    <div class="mb-3">
        <label for="enquiry" class="form-label">Your enquiry</label>
        <textarea type="text" class="form-control" name="enquiry" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


<script>
(function($) {
    $('#enquiry').submit(function(event) {
        event.preventDefault();
        var endpoint = '<?php echo admin_url('admin-ajax.php');?>';
        var form = $('#enquiry').serialize();
        var formdata = new FormData;
        formdata.append('action', 'enquiry');
        formdata.append('enquiry', form);
        formdata.append('nonce', '<?php echo wp_create_nonce('ajax-nonce'); ?>');
        $.ajax(endpoint, {
            type: 'POST',
            data: formdata,
            processData: false,
            contentType: false,
            success: function(res) {
                $('#success-message').text('Thanks for your enquiry.').show();
                $('#enquiry').trigger('reset');
            },

            error: function(err) {
                alert(err.responseJSON.data);
            },
        })
    });
})(jQuery)
</script>