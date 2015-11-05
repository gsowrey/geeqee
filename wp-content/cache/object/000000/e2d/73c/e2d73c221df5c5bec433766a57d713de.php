 �;V<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":24:{s:2:"ID";s:3:"699";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2007-04-18 15:56:03";s:13:"post_date_gmt";s:19:"2007-04-18 21:56:03";s:12:"post_content";s:5144:"This one is the current industry buzz. Basically, <a href="http://www.webdevout.net/articles/beware-of-xhtml">a slam against XHTML</a> and a suggestion to return to HTML 4.01 in lieu of using XHTML 1.0 (or 1.1).

You know I can't let this go without a comment ... or three. ;)

<!--more-->Okay, so first the basics: the <a href="http://w3.org/">W3C</a> effectively ended HTML standards development in December 1999 with the release of <a href="http://www.w3.org/TR/html401/">HTML 4.01</a>. <a href="http://www.w3.org/TR/xhtml1/">XHTML 1.0</a>, a "reformulation of HTML 4 in XML 1.0" was released barely a month later. XHTML was deemed to be "better" because of its basis in XML, and the belief that XML would be the future for browsers.

Back then, it made sense. A lot of HTML was horribly abused, giving rise to such abhorrences such as the bold, italics, and font tags, and the use of HTML tables for layout. It was believed that a shift to a more "standards-complaint" tag language (in combination with better CSS use) would bring an end to all that was evil.

But.

One problem: XHTML, ideally-speaking, is an XML application. Therefore, it needs XML-based programs to process it properly. None of the bigger browsers do. Most of the major browser developers even suggest:
<blockquote>If we tried to support real XHTML in IE 7 we would have ended up using our existing HTML parser (which is focused on compatibility) and hacking in XML constructs. It is highly unlikely we could support XHTML well in this way.

<cite>Microsoft (Internet Explorer)</cite></blockquote>
<blockquote>If you are using the usual HTML features [...] serving valid HTML 4.01 as text/html ensures the widest browser and search engine support.

<cite>Mozilla (Firefox)</cite></blockquote>
<blockquote>On today's web, the best thing to do is to make your document HTML4 all the way. Full XHTML processing is not an option, so the best choice is to stick consistently with HTML4.

<cite>Apple (Safari)</cite></blockquote>
<blockquote>I don't think XHTML is a realistic option for the masses. HTML5 is it.

<cite>HÃ¥kon Wium Lie (from Opera, W3C)</cite></blockquote>
<blockquote>I'm an advocate of using XHTML only in the correct way, which basically means you have to use HTML. Period.

<cite>Anne van Kesteren (from Opera)</cite></blockquote>
<blockquote>Authors intending their work for public consumption should stick to HTML 4.01.

<cite>Ian Hickson (from Opera, Google, W3C)</cite></blockquote>
I'm a little torn, to say the least. Yes, it's true to say that XHTML never got the the lofted position it could have reached. Because no-one developed for it. All the Web Developers rushed to it for the standards-compliance and the XML-like coding methodology. But there's <a href="http://www.schillmania.com/content/entries/2004/10/24/application-xhtml+xml/">no support for what it truly could do</a>.

The article goes on at length pointing out all the major issues:
<ul>
	<li>XHTML does not point out anything new for structure, separation of content and presentation, proper tag use, etc. than HTML already provided</li>
	<li>XHTML as a standard is not actually well-supported, nor is it any faster than HTML</li>
	<li>The "strength" of failing on invalid markup is a benefit from XML, but that valid markup doesn't mean it's well-formed</li>
	<li>When XHTML is served as text/html instead of application/xhtml+xml, there is no benefit (really) to using HTML</li>
	<li>Internet Explorer doesn't support XHTML at all</li>
</ul>
So where does this leave us? Do we all abandon XHTML and retreat to HTML 4.01? (Despite HÃ¥kon suggesting that HTML 5 is on the way, we're a very long way from that being a reality in the majority of browsers. You could also go conspiracist and suggest that this is just a ploy to get people to sign on with the <a href="http://www.whatwg.org/">WHAT-WG</a> and their new <a href="http://www.whatwg.org/specs/web-apps/current-work/">Web Applications 1.0 working draft</a>, conveniently released today.)

Tim Berners-Lee must be spinning in his grave. Well, if he were dead. Which he isn't.

I think it depends how you use XHTML. You can't use it as the specification says you should. But can you use the <em>principles</em> in coding practices to at least achieve a consistent and reliable use in development practices? We do.

In fact, until someone mentioned the proper use to me a couple of years ago, I'd never even paused to really consider that aspect of XHTML. For me, it was all about working through standards and making them work better for us. Something we achieved.

Frankly, I don't want to roll back to HTML 4.01. Too many negative connotations for me. I'll continue to use "XHTML" to help ensure better code consistency. When XHTML 2 or HTML 5 actually roll out a door and are properly supported in a browser, then I'll move.

I imagine that'll be the day when when pigs fly, the cow jumps over the moon, or we discover the lost city of Atlantis. Frankly, I think they've got as much a chance of happening as proper and complete adoption of a new/better HTML standard.";s:10:"post_title";s:15:"Beware of XHTML";s:13:"post_category";s:1:"0";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:15:"beware-of-xhtml";s:7:"to_ping";s:0:"";s:6:"pinged";s:51:"
http://www.whatwg.org/specs/web-apps/current-work/";s:13:"post_modified";s:19:"2007-04-18 15:58:24";s:17:"post_modified_gmt";s:19:"2007-04-18 21:58:24";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:49:"http://www.sowrey.org/2007/04/18/beware-of-xhtml/";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}