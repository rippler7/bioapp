<?php
$folder = "bio103";
$navlinks = array(
	"one"=>array(
			"name"=>"Dashboard",
			"icon"=>"&#xf0e4;",
			"link"=>$folder."/index.php",
			"items"=>array(
					"sub1-1"=>array(
						"subname"=>"Preface",
						"subicon"=>"&#xf022;",
						"sublink"=>$folder."/preface.php"
						)
				)
		),
	"two"=>array(
			"name"=>"Plant Biology",
			"icon"=>"&#xf126;",
			"link"=>$folder."/intro.php",
			"items"=>array(
					"sub2-1"=>array(
							"subname"=>"Early Botanical Study",
							"subicon"=>"&#xf002;",
							"sublink"=>$folder."/earlybotstudy.php"
						),
					"sub2-2"=>array(
							"subname"=>"Modern Botanical Study",
							"subicon"=>"&#xf00e;",
							"sublink"=>$folder."/modernbotstudy.php"
						),
					"sub3-1"=>array(
							"subname"=>"Disciplines",
							"subicon"=>"&#xf00a;",
							"sublink"=>$folder."/d-taxonomic.php"
						),
					"sub3-2"=>array(
							"subname"=>"Related Disciplines",
							"subicon"=>"&#xf074;",
							"sublink"=>$folder."/d-related.php"
						),
					"sub3-3"=>array(
							"subname"=>"The Scientific Method",
							"subicon"=>"&#xf0CC;",
							"sublink"=>$folder."/scientific.php"
						),
					"sub3-4"=>array(
							"subname"=>"Scientific Method Limitations",
							"subicon"=>"&#xf127;",
							"sublink"=>$folder."/limitations.php"
						),
					"sub3-5"=>array(
							"subname"=>"Life, Some Life Origin Theories",
							"subicon"=>"&#xf110;",
							"sublink"=>$folder."/origins.php"
						),
					"dub3-6"=>array(
							"subname"=>"Survey of the Plant Kingdom",
							"subicon"=>"&#xf0ca;",
							"sublink"=>$folder."/survey.php"
						)
				)
		),
	"four"=>array(
			"name"=>"Discussion Questions",
			"icon"=>"&#xf0e6;",
			"link"=>$folder."/discussion.php",
			"items"=>''
		),
	"five"=>array(
			"name"=>"Exercises",
			"icon"=>"&#xf085;",
			"link"=>$folder."/exercises.php",
			"items"=>''
		)
	)	
?>