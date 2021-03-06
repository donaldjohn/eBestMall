<?php
/**
 * eBestMall
 * ============================================================================
 * Copyright 2015-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768 & 13391528  Time: 2017/11/18 13:22
 * E-mail: hongyukeji@126.com
 * ============================================================================
 */

namespace app\models;

use yii\db\ActiveRecord;

class Model extends ActiveRecord
{
    const STATUS_DELETED = 0;   // 状态 默认
    const STATUS_INACTIVE = 0;  // 状态 无效
    const STATUS_ACTIVE = 1;    // 状态 有效

    public function init()
    {
        //
    }
}