<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="javascript:;">Codeingiter4 Forum</a>
    </div>
    <ul class="nav navbar-nav hidden-float">

    </ul>
    <div class="navbar-container container-fluid">

        <div class="collapse navbar-collapse navbar-collapse-toolbar">
            <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
                <li>
                    <a data-target="#exampleTabs" data-toggle="modal" role="button" style="padding-top: 12px;padding-bottom: 12px">
                        <button type="button" class="btn btn-danger">登录</button>
                    </a>
                </li>
                <li class="hidden-float">
                    <a class="icon wb-search collapsed" data-toggle="collapse" href="#example-navbar-inverse-search" role="button" aria-expanded="false">
                        <span class="sr-only">搜索切换</span></a>
                </li>
                <li class="dropdown" id="admui-navbarMessage">
                    <a data-toggle="dropdown" href="javascript:;" class="msg-btn" aria-expanded="false" data-animation="scale-up" role="button">
                        <i class="icon wb-bell" aria-hidden="true"></i>
                        <span class="badge badge-danger up msg-num"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                        <li class="dropdown-menu-header" role="presentation">
                            <h5>最新消息</h5>
                            <span class="label label-round label-danger"></span>
                        </li>
                        <li class="list-group" role="presentation">
                            <div class="navbar-message-content" id="admui-messageContent" data-height="220px" data-plugin="slimScroll"></div>

                        </li>
                        <li class="dropdown-menu-footer" role="presentation">
                            <a href="../../../system/account.html">
                                <i class="icon fa-navicon"></i> 所有消息
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <span class="avatar avatar-online">
                            <img src="http://cdn.admui.com/demo/iframe/1.2.0/images/portraits/5.jpg" alt="...">
                            <i></i>
                        </span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation">
                            <a href="javascript:;" role="menuitem">
                                <i class="icon wb-user" aria-hidden="true"></i> 简介
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="javascript:;" role="menuitem">
                                <i class="icon wb-payment" aria-hidden="true"></i> 账单
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="javascript:;" role="menuitem">
                                <i class="icon wb-settings" aria-hidden="true"></i> 设置
                            </a>
                        </li>
                        <li class="divider" role="presentation"></li>
                        <li role="presentation">
                            <a href="javascript:;" role="menuitem">
                                <i class="icon wb-power" aria-hidden="true"></i> 退出
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="icon fa-sign-out" id="admui-signOut" data-user="5" role="button">
                        <span class="sr-only">退出</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="navbar-search-overlap collapse" id="example-navbar-inverse-search" aria-expanded="false" style="width: 50%; margin: auto; height: 0px;">
        <form role="search">
            <div class="form-group">
                <div class="input-search">
                    <i class="input-search-icon wb-search" aria-hidden="true"></i>
                    <input type="text" class="form-control" name="site-search" placeholder="搜索...">
                    <button type="button" class="input-search-close icon wb-close collapsed" data-target="#example-navbar-inverse-search" data-toggle="collapse" aria-label="关闭" aria-expanded="false"></button>
                </div>
            </div>
        </form>
    </div>
</nav>

