<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="baidu-site-verification" content="2MKKT6mbuL"/>
    <meta id="metaDescription" name="description" content="场景标题，场景描述，由免费移动场景应用自营销管家提供技术支持"/>
    <meta name="keywords"
          content=",免费,免费移动场景应用自营销管家,移动场景自营销管家,移动场景自营销工具,活动自营销管家,场景展示,免费的报名页,收集潜在客户,二次营销,轻CRM,提高移动场景营销效果"/>
    <META HTTP-EQUIV="pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Cache-Control" CONTENT="no-store, must-revalidate">
    <META HTTP-EQUIV="expires" CONTENT="Wed, 26 Feb 1997 08:21:57 GMT">
    <META HTTP-EQUIV="expires" CONTENT="0">
    <meta id="eqMobileViewport" name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=no"
          servergenerated="true">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
    <title><?php echo ($confinfo2[scenename_varchar]); ?></title>

    <!-- compiled CSS -->
    <link rel="stylesheet" href="/Public/css/eqShow-3.6.2_view.css"/>
</head>
<body>
<div id="ppitest" style="width:1in;visible:hidden;padding:0px"></div>
<div class="p-index main phoneBox" id="con" style="display: none;">
    <!--上下滚动 start-->
    <div class="top"></div>
    <div class="phone_menubar"></div>
    <div class="scene_title_baner" style="display: none">
        <div class="scene_title"></div>
    </div>
    <div class="nr">
        <!-- <div id="audio_btn" class="loading_background">
            <div id="yinfu" class="loading_yinfu"></div>
            <audio loop="" src="" id="media" autoplay="" preload></audio>
        </div> -->
        <div id="audio_btn" class="off">
            <div id="yinfu"></div>
            <audio loop src="" id="media" autoplay="" preload></audio>
        </div>
        <div id="loading" class="loading">
            <div class="loadbox">
                <div class="loadlogo"></div>
                <div class="loadbg"></div>
            </div>
        </div>
    </div>
    <div class="bottom"></div>

    <!--上下滚动代码 end-->
</div>

<!-- <div style = "position: absolute;left: 100px; top: 100px;">
    <button id = "pre_page" type = "button" onclick = "prePage()">上一页</button>
    <button id = "next_page" type = "button" onclick = "nextPage()">下一页</button>
</div> -->
<script>

</script>
</body>
<script>
    var web_logo = '<?php echo ($sys["web_logo"]); ?>';
    var web_site = '<?php echo ($sys["web_site"]); ?>';
    var web_copyright = '<?php echo ($sys["web_copyright"]); ?>';

    var PREFIX_URL = "http://" + window.location.host + "/";
    var PREFIX_S1_URL = "http://" + window.location.host + "/json/";
    var PREFIX_S2_URL = "http://" + window.location.host + "/index.php";

    var PREFIX_HOST = "http://" + window.location.host + "/index.php";
    var PREFIX_FILE_HOST = "http://" + window.location.host + "/Uploads/";
    var CLIENT_CDN = "http://" + window.location.host + "/Public/css/";


    var clientWidth = document.documentElement.clientWidth;
    var INTERVAL_OBJ = {}; // 用于图集使用的定时器对象
    var systemid = "<?php echo ($systemid); ?>"

</script>
<!--<script type="text/javascript" src="http://as.eqxiu.com/view/js/resource.js"></script>-->
<script src="/Public/css/waiwan/jquery.min.js"></script>
<!-- compiled JavaScript -->
<script type="text/javascript" src="/Public/eq/3.6/eqShow-3.6.2_view.js"></script>

<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script type="text/javascript" src="http://m.babyxiang.cn/Public/static/js/wechat/baby.js"></script>
<script src="http://m.babyxiang.cn/Public/static/js/jquery.cookie.js"></script>
<script>
    $(function(){

        var dataobj = {
            urlRouter:'<?php echo ($_GET['id']); ?>'
        }
        BABY.share(dataobj)

        if (systemid ) {
            var myVar = setInterval(function () {
                if ($(".getqocde").length == 1) {
                    alert('xx')
                    clearInterval(myVar)
                    getQcode()
                }
            }, 1000);

        }
    })
    function getQcode()
    {
        $.getJSON(BABY.domain + 'index.php?m=wechat&c=client&a=getQcode&jsoncallback=?', {systemid: systemid}, function (data) {
            if(data.status == 1) {
                $(".getqocde").attr('src', data.qcode)
            }
        })
    }

</script>
<div style="opacity:0; ">

</div>
</html>