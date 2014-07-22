<?php
namespace Craft;

class RangeSliderField_RangeFieldType extends BaseFieldType
{
	public function getName()
	{
		return Craft::t('Range Slider');
	}
	/**
	 * Defines the settings.
	 *
	 * @access protected
	 * @return array
	 */
	protected function defineSettings()
	{
		return array(
			'minValue'   => array(AttributeType::Number,'default' => ('0'), 'required' => true),
			'maxValue'   => array(AttributeType::Number,'default' => ('1'), 'required' => true),
			'stepsValue'   => array(AttributeType::Number,'default' => ('0'))
		);
	}
	/**
	 * Returns the field's settings HTML.
	 *
	 * @return string|null
	 */
	public function getSettingsHtml()
	{
		return craft()->templates->render('rangesliderfield/settings', array(
			'settings' => $this->getSettings()
		));
	}
	/**
	 * Display fieldtype
	 *
	 * @param string $name  Our fieldtype handle
	 * @return string Return our fields input template
	 */
	public function getInputHtml($name, $value)
	{
<<<<<<< HEAD
	$id = craft()->templates->formatInputId($name);
=======
>>>>>>> 84838943ee7a443691fff87bfeee53fbe6e35827

    // Figure out what that ID is going to look like once it has been namespaced
    $namespacedId = craft()->templates->namespaceInputId($id);

<<<<<<< HEAD
		return craft()->templates->render('rangesliderfield/_fields/input', array (
			'id' => $id,
=======
		return craft()->templates->render('rangesliderfield/_fields/input', array(
>>>>>>> 84838943ee7a443691fff87bfeee53fbe6e35827
			'name'  => $name,
			'value' => $value,
			'namespacedId' => $namespacedId,
			'settings' => $this->getSettings()
		));
	}
}