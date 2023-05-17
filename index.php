<?php

//include header file
include('include/header.php');
?>


<div class="container-fluid header-img">
	<div class="row">
		<div class="col-md-6 offset-md-3">

			<div class="header">
				<h1 class="text-center">DONATE THE BLOOD, SAVE LIVES</h1>
				<p class="text-center">Donate the blood to help the others.</p>
			</div>


			<h1 class="text-center">Search The Donors</h1>
			<hr class="white-bar text-center">

			<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
				<div class="form-group text-center justify-content-center">

					<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
						<option value="">-- Select --</option>
						<optgroup title="West Region" label="&raquo; West Region"></optgroup>
						<option value="Bamboutous">Bamboutous</option>
						<option value="Haut-Nkam">Haut-Nkam</option>
						<option value="Haut-Nyong">Haut-Nyong</option>
						<option value="Hauts-Plateaux">Hauts-Plateaux</option>
						<option value="Koung-Khi">Koung-Khi</option>
						<option value="Menoua">Menoua</option>
						<option value="Mezam">Mezam</option>
						<option value="Mifi">Mifi</option>
						<option value="Ndé">Ndé</option>
						<option value="Nkam">Nkam</option>
						<optgroup title="North West" label="&raquo; North West"></optgroup>
						<option value="Boyo">Boyo</option>
						<option value="Bui">Bui</option>
						<option value="Donga-Mantung">Donga-Mantung</option>
						<option value="Menchum">Menchum</option>
						<option value="Mezam">Mezam</option>
						<option value="Momo">Momo</option>
						<option value="Ngo-Ketunjia">Ngo-Ketunjia</option>

						<optgroup title="Center Region" label="&raquo; Center Region"></optgroup>
						<option value="Haute-Sanaga">Haute-Sanaga</option>
						<option value="Lekié">Lekié</option>
						<option value="Mbam-et-Inoubou">Mbam-et-Inoubou</option>
						<option value="Mbam-et-Kim">Mbam-et-Kim</option>
						<option value="Méfou-et-Afamba">Méfou-et-Afamba</option>
						<option value="Méfou-et-Akono">Méfou-et-Akono</option>
						<option value="Mfoundi">Mfoundi</option>
						<option value="Nyong-et-Kéllé">Nyong-et-Kéllé</option>
						<option value="Nyong-et-Mfoumou">Nyong-et-Mfoumou</option>
						<option value="Nyong-et-So'o">Nyong-et-So'o</option>
						<optgroup title="Littoral" label="&raquo; Littoral"></optgroup>
						<option value="Moungo">Moungo</option>
						<option value="Sanaga-Maritime">Sanaga-Maritime</option>

						<option value="Wouri (department)">Wouri (department)</option>
						<optgroup title="South West" label="&raquo; South West"></optgroup>
						<option value="Fako">Fako</option>
						<option value="Koupé-Manengouba">Koupé-Manengouba</option>
						<option value="Lebialem">Lebialem</option>
						<option value="Manyu">Manyu</option>
						<option value="Meme">Meme</option>
						<option value="Ndian">Ndian</option>

						<optgroup title="East" label="&raquo; East"></optgroup>
						<option value="Boumba-et-Ngoko">Boumba-et-Ngoko</option>
						<option value="Kadey">Kadey</option>
						<option value="Lom-et-Djerem">Lom-et-Djerem</option>

						<optgroup title="Adamawa Region" label="&raquo; Adamawa Region"></optgroup>
						<option value="Djérem">Djérem</option>
						<option value="Faro-et-Déo">Faro-et-Déo</option>
						<option value="Kadey">Kadey</option>
						<option value="Mayo-Banyo">Mayo-Banyo</option>
						<option value="Mbéré">Mbéré</option>
						<option value="Vina">Vina</option>

						<optgroup title="North" label="&raquo; North"></optgroup>
						<option value="Mayo-Louti">Mayo-Louti</option>
						<option value="Mayo-Rey">Mayo-Rey</option>
						<option value="Kadey">Kadey</option>

						<optgroup title="Far North" label="&raquo; Far North"></optgroup>
						<option value="Diamaré">Diamaré</option>
						<option value="Logone-et-Chari">Logone-et-Chari</option>
						<option value="Mayo-Danay">Mayo-Danay</option>
						<option value="Mayo-Kani">Mayo-Kani</option>
						<option value="Mayo-Sava">Mayo-Sava</option>
						<option value="Mayo-Tsanaga">Mayo-Tsanaga</option>


						<optgroup title="South Region" label="&raquo; South Region"></optgroup>
						<option value="Mvila">Mvila</option>
						<option value="Océan">Océan</option>
						<option value="Vallée-du-Ntem">Vallée-du-Ntem</option>

					</select>
				</div>
				<div class="form-group center-aligned">
					<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">

						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>

					</select>
				</div>
				<div class="form-group center-aligned">
					<button type="submit" class="btn btn-lg btn-danger">Search</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- header ends -->

<!-- donate section -->
<div class="container-fluid red-background">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center" style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
			<hr class="white-bar">
			<p class="text-center pera-text">
				Welcome to our online blood donation platform,where we connect blood donors with those in need.Our mission is to make the process of blood donation and receiving blood as easy
				and efficient as possible.We understand the importance of having a reliable source of blood for medical emergencies, surgeries, and other medical procedures. That's why we have created this plartform
				to bridge the gap between donors and recipients.
			</p>
			<a href="donate.php" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
		</div>
	</div>
</div>
<!-- end donate section -->


<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Vision</h3>
				<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
				<p class="text-center">
					Our vision is to create a world were every person has access to safe and sufficent blood when they need it. We believe that no one should suffer or die
					due to a lack of blood supply. By connecting donors with recipients through our online platforms we hope to make a significant impact on the lives of people in need.
				</p>
			</div>
		</div>

		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Goal</h3>
				<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
				<p class="text-center">
					Our goal is to be build a community of passionate blood donors who are committed to saving lives. We aim to provide an easy-to-use platform that allows donors to register,find donation
					centers near them, and schedule appointments at their convenience. Our goal is also to raise awareness about the important of regular blood donations and encourage more
					people to become regular donors.
				</p>
			</div>
		</div>

		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Mission</h3>
				<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
				<p class="text-center">
					Our mission is simple. To save lives by connecting blood donors with those in need.We strive to achieve this by providig an efficient and user friendly platform that makes
					it easy for people to donate blood and save lives. We are committed to ensuring that every donor has a positive experience while donating, knowing that their contribution can make
					a significant difference in someone's life.
					Join us today in our mission to save lives through blood donation!
				</p>
			</div>
		</div>
	</div>
</div>

<!-- end about us section -->


<?php
//include footer file
include('include/footer.php');

?>