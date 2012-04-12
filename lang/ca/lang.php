<?php
/**
 * Catalan language file
 *
 * @author Marc Català <mcatala@ioc.cat>
 */

$lang['formLegend']  = "Importa un arxiu odt";
$lang['formIntroMessage'] = "Pots crear aquesta pàgina **important un arxiu odt** des de l'ordinador.";
$lang['formPageExistMessage'] = "**ATENCIÓ!!! Aquesta pàgina ja existeix. Si pujes l'arxiu odt la pàgina actual serà arxivada.**";

$lang['parserSummary'] = "Arxiu File build by odt2dw plugin from file";
$lang['parserOriginalFile'] = "Arxiu original";

$lang['xsl_subtable_message'] = "FIXME : Tableau complexe détecté. Le formatage doit vraisemblablement être corrigé.";

$lang['ok_infoPlugin']  = "Plugin instal·lat";
$lang['ok_img']         = "Imatge processada correntament";
$lang['ok_unzip']       = "Extracció correcte";

$lang['inf_xslt_lang'] = "No traduction available to xsl stylesheet. Default value applied";
$lang['inf_xslt_param'] = "Unable to set parameter on xsltProcessor. Default value applied";

$lang['er_acl_create'] = "Access rules to low to create a page here";
$lang['er_acl_edit'] = "Access rules to low to edit a page here";
$lang['er_acl_upload'] = "Access rules to low to import an attachment here";
$lang['er_apply'] = "Error when save the parse data";
$lang['er_apply_content'] = "Unable to store the content";
$lang['er_apply_img'] = "Unable to store the attachment";
$lang['er_apply_odtFile'] = "Unable to store the original odt file";
$lang['er_checkUploadResult'] = "Something is wrong on the upload file";
$lang['er_class_domDocument'] = "Fatal error : Unable to initialize DOMDocument object";
$lang['er_class_xsltProcessor'] = "Fatal error : Unable to initialize XsltProcessor object";
$lang['er_class_zipArchive'] = "Fatal error : Unable to initialize ZipArchive object";
$lang['er_id'] = "Wrong use of this plugin. _odt2dw must be call with defined namepage (\$ID)";
$lang['er_img_rename'] = "Unable to rename the image file";
$lang['er_img_unzip'] = "Unable to extract the image file";
$lang['er_invalidRoot'] = "RootNode of upload document is wrong. The file might be corrupt";
$lang['er_loadXml'] = "Unable to load the content of the document. The file might be corrupt";
$lang['er_loadXsl'] = "Xsl file is wrong (xml syntax).Please check and correct the file";
$lang['er_logFile'] = "Unable to write in the logFile";
$lang['er_msg_nomessage'] = "Wrong use of this plugin. _msg must be call with a message";
$lang['er_odtFile_format'] = "Wrong file upload. The file is not an odt file";
$lang['er_odtFile_getFromDownload'] = "Unable to catch the upload file";
$lang['er_odtFile_miss'] = "Wrong use of this plugin. _odt2dw must be call by an upload file form";
$lang['er_odtFile_tmpDir'] = "Unable to create the work temporary directory.";
$lang['er_odtFile_unzip'] = "Unable to extract file";
$lang['er_odtFile_upload'] = "Something wrong with the file's upload";
$lang['er_pg_dir'] = "Unable to remove the temporary directory";
$lang['er_pg_file'] = "Unable to delete the temporary file";
$lang['er_transform'] = "Something wrong with the parser transforming odtFile to dokuwiki content";
$lang['er_unzip_error'] = "Unable to extract file";
$lang['er_unzip_nofile'] = "No archive file found";
$lang['er_unzip_object'] = "Archive manager not load";
$lang['er_unzip_open'] = "Unable to open the archive file";
$lang['er_xslFile_exist'] = "The file set as **parserXslFile** don't exist or can be read";
$lang['er_xslFile_isfile'] = "The file set as **parserXslFile** is not a file";
$lang['er_xslFile_notset'] = "Wrong value on **parserXslFile** parameter ";
$lang['er_xsltProc'] = "Fatal error : Something wrong while set the xsltProcessor";
$lang['er_xslt_invalid'] = "Xsl file is wrong (xsl syntax).Please check and correct the file";

//Setup VIM: ex: et ts=2 enc=utf-8 :
