/**
 * Admui-basic v1.3.0 (http://www.admui.com/)
 * Copyright 2015-2018 Admui Team
 * Licensed under the Admui License 1.0 (http://www.admui.com/about/#license)
 */
(function ($) {
    'use strict';

    App.extend({
        run: function (next) {
        
            next();
        }
    });

    $(function () {
       App.run();
    });

})(jQuery);
