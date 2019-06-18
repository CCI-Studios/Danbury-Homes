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

function danbury_form_alter(&$form, &$form_state, $form_id)
{
     if ($form_id == 'ac_newsletter_sign_up_form'){

        $form['Heading'] = array(
            '#markup' => '<div id="home-plans"></div><div class="desc"><h2>HOME PLANS</h2><h3>Get the three most popular plans built by Danbury.</h3><p>Enter your name and email address below to get your plans.</p></div>'
        ); 
       

         $form['logo'] = array(
            '#markup' => '<div class="white-logo"><img src="/sites/all/themes/danbury/img/danbury-white.svg"></div>',
            '#weight' => '2000'
        ); 
     }
}
