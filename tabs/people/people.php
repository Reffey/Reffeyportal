  <script> 
	for(o=0; o < 5; o++){
		$('#groups').append('<ul id="group_'+o+'" class="status droppable panel panel-info"><p>Team '+o+'</p></ul>');
		}
	for(i=0; i < 115; i++){
	 b = i;
	 $('#peoplebox').append('<li id="user_'+i+'" class="draggable ui-widget-content ui-corner-tr"><p>people '+i+'</p></li>'); }
     
     </script> 
  <style>
  .draggable { width: 100%;  border:solid thin; z-index:3; }
  .droppable {  height: 150px; padding: 0.5em; }
  .peoplebox{height: 450px; border:solid thin #F33;}
  .peopleItem{}
  .h-scroll {
    height: 450px; /*height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; %-height of the viewport */
   
    overflow-y: scroll;
}
.group-scroll {
    height: 350px; /*height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; %-height of the viewport */
   
    overflow-y: scroll;
	overflow-x: hidden;
}
ul
{
    list-style-type: none;
}
  </style>
  <script>
     
  
 $(function() {
	  //draggable element komt van uit de database.
   
    $( "li", "#peoplebox").draggable({
      cancel: "a.ui-icon", // clicking an icon won't initiate dragging
      revert: "invalid", // when not dropped, the item will revert back to its initial position
      containment: "document",
      helper: "clone",
      cursor: "move"
		});
	
	function make(){
	$( ".draggable").draggable({
      cancel: "a.ui-icon", // clicking an icon won't initiate dragging
      revert: "invalid", // when not dropped, the item will revert back to its initial position
      containment: "document",
      helper: "clone",
	  scroll: false,
      cursor: "move"
		});
	}
	
    $(".droppable").droppable({
    greedy: true,
    tolerance: "pointer",
    over: function(event, ui) {
        console.log($(this).attr('id'));
		//$(".status").text(
           // "Hovering over: ".concat($(this).text())
        //);
    },
	 
	 drop: function( event, ui ) {
		  var draggableId = ui.draggable.attr("id");
	      var droppableId = $(this).attr("id");
		  console.log(ui.draggable);
		 $('#'+droppableId).append('<li id="'+draggableId+'" class="draggable ui-widget-content ui-corner-tr"><p>people '+draggableId+'</p></li>'); 
		$(ui.draggable).remove();
		make();
		 }
});

    });


 
  </script>
<div id="people" class="tab-pane fade in active">
  <div class="jumbotron">
  <div class="container text-center">
    <h1>My Portfolio</h1>      
    <p>Some text that represents "Me"...</p>
  </div>
</div>
<div class="container-fluid text-center">    
  <div class="row content">
    
    <div class="col-sm-8 text-left"> 
      <div class="row col-sm-12">
      	 <div class=" col-sm-6 "><ul id="one" class="status droppable panel panel-info"><p></p></ul></div>
         <div class=" col-sm-6 "><ul id="two" class="status droppable panel panel-info"><p></p></ul></div>
      </div>
      <div class="row col-sm-12">
      <div id="groups" class="group-scroll col-sm-12 "></div>
      </div>
     </div>
    
    <div class="col-sm-4 well sidenav panel panel-info" >
      <div><span class="label label-info">Zoeken</span></div>
      <div class=""> <ul id="peoplebox" class="h-scroll peoplebox droppable" ></ul></div>	
     
      
    </div>
  </div>
</div>

  
 </div> 
    

