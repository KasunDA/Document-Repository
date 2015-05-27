<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	use \Dropbox as dbx;
	
	class Dropbox_upload extends CI_Model {
	
		function upload_dropbox($filename){
			
		require_once '/home/u444165239/public_html/docs/static/sdk/dropbox-sdk/lib/Dropbox/autoload.php';

		
		$dropbox_config = array(
			'key'    => 'vgzb30cks9r7hye',
			'secret' => 'h37rmmoki0grsm3'
		);

		$appInfo = dbx\AppInfo::loadFromJson($dropbox_config);
		$webAuth = new dbx\WebAuthNoRedirect($appInfo, "PHP-Example/1.0");


		$accessToken = 'M77WVo2BIJIAAAAAAAB1nrrSLEvZ87b51tG64aT4LRn9w7WDdVDnbtC7SJc7FwfT';
		$dbxClient = new dbx\Client($accessToken, "PHP-Example/1.0");

		// Uploading the file
		$f = fopen('upload/'.$filename, "rb");
		$result = $dbxClient->uploadFile('/'.$filename, dbx\WriteMode::add(), $f);
		fclose($f);
		//print_r($result);

		// Get file info
		$file = $dbxClient->getMetadata('/'.$filename);

		// sending the direct link:
		$dropboxPath = $file['path'];
		$pathError = dbx\Path::findError($dropboxPath);
		if ($pathError !== null) {
			fwrite(STDERR, "Invalid <dropbox-path>: $pathError\n");
			die;
		}

		// The $link is an array!
		$link = $dbxClient->createTemporaryDirectLink($dropboxPath);
		// adding ?dl=1 to the link will force the file to be downloaded by the client.
		$dw_link = $link[0]."?dl=1";

		return $dw_link;
				
			}
			
		function test2(){
			$myfile = fopen("testfile.txt", "w");
		}
	
	}
	
	/* End of file get_books.php */
	/* Location: ./application/models/get_books.php */
 ?>