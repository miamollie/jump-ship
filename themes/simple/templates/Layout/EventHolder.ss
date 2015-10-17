

<div>
	<h2>$Title</h2>
	<p>$Content</p>
</div>

<!-- Loop Through All Event Pages -->
<% loop $Children %>
<!-- Test Date of Event to ensure in Future -->
	<% if $Date > $Now %>
		<div class="eventDetails">
			<!-- Event Info  -->
			<h3><a href="$Link">$Title</a></h3>

			<p>$Date.Long</p>
			<p>$Price</p>
			<%	if $Teaser %>
			<p>$Teaser</p>
			<% else %>
			<p>$Content.FirstSentence</p>
			<% end_if %>

			<a href="$Link"><span class="btn btn-default">Find Out More!</span></a>

		</div>
	<% end_if %>
<% end_loop %>

