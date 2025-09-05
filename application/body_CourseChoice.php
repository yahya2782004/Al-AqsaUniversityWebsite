<div class="appContainerDiv">

  <div class="appNavDiv">
    <nav role="navigation" aria-label="Primary">
      <ul>
        <li>1. Personal Details</li>
        <li>2. Contact Details</li>
        <li class="current">3. Course Choice</li>
        <li>4. Education</li>
        <li>5. Application Review</li>
      </ul>
    </nav>
  </div>

  <div class="appBodyDiv">
    <form name="form3" action="?page=body_education" method="post" onsubmit="return validate_form3(form3);">

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

      <strong>3. Course Choice</strong>

      <div class="help">
        <p>Before complete these fields, you have to select the programme you are interested in.
          You can do so by search for the programmes using
          <a class="aEmbedded" href="../?page=registration_AZcourses" target="_blank">A-Z Course Search</a>
          (This will open in new window).
        </p>
        <p>To create a new application, you must provide the following information: <br /></p>
        <ul>
          <li><b>Type of the Course:</b> This will be Postgraduate Research, Postgraduate Taught or Undergraduate.</li>
          <br />
          <li><b>Mode of Attendance: </b> This can be BSc Study, Diploma Study, PhD Study, or MSc Study. Contact the relevant School for more details.</li>
        </ul>
      </div>

      <div class="field">
        <label for="courseType">*Type of the course:</label>
        <select name="courseType" id="courseType">
          <option value="" selected="selected"></option>
          <option value="Undergraduate">Undergraduate</option>
          <option value="Postgraduate Taught">Postgraduate Taught</option>
          <option value="Postgraduate Research">Postgraduate Research</option>
        </select>
      </div>

      <div class="field">
        <label for="courseMode">*Mode of Attendance:</label>
        <select name="courseMode" id="courseMode">
          <option value="" selected="selected"></option>
          <option value="Normal">Normal</option>
          <option value="Afternoon">Afternoon</option>
          <option value="Electronic Learning">Electronic Learning</option>
        </select>
      </div>

      <div class="field">
        <label for="program">*Program Description:</label>
        <select name="program" id="program">
          <?php include('courses.php'); ?>
        </select>
      </div>

      <div class="field">
        <label for="fund">*Are you self funding? </label>
        <input name="fund" id="fund" value="Yes" checked="checked" type="radio" />Yes
        <input name="fund" value="No" type="radio" />No
      </div>

      <div class="field">
        <p><i><strong>If you choose No, please provide evidence of financial support at enrolment.</strong></i></p>
      </div>

      <div class="field">
        <input type="submit" class="bton" value="Next-->">
      </div>
    </form>
  </div>
</div>