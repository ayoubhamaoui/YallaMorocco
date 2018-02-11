<?php
//Get the content of the JSON file using file_get_contents():
$str = file_get_contents('https://gis-api.aiesec.org/v2/opportunities.json?access_token=e316ebe109dd84ed16734e5161a2d236d0a7e6daf499941f7c110078e3c75493&filters[home_mcs][]=1552&filters[programmes][]=1&sort=+created&filters[last_interaction][from]=2017-01-30&filters[earliest_start_date]=2018-2-10');
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
        				<div class="icon icon-primary">
                  <div class="card" style="width: 320px;">
  <img class="card-img-top" src=<?php
 if( $user = strstr($value['title'], 'Education' , true)){ // Depuis PHP 5.3.0
  echo "'https://cdn-expa.aiesec.org/gis-img/gv_default.png'";
}elseif ($user = strstr($value['title'], 'smiles',true)) {
  echo "'https://s3.eu-west-1.amazonaws.com/gis-production-eu/profile_photos/original/1509746301.jpg?1509746301'";
}elseif (strstr($value['title'], 'Morocco',true)) {
  echo "'https://s3.eu-west-1.amazonaws.com/gis-production-eu/profile_photos/original/1517960663.jpg?1517960663'";
}elseif (strstr($value['title'],'Discover',true)) {
  echo "'https://s3.eu-west-1.amazonaws.com/gis-production-eu/profile_photos/original/1513784713.png?1513784713'";
}
   ?>  alt="Card image cap" style=" width:320px; height:180px">
  <div class="card-body">
    <h4 class="card-title"><?php echo $value['title']; ?></h4>
    <p class="card-text"><?php echo $value['sdg_info']['implementation']; ?></p>
    <a href=<?php echo "https://aiesec.org/opportunity/".$value['id']; ?> class="btn btn-inf">Link to the opportunitie</a>
  </div>
</div>
        			</div>
        		</div>
            </div>
            <?php } ?>
          </div>
 				</div>
 			</div>
 		</div>

 	</div>

 </div>
