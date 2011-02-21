<?php
require_once dirname(__FILE__) . '/../../../../../mind3rd/API/classes/Mind.php';
require_once dirname(__FILE__) . '/../../../../../mind3rd/API/cortex/Lexer/Lexer.php';
require_once dirname(__FILE__) . '/../../../../../mind3rd/API/cortex/canonic/Canonic.php';

require_once dirname(__FILE__) . '/../../../../../mind3rd/API/classes/MindEntity.php';
require_once dirname(__FILE__) . '/../../../../../mind3rd/API/utils/constants.php';
require_once dirname(__FILE__) . '/../../../../../mind3rd/API/classes/VersionManager.php';
require_once dirname(__FILE__) . '/../../../../../mind3rd/API/classes/MindProject.php';
require_once dirname(__FILE__) . '/../../../../../mind3rd/API/classes/MindRelation.php';
require_once dirname(__FILE__) . '/../../../../../mind3rd/API/classes/MindEntity.php';
require_once dirname(__FILE__) . '/../../../../../mind3rd/API/classes/MindProperty.php';

require_once dirname(__FILE__) . '/../../../../../mind3rd/API/cortex/analyst/Analyst.php';
require_once dirname(__FILE__) . '/../../../../../mind3rd/API/cortex/tokenizer/Token.php';
require_once dirname(__FILE__) . '/../../../../../mind3rd/API/cortex/tokenizer/Tokenizer.php';


/**
 * Test class for Tokenizer.
 * Generated by PHPUnit on 2011-02-21 at 11:46:35.
 */
class TokenizerTest extends PHPUnit_Framework_TestCase {

	/**
	 * @var Tokenizer
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp() {
		Tokenizer::loadModifiers(dirname(__FILE__) . '/../../../../../mind3rd/API/languages/en/');
		$this->object = new Tokenizer;
		//$this->object->loadModifiers('../../languages/en/');
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown() {

	}

	/**
	 * @todo Implement testIsQuantifier().
	 */
	public function testIsQuantifier() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testIsQualifier().
	 */
	public function testIsQualifier() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	public function testSweep() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

}