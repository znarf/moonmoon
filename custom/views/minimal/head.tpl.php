<link rel="stylesheet" type="text/css" href="<?php echo Ld_Ui::getCssUrl('/h6e-minimal/h6e-minimal.css', 'css-h6e-minimal') ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo Ld_Ui::getCssUrl('/ld-ui/ld-ui.css', 'css-ld-ui') ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo Ld_Ui::getApplicationStyleUrl() ?>"/>

<link rel="stylesheet" media="screen" type="text/css" href="custom/style/minimal.css" title="Default" />

<style type="text/css">
<?php
$colors = Ld_Ui::getApplicationColors();
if ($colors['ld-colors-background'] != $colors['ld-colors-background-3'] || $colors['ld-colors-background'] != $colors['ld-colors-border-3'])
    echo ".h6e-block { padding:1em 1.5em; }". "\n";
?>
</style>

<link rel="alternate" type="application/atom+xml" title="ATOM" href="?type=atom10" />

<script type="text/javascript" src="<?php echo Ld_Ui::getJsUrl('/jquery/jquery.js', 'js-jquery') ?>"></script>
<script type="text/javascript" src="<?php echo Ld_Ui::getJsUrl('/ld/ld.js', 'lib-admin') ?>"></script>
