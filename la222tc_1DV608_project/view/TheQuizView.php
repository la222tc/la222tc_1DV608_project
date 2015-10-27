<?php

require_once('view/CountryQuestionsView.php');
require_once('view/CapitalQuestionsView.php');

class TheQuizView
{
	private $randomQuestionID;
	private static $submittedQuiz = "TheQuizView::Submit";
	
	public function response()
	{
		$capitalQuestion = new CapitalQuestionsView();
		$countryQuestion = new CountryQuestionsView();
		if (strpos("$_SERVER[REQUEST_URI]", "=capitals_Q1")) 
		{
			return $capitalQuestion->CapitalQuestions($this->randomQuestionID);
		}
		else if (strpos("$_SERVER[REQUEST_URI]", "=country_Q1")) {
			return $countryQuestion->countryQuestions($this->randomQuestionID);
		}
		else
		{
			return false;
		}
	}
	public function userHasStartedTheCountryQuiz()
	{
		if (strpos("$_SERVER[REQUEST_URI]", "=country")) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function userHasStartedTheCapitalQuiz()
	{
		if (strpos("$_SERVER[REQUEST_URI]", "=capitals")) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function setRandomQuestID($id)
	{
		$this->randomQuestionID = $id;
	}

	public function submittedQuiz() {
		if (isset($_POST[self::$submittedQuiz])) {
			return true;
		}
		return false;
	}

	public function getAnswerOfFirstQuestion()
	{
		if (isset($_POST['firstQuestion'])) { 
			return $_POST['firstQuestion'];
		}
		return false;
	}
	public function getAnswerOfsecondQuestion()
	{
		if (isset($_POST['secondQuestion'])) { 
			return $_POST['secondQuestion'];
		}
		return false;
	}
	public function getAnswerOfThirdQuestion()
	{
		if (isset($_POST['thirdQuestion'])) { 
			return $_POST['thirdQuestion'];
		}
		return false;
	}
}