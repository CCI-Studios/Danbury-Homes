<?php

function danbury_css_alter(&$css)
{
    unset($css[drupal_get_path('module','system').'/system.menus.css']);
    unset($css[drupal_get_path('module','system').'/system.theme.css']);
    unset($css[drupal_get_path('module','node').'/node.css']);
    unset($css[drupal_get_path('module','field').'/theme/field.css']);
    unset($css[drupal_get_path('module','user').'/user.css']);
    unset($css[drupal_get_path('module','ckeditor').'/css/ckeditor.css']);
    unset($css[drupal_get_path('module','ctools').'/css/ctools.css']);
    unset($css[drupal_get_path('module','views').'/css/views.css']);
}
function danbury_js_alter(&$js)
{
    unset($js[drupal_get_path('module','webform').'/js/webform.js']);
}

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