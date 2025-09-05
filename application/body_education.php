<div class="appContainerDiv">

  <div class="appNavDiv">
    <nav role="navigation" aria-label="Primary">
      <ul>
        <li>1. Personal Details</li>
        <li>2. Contact Details</li>
        <li>3. Course Choice</li>
        <li class="current">4. Education</li>
        <li>5. Application Review</li>
      </ul>
    </nav>
  </div>

  <div class="appBodyDiv">
    <form name="form4" action="?page=body_ApplicationReview" method="post" method="post" onsubmit="return validate_form4(form4);">

      <input type="hidden" name="gender" value="<?php echo $_REQUEST['gender']; ?>">
      <input type="hidden" name="firstName" value="<?php echo $_REQUEST['firstName']; ?>">
      <input type="hidden" name="lastName" value="<?php echo $_REQUEST['lastName']; ?>">
      <input type="hidden" name="day" value="<?php echo $_REQUEST['day']; ?>">
      <input type="hidden" name="month" value="<?php echo $_REQUEST['month']; ?>">
      <input type="hidden" name="year" value="<?php echo $_REQUEST['year']; ?>">
      <input type="hidden" name="nationality" value="<?php echo $_REQUEST['nationality']; ?>">
      <input type="hidden" name="specialNeeds" value="<?php echo $_REQUEST['specialNeeds']; ?>">
      <input type="hidden" name="status" value="<?php echo $_REQUEST['status']; ?>">

      <input type="hidden" name="addressCountry" value="<?php echo $_REQUEST['addressCountry']; ?>">
      <input type="hidden" name="address1" value="<?php echo $_REQUEST['address1']; ?>">
      <input type="hidden" name="address2" value="<?php echo $_REQUEST['address2']; ?>">
      <input type="hidden" name="city" value="<?php echo $_REQUEST['city']; ?>">
      <input type="hidden" name="postCode" value="<?php echo $_REQUEST['postCode']; ?>">
      <input type="hidden" name="phone" value="<?php echo $_REQUEST['phone']; ?>">
      <input type="hidden" name="fax" value="<?php echo $_REQUEST['fax']; ?>">
      <input type="hidden" name="email" value="<?php echo $_REQUEST['email']; ?>">

      <input type="hidden" name="courseType" value="<?php echo $_REQUEST['courseType']; ?>">
      <input type="hidden" name="courseMode" value="<?php echo $_REQUEST['courseMode']; ?>">
      <input type="hidden" name="program" value="<?php echo $_REQUEST['program']; ?>">
      <input type="hidden" name="fund" value="<?php echo $_REQUEST['fund']; ?>">

      <strong>4.Education</strong>

      <div class="help">
        <p>Please give details about your last Higher Education Institution you have attended. In Other Qualifications
          section, please provide any other previous higher education certificates that are related to your proposed field of
          study and provide any previous work experience and training courses that you have. </p>
      </div>

      <div class="field">
        <label for="uniName">*Institution Name:</label>
        <input name="uniName" class="txt" type="text" id="uniName" />
      </div>

      <div class="field">
        <label for="uniCountry">*Country: </label>
        <select name="uniCountry" style="width: 10em;" id="country">
          <?php include('countries.php'); ?>
        </select>
      </div>

      <div class="field">
        <label for="level">*Academic Level:</label>
        <select name="level" style="width: 10em;" id="level">
          <option value="" selected="selected"></option>
          <option value="Bachelors">Bachelors</option>
          <option value="Certificate">Certificate</option>
          <option value="Diploma">Diploma</option>
          <option value="Doctorate">Doctorate</option>
          <option value="Masters Degree">Masters Degree</option>
          <option value="Other Postgraduate">Other Postgraduate</option>
          <option value="Other Undergraduate">Other Undergraduate</option>
          <option value="Other Undergraduate">Other Undergraduate</option>
          <option value="Unknown">Unknown</option>
        </select>
      </div>

      <div class="field">
        <label for="title">*Degree Title:</label>
        <input name="title" class="txt" type="text" id="title" />
      </div>

      <div class="field">
        <label for="length">*Length of Study:</label>
        <select name="length" style="width: 10em;" id="length">
          <option value="" selected="selected"></option>
          <option value="1 Year">1 Year</option>
          <option value="2 Year">2 Year</option>
          <option value="3 Year">3 Year</option>
          <option value="4 Year">4 Year</option>
          <option value="5 Year">5 Year</option>
          <option value="6 Year">6 Year</option>
          <option value="7 Year">7 Year</option>
          <option value="8 Year">8 Year</option>
          <option value="9 Year">9 Year</option>
        </select>
      </div>

      <div class="field">
        <label for="other">Other Qualifications:</label>
        <textarea name="other" cols="30" rows="4" id="other"> </textarea>
      </div>

      <div class="field">
        <input type="submit" class="bton" value="Next-->">
      </div>

    </form>
  </div>
</div>