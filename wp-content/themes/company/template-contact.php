<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
<!--=============== wrapper ===============-->
<?php
    $image =  wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full');
    $introduce_text = (get_post_meta(get_the_ID(), 'introduce_text', true)) ? get_post_meta(get_the_ID(), 'introduce_text', true) : '';
    $sub_introduce_text = (get_post_meta(get_the_ID(), 'sub_introduce_text', true)) ? get_post_meta(get_the_ID(), 'sub_introduce_text', true) : '';
?> 	
<div id="wrapper">
<div class="content">
    <section class="parallax-section header-section">
        <div class="bg bg-parallax" style="background-image:url(<?php echo $image; ?>)" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
        <div class="overlay"></div>
        <div class="container">
            <h2><?php echo $introduce_text; ?></h2>
            <h3><?php echo $sub_introduce_text; ?></h3>
        </div>
    </section>
    <section>
        <div class="triangle-decor"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-details">
                    <?php 
                        $args = array(
                            'post_type' => 'store-information',
                            'orderby' => array('date' => 'DESC'),
                        );
                        $loop = new WP_Query($args);
                        $address = '';
                        if ($loop->have_posts()):
                            while ($loop->have_posts()) : $loop->the_post();
                                $group_address = get_field('address_group');
                                if($group_address) {
                                    $address = '<div class="col-md-3">';
                                    foreach($group_address as $index => $item) {
                                        $address .= '<div class="contact-details">
                                                        <h4>'.$item['building'].'</h4>
                                                        <ul>
                                                            <li><a>'.$item['address'].'</a></li>
                                                            <li><a>'.$item['telephone'].'</a></li>
                                                            <li><a>'.$item['email'].'</a></li>
                                                        </ul>
                                                    </div>';                                               
                                        if($index % 2 !== 0 && ($index + 1 != count($group_address))) {
                                            $address .= '</div><div class="col-md-3">';
                                        }            
                                        if($index + 1 == count($group_address)) {
                                             $address .= '</div>';
                                        }
                                        ?>
                                        <script>
                                            var element = {
                                                "latLng": [ <?php echo $item['lat'].','.$item['lng']; ?> ],
                                                "data": "<?php echo $item['building'] ?>",
                                                "options": {
                                                    icon: "<?php echo get_template_directory_uri(); ?>/images/marker.png"
                                                }
                                            };
                                            objAddress.push(element);
                                        </script>
                                        <?php
                                    }
                                }
                            ?>
                            <h3>Contact info</h3>
                            <p><?php echo nl2br(get_field('contact_info')); ?></p>
                            <?php
                            endwhile;
                        endif;
                    ?>
                    </div>
                </div>
                <?php echo $address; ?>
            </div>
            <div class="bold-separator">
                <span></span>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h3>Our location</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="no-padding">
        <div class="map-box">
            <div class="map-holder" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);">
                <div  id="map-canvas"></div>
            </div>
        </div>
    </section>
    <section>
        <div class="triangle-decor"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h3>Get in Touch</h3>
                        <h4 class="decor-title">Write us</h4>
                        <div class="separator color-separator"></div>
                    </div>
                    <div class="contact-form-holder">
                        <div id="contact-form">
                            <div id="message2"></div>
                            <form method="post" action="<?php echo get_template_directory_uri(); ?>/contact_submit" name="contactform" id="contactform">
                                <input name="name" type="text" class="name"  onClick="this.select()" value="Name" >
                                <input name="email" type="text" class="email" onClick="this.select()" value="E-mail" > 
                                <input name="phone" type="text" class="phone" onClick="this.select()" value="Phone" >            
                                <textarea name="comments"  class="comments" onClick="this.select()" >Message</textarea>  
                                <button type="submit"  id="submit">Send </button>                                                                                                   
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
    <!--content end-->
<?php get_footer(); ?>