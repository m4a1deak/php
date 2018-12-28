<?php
class WeChat{
    //php版本 : 7.1.0
    private $_appid; //appid
    private $_appsecret; //appsecret
    private $_token; //自己设置的token
    //回复模板
    private $tpl =array(
        'text'=>'<xml>
            <ToUserName><![CDATA[%s]]></ToUserName>
            <FromUserName><![CDATA[%s]]></FromUserName>
            <CreateTime>%s</CreateTime>
            <MsgType><![CDATA[text]]></MsgType>
            <Content><![CDATA[%s]]></Content>
            </xml>',
        'image'=>'<xml>
            <ToUserName><![CDATA[%s]]></ToUserName>
            <FromUserName><![CDATA[%s]]></FromUserName>
            <CreateTime>%s</CreateTime>
            <MsgType><![CDATA[image]]></MsgType>
            <Image>
            <MediaId><![CDATA[%s]]></MediaId>
            </Image>
            </xml>',
        'list' => '<xml>
                <ToUserName><![CDATA[%s]]></ToUserName>
                <FromUserName><![CDATA[%s]]></FromUserName>
                <CreateTime>%s</CreateTime>
                <MsgType><![CDATA[news]]></MsgType>
                <ArticleCount>%s</ArticleCount>
                <Articles>%s</Articles>
                </xml>',
        'item' => '<item>
                <Title><![CDATA[%s]]></Title>
                <Description><![CDATA[%s]]></Description>
                <PicUrl><![CDATA[%s]]></PicUrl>
                <Url><![CDATA[%s]]></Url>
                </item>',
    );
    public function __construct($appid,$appsecret,$token){
        $this->_appid = $appid;
        $this->_appsecret = $appsecret;
        $this->_token = $token;
    }
    //创建菜单
    public function _createMenu($menu){
        $result = $this->_request("https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$this->_getAccesstoken(),true,'post',$menu);
        $result = json_decode($result);
        if($result->errcode == 0){
            echo "菜单创建成功111";
        }
    }
    //查询菜单
    public function _queryMenu(){
        $menu = $this->_request('https://api.weixin.qq.com/cgi-bin/menu/get?access_token='.$this->_getAccesstoken());
        return $menu;
    }
    //删除菜单
    public function _deleteMenu(){
        $resule = $this->_request('https://api.weixin.qq.com/cgi-bin/menu/delete?access_token='.$this->_getAccesstoken());
        $resule = json_decode($resule);
        if($resule->errcode == 0){
            echo "菜单删除成功";
        }
    }
    //获取access_token
    private function _request($curl,$https=true,$method='get',$data=null){
        $ch = curl_init();//初始化
        curl_setopt($ch,CURLOPT_URL,$curl);//设置访问的URL
        curl_setopt($ch,CURLOPT_HEADER,false);//设置不需要头信息
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);//只获取页面内容 不输出

        //curl_setopt( $ch, CURLOPT_SAFE_UPLOAD, false);
        ////可以强制PHP的cURL模块拒绝旧的@语法，仅接受CURLFile式的文件。5.5的默认值为false，5.6的默认值为true。
        //@语法在5.5就已经被打了deprecated，在5.6中就直接被删除了（会产生 ErorException: The usage of the @filename API for file uploading is deprecated. Please use the CURLFile class instead）。
        //对于PHP 5.6+而言，手动设置CURL_SAFE_UPLOAD为false是毫无意义的。根本不是字面意义理解的“设置成false，就能开启旧的unsafe的方式”——旧的方式已经作为废弃语法彻底不存在了。PHP 5.6+ == CURLFile only，不要有任何的幻想。


        if($https){
            curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);//不做服务器端的认证
            curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,false);//不做客户端的认证
        }
        if($method == 'post'){
            curl_setopt($ch,CURLOPT_POST,true); //设置请求方式
            curl_setopt($ch,CURLOPT_POSTFIELDS,$data); // 设置post请求时的数据
        }
        $str = curl_exec($ch);//执行
        curl_close($ch);//关闭
        return $str;
        //{"access_token":"7ILpA5-g-VpWrHw7SCeO55KhBFC4umMV6AQScRpS8BLUfGyq8mEG9dM3Wwu-wfb8W3bmsOho_VIF5Fx5G5FmeC5hJOwFFHV6s5bfRh9aybsHUSdAFALYW","expires_in":7200}
    }
    //判断是否过期 在获取
    private function _getAccesstoken(){
        $file = './accesstoken';
        if(file_exists($file)){
            $content = file_get_contents($file);
            $content = json_decode($content);
            if(time()-filemtime($file)<$content->expires_in){
                return $content->access_token;
            }
        }
        $content = $this->_request('https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.$this->_appid.'&secret='.$this->_appsecret);
        file_put_contents($file,$content);
        $content = json_decode($content);
        return $content->access_token;
        //7ILpA5-g-VpWrHw7SCeO55KhBFC4umMV6AQScRpS8BLUfGyq8mEG9dM3Wwu-wfb8W3bmsOho_VIF5Fx5G5FmeC5hJOwFFHV6s5bfRh9aybsHUSdAFALYW
    }
    /*
        获取ticket
        expires_secords 二维码有效期 秒
        type 二维码类型 临时/永久
        scene 场景
     */
    public function _getTicket($expires_secords = 604800,$type = 'temp',$scene = 1){
        if($type == 'temp'){
            $data = '{"expire_seconds": '.$expires_secords.', "action_name": "QR_SCENE", "action_info": {"scene": {"scene_id": '.$scene.'}}}';
            return $this->_request("https://api.weixin.qq.com/cgi-bin/qrcode/create?access_token=".$this->_getAccesstoken(),true,'post',$data);
        }else{
            $data = '{"action_name": "QR_LIMIT_SCENE", "action_info": {"scene": {"scene_id":'.$scene.'}}}';
            return $this->_request("https://api.weixin.qq.com/cgi-bin/qrcode/create?access_token=".$this->_getAccesstoken(),true,'post',$data);
        }
    }
    //获取二维码
    public function _getQRCode($expires_secords,$type,$scene){
        $content = json_decode($this->_getTicket($expires_secords,$type,$scene));
        $ticket = $content->ticket;
        //echo $ticket;die;
        $image = $this->_request('https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket='.urlencode($ticket));
        //保存到本地
        //$file = './'.$type.$scene.'.jpg';
        //file_put_contents($file,$image);
        return $image;
    }
    public function valid()
    {
        $echoStr = $_GET["echostr"];
        if($this->checkSignature()){
            echo $echoStr;
            exit;
        }
    }
    //被动消息都是从这里开始的
    public function responseMsg()
    {
        //$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];  PHP7 已经废弃这个$GLOBALS["HTTP_RAW_POST_DATA"]
        $postStr = file_get_contents("php://input");  // php://input php://input可以读取没有处理过的POST数据。相较于$HTTP_RAW_POST_DATA而言，它给内存带来的压力较小，并且不需要特殊的php.ini设置。php://input不能用于enctype=multipart/form-data”
        if (!empty($postStr)) {
            $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
            switch ($postObj->MsgType) //类型
            {
                case 'event':$this->_doEvent($postObj);break;  //事件
                case 'text':$this->_doText($postObj);break;    //文本
                case 'image':$this->_doImage($postObj);break;  //图片
                case 'voice':$this->_doVoice($postObj);break;  //语音
                case 'video':$this->_doVideo($postObj);break;  //视频
                case 'location':$this->_doLocation($postObj);break;  //位置信息
                case 'shortvideo':$this->_doShortVideo($postObj);break;  //小视频
                case 'link':$this->_doLink($postObj);break;  //连接
                default:exit;
            }
        }
    }
    //文本处理
    private function _doText($postObj){
        $keyword = trim($postObj->Content);
        if(!empty( $keyword ))
        {
            $contentStr = $this->_request("http://api.douqq.com/?key=ZzF2bWo0dS9lMT11TnF0aHJFTk1zND14Q1JFQUFBPT0&msg=".$keyword,false);
            if($keyword == 'hello'||$keyword == '你好'||$keyword == '您好'){
                $contentStr = "您好";
            }
            if($keyword == 'java'){
                $contentStr = 'java是什么东西?';
            }
            if($keyword == 'php'){
                $contentStr = '我知道php是啥';
            }
            $resultStr = sprintf($this->tpl['text'], $postObj->FromUserName, $postObj->ToUserName, time(), $contentStr);
            echo $resultStr;
        }else{
            echo "Input something...";
        }
    }
    //地里位置信息
    private function _doLocation($postObj){
        $str = sprintf($this->tpl['text'],$postObj->FromUserName,$postObj->ToUserName,time(),'您所在的经度是:'.$postObj->Location_Y.',纬度是:'.$postObj->Location_X.'~');
        echo $str;
    }
    //图片处理
    private function _doImage($postObj){
        $str = sprintf($this->tpl['text'],$postObj->FromUserName,$postObj->ToUserName,time(),'您发送的图片在'.$postObj->PicUrl."..");
        echo $str;
    }
    //事件处理
    private function _doEvent($postObj){//事件的处理
        switch($postObj->Event){
            case 'subscribe':
                $this->_doSubscribe($postObj);break; //订阅
            case 'unsubscribe':
                $this->_doUnsubscribe($postObj);break; //取消订阅
            case 'CLICK':
                $this->_doClick($postObj);break;//点击事件
            case 'VIEW':
                $this->_doView($postObj);break;//点击事件
            default:;
        }
    }
    //点击处理
    private function _doClick($postObj){
        if($postObj->EventKey == 'news'){
            $news = array(
                array(
                    'title'=>'1FIFA:习近平表态中国想办世界杯 每万人1块球场',
                    'description'=>'国家主席习近平14日在人民大会堂会见国际足联主席因凡蒂诺。国际足联官网对这次会面予以了报道，并在文章中称，习近平表达了中国在未来举办世界杯的愿望。',
                    'picurl'=>'http://n.sinaimg.cn/sports/transform/20170615/-wnS-fyhfnrs2984452.jpg',
                    'url'=>'http://sports.sina.com.cn/g/pl/2017-06-15/doc-ifyhfnrf9127130.shtml'
                ),
                array('title'=>'1足协公布U23新政细则 外援首发人数匹配U23人数',
                    'description'=>'北京时间6月14日消息，中国足协发布关于征求《U23球员参加2018年中超、中甲联赛相关规定》意见的通知，其中关于2018赛季U23球员使用给出进一步解释，俱乐部25人注册名单必须有4名U23球员，每场18人大名单必须有3名U23球员，其中首发必须有一名U23球员，同时每场U23首发人数不得少于首发外援人数，在一场比赛里，U23累计上场人次不得少于外援累计上场人次，而外援累计上场每场不得超过3人次。',
                    'picurl'=>'http://n.sinaimg.cn/sports/transform/20170526/eQrP-fyfquxv3393845.jpg',
                    'url'=>'http://sports.sina.com.cn/china/j/2017-06-14/doc-ifyfzfyz4108118.shtml'
                ),
            );
            $it= '';
            $count = count($news);
            for($i = 0;$i<$count;$i++){
                $it .= sprintf($this->tpl['item'],$news[$i]['title'],$news[$i]['description'],$news[$i]['picurl'],$news[$i]['url']);
            }
            $content = sprintf($this->tpl['list'],$postObj->FromUserName,$postObj->ToUserName,time(),$count,$it);
            echo $content;
             /*$content = '<xml>
                <ToUserName><![CDATA['.$postObj->FromUserName.']]></ToUserName>
                <FromUserName><![CDATA['.$postObj->ToUserName.']]></FromUserName>
                <CreateTime>'.time().'</CreateTime>
                <MsgType><![CDATA[news]]></MsgType>
                <ArticleCount>2</ArticleCount>
                <Articles>
                <item>
                <Title><![CDATA[FIFA:习近平表态中国想办世界杯 每万人1块球场]]></Title>
                <Description><![CDATA[国家主席习近平14日在人民大会堂会见国际足联主席因凡蒂诺。国际足联官网对这次会面予以了报道，并在文章中称，习近平表达了中国在未来举办世界杯的愿望。]]></Description>
                <PicUrl><![CDATA[http://n.sinaimg.cn/sports/transform/20170615/-wnS-fyhfnrs2984452.jpg]]></PicUrl>
                <Url><![CDATA[http://sports.sina.com.cn/g/pl/2017-06-15/doc-ifyhfnrf9127130.shtml]]></Url>
                </item>
                <item>
                <Title><![CDATA[足协公布U23新政细则 外援首发人数匹配U23人数]]></Title>
                <Description><![CDATA[北京时间6月14日消息，中国足协发布关于征求《U23球员参加2018年中超、中甲联赛相关规定》意见的通知，其中关于2018赛季U23球员使用给出进一步解释，俱乐部25人注册名单必须有4名U23球员，每场18人大名单必须有3名U23球员，其中首发必须有一名U23球员，同时每场U23首发人数不得少于首发外援人数，在一场比赛里，U23累计上场人次不得少于外援累计上场人次，而外援累计上场每场不得超过3人次。]]></Description>
                <PicUrl><![CDATA[http://n.sinaimg.cn/sports/transform/20170526/eQrP-fyfquxv3393845.jpg]]></PicUrl>
                <Url><![CDATA[http://sports.sina.com.cn/china/j/2017-06-14/doc-ifyfzfyz4108118.shtml]]></Url>
                </item>
                </Articles>
                </xml>';
            echo $content;*/
        }
    }
    //连接处理
    private function _doView($postObj){

    }
    //关注
    private function _doSubscribe($postObj){
        $str = sprintf($this->tpl['text'],$postObj->FromUserName,$postObj->ToUserName,time(),'谢谢你的关注....');
        //file_put_contents('./tmp',$str);  检测用的
        //保存用户信息到数据库
        echo $str;
    }
    //取消关注
    private function _doUnsubscribe($postObj){
        //把用户信息从数据库删除
    }
    private function checkSignature()
    {
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];
        $token = TOKEN;
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );
        if( $tmpStr == $signature ){
            return true;
        }else{
            return false;
        }
    }
    //获取用户列表
    public function _getUserlist(){
        $content = $this->_request('https://api.weixin.qq.com/cgi-bin/user/get?access_token='.$this->_getAccesstoken());
        $content = json_decode($content);
        $users = $content->data->openid;
        return $users;
    }
    //群发消息
    public function _sendAll($content){
        $tpl = '{
   "touser":[
    %s
   ],
    "msgtype": "text",
    "text": { "content": "%s"}
}';
        $x = '';
        $users = $this->_getUserlist();
        for($i = 0;$i<count($users);$i++){
            $x .= '"'.$users[$i].'",';
        }
        $x = rtrim($x,',');
        $data = sprintf($tpl,$x,$content);
        $result = $this->_request('https://api.weixin.qq.com/cgi-bin/message/mass/send?access_token='.$this->_getAccesstoken(),true,'post',$data);
        $result = json_decode($result);
        if($result->errcode == 0){
            echo '发送成功';
        }else if($result->errcode == 45065){
            echo '这个消息已经发送过了';
        }
    }
    //上传图片素材
    public function _addMedia($type, $file){
        $curl='https://api.weixin.qq.com/cgi-bin/media/upload?access_token='.$this->_getAccesstoken().'&type='.$type;
		$data['type']=$type;
		//$data['media']='@'.$file;
		$data['media']= new CURLFile(realpath($file));
		$result = $this->_request($curl, true, "post", $data);
		echo $result;
    }

}




