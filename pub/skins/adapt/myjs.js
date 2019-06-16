
function debuglog(s) {
    console.log(s)
}

function getRelPath(urlstring) {
    url = new this.URL(urlstring)
    return decodeURI(url.pathname).split('/').slice(-2).join('/')
}
function afterLoad() {
    debuglog('started')
    // expects like "デザイン/Pepperプラグイン実装"
    var currelpos = getRelPath(window.location.href)
    var alllinks = this.document.querySelectorAll(".selflink")

    for (link of alllinks) {
        var url = new this.URL(link.href)
        if (url.search) {
            continue
        }
        var relpath = getRelPath(url.origin + url.pathname)

        if (currelpos === relpath) {
            debuglog(link)
            var relpathlast = relpath.split('/').slice(-1)[0]
            if (relpathlast === link.innerText) {
                link.scrollIntoView()
                return
            }
        }
    }
}

onload = afterLoad
