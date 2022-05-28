

<form id="enquiry">
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
    jQuery ('#enquiry').submit(function() {
        alert('hi');
    });
</script>