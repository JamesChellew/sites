<?php

/**
 * Title: Blockpage PRO: Product Grid Layout with Two Row
 * Slug: walker-core/blockpage-product-block-grid
 * Categories: blockpage-woo
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","bottom":"120px","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:60px;padding-right:var(--wp--preset--spacing--50);padding-bottom:120px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
    <div class="wp-block-group" style="margin-bottom:60px"><!-- wp:heading {"textAlign":"center","level":5,"textColor":"primary"} -->
        <h5 class="wp-block-heading has-text-align-center has-primary-color has-text-color"><?php echo esc_html_e('Shop', 'walker-core') ?></h5>
        <!-- /wp:heading -->

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"className":"blockpage-heading","fontSize":"xxx-large"} -->
        <h1 class="wp-block-heading has-text-align-center blockpage-heading has-xxx-large-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_e('Featured Products', 'walker-core') ?></h1>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":12,"query":{"perPage":"8","pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"namespace":"woocommerce/product-query"} -->
    <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"30px"}},"className":"products-block-post-template blockpage-products-list","layout":{"type":"grid","columnCount":4},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
        <!-- wp:group {"className":"blockpage-product-image","layout":{"type":"constrained"}} -->
        <div class="wp-block-group blockpage-product-image"><!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"height":"430px"} /-->

            <!-- wp:woocommerce/product-button {"textAlign":"center","width":100,"isDescendentOfQueryLoop":true,"fontSize":"small","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|heading-color"}}}}}} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"30px"}},"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"className":"is-style-default","fontSize":"medium","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

        <!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textAlign":"center"} /-->

        <!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} /-->
        <!-- /wp:post-template -->

        <!-- wp:query-no-results -->
        <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
        <p></p>
        <!-- /wp:paragraph -->
        <!-- /wp:query-no-results -->
    </div>
    <!-- /wp:query -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"50px"}}}} -->
    <div class="wp-block-buttons" style="margin-top:50px"><!-- wp:button {"textColor":"heading-alt","gradient":"primary-gradient","style":{"spacing":{"padding":{"left":"33px","right":"33px","top":"16px","bottom":"16px"}},"border":{"radius":"60px"},"typography":{"fontStyle":"normal","fontWeight":"500"}},"className":"is-style-button-hover-white-bgcolor","fontSize":"normal"} -->
        <div class="wp-block-button has-custom-font-size is-style-button-hover-white-bgcolor has-normal-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-heading-alt-color has-primary-gradient-gradient-background has-text-color has-background wp-element-button" style="border-radius:60px;padding-top:16px;padding-right:33px;padding-bottom:16px;padding-left:33px"><?php echo esc_html_e('Visit Store', 'walker-core') ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->