<?php $this->load->view('layouts/subheader'); ?>
<div class="kt-portlet">
  <div class="kt-portlet__head">
    <div class="kt-portlet__head-label">
      <h3 class="kt-portlet__head-title">
        Select2 Examples
      </h3>
    </div>
  </div>

  <form class="kt-form kt-form--fit kt-form--label-right">
    <div class="kt-portlet__body">
      <div class="form-group row">
        <label class="col-form-label col-lg-3 col-sm-12">Basic Example</label>
        <div class=" col-lg-4 col-md-9 col-sm-12">
          <select class="form-control kt-select2 select2-hidden-accessible" id="kt_select2_1" name="param"
            data-select2-id="kt_select2_1" tabindex="-1" aria-hidden="true">
            <option value="AK" data-select2-id="2">Alaska</option>
            <option value="HI">Hawaii</option>
            <option value="CA">California</option>
            <option value="NV">Nevada</option>
            <option value="OR">Oregon</option>
            <option value="WA">Washington</option>
            <option value="AZ">Arizona</option>
            <option value="CO">Colorado</option>
            <option value="ID">Idaho</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NM">New Mexico</option>
            <option value="ND">North Dakota</option>
            <option value="UT">Utah</option>
            <option value="WY">Wyoming</option>
            <option value="AL">Alabama</option>
            <option value="AR">Arkansas</option>
            <option value="IL">Illinois</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="OK">Oklahoma</option>
            <option value="SD">South Dakota</option>
            <option value="TX">Texas</option>
            <option value="TN">Tennessee</option>
            <option value="WI">Wisconsin</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="IN">Indiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="OH">Ohio</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WV">West Virginia</option>
          </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1"
            style="width: 371.388px;"><span class="selection"><span class="select2-selection select2-selection--single"
                role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
                aria-labelledby="select2-kt_select2_1-container"><span class="select2-selection__rendered"
                  id="select2-kt_select2_1-container" role="textbox" aria-readonly="true"
                  title="Alaska">Alaska</span><span class="select2-selection__arrow" role="presentation"><b
                    role="presentation"></b></span></span></span><span class="dropdown-wrapper"
              aria-hidden="true"></span></span>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-form-label col-lg-3 col-sm-12">Nested Example</label>
        <div class=" col-lg-4 col-md-9 col-sm-12">
          <select class="form-control kt-select2 select2-hidden-accessible" id="kt_select2_2" name="param"
            data-select2-id="kt_select2_2" tabindex="-1" aria-hidden="true">
            <optgroup label="Alaskan/Hawaiian Time Zone">
              <option value="AK">Alaska</option>
              <option value="HI">Hawaii</option>
            </optgroup>
            <optgroup label="Pacific Time Zone">
              <option value="CA">California</option>
              <option value="NV" selected="" data-select2-id="6">Nevada</option>
              <option value="OR">Oregon</option>
              <option value="WA">Washington</option>
            </optgroup>
            <optgroup label="Mountain Time Zone">
              <option value="AZ">Arizona</option>
              <option value="CO">Colorado</option>
              <option value="ID">Idaho</option>
              <option value="MT">Montana</option>
              <option value="NE">Nebraska</option>
              <option value="NM">New Mexico</option>
              <option value="ND">North Dakota</option>
              <option value="UT">Utah</option>
              <option value="WY">Wyoming</option>
            </optgroup>
            <optgroup label="Central Time Zone">
              <option value="AL">Alabama</option>
              <option value="AR">Arkansas</option>
              <option value="IL">Illinois</option>
              <option value="IA">Iowa</option>
              <option value="KS">Kansas</option>
              <option value="KY">Kentucky</option>
              <option value="LA">Louisiana</option>
              <option value="MN">Minnesota</option>
              <option value="MS">Mississippi</option>
              <option value="MO">Missouri</option>
              <option value="OK">Oklahoma</option>
              <option value="SD">South Dakota</option>
              <option value="TX">Texas</option>
              <option value="TN">Tennessee</option>
              <option value="WI">Wisconsin</option>
            </optgroup>
            <optgroup label="Eastern Time Zone">
              <option value="CT">Connecticut</option>
              <option value="DE">Delaware</option>
              <option value="FL">Florida</option>
              <option value="GA">Georgia</option>
              <option value="IN">Indiana</option>
              <option value="ME">Maine</option>
              <option value="MD">Maryland</option>
              <option value="MA">Massachusetts</option>
              <option value="MI">Michigan</option>
              <option value="NH">New Hampshire</option>
              <option value="NJ">New Jersey</option>
              <option value="NY">New York</option>
              <option value="NC">North Carolina</option>
              <option value="OH">Ohio</option>
              <option value="PA">Pennsylvania</option>
              <option value="RI">Rhode Island</option>
              <option value="SC">South Carolina</option>
              <option value="VT">Vermont</option>
              <option value="VA">Virginia</option>
              <option value="WV">West Virginia</option>
            </optgroup>
          </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5"
            style="width: 371.388px;"><span class="selection"><span class="select2-selection select2-selection--single"
                role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
                aria-labelledby="select2-kt_select2_2-container"><span class="select2-selection__rendered"
                  id="select2-kt_select2_2-container" role="textbox" aria-readonly="true"
                  title="Nevada">Nevada</span><span class="select2-selection__arrow" role="presentation"><b
                    role="presentation"></b></span></span></span><span class="dropdown-wrapper"
              aria-hidden="true"></span></span>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-form-label col-lg-3 col-sm-12">Multi Select</label>
        <div class=" col-lg-4 col-md-9 col-sm-12">
          <select class="form-control kt-select2 select2-hidden-accessible" id="kt_select2_3" name="param" multiple=""
            data-select2-id="kt_select2_3" tabindex="-1" aria-hidden="true">
            <optgroup label="Alaskan/Hawaiian Time Zone">
              <option value="AK" selected="" data-select2-id="10">Alaska</option>
              <option value="HI">Hawaii</option>
            </optgroup>
            <optgroup label="Pacific Time Zone">
              <option value="CA">California</option>
              <option value="NV" selected="" data-select2-id="11">Nevada</option>
              <option value="OR">Oregon</option>
              <option value="WA">Washington</option>
            </optgroup>
            <optgroup label="Mountain Time Zone">
              <option value="AZ">Arizona</option>
              <option value="CO">Colorado</option>
              <option value="ID">Idaho</option>
              <option value="MT" selected="" data-select2-id="12">Montana</option>
              <option value="NE">Nebraska</option>
              <option value="NM">New Mexico</option>
              <option value="ND">North Dakota</option>
              <option value="UT">Utah</option>
              <option value="WY">Wyoming</option>
            </optgroup>
            <optgroup label="Central Time Zone">
              <option value="AL">Alabama</option>
              <option value="AR">Arkansas</option>
              <option value="IL">Illinois</option>
              <option value="IA">Iowa</option>
              <option value="KS">Kansas</option>
              <option value="KY">Kentucky</option>
              <option value="LA">Louisiana</option>
              <option value="MN">Minnesota</option>
              <option value="MS">Mississippi</option>
              <option value="MO">Missouri</option>
              <option value="OK">Oklahoma</option>
              <option value="SD">South Dakota</option>
              <option value="TX">Texas</option>
              <option value="TN">Tennessee</option>
              <option value="WI">Wisconsin</option>
            </optgroup>
            <optgroup label="Eastern Time Zone">
              <option value="CT">Connecticut</option>
              <option value="DE">Delaware</option>
              <option value="FL">Florida</option>
              <option value="GA">Georgia</option>
              <option value="IN">Indiana</option>
              <option value="ME">Maine</option>
              <option value="MD">Maryland</option>
              <option value="MA">Massachusetts</option>
              <option value="MI">Michigan</option>
              <option value="NH">New Hampshire</option>
              <option value="NJ">New Jersey</option>
              <option value="NY">New York</option>
              <option value="NC">North Carolina</option>
              <option value="OH">Ohio</option>
              <option value="PA">Pennsylvania</option>
              <option value="RI">Rhode Island</option>
              <option value="SC">South Carolina</option>
              <option value="VT">Vermont</option>
              <option value="VA">Virginia</option>
              <option value="WV">West Virginia</option>
            </optgroup>
          </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="9"
            style="width: 371.388px;"><span class="selection"><span
                class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true"
                aria-expanded="false" tabindex="-1" aria-disabled="false">
                <ul class="select2-selection__rendered">
                  <li class="select2-selection__choice" title="Alaska" data-select2-id="13"><span
                      class="select2-selection__choice__remove" role="presentation">×</span>Alaska</li>
                  <li class="select2-selection__choice" title="Nevada" data-select2-id="14"><span
                      class="select2-selection__choice__remove" role="presentation">×</span>Nevada</li>
                  <li class="select2-selection__choice" title="Montana" data-select2-id="15"><span
                      class="select2-selection__choice__remove" role="presentation">×</span>Montana</li>
                  <li class="select2-search select2-search--inline"><input class="select2-search__field" type="search"
                      tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false"
                      role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li>
                </ul>
              </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-form-label col-lg-3 col-sm-12">Placeholder</label>
        <div class=" col-lg-4 col-md-9 col-sm-12">
          <select class="form-control kt-select2 select2-hidden-accessible" id="kt_select2_4" name="param"
            data-select2-id="kt_select2_4" tabindex="-1" aria-hidden="true">
            <option data-select2-id="17"></option>
            <optgroup label="Alaskan/Hawaiian Time Zone">
              <option value="AK">Alaska</option>
              <option value="HI">Hawaii</option>
            </optgroup>
            <optgroup label="Pacific Time Zone">
              <option value="CA">California</option>
              <option value="NV">Nevada</option>
              <option value="OR">Oregon</option>
              <option value="WA">Washington</option>
            </optgroup>
            <optgroup label="Mountain Time Zone">
              <option value="AZ">Arizona</option>
              <option value="CO">Colorado</option>
              <option value="ID">Idaho</option>
              <option value="MT">Montana</option>
              <option value="NE">Nebraska</option>
              <option value="NM">New Mexico</option>
              <option value="ND">North Dakota</option>
              <option value="UT">Utah</option>
              <option value="WY">Wyoming</option>
            </optgroup>
            <optgroup label="Central Time Zone">
              <option value="AL">Alabama</option>
              <option value="AR">Arkansas</option>
              <option value="IL">Illinois</option>
              <option value="IA">Iowa</option>
              <option value="KS">Kansas</option>
              <option value="KY">Kentucky</option>
              <option value="LA">Louisiana</option>
              <option value="MN">Minnesota</option>
              <option value="MS">Mississippi</option>
              <option value="MO">Missouri</option>
              <option value="OK">Oklahoma</option>
              <option value="SD">South Dakota</option>
              <option value="TX">Texas</option>
              <option value="TN">Tennessee</option>
              <option value="WI">Wisconsin</option>
            </optgroup>
            <optgroup label="Eastern Time Zone">
              <option value="CT">Connecticut</option>
              <option value="DE">Delaware</option>
              <option value="FL">Florida</option>
              <option value="GA">Georgia</option>
              <option value="IN">Indiana</option>
              <option value="ME">Maine</option>
              <option value="MD">Maryland</option>
              <option value="MA">Massachusetts</option>
              <option value="MI">Michigan</option>
              <option value="NH">New Hampshire</option>
              <option value="NJ">New Jersey</option>
              <option value="NY">New York</option>
              <option value="NC">North Carolina</option>
              <option value="OH">Ohio</option>
              <option value="PA">Pennsylvania</option>
              <option value="RI">Rhode Island</option>
              <option value="SC">South Carolina</option>
              <option value="VT">Vermont</option>
              <option value="VA">Virginia</option>
              <option value="WV">West Virginia</option>
            </optgroup>
          </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="16"
            style="width: 371.388px;"><span class="selection"><span class="select2-selection select2-selection--single"
                role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
                aria-labelledby="select2-kt_select2_4-container"><span class="select2-selection__rendered"
                  id="select2-kt_select2_4-container" role="textbox" aria-readonly="true"><span
                    class="select2-selection__placeholder">Select a state</span></span><span
                  class="select2-selection__arrow" role="presentation"><b
                    role="presentation"></b></span></span></span><span class="dropdown-wrapper"
              aria-hidden="true"></span></span>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-form-label col-lg-3 col-sm-12">Array Data</label>
        <div class=" col-lg-4 col-md-9 col-sm-12">
          <select class="form-control kt-select2 select2-hidden-accessible" id="kt_select2_5" name="param"
            data-select2-id="kt_select2_5" tabindex="-1" aria-hidden="true">
            <option value="2" data-select2-id="22">Duplicate</option>
            <option value="0" data-select2-id="20">Enhancement</option>
            <option value="1" data-select2-id="21">Bug</option>
            <option value="3" data-select2-id="23">Invalid</option>
            <option value="4" data-select2-id="24">Wontfix</option>
          </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="18"
            style="width: 371.388px;"><span class="selection"><span class="select2-selection select2-selection--single"
                role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
                aria-labelledby="select2-kt_select2_5-container"><span class="select2-selection__rendered"
                  id="select2-kt_select2_5-container" role="textbox" aria-readonly="true"
                  title="Duplicate">Duplicate</span><span class="select2-selection__arrow" role="presentation"><b
                    role="presentation"></b></span></span></span><span class="dropdown-wrapper"
              aria-hidden="true"></span></span>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-form-label col-lg-3 col-sm-12">Remote Data</label>
        <div class=" col-lg-4 col-md-9 col-sm-12">
          <select class="form-control kt-select2 select2-hidden-accessible" id="kt_select2_6" name="param"
            data-select2-id="kt_select2_6" tabindex="-1" aria-hidden="true">
            <option data-select2-id="26"></option>
          </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="25"
            style="width: 371.388px;"><span class="selection"><span class="select2-selection select2-selection--single"
                role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
                aria-labelledby="select2-kt_select2_6-container"><span class="select2-selection__rendered"
                  id="select2-kt_select2_6-container" role="textbox" aria-readonly="true"><span
                    class="select2-selection__placeholder">Search for git repositories</span></span><span
                  class="select2-selection__arrow" role="presentation"><b
                    role="presentation"></b></span></span></span><span class="dropdown-wrapper"
              aria-hidden="true"></span></span>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-form-label col-lg-3 col-sm-12">Disabled Mode</label>
        <div class=" col-lg-4 col-md-9 col-sm-12">
          <select class="form-control kt-select2 select2-hidden-accessible" id="kt_select2_7" disabled="" name="param"
            data-select2-id="kt_select2_7" tabindex="-1" aria-hidden="true">
            <option></option>
            <optgroup label="Alaskan/Hawaiian Time Zone">
              <option value="AK">Alaska</option>
              <option value="HI">Hawaii</option>
            </optgroup>
            <optgroup label="Pacific Time Zone">
              <option value="CA">California</option>
              <option value="NV" selected="" data-select2-id="28">Nevada</option>
              <option value="OR">Oregon</option>
              <option value="WA">Washington</option>
            </optgroup>
            <optgroup label="Mountain Time Zone">
              <option value="AZ">Arizona</option>
              <option value="CO">Colorado</option>
              <option value="ID">Idaho</option>
              <option value="MT">Montana</option>
              <option value="NE">Nebraska</option>
              <option value="NM">New Mexico</option>
              <option value="ND">North Dakota</option>
              <option value="UT">Utah</option>
              <option value="WY">Wyoming</option>
            </optgroup>
            <optgroup label="Central Time Zone">
              <option value="AL">Alabama</option>
              <option value="AR">Arkansas</option>
              <option value="IL">Illinois</option>
              <option value="IA">Iowa</option>
              <option value="KS">Kansas</option>
              <option value="KY">Kentucky</option>
              <option value="LA">Louisiana</option>
              <option value="MN">Minnesota</option>
              <option value="MS">Mississippi</option>
              <option value="MO">Missouri</option>
              <option value="OK">Oklahoma</option>
              <option value="SD">South Dakota</option>
              <option value="TX">Texas</option>
              <option value="TN">Tennessee</option>
              <option value="WI">Wisconsin</option>
            </optgroup>
            <optgroup label="Eastern Time Zone">
              <option value="CT">Connecticut</option>
              <option value="DE">Delaware</option>
              <option value="FL">Florida</option>
              <option value="GA">Georgia</option>
              <option value="IN">Indiana</option>
              <option value="ME">Maine</option>
              <option value="MD">Maryland</option>
              <option value="MA">Massachusetts</option>
              <option value="MI">Michigan</option>
              <option value="NH">New Hampshire</option>
              <option value="NJ">New Jersey</option>
              <option value="NY">New York</option>
              <option value="NC">North Carolina</option>
              <option value="OH">Ohio</option>
              <option value="PA">Pennsylvania</option>
              <option value="RI">Rhode Island</option>
              <option value="SC">South Carolina</option>
              <option value="VT">Vermont</option>
              <option value="VA">Virginia</option>
              <option value="WV">West Virginia</option>
            </optgroup>
          </select><span class="select2 select2-container select2-container--default select2-container--disabled"
            dir="ltr" data-select2-id="27" style="width: 371.388px;"><span class="selection"><span
                class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                aria-expanded="false" tabindex="-1" aria-disabled="true"
                aria-labelledby="select2-kt_select2_7-container"><span class="select2-selection__rendered"
                  id="select2-kt_select2_7-container" role="textbox" aria-readonly="true"
                  title="Nevada">Nevada</span><span class="select2-selection__arrow" role="presentation"><b
                    role="presentation"></b></span></span></span><span class="dropdown-wrapper"
              aria-hidden="true"></span></span>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-form-label col-lg-3 col-sm-12">Disabled Results</label>
        <div class=" col-lg-4 col-md-9 col-sm-12">
          <select class="form-control kt-select2 select2-hidden-accessible" id="kt_select2_8" name="param"
            data-select2-id="kt_select2_8" tabindex="-1" aria-hidden="true">
            <option data-select2-id="30"></option>
            <option value="one">First</option>
            <option value="two" disabled="disabled">Second (disabled)</option>
            <option value="three">Third</option>
          </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="29"
            style="width: 371.388px;"><span class="selection"><span class="select2-selection select2-selection--single"
                role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
                aria-labelledby="select2-kt_select2_8-container"><span class="select2-selection__rendered"
                  id="select2-kt_select2_8-container" role="textbox" aria-readonly="true"><span
                    class="select2-selection__placeholder">Select an option</span></span><span
                  class="select2-selection__arrow" role="presentation"><b
                    role="presentation"></b></span></span></span><span class="dropdown-wrapper"
              aria-hidden="true"></span></span>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-form-label col-lg-3 col-sm-12">Limiting Selections</label>
        <div class=" col-lg-4 col-md-9 col-sm-12">
          <select class="form-control kt-select2 select2-hidden-accessible" id="kt_select2_9" name="param" multiple=""
            data-select2-id="kt_select2_9" tabindex="-1" aria-hidden="true">
            <option></option>
            <optgroup label="Alaskan/Hawaiian Time Zone">
              <option value="AK">Alaska</option>
              <option value="HI">Hawaii</option>
            </optgroup>
            <optgroup label="Pacific Time Zone">
              <option value="CA">California</option>
              <option value="NV" selected="" data-select2-id="32">Nevada</option>
              <option value="OR">Oregon</option>
              <option value="WA">Washington</option>
            </optgroup>
            <optgroup label="Mountain Time Zone">
              <option value="AZ">Arizona</option>
              <option value="CO">Colorado</option>
              <option value="ID">Idaho</option>
              <option value="MT">Montana</option>
              <option value="NE">Nebraska</option>
              <option value="NM">New Mexico</option>
              <option value="ND">North Dakota</option>
              <option value="UT">Utah</option>
              <option value="WY">Wyoming</option>
            </optgroup>
            <optgroup label="Central Time Zone">
              <option value="AL">Alabama</option>
              <option value="AR">Arkansas</option>
              <option value="IL">Illinois</option>
              <option value="IA">Iowa</option>
              <option value="KS">Kansas</option>
              <option value="KY">Kentucky</option>
              <option value="LA">Louisiana</option>
              <option value="MN">Minnesota</option>
              <option value="MS">Mississippi</option>
              <option value="MO">Missouri</option>
              <option value="OK">Oklahoma</option>
              <option value="SD">South Dakota</option>
              <option value="TX">Texas</option>
              <option value="TN">Tennessee</option>
              <option value="WI">Wisconsin</option>
            </optgroup>
            <optgroup label="Eastern Time Zone">
              <option value="CT">Connecticut</option>
              <option value="DE">Delaware</option>
              <option value="FL">Florida</option>
              <option value="GA">Georgia</option>
              <option value="IN">Indiana</option>
              <option value="ME">Maine</option>
              <option value="MD">Maryland</option>
              <option value="MA">Massachusetts</option>
              <option value="MI">Michigan</option>
              <option value="NH">New Hampshire</option>
              <option value="NJ">New Jersey</option>
              <option value="NY">New York</option>
              <option value="NC">North Carolina</option>
              <option value="OH">Ohio</option>
              <option value="PA">Pennsylvania</option>
              <option value="RI">Rhode Island</option>
              <option value="SC">South Carolina</option>
              <option value="VT">Vermont</option>
              <option value="VA">Virginia</option>
              <option value="WV">West Virginia</option>
            </optgroup>
          </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="31"
            style="width: 371.388px;"><span class="selection"><span
                class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true"
                aria-expanded="false" tabindex="-1" aria-disabled="false">
                <ul class="select2-selection__rendered">
                  <li class="select2-selection__choice" title="Nevada" data-select2-id="33"><span
                      class="select2-selection__choice__remove" role="presentation">×</span>Nevada</li>
                  <li class="select2-search select2-search--inline"><input class="select2-search__field" type="search"
                      tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false"
                      role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li>
                </ul>
              </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-form-label col-lg-3 col-sm-12">Hiding Search box</label>
        <div class=" col-lg-4 col-md-9 col-sm-12">
          <select class="form-control kt-select2 select2-hidden-accessible" id="kt_select2_10" name="param"
            data-select2-id="kt_select2_10" tabindex="-1" aria-hidden="true">
            <option data-select2-id="35"></option>
            <optgroup label="Alaskan/Hawaiian Time Zone">
              <option value="AK">Alaska</option>
              <option value="HI">Hawaii</option>
            </optgroup>
            <optgroup label="Pacific Time Zone">
              <option value="CA">California</option>
              <option value="NV">Nevada</option>
              <option value="OR">Oregon</option>
              <option value="WA">Washington</option>
            </optgroup>
            <optgroup label="Mountain Time Zone">
              <option value="AZ">Arizona</option>
              <option value="CO">Colorado</option>
              <option value="ID">Idaho</option>
              <option value="MT">Montana</option>
              <option value="NE">Nebraska</option>
              <option value="NM">New Mexico</option>
              <option value="ND">North Dakota</option>
              <option value="UT">Utah</option>
              <option value="WY">Wyoming</option>
            </optgroup>
            <optgroup label="Central Time Zone">
              <option value="AL">Alabama</option>
              <option value="AR">Arkansas</option>
              <option value="IL">Illinois</option>
              <option value="IA">Iowa</option>
              <option value="KS">Kansas</option>
              <option value="KY">Kentucky</option>
              <option value="LA">Louisiana</option>
              <option value="MN">Minnesota</option>
              <option value="MS">Mississippi</option>
              <option value="MO">Missouri</option>
              <option value="OK">Oklahoma</option>
              <option value="SD">South Dakota</option>
              <option value="TX">Texas</option>
              <option value="TN">Tennessee</option>
              <option value="WI">Wisconsin</option>
            </optgroup>
            <optgroup label="Eastern Time Zone">
              <option value="CT">Connecticut</option>
              <option value="DE">Delaware</option>
              <option value="FL">Florida</option>
              <option value="GA">Georgia</option>
              <option value="IN">Indiana</option>
              <option value="ME">Maine</option>
              <option value="MD">Maryland</option>
              <option value="MA">Massachusetts</option>
              <option value="MI">Michigan</option>
              <option value="NH">New Hampshire</option>
              <option value="NJ">New Jersey</option>
              <option value="NY">New York</option>
              <option value="NC">North Carolina</option>
              <option value="OH">Ohio</option>
              <option value="PA">Pennsylvania</option>
              <option value="RI">Rhode Island</option>
              <option value="SC">South Carolina</option>
              <option value="VT">Vermont</option>
              <option value="VA">Virginia</option>
              <option value="WV">West Virginia</option>
            </optgroup>
          </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="34"
            style="width: 371.388px;"><span class="selection"><span class="select2-selection select2-selection--single"
                role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
                aria-labelledby="select2-kt_select2_10-container"><span class="select2-selection__rendered"
                  id="select2-kt_select2_10-container" role="textbox" aria-readonly="true"><span
                    class="select2-selection__placeholder">Select an option</span></span><span
                  class="select2-selection__arrow" role="presentation"><b
                    role="presentation"></b></span></span></span><span class="dropdown-wrapper"
              aria-hidden="true"></span></span>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-form-label col-lg-3 col-sm-12">Tagging Support</label>
        <div class=" col-lg-4 col-md-9 col-sm-12">
          <select class="form-control kt-select2 select2-hidden-accessible" id="kt_select2_11" multiple="" name="param"
            data-select2-id="kt_select2_11" tabindex="-1" aria-hidden="true">
            <option></option>
            <optgroup label="Alaskan/Hawaiian Time Zone">
              <option value="AK">Alaska</option>
              <option value="HI">Hawaii</option>
            </optgroup>
            <optgroup label="Pacific Time Zone">
              <option value="CA">California</option>
              <option value="NV">Nevada</option>
              <option value="OR">Oregon</option>
              <option value="WA">Washington</option>
            </optgroup>
            <optgroup label="Mountain Time Zone">
              <option value="AZ">Arizona</option>
              <option value="CO">Colorado</option>
              <option value="ID">Idaho</option>
              <option value="MT">Montana</option>
              <option value="NE">Nebraska</option>
              <option value="NM">New Mexico</option>
              <option value="ND">North Dakota</option>
              <option value="UT">Utah</option>
              <option value="WY">Wyoming</option>
            </optgroup>
            <optgroup label="Central Time Zone">
              <option value="AL">Alabama</option>
              <option value="AR">Arkansas</option>
              <option value="IL">Illinois</option>
              <option value="IA">Iowa</option>
              <option value="KS">Kansas</option>
              <option value="KY">Kentucky</option>
              <option value="LA">Louisiana</option>
              <option value="MN">Minnesota</option>
              <option value="MS">Mississippi</option>
              <option value="MO">Missouri</option>
              <option value="OK">Oklahoma</option>
              <option value="SD">South Dakota</option>
              <option value="TX">Texas</option>
              <option value="TN">Tennessee</option>
              <option value="WI">Wisconsin</option>
            </optgroup>
            <optgroup label="Eastern Time Zone">
              <option value="CT">Connecticut</option>
              <option value="DE">Delaware</option>
              <option value="FL">Florida</option>
              <option value="GA">Georgia</option>
              <option value="IN">Indiana</option>
              <option value="ME">Maine</option>
              <option value="MD">Maryland</option>
              <option value="MA">Massachusetts</option>
              <option value="MI">Michigan</option>
              <option value="NH">New Hampshire</option>
              <option value="NJ">New Jersey</option>
              <option value="NY">New York</option>
              <option value="NC">North Carolina</option>
              <option value="OH">Ohio</option>
              <option value="PA">Pennsylvania</option>
              <option value="RI">Rhode Island</option>
              <option value="SC">South Carolina</option>
              <option value="VT">Vermont</option>
              <option value="VA">Virginia</option>
              <option value="WV">West Virginia</option>
            </optgroup>
          </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="36"
            style="width: 371.388px;"><span class="selection"><span
                class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true"
                aria-expanded="false" tabindex="-1" aria-disabled="false">
                <ul class="select2-selection__rendered">
                  <li class="select2-search select2-search--inline"><input class="select2-search__field" type="search"
                      tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false"
                      role="searchbox" aria-autocomplete="list" placeholder="Add a tag" style="width: 343.788px;"></li>
                </ul>
              </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-form-label col-lg-3 col-sm-12">Modal Demos</label>
        <div class=" col-lg-4 col-md-9 col-sm-12">
          <a href="" class="btn btn-success btn-pill" data-toggle="modal" data-target="#kt_select2_modal">Launch modal
            select2s</a>
        </div>
      </div>
    </div>
    <div class="kt-portlet__foot">
      <div class="kt-form__actions">
        <div class="row">
          <div class="col-lg-9 ml-lg-auto">
            <button type="reset" class="btn btn-brand">Submit</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
          </div>
        </div>
      </div>
    </div>
  </form>

</div>