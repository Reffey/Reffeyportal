for(s=1; s < 4; s++){
		$('#teamsprint').append('<ul  class="panel panel-info">'
		+'<div class="panel-heading"><h4>Sprint '+s+'</h4></div>'
		+'<div class="panel-body">'
		+'<ul id="sprint_'+s+'" class="list-inline"></ul>'
		+'</div>'
		+'</ul>');
		



for(i=0; i < 6; i++){
		$('#sprint_'+s).append('<li id="team_'+i+'" class="panel panel-info">'
		+'<div class="panel-heading">'
		+'<td>Team '+i+'</td>'
		+'<td >Team '+i+'</td>'
		+'<td><p class="badge">Team '+i+'</p></td>'
		+'</div>'
		+'<ul id="teamsprint_'+i+'" class="droppable_bl0 backlog-drop panel-body">'
		+'</ul>'
		+'</li>');
		 }
		}
//backlog items
for(i=0; i < 10; i++){
	$('#draggables').append('<li id="backlog_'+i+'" class="listbacklog">test'+i+'</li>');
	}



var $draggingParent = null;

$(function() {
    
    //for(i=1; i<9; i++ ){$('#draggables').append('<li>foo '+i+'</li>')}
    
    initDraggable($('#draggables > li'),{
		scroll: false,
		cursor: "move",
		      start: function() {
        counts[ 0 ]++;
        updateCounterStatus( $start_counter, counts[ 0 ] );
      },
      drag: function() {
        counts[ 1 ]++;
        updateCounterStatus( $drag_counter, counts[ 1 ] );
      },
      stop: function() {
        counts[ 2 ]++;
        updateCounterStatus( $stop_counter, counts[ 2 ] );
      }
		});
       
        
    $("#draggables").droppable({    
    drop: function(ev, ui) {
        if($draggingParent[0] === $(ui.helper).parent()[0])
        {
            //dragged from draggables to draggables
            $(ui.draggable).removeClass('dragging');
        }
        else
        {            
            if(ui.draggable.parent())
            var $clone = $(ui.draggable).clone();
            $(ui.draggable).remove();
            $clone.removeClass();
            $clone.removeAttr('style');
            initDraggable($clone);
            $(this).append($clone);        
        }
    }
});
    
    initDroppableSort($('.droppable_bl0'));
    
});

function initDraggable($element)
{
    $($element).draggable({
        connectToSortable: '.droppable_bl0',
		cursor: "move",     
        revert: function(droppableObj)
        {
            if(droppableObj === false)
             {                
                $(this).removeClass('dragging');
				console.log('weet niet');
                return true;
             }
             else
             {              
                return false;
				
             }
        },
        helper: 'clone',
		cursor: "move",
        start: function(e, ui)
        {           
            $draggingParent = $(this).parent();
			//$($(this).parent()).addClass('dragging');
           $(this).addClass('dragging');
		   console.log('dragging');
        }
    });
}

function initDroppableSort($element) {
    
    $element.sortable({
       items: 'li',
        connectWith: ".droppable_bl0,#draggables",
        revert: true,
		cursor: "move",
		//scroll:false,
       start: function(event, ui)
        {           
            $draggingParent = $(this).parent();
			//$($(this).parent()).addClass('dragging');
           $(ui.item).css("background-color", "yellow").width(150); 
		   $(ui.item).width(150);
		   cleanUp();
		   
		   //$(ui.item).removeClass('droppable_bl0');
		   //console.log($(ui.item).attr('id'));
        },
	   stop: function(event, ui) {
           $(ui.item).removeClass('dragging');
            $('.dragging').remove();
               $(ui.item).width(150);      
          
        }
    });
    
}

function cleanUp() {
    
    $('.droppable').not('.new').each(function() {
		if($(this).find('li').length === 0) {
			$(this).remove();
		}
	});
    
}