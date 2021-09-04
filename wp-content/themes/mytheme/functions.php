<?php

    //Register Post type
    //register_post_type( string $post_type, array|string $args = array() )
   

    add_action( 'admin_enqueue_scripts', function(){
        wp_enqueue_script( 'myjs', get_template_directory_uri().'/js/admin.js', array(), true );
    } );

    //We will use init hook (Fronend + Backend Load Event)

    

    //add_meta_box( string $id, string $title, callable $callback, string|array|WP_Screen $screen = null, string $context = 'advanced', string $priority = 'default', array $callback_args = null )

    function mymetaboxcbfn(){
        wp_nonce_field( 'name_of_my_action', 'name_of_nonce_field' );
        echo '<input type="text" name="author" value="'.get_post_meta( get_the_ID(), 'author', true ).'" style="width:100%">';
    }

    function mymetabox(){
        add_meta_box( 'mymetaboxid', 'Author Name', 'mymetaboxcbfn','book','normal','high');
    }
    add_action('add_meta_boxes','mymetabox');


    function pricecbfn(){
        wp_nonce_field( 'bookinfo_action', 'bookinfo_fieldname');
        echo '<div>
                <lable for="bprice">Book Price</lable>
                 <input id="bprice" type="text" name="bookprice" value="'.get_post_meta( get_the_ID(), 'book_price', true ).'" style="width:100%">
              </div><br>
              <div>
                 <lable>Book Image</lable>
                <input type="file" name="bookimage" >
              </div>    
            ';
    }

    add_action('add_meta_boxes',function(){
         add_meta_box( 'mymetaboxid2', 'Book Info', 'pricecbfn', 'book', 'normal', 'high') ;  
    });

    
    // Save POst Hook



    add_action('save_post',function($post_id){
        //var_dump($post_id);die;

        //File Handeling Code

        if(isset($_FILES['bookimage']['bookimage'])){
            //var_dump($_FILES);
            //die('ok');
            $source=$_FILES['bookimage']['tmp_name'];
            $filename = $_FILES['bookimage']['name'];
            //$destination='./'.$filename;

            $response = wp_upload_bits(  $filename, null, file_get_contents($source) );

            update_post_meta( $post_id, 'book_image', $response['url']);
        }

        if(isset($_POST['bookprice'])){
            //Alway Check for incomming data

            if(! wp_verify_nonce( $_POST['bookinfo_fieldname'], 'bookinfo_action' ) ){
                return;
            }
            update_post_meta( $post_id, 'book_price', $_POST['bookprice']);
        }
        //Alway filter the incomming data
        if(isset($_POST['author'])){
            //var_dump($post_id);die;
          
            if ( ! wp_verify_nonce( $_POST['name_of_nonce_field'], 'name_of_my_action' ) ) {
                return;
            }
            update_post_meta( $post_id, 'author', $_POST['author'] );
        }


    });
?>