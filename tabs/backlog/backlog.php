<div id="backlog" class="tab-pane fade in active">
        <h3>Backlog</h3>
      <p>Hier komen de backlogs in</p> 
		
		<style>
  #backlogs { list-style-type: none; margin: 0; padding: 0; width: 100%; }
  #backlogs li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 80px; border:thin solid;}
  #backlogs li span { position: absolute; margin-left: -1.3em; }
  .blh01{ float:right; width:40%;}
  .blh02{ width:35%; float:right; display: inline-block; border:solid thin;}
  .blh03{ width:30%; float:left;display: inline-block; border:solid thin;}
  .blh04{width:30%; float:center; display: inline-block; border:solid thin;}
  .firstone{ background-color:#3CF;}
  .second{ background-color:#FFC;}
  </style>
  <script>
  $(function() {
    $( "#backlogs" ).sortable({
    start: function(event, ui) {
        ui.item.startPos = ui.item.index();
		
    },
    stop: function(event, ui) {
        console.log("Start position: " + ui.item.startPos);
        console.log("New position: " + ui.item.index());
		
		colors();
		
			
    }
});
    $( "#backlogs" ).disableSelection();
  

  
  });
function colors(){  
var listItems = $("#backlogs li");
listItems.each(function(idx, li) {
    var product = $(li);
	//console.log(product);
//console.log($( "#backlogs li" ).index( listItems ));

  var product2 = $( "#backlogs li" ).index( product );
  var idp = $(li).attr('id');
  console.log(product2+' '+idp);
    
	if(product2 == 0){
		//alert(idp);
			  $( "#"+idp  ).removeClass( 'second' );
				 $( "#"+idp ).addClass( 'firstone' );
				
				} else
	if(product2 != 0){
		$( "#"+idp  ).removeClass( 'firstone' );
	    $( "#"+idp ).addClass( 'second' );
			  //$("#backlogs li").css("background-color","#FFC").show(1500);
				
				} 
});
}
  </script>
  <ul id="backlogs">
  <script>
  for(i=0; i < 15; i++){
	   $('#backlogs').append('<li id="backlog_'+i+'" class="ui-state-default second"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>backlog '+i+'<div class="blh01 panel panel-info"><div class="blh03 label label-primary">40 hours</div><div class="blh04 label label-success">in progress</div><div class="blh02 progress"><div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%"> 70% progress</div>');
	  } 
  </script>
  
 
</ul>
     
 </div>