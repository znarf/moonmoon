<?php if (class_exists('Ld_Ui')) : ?>
<link rel="stylesheet" type="text/css" href="<?php echo Ld_Ui::getCssUrl('/ld-ui/ld-ui.css', 'css-ld-ui') ?>"/>
<?php
if (defined('LD_APPEARANCE') && constant('LD_APPEARANCE')) {
	echo '<link rel="stylesheet" type="text/css" href="' . Ld_Ui::getApplicationStyleUrl('bars') . '" />'."\n";
}
?>
<style type="text/css">
body { margin-top:30px; margin-bottom:60px; }
p.logout { display:none; }
</style>
<script type="text/javascript" src="<?php echo Ld_Ui::getJsUrl('/jquery/jquery.js', 'js-jquery') ?>"></script>
<script type="text/javascript" src="<?php echo Ld_Ui::getJsUrl('/ld/ld.js', 'lib-admin') ?>"></script>
<?php endif ?>