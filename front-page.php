<?php

get_header();

?>
	<div class="realtors">
		<h3 class="heading-3">Top 3 Realtors</h3>
		<div class="realtors__list">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/realtor-1.jpeg" alt="Realtor 1" class="realtors__img">
			<div class="realtors__details">
				<h4 class="heading-4 heading-4--light">Erik Feinman</h4>
				<p class="realtors__sold">245 houses sold</p>
			</div>

			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/realtor-2.jpeg" alt="Realtor 2" class="realtors__img">
			<div class="realtors__details">
				<h4 class="heading-4 heading-4--light">Kim Brown</h4>
				<p class="realtors__sold">212 houses sold</p>
			</div>


			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/realtor-3.jpeg" alt="Realtor 3" class="realtors__img">
			<div class="realtors__details">
				<h4 class="heading-4 heading-4--light">Toby Ramsey</h4>
				<p class="realtors__sold">198 houses sold</p>
			</div>
		</div>
	</div>

	<section class="features">
		<div class="feature">
			<svg class="feature__icon">
				<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-global"></use>
			</svg>
			<h4 class="heading-4 heading-4--dark">World's best luxury homes</h4>
			<p class="feature__text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur distinctio necessitatibus pariatur voluptatibus.</p>
		</div>
		<div class="feature">
			<svg class="feature__icon">
				<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-trophy"></use>
			</svg>
			<h4 class="heading-4 heading-4--dark">Only the best properties</h4>
			<p class="feature__text">Voluptatum mollitia quae. Vero ipsum sapiente molestias accusamus rerum sed a eligendi aut quia.</p>
		</div>
		<div class="feature">
			<svg class="feature__icon">
				<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-map-pin"></use>
			</svg>
			<h4 class="heading-4 heading-4--dark">All homes in top locations</h4>
			<p class="feature__text">Tenetur distinctio necessitatibus pariatur voluptatibus quidem consequatur harum.</p>
		</div>
		<div class="feature">
			<svg class="feature__icon">
				<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-key"></use>
			</svg>
			<h4 class="heading-4 heading-4--dark">New home in one week</h4>
			<p class="feature__text">Vero ipsum sapiente molestias accusamus rerum. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
		</div>
		<div class="feature">
			<svg class="feature__icon">
				<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-presentation"></use>
			</svg>
			<h4 class="heading-4 heading-4--dark">Top 1% realtors</h4>
			<p class="feature__text">Quidem consequatur harum, voluptatum mollitia quae. Tenetur distinctio necessitatibus pariatur voluptatibus.</p>
		</div>
		<div class="feature">
			<svg class="feature__icon">
				<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-lock"></use>
			</svg>
			<h4 class="heading-4 heading-4--dark">Secure payments on Nexter</h4>
			<p class="feature__text">Pariatur voluptatibus quidem consequatur harum, voluptatum mollitia quae.</p>
		</div>
		
	</section>

	<div class="story__pictures">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/story-1.jpeg" alt="Couple with new house" class="story__img--1">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/story-2.jpeg" alt="New house" class="story__img--2">
	</div>

	<div class="story__content">
		<h3 class="heading-3 mb-sm">Happy customers</h3>
		<h2 class="heading-2 heading-2--dark mb-md">&ldquo;The best decision of our lives&rdquo;</h2>
		<p class="story__text">
			Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur distinctio necessitatibus pariatur voluptatibus. Quidem consequatur harum volupta!
		</p>
		<button class="btn">Find your own home</button>
	</div>

	<section class="homes">
		<div class="home">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/house-1.jpeg" alt="House 1" class="home__img">
			<svg class="home__like">
				<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-heart-full"></use>
			</svg>
			<h5 class="home__name">Beautiful Family House</h5>
			<div class="home__location">
				<svg>
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-map-pin"></use>
				</svg>
				<p>USA</p>
			</div>
			<div class="home__rooms">
				<svg>
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-profile-male"></use>
				</svg>
				<p>5 rooms</p>
			</div>
			<div class="home__area">
				<svg>
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-expand"></use>
				</svg>
				<p>325 m<sup>2</sup></p>
			</div>
			<div class="home__price">
				<svg>
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-key"></use>
				</svg>
				<p>$1,200,000</p>
			</div>
			<button class="btn home__btn">Contact realtor</button>
		</div>
		
		<div class="home">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/house-2.jpeg" alt="House 2" class="home__img">
			<svg class="home__like">
				<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-heart-full"></use>
			</svg>
			<h5 class="home__name">Modern Glass Villa</h5>
			<div class="home__location">
				<svg>
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-map-pin"></use>
				</svg>
				<p>Canada</p>
			</div>
			<div class="home__rooms">
				<svg>
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-profile-male"></use>
				</svg>
				<p>6 rooms</p>
			</div>
			<div class="home__area">
				<svg>
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-expand"></use>
				</svg>
				<p>450 m<sup>2</sup></p>
			</div>
			<div class="home__price">
				<svg>
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-key"></use>
				</svg>
				<p>$2,750,000</p>
			</div>
			<button class="btn home__btn">Contact realtor</button>
		</div>

		<div class="home">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/house-3.jpeg" alt="House 3" class="home__img">
			<svg class="home__like">
				<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-heart-full"></use>
			</svg>
			<h5 class="home__name">Cozy Country House</h5>
			<div class="home__location">
				<svg>
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-map-pin"></use>
				</svg>
				<p>UK</p>
			</div>
			<div class="home__rooms">
				<svg>
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-profile-male"></use>
				</svg>
				<p>4 rooms</p>
			</div>
			<div class="home__area">
				<svg>
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-expand"></use>
				</svg>
				<p>250 m<sup>2</sup></p>
			</div>
			<div class="home__price">
				<svg>
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-key"></use>
				</svg>
				<p>$850,000</p>
			</div>
			<button class="btn home__btn">Contact realtor</button>
		</div>

		<div class="home">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/house-4.jpeg" alt="House 4" class="home__img">
			<svg class="home__like">
				<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-heart-full"></use>
			</svg>
			<h5 class="home__name">Large Rustical Villa</h5>
			<div class="home__location">
				<svg>
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-map-pin"></use>
				</svg>
				<p>Portugal</p>
			</div>
			<div class="home__rooms">
				<svg>
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-profile-male"></use>
				</svg>
				<p>6 rooms</p>
			</div>
			<div class="home__area">
				<svg>
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-expand"></use>
				</svg>
				<p>480 m<sup>2</sup></p>
			</div>
			<div class="home__price">
				<svg>
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-key"></use>
				</svg>
				<p>$1,950,000</p>
			</div>
			<button class="btn home__btn">Contact realtor</button>
		</div>

		<div class="home">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/house-5.jpeg" alt="House 5" class="home__img">
			<svg class="home__like">
				<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-heart-full"></use>
			</svg>
			<h5 class="home__name">Majestic Palace</h5>
			<div class="home__location">
				<svg>
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-map-pin"></use>
				</svg>
				<p>Germany</p>
			</div>
			<div class="home__rooms">
				<svg>
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-profile-male"></use>
				</svg>
				<p>18 rooms</p>
			</div>
			<div class="home__area">
				<svg>
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-expand"></use>
				</svg>
				<p>4,230 m<sup>2</sup></p>
			</div>
			<div class="home__price">
				<svg>
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-key"></use>
				</svg>
				<p>$9,500,000</p>
			</div>
			<button class="btn home__btn">Contact realtor</button>
		</div>

		<div class="home">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/house-6.jpeg" alt="House 6" class="home__img">
			<svg class="home__like">
				<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-heart-full"></use>
			</svg>
			<h5 class="home__name">Modern Family Apartment</h5>
			<div class="home__location">
				<svg>
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-map-pin"></use>
				</svg>
				<p>Italy</p>
			</div>
			<div class="home__rooms">
				<svg>
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-profile-male"></use>
				</svg>
				<p>3 rooms</p>
			</div>
			<div class="home__area">
				<svg>
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-expand"></use>
				</svg>
				<p>180 m<sup>2</sup></p>
			</div>
			<div class="home__price">
				<svg>
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-key"></use>
				</svg>
				<p>$600,000</p>
			</div>
			<button class="btn home__btn">Contact realtor</button>
		</div>
	</section>

	<section class="gallery">
		<figure class="gallery__item gallery__item--1">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gal-1.jpeg" alt="Gallery image 1" class="gallery__img">
		</figure>

		<figure class="gallery__item gallery__item--2">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gal-2.jpeg" alt="Gallery image 1" class="gallery__img">
		</figure>

		<figure class="gallery__item gallery__item--3">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gal-3.jpeg" alt="Gallery image 1" class="gallery__img">
		</figure>

		<figure class="gallery__item gallery__item--4">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gal-4.jpeg" alt="Gallery image 1" class="gallery__img">
		</figure>

		<figure class="gallery__item gallery__item--5">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gal-5.jpeg" alt="Gallery image 1" class="gallery__img">
		</figure>
		<figure class="gallery__item gallery__item--6">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gal-6.jpeg" alt="Gallery image 1" class="gallery__img">
		</figure>
		

		<figure class="gallery__item gallery__item--7">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gal-7.jpeg" alt="Gallery image 1" class="gallery__img">
		</figure>

		<figure class="gallery__item gallery__item--8">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gal-8.jpeg" alt="Gallery image 1" class="gallery__img">
		</figure>

		<figure class="gallery__item gallery__item--9">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gal-9.jpeg" alt="Gallery image 1" class="gallery__img">
		</figure>
		<figure class="gallery__item gallery__item--10">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gal-10.jpeg" alt="Gallery image 1" class="gallery__img">
		</figure>
		

		<figure class="gallery__item gallery__item--11">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gal-11.jpeg" alt="Gallery image 1" class="gallery__img">
		</figure>

		<figure class="gallery__item gallery__item--12">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gal-12.jpeg" alt="Gallery image 1" class="gallery__img">
		</figure>

		<figure class="gallery__item gallery__item--13">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gal-13.jpeg" alt="Gallery image 1" class="gallery__img">
		</figure>

		<figure class="gallery__item gallery__item--14">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gal-14.jpeg" alt="Gallery image 1" class="gallery__img">
		</figure>
		 
		
		
	</section>
<?php get_footer(); ?>
