<?php get_header(); ?>
  <div class="row">
    <div class="col-sm-8">
      <h2>About Company Page</h2><br>
      <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>POWER</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>LOVE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>JOB DONE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br>
  <h4>What we have created</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="http://www.w3schools.com/bootstrap/paris.jpg" alt="Paris" width="400" height="300">
        <p><strong>Paris</strong></p>
        <p>Yes, we built Paris</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="http://www.w3schools.com/bootstrap/newyork.jpg" alt="New York" width="400" height="300">
        <p><strong>New York</strong></p>
        <p>We built New York</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="http://www.w3schools.com/bootstrap/sanfran.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>San Francisco</strong></p>
        <p>Yes, San Fran is ours</p>
      </div>
    </div>
  </div><br>
  
  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span style="font-style:normal;">Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span style="font-style:normal;">John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span style="font-style:normal;">Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
<?php 
  $args = array(
      'post_type' => 'price-information',
      'orderby' => array('date' => 'DESC'),
  );
  $loop = new WP_Query($args);
?>
<?php if ($loop->have_posts()): ?>
<div id="pricing" class="container-fluid">
  <?php 
    while ($loop->have_posts()) : $loop->the_post();
    $product_list = get_field('product_list');
    $price_info = get_field('price_info');
  ?>
  <div class="text-center">
    <h2>Pricing</h2>
    <h4><?php echo $price_info ?></h4>
  </div>
  <?php if ($product_list) { ?>
  <div class="row slideanim">
    <?php foreach($product_list as $index => $item) { ?>
      <div class="col-sm-4 col-xs-12">
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <h1><?php echo $item['product_name'] ?></h1>
          </div>
          <div class="panel-body">
            <p><strong><?php echo $item['lorem'] ?></strong> Lorem</p>
            <p><strong><?php echo $item['ipsum'] ?></strong> Ipsum</p>
            <p><strong><?php echo $item['dolor'] ?></strong> Dolor</p>
            <p><strong><?php echo $item['sit'] ?></strong> Sit</p>
            <p><strong><?php echo $item['comment'] ?></strong> Amet</p>
          </div>
          <div class="panel-footer">
            <h3>$<?php echo $item['price'] ?></h3>
            <h4><?php echo $item['period'] ?></h4>
            <button class="btn btn-lg">Sign Up</button>
          </div>
        </div>      
      </div>  
    <?php } ?>
  </div>
  <?php } ?>
  <?php endwhile; ?>
</div>
<?php endif; ?>

<!-- Container (Contact Section) -->

<?php $lat = $lng = 0; ?>
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
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
            		
            		foreach($group_address as $index => $item) {
            			$lat = $item['lat'];
            			$lng = $item['lng'];

            			$address .= '<div class="col-sm-5">';
            			$address .= '<p><h4>' . nl2br($item['building']) . '</h4></p>';
            			$address .= '<p><span class="glyphicon glyphicon-map-marker"></span> ' . $item['address'] . '</p>';

            			$address .= '<p><span class="glyphicon glyphicon-phone"></span> ' . $item['telephone'] . '</p>';
            			$address .= '<p><span class="glyphicon glyphicon-envelope"></span> ' . $item['email'] . '</p>';
            			$address .= '</div>';
					}
					
                }
            ?>
            <p><?php echo nl2br(get_field('contact_info')); ?></p>
            <?php
            endwhile;
        endif;
        echo $address;
    ?>
    <div class="col-sm-7 slideanim slide">
      <form id="form_contact" method="POST">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required="">
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required="">
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right send_contact" type="button">Send</button>
        </div>
      </div>	
      </form>
    </div>
  </div>

</div>

<div id="googleMap" style="height:400px;width:100%;"></div>

<!-- Add Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(<?php echo $lat?>, <?php echo $lng?>);

function initialize() {
var mapProp = {
  center:myCenter,
  zoom:12,
  scrollwheel:false,
  draggable:false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

<?php get_footer(); ?>
