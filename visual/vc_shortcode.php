<?php 
add_action( 'vc_before_init', 'vcNew' );


function vcNew() {

   $textdoimain = 'miex-child';
   global $pre_text;
   $pre_text = 'VG ';

if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."Slider Area", 'miex-child'),

   "base" => "slider_area",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title", 'miex-child'),

      "param_name" => "title",

      "value" => "",

      "description" => __("Title", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Subtitle", 'miex-child'),

      "param_name" => "subtitle",

      "value" => "",

      "description" => __("Subtitle", 'miex-child')

   ),



   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Link", 'miex-child'),

      "param_name" => "link",

      "value" => "",

      "description" => __("Link", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Text Btn", 'miex-child'),

      "param_name" => "text_btn",

      "value" => "",

      "description" => __("Text Btn", 'miex-child')

   ),



   array(

      'type' => 'attach_image',

      'heading' => __( 'Image', 'miex-child' ),

      'param_name' => 'image',

      'value' => '',

      'description' => __( 'Select image background from media library to do your signature.', 'miex-child' )

   ), 

    )));

}



if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."About Area", 'miex-child'),

   "base" => "about_area",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title", 'miex-child'),

      "param_name" => "title",

      "value" => "",

      "description" => __("Title", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Subtitle 1", 'miex-child'),

      "param_name" => "subtitle1",

      "value" => "",

      "description" => __("Subtitle 1", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Subtitle 2", 'miex-child'),

      "param_name" => "subtitle2",

      "value" => "",

      "description" => __("Subtitle 2", 'miex-child')

   ),

   array(

      'type' => 'attach_image',

      'heading' => __( 'Image', 'miex-child' ),

      'param_name' => 'image',

      'value' => '',

      'description' => __( 'Select image background from media library to do your signature.', 'miex-child' )

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Link", 'miex-child'),

      "param_name" => "link",

      "value" => "",

      "description" => __("Link", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Text", 'miex-child'),

      "param_name" => "text",

      "value" => "",

      "description" => __("Text", 'miex-child')

   ),

   

    )));

}



if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."Service Area", 'miex-child'),

   "base" => "service_area",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title", 'miex-child'),

      "param_name" => "title",

      "value" => "",

      "description" => __("Title", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("subtitle", 'miex-child'),

      "param_name" => "subtitle",

      "value" => "",

      "description" => __("subtitle", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Text 1", 'miex-child'),

      "param_name" => "text1",

      "value" => "",

      "description" => __("Text 1", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Text 2", 'miex-child'),

      "param_name" => "text2",

      "value" => "",

      "description" => __("Text 2", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Text 3", 'miex-child'),

      "param_name" => "text3",

      "value" => "",

      "description" => __("Text 3", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Para 1", 'miex-child'),

      "param_name" => "para1",

      "value" => "",

      "description" => __("Para 1", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Para 2", 'miex-child'),

      "param_name" => "para2",

      "value" => "",

      "description" => __("Para 2", 'miex-child')

   ),

    )));

}

if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."Service Area 1", 'miex-child'),

   "base" => "service_area_1",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title", 'miex-child'),

      "param_name" => "title",

      "value" => "",

      "description" => __("Title", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("subtitle", 'miex-child'),

      "param_name" => "subtitle",

      "value" => "",

      "description" => __("subtitle", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Class Icon", 'miex-child'),

      "param_name" => "icon",

      "value" => "",

      "description" => __("Class Icon", 'miex-child')

   ),

    )));

}





if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."Call to Area", 'miex-child'),

   "base" => "callto",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title", 'miex-child'),

      "param_name" => "title",

      "value" => "",

      "description" => __("Title", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("subtitle", 'miex-child'),

      "param_name" => "subtitle",

      "value" => "",

      "description" => __("subtitle", 'miex-child')

   ),



    )));

}



if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."Our Team", 'miex-child'),

   "base" => "team",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

   array(

         'type' => 'attach_image',

         'heading' => __( 'Image', 'miex-child' ),

         'param_name' => 'image',

         'value' => '',

         'description' => __( 'Select image background from media library to do your signature.', 'miex-child' )

      ), 

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title", 'miex-child'),

      "param_name" => "title",

      "value" => "",

      "description" => __("Title", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Subtitle", 'miex-child'),

      "param_name" => "subtitle",

      "value" => "",

      "description" => __("Subtitle", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Link Team", 'miex-child'),

      "param_name" => "link",

      "value" => "",

      "description" => __("Link Team", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Link Team 1", 'miex-child'),

      "param_name" => "link1",

      "value" => "",

      "description" => __("Link Team 1", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Link Team 2", 'miex-child'),

      "param_name" => "link2",

      "value" => "",

      "description" => __("Link Team 2", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Link Team 3", 'miex-child'),

      "param_name" => "link3",

      "value" => "",

      "description" => __("Link Team 3", 'miex-child')

   ),

    )));

}











