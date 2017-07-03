<?php
	function get_github_buttons($pluginname){ ?>
		<div class="github-buttons-wrap">
			<div class="download-button">
				<a class="github-button" href="https://github.com/alexeydudka/<?php echo $pluginname; ?>/archive/master.zip" aria-label="Download alexeydudka/<?php echo $pluginname; ?> on GitHub">Download</a>
			</div>
			<a class="github-button" href="https://github.com/alexeydudka/<?php echo $pluginname; ?>/fork" data-show-count="true" aria-label="Fork alexeydudka/<?php echo $pluginname; ?> on GitHub">Fork</a>
			<a class="github-button" href="https://github.com/alexeydudka/<?php echo $pluginname; ?>" data-show-count="true" aria-label="Star alexeydudka/<?php echo $pluginname; ?> on GitHub">Star</a>
		</div>
	<?php }