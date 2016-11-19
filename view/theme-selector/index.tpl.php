<?php
/**
 * Theme selector in the design course.
 */

?><article>
    <h1>Temaväljare</h1>

<?php if ($message) : ?>
    <p class="notice">
        <em><?= $message ?></em>
    </p>
<?php endif; ?>

    <form method="post">
        <fieldset>
            <legend>Välj ett tema</legend>
            <select name="theme" onchange="form.submit();">
                <option value="-1">Inget specifikt tema valt</option>
                <option value="-2">Återgå till standardinställningar</option>
                <?php foreach ($themes as $key => $value) :
                    $selected = $key == $currentTheme["key"]
                        ? "selected"
                        : null;
                    $separate = $value === $separator
                        ? "disabled"
                        : null;
                    $value = $separate
                        ? $separator
                        : "$key – " . $value["title"];
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
        Om sessionen inte innehåller ett aktivt tema kommer temat <strong>default</strong> att gälla.
    </p>
    
    <p>Det tema som väljs kommer att göra följande:</p>
    
    <ul>
        <li>Ta bort alla stilmallar som tidigare definierats i grundkonfigurationen.</li>
        <li>Lägga till klasser till <code>&lt;html&gt;</code>-elementet, om sådana definierats.</li>
        <li>Lägga till nya stilmallar, om sådana definierats. En stilmall som innehåller gemensamma grundregler inkluderas alltid först.</li>
    </ul>

<?php if (!empty($currentTheme)) : ?>
    <h4>Sessionsdata för aktivt tema:</h4>
    
    <pre><code><?= htmlspecialchars(print_r($currentTheme, true)) ?></code></pre>
<?php endif; ?>

</article>
