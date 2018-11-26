(function ($) {
    function Preload(imgs, options) {
        // alert('preload');
        this.imgs = (typeof imgs === 'string') ? [imgs]:imgs;
        this.opts = $.extend({}, Preload.DEFAULTS, options);
        this._unordered();
    }
    Preload.DEFAULTS = {
        each: null,
        all: null
    };

    Preload.prototype._unordered = function () { //无序加载
        // alert('unorder');

        var imgs = this.imgs,
            opts = this.opts,
            count = 0,
            len = imgs.length;
        // alert('len:'+len);
        $.each(imgs, function(i,src)
        {
            if(typeof src != 'string')
            {
                return;
            }
            var imgObj = new Image();
            $(imgObj).on('load error', function () {
                opts.each && opts.each(count);

                // alert(count);
                if(count >= len -1)
                {
                    // alert('done');
                    opts.all && opts.all();

                }
                count++;
            });
            imgObj.src = src;
        });
    };
    $.extend({
        preload: function (imgs,opts) {
            new Preload(imgs,opts);
        }
    })

})(jQuery);