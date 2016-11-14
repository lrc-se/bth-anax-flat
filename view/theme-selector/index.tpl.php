<?php
/**
 * Theme chooser in the design course.
 */

// These are the valid themes and their configuration
$separator = "------------------------------------------------";
$themes = [
    "separator0" => $separator,
    "base"      => [
        "title"      => "Minimal stil (bastema)",
        "class"      => "base",
        "stylesheets" => ['css/base.min.css']
    ],
    "default"   => [
        "title"      => "Standardtema",
        "class"      => "default",
        "stylesheets" => ['css/default.min.css']
    ],
    "light"     =>  [
        "title"      => "Ljust tema",
        "class"      => "light",
        "stylesheets" => ['css/light.min.css']
    ],
    "color"     => [
        "title"      => "Ljust tema med viss färgsättning",
        "class"      => "color",
        "stylesheets" => ['css/color.min.css']
    ],
    "dark"      => [
        "title"      => "Mörkt tema",
        "class"      => "dark",
        "stylesheets" => ['css/dark.min.css']
    ],
    "colorful"  => [
        "title"      => "Färgglatt tema",
        "class"      => "colorful",
        "stylesheets" => ['css/colorful.min.css']
    ],
    "typography" => [
        "title"      => "Typografiskt unikt tema",
        "class"      => "typography",
        "stylesheets" => ['css/typography.min.css']
    ],
    "separator1" => $separator,
    "fun"       => [
        "title"      => "Smågalet tema",
        "class"      => "fun",
        "stylesheets" => ['css/fun.min.css']
    ],
];



// Check if form was posted with a valid theme
$output = null;
if (isset($_POST["theme"]) && array_key_exists($_POST["theme"], $themes)) {
    $this->di->session->set("theme-message", "Aktivt tema satt till <strong>" . $_POST["theme"] . '</strong>.');
        /*. ".<p>Theme details are:<br><pre>"
        . print_r($themes[$_POST["theme"]], 1))
        . "</pre>";*/
    $theme = $themes[$_POST["theme"]];
    $theme["key"] = $_POST["theme"];
    $this->di->session->set("theme", $theme);
    $this->di->response->redirect($this->di->request->getCurrentUrl());
}


// Get current theme
$currentTheme = $this->di->session->get("theme");

// Message to display when theme is changed
$message = $this->di->session->readOnce("theme-message");


?><article>
    <h1>Temaväljare</h1>
    
<?php if ($message) : ?>
    <p class="notice">
        <em><?= $message ?></em>
    </p>
<?php endif; ?>
    
    <form method="post">
        <fieldset>
            <legend>Välj tema</legend>
            <select name="theme" onchange="form.submit();">
                <option value="-1" disabled>Välj...</option>
                <?php foreach ($themes as $key => $value) :
                    $selected = $key == $currentTheme["key"]
                        ? "selected"
                        : null;
                    $separate = $value === $separator
                        ? "disabled"
                        : null;
                    $value = $separate
                        ? $separator
                        : "$key: " . $value["title"];
                ?>
                    <option value="<?= $key ?>" <?= $selected ?> <?= $separate ?>>
                        <?= $value ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </fieldset>
    </form><br>
    
    <p>
        Här kan du välja ett tema för webbplatsen. Inställningarna för det valda temat sparas i sessionen och appliceras i huvudmallen när sidorna renderas. 
        Om ingen session är aktiv kommer temat <em>default</em> att gälla.
    </p>
    
<?php if (!empty($currentTheme)) : ?>
    <h4>Sessionsdata för aktivt tema:</h4>
    
    <pre><code><?= htmlspecialchars(print_r($currentTheme, true)) ?></code></pre>
<?php endif; ?>

</article>
