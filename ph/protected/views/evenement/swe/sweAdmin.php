<?php 
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile('http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js' , CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->request->baseUrl. '/js/jquery.touch-punch.min.js' , CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->request->baseUrl. '/js/jquery.shapeshift.min.js' , CClientScript::POS_END);
?>
<style>
h2 {
    font-family: "Homestead";
  position:relative;
  top:0px;
  left:0px;
  color: #324553;
  
}
.grid a{
display:block;
font-family: "Homestead";
  position:relative;
  top:0px;
  left:0px;
  color: #324553;
}
.grid {
      border: 1px dashed #CCC;
      position: relative;
    }

    .grid > div {
      background: #AAA;
      position: absolute;
      height: 100px;
      width: 100px;
    }

    .grid > div[data-ss-colspan="2"] { width: 210px; }
    .grid > div[data-ss-colspan="3"] { width: 320px; }

    .grid > .ss-placeholder-child {
      background: transparent;
      border: 1px dashed blue;
    }
body {	/*overflow: hidden;*/}

canvas{position:absolute;top:0px;left:0px;}

.appMenuContainer{background-color:rgba(59, 120, 163, 0.7);width:100%;height:55px;position:absolute;top:57px;left:0px;z-index:1000;}
.appMenu{position:absolute;top:5px;right:30px;z-index:1051;}
.appMenu li{padding:5px;margin:5px;border:2px solid #666;display:inline;float:left;background-color:#F5E414;}
.appMenu a{color:#324553;font-weight:bold;}

#appPanel{float:right;border:2px solid #000;background-color:#FFF;width:500px;margin-right:100px;padding:5px;
  height: 6em;
  overflow: hidden;
}
#appPanel ul{list-style:none}

.appContent{position:absolute;top:120px;left:120px;z-index:1000;width:90%;}
.appContent ul.people li{position:relative;width:190px;height:100px;padding:5px;margin:5px;
display:block;float:left;
background-color:#FFF;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
-o-border-radius: 5px;
-ms-border-radius: 5px;
border-radius: 5px;}
.appContent ul.people li.descL {height:150px; }
.appContent h1{margin-left:0px;text-decoration:underline;font-family: "Homestead";color: #fff;}
.appContent div.infos{word-wrap:break-word;text-align:right}
.appContent div.type {display:block;float:right;font-size:x-small;}
.appContent div.name {font-family: "Homestead";color: #324553;font-size:medium; margin-left:10px;display:block;float:right; }
.appContent div.desc {position:absolute;width:100%;bottom:0px; margin:5px;}
.appContent div.desc a.btn-ph{display:inline-block;float:left;margin-right:5px;}

.appContent div.thumb{height:40px;width:40px;float:left;}
.appContent .metier{width:20px;height:20px;background-color:red;
position:relative; 
top:0px; right:0px;
-webkit-border-radius: 20px;
-moz-border-radius: 20px;
-o-border-radius: 20px;
-ms-border-radius: 20px;
border-radius: 20px;
border:1px solid #000;}
.participant{border:2px solid yellow;
background-url:#fff url('<?php echo Yii::app()->createUrl('images/PHOTO_ANONYMOUS.png')?>') no-repeat bottom left;}
.projet{border:2px solid orange;}
.coach{border:2px solid purple;}
.jury{border:2px solid red;}
.organisateur{border:2px solid blue;}
.sponsor {list-style:none}
.sponsor img{width:100px;margin-bottom:20px;}

.appFooter{position:fixed;bottom:0px;right:0px;width:100px;z-index:2000;margin:15px;}
</style>

<div class="appContent">

	<h1>Start Up Week End 2012</h1>
	
	<div class="container graph">
    <br/>
    <div class="hero-unit">
    
    <h2>Administration</h2>
    <p>C'est Raid, c'est grand, 54h pour Pitcher, Rézoter, Contribuer, Développer, Finaliser votre projet.</p>
    <div class="grid">
        <div></div>
        <div  data-ss-colspan="2">
        <a href="<?php echo Yii::app()->createUrl('index.php/evenement/StartupWeekEnd2012')?>">Panel Participant</a>
        </div>
        <div></div>
        <div data-ss-colspan="2"><a href="#sweAddPerson"   target="_blank" role="button" data-toggle="modal"><i class="icon-plus"></i> Participant</a></div>
        <div data-ss-colspan="2">
            <a href="#sweAddProject"   target="_blank" role="button" data-toggle="modal"><i class="icon-plus"></i> Projet</a>
            <?php ?>
        </div>
        <div data-ss-colspan="3"><a href="#sweHelp"   target="_blank" role="button" data-toggle="modal">Statistic </a></div>
        <div></div>
        <?php 
        $ct = 0;
        foreach (Yii::app()->mongodb->startupweekend->find(array("type"=>"participant")) as $line) 
        {
            if(count($line)*100/16 != 100)
               $ct++;
        } 
            ?>
        <div data-ss-colspan="3"><a href="<?php echo Yii::app()->createUrl('index.php/evenement/sweCompteRempli')?>">Compte incomplet (<?php echo $ct?>)</a></div>
        <div></div>
        <div></div>
        <div></div>
   </div>
      
</div></div>

</div>

<ul class="appFooter">	
	<li class="sponsor"><img  src="http://reunion.startupweekend.org/files/2012/07/logoreunion2.png"/></li>
	<li class="sponsor"><img  src="http://reunion.startupweekend.org/files/2012/09/logo-technopole-transparent1.jpg"/></li>
	<li class="sponsor"><img  src="http://reunion.startupweekend.org/files/2012/09/Logo-banque-reunion1.png"/></li>
	<li class="sponsor"><img  src="http://reunion.startupweekend.org/files/2012/09/supinfo.jpg"/></li>
	<li class="sponsor"><img  src="http://reunion.startupweekend.org/files/2012/09/Lalternative_logo_ok1.jpg"/></li>
	<li class="sponsor"><img  src="http://reunion.startupweekend.org/files/2012/09/POLE_EMPLOI.jpg"/></li>
	<li class="sponsor"><img  src="http://reunion.startupweekend.org/files/2012/09/Logo-NRJ-New-Blanc.jpg"/></li>
</ul>

<canvas id="canvas"></canvas>


<!-- Modal -->
<div id="sweAddPerson" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"> Ajouter un nouveau participant</h3>
  </div>
  <div class="modal-body">
    <p> Un mail d'invitation sera envoyé a ce participant pour remplir sa fiche perso 
    </p>
	<form id="sweAddPersonForm" style="line-height:40px;">
        <section>
          	<table>
          	<tr>
              	<td class="txtright">Email</td>
              	<td> <input id="personEmail" name="personEmail" value=""/></td>
          	</tr>
          	<tr>
              	<td class="txtright">Nom </td>
              	<td> <input id="personName" name="personName" value=""/></td>
          	</tr>
          </table>
        </section>
        
    </form>
    
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Fermer</button>
    <button class="btn btn-primary" id="submitInvite" onclick="$('#sweAddPersonForm').submit();">Enregistrer</button>
  </div>
</div>
<!-- Modal -->

<script type="text/javascript">
initT['swePersonModalsInit'] = function(){
	$('input[type=file]').change(function (e) {
	    $('#customfileupload').html($(this).val());
	});
    $("#sweAddPersonForm").submit( function(event){
    	event.preventDefault();
    	$("#sweAddPerson").modal('hide');
    	NProgress.start();
    	$.ajax({
    	  type: "POST",
    	  url: baseUrl+"/index.php/evenement/swePerson",
    	  data: $("#sweAddPersonForm").serialize(),
    	  success: function(data){
    			  $("#flashInfo .modal-body").html(data.msg);
    			  $("#flashInfo").modal('show');
    			  NProgress.done();
    	  },
    	  dataType: "json"
    	});
    });
};
</script>

<!-- Modal -->
<div id="sweAddProject" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"> Ajouter un nouveau projet</h3>
  </div>
  <div class="modal-body">
    <p> Creer un nouveau projet ,vous connecterez ensuite son equipe.</p>
<form id="sweAddProjectForm" style="line-height:40px;">
        <section>
          	<table>
          	
              	<tr>
                  	<td class="txtright">Nom du Projet</td>
                  	<td> <input id="projectName" name="projectName" value=""/></td>
              	</tr>
              	
              	<tr>
                  	<td class="txtright">Email du porteur</td>
                  	<td> 
                  	<?php 
    					$participants = Yii::app()->mongodb->startupweekend->find(array("type"=>"participant"));
    					$particpantsOptions = array();
    					foreach($participants as $p){
    					    if(!isset($p["projet"]))
    					        $particpantsOptions[$p["email"]] = $p["name"];
    					}
    					    
    					$this->widget('yiiwheels.widgets.select2.WhSelect2', array(
    							'data' => $particpantsOptions, 
                                'name' => 'projectEmail',
                              	'id' => 'projectEmail',
                              	'pluginOptions' => array(
                                   'width' => '100%',
                                )
                              ));
    					?>
                  	</td>
              	</tr>
              	
              	<tr>
                  	<td class="txtright">Description</td>
                  	<td> <textarea id="projectDesc" name="projectDesc"></textarea></td>
              	</tr>
              	
              	<tr>
                  	<td class="txtright">Équipe</td>
                  	<td> 
    					<?php 
    					$particpantsOptions = array();
    					foreach($participants as $p){
    					    if(!isset($p["projet"]))
    					        array_push($particpantsOptions, $p["email"]);
    					}
    					    
    					$this->widget('yiiwheels.widgets.select2.WhSelect2', array(
    							'name' => 'projectTeam',
                              	'id' => 'projectTeam',
    							'asDropDownList' => false,
    							'value'=> "",
                                'pluginOptions' => array(
                                   'tags' => $particpantsOptions,
    								'placeholder' => "",
                                    'width' => '100%',
                                )
                              ));
    					?>
    				</td>
              	</tr>
              	
          </table>
        </section>
    </form>
    
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Fermer</button>
    <button class="btn btn-primary" id="submitInvite" onclick="$('#sweAddProjectForm').submit();">Enregistrer</button>
  </div>
</div>
<!-- Modal -->


<script type="text/javascript">
initT['sweProjectModalsInit'] = function(){
	$('input[type=file]').change(function (e) {
	    $('#customfileupload').html($(this).val());
	});
    $("#sweAddProjectForm").submit( function(event){
    	event.preventDefault();
    	$("#sweAddProject").modal('hide');
    	NProgress.start();
    	$.ajax({
    	  type: "POST",
    	  url: baseUrl+"/index.php/evenement/sweProject",
    	  data: $("#sweAddProjectForm").serialize(),
    	  success: function(data){
    			  $("#flashInfo .modal-body").html(data.msg);
    			  $("#flashInfo").modal('show');
    			  NProgress.done();
    	  },
    	  dataType: "json"
    	});
    });
};
</script>


<script type="text/javascript">

initT['sweGraphInit'] = function(){
	(function ani(){
	      TweenMax.staggerFromTo(".grid a",2, {scaleX:0.4, scaleY:0.4}, {scaleX:0.8, scaleY:0.8});
	})();

	$(".grid").shapeshift({
	    minColumns: 3
	  });
	//Code by: Kushagra Agarwal
	//http://cssdeck.com/item/602/html5-canvas-particles-web-matrix
	// RequestAnimFrame: a browser API for getting smooth animations
	window.requestAnimFrame = (function(){
	  return  window.requestAnimationFrame       || 
			  window.webkitRequestAnimationFrame || 
			  window.mozRequestAnimationFrame    || 
			  window.oRequestAnimationFrame      || 
			  window.msRequestAnimationFrame     ||  
			  function( callback ){
				window.setTimeout(callback, 1000 / 60);
			  };
	})();

	// Initializing the canvas
	// I am using native JS here, but you can use jQuery, 
	// Mootools or anything you want
	var canvas = document.getElementById("canvas");

	// Initialize the context of the canvas
	var ctx = canvas.getContext("2d");

	// Set the canvas width and height to occupy full window
	var W = window.innerWidth, H = window.innerHeight;
	canvas.width = W;
	canvas.height = H;

	// Some variables for later use
	var particleCount = 200,
		particles = [],
		minDist = 70,
		dist;

	// Function to paint the canvas black
	function paintCanvas() {
		// Set the fill color to black
		ctx.fillStyle = "rgba(51,153,225,1)";
		
		// This will create a rectangle of white color from the 
		// top left (0,0) to the bottom right corner (W,H)
		ctx.fillRect(0,0,W,H);
	}

	// Now the idea is to create some particles that will attract
	// each other when they come close. We will set a minimum
	// distance for it and also draw a line when they come
	// close to each other.

	// The attraction can be done by increasing their velocity as 
	// they reach closer to each other

	// Let's make a function that will act as a class for
	// our particles.

	function Particle() {
		// Position them randomly on the canvas
		// Math.random() generates a random value between 0
		// and 1 so we will need to multiply that with the
		// canvas width and height.
		this.x = Math.random() * W;
		this.y = Math.random() * H;
		
		
		// We would also need some velocity for the particles
		// so that they can move freely across the space
		this.vx = -1 + Math.random() * 2;
		this.vy = -1 + Math.random() * 2;

		// Now the radius of the particles. I want all of 
		// them to be equal in size so no Math.random() here..
		this.radius = 5;
		
		// This is the method that will draw the Particle on the
		// canvas. It is using the basic fillStyle, then we start
		// the path and after we use the `arc` function to 
		// draw our circle. The `arc` function accepts four
		// parameters in which first two depicts the position
		// of the center point of our arc as x and y coordinates.
		// The third value is for radius, then start angle, 
		// end angle and finally a boolean value which decides
		// whether the arc is to be drawn in counter clockwise or 
		// in a clockwise direction. False for clockwise.
		this.draw = function() {
			ctx.fillStyle = "#324553";
			ctx.beginPath();
			ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
			
			// Fill the color to the arc that we just created
			ctx.fill();
		}
	}

	// Time to push the particles into an array
	for(var i = 0; i < particleCount; i++) {
		particles.push(new Particle());
	}

	// Function to draw everything on the canvas that we'll use when 
	// animating the whole scene.
	function draw() {
		
		// Call the paintCanvas function here so that our canvas
		// will get re-painted in each next frame
		paintCanvas();
		
		// Call the function that will draw the balls using a loop
		for (var i = 0; i < particles.length; i++) {
			p = particles[i];
			p.draw();
		}
		
		//Finally call the update function
		update();
	}

	// Give every particle some life
	function update() {
		
		// In this function, we are first going to update every
		// particle's position according to their velocities
		for (var i = 0; i < particles.length; i++) {
			p = particles[i];
			
			// Change the velocities
			p.x += p.vx;
			p.y += p.vy
				
			// We don't want to make the particles leave the
			// area, so just change their position when they
			// touch the walls of the window
			if(p.x + p.radius > W) 
				p.x = p.radius;
			
			else if(p.x - p.radius < 0) {
				p.x = W - p.radius;
			}
			
			if(p.y + p.radius > H) 
				p.y = p.radius;
			
			else if(p.y - p.radius < 0) {
				p.y = H - p.radius;
			}
			
			// Now we need to make them attract each other
			// so first, we'll check the distance between
			// them and compare it to the minDist we have
			// already set
			
			// We will need another loop so that each
			// particle can be compared to every other particle
			// except itself
			for(var j = i + 1; j < particles.length; j++) {
				p2 = particles[j];
				distance(p, p2);
			}
		
		}
	}

	// Distance calculator between two particles
	function distance(p1, p2) {
		var dist,
			dx = p1.x - p2.x;
			dy = p1.y - p2.y;
		
		dist = Math.sqrt(dx*dx + dy*dy);
				
		// Draw the line when distance is smaller
		// then the minimum distance
		if(dist <= minDist) {
			
			// Draw the line
			ctx.beginPath();
			ctx.strokeStyle = "rgba(255,255,255,"+ (1.2-dist/minDist) +")";
			ctx.moveTo(p.x, p.y);
			ctx.lineTo(p2.x, p2.y);
			ctx.stroke();
			
			// Some acceleration for the partcles 
			// depending upon their distance
			var ax = dx/2000,
				ay = dy/2000;
			
			// Apply the acceleration on the particles
			p1.vx -= ax;
			p1.vy -= ay;
			
			p2.vx += ax;
			p2.vy += ay;
		}
	}

	// Start the main animation loop using requestAnimFrame
	function animloop() {
		draw();
		requestAnimFrame(animloop);
	}

	animloop();
};

</script>	

