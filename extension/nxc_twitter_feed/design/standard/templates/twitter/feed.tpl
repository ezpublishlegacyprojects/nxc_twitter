<h3>Twitter feed</h3>
{def $twitter_info = fetch( 'twitter_feed', 'user_info' )}
<p>{$twitter_info.followers_count} followers</p>
{undef $twitter_info}

{def $last_twitts = fetch(
	'twitter_feed',
	'timeline',
	hash(
		'type', 'user',
		'parameters', hash(
			'screen_name', 'RedMagDaily',
			'count', 5
		)
	)
)}
<ul>
	{foreach $last_twitts as $tweet}
		<li>
			{$tweet.text}
			{$tweet.created_ago}
		</li>
	{/foreach}
</ul>
{undef $last_twitts}