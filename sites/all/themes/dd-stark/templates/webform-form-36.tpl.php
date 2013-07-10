<div class="width-50">
    <p>
        <?php print drupal_render($form['submitted']['inquiry_type']); ?>
    </p>
    <p>
        <?php print drupal_render($form['submitted']['name']); ?>
    </p>
    <p>
        <?php print drupal_render($form['submitted']['address']); ?>
    </p>

</div>

<div class="width-50">
    <p>
        <?php print drupal_render($form['submitted']['email']); ?>
    </p>
    <p>
        <?php print drupal_render($form['submitted']['question']); ?>
    </p>
    <p class="font-17">
        <?php print drupal_render($form['submitted']['attach']); ?>
    </p>
    <?php print drupal_render_children($form); ?>
    <p class="font-17">
        <a href="#" class="attach-submit"><img src="/sites/all/themes/stark/images/button-submit.jpg"></a>
        <br><br>
        (<span style="color:#fe1414;">*</span>Items are required)
    </p>
</div>

<script src="/sites/all/themes/stark/js/jInputFile.js"></script>
<link rel="stylesheet" type="text/css" href="/sites/all/themes/stark/css/jInputFile.css" />

<script>
(function ($) {

        $(document).ready( function() {
        	$('#edit-submitted-attach-upload').jInputFile();
        	
        	$('#edit-submitted-attach').css({width: '100%', height: '57px'});
        	
        	$('#edit-submitted-attach > div').attr('style', '');
        	
        	$('#edit-submitted-attach input').css({height: '57px', cursor: 'pointer'});
        	
        	$('#edit-submitted-attach-upload').attr('size', 60);
        } );  
})(jQuery);
</script>
