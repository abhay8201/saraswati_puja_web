<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/style.css">
	<title>SPA app</title>
</head>

<body>
	<div id="app">
		<header>
		</header>
		<nav>
			<ul>
				<li>
					<a href="/SPA">
						Home
					</a>
				</li>
				<li>
					<a href="#" onclick="changeContent('initiative')">
						Initiative
					</a>
				</li>
				<li>
					<a href="#" onclick="changeContent('info')">
						Info
					</a>
				</li>
				<li>
					<a href="#" onclick="changeContent('blog')">
						Blog
					</a>
				</li>
				<li>
					<a href="#" onclick="changeContent('contact')">
						Contact
					</a>
				</li>
			</ul>
		</nav>
		<main>
			<div id="content">
				<div class="container">
					<img src="assets/images/c1.png" alt="Background Image" class="background-image">
					<img src="assets/images/s5.png" alt="Foreground Image" class="foreground-image">
					<div class="shlok">
						<b>
							<pre>
	  या कुन्देन्दुतुषारहारधवला या शुभ्रवस्त्रावृता
   	 या वीणावरदण्डमण्डितकरा या श्वेतपद्मासना ।
	  या ब्रह्माच्युतशङ्करप्रभृतिभिर्देवैस्सदा वन्दिता
 	सा मां पातु सरस्वती भगवती नि:शेषजाड्यापहा ॥
							</pre>
						</b>
						<audio id="audioElement" src="assets/images/v1.mp3"></audio>
						<div id="autoplayNotice" class="audio-control" style="display: inline-block; margin-left : 18%">Click anywhere to start music</div>
						<!-- <button id="playButton" class="audio-control">Play Audio</button>
						<button id="pauseButton" class="audio-control">Pause Audio</button> -->
					</div>
					<img src="assets/images/p1.png" id="leftpillar">
					<img src="assets/images/p1.png" id="rightpillar">
				</div>
				<div class="container1">
					<img src="assets/images/c2.png" alt="Background Image" class="C2">
					<img src="assets/images/c3.png" alt="Foreground Image" class="C3">
					<img src="assets/images/sw1.png" alt="Foreground Image" class="Swastik">
						<b class="about">
							<h3>Why we celebrate Saraswati Puja?</h3>
							Saraswati Puja is performed for devotion to the Goddess of knowledge and wisdom. The Goddess of learning is worshiped among students and learned who firmly follow all the customs to worship her. The festivities that go along with Saraswati pooja is a division of the social celebrations. On this day, small girls are seen in yellow saaries. Bright Palash flowers are offered as Pushpanjali along with chanting mantras that is a significant part of the worship.
						</b>

				</div>
				<div class="container">
					<img src="assets/images/c2.png" alt="Background Image" class="oC2">
					<img src="assets/images/c3.png" alt="Foreground Image" class="oC3">
					<img src="assets/images/o1.png" alt="Foreground Image" class="Om">
						<b class="oabout">
							<h3>Significance of Saraswati Puja?</h3>
							Goddess Saraswati is worshipped to invoke the blessings of the deity, who is the Goddess of culture, music art and education. The significance of Saraswati Puja is that it is a spring festival and it marks the beginning of spring. The yellow colour forms an integral part of the festival. Yellow coloured flowers are offered to the deity, such as Marigold. The food prepared are also yellow in colour, such as kesariya bhaat or sweet saffron rice, kesariya ladoo or halwa or saffron pudding, khichdi or a mixture of yellow pulses with rice and so on. Young girls drape themselves in yellow coloured sarees or basanti coloured saree. Even the cloth which covers the stool on which the deity is placed is yellow in colour. Yellow forms the theme colour of this festival because mustard flowers during this season, spring are in full bloom everywhere and this festival represents the Spring season.
						</b>
				</div>

		</main>
	</div>
	<script src="assets/js/script.js"></script>
</body>

</html>
