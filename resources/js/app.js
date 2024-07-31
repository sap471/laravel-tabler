import "./bootstrap";

import * as bootstrap from "bootstrap";

function init() {
    window.bootstrap = bootstrap;
}

window.document.onreadystatechange = function () {
    if (document.readyState === "complete") {
        init();
    }
};
