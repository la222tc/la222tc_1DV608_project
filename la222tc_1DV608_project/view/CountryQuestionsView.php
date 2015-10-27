<?php


class CountryQuestionsView
{
	private static $submittedQuiz = "TheQuizView::Submit";

	public function countryQuestions($randomQuestionID)
	{
		if ($randomQuestionID == 1) {
			return '
				<form action="?category=country_Q1R" method="post">
				<ul>
					<li>
					<h3>What country is London the capital of?</h3>
						<div>
							<input type="radio" name="firstQuestion" id="firstQuestion" value="England" />
							<label for="firstQuestion">A) England </label>
						</div>
						<div>
							<input type="radio" name="firstQuestion" id="firstQuestion" value="Iceland" />
							<label for="firstQuestion">B) Iceland </label>
						</div>
						<div>
							<input type="radio" name="firstQuestion" id="firstQuestion" value="France" />
							<label for="firstQuestion">C) France </label>
						</div>
					</li>
					<li>
					<h3>What country is Paris the capital of?</h3>
						<div>
							<input type="radio" name="secondQuestion" id="secondQuestion" value="Iceland" />
							<label for="secondQuestion">A) Iceland </label>
						</div>
						<div>
							<input type="radio" name="secondQuestion" id="secondQuestion" value="France" />
							<label for="secondQuestion">B) France </label>
						</div>
						<div>
							<input type="radio" name="secondQuestion" id="secondQuestion" value="Italy" />
							<label for="secondQuestion">C) Italy </label>
						</div>
					</li>
					<li>
					<h3>What country is Rome the capital of?</h3>
						<div>
							<input type="radio" name="thirdQuestion" id="thirdQuestion" value="Italy" />
							<label for="thirdQuestion">A) Italy </label>
						</div>
						<div>
							<input type="radio" name="thirdQuestion" id="thirdQuestion" value="France" />
							<label for="thirdQuestion">B) France </label>
						</div>
						<div>
							<input type="radio" name="thirdQuestion" id="thirdQuestion" value="Sweden" />
							<label for="thirdQuestion">C) Sweden </label>
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
				<form action="?category=country_Q1R" method="post">
				<ul>
					<li>
					<h3>What country is Warsaw the capital of?</h3>
						<div>
							<input type="radio" name="firstQuestion" id="firstQuestion" value="Latvia" />
							<label for="firstQuestion">A) Latvia </label>
						</div>
						<div>
							<input type="radio" name="firstQuestion" id="firstQuestion" value="Austria" />
							<label for="firstQuestion">B) Austria </label>
						</div>
						<div>
							<input type="radio" name="firstQuestion" id="firstQuestion" value="Poland" />
							<label for="firstQuestion">C) Poland </label>
						</div>
					</li>
					<li>
					<h3>What country is Amsterdam the capital of?</h3>
						<div>
							<input type="radio" name="secondQuestion" id="secondQuestion" value="Serbia" />
							<label for="secondQuestion">A) Serbia </label>
						</div>
						<div>
							<input type="radio" name="secondQuestion" id="secondQuestion" value="Greece" />
							<label for="secondQuestion">B) Greece </label>
						</div>
						<div>
							<input type="radio" name="secondQuestion" id="secondQuestion" value="Netherlands" />
							<label for="secondQuestion">C) Netherlands </label>
						</div>
					</li>
					<li>
					<h3>What country is Athens the capital of?</h3>
						<div>
							<input type="radio" name="thirdQuestion" id="thirdQuestion" value="Greece" />
							<label for="thirdQuestion">A) Greece </label>
						</div>
						<div>
							<input type="radio" name="thirdQuestion" id="thirdQuestion" value="Switzerland" />
							<label for="thirdQuestion">B) Switzerland </label>
						</div>
						<div>
							<input type="radio" name="thirdQuestion" id="thirdQuestion" value="Hungary" />
							<label for="thirdQuestion">C) Hungary </label>
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