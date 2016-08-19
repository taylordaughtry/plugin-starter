<?php
namespace craft\plugins\sampleplugin;

use Craft;
use craft\app\helpers\Json;
use craft\plugins\sampleplugin\models\Settings;
use craft\plugins\sampleplugin\services\SampleService;

class Plugin extends \craft\app\base\Plugin
{
	protected function createSettingsModel()
	{
		return new Settings();
	}

	protected function getSettingsHtml()
	{
		$service = new SampleService();

		$settings = $this->getSettings();
		$errors = $settings->getErrors();
		$serviceInstance = $service->sampleMethod();

		return Craft::$app->view->renderTemplate('sampleplugin/settings', [
			'settings' => $settings,
			'errors' => Json::encode($errors),
			'service' => $serviceInstance
		]);
	}
}