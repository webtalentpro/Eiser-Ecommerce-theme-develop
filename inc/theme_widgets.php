<?php

function eiser_widgets_develop()
{
    register_sidebar(array(
        'name'=> 'Blog Sidebar',
        'id'=> 'blog_sidebar',
        'before_widget'=> '<aside class="single_sidebar_widget post_category_widget"><ul class="list cat-list"><li>',
        'after_widget'=> '</li></ul></aside>',
        'before_title'=> '<h4 class="widget_title">',
        'after_title'=> '</h4>',
    ));
    register_sidebar(array(
        'name'=> 'Footer Column One',
        'id'=> 'footer-1',
        'before_widget'=> '<div>',
        'after_widget'=> '</div>',
        'before_title'=> '<h4>',
        'after_title'=> '</h4>',
              
    ));
    register_sidebar(array(
        'name'=> 'Footer Column two',
        'id'=> 'footer-2',
        'before_widget'=> '<div>',
        'after_widget'=> '</div>',
        'before_title'=> '<h4>',
        'after_title'=> '</h4>',
    ));
    register_sidebar(array(
        'name'=> 'Footer Column three',
        'id'=> 'footer-3',
        'before_widget'=> '<div>',
        'after_widget'=> '</div>',
        'before_title'=> '<h4>',
        'after_title'=> '</h4>',
      
      
      
    ));
    register_sidebar(array(
        'name'=> 'Footer Column four',
        'id'=> 'footer-4',
        'before_widget'=> '<div>',
        'after_widget'=> '</div>',
        'before_title'=> '<h4>',
        'after_title'=> '</h4>',
    ));

    register_sidebar(array(
        'name'=> 'Shop sidebar',
        'id'=> 'shop-sidebar',
        'before_widget'=> '<div class="single-footer-widget mb-4">',
        'after_widget'=> '</div>',
        'before_title'=> '<h4>',
        'after_title'=> '</h4>',
    ));
}
add_action('widgets_init', 'eiser_widgets_develop');
