<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",
     
        // Here comes the menu structure
        "items" => [

            "index" => [
                "text"  => "Hem",
                "url"   => $this->di->get("url")->create(""),
                "title" => "Om mig"
            ],
            
            "about" => [
                "text"  => "Om",
                "url"   => $this->di->get("url")->create("about"),
                "title" => "Om webbplatsen"
            ],
            
            "grid" => [
                "text"  => "Kolumner",
                "url"   => $this->di->get("url")->create("grid"),
                "title" => "Test av kolumner"
            ],
            
            "typography" => [
                "text"  => "Typografi",
                "url"   => $this->di->get("url")->create("typography"),
                "title" => "Test av typografisk stilsättning"
            ],
            
            "theme" => [
                "text"  => "Teman",
                "url"   => $this->di->get("url")->create("theme"),
                "title" => "Teman"
            ],
            
            "images" => [
                "text"  => "Bilder",
                "url"   => $this->di->get("url")->create("images"),
                "title" => "Bilder"
            ],
            
            "blog" => [
                "text"  => "Blogg",
                "url"   => $this->di->get("url")->create("blog"),
                "title" => "Fjällbildsblogg",
                "mark-if-parent" => true
            ],
            
            "analysis" => [
                "text"  => "Analys",
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => "Analys av webbplatser",
                "mark-if-parent" => true
            ],
            
            "report" => [
                "text"  => "Redovisning",
                "url"   => $this->di->get("url")->create("report"),
                "title" => "Redovisning av kursmoment",
                "mark-if-parent" => true
            ],

        ],
    ],




    // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",
     
        // Here comes the menu structure
        "items" => [

            "index" => [
                "text"  => "Om mig",
                "url"   => $this->di->get("url")->create(""),
                "title" => "Om mig"
            ],
            
            "about" => [
                "text"  => "Om webbplatsen",
                "url"   => $this->di->get("url")->create("about"),
                "title" => "Om webbplatsen"
            ],
            
            "grid" => [
                "text"  => "Kolumner",
                "url"   => $this->di->get("url")->create("grid"),
                "title" => "Test av kolumner"
            ],
            
            "typography" => [
                "text"  => "Typografi",
                "url"   => $this->di->get("url")->create("typography"),
                "title" => "Test av typografisk stilsättning"
            ],
            
            "theme" => [
                "text"  => "Teman",
                "url"   => $this->di->get("url")->create("theme"),
                "title" => "Teman"
            ],
            
            "images" => [
                "text"  => "Bilder",
                "url"   => $this->di->get("url")->create("images"),
                "title" => "Bilder"
            ],
            
            "blog" => [
                "text"  => "Blogg",
                "url"   => $this->di->get("url")->create("blog"),
                "title" => "Fjällbildsblogg",
                "mark-if-parent" => true
            ],
            
            "analysis" => [
                "text"  => "Analys",
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => "Analys av webbplatser",
                "mark-if-parent" => true
            ],
            
            "report" => [
                "text"  => "Redovisning",
                "url"   => $this->di->get("url")->create("report"),
                "title" => "Redovisning av kursmoment",
                "mark-if-parent" => true
            ],
            
        ],
    ],



    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];
