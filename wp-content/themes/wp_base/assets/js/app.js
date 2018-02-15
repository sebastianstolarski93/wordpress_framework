class themeToolsInit {

    constructor() {

    }

    loadScriptTheme (pathScriptStr) {

        this.scriptArr = pathScriptStr;

        if (this.scriptArr.length > 0) {
            this.scriptArr.forEach(function (item) {
                var scriptElem = document.createElement("script");
                scriptElem.src = item;

                document.body.appendChild(scriptElem);
            })
        } else {
            console.log('Not registered script in Wordpress');
        }

    }
}
window.loadedNetApp = true;