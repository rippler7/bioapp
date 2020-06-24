<script type="text/javascript">
$('#head-parallax').remove();
if((($('#head-gallery-timer')).prop('tagName')) == null)
	{
		var s = document.createElement("script");
		s.type = "text/javascript";
		s.src = "js/jquery.timers-1.2.js";
		s.id = "head-gallery-timer";
		$("head").append(s);
	}
if((($('#head-gallery-easing')).prop('tagName')) == null)
	{
		var t = document.createElement("script");
		t.type = "text/javascript";
		t.src = "js/jquery.easing.1.3.js";
		t.id = "head-gallery-easing";
		$("head").append(t);
	}
if((($('#head-gallery')).prop('tagName')) == null)
	{
		var u = document.createElement("script");
		u.type = "text/javascript";
		u.src = "js/jquery.galleryview-3.0-dev.js";
		u.id = "head-gallery";
		$("head").append(u);
	}
if((($('#head-gallery-css')).prop('tagName')) == null)
	{
		var v = document.createElement("link");
		v.type = "text/css";
		v.rel = "stylesheet";
		v.href = "gallery-css/jquery.galleryview-3.0-dev.css";
		v.id = "head-gallery-css";
		$("head").append(v);
	}
</script>
<div id="masterDiv" style="width:100%;">
	<div class="floatleft" style="width:800px;display:block;position:relative;">
	<h2>Survey of the Plant Kingdom</h2>
		<div id="theGallery">
			
		</div>
	</div>
	<div class="floatleft" style="width:400px;">
		<ul id="theList" class="floatleft smallWords">
			<li><a href="#" id="first">All</a></li>
			<li><a href="#" class="chlorophyta">Division Chlorophyta</a></li>
			<li><a href="#" class="charophyta">Division Charophyta</a></li>
			<li><a href="#" class="phaeophyta">Division Phaeophyta</a></li>
			<li><a href="#" class="rhodophyta">Division Rhodophyta</a></li>
			<li>Division Bryophyta
				<ul>
					<li><a href="#" class="hepaticae">Class Hepaticae</a></li>
					<li><a href="#" class="anthocerotae">Class Anthocerotae</a></li>
					<li><a href="#" class="musci">Class Musci</a></li>
				</ul>
			</li>
			<li>Division Tracheophyta
				<ul>
					<li><a href="#" class="psilopsida">Subdivision Psilopsida</a></li>
					<li><a href="#" class="lycopsida">Subdivision Lycopsida</a></li>
					<li><a href="#" class="sphenopsida">Subdivision Sphenopsida</a></li>
					<li><a href="#" class="pteropsida">Subdivision Pteropsida</a></li>
					<li>Subdivision Spermopsida
						<ul>
							<li>Class Pteridospermae</li>
							<li><a href="#" class="cycadae">Class Cycadae</a></li>
							<li><a href="#" class="ginkgoae">Class Ginkgoae</a></li>
							<li><a href="#" class="coniferae">Class Coniferae</a></li>
							<li><a href="#" class="gneteae">Class Gneteae</a></li>
							<li>Class Angiospermae
								<ul>
									<li><a href="#" class="dicotyledoneae">Subclass Dicotyledoneae</a></li>
									<li><a href="#" class="monocotyledoneae">Subclass Monocotyledoneae</a></li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="clear"></div>
