<?php 
  include "php/config.php";
  $new_url = "";
  if(isset($_GET)){
    foreach($_GET as $key=>$val){
      $u = mysqli_real_escape_string($conn, $key);
      $new_url = str_replace('/', '', $u);
    }
      $sql = mysqli_query($conn, "SELECT full_url FROM url WHERE shorten_url = '{$new_url}'");
      if(mysqli_num_rows($sql) > 0){
        $sql2 = mysqli_query($conn, "UPDATE url SET clicks = clicks + 1 WHERE shorten_url = '{$new_url}'");
        if($sql2){
            $full_url = mysqli_fetch_assoc($sql);
            header("Location:".$full_url['full_url']);
          }
      }
  }
?>
<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>URLight</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>
<style>
	.input-icons i {
		position: absolute;
	}

	.input-icons {
		width: 100%;
		margin-bottom: 10px;
	}

	.icon {
		padding: 10px;
		min-width: 40px;
	}

	.input-field {
		width: 100%;
		padding: 10px;
		text-align: center;
	}
</style>


<script type="text/javascript">

var popupWindow = null;





function child_open() {

	popupWindow = window.open('https://www.google.com/search?q', "_blank", "directories=no, status=no, menubar=no, scrollbars=yes, resizable=no,width=600, height=280,top=200,left=200");

}
function parent_disable() {
	if (popupWindow && !popupWindow.closed)
		popupWindow.focus();
}
</script>
<body class="is-preload" onFocus="parent_disable();" onclick="parent_disable();">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<a href="index.html" class="logo"><strong>URL</strong> <span>ight</span></a>
			<nav>

				<a href="javascript:child_open()" > <img src="./images/searching-bar.png" style="width: 100px; height : auto"
						alt="Searching?"></a>
			</nav>
		</header>


		<br> <br>
		<!-- Banner -->
		<section id="banner" class="major">

			<div class="inner">

				<header class="major">
					<h1>Shorten And Share It!</h1>
				</header>


				<div class="row">
					<div class="col-8" style="width: 637.3333px;">
						<form action="#" autocomplete="off">
							<div class="content">

								<input type="text" style="width: 337.3334px;" spellcheck="false" name="full_url"
									placeholder="Enter or paste a long url" required>
								<ul class="actions">
									<i class="url-icon uil uil-link"></i>
									<li><button class="button next scrolly">Shorten!</button></li>
									<li><button class="button next scrolly">Go!</button></li>
								</ul>
							</div>





						</form>




					</div>
					<div class="col-4">
						<article>
							<header class="major">

								<h3>Your short URL :</h3>
								<div class="content">
									<input type="text">
									<ul class="actions">
										<i class="url-icon uil uil-link"></i>
										<li><button class="button">Copy</button></li>
									</ul>
								</div>
							</header>

							<span class="image-">
								<div class="row">
									<div class="col-6">
										<!-- <img src="./images/searching-bar.png" width="00px;" alt="" /> -->
									</div>
								</div>

							</span>

						</article>

					</div>

				</div>

				<div class="row">
					<div class="col6">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon brands alt fa-twitter"><span
											class="label">Twitter</span></a>
								</li>
								<li><a href="#" class="icon brands alt fa-facebook-f"><span
											class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands alt fa-instagram"><span
											class="label">Instagram</span></a></li>
								<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a>
								</li>
								<li><a href="#" class="icon brands alt fa-linkedin-in"><span
											class="label">LinkedIn</span></a></li>
							</ul>
						</div>

					</div>



					<div class="col-6" style="padding-left: 300px;">

						<div class="inner">
							<ul class="icons">
								<img src="images/download.png" alt="">
							</ul>
						</div>

					</div>
				</div>




		</section>




		<!-- Footer -->
		<footer id="footer">

		</footer>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>