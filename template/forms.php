<div class="container">
  <div class="row justify-content-md-center">
    <div class="col-md-8">
      <div class="mform">
        <ul class="progressbar">
          <li class="active">
            <span class="hide-mobile">Personal Information</span>
          </li>
          <li>
            <span class="hide-mobile">Section 2</span>
          </li>
          <li>
            <span class="hide-mobile">Section 3</span>
          </li>
        </ul>
        <fieldset>
          <br>
          <h2 class="title">Basic Personal Information Form</h2>
          <h3 class="subtitle">Please verify your personal details.</h3>
          <hr>
          <p class="form-label">
            Hello, you amazing person.
          </p>
          <p class="form-label">
            Form Label
          </p>
          <hr>
          <p class="required-text">*Required</p>
          <input type='text' name="user_city_id" class="hidden" value=""/>
          <p class="form-label">Full Name <span class="required">*</span></p>
          <input type="text" name="user_name" onchange="req(this);" placeholder="Your Full Name" value="" required=""/>
          <p class="form-label">Personal Email <span class="required">*</span></p>
          <input type="email" name="user_email"onchange="req(this);" placeholder="Email Address" value="" required=""/>
          <p class="form-label">Phone No. <span class="required">*</span></p>
          <input type="text" name="user_phone" onchange="{req(this); validphone(this);}" placeholder="Phone" value = "" required=""/>
          <p class="form-label">Sex <span class="required">*</span></p>
          <div class="select">
            <select id ="user_sex" name="user_sex" value ="f" onchange="req(this);">
                     <option >Sex</option>
                     <option value="m">Male</option>
                     <option value="f">Female</option>
                     <option value="o">Other</option>
            </select>
          </div>
          <p class="form-label">Date of Birth (DD/MM/YYYY) <span class="required">*</span></p>
          <input type="date" name="user_birthday" placeholder="birthday" value="" required="" onchange="req(this);" max="2003-01-01">
          <p class="form-label">Address <span class="required">*</span></p>
          <input type="text" name="user_address" placeholder="Enter Your Address" required="" value=""/><br>
          <hr>
          <input type="button" name="next" class="next action-button" value="Next"/>
          <input type="button" name="next" class="next sub-action-button" value="Next"/>
      </fieldset>
      </div>
    </div>
  </div>
</div>
