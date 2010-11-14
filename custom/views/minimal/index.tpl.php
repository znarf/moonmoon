<?php
$limit = $PlanetConfig->getMaxDisplay();
$count = 0;

header('Content-type: text/html; charset=UTF-8');
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>
<title><?php echo $PlanetConfig->getName(); ?></title>
<?php include(dirname(__FILE__).'/head.tpl.php'); ?>
</head>

<body class="h6e-layout">

    <div id="page">

        <?php include(dirname(__FILE__).'/top.tpl.php'); ?>

        <div id="content">
            <?php if (0 == count($items)) : ?>
                <div class="article h6e-block">
                    <h2 class="article-title h6e-entry-title">No article</h2>
                    <div class="article-content h6e-post-content">
                        <p>No news, good news.</p>
                    </div>
                </div>
            <?php else : ?>
                <?php foreach ($items as $item): ?>
                    <?php
                    $arParsedUrl = parse_url($item->get_feed()->getWebsite());
                    $host = 'from-' . preg_replace('/[^a-zA-Z0-9]/i', '-', $arParsedUrl['host']);
                    ?>
                    <div class="article h6e-block <?php echo $host; ?>">
                        <h2 class="article-title h6e-entry-title">
                            <a href="<?php echo $item->get_permalink(); ?>" title="Go to original place"><?php echo $item->get_title(); ?></a>
                        </h2>
                        <p class="article-info h6e-post-info">
                            <?php
                            if (method_exists('Ld_Ui', 'relativeTime')) {
                                echo '<span id="post'.$item->get_date('U').'" class="date">'.Ld_Ui::relativeTime($item->get_date('U')).'</span>';
                            } else {
                                echo '<span id="post'.$item->get_date('U').'" class="date">'.$item->get_date('d/m/Y').'</span>';
                            }
                            ?>
                        </p>
                        <div class="article-content h6e-post-content">
                            <?php echo $item->get_content(); ?>
                        </div>
                        <p>
                            Source: <?php
                            $feed = $item->get_feed();
                            echo '<a href="'.$feed->getWebsite().'" class="source">'.$feed->getName().'</a>';
                            ?>
                        </p>
                    </div>
                    <?php if (++$count == $limit) { break; } ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <?php include_once(dirname(__FILE__).'/sidebar.tpl.php'); ?>

        <?php include(dirname(__FILE__).'/footer.tpl.php'); ?>
    </div>

</body>
</html>
