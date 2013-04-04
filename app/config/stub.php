<?xml version="1.0" encoding="UTF-8"?>

<!-- add the real "Laravel_folder_path" in the bootstrap -->
<phpunit 
    bootstrap               = "Laravel_folder_path/laravel/cli/tasks/test/phpunit.php"
    backupGlobals           = "true"
    backupStaticAttributes  = "false"
    strict                  = "true"
    verbose                 = "true"
    colors                  = "true"
    >

	<!-- do not edit this part -->
	<testsuites>
		#replace#
	</testsuites>


  <!-- This is required for VPU to work correctly -->
  <listeners>
    <listener class="PHPUnit_Util_Log_JSON"></listener>
  </listeners>

</phpunit>