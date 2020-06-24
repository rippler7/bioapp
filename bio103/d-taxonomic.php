<h2>c. Subdivisions of Plant Biology and Related Disciplines</h2>
<div class="centered floatright" style="text-align:center;width:840px;margin-left:30px;">
<div id="app360" style="">
	<div id="menu">
        <ul id="taxo">
            <li class="floatleft"><a id="base" class="rplacer" href="#">Rotate</a></li>
            <li class="floatleft"><a id="bryo" class="rplacer" href="#">Bryology</a></li>
            <li class="floatleft"><a id="pterido" class="rplacer" href="#">Pteridology</a></li>
            <li class="floatleft"><a id="phyco" class="rplacer" href="#">Phycology</a></li>
            <div class="clear"></div>
        </ul>
    </div>
    <div id="nav" class="floatleft">
    	<ul id="theList">
    		<li style="color:#FFF;">TAXONOMIC</li>
        	<li><a id="morph" class="rplacer" href="#">Morphology</a></li>
        	<li><a id="physio" class="rplacer" href="#">Physiology</a></li>
        	<li><a id="gene" class="rplacer" href="#">Genetics</a></li>
        	<li><a id="system" class="rplacer" href="#">Systematics</a></li>
        	<li><a id="eco" class="rplacer" href="#">Ecology</a></li>
        	<br />
        	<div class="smallWords centered" style="color:#FFF;padding:10px;width:150px;text-align:justify;margin:0px auto;">Click on any of the menu tabs and drag your mouse on the image to manipulate the graph.</div>
        </ul>
    </div>
    <div id="mainbox" class="viewbox floatleft">
    	<div id="viewer" class="viewbox centered">
    		<img id="image" src="bio103/biograph/img/seq/bio-pie-cake_0001.png" width="640" height="480" border="0" alt="" />
    	</div>
    </div> 
</div>
	 <div class="clear"></div> 
   		<span class="captions" style="text-align:center;">Figure A-1. An interactive graphical representation of Plant Biology Fields and its relations</span> 
    </div>
	<div class="smallWords">
	<h2>i. Taxonomic</h2>
	<p>
		Taxonomic subdivision refers to the sciences that deal with particular group of plants, examples are:
	</p>
	<ol type="I">Botany - the study of plants
		<li><span class="boldened">Bryology</span>- the study of mosses, hepatics and liverworts</li>
		<ol type="a">
			<li>moscology- mosses</li>
			<li>hepaticology-hepatics</li>
		</ol>
		<li><span class="boldened">Pteridology</span>- the study of ferns and its allies</li>
		<li><span class="boldened">Phycology</span>-the study of algae</li>
	</ol>
	<h2>ii. Basic</h2>
<p class="smallWords">	Basic subdivision refers to the sciences that deal with the fundamentals common to all plants, examples are: <span class="boldened">Plant</span></p>
<ol type="i">
	<li><span class="boldened">Morphology</span>- form, structure and development</li>
	<ol type="a">
		<li>Gross morphology- external structure</li>
		<li>Histology- tissues</li>
		<li>Cytology- cell structure and behaviour (now called cell biology which may also include molecular biology)</li>
		<li>Embryology- progressive changes in the form and structure (from fertilization to birth- now called developmental biology)</li>
	</ol>
	<li><span class="boldened">Physiology</span>-functions and activities of plants and their parts including all physical and chemical processes.</li>
	<li><span class="boldened">Genetics</span>- heredity and variation, dealing with resemblances and differences of related plants resulting from the interaction of their genes and the environment.</li>
	<li><span class="boldened">Systematics</span>- kinds, diversity and similarities of plants, and their evolutionary relationships (Taxonomy- theory and practice of naming, describing and classifying plants)</li>
	<li><span class="boldened">Ecology</span>- interaction of plants with one another and their environment affecting their distribution and abundance</li>
	</ol>
	</div>
<div class="clear"></div>
<script type="text/javascript">
	$('#head-gallery').remove();
	$('#head-gallery-css').remove();
	$('#head-gallery-timer').remove();
	$('#head-gallery-easing').remove();
	$('#head-parallax').remove();
	if((($('#head-reel')).prop('tagName')) == null)
	{
		var r = document.createElement("script");
		r.type = "text/javascript";
		r.src = "js/jquery.reel.js";
		r.id = "head-reel";
		$("head").append(r);
	}
	$('.rplacer').rPlaceSlide({  
                    theMenu:'.rplacer',
                    theImages:({
                         'base':'bio103/biograph/img/seq/bio-pie-cake_####.png|0001..0024',
                         'bryo':'bio103/biograph/img/seq/bio-pie-cake_####.png|0025..0048',
                         'pterido':'bio103/biograph/img/seq/bio-pie-cake_####.png|0049..0072',
                         'phyco':'bio103/biograph/img/seq/bio-pie-cake_####.png|0073..0096',
                         'morph':'bio103/biograph/img/seq/bio-pie-cake_####.png|0097..0120',
                         'physio':'bio103/biograph/img/seq/bio-pie-cake_####.png|0121..0144',
                         'gene':'bio103/biograph/img/seq/bio-pie-cake_####.png|0145..0168',
                         'system':'bio103/biograph/img/seq/bio-pie-cake_####.png|0169..0192',
                         'eco':'bio103/biograph/img/seq/bio-pie-cake_####.png|0192..0216'
                    }),
                    divVwr:'#viewer',
                    chRcvr:'#image'
                });
</script>
