׎;V<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":25:{s:2:"ID";i:936;s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2008-04-24 01:08:19";s:13:"post_date_gmt";s:19:"2008-04-24 07:08:19";s:12:"post_content";s:3688:"Last session before lunch. Freaking hungry (no boiled eggs at breakie this morning). Might take off a bit early to get a jump on lunch and battery charging.

<!--more-->Presenter: Ryan Sarver
<ul>
	<li>Context is about location -- what's nearby?</li>
	<li>Location comes in different flavours (geocodes, street addresses, polygons, lat/longs, etc.)
<ul>
	<li>also level of detail (at a specific point vs. city vs. neighbourhood)</li>
	<li>Location names (e.g. SoMa) are also contextual -- it might make sense in San Fran, but not in London</li>
</ul>
</li>
	<li>Markers on maps can be tricky, since the marker might not necessarily be where the person is (oh, how we know this one...)</li>
	<li>my.loki.com shares location with friends (I think I have an account there... can't remember)</li>
	<li>geotargeting rules of thumb:
<ul>
	<li>offer everything you can</li>
	<li>degrade gracefully</li>
	<li>allow the user to change it</li>
	<li>know your users, know your use cases!</li>
</ul>
</li>
	<li>tip: if you're building a site, work on lat/long (or geocode), not zip/address</li>
	<li>where does location happen? client and network!</li>
	<li>Fire Eagle links in with Dopplr to sync future destinations based on travel</li>
	<li>desktop web profile
<ul>
	<li>stationary sessions (single location lookups, initial hits)</li>
	<li>gps and cell towers don't work (no line of site, bad accuracy)</li>
	<li>easier data entry</li>
	<li>more complex data can be displayed</li>
</ul>
</li>
	<li>mobile profile
<ul>
	<li>transient sessions (always moving)</li>
	<li>indoors and outdoors (ip doesn't work)</li>
	<li>difficult data entry (keyboard's a pain, so think shortcuts)</li>
	<li>small screen size, low computing power -- be "power-aware"</li>
</ul>
</li>
	<li>geolocation methods
<ul>
	<li>triangulate (Wi-Fi, GPS, cell tower; GPS most accurate)</li>
	<li>association
<ul>
	<li>match an ip address to a physical location</li>
	<li>best for city-level geotargetting</li>
	<li>false positivies and only ~85% in the same State (let alone country)</li>
	<li>Quova, IP2Location, MaxMind major vendors (validates that we chose a good one)</li>
</ul>
</li>
	<li>geo term extraction
<ul>
	<li>resolve an arbitrary string into a geographical point or area ("food in cambridge" = "food" in "Cambridge, Mass., USA")</li>
</ul>
</li>
</ul>
<ul>
	<li>
<ul>
	<li>metacarta query parser (metacarta.com)</li>
	<li>urban mapping geomods (urbanmapping.com)</li>
</ul>
</li>
</ul>
<ul>
	<li>geocoding
<ul>
	<li>resolving a geographically based string into a geographical point or area</li>
	<li>several vendors for this (missed it due to a phone call)</li>
</ul>
</li>
</ul>
</li>
	<li>Location in the browser
<ul>
	<li>locationaware.org</li>
	<li>navigator.getGeolocation()</li>
	<li>Anyone else think this is making too big a hope? Sure, the W3C is working on a standard, but this strikes me as something that'll never happen.</li>
</ul>
</li>
	<li>mobile location
<ul>
	<li>iPhone Core Location API (WiFi, cell tower); not available in browser, but can be used through API</li>
	<li>Symbian S60 Location API (GPS, A-GPS)</li>
	<li>J2ME JSR-179 (GPS, device-specific)</li>
	<li>Skyhook SDK (shyhookwireless.com)</li>
	<li>WHERE Widgets (developer.where.com); made deals with many of the US carriers, and created a widget set to cover the functionality</li>
</ul>
</li>
	<li>Cell tower apps
<ul>
	<li>Zone Tag (Yahoo)</li>
	<li>OpenCellID</li>
	<li>CellDB</li>
</ul>
</li>
	<li>Not a lot of international APIs, most are US-only</li>
</ul>
[flickr]tag:whereinmobileandweb+ryansarver@Geoff S.(thumb)[/flickr]";s:10:"post_title";s:59:"Web 2.0 Expo: Adding "Where" to Mobile and Web Applications";s:13:"post_category";s:1:"0";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:55:"web-20-expo-adding-where-to-mobile-and-web-applications";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2009-09-07 17:31:20";s:17:"post_modified_gmt";s:19:"2009-09-07 23:31:20";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";i:0;s:4:"guid";s:28:"http://www.sowrey.org/?p=936";s:10:"menu_order";i:0;s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"3";s:6:"filter";s:3:"raw";}}