<?php

function get_latest_updates( $latest_update = '' ) {
	$rss = new DOMDocument();
		$rss->load( 'https://github.com/ramiabraham/wphierarchy/commits/master.atom' );
		$feed = array();
		foreach ( $rss->getElementsByTagName( 'entry' ) as $node ) {
			$item = array (
				'title' => $node->getElementsByTagName( 'title' )->item(0)->nodeValue,
				'date'  => $node->getElementsByTagName( 'updated' )->item(0)->nodeValue,
				);
			array_push( $feed, $item );
		}

		$limit = 3;

		for( $x=0; $x < $limit; $x++ ) {
			$title 		   = str_replace( ' & ', ' &amp; ', $feed[$x]['title'] );
			$date  		   = date( 'l F d, Y', strtotime($feed[$x]['date'] ) );
			$latest_update = '<li><span>' . $date . ':</span> ' . $title . '</li>';

			return $latest_update;
	}
}
