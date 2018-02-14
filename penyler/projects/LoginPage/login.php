<!DOCTYPE html>
<html lang="en-us" ng-app="myApp">
    <head>
	<title><?php echo $page_name; ?></title>	
 		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta charset="UTF-8">
        <!-- load bootstrap builds out the navbar-default -->
	    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" /> 
        <script src="//code.angularjs.org/1.3.0-rc.1/angular.min.js"></script>
        <script src="//code.angularjs.org/1.3.0-rc.1/angular-route.min.js"></script>
		<script src="//code.angularjs.org/1.3.0-rc.1/angular-sanitize.min.js"></script>
        <script src="app.js"></script>   
	 	<link rel="stylesheet" href="style1.css" type="text/css" media="screen" />  

<style>
img {
    float: right;
    padding-right: 40px
}
</style>

	</head>
	<body>
	<div class="container">
		<div id="header">
			<a href="../../index.php">
				<img src="companylogo.png" alt="Paul Habjanetz Logo">
			</a>
		</div>
        <div class="content">
            <div ng-view></div>
		</div>

		
	<div id="footer">
		<p>Copyright &copy; <a href="../../page/contact.php">Paul Habjanetz</a> 2018 | Designed by <a href="../../page/contact.php">Paul Habjanetz</a> | <a href="https://www.reddit.com/"> Front Page of Internet </a></p>
	</div>



    </body>
</html>