<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ucreate email signatures</title>
  </head>
  <body>
    <?php
    $json = file_get_contents('data.json');
    $obj = json_decode( $json );
    //var_dump($obj);
    ?>
<style media="screen">
  span {
    color: #ccc;
  }
</style>
    <?php foreach($obj as $member): ?>
      <span style="display: block; margin: 20px 0;">copy from here</span>
     <div style="font-family:-apple-system, BlinkMacSystemFont, “Segoe UI”, Roboto, Helvetica, Arial, sans-serif;">
       <table border="0" cellspacing="0">
          <tr>
            <td style="padding-top: 5px;">
              <p style="color: #050633; margin: 0px; padding-bottom: 2px; font-size: 16px!important; font-weight: 500; font-weight: bold;">
                <?php if(!empty($member->linkedin)): ?>
                <a style="color: #050633; text-decoration: none;" href="<?php echo $member->linkedin;?>"><?php echo $member->name; ?></a>
              <?php else: ?>
                <?php echo $member->name; ?>
              <?php endif; ?>
              </p>
              <?php if(!empty($member->position)): ?><p style="margin: 0px; padding: 0; font-size: 14px; color: #2329D6;font-weight: 500; font-weight: bold;"><?php echo $member->position; ?></p><?php endif; ?>
              <?php if(!empty($member->mobile)): ?>
                <p style="margin-bottom: 0;padding: 0; font-size: 14px; color: #050633;">
                  <a style="color: #050633; text-decoration: none;" href="tel:<?php echo str_replace(' ','',$member->mobile);?>">
                    <?php echo $member->mobile; ?>
                  </a>
                </p>
              <?php endif; ?>
              <a href="https://www.ucreate.it"><img src="https://s3-eu-west-1.amazonaws.com/ucreate/ucreate-logo_250x49.png" alt="ucreate.it" height="24" style="margin-top: 24px;"></a>
                <p style="font-size: 12px; color: #f5f5f5;">
                  <a href="https://www.facebook.com/ucreateit-404971796259264/?fref=ts" target="_blank" style="color: #050633; text-decoration: none;">Facebook</a> |
                  <a href="https://twitter.com/uCreate_" style="color: #050633; text-decoration: none;">Twitter</a> |
                  <a href="https://www.instagram.com/ucreate.it/" style="color: #050633; text-decoration: none;">Instagram</a> |
                  <a href="https://www.linkedin.com/company/ucreate-it" style="color: #050633; text-decoration: none;">LinkedIn</a> |
                  <a style="color: #2329D6; text-decoration: none; font-weight: bold;" href="https://www.ucreate.it">ucreate.it</a></p>
            </td>
          </tr>
       </table>
     </div>
      <span style="display: block; margin: 20px 0;">to here</span>
    <?php endforeach; ?>
  </body>
</html>
