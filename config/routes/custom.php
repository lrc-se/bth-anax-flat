<?php
/**
 * Add routes to the router, processed in the same order they are added.
 * The variabel $app relates to $this.
 */

// Support theme selector by adding class to html element
if ($app->session->has("theme")) {
    $theme = $app->session->get("theme");

    if (isset($theme["class"])) {
        $app->theme->appendToVariable("htmlClass", $theme["class"]);
    }

    if (isset($theme["stylesheets"])) {
        // Remove all custom stylesheets before applying the new ones
        $app->theme->setConfigKey("stylesheets", ["css/common.min.css"]);

        // Set choosen stylesheets
        $stylesheets = $theme["stylesheets"];
        if (is_string($stylesheets)) {
            $app->theme->addStylesheet($stylesheets);
        } elseif (is_array($stylesheets)) {
            foreach ($stylesheets as $stylesheet) {
                $app->theme->addStylesheet($stylesheet);
            }
        }
    }
}



/**
 * Add your own custom route
 */
$app->router->add("theme-selector", function () use ($app) {
    // Load configuration for theme selector
    $themeConfig = $app->loadFile("theme-selector.php");
    $themes = $themeConfig["themes"];
    
    // Check if form was posted with a valid theme
    $postTheme = $app->request->getPost("theme");
    if ($postTheme) {
        if (array_key_exists($postTheme, $themes)) {
            // This theme is valid
            $this->di->session->set("theme-message", "Aktivt tema satt till <strong>$postTheme</strong>.");
            $theme = $themes[$postTheme];
            $theme["key"] = $postTheme;
            $this->di->session->set("theme", $theme);
            $this->di->response->redirect($this->di->request->getCurrentUrl());
        } elseif ($postTheme == -2 || $postTheme == -1) {
            // Deselect the active theme
            $this->di->session->delete("theme");
            $this->di->response->redirect($this->di->request->getCurrentUrl());
        }

        throw new Exception("Invalid posted form in theme selector", 1);
    }

    // Prepare the resulting page
    $app->theme->setTitle("Välj tema");
    $app->views->add("default/image", [
        "src" => "img/Vistas.jpg",
        "alt" => "Övre Visttasvággi med omnejd"
    ], "flash");
    $app->views->add("default/breadcrumb", [
        "meta" => ["type" => "breadcrumb"],
        "breadcrumb" => [
            [
                "text" => "Teman",
                "url" => "theme"
            ],
            [
                "text" => "Temaväljare",
                "url" => "theme-selector"
            ]
        ],
    ], "breadcrumb");
    $app->views->add("theme-selector/index", [
        "themes"       => $themeConfig["themes"],
        "separator"    => $themeConfig["separator"],
        "currentTheme" => $this->di->session->get("theme"),
        "message"      => $this->di->session->readOnce("theme-message"),
    ]);
});
