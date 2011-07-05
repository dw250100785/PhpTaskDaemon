<?php
/**
 * @package PhpTaskDaemon
 * @subpackage Task\Exception
 * @copyright Copyright (C) 2011 Dirk Engels Websolutions. All rights reserved.
 * @author Dirk Engels <d.engels@dirkengels.com>
 * @license https://github.com/DirkEngels/PhpTaskDaemon/blob/master/doc/LICENSE
 */
namespace PhpTaskDaemon\Task\Exception;

class QueueTypeInvalid extends \Exception {
    
    public function getMessage() {
        return 'The specified queue type does not exists!';
    }
}