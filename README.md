
Flow Player
================================================================================

Credits
-----------------------------------------------

Developer
-----------------------------------------------
Nicolaas [at] sunnysideup.co.nz

Requirements
-----------------------------------------------
see composer.json

Documentation
-----------------------------------------------
see http://silverstripe-webdevelopment.com/flowplayer




Installation Instructions
-----------------------------------------------
1. Find out how to add modules to SS and add module as per usual.

2. Review configs and add entries to mysite/_config/config.yml
(or similar) as necessary.
In the _config/ folder of this module
you should to find some examples of config options (if any).


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


