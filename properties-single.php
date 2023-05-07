<div class="advertisement_card">
    <img class="advertisement_card-img" src="<?php the_field('house_image') ?>">
    <h2 class="advertisement_card-title">
        <?php the_field('house_title') ?>
    </h2>
    <p class="advertisement_card-desc">
        <?php the_field('house_subtitle') ?>
    </p>
    <div class="advertisement_card-info">
        <p class="price">
            <?php the_field('house_price') ?>$
        </p>
        <p class="square-m"><mark>
                <?php the_field('house_area') ?>sqft
            </mark> Living Area</p>
    </div>
    <div class="advertisement_card-btn">
        <button>Send Inquiry</button>
    </div>
</div>