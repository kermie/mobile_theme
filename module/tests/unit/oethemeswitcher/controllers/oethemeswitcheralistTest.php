<?php
/**
 * This file is part of OXID eSales theme switcher module.
 *
 * OXID eSales theme switcher module is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eSales theme switcher module is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with OXID eSales theme switcher module.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2014
 */

/**
 * Tests for aList class
 */
class Unit_oeThemeSwitcher_Controllers_oeThemeSwitcherAListTest extends OxidTestCase
{

    /**
     * Overloads oxConfig
     */
    public function setUp()
    {
        oxRegistry::set("oxConfig", new oeThemeSwitcherConfig());
        modConfig::setParameter("showFilter", null);
    }

    /**
     * Data provider for testGetShowFilter test
     *
     * @return array
     */
    public function providerGetShowFilter()
    {
        return array(
            array(true),
            array(false)
        );
    }

    /**
     * Test get showFilter parameter
     *
     * @param bool $blFilterValue - show or not filter
     *
     * @dataProvider providerGetShowFilter
     */
    public function testGetShowFilter($blFilterValue)
    {
        modConfig::setParameter("showFilter", $blFilterValue);
        $oAList = new oeThemeSwitcherAList();

        $this->assertEquals($blFilterValue, $oAList->getShowFilter());
    }

    /**
     * Check if viewId contains theme id
     */
    public function testGetViewId()
    {
        $oAList = new oeThemeSwitcherAList();
        $sViewId = $oAList->getViewId();

        $this->assertContains("azure", $sViewId);
    }
}
