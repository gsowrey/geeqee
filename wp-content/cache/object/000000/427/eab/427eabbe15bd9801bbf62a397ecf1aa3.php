׎;V<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":25:{s:2:"ID";i:937;s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2008-04-24 01:17:16";s:13:"post_date_gmt";s:19:"2008-04-24 07:17:16";s:12:"post_content";s:4062:"Room is huge and darn near packed. I get the feeling this is gonna be a good one. I think I'm going to have to type quickly for this one.

<!--more-->Presenter: Jacob West (Fortify Software)
<ul>
	<li>Jacob runs the security research group</li>
	<li>First off, the ubiquitous "what is Ajax" shtick</li>
	<li>It's trivial to make the mistake, such as echoing a request parameter (easy to slip scripting into the request string)</li>
	<li>There are over 400 JavaScript CVE (Common Vulnerability Enumeration) problems</li>
	<li>Lots of different libraries, but few actually get them "right". GWT and Atlas are the two best.</li>
	<li>Examples of bad Ajax:
<ul>
	<li>MySpace allowed input of subset of HTML, which included poorly formatted HTML (java\nscript) to execute code; Samy worm brought down MySpace</li>
	<li>Port scanning behind firewalls
<ul>
	<li>request images from internal IPs (192.168.x.x) -- if timer doesn't time out, you know a server is there</li>
</ul>
</li>
	<li>Jikto
<ul>
	<li>Billy Hoffman built a vulnerability scanner in JS</li>
	<li>Looks for XSS, uses Google as a proxy to bypass same origin policy
<ul>
	<li>Loaded his script, and the victim's page inside Google Translate, where they became the same domain</li>
</ul>
</li>
	<li>Allowed to operate as a worm by inserting it as a snippet into a vulnerability</li>
</ul>
</li>
</ul>
</li>
	<li>No new vulnerabilities -- XSS has existed a long time -- just better exploits</li>
	<li>Basic rule: echoing parameters recieved through URL strings is pretty much as bad as it gets</li>
	<li>Input validations on the client side can be a serious risk -- important that validation is handled carefully</li>
	<li>Dirty-data shooters use known exploits, SQL injection, etc. that use Web 1.0 conventions to show exploits
<ul>
	<li>Looks like conventional testing software</li>
</ul>
</li>
	<li>Cross-Site Request Forgery allows attacker to submit request on behalf of the victim
<ul>
	<li>It can make requests, but can't see the data (security remains intact for responses); it hopes the attack is malicious</li>
</ul>
</li>
	<li>JavaScript hijacking
<ul>
	<li>Builds on CSRF</li>
	<li>Breaks confientiality through loophole in SOP</li>
	<li>Has some very subtle approaches that include modifying the constructor</li>
	<li>NOTE: Need to engage a couple of brains on this for white paper; there are some potentially serious dangers I think we're not handling well</li>
</ul>
</li>
	<li>Prevent CSRF
<ul>
	<li>Require unique tokens to allow execution</li>
	<li>Default to POST not enough, nor checking known HTTP header (e.g. referrer) not enough</li>
</ul>
</li>
	<li>Prevent execution of JavaScript
<ul>
	<li>while(1);/* ... */, etc. at the beginning of the returning scripts to ensure they won't run</li>
</ul>
</li>
	<li>State of the frameworks
<ul>
	<li>Most do NOT prevent hijacking (including Prototype, jQuery)</li>
	<li>When contact, most of the libs didn't care</li>
	<li>JSON standard doesn't cover any security, and Fortify's suggestions have been largely decried as unnecessary and/or bad</li>
</ul>
</li>
	<li>Libs fixed:
<ul>
	<li>Dojo 0.4.3 (JSON only, not JS), DWR 2.0, Prototype 1.5.1</li>
	<li>All use the comment trick (/* ... */) to protect the code</li>
	<li>GWT, Mochikit, Script.aculo.us are coming soon</li>
	<li>Microsoft and Yahoo said they will not fix it</li>
</ul>
</li>
	<li>There are ways of setting up tests to check for vulnerabilities; they are non-trivial, but important in cases of transactional Ajax</li>
	<li>Frameworks need to put more security in them to prevent hijacking</li>
	<li>Need better web standards
<ul>
	<li>cookies need to be HTTP-only headers</li>
	<li>browsers have to distinguish between scripts from different domains</li>
	<li>Note: Flash has most of these issues already addressed</li>
</ul>
</li>
	<li>Result: mashups aren't secure. Maps okay, but confidential data is vulnerable</li>
</ul>
[flickr]tag:darksideofajax+web20expo@Geoff S.(thumb)[/flickr]";s:10:"post_title";s:35:"Web 2.0 Expo: The Dark Side of Ajax";s:13:"post_category";s:1:"0";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:33:"web-20-expo-the-dark-side-of-ajax";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2009-09-07 17:31:14";s:17:"post_modified_gmt";s:19:"2009-09-07 23:31:14";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";i:0;s:4:"guid";s:28:"http://www.sowrey.org/?p=937";s:10:"menu_order";i:0;s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";s:6:"filter";s:3:"raw";}}