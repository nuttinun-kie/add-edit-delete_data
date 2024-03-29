<?php include("head.php");?>
<form>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer013">First name</label>
      <input type="text" class="form-control is-valid" id="validationServer013" placeholder="First name"
        value="Mark" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer023">Last name</label>
      <input type="text" class="form-control is-valid" id="validationServer023" placeholder="Last name"
        value="Otto" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServerUsername33">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend33">@</span>
        </div>
        <input type="text" class="form-control is-invalid" id="validationServerUsername33" placeholder="Username"
          aria-describedby="inputGroupPrepend33" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationServer033">City</label>
      <input type="text" class="form-control is-invalid" id="validationServer033" placeholder="City"
        required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationServer043">State</label>
      <input type="text" class="form-control is-invalid" id="validationServer043" placeholder="State"
        required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationServer053">Zip</label>
      <input type="text" class="form-control is-invalid" id="validationServer053" placeholder="Zip"
        required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input is-invalid" id="invalidCheck33" required>
      <label class="custom-control-label" for="invalidCheck33">Agree to terms and conditions</label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
    <div class="invalid-feedback">
      You must agree before submitting.
    </div>
  </div>
  <button class="btn btn-primary btn-sm" type="submit">Submit form</button>
</form>

<?php include("footer.php");?>