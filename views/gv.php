<?php
//Get the content of the JSON file using file_get_contents():
$str = file_get_contents('https://gis-api.aiesec.org/v2/opportunities.json?access_token=e316ebe109dd84ed16734e5161a2d236d0a7e6daf499941f7c110078e3c75493&filters[home_mcs][]=1552&filters[programmes][]=1&per_page=200&sort=+created&filters[last_interaction][from]=2017-01-30&filters[earliest_start_date]=2018-2-10');
// decode the JSON into an associative array
$json = json_decode($str, true);

//echo '<pre>' . print_r($json, true) . '</pre>';


 ?>


 <div class="wrapper">
 	<div class="header header-filter" style="background-image: url('assets/img/bg/gvb.PNG');"></div>

 	<div class="main main-raised">

 			<div class="section">

 				<div class="row text-center">
 					<?php foreach ($json['data'] as $value) {?>
            <div class="col-md-4">
        			<div class="info">
                  <div class="card">
  <div class="card-img-top" alt="Card image cap" style=" background-image: url(<?php echo $value['cover_photo_urls'];
   ?> );
    background-size: cover;
    background-position: center;
    height: 200px;"></div>
  <div class="card-body">
    <h4 class="card-title"><?php echo $value['title']; ?></h4>
    <p class="card-text"><?php echo $value['location']; ?></p>
    <a href=<?php echo "https://aiesec.org/opportunity/".$value['id']; ?> class="btn btn-warning">Link to the opportunitie</a>
  </div>
</div>
        		</div>
            </div>
            <?php } ?>
          </div>
 				</div>
 			</div>
 		</div>
