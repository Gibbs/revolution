<?php
/**
 * @package modx
 * @subpackage processors.system.databasetable
 */
if (!$modx->hasPermission('database')) return $modx->error->failure($modx->lexicon('permission_denied'));

$sql = 'OPTIMIZE TABLE '.$modx->escape($modx->getOption('dbname')).'.'.$modx->escape($scriptProperties['t']);
if ($modx->exec($sql) === false) {
    return $modx->error->failure($modx->lexicon('optimize_table_err'));
}
return $modx->error->success();