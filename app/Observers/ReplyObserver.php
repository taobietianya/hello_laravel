<?php

namespace App\Observers;

use App\Models\Reply;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class ReplyObserver
{
    //使用模型监控created事件，当模型数据成功创建时，方法被调用
    public function created(Reply $reply)
    {
        $reply->topic->increment('reply_count', 1);
    }

//    public function creating(Reply $reply)
//    {
//        $reply->content = clean($reply->content, 'user_topic_body');
//    }
}