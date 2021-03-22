<?php

if ( $acf_options ) {
    
    if ( function_exists('acf_add_options_page') ) {

        acf_add_options_page([
            'page_title' => 'Edycja motywu',
            'menu_slug' => 'edycja-motywu',
        ]);


    
    }

}


