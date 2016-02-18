<?php

function danbury_menu_link(array $variables) {
    $element = $variables['element'];
    $sub_menu = '';

    if ($element['#below']) {
        $sub_menu = drupal_render($element['#below']);
    }
    $linktext = '<span>'.$element['#title'].'</span>';
    $element['#localized_options']['html'] = true;
    $output = l($linktext, $element['#href'], $element['#localized_options']);
    return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

function danbury_preprocess_html(&$variables)
{
    $path = drupal_get_path_alias($_GET['q']);
    $aliases = explode('/', $path);
    foreach($aliases as $alias)
    {
        $variables['classes_array'][] = 'path-'.drupal_clean_css_identifier($alias);
    }
}
