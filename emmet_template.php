<?php 
defined('_JEXEC') or die;
use Joomla\CMS\Factory;	
/**
 * emmet.require system plugin
 *
 * @since  1.0
 */
class plgSystememmet_template extends JPlugin
{	
	/**
	 * Constructor.
	 *
	 * @param   object  &$subject  The object to observe.
	 * @param   array   $config	An optional associative array of configuration settings.
	 *
	 * @since   1.0
	 */
	public function __construct(&$subject, $config)
	{
		// Calling the parent Constructor
		parent::__construct($subject, $config);		
	}
	public function onAfterDispatch()
	{
		$document = Factory::getDocument();
		$app  = JFactory::getApplication();
		
		// find curent view and component
		$view = $app->input->getCmd('view');
		$option=$app->input->getCmd('option');
		
		if($option=="com_templates" && $view=="template")
		{			
			$document->addScript(JURI::root()."plugins/system/emmet_template/js/emmet.min.js");
			$document->addScript(JURI::root()."plugins/system/emmet_template/js/helper_emmet.js");
			$document->addScriptDeclaration("emmet.require('textarea').setup({
			pretty_break: true, // enable formatted line breaks (when inserting 
					            // between opening and closing tag) 
			use_tab: true       // expand abbreviations by Tab key
			});");
		}
	}
}
?>