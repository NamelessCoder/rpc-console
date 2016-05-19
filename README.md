TYPO3 RPC: Tasks for typo3_console
==================================

Provides RPC tasks for calling the command controllers of the `typo3_console` extension.

Installation and usage
----------------------

1. Install as a composer dependency using `composer require namelesscoder/rpc-console`
2. Install in TYPO3 using the extension manager, or an RPC client with access to installing, or run the command
   `./typo3/cli_dispatch.phpsh extension:install rpc` (latter only works if TYPO3 is already installed)
3. Grant access to new tasks for any existing RPC tokens on the server
4. Use one of the RPC clients to call the tasks

That's it - enjoy!
