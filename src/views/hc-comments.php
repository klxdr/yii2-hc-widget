<?php

?>
<div id="hypercomments_widget"></div>
<script type="text/javascript">
    <?=$variables?>
    _hcwp = window._hcwp || [];
    _hcwp.push({widget:"Stream", widget_id: hc_siteid, xid: hc_identifier});
    (function() {
        if("HC_LOAD_INIT" in window)return;
        HC_LOAD_INIT = true;
        var lang = hc_language.substr(0, 2).toLowerCase();
        var hcc = document.createElement("script"); hcc.type = "text/javascript"; hcc.async = true;
        hcc.src = ("https:" == document.location.protocol ? "https" : "http")+"://w.hypercomments.com/widget/hc/"+hc_siteid+"/"+lang+"/widget.js";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hcc, s.nextSibling);
    })();
</script>
