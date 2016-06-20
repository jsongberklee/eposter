<?php
/**
 * Theme social links.
 *
 * @param array $params
 *   An array containing the keys:
 *   - 'http': Connection protocol, http or https.
 *   - 'api_key': API Key.
 *   - 'loc': Current URL.
 */
?>

<?php
  $provider = variable_get('socialloginandsocialshare_emailrequired_popup_top');
  $message = str_replace('@provider',$popup_params['provider'],$provider);
  ?>
  <div class="LoginRadius_overlay LoginRadius_content_IE">
  <div id="popupouter"><p id ="outerp"> <?php print  $message ?></p><div id="popupinner"><div id="textmatter"  <?php 
  if ($popup_params['msgtype'] == 'warning') :?> style ='background-color: #f6d9d0; border: 1px solid #990000;'; <?php else : ?> style='background-color: #e1eabc; border: 1px solid #90b203';  <?php endif; ?>>
  <?php 
  if ($popup_params['msg']) :?>
   <strong> <?php print $popup_params['msg']  ?></strong>
    <?php endif; ?>
  </div><div>
 <p id = "innerp">Enter your email:</p></div>
  <form id="socialloginandsocialshare-popup-form"  method="post"  action="">
  <div><div class="form-item form-type-textfield form-item-email">
  <input type="text" name="email" id="email" class="inputtxt" /></div>
  <input type="submit" name="socialloginandsocialshare_emailclick" id="socialloginandsocialshare_emailclick"  value="Submit" class="inputbutton form-submit" />
  <input type="submit" name="socialloginandsocialshare_emailclick_cancel" id="socialloginandsocialshare_emailclick_cancel" value="Cancel" class="inputbutton form-submit" />
  </div></form>
  </div></div></div>
