<? global $base_url; 

function getUploadSettingsForDojo( $dojoUrl, $filename ) {
	return Array("path" => "uploads/" . $dojoUrl . "/orignal/", 
				"filename" => $filename, 
				"thumbs" => Array( Array("path" => "uploads/" . $dojoUrl . "/xx_large/",
										"width" => 480,
										"height" => 360
									),
									Array("path" => "uploads/" . $dojoUrl . "/x_large/",
										"width" => 225,
										"height" => 170,
									),
									Array("path" => "uploads/" . $dojoUrl . "/large/",
										"width" => 155,
										"height" => 124,
									),
									Array("path" => "uploads/" . $dojoUrl . "/medium/",      
										"width" => 130,
										"height" => 100,
									),
									Array("path" => "uploads/" . $dojoUrl . "/medium_1/",
										"width" => 100,
										"height" => 100,
									),
									Array("path" => "uploads/" . $dojoUrl . "/medium_2/",
										"width" => 120,
										"height" => 80,
									),
									Array("path" => "uploads/" . $dojoUrl . "/small/",
										"width" => 80,
										"height" => 60,
									),
									Array("path" => "uploads/" . $dojoUrl . "/x_small/",
										"width" => 50,
										"height" => 40,
									),
									Array("path" => "uploads/" . $dojoUrl . "/tiny/",
										"width" => 23,
										"height" => 23,
									),
									Array("path" => "uploads/" . $dojoUrl . "/small_logo/",
										"width" => 50,
										"height" => 35,
									),
									Array("path" => "uploads/" . $dojoUrl . "/logo/",
										"width" => 56,
										"height" => 57,
										"returnThatOne" => true
									),
									Array("path" => "uploads/" . $dojoUrl . "/iphone/",
										"width" => 107,
										"height" => 73,
										"watermark" => "images/iphone_photo_watermark.png"
									),
									Array("path" => "uploads/" . $dojoUrl . "/iphoneDojoLogo/",
										"width" => 65,
										"height" => 49
									),
									Array("path" => "uploads/" . $dojoUrl . "/featured/",
										"width" => 646,
										"height" => 305)
								)
				);
}

$days = array("Monday"=>1, "Tuesday"=>2, "Wednesday"=>3, "Thursday"=>4, "Friday"=>5, "Saterday"=>6, "Sunday"=>0);
$hours = array (99,0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23);

$defaultThumbs = array('class'=>'/images/defaults/medium_2/classes.jpg', 'instructor'=>'/images/defaults/x_large/instructors.jpg', 'user'=>'/images/defaults/medium_1/user.jpg', 'dojo'=>'/images/defaults/medium/intouchi-logo.jpg');

         
$emailData = array('fromEmail'=>'info@blitzcorner.com', 'fromName'=>'Blitzcorner');

$userRoles = array(1=>'Moderator', 2=>'Expert', 3=>'Writer', 4=>'Fan', 5=>'Pro', 6=>'All-Star', 7=>'MVP');

$siteMail = 'info@blitzcorner.com';
$siteAdminMail = 'itaiarbel@10rank.com';



$ppp = 2222;
$maxVotes = 5;


$url_types = array(
    'blog_id' => 'www.example.com/blog/{post id}',
    'category_id' => 'www.example.com/{category}/{post id}',
    'id' => 'www.example.com/{id}',
    'category_name' => 'www.example.com/{category}/{post name}',
    'name' => 'www.example.com/{post name}'
);

$globalCategories=array(
  "NFL"=>1,
  "MLB"=>2, 
  "NBA"=>3, 
  "NHL"=>4, 
  "NCAA-FB"=>5, 
  "NCAA-BB"=>6, 
  "Soccer"=>7, 
  "MMA"=>8,
  "Boxing"=>29,
  "Racing"=>9,
  "Golf"=>11,
  "Outdoor-Sports"=>12,
  "Cricket"=>13,
  "Extreme-Sports"=>14,
  "Cycling"=>15,
  "Rugby"=>16,
  "Tennis"=>17,
  "Surfing"=>18,
  "Windsurfing"=>19,
  "Ski"=>20,
  "Snowboarding"=>21,
  "Skateboarding"=>22,
  "BMX"=>23,
  "Motorcycling-Extreme"=>24,
  "Motorcycles"=>25,
  "Fun-Corner"=>26,
  "Fantasy-Football"=>27,
  "Other"=>10
  
);

$columnsConfig = array(
    '2' => 'style2.css',
    '3' => 'style3.css',
    'default' => '');
    
define ("NO_EXISTS_MODULE", "There is no module for this position");