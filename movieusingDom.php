<?php
	$dom=new DomDocument();
	$dom->load("movie.xml");
	$t=$dom->getElementsByTagName("movie_name");
	echo"<b>Movie Title</b><br>";
	foreach($t as $node)
	{
		echo $node->textContent."<br>";
	}
	$t=$dom->getElementsByTagName("Actor_name");
	echo"<b>Actor_name</b><br>";
	foreach($t as $node)
	{
		echo $node->textContent."<br>";
	}
