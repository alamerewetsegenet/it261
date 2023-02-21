
    <link href="styles.css" type="text/css" rel="stylesheet">

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ;?>" method="post">
<fieldset>
<legend><b>Contact Etsegenet</b></legend>

<label>First Name</label>
<input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name'])  ;?>">
<span class="error"><?php echo $first_name_err  ;?></span>
<label>Last Name</label>
<input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name'])  ;?>">
<span class="error"><?php echo $last_name_err  ;?></span>

<label>Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'])  ;?>">
<span class="error"><?php echo $email_err  ;?></span>

<label>Phone</label>
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ;?>">
<span class="error"><?php echo $phone_err  ;?></span>

<label>Favorite Brand</label>
<ul>
<li>
<input type="checkbox" name="brand[]" value="air" <?php if(isset($_POST['brand']) && in_array('air', $brand)) echo 'checked ="checked"'  ;?>>Air Jordan
</li>
<li>
<input type="checkbox" name="brand[]" value="golf" <?php if(isset($_POST['brand']) && in_array('golf', $brand)) echo 'checked ="checked"'  ;?>> Golf
</li>
<li>
<input type="checkbox" name="brand[]" value="force" <?php if(isset($_POST['brand']) && in_array('force', $brand)) echo 'checked ="checked"'  ;?>>Force
</li>
<li>
<input type="checkbox" name="brand[]" value="blazers" <?php if(isset($_POST['brand']) && in_array('blazers', $brand)) echo 'checked ="checked"'  ;?>>Blazers
</li>
<li>
<input type="checkbox" name="brand[]" value="pro" <?php if(isset($_POST['brand']) && in_array('pro', $brand)) echo 'checked ="checked"'  ;?>>Pro
</li>
</ul>
<span class="error"><?php echo $brand_err  ;?></span>



<label>Contact</label>
<ul>
<li>
<input type="radio" name="contact" value="customer" <?php if(isset($_POST['contact']) && $_POST['contact'] == 'customer') echo 'checked ="checked"'     ;?>>Customer Service
</li>
</ul>
<ul>
<li>
<input type="radio" name="contact" value="seller" <?php if(isset($_POST['contact']) && $_POST['contact'] == 'seller') echo 'checked ="checked"'     ;?>>Contact Seller
</li>
</ul>
<ul>
<li>
<input type="radio" name="contact" value="trader" <?php if(isset($_POST['contact']) && $_POST['contact'] == 'trader')echo 'checked ="checked"'     ;?>>Contact Trader
</li>
</ul>
<span class="error"><?php echo $contact_err  ;?></span>




<label>Returns or replace items</label>
<select name="returns">
<option value="" NULL <?php if(isset($_POST['returns']) && $_POST['returns'] == NULL) echo 'selected = "unselected"';?>>Select One!</option>
<option value="price" <?php if(isset($_POST['returns']) && $_POST['returns'] == 'price') echo 'selected = "selected"';?>>Inaccurate website description!</option>
<option value="wrong" <?php if(isset($_POST['returns']) && $_POST['returns'] == 'wrong') echo 'selected = "selected"';?>>Wrong items was sent!</option>
<option value="mistake" <?php if(isset($_POST['returns']) && $_POST['returns'] == 'mistake') echo 'selected = "selected"';?>>Better price avaliable!</option>
<option value="missing" <?php if(isset($_POST['returns']) && $_POST['returns'] == 'missing') echo 'selected = "selected"';?>>Missing parts!</option>
</select>
<span class="error"><?php echo $returns_err  ;?></span>



<label>Comments</label>
<textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments'])  ;?></textarea>
<span class="error"><?php echo $comments_err  ;?></span>
<label>Privacy</label>
<ul>
<li>
<input type="radio" name="privacy"  value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'yes')
 echo 'checked = "checked" '     ;?>>Privacy
</li>
</ul>
<span class="error"><?php echo $privacy_err  ;?></span>

<input type="submit" value="Send it!">
<input type="button" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF'];  ?>'" value="Reset">
</fieldset> 
</form> 
