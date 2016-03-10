
<?php require_once ("header.php"); ?>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="app_b.php">App page <span class="sr-only">(current)</span></a></li>
      <li><a href="table_b.php">Table <span class="sr-only">(current)</span></a></li>
   
      
          </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


 <div class="container">

 <h1>This is the app page</h1>

<form>
<div class="row">
	<div class="col-md-3">
	<div class="form-group">
	<label for="to">To:</label>
	<input name="to" id="to" type="text" class="form-control">

	 </div>
	 </div>
 </div>


<div class="row">
	<div class="col-md-3">
	<div class="form-group">
	<label for="Message">Message:</label>
	<input name="Message" id="Message" type="text" class="form-control">


	 </div>
	 </div>
 </div>


<div class="row">
	<div class="col-md-3" "col-sm-6">
	<input class="btn btn-success hidden-xs" type="submit" value="Save data 1"></input>
	<input class="btn btn-success btn-block visible-xs-block" type="submit" value="Save data 2"></input>
	 </div>
</div>	



</div>
</form>


</body>
</html>