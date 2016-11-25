<?php
// Prepare classes
$classes[] = "blog-list";
if (isset($class)) {
    $classes[] = $class;
}

// Labels
$readmoreLabel = isset($label["readmore"])
    ? $label["readmore"]
    : "Läs mer »"; 

// Common date format
$dateFormat = isset($dateFormat) ? $dateFormat : "Y-m-d";



?><section <?= $this->classList($classes) ?>>
    <?php
    // Loop through all items and display
    foreach ($toc as $route => $content) :
        $item = $this->getContentForRoute($route);
        //var_dump($item);
        //var_dump(get_defined_vars());

        // TODO Format the date
        // Get time for publish/update/create
        list($pubStr, $published) = $this->getPublishedDate($item);
        $publishedFormatted = date($dateFormat, strtotime($published));
        $publishedFormatted = strtr(mb_strtolower($publishedFormatted), [
            'ary' => 'ari',
            'march' => 'mars',
            'may' => 'maj',
            'june' => 'juni',
            'july' => 'juli',
            'august' => 'augusti',
            'october' => 'oktober'
        ]);
        //$datetime = $item["published"];
        //$date = $item["published"];
        
        $category = isset($item["category"]) ? $item["category"] : null;

        // Format the content
        $urlToPost = $this->url($route);
        $excerpt = $item["excerpt"];
        
        // Wrap h2 with link to article
        $excerpt = $this->wrapElementContentWithStartEnd(
            $excerpt,
            "h1",
            "<a href=\"$urlToPost\">",
            "</a>",
            1
        );
        $excerpt = preg_replace('/(<\/*)h1>/', '\1h2>', $excerpt);



        ?><section <?= $this->classList("blog-list-item") ?>>
            <hr>
            <span class="meta-header"><time datetime="<?= $published ?>"><?= $publishedFormatted ?></time></span>
            
            <?= $excerpt ?>
            
            <p class="readmore"><a href="<?= $urlToPost ?>"><?= $readmoreLabel ?></a></p>

            <?php 
            $this->renderView("default/blog-meta-footer", [
                "category" => $category,
            ]); 
            ?>

        </section>
    <?php endforeach; ?>

    <footer>
        <?php 
        $this->renderView("default/blog-toc-next-prev-page", [
            "meta" => $meta,
        ]); 
        ?>
    </footer>
</section>
