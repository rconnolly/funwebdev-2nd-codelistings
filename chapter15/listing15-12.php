<form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>"
   class="form-horizontal" id="sampleForm" >
<fieldset>
<legend>Form with Validations</legend>
   
<!— Country select list -->
<div class="control-group <?php echo
     $countryValid->getCssClassName(); ?>" id="controlCountry">
  <label class="control-label" for="country">Country</label>
  <div class="controls">
    <select id="country" name="country" class="input-xlarge"
         value="<?php echo $countryValid->getValue(); ?>" >
      <option value="0">Choose a country</option>
      <option value="1"
<?php if ($countryValid->getValue()==1) echo "selected"; ?> >
        Canada</option>
      <option value="2"
<?php if ($countryValid->getValue()==2) echo "selected"; ?> >
        France</option>
      <option value="3"
<?php if ($countryValid->getValue()==3) echo "selected"; ?> >
        Germany</option>
      <option value="4"
<?php if ($countryValid->getValue()==4) echo "selected"; ?> >
        United States</option>
    </select>
   <span class="help-inline" id="errorCountry">
       <?php echo $countryValid->getErrorMessage(); ?>
    </span>
  </div>
</div>
   
<!— Email text box -->
<div class="control-group <?php echo
            $emailValid-> getCssClassName(); ?>" id="controlEmail">
  <label class="control-label" for="email">Email</label>
  <div class="controls">
    <input id="email" name="email" type="text"
       value="<?php echo $emailValid->getValue(); ?>"
          placeholder="enter an email" class="input-xlarge"
               required>
    <span class="help-inline" id="errorEmail">
       <?php echo $emailValid->getErrorMessage(); ?>
    </span>
  </div>
</div>
   
<!-- Password text box -->
<div class="control-group <?php echo $passValid->
            getCssClassName(); ?>" id="controlPassword">
  <label class="control-label" for="password">Password</label>
  <div class="controls">
    <input id="password" name="password" type="password"
       placeholder="enter at least six characters"
         class="input-xlarge" required>
    <span class="help-inline" id="errorPassword">
     <?php echo $passValid->getErrorMessage(); ?>
    </span>
  </div>
</div>
   
<!-- Submit button -->
<div class="control-group">
  <label class="control-label" for="singlebutton"></label>
  <div class="controls">
    <button id="singlebutton" name="singlebutton"
            class="btn btn-primary">
    Register</button>
  </div>
</div></fieldset>
</form>
   