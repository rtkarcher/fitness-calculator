<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fitness Rank</title>

    <!-- Bootstrap Core CSS -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="fitness.css">

    <!-- Custom Fonts -->
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    
    <!-- jQuery Version 1.11.1 -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script type="text/javascript" src="fitness.js"></script>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="container">
  <div class="bs-callout bs-callout-info" id="callout-alerts-no-default">
    <h4 class="section-header text-center">Fitness Ranking by the KU Alzheimers Disease Center </h4>
	<br /><br />
    <p>A person's maximum rate of oxygen consumption during aerobic exercise, their <strong>VO<sub>2</sub> max</strong>, is the gold standard of measurement in aerobic fitness scoring. It is often normalized to a person's body weight to allow for comparison between different people. However, other factors aside from body weight, such as age, can also influence an individual's VO<sub>2</sub> max score. This calculator converts a VO2 max score to a percentile rank, so people of different ages can be compared.</p><br />
	<p>The form fields below will ask you to enter your age, your VO<sub>2</sub> max score from a recent maximal exercise test, and your sex. From this information, the fitness calculator will generate a percentile rank representing your overall fitness, comparing your VO<sub>2</sub> max to those of others in your peer group.</p><br />
    <p>Essentially, a VO<sub>2</sub> max score represents the maximum volume (V) of oxygen (O<sub>2</sub>) that a person can consume within one minute while performing intense aerobic exercise and breathing air at normal barometric pressure. This is measured in milliters (ml) of oxygen consumed per kilogram (kg) of body weight per minute (min):</p>
	<p class="text-center"><strong>ml <i class="fa fa-times"></i> kg<sup>1</sup> <i class="fa fa-times"></i> min<sup>1</sup></strong></p>
	<p>Additional information on the metabolic equations used to calculate VO<sub>2</sub> max scores can be found via the <a href="http://certification.acsm.org/metabolic-calcs" target="_blank">ACSM website</a>.</p><br /><br />
    <p>This application was created as an effort of the <a href="http://www.kualzheimers.org/" target="_blank">Alzheimer's Disease Center</a>. The algorithm used for these rankings is based on that published by the <a href="http://www.ncbi.nlm.nih.gov/pmc/articles/PMC4139760/" target="_blank">American College of Sports Medicine Guidelines for Exercise Testing and Prescription, 9th Ed.</a> and is currently being peer reviewed. Maximal exercise testing should be conducted on a treadmill, according to <a href="http://www.acsm.org/" target="_blank">ACSM</a> guidelines and safety recommendations. </p><br />
    <div class="alert alert-success" role="alert"><p>Please note that these figures are estimates only. Your information will not be stored by this application, as the fitness calculator exists for demonstrative purposes only.</div>
  </div> <!-- End #callout-alerts-no-default .bs-callout .bs-callout-info -->
  <br /><br /><br />

  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-8">
	  <form id="calcform">
  		<div class="form-group">
      	  <label for="ageInput">What is your age? <small>(In years)</small></label>
      	  <input type="number" min="0" class="form-control" name="age" id="ageInput" placeholder="For example: 41">
  		</div> <!-- End .form-group -->
  		<div class="form-group">
      	  <label for="vomaxInput">What is your current VO<sub>2</sub> max score? <small>(This number can be entered with or without a decimal value)</small></label>
      	  <input type="number" min="0.00" max="120.00" class="form-control" name="vomax" id="vomaxInput" placeholder="For example: 32.9">
  		</div> <!-- End .form-group -->
  		<div class="select">
      	  <label for="sexInput">What is your sex?</label>
      	  <select class="form-control" id="sexInput">
      	    <option>Select one</option>
      	    <option value="m" id="m">Male</option>
      	    <option value="f" id="f">Female</option>
      	  </select>
  		</div> <!-- End .select -->
  		<br />
  		<button class="btn btn-primary" type="button" id="calc" onclick="calculate()">Calculate</button><br /><br />
  		<div id="fitnessRank"></div>
	  </form>
    </div> <!-- End .col-xs-12 .col-sm-6 .col-md-8 -->
  </div> <!-- End .row -->
  <br /><br /><br /><br /><br /><br />
</div> <!-- End .container -->

</body>
</html>