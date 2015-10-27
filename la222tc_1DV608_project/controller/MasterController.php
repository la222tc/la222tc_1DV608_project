<?php


//INCLUDE THE FILES NEEDED...
require_once('view/StartingPageView.php');
require_once('view/LayoutView.php');
require_once('view/QuizLayoutView.php');
require_once('view/TheQuizView.php');

require_once('controller/QuizQuestionController.php');

require_once('model/QuestionModel.php');


class MasterController
{

	public function run()
	{
		$startView = new StartingPageView();
		$quizView = new QuizLayoutView();
		$layoutView = new LayoutView();
		$theQuizView = new TheQuizView();
		$qModel = new QuestionModel($theQuizView);
		
		

		$quizController = new QuizQuestionController($theQuizView, $layoutView);
		$quizController->userHasStartedQuiz();

		$layoutView->chooseLayout($theQuizView->submittedQuiz(),$startView, $quizView, $theQuizView);
	}
}