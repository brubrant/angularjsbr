<?php

    
	// now let's add custom tags (these act like categories)
    register_taxonomy( 'idioma', 
    	array('post'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => true,    /* if this is false, it acts like tags */                
    		'labels' => array(
    			'name' => __( 'Idiomas', 'bonestheme' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Idioma', 'bonestheme' ), /* single taxonomy name */
    			'search_items' =>  __( 'Buscar Idiomas', 'bonestheme' ), /* search title for taxomony */
    			'all_items' => __( 'Todos os Idiomas', 'bonestheme' ), /* all title for taxonomies */
    			'parent_item' => __( 'Idioma Pai', 'bonestheme' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Idioma Pai:', 'bonestheme' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Idioma', 'bonestheme' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Idioma', 'bonestheme' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Adicionar novo Idioma', 'bonestheme' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'Novo nome de Idioma', 'bonestheme' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true,
    		'show_ui' => true,
    		'query_var' => true,
    	)
    ); 

	

?>