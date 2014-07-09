<div class="container">
  <div class="crow up">

    <div class="ws-5">
      <div class="input">
        <label for="firstname">
          First name
        </label>
        <input type="text" name="firstname" id="firstname" placeholder="Type here" />
        <div class="drop down-left max error-message">
          <span>Incorrect input</span>
          <div class="pull-right">
            <i class="icon icon-warning"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="ws-5">
      <div class="input">
        <label for="lastname">
          Last name
        </label>
        <input type="text" name="lastname" id="lastname" placeholder="Type here" />
        <div class="drop down-left max error-message">
          <span>Incorrect input</span>
          <div class="pull-right">
            <i class="icon icon-warning"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="ws-2 down">
      <div class="input">
        <input type="radio" name="radiobox" id="radiobox" />
        <label for="radiobox">
          Correct? <span class="text-red">*</span>
        </label>
      </div>
    </div>

    <div class="ws-5">
      <div class="input">
        <label for="phone">
          Phone number
        </label>
        <input type="text" disabled name="phone" id="phone" placeholder="Disabled input" />
        <div class="drop down-left max error-message">
          <span>Incorrect input</span>
          <div class="pull-right">
            <i class="icon icon-warning"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="ws-7">
      <div class="input error">
        <label for="email">
          Email
        </label>
        <input type="text" name="email" id="email" placeholder="Type here" value="invalidemail@mail" />
        <div class="drop down-left max error-message">
          <span>Incorrect input</span>
          <div class="pull-right">
            <i class="icon icon-warning"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="ws-5 up">
      <div class="input">
        <label for="select">
          Industry
        </label>
        <div class="spacer quarter"></div>
        <select id="select">
          <option>Web development</option>
          <option>Other</option>
        </select>
        <div class="drop down-left max error-message">
          <span>Incorrect input</span>
          <div class="pull-right">
            <i class="icon icon-warning"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="ws-3 up">
      <div class="input">
        <label for="checkbox">
          Here's your choices
        </label>
        <div class="spacer quarter"></div>
        <ul class="unstyled">
          <li>
            <input type="checkbox" name="checkbox" id="c1" /> <label for="c1" class="text-grey text-plus-2">Newsletter</label>
          </li>
          <li>
            <input type="checkbox" name="checkbox" id="c2" /> <label for="c2" class="text-grey text-plus-2">Apply to win</label>
          </li>
        </ul>
        <div class="drop down-left max error-message">
          <span>Incorrect input</span>
          <div class="pull-right">
            <i class="icon icon-warning"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="ws-4 up">
      <div class="input">
        <label for="switch">
          Male/female
        </label>
        <div class="spacer quarter"></div>
        <div class="onoffswitch">
          <input type="checkbox" name="switch" class="checkbox" id="switch">
          <label class="switch" for="switch">
            <div class="inner">
              <div class="on">
                <div class="value">
                  Male
                </div>
              </div>
              <div class="off">
                <div class="value">
                  Female
                </div>
              </div>
            </div>
            <div class="handle"></div>
          </label>
        </div>
        <div class="drop down-left max error-message">
          <span>Incorrect input</span>
          <div class="pull-right">
            <i class="icon icon-warning"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="ws-12">
      <div class="input">
        <label for="textarea">
          Description
        </label>
        <textarea name="textarea" placeholder="Enter description here"></textarea>
        <div class="drop down-left max error-message">
          <span>Incorrect input</span>
          <div class="pull-right">
            <i class="icon icon-warning"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="ws-12">
      <div class="input">
        <input type="submit" class="button fill-cyan text-white" value="Submit" />
      </div>
    </div>

    <div class="ws-12">
      <div class="input">
        <span class="label"><span class="text-red">*</span> Mandatory fields</span>
      </div>
    </div>
  </div>
</div>