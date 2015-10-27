<?php

class StartingPageView {


	public function response()
	{
		return $this->generateStartingPageHTML();
	}

	public function generateStartingPageHTML()
	{
		return '
			<br>
			<h2>Choose a Category</h2>
			<ul>
				<li><a href="?category=capitals">Guess the Capital</a></li>
				<li><a href="?category=country">Guess the Country</a></li>
			</ul>
		';
	}

}