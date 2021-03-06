<?php
namespace Admin\Model;
use Think\Model\RelationModel;
//use Think\Model;
class ChannelModel extends RelationModel{
    protected $_scope=array(
        //条件查询
        "channel_select"=>array(
            "field"=>array("channel_id","channel_title","channel_show"),
            "where"=>array(
                "channel_title"=>array("like","%%")
            ),
        ),
        //根据id获取
        "find_channel_byid"=>array(
            "field"=>array("channel_id","channel_title","channel_link","channel_link_m","channel_sort","channel_show","channel_web","channel_rule","channel_filter"),
            "where"=>array(
                "channel_id"=>null
            )
        ),
    );
}