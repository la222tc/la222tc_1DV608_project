<?php


class CapitalQuestionsView
{

	private static $submittedQuiz = "TheQuizView::Submit";

	public function CapitalQuestions($randomQuestionID)
	{
		if ($randomQuestionID == 1) {
			return '
				<form action="?category=capitals_Q1R" method="post">
				<ul>
					<li>
					<h3>What is the capital of Sweden?</h3>
						<div>
							<input type="radio" name="firstQuestion" id="firstQuestion" value="Stockholm" />
							<label for="firstQuestion">A) Stockholm </label>
						</div>
						<div>
							<input type="radio" name="firstQuestion" id="firstQuestion" value="Oslo" />
							<label for="firstQuestion">B) Oslo </label>
						</div>
						<div>
							<input type="radio" name="firstQuestion" id="firstQuestion" value="Gothenburg" />
							<label for="firstQuestion">C) Gothenburg </label>
						</div>
					</li>
					<li>
					<h3>What is the capital of Norway?</h3>
						<div>
							<input type="radio" name="secondQuestion" id="secondQuestion" value="Helsinki" />
							<label for="secondQuestion">A) Helsinki </label>
						</div>
						<div>
							<input type="radio" name="secondQuestion" id="secondQuestion" value="Gothenburg" />
							<label for="secondQuestion">B) Gothenburg </label>
						</div>
						<div>
							<input type="radio" name="secondQuestion" id="secondQuestion" value="Oslo" />
							<label for="secondQuestion">C) Oslo </label>
						</div>
					</li>
					<li>
					<h3>What is the capital of Finland?</h3>
						<div>
							<input type="radio" name="thirdQuestion" id="thirdQuestion" value="Oslo" />
							<label for="thirdQuestion">A) Oslo </label>
						</div>
						<div>
							<input type="radio" name="thirdQuestion" id="thirdQuestion" value="Stockholm" />
							<label for="thirdQuestion">B) Stockholm </label>
						</div>
						<div>
							<input type="radio" name="thirdQuestion" id="thirdQuestion" value="Helsinki" />
							<label for="thirdQuestion">C) Helsinki </label>
						</div>
					</li>
				</ul>
				<input type="submit" name="' . self::$submittedQuiz . '" value="Answer" />
			</form>
			<br>
			<br>
			<a href="?">Back to Categories</a>
			';
		}
		else if($randomQuestionID = 2){
			return '
				<form action="?category=capitals_Q1R" method="post">
				<ul>
					<li>
					<h3>What is the capital of Germany?</h3>
						<div>
							<input type="radio" name="firstQuestion" id="firstQuestion" value="Berlin" />
							<label for="firstQuestion">A) Berlin </label>
						</div>
						<div>
							<input type="radio" name="firstQuestion" id="firstQuestion" value="Oslo" />
							<label for="firstQuestion">B) Oslo </label>
						</div>
						<div>
							<input type="radio" name="firstQuestion" id="firstQuestion" value="Bern" />
							<label for="firstQuestion">C) Bern </label>
						</div>
					</li>
					<li>
					<h3>What is the capital of Luxembourg?</h3>
						<div>
							<input type="radio" name="secondQuestion" id="secondQuestion" value="Ljubljana" />
							<label for="secondQuestion">A) Ljubljana </label>
						</div>
						<div>
							<input type="radio" name="secondQuestion" id="secondQuestion" value="Gothenburg" />
							<label for="secondQuestion">B) Gothenburg </label>
						</div>
						<div>
							<input type="radio" name="secondQuestion" id="secondQuestion" value="Luxembourg" />
							<label for="secondQuestion">C) Luxembourg </label>
						</div>
					</li>
					<li>
					<h3>What is the capital of Spain?</h3>
						<div>
							<input type="radio" name="thirdQuestion" id="thirdQuestion" value="Minsk" />
							<label for="thirdQuestion">A) Minsk </label>
						</div>
						<div>
							<input type="radio" name="thirdQuestion" id="thirdQuestion" value="Madrid" />
							<label for="thirdQuestion">B) Madrid </label>
						</div>
						<div>
							<input type="radio" name="thirdQuestion" id="thirdQuestion" value="Monaco" />
							<label for="thirdQuestion">C) Monaco </label>
						</div>
					</li>
				</ul>
				<input type="submit" name="' . self::$submittedQuiz . '" value="Answer" />
			</form>
			<br>
			<br>
			<a href="?">Back to Categories</a>
			';

				
		}
	}
}