<?php 

function setList($Group){
    $url = "./jsonFile/data.json";    
    $response = file_get_contents($url);
    $data = json_decode($response);
    $indexNumber = 0;
    foreach ($data as $getBooks){
        if ($getBooks->group == $Group ){
            echo '<div class="product-small  col product-type-simple">';
            echo '<div class="product-small box ">';
            echo '<div class="box-image">';
            echo '<div class="image">';
            echo '<a href="product.php?book='. $indexNumber. '" aria-label="">';
            echo '<img src="'. $getBooks->img .'" width="250" height="300" />';
            echo '</a>';
            echo '</div>';
            echo '</div>';
            echo '<div class="box-text box-text-products text-center grid-style-2">';
            echo '<div class="title-wrapper">';
            echo '<p class="name product-title woocommerce-loop-product__title"><a href="product.php?book='.$indexNumber.'" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">'. $getBooks->name .'</a></p>';
            echo '</div>';
            if ($getBooks->discount > 0){
                echo '<div class="price-wrapper">';
                echo '<span class="price">';
                echo '<del>';
                echo '<span class="woocommerce-Price-amount amount">';
                echo '<bdi>';
                echo '<span class="woocommerce-Price-currencySymbol">&#3647;</span> '. $getBooks->price.'';
                echo '</bdi>';
                echo '</span>';
                echo '</del>&nbsp;';
                echo '<ins>';
                echo '<span class="woocommerce-Price-amount amount">';
                echo '<bdi>';
                echo '<span class="woocommerce-Price-currencySymbol">';
                echo '&#3647;';
                echo '</span>'. $getBooks->discount.'';
                echo '</bdi>';
                echo '</span>';
                echo '</ins>';
                echo '</span>';
                echo '</div>';
            }else{
                echo '<div class="price-wrapper">';
                echo '<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#3647;</span>&nbsp;'. $getBooks->price .'</span></span>';      
                echo '</div>';
            }

            echo '<div class="add-to-cart-button"><a href="#bookid" data-quantity="1" class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline" rel="nofollow">หยิบใส่ตะกร้า</a></div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    $indexNumber += 1;
    }
}




?>








