###############################################
Flow Player
Pre 0.1 proof of concept
###############################################

Credits
-----------------------------------------------

Developer
-----------------------------------------------
Nicolaas [at] sunnysideup.co.nz

Requirements
-----------------------------------------------
SilverStripe 2.3.0 or greater.

Documentation
-----------------------------------------------
see http://silverstripe-webdevelopment.com/flowplayer




Installation Instructions
-----------------------------------------------
1. Find out how to add modules to SS and add module as per usual.

2. copy configurations from this module's _config.php file
into mysite/_config.php file and edit settings as required.
NB. the idea is not to edit the module at all, but instead customise
it from your mysite folder, so that you can upgrade the module without redoing the settings.


3. add <% include FlowPlayer %> to your template

4. add the following to any SiteTree class

	static $has_one = array(
		"FlowPlayer" => "FlowPlayer"
	);

	function getCMSFields() {
		$fields = parent::getCMSFields();
		$fields->addFieldToTab("Root.Content.Movie", new FileIFrameField("FlowPlayer", "Movie (.flv extension)"));
		return $fields;
	}

// CONFIGURATIONS

5. write your own FlowPlayerConfig variable (in javascript)

6. refer to $f("MyPlayerID") to add more actions, etc...

7. theme the FlowPlayer.ss  and FlowPlayer.css file


