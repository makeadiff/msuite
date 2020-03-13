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
          <m-input field-label="Your Name" name="name" field-type="text" required></m-input>
          <m-input field-label="Personal Email" name="email" field-type="email" required></m-input>
          <m-input field-label="Your Phone" name="phone" field-type="text" required></m-input>

          <m-select id ="user_sex" name="user_sex" value ="f" onchange="req(this);">
            <option >Sex</option>
            <option value="m">Male</option>
            <option value="f">Female</option>
            <option value="o">Other</option>
          </m-select>

          <div class="checkbox">
            <label>
              <input type="checkbox" checked="checked"/><i class="helper"></i>I'm the label from a checkbox
            </label>
          </div>

          <m-input field-type="date" name="user_birthday" field-label="Your Date of Birth" value="" required="" onchange="req(this);" max="2003-01-01"></m-input>

          <m-input field-type="text" name="user_address" field-label="Enter Your Address" required="" value=""/></m-input>

          <m-textarea name="user_address" field-label="Enter Your Address" required="" name="textarea"/>Some Random Value</m-textarea>

          <button type="button" class="button next"><span>Submit</span></button>
      </fieldset>
      <fieldset>
          <h1>Material Design formular</h1>
          <div class="form-group">
            <select>
              <option>Value 1</option>
              <option>Value 2</option>
            </select>
            <label for="select" class="control-label">Selectbox</label><i class="bar"></i>
          </div>
          <div class="form-group">
            <textarea required="required"></textarea>
            <label for="textarea" class="control-label">Textarea</label><i class="bar"></i>
          </div>

          <div class="checkbox">
            <label>
              <input type="checkbox"/><i class="helper"></i>I'm the label from a checkbox
            </label>
          </div>
          <div class="form-radio">
            <div class="radio">
              <label>
                <input type="radio" name="radio" checked="checked"/><i class="helper"></i>I'm the label from a radio button
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="radio"/><i class="helper"></i>I'm the label from a radio button
              </label>
            </div>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"/><i class="helper"></i>I'm the label from a checkbox
            </label>
          </div>
          <button type="button" class="button"><span>Submit</span></button>
      </fieldset>
      </div>
    </div>
  </div>
</div>
