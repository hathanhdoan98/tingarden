
var _arr_script = {};
function loadScript(scriptName, callback){
    if (!_arr_script[scriptName]) {
        _arr_script[scriptName] = 1;
        var body = document.getElementsByTagName('body')[0];
        var script = document.createElement('script');
        script.src = scriptName;
        script.onload = () => callback(null, script);
        script.onerror = () => callback(new Error(`Script load error for ${scriptName}`));
        body.appendChild(script);
    } else if (callback) {
        callback();
    }
};

function lazyloadImage() {
    loadScript(baseUrl + 'themes/js/appear.js', function () {
        setTimeout(function () {
            var i = $("[data-lazyload]");
            i.length > 0 && i.each(function () {
                var i = $(this),
                    e = i.attr("data-lazyload");
                i.appear(function () {
                    i.removeAttr("height").attr("src", e);
                }, {
                    accX: 0,
                    accY: 168
                }, "easeInCubic");
            });

            var e = $("[data-lazyload2]");
            e.length > 0 && e.each(function () {
                var i = $(this),
                    e = i.attr("data-lazyload2");
                i.appear(function () {
                    i.css("background-image", "url(" + e + ")");
                }, {
                    accX: 0,
                    accY: 168
                }, "easeInCubic");
            });
        }, 100);
    });

};

export {
    lazyloadImage,
    loadScript
}