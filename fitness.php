<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link rel="icon" type="image/ico" href=""/>-->
    <title>Fitness Rank</title>

    <!-- Bootstrap Core CSS -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

    <!-- Custom Fonts -->
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    
    <!-- jQuery Version 1.11.1 -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/silviomoreto-bootstrap-select/js/bootstrap-select.js"></script>   
    
    <!-- Additional JavaScript -->
	<script src="https://raw.githubusercontent.com/1000hz/bootstrap-validator/master/js/validator.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style type="text/css">
	body{margin-top:20px; }
	.bs-callout{padding:20px;margin:20px 0;border:1px solid #eee;border-left-width:5px;border-radius:3px}
	.bs-callout h4{margin-top:0;margin-bottom:5px}
	.bs-callout p:last-child{margin-bottom:0}
	.bs-callout code{border-radius:3px}
	.bs-callout+
	.bs-callout{margin-top:-5px}
	.bs-callout-danger{border-left-color:#ce4844}
	.bs-callout-danger h4{color:#ce4844}
	.bs-callout-warning{border-left-color:#aa6708}
	.bs-callout-warning h4{color:#aa6708}
	.bs-callout-info{border-left-color:#1b809e}
	.bs-callout-info h4{color:#1b809e}

	body { margin-top:20px; }
	.panel-title {
	    display: inline;
		font-weight: bold; 
	}
	.legend {
	    display: inline;
	    font-weight: bold; 
	    margin-right:50px;
	}
	.checkbox .pull-right { margin: 5px; }
	.pl-ziro { padding-left: 0px; }
	
    .section-header {
    	padding-bottom: 9px;
		border-bottom: 1px solid #eee;
    }
    #collapseCalc {
    	padding-top:10px;
    }
    #errmsg1 {
    	padding-top:12px;
    	font-size: 12px;
    	color: #ce4844;
    }
    #errmsg2 {
    	padding-top:12px;
    	font-size: 12px;
    	color: #ce4844;
    }
</style>

	<!--[if IE]>
	<style type="text/css">
		/* Or here, hopefully */
	</style>
	<![endif]-->

</head>
<body>

<div class="container">
  <div class="bs-callout bs-callout-info" id="callout-alerts-no-default">
    <h4 class="section-header text-center">Fitness Ranking by the KU Alzheimers Disease Center </h4>
	<br />    
    <p>This App was created by the X Alzheimer's Disease Center. The algorithm for these rankings is based on that published by the American College of Sports Medicine Guidelines for Exercise Testing and Prescription, 9th Ed. and is currently being peer reviewed. Maximal exercise testing should be conducted on a treadmill, according to ACSM guidelines and safety recommendations. These are estimates only.</p>
<p>This App will ask you to input your age, VO2max from a maximal exercise test and your sex. You will receive a percentile rank comparing you to people the same age and sex as you.</p>
  </div><br /><br /><br />

<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-8">
<form action="" id="calcform">
	  <div class="form-group">
    	<label for="ageInput">What is your age?</label>
    	<input type="number" min="0" class="form-control" name="age" id="age" placeholder="00">
  	  </div>
  	<div class="form-group">
    	<label for="vomaxInput">What is your current VO<sub>2</sub> max score?</label>
    	<input type="number" min="0.00" max="120.00" class="form-control" name="vomax" id="vomax" placeholder="00.0">
  	</div>
  	<div class="radio">
		<label class="radio-inline">
	  	  <input type="radio" name="sex" value="0"> Male
            </label><br />
		<label class="radio-inline">
	  	  <input type="radio" name="sex" value="1"> Female
		</label>
  	</div>
  	<br />
	<button class="btn btn-primary" id="calculate" type="button">Calculate</button><br /><br />
</form>
	<p id="result"></p>
  </div> <!-- End .col-xs-12 .col-sm-6 .col-md-8 -->
</div> <!-- End .row -->
<br /><br /><br /><br /><br /><br />
</div> <!-- .container end -->



<script type="text/javascript">
//var calcForm = document.getElementById('calcform');
var calcForm = document.forms["calcform"];
var age = parseFloat(calcForm.elements['age']);
var vomax = parseFloat(calcForm.elements['vomax']);

var sex = ('input[name=sex]:checked').val();

    $(document).ready(function(){
        $("button[id='calculate']").click(function(){
        	var radioValue = $("input[name='sex']:checked").val();
            if(radioValue){
                alert("Your are a - " + radioValue);
            }
        });
        
    });

function calcFitnessScore() {
    alert(sex);
}
</script>

</body>
</html>