if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."Testimonial", 'miex-child'),

   "base" => "testimonial",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title", 'miex-child'),

      "param_name" => "title",

      "value" => "",

      "description" => __("Title", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("subtitle", 'miex-child'),

      "param_name" => "subtitle",

      "value" => "",

      "description" => __("subtitle", 'miex-child')

   ),

   array(

         'type' => 'attach_image',

         'heading' => __( 'Image', 'miex-child' ),

         'param_name' => 'image',

         'value' => '',

         'description' => __( 'Select image background from media library to do your signature.', 'miex-child' )

      ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Author", 'miex-child'),

      "param_name" => "author",

      "value" => "",

      "description" => __("Author", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Position", 'miex-child'),

      "param_name" => "position",

      "value" => "",

      "description" => __("Position", 'miex-child')

   ),

    )));

}







if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."Portfolio", 'miex-child'),

   "base" => "Portfolio",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(    

      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Number of Post You want show.", 'miex-child'),

         "param_name" => "number",

         "value" => "3",

         "description" => __("Number of Post You want show.", 'miex-child')

      ),

      array(

         'type' => 'dropdown',

         'heading' => __( 'Sort Order', 'miex-child' ),

         'param_name' => 'orderpost',

         'value' => array(

            __( 'DESC : highest to lowest', 'miex-child' ) => 'DESC',

            __( 'ASC : lowest to highest', 'miex-child' ) => 'ASC',

         ),

         'description' => __( 'Select field do you want Order.', 'miex-child' )

      ),

      array(

         'type' => 'dropdown',

         'heading' => __( 'Order by', 'miex-child' ),

         'param_name' => 'orderby',

         'value' => array(

            __( 'Date', 'miex-child' ) => 'date',

            __( 'Title', 'miex-child' ) => 'title',

            __( 'Random', 'miex-child') => 'rand',

         ),

         'description' => __( 'Select field do you want Order.', 'miex-child' )

      ),

      array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Text", 'miex-child'),

      "param_name" => "text",

      "value" => "",

      "description" => __("Text", 'miex-child')

   ),



    )));

}



if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."Blog", 'miex-child'),

   "base" => "blog",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

      array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title", 'miex-child'),

      "param_name" => "title",

      "value" => "",

      "description" => __("Title", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Text subtitle", 'miex-child'),

      "param_name" => "subtitle",

      "value" => "",

      "description" => __("Text subtitle", 'miex-child')

   ),

      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Number of Post You want show.", 'miex-child'),

         "param_name" => "number",

         "value" => "3",

         "description" => __("Number of Post You want show.", 'miex-child')

      ),

      array(

         'type' => 'dropdown',

         'heading' => __( 'Sort Order', 'miex-child' ),

         'param_name' => 'orderpost',

         'value' => array(

            __( 'DESC : highest to lowest', 'miex-child' ) => 'DESC',

            __( 'ASC : lowest to highest', 'miex-child' ) => 'ASC',

         ),

         'description' => __( 'Select field do you want Order.', 'miex-child' )

      ),

      array(

         'type' => 'dropdown',

         'heading' => __( 'Order by', 'miex-child' ),

         'param_name' => 'orderby',

         'value' => array(

            __( 'Date', 'miex-child' ) => 'date',

            __( 'Title', 'miex-child' ) => 'title',

            __( 'Random', 'miex-child') => 'rand',

         ),

         'description' => __( 'Select field do you want Order.', 'miex-child' )

      ),

      array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Link", 'miex-child'),

      "param_name" => "link",

      "value" => "",

      "description" => __("Link", 'miex-child')

   ),

    )));

}







if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."Contact Info", 'miex-child'),

   "base" => "contact",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title", 'miex-child'),

      "param_name" => "title",

      "value" => "",

      "description" => __("Title", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Text subtitle", 'miex-child'),

      "param_name" => "subtitle",

      "value" => "",

      "description" => __("Text subtitle", 'miex-child')

   ),

    )));

}



