<?php

require_once('model/QuestionModel.php');

class QuizQuestionController
{
	private $theQuizView;
	private $qModel;
	private $resultView;
	private $layoutView;

	public function __construct(TheQuizView $theQuizView, LayoutView $layoutView) 
	{
		$this->theQuizView = $theQuizView;
		$this->layoutView = $layoutView;
		$this->qModel = new QuestionModel($this->theQuizView);
	}

	public function userHasStartedQuiz()
	{
		$randomQuestionID = $this->qModel->randomizeQuestions();
		$this->theQuizView->setRandomQuestID($randomQuestionID);

		if ($this->theQuizView->userHasStartedTheCapitalQuiz()) 
		{
			if ($this->theQuizView->submittedQuiz()) {
				$this->qModel->getCapitalAnswer();
				$score = $this->qModel->getScore();
				$this->layoutView->setResult($score);
			}
		}
		else if ($this->theQuizView->userHasStartedTheCountryQuiz())
		{
			
			if ($this->theQuizView->submittedQuiz()) {
				$this->qModel->getCountryAnswer();
				$score = $this->qModel->getScore();
				$this->layoutView->setResult($score);
			}
		}
	}
}
	