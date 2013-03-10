<?php
global $post;
$game = get_post_meta($post->ID, 'wpcf-game', true);
if ($game) :
?>
    <section>
        <object height="680" width="925" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000">
            <param value="<?php echo $game ?>" name="movie">
            <param value="high" name="quality">
            <param value="transparent" name="wmode">
            <embed height="680" width="690" wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" quality="high" src="<?php echo $game ?>">
        </object>
    </section>
<?php endif ?>