if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."Google Maps", 'miex-child'),

   "base" => "map",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("latitude", 'miex-child'),

      "param_name" => "lat",

      "value" => "",

      "description" => __("latitude", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("longitude", 'miex-child'),

      "param_name" => "long",

      "value" => "",

      "description" => __("longitude", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Zoom", 'miex-child'),

      "param_name" => "zoom",

      "value" => "",

      "description" => __("Zoom", 'miex-child')

   ),

   array(

         'type' => 'attach_image',

         'heading' => __( 'Map Marker', 'miex-child' ),

         'param_name' => 'image',

         'value' => '',

         'description' => __( 'Select image background from media library to do your signature.', 'miex-child' )

      ),

    )));

} 



if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."Slider Area 2", 'miex-child'),

   "base" => "slider_area_2",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title", 'miex-child'),

      "param_name" => "title",

      "value" => "",

      "description" => __("Title", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Subtitle", 'miex-child'),

      "param_name" => "subtitle",

      "value" => "",

      "description" => __("Subtitle", 'miex-child')

   ),



   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Link", 'miex-child'),

      "param_name" => "link",

      "value" => "",

      "description" => __("Link", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Text Btn", 'miex-child'),

      "param_name" => "text_btn",

      "value" => "",

      "description" => __("Text Btn", 'miex-child')

   ),

   array(

      'type' => 'attach_image',

      'heading' => __( 'Image', 'miex-child' ),

      'param_name' => 'image',

      'value' => '',

      'description' => __( 'Select image background from media library to do your signature.', 'miex-child' )

   ), 

   array(

      'type' => 'attach_image',

      'heading' => __( 'Image 1', 'miex-child' ),

      'param_name' => 'image1',

      'value' => '',

      'description' => __( 'Select image background from media library to do your signature.', 'miex-child' )

   ), 

    )));

}



if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."About Area 2", 'miex-child'),

   "base" => "about_area_2",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title", 'miex-child'),

      "param_name" => "title",

      "value" => "",

      "description" => __("Title", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title 1", 'miex-child'),

      "param_name" => "title1",

      "value" => "",

      "description" => __("Title 1", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title 2", 'miex-child'),

      "param_name" => "title2",

      "value" => "",

      "description" => __("Title 2", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title 3", 'miex-child'),

      "param_name" => "title3",

      "value" => "",

      "description" => __("Title 3", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Subtitle", 'miex-child'),

      "param_name" => "subtitle",

      "value" => "",

      "description" => __("Subtitle", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Subtitle 1", 'miex-child'),

      "param_name" => "subtitle1",

      "value" => "",

      "description" => __("Subtitle 1", 'miex-child')

   ),array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Subtitle 2", 'miex-child'),

      "param_name" => "subtitle2",

      "value" => "",

      "description" => __("Subtitle 2", 'miex-child')

   ),array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Subtitle 3", 'miex-child'),

      "param_name" => "subtitle3",

      "value" => "",

      "description" => __("Subtitle 3", 'miex-child')

   ),

   array(

      'type' => 'attach_image',

      'heading' => __( 'Image', 'miex-child' ),

      'param_name' => 'image',

      'value' => '',

      'description' => __( 'Select image background from media library to do your signature.', 'miex-child' )

   ),



    )));

}



if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."Portfolio 2", 'miex-child'),

   "base" => "portfolio_2",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(    

      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Title", 'miex-child'),

         "param_name" => "title",

         "value" => "",

         "description" => __("Title", 'miex-child')

      ),

      array(

         "type" => "textarea",

         "holder" => "div",

         "class" => "",

         "heading" => __("Subtitle", 'miex-child'),

         "param_name" => "subtitle",

         "value" => "",

         "description" => __("Subtitle", 'miex-child')

      ),

      array(

         "type" => "textarea",

         "holder" => "div",

         "class" => "",

         "heading" => __("Subtitle 1", 'miex-child'),

         "param_name" => "subtitle1",

         "value" => "",

         "description" => __("Subtitle 1", 'miex-child')

      ),

      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Number of Post You want show.", 'miex-child'),

         "param_name" => "number",

         "value" => "3",

         "description" => __("Number of Post You want show.", 'miex-child')

      ),

      array(

         'type' => 'dropdown',

         'heading' => __( 'Sort Order', 'miex-child' ),

         'param_name' => 'orderpost',

         'value' => array(

            __( 'DESC : highest to lowest', 'miex-child' ) => 'DESC',

            __( 'ASC : lowest to highest', 'miex-child' ) => 'ASC',

         ),

         'description' => __( 'Select field do you want Order.', 'miex-child' )

      ),

      array(

         'type' => 'dropdown',

         'heading' => __( 'Order by', 'miex-child' ),

         'param_name' => 'orderby',

         'value' => array(

            __( 'Date', 'miex-child' ) => 'date',

            __( 'Title', 'miex-child' ) => 'title',

            __( 'Random', 'miex-child') => 'rand',

         ),

         'description' => __( 'Select field do you want Order.', 'miex-child' )

      ),

      array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Text Button", 'miex-child'),

      "param_name" => "text_btn",

      "value" => "",

      "description" => __("Text Button", 'miex-child')

   ),



    )));

}



