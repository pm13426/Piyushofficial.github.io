<?php
include("helper.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>PiyushOfficial blog page</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
	 crossorigin="anonymous">
	<!-- Custom fonts for this template -->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
	 rel='stylesheet' type='text/css'>
	<!-- add template css file -->
	<link rel="stylesheet" href="/css/template.css" />
</head>

<body>
	<!-- Page Header -->
	<header class="masthead" style="background-image: url('https://picsum.photos/1100/400?grayscale');padding:100px 0px;">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-10 mx-auto">
					<div class="site-heading text-light">
						<h1>Piyush blogger</h1>
						<span class="subheading">Its all about time and blogging...</span>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
		<div class="container">
			<a class="navbar-brand" href="/">PIYUSH</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
			 aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="Blog Class"></i>
            </button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
                <?php 
            $menus = menus(); 
            foreach($menus as $menu) {
              echo "<li class='nav-item'>";
              echo "<a class='nav-link' href='" . $menu['url'] . "'>";
              echo $menu['title']; 
              echo "</a>";
              echo "</li>";
            }
            ?>
				</ul>
			</div>
		</div>
	</nav>

	<div class="content">
		<!-- Main Content -->
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-10 mx-auto">
                <?php 
          $posts = posts();
          foreach($posts as $post) {
          ?>
          <div class="post-preview">
            <a href="">
              <h2>
                <?php 
                echo $post['title'];
                ?>
              </h2>
            </a>
            <div class="intro">
              <div class="clearfix">
                <p>
                  <?php 
                  echo $post['intro'];
                  ?>
					<div class="post-preview">
						<a href="?post=1">
							<h2>'Janta Curfew' beginning of long battle: PM Narendra Modi</h2>
						</a>
						<p class="post-meta">Posted by Piyushblogger on April 14, 2020</p>
						<div class="intro">
							<div class="clearfix">
								<img src="https://picsum.photos/150/150/?123" alt="" class="float-left img-thumbnail mr-3" />
								<p>Prime Minister Narendra Modi said on Sunday the 14-hour 'Janta Curfew' is the beginning of a long battle against coronavirus outbreak and the countrymen have proved that together they can defeat any challenge.

									"Today's Janta Curfew may end at 9.00 pm, but this does not mean we start celebrating," he tweeted.
									
									He said the self-imposed curfew should "not be considered as a success" as it is the "beginning of a long battle.</p>
							</div>
						</div>
					</div>
					<hr>
					<div class="post-preview">
						<a href="?post=2">
							<h2>Problems faces by public due to jantacurfew!!</h2>
						</a>
						<p class="post-meta">Posted by Piyushblogger on April 14, 2020</p>
						<div class="intro">
							<div class="clearfix">
								<img src="https://picsum.photos/150/150/?321" alt="" class="float-left img-thumbnail mr-3" />
								<p>There has been a marked change in almost everyone I know. From frequent bouts of crying to helplessness and rage, people seem to be trying to cope with the powerful emotions that they undergo because of what surrounds them.

									Insomnia, hopelessness, fear, anger, sadness, fatigue – all creep in at some point. News of death of protesters or fake encounters further aggravate symptoms of depression There has been a marked change in almost everyone I know. From frequent bouts of crying to helplessness and rage, people seem to be trying to cope with the powerful emotions that they undergo because of what surrounds them.

									Insomnia, hopelessness, fear, anger, sadness, fatigue – all creep in at some point. News of death of protesters or fake encounters further aggravate symptoms of depression.</p>
							</div>
						</div>

					</div>
					<hr>
					<div class="post-preview">
						<a href="?post=3">
							<h2>Highlights and Information...!! </h2>
						</a>
						<p class="post-meta">Posted by Piyushblogger on April 15, 2020</p>
						<div class="intro">
							<div class="clearfix">
								<img src="https://picsum.photos/150/150/?a" alt="" class="float-left img-thumbnail mr-3" />
								<p>The World Health Organization (WHO) has made the assessment that COVID-19 (coronavirus) can be characterised as a pandemic and the virus has now spread to many countries and territories. While COVID-19 continues to spread, it is important that communities take action to prevent further transmission, reduce the impacts of the outbreak and support control measures.

									The protection of children and educational facilities is particularly important. Precautions are necessary to prevent the potential spread of COVID-19 in school settings. However, care must also be taken to avoid stigmatizing students and staff who may have been exposed to the virus. COVID-19 does not differentiate among borders, ethnicities, disability status, age or gender. Education settings should continue to be welcoming, respectful, inclusive and supportive environments to all. Measures taken by schools can prevent the entry and spread of COVID-19 by students and staff who may have been exposed to the virus, while minimizing disruption and protecting students and staff from discrimination..</p>
							</div>
						</div>

					</div>
					<hr>
					<div class="post-preview">
						<a href="?post=4">
							<h2>How long does the coronavirus last on surfaces?</h2>
						</a>
						<p class="post-meta">Posted by Piyushblogger on April 15, 2020</p>
						<div class="intro">
							<div class="clearfix">
								<img src="https://picsum.photos/150/150/?t" alt="" class="float-left img-thumbnail mr-3" />
								<p>It is not certain how long the virus that causes COVID-19 survives on surfaces, 
									but it seems to behave like other coronaviruses. Studies suggest that coronaviruses 
									(including preliminary information on the COVID-19 virus)
									 may persist on surfaces for a few hours or up to several days.
								</p>
							</div>
						</div>
					</div>
					<hr>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<hr>
	</div>

	<!-- Footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-10 mx-auto">
					<ul class="list-inline text-center">
						<li class="list-inline-item">
							<a href="#">
								<span class="fa-stack fa-lg">
										<i class="fas fa-circle fa-stack-2x"></i>
										<i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
								</span>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="#">
								<span class="fa-stack fa-lg">
										<i class="fas fa-circle fa-stack-2x"></i>
										<i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
								</span>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="#">
								<span class="fa-stack fa-lg">
										<i class="fas fa-circle fa-stack-2x"></i>
										<i class="fab fa-github fa-stack-1x fa-inverse"></i>
								</span>
							</a>
						</li>
					</ul>
					<p class="copyright text-muted">Copyright &copy; Piyush Blogger 2020</p>
				</div>
			</div>
		</div>
	</footer>

	<!-- javascript files -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
	 crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
	 crossorigin="anonymous"></script>
</body>

</html>