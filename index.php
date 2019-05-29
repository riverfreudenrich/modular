<?php if( have_rows('modular') ): ?>
<div id="modular">
<?php while ( have_rows('modular') ) : the_row(); ?>

    <?php if (get_row_layout() == 'slider') : ?>
    	<!-- Add your slider/slider fields here -->
    <?php endif; ?>

    <?php if (get_row_layout() == 'content') : ?>
    	<!-- Add your content/content fields here -->
    <?php endif; ?>

    <?php if (get_row_layout() == 'flexbox') : ?>
    	<!-- Add your flexbox/flexbox fields here -->
    <?php endif; ?>

    <?php if (get_row_layout() == 'icons') : ?>
    	<!-- Add your icons/icon fields here -->
    <?php endif; ?>

<?php endwhile; ?>
</div>
<?php endif; ?>