if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."Testimonial 2", 'miex-child'),

   "base" => "testimonial_2",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title", 'miex-child'),

      "param_name" => "title",

      "value" => "",

      "description" => __("Title", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("subtitle", 'miex-child'),

      "param_name" => "subtitle",

      "value" => "",

      "description" => __("subtitle", 'miex-child')

   ),

   array(

         'type' => 'attach_image',

         'heading' => __( 'Image', 'miex-child' ),

         'param_name' => 'image',

         'value' => '',

         'description' => __( 'Select image background from media library to do your signature.', 'miex-child' )

      ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Author", 'miex-child'),

      "param_name" => "author",

      "value" => "",

      "description" => __("Author", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Position", 'miex-child'),

      "param_name" => "position",

      "value" => "",

      "description" => __("Position", 'miex-child')

   ),

    )));

}



if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."Price", 'miex-child'),

   "base" => "price",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title", 'miex-child'),

      "param_name" => "title",

      "value" => "",

      "description" => __("Title", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Subtitle", 'miex-child'),

      "param_name" => "subtitle",

      "value" => "",

      "description" => __("Subtitle", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Price", 'miex-child'),

      "param_name" => "price",

      "value" => "",

      "description" => __("Price", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Unit Price", 'miex-child'),

      "param_name" => "unit",

      "value" => "",

      "description" => __("Unit Price", 'miex-child')

   ),



   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Text Btn", 'miex-child'),

      "param_name" => "text_btn",

      "value" => "",

      "description" => __("Text Btn", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Month", 'miex-child'),

      "param_name" => "month",

      "value" => "",

      "description" => __("Month", 'miex-child')

   ),

    )));

}

if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."Blog 2", 'miex-child'),

   "base" => "blog_2",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

      array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title", 'miex-child'),

      "param_name" => "title",

      "value" => "",

      "description" => __("Title", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Text subtitle", 'miex-child'),

      "param_name" => "subtitle",

      "value" => "",

      "description" => __("Text subtitle", 'miex-child')

   ),

      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Number of Post You want show.", 'miex-child'),

         "param_name" => "number",

         "value" => "3",

         "description" => __("Number of Post You want show.", 'miex-child')

      ),

      array(

         'type' => 'dropdown',

         'heading' => __( 'Sort Order', 'miex-child' ),

         'param_name' => 'orderpost',

         'value' => array(

            __( 'DESC : highest to lowest', 'miex-child' ) => 'DESC',

            __( 'ASC : lowest to highest', 'miex-child' ) => 'ASC',

         ),

         'description' => __( 'Select field do you want Order.', 'miex-child' )

      ),

      array(

         'type' => 'dropdown',

         'heading' => __( 'Order by', 'miex-child' ),

         'param_name' => 'orderby',

         'value' => array(

            __( 'Date', 'miex-child' ) => 'date',

            __( 'Title', 'miex-child' ) => 'title',

            __( 'Random', 'miex-child') => 'rand',

         ),

         'description' => __( 'Select field do you want Order.', 'miex-child' )

      ),

      array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Link", 'miex-child'),

      "param_name" => "link",

      "value" => "",

      "description" => __("Link", 'miex-child')

   ),

    )));

}

