
function debuglog(s) {
    console.log(s)
}

function getRelPath(urlstring) {
    url = new this.URL(urlstring)
    return decodeURI(url.pathname).split('/').slice(-2).join('/')
}
function isEqualPathInWiki(a,b) {
	var a = a.toLowerCase().replace('_','')
	var b = b.toLowerCase().replace('_','')
	
	return a===b
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
            if (isEqualPathInWiki(relpathlast, link.innerText)) {
<<<<<<< HEAD
                // make sidebar selflink yellow
                link.style.backgroundColor = 'yellow';

=======
>>>>>>> d4fd6a673d93f6f4e04a7bb0deda9a8499f50996
            	// Find parent <ul> and scroll to it
            	var ul = link.parentElement;
            	while(ul && ul.nodeName != "UL") {
            		ul = ul.parentElement
            	}
                
<<<<<<< HEAD
            	if(ul) {
            		ul.previousSibling.scrollIntoView()
                }

=======
            	if(ul)
            		ul.previousSibling.scrollIntoView()
                
>>>>>>> d4fd6a673d93f6f4e04a7bb0deda9a8499f50996
                return
            }
        }
    }
}

onload = afterLoad
