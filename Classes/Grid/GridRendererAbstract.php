<?php
namespace TYPO3\CMS\Vidi\Grid;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Fabien Udriot <fabien.udriot@typo3.org>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Class rendering relation
 */
abstract class GridRendererAbstract implements GridRendererInterface {

	/**
	 * @var \TYPO3\CMS\Vidi\Domain\Model\Content
	 */
	 protected $object;

	/**
	 * @var string
	 */
	protected $fieldName;

	/**
	 * @var array
	 */
	protected $fieldConfiguration = array();

	/**
	 * @var array
	 */
	protected $gridRendererConfiguration = array();

	/**
	 * @return \TYPO3\CMS\Vidi\Domain\Model\Content
	 */
	public function getObject() {
		return $this->object;
	}

	/**
	 * @param \TYPO3\CMS\Vidi\Domain\Model\Content $object
	 * @return $this
	 */
	public function setObject($object) {
		$this->object = $object;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getFieldName() {
		return $this->fieldName;
	}

	/**
	 * @param string $fieldName
	 * @return $this
	 */
	public function setFieldName($fieldName) {
		$this->fieldName = $fieldName;
		return $this;
	}

	/**
	 * @return array
	 */
	public function getFieldConfiguration() {
		return $this->fieldConfiguration;
	}

	/**
	 * @param array $fieldConfiguration
	 * @return $this
	 */
	public function setFieldConfiguration($fieldConfiguration) {
		$this->fieldConfiguration = $fieldConfiguration;
		return $this;
	}

	/**
	 * @return array
	 */
	public function getGridRendererConfiguration() {
		return $this->gridRendererConfiguration;
	}

	/**
	 * @param array $gridRendererConfiguration
	 * @return $this
	 */
	public function setGridRendererConfiguration($gridRendererConfiguration) {
		$this->gridRendererConfiguration = $gridRendererConfiguration;
		return $this;
	}
}
