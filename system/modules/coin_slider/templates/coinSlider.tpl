<div class="<?php echo $this->class; ?> block"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>
    <?php if ($this->headline): ?>
        <<?php echo $this->hl; ?>><?php echo $this->headline; ?></<?php echo $this->hl; ?>>
    <?php endif; ?>

    <?php if ($this->ifPictures == true): ?>

        <?php foreach ($this->preferences as $preferences): ?><?php endforeach; ?>

        <div id="<?php echo $preferences['alias']; ?>">

        <?php foreach ($this->pictures as $pictures): ?>

            <a href="<?php echo $pictures['imageUrl'] ?>">
                <img alt="<?php echo $pictures['alt'] ?>" src="<?php echo $pictures['singleSRC'] ?>" />
                <span><?php echo $pictures['description'] ?></span>
            </a>

        <?php endforeach; ?>

        </div>

    <?php else: echo '<p><strong>' . $GLOBALS['TL_LANG']['MSC']['noImages'] . '</strong></p><br />'; ?>
    <?php endif; ?>

</div>


<script type="text/javascript">
<!--//--><![CDATA[//><!--

jQuery.noConflict();
    jQuery(document).ready(function(){
        jQuery('#<?php echo $preferences['alias']; ?>').coinslider({
            width : <?php echo $preferences['width']; ?>,
            height : <?php echo $preferences['height']; ?>,
            spw : <?php echo $preferences['spw']; ?>,
            sph : <?php echo $preferences['sph']; ?>,
            delay : <?php echo $preferences['delay']; ?>,
            sDelay : <?php echo $preferences['sDelay']; ?>,
            opacity : <?php echo $preferences['opacity']; ?>,
            titleSpeed : <?php echo $preferences['titleSpeed']; ?>,
            <?php if ($preferences['effect'] == 'all'): ?>
                <?php echo "effect : ''  ,\n"; ?>
            <?php else: echo "effect :" . "'" . $preferences['effect'] . "',\n"; ?>
            <?php endif; ?>
            <?php if ($preferences['navigation'] == true): ?>
                <?php echo 'navigation : true,' . "\n"; ?>
            <?php else: echo 'navigation : false,' . "\n"; ?>
            <?php endif; ?>
            <?php if ($preferences['links'] == true): ?>
                <?php echo 'links : true,' . "\n"; ?>
            <?php else: echo 'links : false,' . "\n"; ?>
            <?php endif; ?>
            <?php if ($preferences['hoverPause'] == true): ?>
                <?php echo 'hoverPause : true' . "\n"; ?>
            <?php else: echo 'hoverPause : false' . "\n"; ?>
            <?php endif; ?>
    });
<?php echo '});' ."\n"; ?>
//--><!]]>
</script>