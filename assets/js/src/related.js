/**
 * Fetch up to 3 related posts based on current post categories
 * via the WP REST API. Post are only fetched if and when the
 * user scrolls the viewport to the container.
 */

// Variables passed from the php component.
const postID = postdata.post_ID;
const catIDs = postdata.cat_ids;
const restURL = postdata.rest_url;

// Create query URL for the REST API. Note &_embed=true at the end which brings in featured images.
const queryURL = `${restURL}posts?per_page=3&categories=${catIDs}&exclude=${postID}&_embed=true`;

// Fetch the query results from WP REST API.
function sendRESTquery() {
	fetch( queryURL )
		.then( response => response.json() )
		.then( data => console.info( data ) );
}

console.info( 'I\'m alive!' );

sendRESTquery();
