<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\NamelessCoder\Rpc\Implementation\Task\CommandTask::registerForCommand(
	\Helhum\Typo3Console\Command\BackendCommandController::class,
	'lock'
);
\NamelessCoder\Rpc\Implementation\Task\CommandTask::registerForCommand(
	\Helhum\Typo3Console\Command\BackendCommandController::class,
	'unlock'
);

\NamelessCoder\Rpc\Implementation\Task\CommandTask::registerForCommand(
	\Helhum\Typo3Console\Command\CacheCommandController::class,
	'warmup'
);

\NamelessCoder\Rpc\Implementation\Task\CommandTask::registerForCommand(
	\Helhum\Typo3Console\Command\CacheCommandController::class,
	'listGroups'
);

\NamelessCoder\Rpc\Implementation\Task\CommandTask::registerForCommand(
	\Helhum\Typo3Console\Command\CacheCommandController::class,
	'flush'
)->getTaskConfiguration()->setAvailable(FALSE);
// Disabled due to unsupported use of runlevel requesting via Bootstrap->requestRunLevel

\NamelessCoder\Rpc\Implementation\Task\CommandTask::registerForCommand(
	\Helhum\Typo3Console\Command\CacheCommandController::class,
	'flushGroups'
)->setFieldTypeForArgument(
	\NamelessCoder\RpcConsole\CacheGroupsField::class,
	'groups'
);

\NamelessCoder\Rpc\Implementation\Task\CommandTask::registerForCommand(
	\Helhum\Typo3Console\Command\CacheCommandController::class,
	'flushTags'
);

\NamelessCoder\Rpc\Implementation\Task\CommandTask::registerForCommand(
	\Helhum\Typo3Console\Command\CleanupCommandController::class,
	'updateReferenceIndex'
);

\NamelessCoder\Rpc\Implementation\Task\CommandTask::registerForCommand(
	\Helhum\Typo3Console\Command\CleanupCommandController::class,
	'updateReferenceIndex'
);

\NamelessCoder\Rpc\Implementation\Task\CommandTask::registerForCommand(
	\Helhum\Typo3Console\Command\ConfigurationCommandController::class,
	'removeByPath'
);

\NamelessCoder\Rpc\Implementation\Task\CommandTask::registerForCommand(
	\Helhum\Typo3Console\Command\DatabaseCommandController::class,
	'updateSchema'
)->setFieldTypeForArgument(
	\NamelessCoder\RpcConsole\SchemaTypesField::class,
	'schemaUpdateTypes'
);

\NamelessCoder\Rpc\Implementation\Task\CommandTask::registerForCommand(
	\Helhum\Typo3Console\Command\DocumentationCommandController::class,
	'generateXsd'
);

\NamelessCoder\Rpc\Implementation\Task\CommandTask::registerForCommand(
	\Helhum\Typo3Console\Command\FrontendCommandController::class,
	'request'
)->getTaskConfiguration()->setAvailable(FALSE);
// Disabled due to use of testing framework classes that may not be available on production

\NamelessCoder\Rpc\Implementation\Task\CommandTask::registerForCommand(
	\Helhum\Typo3Console\Command\InstallCommandController::class,
	'generatePackageStates'
);

\NamelessCoder\Rpc\Implementation\Task\CommandTask::registerForCommand(
	\Helhum\Typo3Console\Command\InstallCommandController::class,
	'environmentAndFolders'
);

\NamelessCoder\Rpc\Implementation\Task\CommandTask::registerForCommand(
	\Helhum\Typo3Console\Command\InstallCommandController::class,
	'defaultConfiguration'
)->getTaskConfiguration()->setAvailable(FALSE);
// Explicitly disabled but can be re-enabled by choice. Is potentially VERY destructive - is definitely an opt-in!

\NamelessCoder\Rpc\Implementation\Task\CommandTask::registerForCommand(
	\Helhum\Typo3Console\Command\SchedulerCommandController::class,
	'run'
)->getTaskConfiguration()->setAvailable(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('scheduler'));
// Available only when `scheduler` extension is loaded