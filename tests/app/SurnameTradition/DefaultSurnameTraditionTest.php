<?php

/**
 * webtrees: online genealogy
 * Copyright (C) 2015 webtrees development team
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */
use Fisharebest\Webtrees\SurnameTradition\DefaultSurnameTradition;
use Fisharebest\Webtrees\SurnameTradition\SurnameTraditionInterface;

/**
 * Test harness for the class SpanishSurnameTradition
 */
class DefaultSurnameTraditionTest extends PHPUnit_Framework_TestCase {
	/** @var SurnameTraditionInterface */
	private $surname_tradition;

	/**
	 * Prepare the environment for these tests
	 */
	public function setUp() {
		$this->surname_tradition = new DefaultSurnameTradition;
	}

	/**
	 * Test whether married surnames are used
	 */
	public function testMarriedSurnames() {
		$this->assertSame(false, $this->surname_tradition->hasMarriedNames());
	}

	/**
	 * Test whether surnames are used
	 */
	public function testSurnames() {
		$this->assertSame(true, $this->surname_tradition->hasSurnames());
	}

	/**
	 * Test new son names
	 */
	public function testNewSonNames() {
		$this->assertSame(
			array('NAME' => '//'),
			$this->surname_tradition->newChildNames('John /White/', 'Mary /Black/', 'M')
		);
	}

	/**
	 * Test new daughter names
	 */
	public function testNewDaughterNames() {
		$this->assertSame(
			array('NAME' => '//'),
			$this->surname_tradition->newChildNames('John /White/', 'Mary /Black/', 'F')
		);
	}

	/**
	 * Test new child names
	 */
	public function testNewChildNames() {
		$this->assertSame(
			array('NAME' => '//'),
			$this->surname_tradition->newChildNames('John /White/', 'Mary /Black/', 'U')
		);
	}

	/**
	 * Test new father names
	 */
	public function testNewFatherNames() {
		$this->assertSame(
			array('NAME' => '//'),
			$this->surname_tradition->newParentNames('John /White/', 'M')
		);
	}

	/**
	 * Test new mother names
	 */
	public function testNewMotherNames() {
		$this->assertSame(
			array('NAME' => '//'),
			$this->surname_tradition->newParentNames('John /White/', 'F')
		);
	}

	/**
	 * Test new parent names
	 */
	public function testNewParentNames() {
		$this->assertSame(
			array('NAME' => '//'),
			$this->surname_tradition->newParentNames('John /White/', 'U')
		);
	}

	/**
	 * Test new husband names
	 */
	public function testNewHusbandNames() {
		$this->assertSame(
			array('NAME' => '//'),
			$this->surname_tradition->newSpouseNames('Mary /Black/', 'M')
		);
	}

	/**
	 * Test new wife names
	 */
	public function testNewWifeNames() {
		$this->assertSame(
			array('NAME' => '//'),
			$this->surname_tradition->newSpouseNames('John /White/', 'F')
		);
	}

	/**
	 * Test new spouse names
	 */
	public function testNewSpouseNames() {
		$this->assertSame(
			array('NAME' => '//'),
			$this->surname_tradition->newSpouseNames('Chris /Green/', 'U')
		);
	}
}
