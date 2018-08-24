<section class="menu-mobile">
	<nav class="hidden-sm hidden-md hidden-lg mobile-menu">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
				<div class="navbar-header">
					<a class="navbar-brand" style="cursor:pointer" data-toggle="collapse" data-target=".navbar-responsive-collapse">Menu</a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
						<div class="mobile_nav_trigger_text"></div>
						<div class="mobile_nav_trigger_icon">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</div>
					</button>
				</div>

				<div class="navbar-collapse collapse navbar-responsive-collapse">
					<ul id="menu-main-menu" class="nav navbar-nav">
						<li class="menu-item">
							<a title="Home" href="<?= base_url(); ?>">Home</a>
						</li>
						<li class="dropdown menu-item ">
							<a title="Ministry" class="dropdown-toggle" data-toggle="dropdown" href="#">Ministry </a>
							<ul class="dropdown-menu" role="menu">
					            <li><a href="<?= base_url(); ?>whatwedo/">What We Do</a></li>
					            <li><a href="<?= base_url(); ?>visionandmission/">Vision & Mission</a></li>
					            <li><a href="<?= base_url(); ?>values/">Values</a></li>
					            <li><a href="<?= base_url(); ?>stories/">Stories</a></li>
					            <li><a href="<?= base_url(); ?>donation/">Donation</a></li>
					            <li><a href="<?= base_url(); ?>volunteer/">Volunteer</a></li>
					        </ul>
						</li>
						<li class="dropdown menu-item">
							<a title="Gallery" class="dropdown-toggle" data-toggle="dropdown" href="#">Gallery</a>
							<ul class="dropdown-menu" role="menu">
					            <li><a href="<?= base_url(); ?>artist/">Artist</a></li>
					            <li><a href="<?= base_url(); ?>masterpiece/">Masterpiece</a></li>
					            <li><a href="<?= base_url(); ?>merchandise/">Merchandise</a></li>
					        </ul>
						</li>
						<li class="dropdown menu-item">
							<a title="Art Therapy" class="dropdown-toggle" data-toggle="dropdown" href="#">Art Therapy</a>
							<ul class="dropdown-menu" role="menu">
					            <li><a href="<?= base_url(); ?>introduction/">Introduction</a></li>
					            <li><a href="<?= base_url(); ?>counseling/">Counseling</a></li>
					            <li><a href="<?= base_url(); ?>workshopandexhibition/">Workshop & Exhibition</a></li>
					            <li><a href="<?= base_url(); ?>helpthem/">Help Them</a></li>
					        </ul>
						</li>
						<li class="menu-item">
							<a title="Blog" href="<?= base_url(); ?>blog">Blog</a>
						</li>
						<li class="dropdown menu-item">
							<a title="Account" class="dropdown-toggle" data-toggle="dropdown" href="#">My Account</a>
							<ul class="dropdown-menu" role="menu">
					            <li><a href="<?= base_url(); ?>account/">Account Detail</a></li>
					            <li><a href="<?= base_url(); ?>address/">Addresses</a></li>
					            <li><a href="<?= base_url(); ?>orders/">Orders</a></li>
					            <li><a href="<?= base_url(); ?>donate/">Donate</a></li>
					            <li><a href="">Logout</a></li>
					        </ul>
						</li>
						<li class="menu-item">
							<a title="Cart" href="<?= base_url(); ?>cart">Cart</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</nav>
</section>


