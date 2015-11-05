=“;V<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":25:{s:2:"ID";i:462;s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2006-05-27 15:44:01";s:13:"post_date_gmt";s:19:"2006-05-27 22:44:01";s:12:"post_content";s:21731:"The [[Layered Interfaces: Setting the Stage|previous article introduced the idea of creating layers]] when building a website. It's not a new concept -- similar ideas have existed in computer science for decades. Even in terms of web development, the ideas are not unfamiliar. But in terms of specifics -- <em>how and why</em> the layers are put together -- the ideas are still developing.

This part of the discussion focuses on the technical aspects of layering -- what needs to happen for everything to work properly, and in what order. The components of HTML, CSS, JavaScript, and Flash are key concerns.

<h3>Structure is Important</h3>

HTML is far from dead. HTML is the start of a website, the structure that defines the context of individual pages, of entire websites, and of the World Wide Web itself (for it defines the links that bind it all together). It is greatly misunderstood and maligned for perceived shortcomings. It is viewed as basic, minimalistic, and incapable of growth beyond its core definitions. Ironically enougn, it is because of its minimalistic purpose that HTML (and it's successor, XHTML) that we can form the basics of a website.

For the sake of simplicity, I'm going to use just the term "HTML" from here on. Assume that where I've written "HTML", you can also write "XHTML".

Structure provides context. Text on a page is merely text. But with context, text is organized into elements that can be used for a variety of needs. The structure feeds into (almost) every aspect and layer of a website. At its most basic level, structure allows search engines to derive headings, lists, paragraphs, links, and meta data so they can categorize the text. Both search engines and screen readers use the structure context to know what they are reading.

But structure lends its hand to other parts of webpage construction. CSS connects to the HTML structure to create layout (from basic to full). JavaScript connects to IDs and elements in the structure to enable functionality. The same structural context can be read by Flash components to create layouts and elements needed to make a functional interface. HTML needs to form the basis of every single webpage, no matter the final presentation layer.

<h3>Componentized HTML</h3>

HTML should be written to be componentized: where individual sections of a page might be identified and modified (either through CSS or JavaScript) in successive layers. This requires the proper use of IDs and classes, and ensuring that enough structure has been added to allow individual sections to be manipulated without modify adjacent sections as well.

I'm not going to write up a sample HTML to illustrate my point ... because there's one handily present: just <a onclick="window.open(this.href);return false" href="view-source:/index.php/2006/05/27/layered-interfaces-getting-technical/">view the source of this page</a>.

Each page on this site has a specific structure, looking something like this:
<ul>
	<li>container
<ul>
	<li>header</li>
	<li>wrapper
<ul>
	<li>nav</li>
	<li>content</li>
</ul>
</li>
	<li>menu
<ul>
	<li>main</li>
	<li>sub</li>
</ul>
</li>
	<li>footer</li>
</ul>
</li>
</ul>

It might seem like a waste to have such a high-level item such as "container". What does it do? Why not bump everything else up a level? If you want a really good reason why something like this has value, you only need see the <a onclick="window.open(this.href);return false" href="http://www.csszengarden.com/">CSS Zen Garden</a>. One structure, a thousand designs. The principle isn't so much for contextualization as it is flexibility with document presentation. You could do without it, but its presence is beneficial and doesn't take away from the technical implementation. The same principle applies with the subsections, such as "wrapper" and "menu".

<h3>The Basics of Presentation</h3>

So your HTML structure is set, eh? Great, now you can move onto the next layer of your presentation: Minimal layout. This is meant to support earlier users that do not have an adequate understanding of CSS. This implies CSS 1.0, specifically:

<ul>
	<li>font definition (for all headers, paragraphs, lists, links, etc.)</li>
	<li>some colour definition (primarily for text, but some other elements are also supported in CSS 1.0)</li>
	<li>minimialistic layout (width and height)</li>
</ul>

Specific layout, referring to the positioning of elements on a page, is left for the Full Layout step.

The basic presentation is to provide an elegant degradable experience for those with inadequate support. Through basic support, without customization for specific (e.g. mobile) users. Similarly, basic presentation should avoid cross-browser issues inasmuch as possible. Cross-browser issues tend to arise with higher-level abilities such as positioning, which are beyond the context of basic needs.

The basic CSS should be contained in a single file, <strong>base.css</strong>, loaded using a <code>&lt;link&gt;</code> element in HTML. Basic presentation can be enhanced and/or overridden by successive CSS files as needed. Most known agents support loading with a <code>&lt;link&gt;</code> element:

<code>
&lt;link rel="stylesheet" xhref="/styles/base.css" type="text/css" /&gt;
</code>

Care needs to be taken that these definitions are readily accessible for use in Flash. As Flash does not yet support CSS positioning, it is important that fonts and colours carry into Flash as readily as they in the Minimal Layout layer.

Now I know what you're thinking: Am I truly suggesting maintaining <em>TWO</em> CSS files for a site? One with minimal layout, and one with complete layout?

Yes and no. First off, you can quite easily take your final CSS and cut it down so it's just the minimal layout that'll be supported in CSS 1.0 without difficulty (you might need to make some minor edits to accomodate for things like minimized attributes). With luck, you won't need to modify your Minimal Layout very often, as it's ... well ... minimal.

However, two files might not actually be enough. Especially when you're dealing with a development team where several people might be editing the presentation. But that's a discussion for...

<h3>Taking Position</h3>

With the basic presentation in place, we can look to enhancing the basic definitions with those needed for the Full Layout experience. As mentioned in [[Layered Interfaces: Setting the Stage]], support should only be for those browsers capable of handling CSS 2.1. (The list of suggested browsers is also provided in Part 1.) Although support could certainly be added for other browsers in the list, additional work will often be required to overcome compatibility issues present in those agents.

Right off the top, we can cut out the browsers that don't support CSS 2.1 by including CSS 2.1 instructions using the <code>@import</code> directive:

<code>
&lt;style type="text/css"&gt;
@import url("/styles/global.css");
&lt;/style&gt;
</code>

(As a point of note, do not try to restrict yourself to a single CSS 2.1 file. Large sites might require multiple files to adequately support presentation initiatives.)

One flawed technique to "detect" browsers is to use CSS hacks -- exploiting the differences between the browsers' capability to parse CSS. A simple intentional mistyping of CSS instructions can cause some browsers to skip over (or specifically target) specific instructions. This is an actively discouraged technique, as browser vendors tend to correct the parsing inconsistencies with successive updates, requiring active monitoring of the hacks.

The only hack I particularly like -- only because it's actually safe to use -- is one that hides CSS from Internet Explorer on the Mac. This now-dead product hasn't died away yet, and is notoriously incompatible with CSS written for other browsers. A simple edit to the <code>@import</code> block does away with this rather troublesome browser:

<code>
&lt;style type="text/css"&gt;
/* import stylesheets and hide from ie/mac \*/
@import url("/styles/global.css");
/* end import/hide */
&lt;/style&gt;
</code>

(Thanks to <a onclick="window.open(this.href);return false" href="http://www.simplebits.com/notebook/2006/03/16/arkanoid.html">Dan Cederholm</a> for that little trick.)

Preferred methods include using <a onclick="window.open(this.href);return false" href="http://www.quirksmode.org/js/detect.html">JavaScript detection and loading</a>, using third party applications (such as <a onclick="window.open(this.href);return false" href="http://www.cyscape.com/">BrowserHawk</a>), or methods internal to the browser (such as Internet Explorer). These each have the drawbacks, however, and are not always ideally suited to the general task. JavaScript detection is the most flexible, but can require significant maintenance. Third party applications can be expensive and often require annual licensing. <a onclick="window.open(this.href);return false" href="http://www.quirksmode.org/css/condcom.html">Internet Explorer's internal detection</a> works only for Internet Explorer browsers.

No matter the specific method, the concept is the same: detect the specific browser and load a specific CSS file to compensate. This process should only be carried out in cases where it is necessary -- CSS must be kept simple and maintainable.

<h3>Function after Form</h3>

With the layout all in place, it is possible to move to adding additional functionality. JavaScript is best used when the layout has been set in place (or at least well-established). Not all websites require additional functionality -- this site, for example, has almost none. In fact, the only functionality that plays well to the user experience is a JavaScript method that opens the current year in the Journals section. There are other methods, but they do not add any benefit to the user (it's all reporting information).

JavaScript should always be invisible to the user. In the past, developers often embedded large blocks of JavaScript directly in the <code>&lt;script&gt;</code> blocks in HTML, and even inlined with the code. It wasn't uncommon to see image rollover code in links containing the image in question. (I'll freely admit being guilty of all of this, incidentally.) Those were the old days ... these days, we know better.

JavaScript should never be directly inserted in HTML unless 100% unavoidable. Acceptable exceptions include code required to support reporting tools such as Omniture, which requires a JavaScript variable to be set per-page. Yes, you could manage these in external files, but the benefit is lower than putting it in the page itself.

Scripts should initialize through the <code>document.onload()</code> event whenever possible (some scripts do need to run during page load) to minimize interference. The obvious question is how -- there's only one event, so how do you initialize a dozen objects? Attach a method to <code>document.onload()</code> that performs an <code>eval()</code> on an array of methods you need to run. Simply add them to the global-defined array as the scripts are loaded, and they'll be executed automatically.

It's important to note this process of initializing objects on document load. Because no elements in the HTML have any inline JavaScript, you need to make sure that the objects can "see" the JavaScript. Some browsers -- Internet Explorer most notoriously -- does not see objects properly until the page has finished loading (and the <code>document.onload()</code> event fires). That's when additional functionality can be added to the page. This can extend to rollovers, menu flyouts, animations, or windowing events -- anything you can think of.

Let's take the windowing event as an example. If you view the source of this page, you'll see <code>onclick="window.open(this.href);return false"</code> in all of the <code>&lt;a href...%gt;</code> entries that go off-site. This is to open a new window without fear that users with disabled JavaScript won't be able to navigate. That's the key thing to focus on -- users (and that includes search engines!) that do not parse JavaScript and therefore do not gain any additional functionality from it. Your website should be usable with JavaScript turned off.

Anyway, to my point -- my site still has inline JavaScript, for the simple reason that I just haven't had time to do anything about it yet. What I should have is an additional marker in my HTML: <code>rel="ext"</code>. Innocuous. But a JavaScript method can easily find these entries in <code>&lt;a&gt;</code> tags, and append a DOM event to open a window if a user clicks on the link.

Another example: Image galleries. (Yes, mine needs a lot of work. I know.) Don't load more than one image. Don't even throw in any additional linkage if you don't have to. Load it all through JavaScript. Attach DOM objects and methods to allow better image viewing without overloading the HTML with functional equivalents. A perfect example of this sort of idea handled beautifully is <a onclick="window.open(this.href);return false" href="http://www.huddletogether.com/projects/lightbox2/">Lokesh Dhakar's Lightbox</a> library.

Why extract it like this? Standards aside, there is one major reason to do so: maintenance. You can either maintain a single method that makes the call, or track down potentially thousands of instances in your HTML. You do the math...

I suppose I should throw in the obligatory AJAX comment here, too. (I hate the term "AJAX" -- it's far too misleading. But it's also what everyone seems to know.) The same thing applies for advanced functionality -- the client-server stuff I mentioned back in [[Layered Interfaces: Setting the Stage]]: keep it separate, keep your site safe.

<h3>Enriching the Experience</h3>

So you've built your website completely standards-compliant. Everything is wonderful. You rank high in search engines. Everyone raves about your killer Web 2.0 application.

But your boss comes up and says: "It's fine and all ... but we want to use Flash."

Once you've managed to refrain from displaying your boss' head on a pike, relax -- it's not as bad as it sounds. Your hard work isn't going to waste, and your website is not going to lose any of its technical integrity. But it will require some forethought about your website architecture and construction to make sure your Flash layer works properly.

Here's one of the oddest secrets in the industry: Flash and HTML work very well together. So well, in fact, that you can use the HTML layer to help push content to Flash -- then use CSS to help set some of the formatting, and repurpose the JavaScript functionality. Flash can load HTML as readily as it can load XML -- and you don't have to parse parameters to extract content and context. It's already all there for you! Applying CSS is almost simplistic.

Okay, I'm getting ahead of myself. I keep forgetting Flash 10 isn't out yet. Sadly, this is the future and not the present. The reality is that Flash is <em>grossly</em> lacking HTML and CSS support. It's not nearly as good as it needs to be. But that doesn't mean you still can't integrate the two. You just need an intermediary: XML. 

We need not to think of Flash so much as a stand-alone application or a separate website onto its own, but being a part of the existing website. Flash should be layered on the very top, like adding whipped cream and a cherry to the top of your sundae -- in enchances the flavour and texture of the ice cream, but doesn't replace it. Like whipped cream, Flash is rich and offers a lot. And like too much whipped cream, too much Flash can ruin an experience.

Think of the functionality that cannot be performed using HTML, CSS, and JavaScript (a combination popularized as "DHTML"). This is where you start with Flash. Immersive functionality, blended audio and video, engaging animations -- these are Flash's hallmarks, and where it excels. These hallmarks are content; more importantly, they are <em>additional</em> content to the core content of the website (found nestled in the HTML structure). They need to be blended with the existing core content to produce the final result.

There is also the question of the Flash experience. In the standard HTTP paradigm, a request for a new page enacts a page reload -- the existing page disappears and is replaced with a new page of content. Flash is not bound by this paradigm (neither is AJAX content, mind you), and there is no reason we should enforce the paradigm just because we're making Flash a layer in our website. We should enable Flash to work with the website, but simultaneously not bind it to the website's restrictions. We'll do that in two steps.

<h4>Step 1: Building the Flash Layer</h4>

Your Flash layer should be mostly empty, containing no core content. Content should be read in from an outside source to minimize maintenance. (Less material that requires editing for content changes, and the same layer can be used for multiple languages.) The Flash layer needs to be aware of the page structure so content can be easily loaded. Being able to read the CSS to set up simple formatting is also key for maintenance, but should not constrained to positioning -- remember, Flash cannot understand CSS 2.1 ... yet.

By the way, don't even think about doing any of this in any version prior to Flash 8.

In your JavaScript functionality, there should be a detection script that determines if the user has a compatible version of Flash. If so, load the Flash layer. When the Flash layer loads, it should read the HTML of the page to populate the core content. The Flash layer should have modules that key into the page structure, providing the additional content (for animations, audio, and so forth).

<h4>Step 2: Bridging the Webpage Gap</h4>

Once Flash is loaded, there is absolutely no reason why Flash should perform like a non-Flash webpage. Put in transitions, allow animations, bring content in and out at will -- break the traditional "page" paradigm! You've got access to all the content you need already, you just need to structure it accordingly. Oh! How about that -- we already gave it structure. Convenient, non?

When the HTML structure is loaded into Flash, it also includes all the links you need to go from page to page. When a user clicks on a link to load a new batch of content, all you need to do is unload the content of the current "page" and load the new "page" content from HTML, and combine with the appropriate Flash modules. The user remains in a Flash environment, all the while seeing the new content. The bridge, when completed, should look something like this:

<a onclick="window.open(this.href);return false" href="http://www.sowrey.org/images/soapbox/flash.gif"><img width="200" title="Feeding Flash with HTML" src="http://www.sowrey.org/images/soapbox/flash.gif" /></a>

HTML pages need to load from one page to the next. Once in Flash, however, you can stay in Flash and just load the HTML content.

Why would you do all this? There's a wide range of reasons, but let's start with some of the biggest:

<ul>
	<li><strong>Accessibility</strong>. Flash is accessible, but it requires a lot of extra work to make it truly accessible. When users who require accessible websites come to yours, they might not see the Flash ... but their screen readers will see the wonderfully-written HTML that conforms to Section 508 and the WAI.</li>
	<li><strong>Users who can't see Flash</strong>. Yes, Flash has a high-90s percentage for penetration. (According to its completely unbiased creator.) But there are those users who can't see Flash. And those who can't see the most recent versions of Flash because they do not have the ability to upgrade -- their systems are under administrative lockdown. Don't cut them out of the experience.</li>
	<li><strong>Users who don't have JavaScript enabled</strong>. Depending on which statistic you see, there's 2-5% of users who have JavaScript disabled for security reasons. No Flash. But basic site functionality? No problem...</li>
	<li><strong>Search engines</strong>. Leave the best for last. Yes, Flash is readable by search engines. But Flash's indexability is horrible -- none of the content is contextual, so the search engines cannot weigh or rank items the same way they can index HTML. So let the HTML stand for the search engines, and make sure your Flash can load from specific pages. Voila! Deep linking.</li>
</ul>

Alright, I know what you're thinking ... that doesn't cover everything. And you'd be right. There is one major issue in Flash that still needs to be addressed. The dreaded browser back button.

This is not impossible, and you don't need to use framesets. You do need to use a frame of somekind, however. Luckily for us, the <code>&lt;iframe&gt;</code> is available, doesn't break any standards, and can remain hidden. It doesn't interfere with search engines, and functions as the window to the history layer, allowing for back button's functionality. As the saying goes -- where there's a will, there's a way! For a great example of how this works, check out <a onclick="window.open(this.href);return false" href="http://maps.yahoo.com/beta/">Yahoo! Maps Beta</a>.

One final note to mention with regards to Flash and working with existing structure and functionality of a website: You can use <a onclick="window.open(this.href);return false" href="http://weblogs.macromedia.com/mesh/archives/2005/10/video_of_kevin.cfm">Flash with AJAX</a>, too -- specifically using Flex 2. Just in case that's of any interest...";s:10:"post_title";s:37:"Layered Interfaces: Getting Technical";s:13:"post_category";s:1:"0";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:36:"layered-interfaces-getting-technical";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2006-12-17 21:47:09";s:17:"post_modified_gmt";s:19:"2006-12-18 04:47:09";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";i:0;s:4:"guid";s:80:"http://www.sowrey.org/index.php/2006/05/27/layered-interfaces-getting-technical/";s:10:"menu_order";i:0;s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";s:6:"filter";s:3:"raw";}}