<!DOCTYPE html>
<html class="no-js css-menubar" lang="zh-cn">

<head>
    <!-- 资源 -->
    <?php echo view('layouts/header', ['title' => 'Codeingiter4 Forum']); ?>
</head>

<body>

<?php echo view('layouts/header_menu'); ?>

<main class="site-page">

    <div class="page-container">
        <div class="page page-full bg-white animsition page-forum">

            <!-- 左侧菜单 -->
            <?php echo view('layouts/left_menu'); ?>

            <div class="page-main">

                <div class="page-header">
                    <h1 class="page-title">Web 开发者</h1>
                </div>

                <div class="page-content tab-content page-content-table nav-tabs-animate">
                    <div class="tab-pane animation-fade active" id="forum-newest" role="tabpanel">
                        <table class="table is-indent">
                            <tbody>
                            <tr data-url="/data/examples/pages/forum-panel.tpl" data-toggle="slidePanel">
                                <td class="pre-cell"></td>
                                <td class="cell-60 responsive-hide">
                                    <a class="avatar" href="javascript:;">
                                        <img class="img-responsive" src="<?php echo base_url('images/portraits/1.jpg'); ?>" alt="...">
                                    </a>
                                </td>
                                <td>
                                    <div class="content">
                                        <div class="title">
                                            页面底部的js异步加载在IE11上影响了onload加载，在...
                                            <div class="flags responsive-hide">
                                                <span class="sticky-top label label-round label-danger"><i class="icon wb-dropup" aria-hidden="true"></i>推荐</span>
                                                <i class="locked icon wb-lock" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="metas">
                                            <span class="author">甩了脆弱k</span> <span class="started">1 天前</span>
                                            <span class="tags">主题</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="cell-80 forum-posts">
                                    <span class="num">1</span> <span class="unit">回复</span>
                                </td>
                                <td class="suf-cell"></td>
                            </tr>
                            <tr data-url="/data/examples/pages/forum-panel.tpl" data-toggle="slidePanel">
                                <td class="pre-cell"></td>
                                <td class="cell-60 responsive-hide">
                                    <a class="avatar" href="javascript:;">
                                        <img class="img-responsive" src="<?php echo base_url('images/portraits/1.jpg'); ?>" alt="...">
                                    </a>
                                </td>
                                <td>
                                    <div class="content">
                                        <div class="title">
                                            android studio 引用库的问题
                                            <div class="flags responsive-hide">
                                                <i class="locked icon wb-lock" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="metas">
                                            <span class="author">为逸一线</span> <span class="started">2 天前</span>
                                            <span class="tags">资源</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="cell-80 forum-posts">
                                    <span class="num">2</span> <span class="unit">回复</span>
                                </td>
                                <td class="suf-cell"></td>
                            </tr>
                            <tr data-url="/data/examples/pages/forum-panel.tpl" data-toggle="slidePanel">
                                <td class="pre-cell"></td>
                                <td class="cell-60 responsive-hide">
                                    <a class="avatar" href="javascript:;">
                                        <img class="img-responsive" src="<?php echo base_url('images/portraits/1.jpg'); ?>" alt="...">
                                    </a>
                                </td>
                                <td>
                                    <div class="content">
                                        <div class="title">
                                            springmvc怎么访问/test/do和访问/test?
                                            <div class="flags responsive-hide"></div>
                                        </div>
                                        <div class="metas">
                                            <span class="author">慢慢坚强</span> <span class="started">3 天前</span>
                                            <span class="tags">入门</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="cell-80 forum-posts">
                                    <span class="num">3</span> <span class="unit">回复</span>
                                </td>
                                <td class="suf-cell"></td>
                            </tr>
                            <tr data-url="/data/examples/pages/forum-panel.tpl" data-toggle="slidePanel">
                                <td class="pre-cell"></td>
                                <td class="cell-60 responsive-hide">
                                    <a class="avatar" href="javascript:;">
                                        <img class="img-responsive" src="<?php echo base_url('images/portraits/1.jpg'); ?>" alt="...">
                                    </a>
                                </td>
                                <td>
                                    <div class="content">
                                        <div class="title">
                                            springmvc怎么访问/test/do和访问/test?
                                            <div class="flags responsive-hide"></div>
                                        </div>
                                        <div class="metas">
                                            <span class="author">慢慢坚强</span> <span class="started">3 天前</span>
                                            <span class="tags">入门</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="cell-80 forum-posts">
                                    <span class="num">3</span> <span class="unit">回复</span>
                                </td>
                                <td class="suf-cell"></td>
                            </tr>
                            <tr data-url="/data/examples/pages/forum-panel.tpl" data-toggle="slidePanel">
                                <td class="pre-cell"></td>
                                <td class="cell-60 responsive-hide">
                                    <a class="avatar" href="javascript:;">
                                        <img class="img-responsive" src="<?php echo base_url('images/portraits/1.jpg'); ?>" alt="...">
                                    </a>
                                </td>
                                <td>
                                    <div class="content">
                                        <div class="title">
                                            springmvc怎么访问/test/do和访问/test?
                                            <div class="flags responsive-hide"></div>
                                        </div>
                                        <div class="metas">
                                            <span class="author">慢慢坚强</span> <span class="started">3 天前</span>
                                            <span class="tags">入门</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="cell-80 forum-posts">
                                    <span class="num">3</span> <span class="unit">回复</span>
                                </td>
                                <td class="suf-cell"></td>
                            </tr>
                            <tr data-url="/data/examples/pages/forum-panel.tpl" data-toggle="slidePanel">
                                <td class="pre-cell"></td>
                                <td class="cell-60 responsive-hide">
                                    <a class="avatar" href="javascript:;">
                                        <img class="img-responsive" src="<?php echo base_url('images/portraits/1.jpg'); ?>" alt="...">
                                    </a>
                                </td>
                                <td>
                                    <div class="content">
                                        <div class="title">
                                            springmvc怎么访问/test/do和访问/test?
                                            <div class="flags responsive-hide"></div>
                                        </div>
                                        <div class="metas">
                                            <span class="author">慢慢坚强</span> <span class="started">3 天前</span>
                                            <span class="tags">入门</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="cell-80 forum-posts">
                                    <span class="num">3</span> <span class="unit">回复</span>
                                </td>
                                <td class="suf-cell"></td>
                            </tr>
                            <tr data-url="/data/examples/pages/forum-panel.tpl" data-toggle="slidePanel">
                                <td class="pre-cell"></td>
                                <td class="cell-60 responsive-hide">
                                    <a class="avatar" href="javascript:;">
                                        <img class="img-responsive" src="<?php echo base_url('images/portraits/1.jpg'); ?>" alt="...">
                                    </a>
                                </td>
                                <td>
                                    <div class="content">
                                        <div class="title">
                                            springmvc怎么访问/test/do和访问/test?
                                            <div class="flags responsive-hide"></div>
                                        </div>
                                        <div class="metas">
                                            <span class="author">慢慢坚强</span> <span class="started">3 天前</span>
                                            <span class="tags">入门</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="cell-80 forum-posts">
                                    <span class="num">3</span> <span class="unit">回复</span>
                                </td>
                                <td class="suf-cell"></td>
                            </tr>
                            <tr data-url="/data/examples/pages/forum-panel.tpl" data-toggle="slidePanel">
                                <td class="pre-cell"></td>
                                <td class="cell-60 responsive-hide">
                                    <a class="avatar" href="javascript:;">
                                        <img class="img-responsive" src="<?php echo base_url('images/portraits/1.jpg'); ?>" alt="...">
                                    </a>
                                </td>
                                <td>
                                    <div class="content">
                                        <div class="title">
                                            springmvc怎么访问/test/do和访问/test?
                                            <div class="flags responsive-hide"></div>
                                        </div>
                                        <div class="metas">
                                            <span class="author">慢慢坚强</span> <span class="started">3 天前</span>
                                            <span class="tags">入门</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="cell-80 forum-posts">
                                    <span class="num">3</span> <span class="unit">回复</span>
                                </td>
                                <td class="suf-cell"></td>
                            </tr>
                            </tbody>
                        </table>
                        <ul class="pagination pagination-gap">
                            <li class="disabled">
                                <a href="javascript:;">上一页</a>
                            </li>
                            <li class="active">
                                <a href="javascript:;">1 <span class="sr-only">(当前)</span></a>
                            </li>
                            <li>
                                <a href="javascript:;">2</a>
                            </li>
                            <li>
                                <a href="javascript:;">3</a>
                            </li>
                            <li>
                                <a href="javascript:;">4</a>
                            </li>
                            <li>
                                <a href="javascript:;">5</a>
                            </li>
                            <li>
                                <a href="javascript:;">下一页</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <?php echo view('layouts/right_menu'); ?>

            <button class="site-action btn-raised btn btn-danger btn-floating" type="button">
                <i class="icon wb-pencil" aria-hidden="true"></i>
            </button>
        </div>
    </div>