if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."Partner", 'miex-child'),

   "base" => "partner",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

   array(

         'type' => 'attach_image',

         'heading' => __( 'Image', 'miex-child' ),

         'param_name' => 'image',

         'value' => '',

         'description' => __( 'Select image background from media library to do your signature.', 'miex-child' )

      ),

      array(

         'type' => 'attach_image',

         'heading' => __( 'Image 1', 'miex-child' ),

         'param_name' => 'image1',

         'value' => '',

         'description' => __( 'Select image background from media library to do your signature.', 'miex-child' )

      ),

      array(

         'type' => 'attach_image',

         'heading' => __( 'Image 2', 'miex-child' ),

         'param_name' => 'image2',

         'value' => '',

         'description' => __( 'Select image background from media library to do your signature.', 'miex-child' )

      ),

      array(

         'type' => 'attach_image',

         'heading' => __( 'Image 3', 'miex-child' ),

         'param_name' => 'image3',

         'value' => '',

         'description' => __( 'Select image background from media library to do your signature.', 'miex-child' )

      ),

      array(

         'type' => 'attach_image',

         'heading' => __( 'Image 4', 'miex-child' ),

         'param_name' => 'image4',

         'value' => '',

         'description' => __( 'Select image background from media library to do your signature.', 'miex-child' )

      ),

      array(

         'type' => 'attach_image',

         'heading' => __( 'Image 5', 'miex-child' ),

         'param_name' => 'image5',

         'value' => '',

         'description' => __( 'Select image background from media library to do your signature.', 'miex-child' )

      ), 

    )));

}



if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."Contact 2", 'miex-child'),

   "base" => "contact2",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title", 'miex-child'),

      "param_name" => "title",

      "value" => "",

      "description" => __("Title", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title 1", 'miex-child'),

      "param_name" => "title1",

      "value" => "",

      "description" => __("Title 1", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title 2", 'miex-child'),

      "param_name" => "title2",

      "value" => "",

      "description" => __("Title 2", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title 3", 'miex-child'),

      "param_name" => "title3",

      "value" => "",

      "description" => __("Title 3", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Text subtitle 1", 'miex-child'),

      "param_name" => "subtitle1",

      "value" => "",

      "description" => __("Text subtitle 1", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Text subtitle 2", 'miex-child'),

      "param_name" => "subtitle2",

      "value" => "",

      "description" => __("Text subtitle 2", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Text subtitle 3", 'miex-child'),

      "param_name" => "subtitle3",

      "value" => "",

      "description" => __("Text subtitle 3", 'miex-child')

   ),

    )));

}



if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."Slider Area 3", 'miex-child'),

   "base" => "slider_area_3",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title", 'miex-child'),

      "param_name" => "title",

      "value" => "",

      "description" => __("Title", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Subtitle", 'miex-child'),

      "param_name" => "subtitle",

      "value" => "",

      "description" => __("Subtitle", 'miex-child')

   ),



   array(

      'type' => 'attach_image',

      'heading' => __( 'Image', 'miex-child' ),

      'param_name' => 'image',

      'value' => '',

      'description' => __( 'Select image background from media library to do your signature.', 'miex-child' )

   ), 

   array(

      'type' => 'attach_image',

      'heading' => __( 'Image 1', 'miex-child' ),

      'param_name' => 'image1',

      'value' => '',

      'description' => __( 'Select image background from media library to do your signature.', 'miex-child' )

   ), 

   array(

      'type' => 'attach_image',

      'heading' => __( 'Image 2', 'miex-child' ),

      'param_name' => 'image2',

      'value' => '',

      'description' => __( 'Select image background from media library to do your signature.', 'miex-child' )

   ), 

    )));

}



if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."Features", 'miex-child'),

   "base" => "features",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title", 'miex-child'),

      "param_name" => "title",

      "value" => "",

      "description" => __("Title", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Subtitle", 'miex-child'),

      "param_name" => "subtitle",

      "value" => "",

      "description" => __("Subtitle", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Class Icon", 'miex-child'),

      "param_name" => "icon",

      "value" => "",

      "description" => __("Class Icon", 'miex-child')

   ),

    )));

}



if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."About Area 3", 'miex-child'),

   "base" => "about_area_3",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title", 'miex-child'),

      "param_name" => "title",

      "value" => "",

      "description" => __("Title", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Subtitle 1", 'miex-child'),

      "param_name" => "subtitle1",

      "value" => "",

      "description" => __("Subtitle 1", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Subtitle 2", 'miex-child'),

      "param_name" => "subtitle2",

      "value" => "",

      "description" => __("Subtitle 2", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Link", 'miex-child'),

      "param_name" => "link",

      "value" => "",

      "description" => __("Link", 'miex-child')

   ),

   array(

      'type' => 'attach_image',

      'heading' => __( 'Image', 'miex-child' ),

      'param_name' => 'image',

      'value' => '',

      'description' => __( 'Select image background from media library to do your signature.', 'miex-child' )

   ), 

    )));

}



if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."Screenshot", 'miex-child'),

   "base" => "screenshot",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

   array(

      'type' => 'attach_image',

      'heading' => __( 'Image', 'miex-child' ),

      'param_name' => 'image',

      'value' => '',

      'description' => __( 'Select image background from media library to do your signature.', 'miex-child' )

   ), 

    )));

}



