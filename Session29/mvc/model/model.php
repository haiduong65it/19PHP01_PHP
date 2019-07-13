<?php 
	class Model{

		public function getNews() {
			$news = 'Test news abc';
			return $news;
		}

		public function getNewsRelated() {
			$newsRelated = "Tin lien quan";
			return $newsRelated;
		}

		public function getHomePage(){
			$a = 5;
			$b = 7;
			return $a * $b;
		}
	}
?>