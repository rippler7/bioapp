<script type="text/javascript">
	var accordionHead = $('ul.accordion li a'),
		accordionBody = $('ul.accordion li > .sub-menu');
	var navi = new Array();
		$(accordionHead).each(function(){
			var theId = $(this).attr('id');
			navi.push(theId);
	});
	$(document).ready(function(){
		$(accordionBody).slideUp('normal');
		$('#'+navi[0]).trigger('click');
	});
		function getIndex(item){
			for(var i=0;i<navi.length;i++){
				if(item == navi[i]){
					return i;
				}
			}
		}
		function nextItem(num) { 
		  if(num < navi.length){return navi[num+1];} 
		}
		function prevItem(num) { 
		  if(num > 0){return navi[num-1];}
		}
	$(document).keydown(function(e){
		var inQ = $('ul.accordion li a.active').attr('id');
		if (inQ == null){
			inQ == navi[0];
		}
		var older = inQ,
			newer,prevs,currs;
		var theInd = getIndex(older);
		switch(e.keyCode){
			case 37:
			newer = prevItem(theInd);
			prevs = $('#'+navi[theInd]).parent().parent().parent().prop('tagName');
			currs = $('#'+newer).parent().parent().parent().prop('tagName');
			if((prevs == 'DIV') && (currs == 'LI')){
				var triggerFirst = $('#'+newer).parent().parent().parent().children('a');
				$(triggerFirst).trigger('click');
			}
			$('#'+newer).trigger('click');
			break;
			case 39:
			newer = nextItem(theInd);
			$('#'+newer).trigger('click');
			break;
		}
	});
	$(accordionHead).on('click', function(event){
		event.preventDefault();
		$(accordionHead).removeAttr('class');
		$(accordionBody).children().removeAttr('class');
		$(this).addClass('active');
		if($(this).parent().parent().parent().prop('tagName') != 'LI'){
			$(accordionHead).parent().removeAttr('class','active');
			$(accordionBody).slideUp('normal');
		}
		$(this).parent().addClass('active');
		if($(this).attr('class') == 'active'){
			if($(this).next().prop('tagName') == 'UL'){
				$(this).next().slideDown('normal');
			} 
		}
		var theLink = $(this).attr('href');
		var theListId = $(this).attr('id');
		var theTitle = $('#'+theListId+' > div').next().text();
		$(this).ajaxify({
			thLink:theLink,
			idli:theListId,
			thTitle:theTitle,
			thPlace:'#bodyContent'
		});
	});
</script>