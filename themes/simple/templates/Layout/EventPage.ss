<!-- Pade Detailing an Individual Event -->

<div class="content-container">
	<article>
		<h1>$Title</h1>
		<div class="content">
			<p>$Content</p>

			<!-- Display the Activities Associated with an Event -->
			<% if $Activities %>
				<ul>
				<% loop $Activities %>
					<li><em>$Title</em>: $Description </li>
				<% end_loop %>
				</ul>
			<% end_if %>

			<p>All this for just $Price.Nice!</p>

		</div>
	</article>
</div>