<?php
$xml = simplexml_load_file('Test-sitiar.xml');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test-Sitiar</title>
	<link rel="stylesheet" href="Styl.css">
</head>
<body>
<section id="TEAM">
		<div class="container">
			<div class="team">
				<h1>Test-Sitiar</h1>
				<div class="line"></div>
			</div>
			<div class="informations">
				<div class="information_item">
			        <img src="img/Furniture.png" alt="Furniture">
				        <h4><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[0]->title); 
                        }
                        ?>
	                    </h4>
				        <span><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[0]->descr); 
                        }
                        ?></span>
				        <p><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[0]->price); 
                        }
                        ?></p>
			    </div>
			    <div class="information_item">
			        <img src="img/Furniture.png" alt="Furniture">
				        <h4><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[1]->title); 
                        }
                        ?>
	                    </h4>
				        <span><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[1]->descr); 
                        }
                        ?></span>
				        <p><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[1]->price); 
                        }
                        ?></p>
			    </div>
				<div class="information_item">
			        <img src="img/Furniture.png" alt="Furniture">
				        <h4><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[2]->title); 
                        }
                        ?>
	                    </h4>
				        <span><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[2]->descr); 
                        }
                        ?></span>
				        <p><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[2]->price); 
                        }
                        ?></p>
			    </div>
			    <div class="information_item">
			        <img src="img/Furniture.png" alt="Furniture">
				        <h4><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[3]->title); 
                        }
                        ?>
	                    </h4>
				        <span><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[3]->descr); 
                        }
                        ?></span>
				        <p><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[3]->price); 
                        }
                        ?></p>
			    </div>
				<div class="information_item">
			        <img src="img/Furniture.png" alt="Furniture">
				        <h4><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[4]->title); 
                        }
                        ?>
	                    </h4>
				        <span><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[4]->descr); 
                        }
                        ?></span>
				        <p><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[4]->price); 
                        }
                        ?></p>
			    </div>
			    <div class="information_item">
			        <img src="img/Furniture.png" alt="Furniture">
				        <h4><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[5]->title); 
                        }
                        ?>
	                    </h4>
				        <span><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[5]->descr); 
                        }
                        ?></span>
				        <p><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[5]->price); 
                        }
                        ?></p>
			    </div>
				<div class="information_item">
			        <img src="img/Furniture.png" alt="Furniture">
				        <h4><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[6]->title); 
                        }
                        ?>
	                    </h4>
				        <span><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[6]->descr); 
                        }
                        ?></span>
				        <p><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[6]->price); 
                        }
                        ?></p>
			    </div>
			    <div class="information_item">
			        <img src="img/Furniture.png" alt="Furniture">
				        <h4><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[7]->title); 
                        }
                        ?>
	                    </h4>
				        <span><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[7]->descr); 
                        }
                        ?></span>
				        <p><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[7]->price); 
                        }
                        ?></p>
			    </div>
			    <div class="information_item">
			        <img src="img/Furniture.png" alt="Furniture">
				        <h4><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[8]->title); 
                        }
                        ?>
	                    </h4>
				        <span><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[8]->descr); 
                        }
                        ?></span>
				        <p><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[8]->price); 
                        }
                        ?></p>
			    </div>
			    <div class="information_item">
			        <img src="img/Furniture.png" alt="Furniture">
				        <h4><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[9]->title); 
                        }
                        ?>
	                    </h4>
				        <span><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[9]->descr); 
                        }
                        ?></span>
				        <p><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[9]->price); 
                        }
                        ?></p>
			    </div>
				<div class="information_item">
			        <img src="img/Furniture.png" alt="Furniture">
				        <h4><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[10]->title); 
                        }
                        ?>
	                    </h4>
				        <span><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[10]->descr); 
                        }
                        ?></span>
				        <p><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[10]->price); 
                        }
                        ?></p>
			    </div>
			    <div class="information_item">
			        <img src="img/Furniture.png" alt="Furniture">
				        <h4><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[11]->title); 
                        }
                        ?>
	                    </h4>
				        <span><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[11]->descr); 
                        }
                        ?></span>
				        <p><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[11]->price); 
                        }
                        ?></p>
			    </div>
				<div class="information_item">
			        <img src="img/Furniture.png" alt="Furniture">
				        <h4><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[12]->title); 
                        }
                        ?>
	                    </h4>
				        <span><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[12]->descr); 
                        }
                        ?></span>
				        <p><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[12]->price); 
                        }
                        ?></p>
			    </div>
			    <div class="information_item">
			        <img src="img/Furniture.png" alt="Furniture">
				        <h4><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[13]->title); 
                        }
                        ?>
	                    </h4>
				        <span><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[13]->descr); 
                        }
                        ?></span>
				        <p><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[13]->price); 
                        }
                        ?></p>
			    </div>
				<div class="information_item">
			        <img src="img/Furniture.png" alt="Furniture">
				        <h4><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[14]->title); 
                        }
                        ?>
	                    </h4>
				        <span><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[14]->descr); 
                        }
                        ?></span>
				        <p><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[14]->price); 
                        }
                        ?></p>
			    </div>
			    <div class="information_item">
			        <img src="img/Furniture.png" alt="Furniture">
				        <h4><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[15]->title); 
                        }
                        ?>
	                    </h4>
				        <span><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[15]->descr); 
                        }
                        ?></span>
				        <p><?php
				        foreach ($xml as $p) {
	                    echo($p->pos[15]->price); 
                        }
                        ?></p>
			    </div>
			</div>
		</div>
	</section>
	</body>
</html>