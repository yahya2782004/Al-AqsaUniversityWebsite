<div class="appContainerDiv">

  <div class="appNavDiv">
    <nav role="navigation" aria-label="Primary">
      <ul>
        <li>1. Personal Details</li>
        <li>2. Contact Details</li>
        <li>3. Course Choice</li>
        <li>4. Education</li>
        <li class="current">5. Application Review</li>
      </ul>
    </nav>
  </div>

  <div class="appBodyDiv">
    <form name="form5" action="../insert.php" method="post" onSubmit="return validate_form5(form5);">

      <strong>5. Application Review</strong>

      <h4 style="color:rgb(0, 0, 153);"> Personal Details:</h4>

      <div class="field">
        <label for="gender">*Gender:</label>
        <input name="gender" value="<?php echo $_REQUEST['gender']; ?>" type="radio" id="gender" checked="checked"> <?php echo $_REQUEST['gender']; ?>
        <input name="gender" value="<?php if ($_REQUEST['gender'] == "Female") echo  "Male";
                                    else echo "  "; ?>" type="radio">
        <?php if ($_REQUEST['gender'] == "Female") echo  "Male";
        else echo "Female"; ?>
      </div>

      <div class="field">
        <label for="firstName">*First/Given Name:</label>
        <input name="firstname" class="txt" type="text" id="firstName" value="<?php echo $_REQUEST['firstName']; ?>">
      </div>

      <div class="field">
        <label for="lastName">*Last(Family) Name:</label>
        <input name="lastname" class="txt" type="text" id="lastName" value="<?php echo $_REQUEST['lastName']; ?>">
      </div>

      <div class="field">
        <label for="dateofbirth">*Date of Birth: </label>
        Day
        <select name="day" id="dateofbirth">
        </select>
        Month
        <select name="month">
          <option value="<?php echo $_REQUEST['month']; ?>" selected="selected"><?php echo $_REQUEST['month']; ?></option>
          <option value="January">January</option>
          <option value="February">February</option>
          <option value="March">March</option>
          <option value="April">April</option>
          <option value="May">May</option>
          <option value="June">June</option>
          <option value="July">July</option>
          <option value="August">August</option>
          <option value="September">September</option>
          <option value="October">October</option>
          <option value="November">November</option>
          <option value="November">November</option>
        </select>
        Year
        <select name="year">
        </select>
      </div>

      <div class="field">
        <label for="nationality">*Nationality: </label>
        <select name="nationality" id="nationality">
          <option value="<?php echo $_REQUEST['nationality']; ?>" selected="selected"><?php echo $_REQUEST['nationality']; ?></option>
          <?php include('countries2.php'); ?>
        </select>
      </div>

      <div class="field">
        <label for="specialNeeds">*Special Needs: </label>
        <select name="specialneeds" id="specialNeeds">
          <option value=" <?php echo $_REQUEST['specialNeeds']; ?>" selected="selected"> <?php echo $_REQUEST['specialNeeds']; ?></option>
          <option value="Learning Difficulty">Learning Difficulty</option>
          <option value="Blind/Partially Sighted">Blind/Partially Sighted</option>
          <option value="Deaf/Partial Hearing">Deaf/Partial Hearing</option>
          <option value="Wheelchair/Mobility">Wheelchair/Mobility</option>
          <option value="Personal Care Support">Personal Care Support</option>
          <option value="Mental Health">Mental Health</option>
          <option value="Unseen Disability">Unseen Disability</option>
          <option value="Multiple Disabilities">Multiple Disabilities</option>
          <option value="Other Disability">Other Disability</option>
          <option value="Autistic/Asperger Syndrome">Autistic/Asperger Syndrome</option>
          <option value="Information Not Sought">Information Not Sought</option>
          <option value="Not Known">Not Known</option>
        </select>
      </div>

      <div class="field"> <label for="status">*Applicant Status: </label>
        <input name="status" id="status" value="<?php echo $_REQUEST['status']; ?>" checked="checked" type="radio"> <?php echo $_REQUEST['status']; ?>
        <input name="status" value="<?php if ($_REQUEST['status'] == "Regular Student ") echo  "Regular Student ";
                                    else echo "Scholarship Student"; ?>" type="radio">
        <?php if ($_REQUEST['status'] == "Scholarship Student") echo  "Scholarship Student";
        else echo "Scholarship Student"; ?>

      </div>

      <h4 style="clear:left; color:rgb(0, 0, 153);"> Contact Details:</h4>

      <div class="field">
        <label for="addressCountry">*Country: </label>
        <select name="addresscountry" id="addressCountry">
          <option value="<?php echo $_REQUEST['addressCountry']; ?>" selected="selected"><?php echo $_REQUEST['addressCountry']; ?></option>
          <?php include('countries2.php'); ?>
        </select>
      </div>

      <div class="field">
        <label for="address1">*Address Line 1:</label>
        <input name="address1" class="txt" type="text" id="address1" value="<?php echo $_REQUEST['address1']; ?>" />
      </div>

      <div class="field">
        <label for="address2">Address Line 2:</label>
        <input name="address2" class="txt" type="text" id="address2" value="<?php echo $_REQUEST['address2']; ?>" />
      </div>

      <div class="field">
        <label for="city">*Town/City: </label><input
          name="city" class="smaller" type="text" id="city" value="<?php echo $_REQUEST['city']; ?>" />
      </div>

      <div class="field"> <label for="postCode">*Post Code: </label><input
          name="postcode" class="smaller" type="text" id="postCode" value="<?php echo $_REQUEST['postCode']; ?>" />
      </div>

      <h4 style="clear:left; color:rgb(0, 0, 153);">Other Details:</h4>

      <div class="field">
        <label for="phone">Phone Number: </label>
        <input name="phone" class="txt" type="text" id="phone" value="<?php echo $_REQUEST['phone']; ?>" />
      </div>

      <div class="field">
        <label for="fax">Fax Number: </label>
        <input name="fax" class="txt" type="text" id="fax" value="<?php echo $_REQUEST['fax']; ?>" />
      </div>

      <div class="field">
        <label for="email">Email: </label><input name="email" class="txt" type="text" id="email" value="<?php echo $_REQUEST['email']; ?>" />
      </div>

      <h4 style="clear:left; color:rgb(0, 0, 153);"> Course Choice:</h4>

      <div class="field">
        <label for="courseType">*Type of the course: </label>
        <select name="coursetype" id="courseType">
          <option value="<?php echo $_REQUEST['courseType']; ?>" selected="selected"><?php echo $_REQUEST['courseType']; ?></option>
          <option value="Undergraduate">Undergraduate</option>
          <option value="Postgraduate Taught">Postgraduate Taught</option>
          <option value="Postgraduate Research">Postgraduate Research</option>
        </select>
      </div>

      <div class="field">
        <label for="courseMode">*Mode of Attendance: </label>
        <select name="coursemode" id="courseMode">
          <option value="<?php echo $_REQUEST['courseMode']; ?>" selected="selected"><?php echo $_REQUEST['courseMode']; ?></option>
          <option value="Full-time">Full-time</option>
          <option value="Part-time">Part-time</option>
          <option value="Distance Learning">Distance Learning</option>
        </select>
      </div>

      <div class="field">
        <label for="program">*Program Description:</label>
        <select name="program" id="program">
          <option value="<?php echo $_REQUEST['program']; ?>" selected="selected"><?php echo $_REQUEST['program']; ?></option>
          <?php include('courses2.php'); ?>
        </select>
      </div>

      <div class="field">
        <label for="fund">*Are you self funding? </label>
        <input name="fund" id="fund" value="<?php echo $_REQUEST['fund']; ?>" checked="checked" type="radio" /> <?php echo $_REQUEST['fund']; ?>

        <input name="fund" value="<?php if ($_REQUEST['fund'] == "Yes") echo  "No";
                                  else echo "yes"; ?>" type="radio" />
        <?php if ($_REQUEST['fund'] == "Yes") echo  "No";
        else echo "yes"; ?>
      </div>

      <h4 style="clear:left; color:rgb(0, 0, 153);"> Education:</h4>

      <div class="field">
        <label for="uniName">*Institution Name:</label>
        <input name="uniname" class="txt" type="text" id="uniName" value="<?php echo $_REQUEST['uniName']; ?>" />
      </div>

      <div class="field">
        <label for="uniCountry">*Country: </label>
        <select name="unicountry" style="width: 10em;" id="country">
          <option value="<?php echo $_REQUEST['uniCountry']; ?>" selected="selected"><?php echo $_REQUEST['uniCountry']; ?></option>
          <?php include('countries2.php'); ?>
        </select>
      </div>

      <div class="field">
        <label for="level">*Academic Level:</label>
        <select name="level" style="width: 10em;" selected="selected" id="level">
          <option value="<?php echo $_REQUEST['level']; ?>" selected="selected"><?php echo $_REQUEST['level']; ?></option>
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
        <input name="title" class="txt" type="text" id="title" value="<?php echo $_REQUEST['title']; ?>" />
      </div>

      <div class="field">
        <label for="length">*Length of Study:</label>
        <select name="length" style="width: 10em;" selected="selected" id="length">
          <option value="<?php echo $_REQUEST['length']; ?>" selected="selected"><?php echo $_REQUEST['length']; ?></option>
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
        <label for="other">Other Qualifications:</label> <textarea name="other" cols="30" rows="4" id="other"><?php echo $_REQUEST['other']; ?> </textarea>
      </div>

      <h4 style="clear:left; color:red;"><i>Declaration:</i></h4>

      <div class=" declaration">I confirm that all information I provided in this application is true.
        I understand that the University has the right to cancel my application. I give the
        permission to the University to use my information to create my student
        record.
      </div>

      <div class="field" style="margin: 1em 0;">
        <label for="declaration" style="display:inline-block; margin-right:8px; width:auto;">
          I am the applicant agree to the above declaration:
        </label>
        <input name="declaration" value="1" type="checkbox" id="declaration" />
      </div>

      <div class="field">
        <input name="bton" value="Submit the Application"  class="bton"  type="submit" />
      </div>

    </form>
  </div>
</div>