<section class="menu-section">
	<div class="menu-logo v-center">
		<a href="<?= base_url(); ?>">
			<img src="<?= base_url(); ?>assets/images/main/logo.png">
		</a>
	</div><!--
 --><div class="menu v-center">
		<ul class="nav nav-pills">
			<li>
				<a data-href="#about-menu" class="dropdown-call <? if($this->uri->segment(1)=="whatwedo" || $this->uri->segment(1)=="visionandmission" || $this->uri->segment(1)=="values" || $this->uri->segment(1)=="stories" || $this->uri->segment(1)=="volunteer"): ?>colorful<? endif; ?>">MINISTRY <img src="<?= base_url(); ?>assets/images/main/dropdown-arrow.png"></a>
				<div id="about-menu" class="dropdown-div">
					<div class="dropdown-wrap">
						<ul>
							<li><a data-href="#about-us" <? if($this->uri->segment(1)=="whatwedo" || $this->uri->segment(1)=="visionandmission" || $this->uri->segment(1)=="values" || $this->uri->segment(1)=="stories"): ?>class="lucid-bold"<? endif; ?>>ABOUT US <img class="expand-arrow" src="<?= base_url(); ?>assets/images/main/right-arrow.png"></a></li>
							<li <? if($this->uri->segment(1)=="donation"): ?>class="colorful"<? endif; ?>><a href="<?= base_url(); ?>donation">DONATION</a></li>
							<li <? if($this->uri->segment(1)=="volunteer"): ?>class="colorful"<? endif; ?>><a href="<?= base_url(); ?>volunteer">VOLUNTEER</a></li>
						</ul>
					</div><!--
				 --><div class="submenu-wrap">
						<ul id="about-us" class="submenu-ul">
							<li <? if($this->uri->segment(1)=="whatwedo"): ?>class="colorful"<? endif; ?>><a href="<?= base_url(); ?>whatwedo">What We Do</a></li>
							<li <? if($this->uri->segment(1)=="visionandmission"): ?>class="colorful"<? endif; ?>><a href="<?= base_url(); ?>visionandmission">Vision & Mission</a></li>
							<li <? if($this->uri->segment(1)=="values"): ?>class="colorful"<? endif; ?>><a href="<?= base_url(); ?>values">Values</a></li>
							<li <? if($this->uri->segment(1)=="stories"): ?>class="colorful"<? endif; ?>><a href="<?= base_url(); ?>stories">Stories</a></li>
						</ul>
						<!-- <ul id="donation" class="submenu-ul">
							<li><a href="">sub sub menu 3</a></li>
							<li><a href="">sub sub menu 4</a></li>
						</ul> -->
					</div>
				</div>
			</li>
			<li>
				<a data-href="#gallery-menu" class="dropdown-call <? if($this->uri->segment(1)=="artists"): ?>colorful<? endif; ?>">GALLERY <img src="<?= base_url(); ?>assets/images/main/dropdown-arrow.png"></a>
				<div id="gallery-menu" class="dropdown-div">
					<div class="dropdown-wrap">
						<ul>
							<li><a data-href="#artist">ARTISTS <img class="expand-arrow" src="<?= base_url(); ?>assets/images/main/right-arrow.png"></a></li>
							<li><a data-href="#masterpiece">MASTERPIECE <img class="expand-arrow" src="<?= base_url(); ?>assets/images/main/right-arrow.png"></a></li>
							<li><a data-href="#merchandise">MERCHANDISE <img class="expand-arrow" src="<?= base_url(); ?>assets/images/main/right-arrow.png"></a></li>
						</ul>
					</div><!--
				 --><div class="submenu-wrap">
						<ul id="artist" class="submenu-ul">
							<li><a href="<?= base_url(); ?>artist">Abraham Jesse</a></li>
							<li><a href="<?= base_url(); ?>artist">Jay Aylani</a></li>
							<li><a href="<?= base_url(); ?>artist">Ramos Sisca</a></li>
							<li><a href="<?= base_url(); ?>artist">Mery Rina</a></li>
							<li><a href="<?= base_url(); ?>artist">Absahalom</a></li>
						</ul>
						<ul id="masterpiece" class="submenu-ul">
							<li><a href="<?= base_url(); ?>masterpiece">Jay Aylani</a></li>
							<li><a href="<?= base_url(); ?>masterpiece">Abraham Jesse</a></li>
							<li><a href="<?= base_url(); ?>masterpiece">Absahalom</a></li>
							<li><a href="<?= base_url(); ?>masterpiece">Ramos Sisca</a></li>
							<li><a href="<?= base_url(); ?>masterpiece">Mery Rina</a></li>
						</ul>
						<ul id="merchandise" class="submenu-ul">
							<li><a href="<?= base_url(); ?>merchandise">Mug</a></li>
							<li><a href="">Notebook</a></li>
							<li><a href="">Prints</a></li>
							<li><a href="">Tshirts</a></li>
							<li><a href="">Quotes</a></li>
							<li><a href="">Totebag</a></li>
						</ul>					</div>
				</div>
			</li>

			<li>
				<a data-href="#art-therapy-menu" class="dropdown-call <? if($this->uri->segment(1)=="introduction" || $this->uri->segment(1)=="counseling" || $this->uri->segment(1)=="workshopandexhibition" || $this->uri->segment(1)=="helpthem"): ?>colorful<? endif; ?>">ART THERAPY <img src="<?= base_url(); ?>assets/images/main/dropdown-arrow.png"></a>
				<div id="art-therapy-menu" class="dropdown-div">
					<div class="dropdown-wrap">
						<ul>
							<li><a data-href="#art-therapy" <? if($this->uri->segment(1)=="introduction" || $this->uri->segment(1)=="ourintroduction" || $this->uri->segment(1)=="benefits" || $this->uri->segment(1)=="application"): ?>class="lucid-bold"<? endif; ?>>INTRODUCTION <img class="expand-arrow" src="<?= base_url(); ?>assets/images/main/right-arrow.png"></a></li>
							<li <? if($this->uri->segment(1)=="counseling"): ?>class="colorful"<? endif; ?>><a href="<?= base_url(); ?>counseling">COUNSELING</a></li>
							<li <? if($this->uri->segment(1)=="workshopandexhibition"): ?>class="colorful"<? endif; ?>><a href="<?= base_url(); ?>workshopandexhibition">WORKSHOP & EXHIBITION</a></li>
							<li <? if($this->uri->segment(1)=="helpthem"): ?>class="colorful"<? endif; ?>><a href="<?= base_url(); ?>helpthem">HELP THEM</a></li>
						</ul>
					</div><!--
				 --><div class="submenu-wrap">
						<ul id="art-therapy" class="submenu-ul">
							<li <? if($this->uri->segment(1)=="ourintroduction"): ?>class="colorful"<? endif; ?>><a href="<?= base_url(); ?>introduction">Our Introduction</a></li>
							<li <? if($this->uri->segment(1)=="benefits"): ?>class="colorful"<? endif; ?>><a href="<?= base_url(); ?>introduction/#intro-2-section">The Benefits</a></li>
							<li <? if($this->uri->segment(1)=="application"): ?>class="colorful"<? endif; ?>><a href="<?= base_url(); ?>introduction/#intro-3-section">The Applications</a></li>
						</ul>
					</div>
				</div>
			</li>
			<li>
				<a href="<?= base_url(); ?>blog" >
					BLOG
				</a>
			</li>
		</ul>
	</div><!--
 --><div class="menu-right v-center">
		<div class="lang-option-wrap v-center">
			<ul style="display: none;">
				<li><a href="">EN</a></li>
				<li><div class="menu-divide"></div></li>
				<li><a href="">IND</a></li>
			</ul>
			<div class="form-group">
				<img class="currency-arrow" src="<?= base_url(); ?>assets/images/main/dropdown-arrow.png">
				<select class="form-control" id="currency1">
				    <option>$</option>
				    <option>IDR</option>
				</select>
			</div>
		</div><!--
	 --><div class="menu-account-n-cart-wrap v-center">
			<div class="menu-account-wrap v-center">
				<div class="menu-profile-picture v-center">
					<img src="<?= base_url(); ?>assets/images/main/profile.png">
				</div><!--
			 --><div class="menu-account v-center">
					<div class="dropdown">
						<button class="btn dropdown-toggle btn-account" type="button" id="menu1" data-toggle="dropdown"><?= $customer->name; ?> <img src="<?= base_url(); ?>assets/images/main/dropdown-arrow.png">
						</button>
						<ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="menu1">
							<li role="presentation"><a role="menuitem" href="<?= base_url(); ?>account">Account Detail</a></li>
							<li role="presentation"><a role="menuitem" href="<?= base_url(); ?>address">Addresses</a></li>
							<li role="presentation"><a role="menuitem" href="<?= base_url(); ?>orders">Orders</a></li>
							<li role="presentation"><a role="menuitem" href="<?= base_url(); ?>donatehistory">Donate</a></li>
							<li role="presentation"><a role="menuitem" href="#">Logout</a></li>
						</ul>
					</div>
				</div>
			</div><!--
		 --><div class="v-center menu-divide">
			</div><!--
		 --><div class="cart-icon-wrap v-center">
				<img src="<?= base_url(); ?>assets/images/main/cart.png">
			</div>
		</div>
	</div>
