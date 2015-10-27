<?php


class QuestionModel
{

	private $theQuizView;
	private $score = 0;

	public function __construct(TheQuizView $theQuizView) {
		$this->theQuizView = $theQuizView;
	}

	public function randomizeQuestions()
	{
		$random = rand(1,2);
		return $random;
	}

	public function getCapitalAnswer()
	{
		if ($this->theQuizView->getAnswerOfFirstQuestion() === "Stockholm" ||
			$this->theQuizView->getAnswerOfFirstQuestion() === "Berlin") {
			$this->score++;
		}
		if ($this->theQuizView->getAnswerOfsecondQuestion() === "Oslo" ||
			$this->theQuizView->getAnswerOfsecondQuestion() === "Luxembourg") {
			$this->score++;
		}
		if ($this->theQuizView->getAnswerOfThirdQuestion() === "Helsinki" ||
			$this->theQuizView->getAnswerOfThirdQuestion() === "Madrid") {
			$this->score++;
		}
	}

	public function getCountryAnswer()
	{
		if ($this->theQuizView->getAnswerOfFirstQuestion() === "England" ||
			$this->theQuizView->getAnswerOfFirstQuestion() === "Poland") {
			$this->score++;
		}
		if ($this->theQuizView->getAnswerOfsecondQuestion() === "France" ||
			$this->theQuizView->getAnswerOfsecondQuestion() === "Netherlands") {
			$this->score++;
		}
		if ($this->theQuizView->getAnswerOfThirdQuestion() === "Italy" ||
			$this->theQuizView->getAnswerOfThirdQuestion() === "Greece") {
			$this->score++;
		}
	}

	public function getScore()
	{
		return $this->score;
	}
}