</div>
<script type="text/javascript">
	var btn = $('ul#theList li a');
	$(btn).on('click', function(e){
		e.preventDefault();
		var theName = $(this).attr('class');
			if(theName == 'chlorophyta'){
				$('#theGallery').html('<ul id="myGallery"><li class="chlorophyta"><img src="img/gallery/585px-Chlamydomonas_(10000x).jpg" alt="Chlamydomonas" data-description="Chlamydomonas" /></li><li class="chlorophyta"><img src="img/gallery/Mikrofoto.de-volvox-8.jpg" alt="Volvox" /></li><li class="chlorophyta"><img src="img/gallery/Ulotrix_sp.jpeg" alt="Ulotrix" /></li><li class="chlorophyta"><img src="img/gallery/800px-Spyrogyra-bgiu.jpg" alt="Spyrogyra" /></li><li class="chlorophyta"><img src="img/gallery/Oedogonium_gametangia.jpg" alt="Oedogonium gametangia" /></li><li class="chlorophyta"><img src="img/gallery/798px-Ulva_linza_Helgoland.jpg" alt="Ulva" data-description="Ulva linza (Holland)" /></li></ul>');
			} else if(theName == 'charophyta'){
				$('#theGallery').html('<ul id="myGallery"><li><img src="img/gallery/Chara_braunii_1.jpg" alt="Chara" data-description="Chara_braunii_1" /></li><li><img src="img/gallery/Nitella_gracilis.jpg" alt="Nitella" data-description="Nitella_gracilis" /></li></ul>');
			} else if(theName == 'phaeophyta'){
				$('#theGallery').html('<ul id="myGallery"><li><img src="img/gallery/Sargassum_seaweed_(3771240308).jpg" alt="Sargassum seaweed" data-description="Sargassum_seaweed_(3771240308)" /></li><li><img src="img/gallery/Ectocarpus_rivularis_Wolle.jpg" alt="Ectocarpus" /></li><li><img src="img/gallery/Fucus_conceptacle_XS3.jpg" alt="Fucus" /></li><li><img src="img/gallery/Laminaria_meiosporangia_on_blade_LS.jpg" alt="Laminaria" /></li></ul>');
			} else if(theName == 'rhodophyta'){
				$('#theGallery').html('<ul id="myGallery"><li><img src="img/gallery/Polysiphonia_spermatangia_WM.jpg" alt="Polysiphonia" /></li><li><img src="img/gallery/Chondrus_crispus_-_Köhler–s_Medizinal-Pflanzen-034.jpg" alt="Chondrus" /></li><li><img src="img/gallery/Batrachospermum_moniliforme.jpg" alt="Batrachospermum_moniliforme" /></li></ul>');
			} else if(theName == 'hepaticae'){
				$('#theGallery').html('<ul id="myGallery"><li><img src="img/gallery/Marchantia.jpg" alt="Marchantia" /></li><li><img src="img/gallery/Conocephalum_conicum_jagoke06.jpg" alt="Conocephalum_conicum" /></li><li><img src="img/gallery/Riccia_fluitans_030911.jpg" alt="Riccia_fluitans" /></li><li><img src="img/gallery/Porella_gametophyte_with_archegoniophores_preserved.jpg" alt="Porella_gametophyte_with_archegoniophores_preserved" /></li></ul>');
			} else if(theName == 'anthocerotae'){
				$('#theGallery').html('<ul id="myGallery"><li><img src="img/gallery/683px-Phaeoceros_laevis.jpg" alt="683px-Phaeoceros_laevis" /></li></ul>');
			} else if(theName == 'musci'){
				$('#theGallery').html('<ul id="myGallery"><li><img src="img/gallery/799px-LeafMoss0225-polytrichum.jpg" alt="Leaf Moss-polytrichum" /></li><li><img src="img/gallery/Mnium_affine_—_Flora_Batava_—_Volume_v19.jpg" alt="Mnium_affine_—_Flora_Batava_—_Volume_v19" /></li></ul>');
			} else if(theName == 'psilopsida'){
				$('#theGallery').html('<ul id="myGallery"><li><img src="img/gallery/Psilotum_nudum_edit.jpg" alt="Psilotum_nudum" /></li><li><img src="img/gallery/Tmesipteris_truncata_Turramurra.jpg" alt="Tmesipteris_truncata_Turramurra" /></li></ul>');
			} else if(theName == 'lycopsida'){
				$('#theGallery').html('<ul id="myGallery"><li><img src="img/gallery/Lycopodium_annotinum_04.jpg" alt="Lycopodium_annotinum" /></li><li><img src="img/gallery/Selaginella_flabellata.jpg" alt="Selaginella_flabellata" /></li><li><img src="img/gallery/Isoetes_pseudojaponica.jpg" alt="Isoetes_pseudojaponica" /></li></ul>');
			} else if(theName == 'sphenopsida'){
				$('#theGallery').html('<ul id="myGallery"><li><img src="img/gallery/Equisetum_arvense_nf.jpg" alt="Equisetum_arvense" /></li></ul>');
			} else if(theName == 'pteropsida'){
				$('#theGallery').html('<ul id="myGallery"><li><img src="img/gallery/Polypodiumcalifornicum1.jpg" alt="Polypodium californicum" /></li><li><img src="img/gallery/Dryopteris_aemula_001.jpg" alt="Dryopteris_aemula" /></li><li><img src="img/gallery/Botrychium_pedunculosum.jpeg" alt="Botrychium_pedunculosum" /></li><li><img src="img/gallery/Adelaarsvaren_plant_Pteridium_aquilinum.jpg" alt="Pteridium_aquilinum" /></li></ul>');
			} else if(theName == 'cycadae'){
				$('#theGallery').html('<ul id="myGallery"><li><img src="img/gallery/Zamia_fairchildiana_-_Botanischer_Garten_München-Nymphenburg_-_DSC08066.jpg" alt="Zamia_fairchildiana" /></li></ul>');
			} else if(theName == 'ginkgoae'){
				$('#theGallery').html('<ul id="myGallery"><li><img src="img/gallery/450px-Gingko_biloba2.jpg" alt="Gingko Biloba" /></li></ul>');
			} else if(theName == 'coniferae'){
				$('#theGallery').html('<ul id="myGallery"><li><img src="img/gallery/Pinus_coulteri_Strawberry_Peak.jpg" alt="Pinus_coulteri_Strawberry_Peak" /></li><li><img src="img/gallery/Moores_Knob_Tsuga_caroliniana.jpg" alt="Moores_Knob_Tsuga_caroliniana" /></li><li><img src="img/gallery/Sequoia_sempervirens_Big_Basin_Redwoods_State_Park_2.jpg" alt="Sequoia_sempervirens_Big_Basin_Redwoods_State_Park" /></li><ul>');
			} else if(theName == 'gneteae'){
				$('#theGallery').html('<ul id="myGallery"><li><img src="img/gallery/Gnetum_luofuense_-_Hong_Kong_Botanical_Garden_-_IMG_9617.jpg" alt="Gnetum_luofuense_-_Hong_Kong_Botanical_Garden" /></li><li><img src="img/gallery/Ephedra-aspera-20080322.jpg" alt="Ephedra-aspera" /></li><li><img src="img/gallery/800px-Welwitschia_mirabilis(2).jpg" alt="800px-Welwitschia mirabilis" /></li><ul>');
			} else if(theName == 'dicotyledoneae'){
				$('#theGallery').html('<ul id="myGallery"><li><img src="img/gallery/Magnolia_wieseneri.jpg" alt="Magnolia_wieseneri" /></li><li><img src="img/gallery/Quercus_pacifica_3.jpg" alt="Quercus_pacifica" /></li><li><img src="img/gallery/Acer_palmatum_\'Oshio_beni\'_-_JPG5.jpg" alt="Acer_palmatum_\'Oshio_beni\'" /></li><li><img src="img/gallery/450px-Peultjes_peultjes_Pisum_sativum_mange-tout.jpg" alt="450px-Peultjes_peultjes_Pisum_sativum_mange-tout" /></li><li><img src="img/gallery/585px-Gewöhnlicher_Löwenzahn_Taraxacum_officinale_agg._big.jpg" alt="585px-Gewöhnlicher_Löwenzahn_Taraxacum" /></li><li><img src="img/gallery/Bella_Rosa_(Kordes_1981).jpg" alt="Bella_Rosa_(Kordes_1981)" /></li><li><img src="img/gallery/800px-Chrysanthemums.jpg" alt="800px-Chrysanthemums" /></li><li><img src="img/gallery/Aster_amellus_3.jpg" alt="Aster_amellus" /></li><li><img src="img/gallery/800px-Primula_clusiana01.jpg" alt="800px-Primula_clusiana" /></li><li><img src="img/gallery/Ligustrum_lucidum_EnfoqueFrutos_2010-11-05_ParqueGassetCiudadReal.jpg" alt="Ligustrum_lucidum" /></li><li><img src="img/gallery/Ranunculus_platanifolius_(Platanen-Hahnenfuß)_IMG_0744.jpg" alt="" /></li><li><img src="img/gallery/LiliumSuperbum1.jpg" alt="Lilium Superbum" /></li><ul>');
			} else if(theName == 'monocotyledoneae'){
				$('#theGallery').html('<ul id="myGallery"><li><img src="img/gallery/LiliumSuperbum1.jpg" alt="Lilium Superbum" /></li><li><img src="img/gallery/Tulipa_saxatilis1LEST.jpg" alt="Tulipa_saxatilis" /></li><li><img src="img/gallery/Poa-nemoralis.jpg" alt="Poa-nemoralis"></li><li><img src="img/gallery/Corn_(Zea_mays)_-_Aug._2007.jpg" alt="Corn_(Zea_mays)"></li><li><img src="img/gallery/450px-Ophrys_crassicornis_Griechenland_113.jpg" alt="450px-Ophrys_crassicornis"></li><li><img src="img/gallery/Yucca_decipiens.jpg" alt="Yucca_decipiens"></li><li><img src="img/gallery/800px-Sabal-bermudana.jpg" alt="800px-Sabal-bermudana"></li></ul>');
			} else {
				$('#theGallery').html('<ul id="myGallery" class="floatleft"><li class="chlorophyta"><img src="img/gallery/585px-Chlamydomonas_(10000x).jpg" alt="Chlamydomonas" data-description="Chlamydomonas" /></li><li class="chlorophyta"><img src="img/gallery/Mikrofoto.de-volvox-8.jpg" alt="Volvox" /></li><li class="chlorophyta"><img src="img/gallery/Ulotrix_sp.jpeg" alt="Ulotrix" /></li><li class="chlorophyta"><img src="img/gallery/800px-Spyrogyra-bgiu.jpg" alt="Spyrogyra" /></li><li class="chlorophyta"><img src="img/gallery/Oedogonium_gametangia.jpg" alt="Oedogonium gametangia" /></li><li class="chlorophyta"><img src="img/gallery/798px-Ulva_linza_Helgoland.jpg" alt="Ulva" data-description="Ulva linza (Holland)" /></li><li><img src="img/gallery/Chara_braunii_1.jpg" alt="Chara" data-description="Chara_braunii_1" /></li><li><img src="img/gallery/Nitella_gracilis.jpg" alt="Nitella" data-description="Nitella_gracilis" /></li><li><img src="img/gallery/Sargassum_seaweed_(3771240308).jpg" alt="Sargassum seaweed" data-description="Sargassum_seaweed_(3771240308)" /></li><li><img src="img/gallery/Ectocarpus_rivularis_Wolle.jpg" alt="Ectocarpus" /></li><li><img src="img/gallery/Fucus_conceptacle_XS3.jpg" alt="Fucus" /></li><li><img src="img/gallery/Laminaria_meiosporangia_on_blade_LS.jpg" alt="Laminaria" /></li><li><img src="img/gallery/Polysiphonia_spermatangia_WM.jpg" alt="Polysiphonia" /></li><li><img src="img/gallery/Chondrus_crispus_-_Köhler–s_Medizinal-Pflanzen-034.jpg" alt="Chondrus" /></li><li><img src="img/gallery/Batrachospermum_moniliforme.jpg" alt="Batrachospermum_moniliforme" /></li><li><img src="img/gallery/Marchantia.jpg" alt="Marchantia" /></li><li><img src="img/gallery/Conocephalum_conicum_jagoke06.jpg" alt="Conocephalum_conicum" /></li><li><img src="img/gallery/Riccia_fluitans_030911.jpg" alt="Riccia_fluitans" /></li><li><img src="img/gallery/Porella_gametophyte_with_archegoniophores_preserved.jpg" alt="Porella_gametophyte_with_archegoniophores_preserved" /></li><li><img src="img/gallery/683px-Phaeoceros_laevis.jpg" alt="683px-Phaeoceros_laevis" /></li><li><img src="img/gallery/799px-LeafMoss0225-polytrichum.jpg" alt="Leaf Moss-polytrichum" /></li><li><img src="img/gallery/Mnium_affine_—_Flora_Batava_—_Volume_v19.jpg" alt="Mnium_affine_—_Flora_Batava_—_Volume_v19" /></li><li><img src="img/gallery/Psilotum_nudum_edit.jpg" alt="Psilotum_nudum" /></li><li><img src="img/gallery/Tmesipteris_truncata_Turramurra.jpg" alt="Tmesipteris_truncata_Turramurra" /></li><li><img src="img/gallery/Lycopodium_annotinum_04.jpg" alt="Lycopodium_annotinum" /></li><li><img src="img/gallery/Selaginella_flabellata.jpg" alt="Selaginella_flabellata" /></li><li><img src="img/gallery/Isoetes_pseudojaponica.jpg" alt="Isoetes_pseudojaponica" /></li><li><img src="img/gallery/Equisetum_arvense_nf.jpg" alt="Equisetum_arvense" /></li><li><img src="img/gallery/Polypodiumcalifornicum1.jpg" alt="Polypodium californicum" /></li><li><img src="img/gallery/Dryopteris_aemula_001.jpg" alt="Dryopteris_aemula" /></li><li><img src="img/gallery/Botrychium_pedunculosum.jpeg" alt="Botrychium_pedunculosum" /></li><li><img src="img/gallery/Adelaarsvaren_plant_Pteridium_aquilinum.jpg" alt="Pteridium_aquilinum" /></li><li><img src="img/gallery/Zamia_fairchildiana_-_Botanischer_Garten_München-Nymphenburg_-_DSC08066.jpg" alt="Zamia_fairchildiana" /></li><li><img src="img/gallery/450px-Gingko_biloba2.jpg" alt="Gingko Biloba" /></li><li><img src="img/gallery/Pinus_coulteri_Strawberry_Peak.jpg" alt="Pinus_coulteri_Strawberry_Peak" /></li><li><img src="img/gallery/Moores_Knob_Tsuga_caroliniana.jpg" alt="Moores_Knob_Tsuga_caroliniana" /></li><li><img src="img/gallery/Sequoia_sempervirens_Big_Basin_Redwoods_State_Park_2.jpg" alt="Sequoia_sempervirens_Big_Basin_Redwoods_State_Park" /></li><li><img src="img/gallery/Gnetum_luofuense_-_Hong_Kong_Botanical_Garden_-_IMG_9617.jpg" alt="Gnetum_luofuense_-_Hong_Kong_Botanical_Garden" /></li><li><img src="img/gallery/Ephedra-aspera-20080322.jpg" alt="Ephedra-aspera" /></li><li><img src="img/gallery/800px-Welwitschia_mirabilis(2).jpg" alt="800px-Welwitschia mirabilis" /></li><li><img src="img/gallery/Magnolia_wieseneri.jpg" alt="Magnolia_wieseneri" /></li><li><img src="img/gallery/Quercus_pacifica_3.jpg" alt="Quercus_pacifica" /></li><li><img src="img/gallery/Acer_palmatum_\'Oshio_beni\'_-_JPG5.jpg" alt="Acer_palmatum_\'Oshio_beni\'" /></li><li><img src="img/gallery/450px-Peultjes_peultjes_Pisum_sativum_mange-tout.jpg" alt="450px-Peultjes_peultjes_Pisum_sativum_mange-tout" /></li><li><img src="img/gallery/585px-Gewöhnlicher_Löwenzahn_Taraxacum_officinale_agg._big.jpg" alt="585px-Gewöhnlicher_Löwenzahn_Taraxacum" /></li><li><img src="img/gallery/Bella_Rosa_(Kordes_1981).jpg" alt="Bella_Rosa_(Kordes_1981)" /></li><li><img src="img/gallery/800px-Chrysanthemums.jpg" alt="800px-Chrysanthemums" /></li><li><img src="img/gallery/Aster_amellus_3.jpg" alt="Aster_amellus" /></li><li><img src="img/gallery/800px-Primula_clusiana01.jpg" alt="800px-Primula_clusiana" /></li><li><img src="img/gallery/Ligustrum_lucidum_EnfoqueFrutos_2010-11-05_ParqueGassetCiudadReal.jpg" alt="Ligustrum_lucidum" /></li><li><img src="img/gallery/Ranunculus_platanifolius_(Platanen-Hahnenfuß)_IMG_0744.jpg" alt="" /></li><li><img src="img/gallery/LiliumSuperbum1.jpg" alt="Lilium Superbum" /></li><li><img src="img/gallery/Tulipa_saxatilis1LEST.jpg" alt="Tulipa_saxatilis" /></li><li><img src="img/gallery/Poa-nemoralis.jpg" alt="Poa-nemoralis"></li><li><img src="img/gallery/Corn_(Zea_mays)_-_Aug._2007.jpg" alt="Corn_(Zea_mays)"></li><li><img src="img/gallery/450px-Ophrys_crassicornis_Griechenland_113.jpg" alt="450px-Ophrys_crassicornis"></li><li><img src="img/gallery/Yucca_decipiens.jpg" alt="Yucca_decipiens"></li><li><img src="img/gallery/800px-Sabal-bermudana.jpg" alt="800px-Sabal-bermudana"></li></ul>');
			}
			$('#myGallery').galleryView({
				show_captions:true,
				enable_slideshow:true,
				enable_overlays:true
			});
	});
$('a#first').trigger('click');
</script>