</main>

<div class="modal  fade modal-3d-flip-vertical" id="exampleTabs" aria-hidden="true" role="dialog" tabindex="-1" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #ffffff;text-align: center;">
                <button type="button" class="close" data-dismiss="modal" aria-label="关闭">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">PHP is best language.</h4>
            </div>
            <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                <li class="active" role="presentation">
                    <a data-toggle="tab" href="#login-from" role="tab" aria-expanded="true">
                        登录
                    </a>
                </li>
                <li role="presentation" class="">
                    <a data-toggle="tab" href="#register" role="tab" aria-expanded="false">
                        注册
                    </a>
                </li>
                <li role="presentation" class="">
                    <a data-toggle="tab" href="#forget" role="tab" aria-expanded="false">
                        找回密码
                    </a>
                </li>
            </ul>
            <div class="modal-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="login-from" role="tabpanel">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">手机号：</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="name" placeholder="手机号" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">密码：</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" name="password" placeholder="密码" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group"></div>
                            <div class="form-group">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <button type="button" class="btn btn-primary btn-block">登录</button>
                                </div>
                            </div>
                            <div class="form-group"></div>
                            <div class="form-group example-buttons">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-labeled social-wechat">
                                        <span class="btn-label"><i class="icon fa-wechat" aria-hidden="true"></i></span> 微信登录
                                    </button>
                                </div>
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-labeled social-qq">
                                        <span class="btn-label"><i class="icon fa-qq" aria-hidden="true"></i></span> QQ登录
                                    </button>
                                </div>
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-labeled social-github">
                                        <span class="btn-label"><i class="icon ti-github" aria-hidden="true"></i></span> Github
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="tab-pane" id="register" role="tabpanel">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">手机号：</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="name" placeholder="手机号" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">验证码：</label>
                                <div class="col-sm-3">
                                    <input type="email" class="form-control" name="email" placeholder="验证码" autocomplete="off">
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-info ladda-button mobile_code">
                                        <span class="ladda-label">发送验证码</span>
                                    </button>
                                </div>
                            </div>
                            <div class="form-group"></div>
                            <div class="form-group">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <button type="button" class="btn btn-primary btn-block">注册</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="forget" role="tabpanel">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">手机号：</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="name" placeholder="手机号" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">验证码：</label>
                                <div class="col-sm-3">
                                    <input type="email" class="form-control" name="email" placeholder="验证码" autocomplete="off">
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-info ladda-button mobile_code">
                                        <span class="ladda-label">发送验证码</span>
                                    </button>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">新密码：</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="name" placeholder="新密码" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group"></div>
                            <div class="form-group">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <button type="button" class="btn btn-primary btn-block">确认</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo view('layouts/footer'); ?>

<script type="text/javascript">
    Ladda.bind('.mobile_code', {
        callback: function( instance ) {
            var progress = 30;
            var interval = setInterval( function() {
                instance.setProgress( 1 - (progress * 0.033333) );
                progress --;
                if( progress <= 0 ) {
                    instance.stop();
                    clearInterval( interval );
                }
            }, 1000);
        }
    } );

</script>
</body>
</html>
