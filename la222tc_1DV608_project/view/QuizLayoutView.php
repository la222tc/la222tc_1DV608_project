<?php

class QuizLayoutView {

	private static $capital = "=capitals";
	private static $country = "=country";

	public function response()
	{
		if (strpos("$_SERVER[REQUEST_URI]", "=capitals")) 
		{
			return $this->generateQuizLayoutHTML("Guess the Capital", self::$capital);
		}
		else
		{
			return $this->generateQuizLayoutHTML("Guess the Country", self::$country);
		}
		
		
	}

	

	public function generateQuizLayoutHTML($category, $linkCatagory)
	{
		return '
			<br>
			<div>
			<h3>Instructions</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus laoreet, metus ac imperdiet varius, mi orci malesuada est, nec molestie mauris tortor vitae enim.</p>
			</div>
			
			<h2> ' . $category .' </h2>
			<p>Click <a href="?category'.$linkCatagory.'_Q1">Here</a> to start the game!</p>
			<br>
			<br>
			<h3><a href="?">Back to catagories</a></h3>
			
		';
	}

}