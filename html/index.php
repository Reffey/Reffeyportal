<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>freelance scrum</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<script src="lib/jquery-1.12.3.min.js"></script>
		
<script src="lib/jquery-ui.min.js"></script>
		


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/jquery.ui.touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

<script></script>
<?php 
//if(!$_SESSION['user_name']){
	//   header('Location: tabs/login/login.php');
	//};

?>
</head>

<body>
<div class="container">
  <h2>Freelance Scrum Group</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#overview">Overview</a></li>
    <li><a data-toggle="tab" href="#project">Project</a></li>
    <li><a data-toggle="tab" href="#people">People</a></li>
    <li><a data-toggle="tab" href="#backlog">Backlog</a></li>
    <li><a data-toggle="tab" href="#releases">Releases</a></li>
    <li><a data-toggle="tab" href="#burnup">Burnup</a></li>
    <li><a data-toggle="tab" href="#sprints">Sprints</a></li>
    <li><a data-toggle="tab" href="#taskboard">Task Board</a></li>
    <li><a data-toggle="tab" href="#burndown">Burndown</a></li>
    <li><a data-toggle="tab" href="#kanban">Kanban</a></li>
    <li><a data-toggle="tab" href="#time">Time</a></li>
  </ul>

  <div class="tab-content">
    <div class="tab-pane fade active" id="overview">
              <p>Placeholder 1</p>
    </div>
  

    <div class="tab-pane fade" id="project">
              <p>Placeholder 1</p>
    </div>
    
    <div class="tab-pane fade" id="people">
              <p>Placeholder 1</p>
    </div>
    <div class="tab-pane fade" id="backlog">
              <p>Placeholder 1</p>
    </div>
    <div class="tab-pane fade" id="releases">
              <p>Placeholder 1</p>
    </div>
    <div class="tab-pane fade" id="burnup">
              <p>Placeholder 1</p>
    </div>
    <div class="tab-pane fade" id="sprints">
              <p>Placeholder 1</p>
    </div>
    <div class="tab-pane fade" id="taskboard">
              <p>Placeholder 1</p>
    </div>
    <div class="tab-pane fade" id="burndown">
              <p>Placeholder 1</p>
    </div>
    <div class="tab-pane fade" id="kanban">
              <p>Placeholder 1</p>
    </div>
    <div class="tab-pane fade" id="time">
              <p>Placeholder 1</p>
    </div>
    

  </div>
</div>
<script>
$('#overview').load('/tabs/overview/overview.php');
$('#project').load('/tabs/project/project.php');


$('#people').click().load('/tabs/people/people.php');

$('#backlog').load('/tabs/backlog/backlog.php');
$('#releases').load('/tabs/releases/releases.php');
$('#burnup').load('/tabs/burnup/burnup.php');
$('#sprints').load('/tabs/sprints/sprints.php');
$('#taskboard').load('/tabs/taskboard/taskboard.php');
$('#burndown').load('/tabs/burndown/burndown.php');
$('#kanban').load('/tabs/kanban/kanban.php');
$('#time').load('/tabs/time/time.php');
</script>
</body>
</html>