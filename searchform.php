<form method="get" id="searchform" class="search--form" action="<?php echo home_url(); ?>/">
	<label class="hidden" for="s">Search:</label>
	<div class="small--container">
		<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" class="search--field" />
		<input type="submit" id="searchsubmit" class="btn search--submit" value="Submit" />
	</div>
</form>
