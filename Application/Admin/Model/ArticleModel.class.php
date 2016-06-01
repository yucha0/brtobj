<?php
/**
 * Created by PhpStorm.
 * User: yuchao
 * Date: 16/6/1
 * Time: 下午10:05
 */
namespace Admin\Model;
use Think\Model;

class ArticleModel extends Model
{
    protected $_auto = array(
        array('ctime','time',1,'function'),
        array('etime','time',3,'function'),
        array('status',1),
        array('view',0),
        array('comment',0),
    );
}