<?php
$all_people = &$Planet->getPeople();
usort($all_people, array('PlanetPerson', 'compare'));
?>
<div id="sidebar" class="aside">
    <div id="sidebar-people" class="section h6e-block">
        <h3 class="h6e-extra-title">Subscriptions</h3>
        <ul>
            <?php foreach ($all_people as $person) : ?>
            <li>
                <a href="<?php echo htmlspecialchars($person->getFeed(), ENT_QUOTES, 'UTF-8'); ?>" title="Feed"><img src="postload.php?url=<?php echo urlencode(htmlspecialchars($person->getFeed(), ENT_QUOTES, 'UTF-8')); ?>" alt="" height="12" width="12" /></a>
                <a href="<?php echo $person->getWebsite(); ?>" title="Website"><?php echo htmlspecialchars($person->getName(), ENT_QUOTES, 'UTF-8'); ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
        <p>
        <img src="custom/img/opml.png" alt="feed" height="12" width="12" /> <a href="custom/people.opml">All feeds in OPML format</a>
        </p>
    </div>
    
    <div class="section h6e-block">
        <h3 class="h6e-extra-title">Syndicate</h3>
        <ul>
            <li><img src="custom/img/feed.png" alt="feed" height="12" width="12" />&nbsp;<a href="?type=atom10">Feed (ATOM)</a></li>
        </ul>
    </div>

    <?php if ($application->getUserRole() == 'administrator') : ?>
    <div class="section h6e-block">
        <h3 class="h6e-extra-title">Meta</h3>
        <ul>
            <li><a href="./admin/">Administration</a></li>
        </ul>
    </div>
    <?php endif ?>

</div>