class Cookie {
    constructor(selector) {
        this.selector = selector;
    }
    init() {
        if (this.selector) {
            var cookies = {
                init: function () {
                    cookies.check();
                    $('#cookies-close').on('click', function (event) {
                        event.preventDefault();
                        cookies.create();
                        cookies.close();
                    });
                },
                close: function () {
                    // $('#cookies-container').hide();
                    $('#cookies-container').removeClass('cookies-hidden');
                },
                create: function () {
                    var CookieDate = new Date;
                    CookieDate.setFullYear(CookieDate.getFullYear() + 10);
                    document.cookie = "cookies=accept; expires=" + CookieDate.toGMTString();
                },
                check: function () {
                    var c = document.cookie;
                    if (c.indexOf('cookies=accept') !== -1) {
                        cookies.close();
                    } else {
                        $('#cookies-container').addClass('cookies-hidden');
                    }
                }
            };
            cookies.init();
        }
    }
}

