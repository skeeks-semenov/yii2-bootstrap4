<?php
/**
 * @link https://cms.skeeks.com/
 * @copyright Copyright (c) 2010 SkeekS
 * @license https://cms.skeeks.com/license/
 * @author Semenov Alexander <semenov@skeeks.com>
 */

namespace skeeks\bootstrap4;

/**
 * @author Semenov Alexander <semenov@skeeks.com>
 */
class Modal extends \yii\bootstrap4\Modal
{
    /**
     * @param $header
     */
    public function setHeader($header)
    {
        $this->title = $header;
    }


}
