 �;V<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":24:{s:2:"ID";s:3:"697";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2007-04-18 13:09:25";s:13:"post_date_gmt";s:19:"2007-04-18 19:09:25";s:12:"post_content";s:5054:"So in all the mayhem that is/was the first three months of the year, we apparently completely missed news about the Web 2.0 Expo. Well, either that or we completely dismissed it based on the name alone.

Either way, it appears to be a loss to us, given what I'm reading on <a href="http://fuzzz.gaulin.ca/2007/04/17/say-bye-bye-password-hello-vidoop/">Andre's blog</a> about the sessions he's been to. One of them in particular caught my eye: <a href="http://www.vidoop.com/">Vidoop</a>.

<!--more-->Vidoop is an attempt to find a better solution to usernames and passwords. Anyone who's had to adapt to the rules of <a href="http://en.wikipedia.org/wiki/Sarbanes-Oxley_Act">Sarbanes-Oxley</a> has had to deal with the inevitable expiration of passwords every 45 days, and having to come up with new passwords that have to be cryptic, yet memorable.

This is one of my major hatreds of SOX-compliance. Every 45 days I have to wrack my brain for up to 10 minutes thinking of one that will actually work (must have mix case lettering, must include a number, must include a punctuation character of some kind, and must be at least 8 characters long) that I won't forget or confuse with previous ones. Until we went SOX-compliant, I had the same password for years!

But I digress...

Vidoop offers an interesting solution: <a href="http://en.wikipedia.org/wiki/Captcha">captcha</a>. Vidoop's system claims to offer protection for the four big problems:
<ul>
	<li>Phishing</li>
	<li>Keystroke Logging</li>
	<li>Man-in-the-Middle</li>
	<li>Brute Force</li>
</ul>
Vidoop gets around this by providing a login system that first installs a simple key on the computer where a user will login from. But you have to prove that you're you first, which can be done by providing a unique ID to create the key, done either by voice (over the phone) or by a text message (over your personal cell phone). Done per computer, you need only set up once if it's your computer. You can also set up temporary connections from your favourite coffee shop system, too.

This first step eliminates brute force, since you can't even get to the captcha without the key first in place.

Next, you get grid of pictures. You need to identify two (according to the <a href="http://www.vidoop.com/media/all.mov">Vidoop demo</a>) pictures, which have a letter or a number assigned. The kinds of images that appear depend on your configuration, but your profile (based on the key you already set up) will pull images from specific categories, such as mountains or flowers. Naturally, not all the images in the grid would be from those categories, to keep things more secure.

Once you identify the letters and numbers and enter them in, you're all set. Or at least that's the theory. Naturally, the combination changes constantly, and the numbers/letters are always different. Technically, you're entering a new password every time. As such, phishing won't work, nor will keystroke logging or man-in-the-middle.

But...

After having some thought about this, I have a few questions.
<ol>
	<li>Does it matter in what order the numbers/letters are inputted? If not, that reduces security since someone could more likely guess.</li>
	<li>Does the case of the letter matter? If not, then you've just lost 26 possible combinations.</li>
	<li>The demo shows a grid of 12 images, of which you select 2. Can the grid be increased to 16 or 20 images?</li>
</ol>
The combinatorics is what makes me wonder. Take the minimum requirement for a SOX-compliant password (8 characters, numbers, mixed case, with punctuation marks). That's (26x26x10x33)^8 = 6.1331711844412782794467972197974e+42. (Oh, I hope I got my math right on that -- I flunked combinatorics in university.)

Secure, but that's also assuming totally non-sensical passwords that people can't remember. So I'd drop that a few fold to get something more realistic. Still, tough to beat.

Vidoop's chances (according to the demo, and assumptions based on the above list) is much smaller: One in six attempts. Assuming, of course, that you a) can get the key, b) have an idea of what the user's categories are, and c) that the images are set up to be difficult enough that only the user knows.

That last one is the tough one. Take Vidoop's demo: the categories for the user are mountains and flowers. Pretty distinct, and easy to spot. There's also pictures of keys, music instruments, buildings, and animals. A couple of attempts, and you might figure it out.

What if it were all people? Nameless people. But you have to identify your cousins. Or your nieces. Or your aunt's friends. Only you know who those people are. To everyone else, they're just faces.

It's an interesting concept, but I have to admit the security ramifications make me wonder. I'm sure it's not exactly SOX-compliant (the rules are probably arcane -- it is government legislation, after all), but it still sounds like it covers a lot of the bases.

Now if I can just convince someone around here to let us try it out...";s:10:"post_title";s:48:"Using captcha instead of usernames and passwords";s:13:"post_category";s:1:"0";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:48:"using-captcha-instead-of-usernames-and-passwords";s:7:"to_ping";s:0:"";s:6:"pinged";s:69:"
http://fuzzz.gaulin.ca/2007/04/17/say-bye-bye-password-hello-vidoop/";s:13:"post_modified";s:19:"2007-04-18 13:09:25";s:17:"post_modified_gmt";s:19:"2007-04-18 19:09:25";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:82:"http://www.sowrey.org/2007/04/18/using-captcha-instead-of-usernames-and-passwords/";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"5";}}