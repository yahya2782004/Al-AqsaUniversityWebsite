<div class="appContainerDiv">

  <div class="appNavDiv">
    <nav role="navigation" aria-label="Primary">
      <ul>
        <li>1. Personal Details</li>
        <li class="current">2. Contact Details</li>
        <li>3. Course Choice</li>
        <li>4. Education</li>
        <li>5. Application Review</li>
      </ul>
    </nav>
  </div>

  <div class="appBodyDiv">

    <form name="form2" action="?page=body_CourseChoice" method="post" onsubmit="return validate_form2(form2);">

      <input type="hidden" name="gender" value="<?php echo $_REQUEST['gender']; ?>">
      <input type="hidden" name="firstName" value="<?php echo $_REQUEST['firstName']; ?>">
      <input type="hidden" name="lastName" value="<?php echo $_REQUEST['lastName']; ?>">
      <input type="hidden" name="day" value="<?php echo $_REQUEST['day']; ?>">
      <input type="hidden" name="month" value="<?php echo $_REQUEST['month']; ?>">
      <input type="hidden" name="year" value="<?php echo $_REQUEST['year']; ?>">
      <input type="hidden" name="nationality" value="<?php echo $_REQUEST['nationality']; ?>">
      <input type="hidden" name="specialNeeds" value="<?php echo $_REQUEST['specialNeeds']; ?>">
      <input type="hidden" name="status" value="<?php echo $_REQUEST['status']; ?>">

      <strong>2. Contact Details</strong>
      <div class="help">
        <p>Your <b>Permanent Address</b> is the address we will use to contact you during the application process.
          You must ensure that this is correct and that you can be reached at this address at all times. </p>
        <p> If you would like to fill the <b>Other Details</b> section, please do write country code of the
          phone and fax you will provide. </p>
      </div>

      <h4 style="color:rgb(0, 0, 153);">Permanent Address:</h4>

      <div class="field">
        <label for="addressCountry">*Country: </label>
        <select name="addressCountry" id="addressCountry">
          <?php include('countries.php'); ?>
        </select>
      </div>

      <div class="field">
        <label for="address1">*Address Line 1:</label>
        <input name="address1" class="txt" type="text" id="address1" />
      </div>

      <div class="field">
        <label for="address2">Address Line 2:</label>
        <input name="address2" class="txt" type="text" id="address2" />
      </div>

      <div class="field"> <label for="city">*Town/City: </label>
        <input name="city" class="smaller" type="text" id="city" />
      </div>

      <div class="field">
        <label for="postCode">*Post Code: </label>
        <input name="postCode" class="smaller" type="text" id="postCode" />
      </div>

      <h4 style="clear:left; color:rgb(0, 0, 153);">Other Details:</h4>

      <div class="field">
        <label for="phone">Phone Number: </label>
        <input name="phone" class="txt" type="text" id="phone" />
      </div>

      <div class="field">
        <label for="fax">Fax Number: </label>
        <input name="fax" class="txt" type="text" id="fax" />
      </div>

      <div class="field">
        <label for="email">Email: </label>
        <input name="email" class="txt" type="text" id="email" />
      </div>

      <div class="field">
        <input type="submit" class="bton" value="Next-->">
      </div>

    </form>
  </div>
</div>