if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."Produce", 'miex-child'),

   "base" => "produce",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Text", 'miex-child'),

      "param_name" => "text",

      "value" => "",

      "description" => __("Text", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title", 'miex-child'),

      "param_name" => "title",

      "value" => "",

      "description" => __("Title", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Subtitle", 'miex-child'),

      "param_name" => "subtitle",

      "value" => "",

      "description" => __("Subtitle", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Text 1", 'miex-child'),

      "param_name" => "text1",

      "value" => "",

      "description" => __("Text 1", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title 1", 'miex-child'),

      "param_name" => "title1",

      "value" => "",

      "description" => __("Title 1", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Subtitle 1", 'miex-child'),

      "param_name" => "subtitle1",

      "value" => "",

      "description" => __("Subtitle 1", 'miex-child')

   ),

   array(

      'type' => 'attach_image',

      'heading' => __( 'Image', 'miex-child' ),

      'param_name' => 'image',

      'value' => '',

      'description' => __( 'Select image background from media library to do your signature.', 'miex-child' )

   ), 

   array(

      'type' => 'attach_image',

      'heading' => __( 'Image 1', 'miex-child' ),

      'param_name' => 'image1',

      'value' => '',

      'description' => __( 'Select image background from media library to do your signature.', 'miex-child' )

   ), 

    )));

}



if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."Testimonial 3", 'miex-child'),

   "base" => "testimonial_3",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title", 'miex-child'),

      "param_name" => "title",

      "value" => "",

      "description" => __("Title", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("subtitle", 'miex-child'),

      "param_name" => "subtitle",

      "value" => "",

      "description" => __("subtitle", 'miex-child')

   ),   

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Text", 'miex-child'),

      "param_name" => "text",

      "value" => "",

      "description" => __("Text", 'miex-child')

   ),

   array(

         'type' => 'attach_image',

         'heading' => __( 'Image', 'miex-child' ),

         'param_name' => 'image',

         'value' => '',

         'description' => __( 'Select image background from media library to do your signature.', 'miex-child' )

      ),

    )));

}





if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."Download", 'miex-child'),

   "base" => "download",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title", 'miex-child'),

      "param_name" => "title",

      "value" => "",

      "description" => __("Title", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("subtitle", 'miex-child'),

      "param_name" => "subtitle",

      "value" => "",

      "description" => __("subtitle", 'miex-child')

   ),   

   array(

         'type' => 'attach_image',

         'heading' => __( 'Image', 'miex-child' ),

         'param_name' => 'image',

         'value' => '',

         'description' => __( 'Select image background from media library to do your signature.', 'miex-child' )

   ),

   array(

         'type' => 'attach_image',

         'heading' => __( 'Image 1', 'miex-child' ),

         'param_name' => 'image1',

         'value' => '',

         'description' => __( 'Select image background from media library to do your signature.', 'miex-child' )

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Link", 'miex-child'),

      "param_name" => "link",

      "value" => "",

      "description" => __("Link", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Link 1", 'miex-child'),

      "param_name" => "link1",

      "value" => "",

      "description" => __("Link 1", 'miex-child')

   ),

    )));

}



