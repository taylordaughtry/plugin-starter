<?php
namespace craft\plugins\sampleplugin\services;

use craft\app\base\Component;

class SampleService extends Component
{
	public function sampleMethod()
	{
		return 'This will return a string of text.';
	}
}