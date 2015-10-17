

<div>
	<h2>$Title</h2>
	<p>$Content</p>
</div>

<!-- Loop Through All Event Pages -->
<% loop $Children %>
<!-- Test Date of Event -->
	<% if $Date > $Now %>
		<div class="eventDetails">
			<!-- Event Info  -->
			<h3><a href="$Link">$Title</a></h3>

			<p><i class="fa fa-calendar"></i>$Date.Long</p>
			<p><i class="fa fa-usd"></i>$Price</p>
			<!-- <p><i class="fa fa-tags"></i>Properties, Prices, best deals</p> -->

			<%	if $Teaser %>
			<p>$Teaser</p>
			<% else %>
			<p>$Content.FirstSentence</p>
			<% end_if %>

			<a href="$Link"><span class="btn btn-default">Find Out More!</span></a>
			<br>
		</div>
	<% end_if %>
<% end_loop %>

