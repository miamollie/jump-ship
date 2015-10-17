<!-- Page Listing All Future Events -->

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

			<!-- Teasre of the event -->
			<%	if $Teaser %>
			<p>$Teaser</p>
			<% else %>
			<p>$Content.FirstSentence</p>
			<% end_if %>

			<!-- Details of the event -->
			<ul>
				<li>$Date.Long</li>
				<li>$Price.Nice</li>
				<li>
					<% loop $Activities %>
					$Title <% if $Last %><% else %>, <% end_if %>
					<% end_loop %>
				</li>
			</ul>

			<a href="$Link"><span class="btn btn-default">Find Out More!</span></a>

		</div>
	<% end_if %>
<% end_loop %>

