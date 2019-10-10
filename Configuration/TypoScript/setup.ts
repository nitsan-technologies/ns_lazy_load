page.includeJSFooter{
    lazy = EXT:ns_lazy_load/Resources/Public/JavaScript/jquery.lazyload.js
    mainScript = EXT:ns_lazy_load/Resources/Public/JavaScript/main.js
}

lib.contentElement{
  templateRootPaths {
    200 = EXT:ns_lazy_load/Resources/Private/Element/Templates/
  }

  partialRootPaths {
    200 = EXT:ns_lazy_load/Resources/Private/Element/Partials/
  }
}

plugin.tx_nslazyload._CSS_DEFAULT_STYLE (

    figure {
      display: block;
    }

    img {
      border: 0;
      width: 220px;
      height: 280px;
    }

    img:not([src]) {
      visibility: hidden;
    }

    /* Fixes Firefox anomaly during image load */
    @-moz-document url-prefix() {
      img:-moz-loading {
        visibility: hidden;
      }
    }

)