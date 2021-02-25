const Router = function(defaultPage) {
    const router = this;
    router.callbacks = {};
    router.pages = document.querySelectorAll(".page");//array
    console.log('router');

    router.init = function() {
       router.hideAll();
       router.setupLinks();
       router.go(defaultPage);
    }

    router.setupLinks = function() {
        const allLinks = document.querySelectorAll("[data-nav]");
        
        allLinks.forEach(link => {
            let pageID = link.getAttribute("data-nav");
            link.addEventListener("click", function(e){
                e.preventDefault();
                router.go(pageID);
            })
        })
    }

    router.hideAll = function() {
        router.pages.forEach( page => {
            page.style.display = "none";
        })
    }

    router.go = function(pageID) {
        router.hideAll();

        const page = document.getElementById(pageID);
        page.style.display = "block";

        if(router.callbacks(pageID)) {
            router.callbacks[pageID]();
        }
    }

    router.onPageLoad = function(PageID, callbackFn) {
        router.callbacks[pageID] = callbackFn;
        console.log(router.callbacks);
    }

    router.init();
}

export default Router;