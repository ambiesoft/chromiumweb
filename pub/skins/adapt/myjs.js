
function debuglog(s) {
    // console.log(s)
}

function afterLoad() {
    debuglog('started')
    var relpos = "デザイン/Pepperプラグイン実装"
    var alllinks = this.document.querySelectorAll(".wikilink")

    for(link of alllinks) {
        url = new this.URL(link.href)
        relpath = decodeURI(url.pathname).split('/').slice(-2).join('/')

        if(relpos===relpath) {
            debuglog(link)
            link.scrollIntoView()
        }
    }
}

onload = afterLoad
