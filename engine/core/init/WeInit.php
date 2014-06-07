<?php
/*
* ------------------------------------------------------------------
* Este arquivo não pode ser acessado diretamente
* ------------------------------------------------------------------
*/
if (!defined('ENG_BASEPATH')) exit(utf8_decode('Você não pode acessar este arquivo diretamente diretamente.'));


/*
* ------------------------------------------------------------------
* O WE-Framework irá fazer uma checagem dos arquivos do motor
* ------------------------------------------------------------------
*/
$core_files = array();

//Arquivos do motor
$core_files['autoload' ] 	= ENG_BASEPATH.'core/autoload/WeAutoload.Core.php';
$core_files['constants'] 	= ENG_BASEPATH.'core/constants/WeConstants.Core.php';
$core_files['database'] 	= ENG_BASEPATH.'core/database/WeDataBase.Core.php';
$core_files['default'] 		= ENG_BASEPATH.'core/default/WeDefault.Core.php';
$core_files['helpers'] 		= ENG_BASEPATH.'core/helpers/WeHelpers.Core.php';
$core_files['init'] 		= ENG_BASEPATH.'core/init/WeInit.Core.php';
$core_files['language'] 	= ENG_BASEPATH.'core/language/WeLanguage.Core.php';
$core_files['layout'] 		= ENG_BASEPATH.'core/layout/WeLayout.Core.php';
$core_files['module'] 		= ENG_BASEPATH.'core/module/WeModule.Core.php';
$core_files['security'] 	= ENG_BASEPATH.'core/security/WeSecurity.Core.php';

$flag_core = array();
/*
* ----------------------------------------------------------------
* Os arquivos existem? caso não, o framework não será iniciado
* ----------------------------------------------------------------
 */
if(count($core_files) > 0):
	foreach ($core_files as $path => $fcore):
		if(!is_file($fcore)):
			$flag_core[] = $fcore;
		endif;
	endforeach;
else:
	exit(utf8_decode("Nenhum arquivo do sistema encontrado, inclua os arquivos do sistema em: ").pathinfo(__FILE__, PATHINFO_BASENAME));
endif;

//Arquivos não encontrados
if(count($flag_core) > 0):
	foreach ($flag_core as $erfile):
		echo utf8_decode('Impossível iniciar o WE-Framework sem o arquivo: ').pathinfo($erfile, PATHINFO_BASENAME).'<br/>';
	endforeach;
	exit();
endif;

/*
* -----------------------------------------------------------------
* Se os arquivos do motor existirem, carrega os arquivos base
* -----------------------------------------------------------------
*/

foreach ($core_files as $fcore):
	//Incluindo arquivos do motor
	require_once $fcore;

endforeach;






