<?php 
	$title = "Prettytextfield - jQuery plugin for creationg pretty and customizable text field";
	$description = "Prettytextfield plugin for sipmle creationg pretty and customizable text field with charcounter and smiles (emoji)";
	$keywords = "prettytextfield, jQuery, jQuery plugin, mobile, emoji, smiles, emojione, symbola";
	include_once "../inc/header.php"; 
?>

<h1>prettytextfield - jQuery pop-up plugin</h1>
<?php get_github_buttons("prettytextfield"); ?>

<h3>Main prettytextfield advantages:</h3>
<ul>
	<li>lightweight and customizable</li>
	<li>has adaptive desing, good decision for mobile site versions</li>
	<li>You can create in quick way pretty comment field for your site</li>
	<li>Creation text fild with emojis on any platform</li>
</ul>
<br>
<h1>Prettytextfield - jQuery plugin for sipmle creationg pretty and customizable text field with charcounter and smiles (emoji)</h1><br>
<h3>Example (set emoji to text in page):</h3><br style="clear: left;">
<p class="textshow">
    test text 😥🙊🙉🙈<br>
    test text🐶🐕🐕🌚<br>
    test text🐧🐕🐕🐕<br>
</p>

<h3>Example (create text filed):</h3><br style="clear: left;">
<textarea class="text" placeholder="Write you comment"></textarea><br style="clear: left;"><br style="clear: left;">

<pre><code class="language-javascript">
$.prettytextfield({
    textcontainer: ".text",
    showtextcontainer: ".textshow"
});</code></pre>
<br style="clear: left;"><br style="clear: left;">

<table class="table table-bordered">
	<caption>Settings</caption>
	<tr>
		<td>textcontainer</td>
		<td>Text writing container class or id</td>
	</tr>
	<tr>
		<td>showtextcontainer</td>
		<td>Container with text on page class or id</td>
	</tr>
	<tr>
		<td>activetab</td>
		<td>Active emojis tab by default. By default "popular-emojis", variants: symbols,animals-and-nature,food-and-drink,activity-and-sports,travel-and-places,objects,flags</td>
	</tr>
	<tr>
		<td>showintabscontainer</td>
		<td>Watch show in tab container svg icons or font, by default "auto", variants: symbol, svg</td>
	</tr>
	<tr>
		<td>pathtosvgicons</td>
		<td>You can type path to svg icons,  by default "src/icons/"</td>
	</tr>
	<tr>
		<td>showintextcontainer</td>
		<td>Watch show in page container svg icons or font, by default "auto", variants: symbol, svg</td>
	</tr>
	<tr>
		<td>textcontainerheight</td>
		<td>Write text container height, by default "300px"</td>
	</tr>
	<tr>
		<td>textcontainerwidth</td>
		<td>Write text container width, by default "100%"</td>
	</tr>
	<tr>
		<td>charcounter</td>
		<td>Show char counter, by default "true"</td>
	</tr>
	<tr>
		<td>charcounterallowed</td>
		<td>Chat counter max allowed symbols, by default 1500</td>
	</tr>
	<tr>
		<td>charcounterwarning</td>
		<td>Chat counter warning symbols, by default 25</td>
	</tr>
	<tr>
		<td>charcounterclassWarning</td>
		<td>Chat counter warning class, by default "warning"</td>
	</tr>
	<tr>
		<td>charcounterclassExceeded</td>
		<td>Chat counter max allowed class, by default "exceeded"</td>
	</tr>
	<tr>
		<td>charcountershowTemplatestandart</td>
		<td>Char counter template, by default '&#60;span&#62;&#60;/span&#62; symbols left'</td>
	</tr>
	<tr>
		<td>charcountershowTemplatewarning</td>
		<td>Char counter max allowed template, by default '&#60;span&#62;&#60;/span&#62; symbols left'</td>
	</tr>
	<tr>
		<td>charcountershowTemplateexceeded</td>
		<td>Char counter warning template, by default '&#60;span&#62;&#60;/span&#62; symbols left'</td>
	</tr>
</table>

<table class="table table-bordered">
	<caption>Callbacks</caption>
	<tr>
		<td>charcountertoManyChar</td>
		<td>Fired when max allowed symbols</td>
	</tr>
	<tr>
		<td>charcountercurrentAllowedCharCount</td>
		<td>Fired when allowed symbols count change</td>
	</tr>
	<tr>
		<td>charcountercurrentchange</td>
		<td>Fired when symbols count change</td>
	</tr>
	<tr>
		<td>oninitfinish</td>
		<td>Plugin init finished</td>
	</tr>
</table>


<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://alexeydudkacom-prettytextfield.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<script id="dsq-count-scr" src="//alexeydudkacom-prettytextfield.disqus.com/count.js" async></script>
<?php include_once "../inc/footer.php"; ?>