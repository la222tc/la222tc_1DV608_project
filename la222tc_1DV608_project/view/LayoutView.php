<?php


class LayoutView {

	private $score = 0;

	public function render($submittedQuiz, $view) 
	{
	echo '<!DOCTYPE html>
	<html>
	<head>
	  <meta charset="utf-8">
	  <title>QuizZz</title>
	</head>
	<body>
	  <h1>QuizZz</h1>
	  '.$this->renderResult($submittedQuiz).'
	  <div class="container">
	      ' . $view->response() . '
	  </div>
	 </body>
	</html>
	';
	}

	public function setResult($score)
	{
		$this->score = $score;
	}
	public function renderResult($submittedQuiz)
	{
	 if ($submittedQuiz) {
		return '<h1>You scored '.$this->score.'/3</h1>';
		}
	else 
	{
		return false;
	}
	}

	public function checkUrlIfUserPressedACategory()
	{
	if(strpos("$_SERVER[REQUEST_URI]", "?category"))
		{
		return true;
		}
	else 
		{
		return false;
		}
	}
	public function checkUrlIfUserStartedQuiz()
	{
	if(strpos("$_SERVER[REQUEST_URI]", "_Q"))
		{
		return true;
		}
	else 
		{
		return false;
		}
	}

	

	public function chooseLayout($submittedQuiz, StartingPageView $startView, QuizLayoutView $quizView, 
	TheQuizView $theQuizView)
	{
	
		if ($this->checkUrlIfUserStartedQuiz()) 
		{
		$this->render($submittedQuiz, $theQuizView);
		}
	    else
	    {
	    	if ($this->checkUrlIfUserPressedACategory()) 
	    	{
	     		$this->render($submittedQuiz, $quizView);
	      
	    	}
	    	else
	    	{
	      		$this->render($submittedQuiz, $startView); 
	    	}
	    }
	}
}
