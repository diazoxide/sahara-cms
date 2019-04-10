(function (window) {
    function strip(html) {
        var tmp = document.createElement("DIV");
        tmp.innerHTML = html;
        return tmp.textContent || tmp.innerText || "";
    }

    var content = document.getElementById('blog-post-content');
    if (content != null) {
        var ad = '<a href="https://www.facebook.com/libraryyerevan/" target="_blank"><img src="https://norlur.am/uploads/img/banners/library.gif" alt="" style="width:100%"></a>';
        var text = content.innerHTML;
        window.postAdParagraph = 1;
        var final = text.replace(/<p>.*?<\/p>/g, function (match) {
                var cleanText = strip(match);
                if (cleanText.length > 100) {
                    window.postAdParagraph++;
                }
                if (window.postAdParagraph % 3 === 0) {
                    return match + ad;
                } else {
                    return match;
                }
            }
        );
        if (window.postAdParagraph === 0) {
            content.innerHTML += ad;
        } else {
            content.innerHTML = final;
        }
    }
})(window);
