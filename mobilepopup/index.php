<?php 
	$title = "Mobilepopup - jQuery pop-up plugin";
	$description = "Mobilepopup allows you to create and manage pop-up windows, specifically designed for mobile interfaces";
	$keywords = "mobilepopup, pop-up, jQuery, jQuery plugin, mobile, mobile interfaces, mobile popup";
	include_once "../inc/header.php"; 
?>

<h1>Mobilepopup - jQuery pop-up plugin</h1>
<?php get_github_buttons("mobilepopup"); ?>

<h3>Main mobilepopup advantages:</h3>
<ul>
	<li>lightweight and customizable</li>
	<li>has adaptive desing</li>
	<li>good decision for mobile site versions</li>
</ul>
<br><br>

<h3>Simple example (<a href="" class="popup-demo">demo</a>):</h3>
<pre><code class="language-javascript">
$("body").on("click",".popup-demo",function(){
    $.mobilepopup({
        targetblock:".pop-up1",
        width:"500px",
        height:"300px"
    });
    return false;
});

$("body").on("click",".get-demopopup2",function(){
    $.mobilepopup('reload',{
        targetblock:".pop-up2",
        width:"500px",
        height:"400px"
    });
    return false;
});</code></pre>

<pre><code class="html">&#60;div class="pop-up1" style="display: none;"&#62;
    &#60;div class="header"&#62;Demo popup 1&#60;/div&#62;
    &#60;div class="content"&#62;
        &#60;p&#62;
            Demo popup 1 content
        &#60;/p&#62;
    &#60;/div&#62;
    &#60;div class="footer"&#62;
        &#60;a href="" class="button get-demopopup2"&#62;Open demo 2&#60;/a&#62;
    &#60;/div&#62;
&#60;/div&#62;

&#60;div class="pop-up2" style="display: none;"&#62;
    &#60;div class="header"&#62;Demo popup 2&#60;/div&#62;
    &#60;div class="content"&#62;
        &#60;p&#62;
            Demo popup 2 content
        &#60;/p&#62;
    &#60;/div&#62;
    &#60;div class="footer"&#62;
        &#60;a href="" class="button close"&#62;Close pop-up&#60;/a&#62;
    &#60;/div&#62;
&#60;/div&#62;</code></pre>
<div class="pop-up1" style="display: none;">
    <div class="header">Demo popup 1</div>
    <div class="content">
        <p>
            Demo popup 1 content
        </p>
    </div>
    <div class="footer">
        <a href="" class="button get-demopopup2">Open demo 2</a>
    </div>
</div>

<div class="pop-up2" style="display: none;">
    <div class="header">Demo popup 2</div>
    <div class="content">
        <p>
            Demo popup 2 content
        </p>
    </div>
    <div class="footer">
        <a href="" class="button close">Close pop-up</a>
    </div>
</div>
<br><br><br><br>
<h3>Example of popup with form (<a href="" class="popup-demo">demo</a>):</h3>
<pre><code class="language-javascript">$.mobilepopup({
	targetblock:".pop-up",
	width:300px,
	height:300px,
	onformsubmited: function(data, el){
		$.mobilepopup('reload',{html:data});
	}
});</code></pre>

<div class="pop-up" style="display: none;">
	<div class="header">We need your opinion!</div>
	<div class="content">
		<form action="ajax.php" class="mobilepopup-form">
			<p>Please post any bugs, issues and suggestions about this page. This will help us to better enhance it.</p>
			<textarea name="comment" placeholder="Write your comment"></textarea>
		</form>
	</div>
	<div class="footer">
		<a href="" class="submit-mobilepopup-form button">Send</a>
	</div>
</div>

<pre><code class="html">&#60;div class="pop-up"&#62;
	&#60;div class="header"&#62;We need your opinion!&#60;/div&#62;
	&#60;div class="content"&#62;
		&#60;form action="ajax.php" class="popup-form"&#62;
			&#60;p&#62;Please post any bugs, issues and suggestions about this page. This will help us to better enhance it.&#60;/p&#62;
			&#60;textarea name="comment" placeholder="Write your comment"&#62;&#60;/textarea&#62;
		&#60;/form&#62;
	&#60;/div&#62;
	&#60;div class="footer"&#62;
		&#60;a href="" class="submit-popup-form"&#62;Send&#60;/a&#62;
	&#60;/div&#62;
&#60;/div&#62;</code></pre>

<br><br><br><br>
<h3>Example of confirm action (<a href="" class="confirm-action">demo</a>):</h3>
<pre><code class="language-javascript">
$("body").on("click",".confirm-action",function(){
	$.mobilepopup({
		type:"confirm",
		width:"500px",
		height:"auto",
		closeonoverflowclick: false,
		fullscreeninmobile: false,
		onconfirmed: function(el){
			alert("Action confirmed");
		}
	});
	return false;
});</code></pre>
<br><br><br><br>
	<h3>Example go to link (<a href="http://alexeydudka.com/mobilepopup/" class="confirm-goto-link">demo</a>):</h3>
