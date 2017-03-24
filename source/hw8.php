<?php

	if (isset($_GET['queryText'])) {
		//$query = $_GET['queryText'];
		
		$url1 = "http://congress.api.sunlightfoundation.com/legislators?apikey=46984d79855840a1bf5bb28498f6f766&per_page=all";
		//$url1 = "http://104.198.0.197:8080/legislators?apikey=46984d79855840a1bf5bb28498f6f766&per_page=all";
		$json1 = file_get_contents($url1);
		echo $json1;
	}
	
	//	Bills_group
	if (isset($_GET['queryBills'])) {
		$query = $_GET['queryBills'];
	
		//$url3 = "https://congress.api.sunlightfoundation.com/bills?apikey=46984d79855840a1bf5bb28498f6f766&per_page=50";
		$url3 = "http://104.198.0.197:8080/bills?apikey=46984d79855840a1bf5bb28498f6f766&per_page=50";
		$json3 = file_get_contents($url3);
		echo $json3;
	}
	
	//	Bills_group
	if (isset($_GET['queryCommittees'])) {
		$query = $_GET['queryCommittees'];
		
		$url4 = "http://congress.api.sunlightfoundation.com/committees?chamber=".$query."&apikey=46984d79855840a1bf5bb28498f6f766&per_page=all";
		//$url4 = "http://104.198.0.197:8080/committees?chamber=".$query."&apikey=46984d79855840a1bf5bb28498f6f766&per_page=all";
		$json4 = file_get_contents($url4);
		echo $json4;
	}
	
	if (isset($_GET['queryCommitteeGroup'])) {
		$query = $_GET['queryCommitteeGroup'];
		
		$url6 = "http://congress.api.sunlightfoundation.com/committees?member_ids=".$query."&apikey=46984d79855840a1bf5bb28498f6f766&per_page=5";
		//$url6 = "http://104.198.0.197:8080/committees?member_ids=".$query."&apikey=46984d79855840a1bf5bb28498f6f766&per_page=5";
		$json6 = file_get_contents($url6);
		echo $json6;
	}
	
	if (isset($_GET['queryBillGroup'])) {
		$query = $_GET['queryBillGroup'];
		
		$url5 = "http://congress.api.sunlightfoundation.com/bills?sponsor_id=".$query."&apikey=46984d79855840a1bf5bb28498f6f766&per_page=5";
		//$url5 = "http://104.198.0.197:8080/bills?sponsor_id=".$query."&apikey=46984d79855840a1bf5bb28498f6f766&per_page=5";
		$json5 = file_get_contents($url5);
		echo $json5;
	}
	
?>