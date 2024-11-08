<?php function breadcrumbs($breadcrumbs) {
    if (empty($breadcrumbs) || !is_array($breadcrumbs)) {
        return;
    }
    
    ob_start(); // Start output buffering
    ?>
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php foreach ($breadcrumbs as $index => $breadcrumb) : ?>
            <?php if ($index > 0) : ?>
                <i class="caret-right"></i> 
            <?php endif; ?>
            <span property="itemListElement" typeof="ListItem">
                <?php if ($index === count($breadcrumbs) - 1) : ?>
                    <span property="name" class="post post-page current-item"><?= esc_html($breadcrumb[0]) ?></span>
                <?php else : ?>
                    <a property="item" typeof="WebPage" title="Go to <?= esc_attr($breadcrumb[0]) ?>" href="<?= esc_url($breadcrumb[1]) ?>" class="home">
                        <span property="name"><?= esc_html($breadcrumb[0]) ?></span>
                    </a>
                <?php endif; ?>
            </span>
        <?php endforeach; ?>
    </div>
    <?php
    return ob_get_clean(); // Return the content from the buffer
}