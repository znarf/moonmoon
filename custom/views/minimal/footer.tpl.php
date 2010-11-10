</div>

<div id="footer" class="h6e-simple-footer">
    <p>Powered by <a href="http://moonmoon.org/">moonmoon</a>
        via <a href="http://ladistribution.net/">La Distribution</a>
    </p>
</div>

</div>

<?php
$conf = $application->getConfiguration();
if (isset($conf['superbar']) && $conf['superbar'] == 'never') {
    // nothing
} elseif (isset($conf['superbar']) && $conf['superbar'] == 'connected' && Ld_Auth::isAuthenticated()) {
    Ld_Ui::superBar();
} else {
    Ld_Ui::superBar();
}
?>