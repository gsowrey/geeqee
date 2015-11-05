=“;V<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":25:{s:2:"ID";i:461;s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2006-05-20 15:41:19";s:13:"post_date_gmt";s:19:"2006-05-20 22:41:19";s:12:"post_content";s:14744:"Websites are a hugely powerful information medium -- they can entertain, endorse, educate, even drive a sale. But only if they engage. These are basic elements for anyone in the interactive marketing. Without them, websites are little more than electronic brochures, offering nothing new to anyone reading them.

The web/interactive industry has placed a lot of emphasis on the overused (and insufficiently understood) buzzwords <acronym title="Asynchronous Javascript And XML"><a onclick="window.open(this.href);return false" href="http://www.adaptivepath.com/publications/essays/archives/000385.php">AJAX</a></acronym> and <a onclick="window.open(this.href);return false" href="http://www.oreillynet.com/pub/a/oreilly/tim/news/2005/09/30/what-is-web-20.html">Web 2.0</a>. (The articles linked are the seminal sources of the two trends.) Buzz though they may be, they refer to the increasing demand on websites to produce interactive experiences that go beyond simple pages with forms, links, and copy.

(Under the "definition" of Web 2.0, there is much more than interactivity. Community is a significant aspect of Web 2.0's direction. This article is concerned with the interface -- the <em>interactivity</em> -- of a given website. The more advanced aspects of Web 2.0 are left for future discussions.)

Website development (not necessarily the <em>technical</em> development -- this applies to the overall process), however, often neglects to view websites holistically. The prime offender is when Flash is rolled into the mix, and the project branches into two entirely separate streams. The Flash stream takes on a life of its own, and the other stream often withers away as a result of resource division (and diversion). Given the interactive and accessible requirements of a website project, this is recipe for failure.

What makes a successful website? It's not just budget adherence and customer satisfaction. Does the project meet is requirements? Is it accessible to the planned audience? Does it deliver the message regardless of how the user interacts with the site?

<h3>Thinking About Users</h3>

Users aren't always people. We tend to always think about users in human terms. Ultimately, websites are designed for humans, but the number of users goes beyond the human element. No two users of a website are the same. Some users are high-end computers with every possible option in its best possible configuration -- they can get the full experience with no complaint. On the opposite end of the scale are automated users that read content in sites and follow links, such as search engine spiders.

A user is any device that will access and process the instructions of a website. It doesn't matter if the user is high-end, low-end, or any point in between -- there should be no difference in importance between users. All are valid, all have something to contribute or gain from a website, and you cannot profile which of those users will have the greatest impact on a website's success.

Every user agent that can access the internet reads a website's structure and the content it contains: the browsers (IE, Firefox, Netscape, etc.); search engines (Google, Yahoo!, MSN, etc.); cellphones, PDAs, and other mobile devices; even the odd refrigerator. All have different requirements and needs -- but we can account for them all by thinking of our websites in a different way.

Funny thing about those users, though: you can put them in a line and list in order from needing the least support to the most support. In effect, creating a baseline and stating the interfaces than can be layered upon it, including incremental layers for those users in the middle ground.

<h3>Building Websites in Layers</h3>

At their most basic level, websites offer information. How that information appears to a person viewing the site is where things get interesting. In the past, we have viewed only small aspects of a site, namely the ultimate deliverable: how it appears. The implementation comes as a second thought. That secondary focus introduces a lack of focus on the overall solution -- not by necessity, but by side effect. The goal is to view the entire solution and refocus the view.

Websites aren't a single deliverable -- they're a result of four aspects: content, structure, functionality, and presentation. Each of these aspects contain specific elements that deliver the end result. Some refer specifically to the content, some to the technology. Years of design development have standardized both content and structure. They are well known and understood. Due to the ever-changing nature of technology and the desire to create even more immersive experiences, the definitions of functionality and presentation are in near-constant evolution and have a wider range of definition.

<a onclick="window.open(this.href);return false" href="http://www.sowrey.org/images/soapbox/aspects.gif"><img width="200" title="Aspects of website components" src="http://www.sowrey.org/images/soapbox/aspects.gif" /></a>

Content is mostly text, images, and video, feeding into structure: HTML or XML. Application logic and databases are fed by (and feed) HTML and XML. HTML and XML feed into functionality: Flash and AJAX, which unite functionality and presentation. HTML also feeds into CSS.

Fortunately, we can account for the changing nature by building on what is well understood, layering on successive abilities much as you would add slices to a layer cake. It doesn't matter if it's plain HTML, HTML with CSS, AJAX, or Flash -- it's all layers of functionality and presentation.

We used to talk of building "HTML sites" or "Flash sites". In "Flash sites", HTML is regarded as little more than for launch pages. The danger in thinking that we should separate HTML and Flash in this way is that we lose a major avenue for reaching an audience. Content is locked in Flash, cutting accessibility for some users, such as mobile devices, search engines, and screen readers. We don't need a different paradigm -- just add a new paradigm to see things in a different way. Going forward, we should consider HTML and Flash two be layers of the <em>same</em> website.

First, a redefinition of presentation. Typically, presentation is the last of the four aspects, and deals with the final appearance of a given webpage. "Presentation" covered everything that was past showing just the "raw" rendered HTML. But presentation shouldn't be so broadly defined when taken in context with the user spectrum. Presentation can mean different things to those users, especially in how we can target the final view that they can see. So in addition to considering a spectrum of users, we need to consider a spectrum of presentations:

<ol>
	<li>Unformatted HTML</li>
	<li>HTML with Minimal Layout</li>
	<li>HTML with Full Layout</li>
	<li>HTML with Full Layout and Client Functionality</li>
	<li>HTML with Full Layout and Client/Server Functionality</li>
	<li>HTML layered with Rich Media</li>
</ol>

These are <em>considerations</em>, not requirements. While putting all of these into a final website would be ideal, it's often too cost-prohibitive to do so, and there might not be any real benefit. Budget limitations will also constrain the list those that will produce the best return on investment (CSS 1.0 support isn't really necessary if you're not working on PDAs or cellphones, or worrying about browsers released prior to 2002). For the purposes of discussion, we won't worry about costs or limitations.

Consider the spectrum of presentations to be cumulative -- each successive layer builds on the former, and parts of each aspect feed in to successive aspects. Thus each successive layer adds additional features and abilities not present in previous layers.

<a onclick="window.open(this.href);return false" href="http://www.sowrey.org/images/soapbox/layers.gif"><img width="200" title="Aspects of website components" src="http://www.sowrey.org/images/soapbox/layers.gif" /></a>

<ul>
	<li>Content (text, images, and video) feeds every layer.</li>
	<li>HTML (as structure) feeds into every layer.</li>
	<li>CSS feeds into every layer except unformatted HTML.</li>
	<li>JavaScript feeds into the client and client/server layers, and forms some basis for the Rich Media layer.</li>
	<li>Flash feeds only into the Rich Media layer.</li>
</ul>

<h4>Unformatted HTML</h4>
This is as it sounds -- the rendered HTML, sans any form of formatting (beyond what the browsers apply natively). It's the simplest way of presenting a website, but you're left to the whims of the user reading the information. (Remember, a user in this case is not a person, but generally software.)

This option is important to note for one particular reason: there are users that don't care about what the website actually looks like. They're concerned only with the content that appears in them: primarily text and images. It's not just search engines, though (we'll ignore the fact that they often do "snapshots" of a website's homepage that does include the presentation) -- think of software to support disabled persons. Users such as that parse only the structure to obtain the correct order for reading out content.

<h4>HTML with Minimal Layout</h4>

Older browsers and mobile devices (cell phones and PDAs), among a few types of users, are limited in their ability to process layout. This is sometimes due to using technology based on older standards, or due to perceived limitations of the specific medium.

In cases such as these, "layout" is subjective -- there is little positioning of elements on the page. Due to the level of technology, the majority of support is for basic colour, font definitions, and some minor formatting. This level of support is ideal for the minimalistic agents, which do not require much formatting to present an adequate user interface.

<h4>HTML with Full Layout</h4>

Full layout -- a complete presentation of a design -- is the basis for the goal of a website. It defines the interface parameters and the basic interactive ability. Ultimately full layout defines the branding for the website.

Full layout is generally only supported with the most recent browser set, ones that fully support W3C standards (the stand standards that allow full layout). Very few browsers are considered to be fully-compliant, as according to the <a onclick="window.open(this.href);return false" href="http://www.webstandards.org/act/acid2/">Acid2 test</a>, so even the most recent browsers have some incompatibilities with the expected result. Full layout-capable browsers include (but are not necessarily limited to):

<ul>
    <li>Internet Explorer (Windows platform only)
    <ul>
        <li>5.5 (some incompatibilities)</li>
	<li>6.0 (minor incompatibilities)</li>
	<li>7.0 (soon-to-be released, unknown incompatibilities)</li>
    </ul>
    </li>
    <li>Safari (Mac OS X platform only)
    <ul>
	<li>1.2 (minor incompatibilities)</li>
    </ul>
    </li>
    <li>Mozilla-class (Windows and Mac platforms; UNIX platforms by implication)
    <ul>
	<li>Firefox 1.x (some minor incompatibilities)</li>
	<li>Netscape 7.x (minor compatibilities)</li>
	<li>Netscape 8.0 (minor compatibilities)</li>
	<li>Camino 1.x (Mac only)</li>
	<li>Mozilla 1.7+ (minor incompatitibilies)</li>
	<li>AOL 7.0 (some incompatibilities due to additional AOL interface)</li>
</ul>
</li>
	<li>Opera (Windows and Mac platforms; UNIX platforms by implication; unknown support in mobile-supported Opera browsers)
<ul>
	<li>7.x (some incompatibilities)</li>
	<li>8.x (minor incompatibilities)</li>
	<li>9.x (currently in beta; possible full support)</li>
</ul>
</li>
</ul>

Not all of these browsers should be directly supported in active development of a website. There is a cost consideration for support, due to the inconsistencies across browsers. Although these inconsistencies are considerly fewer than in previous browser generations (notably the differences between Netscape 4.x and Internet Explorer 4.x), they still incur additional time and effort to correct. As such, we should always conduct a proper profile of client websites before recommending a supported browser set.

<h4>HTML with Full Layout and Client Functionality</h4>

A "flat" layout fulfills most of the needs of a website. Additional functionality is sometimes required to meet specific needs. Examples include simple form validation, drop-down menus, and even animations.

This functionality is restricted to the client -- to the browser. Whatever functionality that occurs does so with the browser's context. The goal is to add some additional ability to a website, either to enhance someone's interaction with a website or to provide a better overall experience. It should be noted, however, that this functionality might not actually benefit all <em>users</em>, since they do not interpret or process all client-side functionality.

From this point forward, the additional layers cease to have effect for all users. Only the higher-end users that can make full use of the layer's ability will see a difference. Lower-end users (such as search engines) do not gain anything additional from the layers as they do not interpret that layer's additional information.

<h4>HTML with Full Layout and Client/Server Functionality</h4>

The next layer extends functionality past the browser to connect with a server. This allows data interchange beyond the normal HTTP client/server paradigm. (This refers to the normal page request/reload behaviour.)

As a result of bypassing the normal client/server behaviour, we can introduce additional functionality to allow people to interact with server-maintained information and data. Such response times are often very low when compared to page reload, and without the actual page reload occuring, the overall experience with the site is greatly enhanced.

<h4>HTML layered with Rich Media</h4>

Rich media is often viewed as the ultimate way of presenting a website, sometimes at the expense of other requirements. When this happens, the rich media aspect can take on a life of its own, and it loses focus on the holistic requirements of the website. But these are issues with creation and management of rich media -- the layer itself is still of benefit.

Rich media -- such as Flash -- can add a very powerful interactive layer to a website, providing additional functionality combined with strong visuals. The key to the successful use of rich media is to enhance the existing content, functionality, and presentation through the medium's abilities -- not to present a dramatically different approach to the presentation.";s:10:"post_title";s:37:"Layered Interfaces: Setting the Stage";s:13:"post_category";s:1:"0";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:36:"layered-interfaces-setting-the-stage";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2006-12-17 21:35:53";s:17:"post_modified_gmt";s:19:"2006-12-18 04:35:53";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";i:0;s:4:"guid";s:80:"http://www.sowrey.org/index.php/2006/05/20/layered-interfaces-setting-the-stage/";s:10:"menu_order";i:0;s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";s:6:"filter";s:3:"raw";}}