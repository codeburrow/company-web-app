<?php
use Codeception\Util\Locator;


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = null)
 *
 * @SuppressWarnings(PHPMD)
 */
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    /**
     * @Given I visit the homepage
     */
    public function iVisitTheHomepage()
    {
        $this->amOnPage('/');
        $this->seeCurrentUrlEquals('/');
    }

    /**
     * @Given I wait for a second for the page to load
     */
    public function iWaitForASecondForThePageToLoad()
    {
        $this->wait(1);
    }


    /**
     * @Given I click the Gallery Link
     */
    public function iClickTheGalleryLink()
    {
        $this->click('GALLERY');
    }

    /**
     * @Given I wait for a second for the browser to scroll down to the Gallery section
     */
    public function iWaitForASecondForTheBrowserToScrollDownToTheGallerySection()
    {
        $this->wait(1);
    }

    /**
     * @Given I hover my mouse over the DEREE Judge screenshot
     */
    public function iHoverMyMouseOverTheDEREEJudgeScreenshot()
    {
        $dereeJudge = Locator::find('a', ['href' => 'https://deree-judge.herokuapp.com/professor/Maira-Kotsovoulou']);

        $this->moveMouseOver($dereeJudge);
    }

    /**
     * @When I wait for a second for the project's title to show
     */
    public function iWaitForASecondForTheProjectsTitleToShow()
    {
        $this->wait(1);
    }

    /**
     * @Then I should see the name of DEREE Judge project
     */
    public function iShouldSeeTheNameOfDEREEJudgeProject()
    {
        $this->see('DEREE Judge');
    }

    /**
     * @Then I should not see the old name Mobile Cashless Payment
     */
    public function iShouldNotSeeTheOldNameMobileCashlessPayment()
    {
        $this->dontSee('Mobile Cashless Payment');
    }

    /**
     * @When I click on DEREE Judge Project
     */
    public function iClickOnDEREEJudgeProject()
    {
        $dereeJudge = Locator::find('a', ['href' => 'https://deree-judge.herokuapp.com/professor/Maira-Kotsovoulou']);

        $this->click($dereeJudge);
    }

    /**
     * @When I wait for a second for the project screenshot to load
     */
    public function iWaitForASecondForTheProjectScreenshotToLoad()
    {
        $this->wait(1);
    }

    /**
     * @Then I should see the project's screenshot
     */
    public function iShouldSeeTheProjectsScreenshot()
    {
        $this->seeInSource('<iframe src="https://deree-judge.herokuapp.com/professor/Maira-Kotsovoulou" class="nivo-lightbox-item" frameborder="0" vspace="0" hspace="0" scrolling="auto"></iframe>');
    }
}
