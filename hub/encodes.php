<!DOCTYPE html>
<html>
	<head>
		<title>Submitting encodes</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../CSS/page.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		.tag {
			display: inline-block;
			width: 4.5em;
		}
		.comment {
			font-size: 65%;
			line-height: 0;
			padding-left: 0.5em;
			vertical-align: middle;
		}
		</style>
	</head>
	<body>
		<header>
			<div>
				<h1>Submitting video encodes</h1>
				<?php include "navbar"; ?>
			</div>
		</header>
		<main>
			<p>Currently, there’s no proper system for submitting encodes. However, if you have something you wish to submit you can contact Quad via <a href="https://twitter.com/Kuwaddo/">Twitter</a>, or someone else through our <a href="http://qchat.rizon.net/?channels=aniop">IRC channel</a>.</p>

			<p style="font-size:125%;"> - The encoding details have been <a href="https://github.com/AniDevTwitter/animeopenings/wiki/Encoding-videos">moved to GitHub</a>. Go there for details about how to encode your video.</p> 

			<p>If you need a place to upload your file, we recommend <a href="https://mixtape.moe/">Mixtape.moe</a>.</p>

			<form method="post" hidden>
				<label>Link to your encode: <input type="text" title="This must be a direct link to a webm file." pattern=".*\.webm" style="width:60%" required></label>
				<br />
				<label><span class="tag">Type:</span><select><option value="OP">Opening</option><option value="ED">Ending</option></select></label>
				<br />
				<label><span class="tag">Number:</span><input type="number" min="1" max="100" style="width:3em" value="1"></label>
				<br />
				<label><span class="tag">Letter:</span><input type="text" title="This must be a single lowercase letter, or nothing." maxlength="1" pattern="[a-z]" style="width:1em" onkeyup="this.value=this.value.toLowerCase()"></label><span class="comment">If any openings/endings have the same song or animation, use letters to differentiate them. Otherwise leave this input blank.</span>
				<br />
				<label><span class="tag">Series:</span><input type="text" style="width:80%" required></label>
				<br />
				<label><span class="tag">E-mail:</span><input type="email" autocomplete="email" style="width:40%" required></label><span class="comment">So that we can contact you about your encode.</span>
				<br />
				<label><span class="tag">Notes:</span><input type="text" style="width:80%"></label>
				<p class="comment" style="padding-left:7em">If there is anything we should know about this video (ex. "TV version" or "from season 3 episode 5").</p>
				<br />
				<input type="submit" value="Submit">
			</form>
		</main>

		<?php
		include_once "../backend/includes/botnet.html";
		?>
	</body>
</html>
