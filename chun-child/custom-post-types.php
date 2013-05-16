<?php

    
	// now let's add custom tags (these act like categories)
    register_taxonomy( 'tipo', 
    	array('post'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => false,    /* if this is false, it acts like tags */                
    		'labels' => array(
    			'name' => __( 'Tipos', 'bonestheme' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Tipo', 'bonestheme' ), /* single taxonomy name */
    			'search_items' =>  __( 'Buscar Tipos', 'bonestheme' ), /* search title for taxomony */
    			'all_items' => __( 'Todos os Tipos', 'bonestheme' ), /* all title for taxonomies */
    			'parent_item' => __( 'Tipo Pai', 'bonestheme' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Tipo Pai:', 'bonestheme' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Tipo', 'bonestheme' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Tipo', 'bonestheme' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Adicionar novo Tipo', 'bonestheme' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'Novo nome de Tipo', 'bonestheme' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true,
    		'show_ui' => true,
    		'query_var' => true,
    	)
    ); 

	

?>