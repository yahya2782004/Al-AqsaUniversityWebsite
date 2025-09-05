<div class="appContainerDiv">

  <div class="appNavDiv">
    <nav role="navigation" aria-label="Primary">
      <ul>
        <li class="current">1. Personal Details</li>
        <li>2. Contact Details</li>
        <li>3. Course Choice</li>
        <li>4. Education</li>
        <li>5. Application Review</li>
      </ul>
    </nav>
  </div>


  <div class="appBodyDiv">

    <form name="form1" action="?page=body_ContactDetails" method="post" onsubmit="return validate_form1(form1);">

      <strong>1. Personal Details</strong>
      <div class="help">
        <p>Welcome! To begin your application, provide basic details about yourself below.
          Fields marked with an asterisk (*) are mandatory - you must complete them.
          This is to ensure that we have enough information to assess your application.</p>
        <p>Continue through the application pages from <b>Step 1</b> through to <b>Step 5</b>
          by clicking on next icon appears in the bottom of the page. You are currently at Step 1. </p>
        <p> When you finish all the steps, press <b>Submit</b> icon appears in the last page of your application</p>
      </div>

      <div class="field">
        <label for="gender">*Gender:</label>
        <input name="gender" value="Male" type="radio" id="gender" checked="checked">Male
        <input name="gender" value="Female" type="radio">Female
      </div>

      <div class="field"> <label for="firstName">*First/Given Name:</label>
        <input name="firstName" class="txt" type="text" id="firstName">
      </div>

      <div class="field"><label for="lastName">*Last(Family) Name:</label>
        <input name="lastName" class="txt" type="text" id="lastName">
      </div>

      <div class="field"> <label for="dateofbirth">*Date of Birth: </label>
        Day
        <select name="day" id="dateofbirth">
          <option value="" selected="selected"></option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
        </select>
        Month
        <select name="month">
          <option value="" selected="selected"></option>
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
          <?php include('years.php'); ?>
        </select>
      </div>

      <div class="field"> <label for="nationality">*Nationality: </label>
        <select name="nationality" id="nationality">
          <?php include('countries.php'); ?>
        </select>
      </div>

      <div class="field"> <label for="specialNeeds">*Special Needs: </label>
        <select name="specialNeeds" id="specialNeeds">
          <option value="No Disability" selected="selected">No Disability</option>
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
        <input name="status" id="status" value="regular" checked="checked" type="radio">Regular Student
        <input name="status" value="scholarship" type="radio"> Scholarship Student
      </div>

      <div class="field">
        <input type="submit" class="bton" value="Next-->">
      </div>
    </form>
  </div>
</div>

