<?php namespace Fisharebest\Localization;

/**
 * Class LocaleArMr
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleArMr extends LocaleAr {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryMr;
	}
}