if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."Slider Area 4", 'miex-child'),

   "base" => "slider_area_4",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title 1", 'miex-child'),

      "param_name" => "title1",

      "value" => "",

      "description" => __("Title 1", 'miex-child')

   ),array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title 2", 'miex-child'),

      "param_name" => "title2",

      "value" => "",

      "description" => __("Title 2", 'miex-child')

   ),array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title 3", 'miex-child'),

      "param_name" => "title3",

      "value" => "",

      "description" => __("Title 3", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Subtitle 1", 'miex-child'),

      "param_name" => "subtitle1",

      "value" => "",

      "description" => __("Subtitle 1", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Subtitle 2", 'miex-child'),

      "param_name" => "subtitle2",

      "value" => "",

      "description" => __("Subtitle 2", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Text", 'miex-child'),

      "param_name" => "text",

      "value" => "",

      "description" => __("Text", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Link 1", 'miex-child'),

      "param_name" => "link1",

      "value" => "",

      "description" => __("Link 1", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Class Icon 1", 'miex-child'),

      "param_name" => "icon1",

      "value" => "",

      "description" => __("Class Icon 1", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Link 2", 'miex-child'),

      "param_name" => "link2",

      "value" => "",

      "description" => __("Link 2", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Class Icon 2", 'miex-child'),

      "param_name" => "icon2",

      "value" => "",

      "description" => __("Class Icon 2", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Link 3", 'miex-child'),

      "param_name" => "link3",

      "value" => "",

      "description" => __("Link 3", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Class Icon 3", 'miex-child'),

      "param_name" => "icon3",

      "value" => "",

      "description" => __("Class Icon 3", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Link 4", 'miex-child'),

      "param_name" => "link4",

      "value" => "",

      "description" => __("Link 4", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Class Icon 4", 'miex-child'),

      "param_name" => "icon4",

      "value" => "",

      "description" => __("Class Icon 4", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Link 5", 'miex-child'),

      "param_name" => "link5",

      "value" => "",

      "description" => __("Link 5", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Class Icon 5", 'miex-child'),

      "param_name" => "icon5",

      "value" => "",

      "description" => __("Class Icon 5", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Link 6", 'miex-child'),

      "param_name" => "link6",

      "value" => "",

      "description" => __("Link 6", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Class Icon 6", 'miex-child'),

      "param_name" => "icon6",

      "value" => "",

      "description" => __("Class Icon 6", 'miex-child')

   ),

   array(

      'type' => 'attach_image',

      'heading' => __( 'Image', 'miex-child' ),

      'param_name' => 'image',

      'value' => '',

      'description' => __( 'Select image background from media library to do your signature.', 'miex-child' )

   ),

    )));

}





if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."About Me", 'miex-child'),

   "base" => "about_me",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title", 'miex-child'),

      "param_name" => "title",

      "value" => "",

      "description" => __("Title", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Subtitle", 'miex-child'),

      "param_name" => "subtitle",

      "value" => "",

      "description" => __("Subtitle", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title 1", 'miex-child'),

      "param_name" => "title1",

      "value" => "",

      "description" => __("Title 1", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Number 1", 'miex-child'),

      "param_name" => "number1",

      "value" => "",

      "description" => __("Number 1", 'miex-child')

   ),  

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title 2", 'miex-child'),

      "param_name" => "title2",

      "value" => "",

      "description" => __("Title 2", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Number 2", 'miex-child'),

      "param_name" => "number2",

      "value" => "",

      "description" => __("Number 2", 'miex-child')

   ), 

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title 3", 'miex-child'),

      "param_name" => "title3",

      "value" => "",

      "description" => __("Title 3", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Number 3", 'miex-child'),

      "param_name" => "number3",

      "value" => "",

      "description" => __("Number 3", 'miex-child')

   ),   

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title 4", 'miex-child'),

      "param_name" => "title4",

      "value" => "",

      "description" => __("Title 4", 'miex-child')

   ),  

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Number 4", 'miex-child'),

      "param_name" => "number4",

      "value" => "",

      "description" => __("Number 4", 'miex-child')

   ),
      array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title 5", 'miex-child'),

      "param_name" => "newtitle",

      "value" => "",

      "description" => __("Title 5", 'miex-child')

   ),  

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Number 5", 'miex-child'),

      "param_name" => "number5",

      "value" => "",

      "description" => __("Number 5", 'miex-child')

   ),

   array(

      'type' => 'attach_image',

      'heading' => __( 'Image', 'miex-child' ),

      'param_name' => 'image',

      'value' => '',

      'description' => __( 'Select image background from media library to do your signature.', 'miex-child' )

   ),

    )));

}



if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."About Me 1", 'miex-child'),

   "base" => "about_me_1",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Class Icon", 'miex-child'),

      "param_name" => "icon",

      "value" => "",

      "description" => __("Class Icon", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title", 'miex-child'),

      "param_name" => "title",

      "value" => "",

      "description" => __("Title", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Subtitle", 'miex-child'),

      "param_name" => "subtitle",

      "value" => "",

      "description" => __("Subtitle", 'miex-child')

   ),

    )));

}