<pre><code class="language-javascript">
$("body").on("click",".confirm-goto-link",function(e){
	e.preventDefault();
	var link = $(this);
	$.mobilepopup({
		type:"confirm",
		width:"500px",
		height:"auto",
		closeonoverflowclick: false,
		fullscreeninmobile: false,
		onconfirmed: function(el){
			location.href = link.attr("href");
		}
	});
	return false;
});</code></pre>


<br><br>
<table class="table table-bordered">
	<caption>Mobile popup functions</caption>
	<tr>
		<td>$.mobilepopup(options)</td>
		<td>Init and open pop-up window</td>
	</tr>
	<tr>
		<td>$.mobilepopup('reload',options)</td>
		<td>Load new content to pop-up window</td>
	</tr>
	<tr>
		<td>$.mobilepopup('resize',options)</td>
		<td>Resize pop-up window (exp {width:'600px', height:'400px'})</td>
	</tr>
	<tr>
		<td>$.mobilepopup('close')</td>
		<td>Close pop-up window</td>
	</tr>
</table>

<table class="table table-bordered">
	<caption>Settings</caption>
	<tr>
		<th colspan="3">Pop-up window content</th>
	</tr>
	<tr>
		<td>ajax</td>
		<td>url</td>
		<td>Load content by ajax</td>
	</tr>
	<tr>
		<td>html</td>
		<td>html</td>
		<td>Specifies html</td>
	</tr>
	<tr>
		<td>targetblock</td>
		<td>.class or #id</td>
		<td>Specifies the class or id of the block to display in the pop-up window. The block is cloned, that is, the block does not disappear from the page, and its clone is shown.</td>
	</tr>
	<tr>
		<td>content</td>
		<td>object</td>
		<td>You can use plain text or html</td>
	</tr>
	<tr>
		<td>type</td>
		<td>type (text)</td>
		<td>Specifies popup window type, by default 'standart'</td>
	</tr>
	<tr>
		<td>confirmcontent</td>
		<td>object</td>
		<td>You can change content of confirm popup, by default {header: "Confirm your action", content: "Are you sure you want to continue?", buttonoktext: "Yes", buttonnotext: "Cancel"}</td>
	</tr>
	<tr>
		<th colspan="3">The size of the window, for screens <= 767 this does not work, because the full screen</th>
	</tr>
	<tr>
		<td>width</td>
		<td>50px(%...)</td>
		<td>The width of the window, the maximum width is always 100vw</td>
	</tr>
	<tr>
		<td>height</td>
		<td>50px(%...)</td>
		<td>Window height, maximum height is always 100vh</td>
	</tr>
	<tr>
		<th colspan="3">Pop-up window customizing</th>
	</tr>
	<tr>
		<td>closehtml</td>
		<td>html</td>
		<td>close button html</td>
	</tr>
	<tr>
		<td>customclass</td>
		<td>class</td>
		<td>Clustom class for popup window</td>
	</tr>
	<tr>
		<td>closeonoverflowclick</td>
		<td>bool</td>
		<td>Close popup on overflow click, by default true</td>
	</tr>
	<tr>
		<td>shakeonoverflowclick</td>
		<td>bool</td>
		<td>Shake on overflow click if it disabled, by default true</td>
	</tr>
	<tr>
		<td>fullscreeninmobile</td>
		<td>bool</td>
		<td>Fullscreen in mobile, by default true</td>
	</tr>
	<tr>
		<th colspan="3">Callbacks</th>
	</tr>
	<tr>
		<td>onloaded</td>
		<td>function</td>
		<td>Everything is loaded</td>
	</tr>
	<tr>
		<td>onclosed</td>
		<td>function</td>
		<td>Everything is closed</td>
	</tr>
	<tr>
		<td>onformsubmited</td>
		<td>function</td>
		<td>The function that is executed when the form inside the pop-up window is executed and the result of execution returns, a description of how this form is inside the pop-up window below</td>
	</tr>
	<tr>
		<td>onconfirmed</td>
		<td>function</td>
		<td>The function that is executed when pressed "ok" in confirmation popup window</td>
	</tr>
</table>

<p>For mobilepopup, you can quickly insert forms into a window and process them with ajax. What you need to do:</p>
<ol>
	<li>In the form inside the window, you need to specify a class <strong>mobilepopup-form</strong></li>
	<li>The button that should send the form, you need to specify a class <strong>submit-mobilepopup-form</strong></li>
</ol>
<p>Such a form is sent by ajax and after execution calls onformsubmited, the function returns the data that came as a result of executing the form</p>

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
s.src = 'https://alexeydudkacom-mobilepopup.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<script id="dsq-count-scr" src="//alexeydudkacom-mobilepopup.disqus.com/count.js" async></script>
<?php include_once "../inc/footer.php"; ?>