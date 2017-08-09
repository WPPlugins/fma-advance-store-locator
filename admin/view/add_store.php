<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<div id="fmeasl-wrap" class="wrap fmeasl-add-attribute">
    <?php  
        $countries = $this->my_add_country_select();

    ?>
	<h2>Advance Store Locator</h2>
    <h3>Add Store</h3>
    <?php settings_errors(); ?>
    
    <?php 
        if(isset($_SESSION['chkd'])!='') {

            $chkd = $_SESSION['chkd'];
        } else {
            $chkd = '';
        }   
    ?>
    
    <form method="post" action="" accept-charset="utf-8">
        <input type="hidden" name="fmeasl_actions" value="add_new_store" />
        <input type="hidden" name="fmeasl[checked_boxes]" id="checked_boxes" value="<?php echo $chkd; ?>">
        <?php wp_nonce_field( 'fmeasl_add_new_store' ); ?>
        <ul id="info-nav">
            <li><a href="#general"><span>General</span></a></li>
            <li><a href="#data"><span>Data</span></a></li>
            <li><a href="#store-products"><span>Store Products</span></a></li>
        </ul>
        <div id="info">
            <div id="general" class="hide">
                <div class="postbox-container" style="float:none">
                    <div class="metabox-holder">
                        <div class="postbox">
                            <h3><span><?php _e( 'General Section', 'fmeasl' ); ?></span></h3>
                            <div class="inside">
                                <p>
                                    <label for="fmeasl-store-name">
                                        <span class="tit"><?php _e( 'Store Name:', 'fmeasl' ); ?>*</span>
                                    </label>
                                    <input id="fmeasl-store-name" name="fmeasl[store_name]" type="text" class="textinput <?php if ( isset( $_POST['fmeasl'] ) && empty( $_POST['fmeasl']['store_name'] ) ) { echo 'fmeasl-error'; } ?>" value="<?php if ( !empty( $_POST['fmeasl']['store_name'] ) ) { echo esc_attr( stripslashes( $_POST['fmeasl']['store_name'] ) );  } ?>" />
                                </p>

                                <p>
                                    <label for="fmeasl-meta-title">
                                        <span class="tit"><?php _e( 'Meta Title:', 'fmeasl' ); ?></span>
                                    </label> 
                                    <input type="text" value="<?php if ( !empty( $_POST['fmeasl']['meta_title'] ) ) { echo esc_attr( stripslashes( $_POST['fmeasl']['meta_title'] ) );  } ?>" name="fmeasl[meta_title]" class="textinput" id="fmeasl-meta-title" />
                                </p>

                                <p>
                                    <label for="fmeasl-meta-keywords">
                                        <span class="tit"><?php _e( 'Meta Keywords:', 'fmeasl' ); ?></span>
                                    </label>
                                    <textarea name="fmeasl[meta_keywords]" class="textinput" rows="7"><?php if ( !empty( $_POST['fmeasl']['meta_keywords'] ) ) { echo esc_attr( stripslashes( $_POST['fmeasl']['meta_keywords'] ) );  } ?></textarea> 
                                </p>

                                <p>
                                    <label for="fmeasl-meta-description">
                                        <span class="tit"><?php _e( 'Meta Description:', 'fmeasl' ); ?></span>
                                    </label> 
                                    <textarea name="fmeasl[meta_description]" class="textinput"  rows="7" ><?php if ( !empty( $_POST['fmeasl']['meta_description'] ) ) { echo esc_attr( stripslashes( $_POST['fmeasl']['meta_description'] ) );  } ?></textarea> 
                                </p>

                                <p>
                                    <label for="fmeasl-meta-description">
                                        <span class="tit"><?php _e( 'Store Attributes:', 'fmeasl' ); ?></span>
                                    </label>
                                    <a href="https://www.fmeaddons.com/woocommerce-plugins-extensions/addvance-store-locator.html" target="_blank"><h3>Upgrade To Premium</h3></a>
                                </p>

                                <p>
                                    <label for="fmeasl-store-description">
                                        <span class="tit"><?php _e( 'Store Description:', 'fmeasl' ); ?></span>
                                    </label> 
                                    <?php 
                                        $editor_id = 'addstore';
                                        if (!empty( $_POST['fmeasl']['store_description'] ) ) { 
                                            $content = esc_attr( stripslashes( $_POST['fmeasl']['store_description'] ) );
                                         } else {
                                            $content = '';
                                         }
                                        $settings = array( 
                                            'textarea_name' => 'fmeasl[store_description]',
                                            'textarea_rows' => '10'
                                             );
                                        wp_editor( $content, $editor_id, $settings );
                                     ?> 
                                </p>


                                
                             </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div id="data" class="hide">
                <div class="postbox-container" style="float:none">
                    <div class="metabox-holder">
                        <div class="postbox">
                            <h3><span><?php _e( 'Data Section', 'fmeasl' ); ?></span></h3>
                            <div class="inside">

                                <p>
                                    <label for="fmeasl-country">
                                        <span class="tit"><?php _e( 'Country:', 'fmeasl' ); ?>*</span>
                                    </label>
                                    <select name="fmeasl[country]" class="textinput <?php if ( isset( $_POST['fmeasl'] ) && empty( $_POST['fmeasl']['country'] ) ) { echo 'fmeasl-error'; } ?>" >
                                        <option value=""><?php _e('Select Country', 'fmeasl') ?></option>
                                        <?php foreach ($countries as $country) { ?>
                                           <option value="<?php echo $country; ?>"><?php echo $country; ?></option>
                                        <?php } ?>
                                    </select>

                                </p>

                                <p>
                                    <label for="fmeasl-city">
                                        <span class="tit"><?php _e( 'District / City:', 'fmeasl' ); ?>*</span>
                                    </label>
                                    <input id="fmeasl-city" name="fmeasl[city]" type="text" class="textinput <?php if ( isset( $_POST['fmeasl'] ) && empty( $_POST['fmeasl']['city'] ) ) { echo 'fmeasl-error'; } ?>" value="<?php if ( !empty( $_POST['fmeasl']['city'] ) ) { echo esc_attr( stripslashes( $_POST['fmeasl']['city'] ) );  } ?>" />
                                </p>

                                <p>
                                    <label for="fmeasl-state">
                                        <span class="tit"><?php _e( 'State:', 'fmeasl' ); ?></span>
                                    </label>
                                    <input id="fmeasl-state" name="fmeasl[state]" type="text" class="textinput" value="<?php if ( !empty( $_POST['fmeasl']['state'] ) ) { echo esc_attr( stripslashes( $_POST['fmeasl']['state'] ) );  } ?>" />
                                </p>

                                <p>
                                    <label for="fmeasl-zip-code">
                                        <span class="tit"><?php _e( 'Postal / Zip Code:', 'fmeasl' ); ?>*</span>
                                    </label>
                                    <input id="fmeasl-zip-code" name="fmeasl[zip_code]" type="text" class="textinput <?php if ( isset( $_POST['fmeasl'] ) && empty( $_POST['fmeasl']['zip_code'] ) ) { echo 'fmeasl-error'; } ?>" value="<?php if ( !empty( $_POST['fmeasl']['zip_code'] ) ) { echo esc_attr( stripslashes( $_POST['fmeasl']['zip_code'] ) );  } ?>" />
                                </p>

                                <p>
                                    <label for="fmeasl-address">
                                        <span class="tit"><?php _e( 'Address:', 'fmeasl' ); ?>*</span>
                                    </label>
                                    <input id="fmeasl-address" name="fmeasl[address]" type="text" class="textinput <?php if ( isset( $_POST['fmeasl'] ) && empty( $_POST['fmeasl']['address'] ) ) { echo 'fmeasl-error'; } ?>" value="<?php if ( !empty( $_POST['fmeasl']['address'] ) ) { echo esc_attr( stripslashes( $_POST['fmeasl']['address'] ) );  } ?>" />
                                </p>

                                <p>
                                    <label for="fmeasl-latitude">
                                        <span class="tit"><?php _e( 'Latitude:', 'fmeasl' ); ?></span>
                                    </label>
                                    <input id="fmeasl-latitude" name="fmeasl[latitude]" type="text" class="textinput" value="<?php if ( !empty( $_POST['fmeasl']['latitude'] ) ) { echo esc_attr( stripslashes( $_POST['fmeasl']['latitude'] ) );  } ?>" />
                                </p>

                                <p>
                                    <label for="fmeasl-longitude">
                                        <span class="tit"><?php _e( 'Longitude:', 'fmeasl' ); ?></span>
                                    </label>
                                    <input id="fmeasl-longitude" name="fmeasl[longitude]" type="text" class="textinput" value="<?php if ( !empty( $_POST['fmeasl']['longitude'] ) ) { echo esc_attr( stripslashes( $_POST['fmeasl']['longitude'] ) );  } ?>" />
                                </p>

                                <p>
                                    <label for="fmeasl-attribute-status">
                                        <span class="tit"><?php _e( 'Status:', 'fmeasl' ); ?></span>
                                    </label>
                                    <select name="fmeasl[status]" class="textinput" >
                                        <option value="1"><?php _e('Active', 'fmeasl') ?></option>
                                        <option value="0"><?php _e('Inactive', 'fmeasl') ?></option>
                                    </select>
                                </p>

                                <p>
                                    <label for="fmeasl-phone">
                                        <span class="tit"><?php _e( 'Phone:', 'fmeasl' ); ?></span>
                                    </label>
                                    <input id="fmeasl-phone" name="fmeasl[phone]" type="text" class="textinput" value="<?php if ( !empty( $_POST['fmeasl']['phone'] ) ) { echo esc_attr( stripslashes( $_POST['fmeasl']['phone'] ) );  } ?>" />
                                </p>

                                <p>
                                    <label for="fmeasl-fax">
                                        <span class="tit"><?php _e( 'Fax:', 'fmeasl' ); ?></span>
                                    </label>
                                    <input id="fmeasl-fax" name="fmeasl[fax]" type="text" class="textinput" value="<?php if ( !empty( $_POST['fmeasl']['fax'] ) ) { echo esc_attr( stripslashes( $_POST['fmeasl']['fax'] ) );  } ?>" />
                                </p>

                                <p>
                                    <label for="fmeasl-store-image">
                                        <span class="tit"><?php _e( 'Store Image:', 'fmeasl' ); ?></span>
                                    </label>
                                    <input type="text" name="fmeasl[store_image]" id="new_img" value="<?php if ( !empty( $_POST['fmeasl']['store_image'] ) ) { echo esc_attr( stripslashes( $_POST['fmeasl']['store_image'] ) );  } ?>">
                                    <a class="button" onclick="upload_image('new_img');">Upload Image</a>
                                </p>

                               
                                 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="postbox-container" style="float:none">
                    <div class="metabox-holder">
                        <div class="postbox">
                            <div class="inside" style="padding:3px 12px 12px;">
                                <p>
                                    <input id="fmeasl-add-store" type="submit" name="fmeasl-add-store" class="button-primary" value="<?php _e( 'Add Store', 'fmeasl' ); ?>" />
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        

            </div>

            <div id="store-products" class="hide">
            
                <div class="upgrade_block">
                     <div class="inner_top_container">
                     <div class="logo">
                       <img src="<?php echo  FMEASL_URL ?>/images/fme-addons.png" alt="">
                     </div>
                    <h2>Upgrade to <span>Premium</span></h2>
                    <p>To get access to enhanced customization, improved experience and the ability to manage your tasks better, upgrade to the premium version now.</p>
                    </div>
                    <div class="buttonss"><a href="https://www.fmeaddons.com/woocommerce-plugins-extensions/addvance-store-locator.html" target="_blank">Upgrade</a></div>
                </div>
            </div>
            
        </div>

        
          
        
    </form>

</div>


<script type="text/javascript">
jQuery(document).ready(function($){
  $( '#info #data' ).hide();
  $( '#info #store-products' ).hide();
  
  $('#info-nav li').click(function(e) {
    $('#info .hide').hide();
    $('#info-nav .current').removeClass("current");
    $(this).addClass('current');
    
    var clicked = $(this).find('a:first').attr('href');
    $('#info ' + clicked).fadeIn('fast');
    e.preventDefault();
  }).eq(0).addClass('current');
});


</script>