if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."Experiences", 'miex-child'),

   "base" => "experiences",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title", 'miex-child'),

      "param_name" => "title",

      "value" => "",

      "description" => __("Title", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title 1", 'miex-child'),

      "param_name" => "title1",

      "value" => "",

      "description" => __("Title 1", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title 2", 'miex-child'),

      "param_name" => "title2",

      "value" => "",

      "description" => __("Title 2", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title 3", 'miex-child'),

      "param_name" => "title3",

      "value" => "",

      "description" => __("Title 3", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Subtitle 1", 'miex-child'),

      "param_name" => "subtitle1",

      "value" => "",

      "description" => __("Subtitle 1", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Subtitle 2", 'miex-child'),

      "param_name" => "subtitle2",

      "value" => "",

      "description" => __("Subtitle 2", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Subtitle 3", 'miex-child'),

      "param_name" => "subtitle3",

      "value" => "",

      "description" => __("Subtitle 3", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Time 1", 'miex-child'),

      "param_name" => "the_time1",

      "value" => "",

      "description" => __("Time 1", 'miex-child')

   ),array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Time 2", 'miex-child'),

      "param_name" => "the_time2",

      "value" => "",

      "description" => __("Time 2", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Time 3", 'miex-child'),

      "param_name" => "the_time3",

      "value" => "",

      "description" => __("Time 3", 'miex-child')

   ),

   array(

      'type' => 'attach_image',

      'heading' => __( 'Image ', 'miex-child' ),

      'param_name' => 'image',

      'value' => '',

      'description' => __( 'Select image background from media library to do your signature.', 'miex-child' )

   ),

    )));

}





if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."Education", 'miex-child'),

   "base" => "education",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title 1", 'miex-child'),

      "param_name" => "title1",

      "value" => "",

      "description" => __("Title 1", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title 2", 'miex-child'),

      "param_name" => "title2",

      "value" => "",

      "description" => __("Title 2", 'miex-child')

   ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title 3", 'miex-child'),

      "param_name" => "title3",

      "value" => "",

      "description" => __("Title 3", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Subtitle", 'miex-child'),

      "param_name" => "subtitle",

      "value" => "",

      "description" => __("Subtitle", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Text", 'miex-child'),

      "param_name" => "text",

      "value" => "",

      "description" => __("Text", 'miex-child')

   ),

    )));

}



if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."Testimonial 4", 'miex-child'),

   "base" => "testimonial_4",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title", 'miex-child'),

      "param_name" => "title",

      "value" => "",

      "description" => __("Title", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("subtitle", 'miex-child'),

      "param_name" => "subtitle",

      "value" => "",

      "description" => __("subtitle", 'miex-child')

   ),

   array(

         'type' => 'attach_image',

         'heading' => __( 'Image', 'miex-child' ),

         'param_name' => 'image',

         'value' => '',

         'description' => __( 'Select image background from media library to do your signature.', 'miex-child' )

      ),

   array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Class Icon", 'miex-child'),

      "param_name" => "icon",

      "value" => "",

      "description" => __("Class Icon", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Text", 'miex-child'),

      "param_name" => "text",

      "value" => "",

      "description" => __("Text", 'miex-child')

   ),

    )));

}



if(function_exists('vc_map')){

   vc_map( array(

   "name" => __($pre_text."Blog 1", 'miex-child'),

   "base" => "blog_1",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

      array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Title", 'miex-child'),

      "param_name" => "title",

      "value" => "",

      "description" => __("Title", 'miex-child')

   ),

   array(

      "type" => "textarea",

      "holder" => "div",

      "class" => "",

      "heading" => __("Text subtitle", 'miex-child'),

      "param_name" => "subtitle",

      "value" => "",

      "description" => __("Text subtitle", 'miex-child')

   ),

      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Number of Post You want show.", 'miex-child'),

         "param_name" => "number",

         "value" => "3",

         "description" => __("Number of Post You want show.", 'miex-child')

      ),

      array(

         'type' => 'dropdown',

         'heading' => __( 'Sort Order', 'miex-child' ),

         'param_name' => 'orderpost',

         'value' => array(

            __( 'DESC : highest to lowest', 'miex-child' ) => 'DESC',

            __( 'ASC : lowest to highest', 'miex-child' ) => 'ASC',

         ),

         'description' => __( 'Select field do you want Order.', 'miex-child' )

      ),

      array(

         'type' => 'dropdown',

         'heading' => __( 'Order by', 'miex-child' ),

         'param_name' => 'orderby',

         'value' => array(

            __( 'Date', 'miex-child' ) => 'date',

            __( 'Title', 'miex-child' ) => 'title',

            __( 'Random', 'miex-child') => 'rand',

         ),

         'description' => __( 'Select field do you want Order.', 'miex-child' )

      ),

      array(

      "type" => "textfield",

      "holder" => "div",

      "class" => "",

      "heading" => __("Link", 'miex-child'),

      "param_name" => "link",

      "value" => "",

      "description" => __("Link", 'miex-child')

   ),



    )));

   }

}