<?php include('includes/header.php'); ?>

<section class="projgroup">
	<h2>Open Source Contributions</h2>

	<section class="project">
		<h3>Linux Kernel Tinification</h3>
		<p>
			For my capstone, I am working on the Linux Kernel tinification efforts. Below are the patches that I worked on.
		</p>
		<ul>
			<li>
					The first patch was to allow for the <i>pivot_root</i> system call to be compiled out. <i>pivot_root</i> allows for the root of a filesystem to be moved to a different location and replaced by a different root. For situations where this is not needed, 614 bytes can be saved by compiling it out. The thread can be viewed <a href="https://lkml.org/lkml/2017/2/24/749" target="_blank">here</a>.
			</li>
			<li>
					The second patch is to allow for extended attribute (<i>xattr</i>) support to be compiled out. xattr's are used by filesystems and userspaces for various tasks. If xattr's are not needed, 4020 bytes can be saved by compiling support for it out. This includes 12 system calls and 15 functions. The thread for this can be viewed <a href="https://lkml.org/lkml/2017/4/11/831">here</a>.
			</li>
		</ul>
	</section>
</section>

<section class="projgroup">
	<h2>Game Jams</h2>

	<section class="project">
		<h3>Neon Abyss</h3>
		<p>
			For <a href="http://ludumdare.com/compo" target="_blank">Ludum Dare</a> 34, a friend and I entered with a game we called <i>Neon Abyss</i>. The game was created in Python 2. The objective of the game is to pass through platforms by increasing or decreasing your character's size. If you are too small, you will fail to break the board and die. If you are too big, you will not be able to fit through the opening. As you get further downthe abyss, you fall faster. You just try to get as far down the abyss as you can. The entry can be located <a href=http://ludumdare.com/compo/ludum-dare-34/?action=preview&uid=66352" target="_blank">here</a>.
		</p>
	</section>
</section>

<section class="projgroup">
	<h2>Personal Projects</h2>

	<section class="project">
		<h3>rsfaudio</h3>
		<p>
			During the summer of 2012, I decided to create a Python 2 library for accessing and modifying metadata of various audio files. The library, <i>rsfaudio</i>, supports:
		</p>
		<ul>
			<li>ID3 (v1.0, v1.1, v2.2, v2.3, and v2.4) tags for MP3 files</li>
			<li>FLAC tags for FLAC files</li>
			<li>Vorbis Comments for Ogg Vorbis files</li>
			<li>ASF Metadata for WMA files</li>
			<li>M4A tags for AAC files</li>
		</ul>
		<p>The code can be found on <a href="http://bazaar.launchpad.net/~redsoxfan/+junk/rsfaudio/files" target="_blank">Launchpad</a>. Unfortunately, I paid more attention to performance and compatibility with various standards than code readability.
		</p>
	</section>

	<section class="project">
		<h3>rsfmb</h3>
		<p>
			During the summer of 2011, I decided to create a Python 2 library to act as a binding for the <a href="http://musicbrainz.org" target="_blank">MusicBrainz</a> XML WebService Version 2. The code can be found on <a href="http://bazaar.launchpad.net/~redsoxfan/+junk/rsfmb/files" target="_blank">Launchpad</a>. Unfortunately, I did not care about code readablity back then.
		</p>
	</section>
</section>

<?php include('includes/footer.php'); ?>