</section>

<section class="cart-popup-wrap">
	<div class="cart-popup-close">
		<img src="<?= base_url(); ?>assets/images/main/close.png">
	</div>
	<div class="cart-popup">
		<div class="col-xs-12 cart-popup-title">
			<h4>My Cart</h4>
		</div>
		<div class="col-xs-12 cart-popup-category">
			<h5>Merchandise</h5>
		</div>
		<div class="col-xs-12 cart-popup-row">
			<div class="col-sm-2 cart-popup-pict-wrap v-center-desktop" style="background-image: url(<?= base_url(); ?>assets/images/merchandise/merchan-5.png);">
			</div>
			<div class="col-sm-10 cart-popup-inside-wrap v-center-desktop">
				<div class="col-sm-4 cart-popup-info-wrap v-bottom-desktop">
					<h5>Sheroo (2016)</h5>
					<h5>Large (34 x 40 cm)</h5>
				</div><!--
			 --><div class="col-sm-3 cart-popup-quantity v-bottom-desktop">
					<button type="button" id="sub" class="sub">-</button>
				    <input type="number" id="1" value="1" min="1" />
				    <button type="button" id="add" class="add">+</button>
				</div><!--
			 --><div class="col-sm-3 cart-popup-price v-bottom-desktop">
					<h5>Rp 100.000</h5>
				</div><!--
			 --><div class="col-sm-1 cart-popup-cancel v-bottom-desktop">
					<img src="<?= base_url(); ?>assets/images/merchandise/cancel.png">
				</div>
			</div>
		</div>
		<div class="col-xs-12 cart-popup-row">
			<div class="col-sm-2 cart-popup-pict-wrap v-center-desktop" style="background-image: url(<?= base_url(); ?>assets/images/merchandise/merchan-1.png);">
			</div>
			<div class="col-sm-10 cart-popup-inside-wrap v-center-desktop">
				<div class="col-sm-4 cart-popup-info-wrap v-bottom-desktop">
					<h5>Sheroo (2016)</h5>
					<h5>Large (34 x 40 cm)</h5>
				</div><!--
			 --><div class="col-sm-3 cart-popup-quantity v-bottom-desktop">
					<button type="button" id="sub" class="sub">-</button>
				    <input type="number" id="1" value="1" min="1" />
				    <button type="button" id="add" class="add">+</button>
				</div><!--
			 --><div class="col-sm-3 cart-popup-price v-bottom-desktop">
					<h5>Rp 100.000</h5>
				</div><!--
			 --><div class="col-sm-1 cart-popup-cancel v-bottom-desktop">
					<img src="<?= base_url(); ?>assets/images/merchandise/cancel.png">
				</div>
			</div>
		</div>
		<div class="col-xs-12 cart-popup-subtotal">
			<h5>Subtotal : Rp 200.000</h5>
		</div>

		<div class="col-xs-12 cart-popup-category">
			<h5>Counseling</h5>
		</div>
		<div class="col-xs-12 cart-popup-row">
			<div class="col-sm-2 cart-popup-pict-wrap v-center-desktop" style="background-image: url(<?= base_url(); ?>assets/images/cart/counseling-pict.png);">
			</div>
			<div class="col-sm-10 cart-popup-inside-wrap v-center-desktop">
				<div class="col-sm-4 cart-popup-info-wrap v-bottom-desktop">
					<h5>Sheroo (2016)</h5>
					<h5>Large (34 x 40 cm)</h5>
				</div><!--
			 --><div class="col-sm-3 cart-popup-quantity v-bottom-desktop">
					<button type="button" id="sub" class="sub">-</button>
				    <input type="number" id="1" value="1" min="1" />
				    <button type="button" id="add" class="add">+</button>
				</div><!--
			 --><div class="col-sm-3 cart-popup-price v-bottom-desktop">
					<h5>Rp 100.000</h5>
				</div><!--
			 --><div class="col-sm-1 cart-popup-cancel v-bottom-desktop">
					<img src="<?= base_url(); ?>assets/images/merchandise/cancel.png">
				</div>
			</div>
		</div>
		<div class="col-xs-12 cart-popup-subtotal">
			<h5>Subtotal : Rp 200.000</h5>
		</div>
		<div class="col-xs-12 cart-popup-total">
			<h5>Total : Rp 400.000</h5>
		</div>
		<div class="col-xs-12 cart-popup-button">
			<div class="cart-popup-button-inside">
				<a href="<?= base_url(); ?>cart"><button class="btn btn-help">Proceed to checkout</button></a>
			</div>
		</div>
	</div>
</section>

<section class="menu-margin">
</section>