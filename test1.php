<?php 
	//when you use this rename it to index.php youll need xampp and you will 
	//need to make a folder under xampp/htdocs called litbot and put this file inside of it 
	//and when you run it in chrome type in localhost/litbot as the url 
	include_once 'simple_html_dom.php';
	//put in the url here 
	$target_url = "https://www.google.com/search?site=&source=hp&q=guap&oq=guap&gs_l=hp.3..0l10.3414.6111.0.6350.11.9.2.0.0.0.149.961.3j6.9.0....0...1c.1.64.hp..0.9.802.0..46j0i131k1j0i46k1j0i131i155k1.gZKXbrDiOas";
	$html = new simple_html_dom();
	$html->load_file($target_url);
	//the html element goes in here where 'a' is so you could replace it with 'img'
	foreach($html->find('a') as $link){
		//href can be replaced with src or other attributes 
		echo $link->href."<br/>";
	}
?>
