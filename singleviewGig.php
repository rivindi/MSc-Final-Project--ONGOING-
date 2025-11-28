<?php
session_start();
?><!DOCTYPE html>
<html lang="en-US" class="no-js">

    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <title>Single view &#8211; Design Master</title>
        <meta name='robots' content='max-image-preview:large' />
        <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
        <link rel="alternate" type="application/rss+xml" title="Freeio &raquo; Feed" href="feed/index.html" />
        <link rel="alternate" type="application/rss+xml" title="Freeio &raquo; Comments Feed" href="comments/feed/index.html" />
        <link rel="alternate" type="application/rss+xml" title="Freeio &raquo; Web development, with HTML, CSS, JavaScript and PHP Comments Feed" href="feed/index.html" />
        <script type="text/javascript">
            window._wpemojiSettings = {"baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/", "svgExt": ".svg", "source": {"concatemoji": "https:\/\/demoapus1.com\/freeio\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.2"}};
            /*! This file is auto-generated */
            !function(e, a, t) {
                var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d");
                function s(e, t) {
                    p.clearRect(0, 0, i.width, i.height), p.fillText(e, 0, 0);
                    e = i.toDataURL();
                    return p.clearRect(0, 0, i.width, i.height), p.fillText(t, 0, 0), e === i.toDataURL()
                }
                function c(e) {
                    var t = a.createElement("script");
                    t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
                }
                for (o = Array("flag", "emoji"), t.supports = {everything:!0, everythingExceptFlag:!0}, r = 0; r < o.length; r++)
                    t.supports[o[r]] = function(e) {
                        if (p && p.fillText)
                            switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                                case"flag":
                                    return s("\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !s("\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !s("\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
                                case"emoji":
                                    return!s("\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
                            }
                        return!1
                    }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
                t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function() {
                    t.DOMReady = !0
                }, t.supports.everything || (n = function() {
                    t.readyCallback()
                }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                    "complete" === a.readyState && t.readyCallback()
                })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e.wpemoji)))
            }(window, document, window._wpemojiSettings);
        </script>
        <style type="text/css">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 0.07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <link rel='stylesheet' id='wp-block-library-css' href='wp-includes/css/dist/block-library/style.minae48.css?ver=6.2' type='text/css' media='all' />
        <style id='wp-block-library-theme-inline-css' type='text/css'>
            .wp-block-audio figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-audio figcaption{color:hsla(0,0%,100%,.65)}.wp-block-audio{margin:0 0 1em}.wp-block-code{border:1px solid #ccc;border-radius:4px;font-family:Menlo,Consolas,monaco,monospace;padding:.8em 1em}.wp-block-embed figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-embed figcaption{color:hsla(0,0%,100%,.65)}.wp-block-embed{margin:0 0 1em}.blocks-gallery-caption{color:#555;font-size:13px;text-align:center}.is-dark-theme .blocks-gallery-caption{color:hsla(0,0%,100%,.65)}.wp-block-image figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-image figcaption{color:hsla(0,0%,100%,.65)}.wp-block-image{margin:0 0 1em}.wp-block-pullquote{border-bottom:4px solid;border-top:4px solid;color:currentColor;margin-bottom:1.75em}.wp-block-pullquote cite,.wp-block-pullquote footer,.wp-block-pullquote__citation{color:currentColor;font-size:.8125em;font-style:normal;text-transform:uppercase}.wp-block-quote{border-left:.25em solid;margin:0 0 1.75em;padding-left:1em}.wp-block-quote cite,.wp-block-quote footer{color:currentColor;font-size:.8125em;font-style:normal;position:relative}.wp-block-quote.has-text-align-right{border-left:none;border-right:.25em solid;padding-left:0;padding-right:1em}.wp-block-quote.has-text-align-center{border:none;padding-left:0}.wp-block-quote.is-large,.wp-block-quote.is-style-large,.wp-block-quote.is-style-plain{border:none}.wp-block-search .wp-block-search__label{font-weight:700}.wp-block-search__button{border:1px solid #ccc;padding:.375em .625em}:where(.wp-block-group.has-background){padding:1.25em 2.375em}.wp-block-separator.has-css-opacity{opacity:.4}.wp-block-separator{border:none;border-bottom:2px solid;margin-left:auto;margin-right:auto}.wp-block-separator.has-alpha-channel-opacity{opacity:1}.wp-block-separator:not(.is-style-wide):not(.is-style-dots){width:100px}.wp-block-separator.has-background:not(.is-style-dots){border-bottom:none;height:1px}.wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots){height:2px}.wp-block-table{margin:0 0 1em}.wp-block-table td,.wp-block-table th{word-break:normal}.wp-block-table figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-table figcaption{color:hsla(0,0%,100%,.65)}.wp-block-video figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-video figcaption{color:hsla(0,0%,100%,.65)}.wp-block-video{margin:0 0 1em}.wp-block-template-part.has-background{margin-bottom:0;margin-top:0;padding:1.25em 2.375em}
        </style>
        <link rel='stylesheet' id='wc-blocks-vendors-style-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style8caf.css?ver=8.7.5' type='text/css' media='all' />
        <link rel='stylesheet' id='wc-blocks-style-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style8caf.css?ver=8.7.5' type='text/css' media='all' />
        <link rel='stylesheet' id='classic-theme-styles-css' href='wp-includes/css/classic-themes.minae48.css?ver=6.2' type='text/css' media='all' />
        <style id='global-styles-inline-css' type='text/css'>
            body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
            .wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
            :where(.wp-block-columns.is-layout-flex){gap: 2em;}
            .wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
        </style>
        <link rel='stylesheet' id='contact-form-7-css' href='wp-content/plugins/contact-form-7/includes/css/styles77e1.css?ver=5.6.4' type='text/css' media='all' />
        <link rel='stylesheet' id='woocommerce-layout-css' href='wp-content/plugins/woocommerce/assets/css/woocommerce-layout9d27.css?ver=7.1.0' type='text/css' media='all' />
        <link rel='stylesheet' id='woocommerce-smallscreen-css' href='wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen9d27.css?ver=7.1.0' type='text/css' media='only screen and (max-width: 768px)' />
        <link rel='stylesheet' id='woocommerce-general-css' href='wp-content/plugins/woocommerce/assets/css/woocommerce9d27.css?ver=7.1.0' type='text/css' media='all' />
        <style id='woocommerce-inline-inline-css' type='text/css'>
            .woocommerce form .form-row .required { visibility: visible; }
        </style>
        <link rel='stylesheet' id='magnific-css' href='wp-content/plugins/wp-freeio/assets/js/magnific/magnific-popupf488.css?ver=1.1.0' type='text/css' media='all' />
        <link rel='stylesheet' id='perfect-scrollbar-jquery-css' href='wp-content/plugins/wp-private-message/assets/css/perfect-scrollbarae48.css?ver=6.2' type='text/css' media='all' />
        <link rel='stylesheet' id='leaflet-css' href='wp-content/plugins/wp-freeio/assets/js/leaflet/leafletcc1a.css?ver=1.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='freeio-woocommerce-css' href='wp-content/themes/freeio/css/woocommerce8a54.css?ver=1.0.0' type='text/css' media='all' />
        <link rel='stylesheet' id='freeio-theme-fonts-css' href='https://fonts.googleapis.com/css?family=DM+Sans:400,500,700,400,500,700&amp;subset=latin%2Clatin-ext%2Clatin%2Clatin-ext' type='text/css' media='all' />
        <link rel='stylesheet' id='all-awesome-css' href='wp-content/themes/freeio/css/all-awesomeaec5.css?ver=5.11.2' type='text/css' media='all' />
        <link rel='stylesheet' id='flaticon-css' href='wp-content/themes/freeio/css/flaticon8a54.css?ver=1.0.0' type='text/css' media='all' />
        <link rel='stylesheet' id='themify-icons-css' href='wp-content/themes/freeio/css/themify-icons8a54.css?ver=1.0.0' type='text/css' media='all' />
        <link rel='stylesheet' id='animate-css' href='wp-content/themes/freeio/css/animateaf6c.css?ver=3.6.0' type='text/css' media='all' />
        <link rel='stylesheet' id='bootstrap-css' href='wp-content/themes/freeio/css/bootstrapce52.css?ver=5.0.2' type='text/css' media='all' />
        <link rel='stylesheet' id='slick-css' href='wp-content/themes/freeio/css/slickee8b.css?ver=1.8.0' type='text/css' media='all' />
        <link rel='stylesheet' id='magnific-popup-css' href='wp-content/themes/freeio/css/magnific-popupf488.css?ver=1.1.0' type='text/css' media='all' />
        <link rel='stylesheet' id='perfect-scrollbar-css' href='wp-content/themes/freeio/css/perfect-scrollbard0c7.css?ver=0.6.12' type='text/css' media='all' />
        <link rel='stylesheet' id='sliding-menu-css' href='wp-content/themes/freeio/css/sliding-menu.min9d8e.css?ver=0.3.0' type='text/css' media='all' />
        <link rel='stylesheet' id='freeio-template-css' href='wp-content/themes/freeio/css/template5152.css?ver=1.0' type='text/css' media='all' />
        <style id='freeio-template-inline-css' type='text/css'>
            :root {--freeio-theme-color: #5BBB7B;--freeio-second-color: #1F4B3F;--freeio-text-color: #6B7177;--freeio-link-color: #222222;--freeio-link_hover_color: #5BBB7B;--freeio-heading-color: #222222;--freeio-theme-hover-color: #43a062;--freeio-second-hover-color: #222222;--freeio-main-font: 'DM Sans';--freeio-main-font-size: 15px;--freeio-main-font-weight: 400;--freeio-heading-font: 'DM Sans';--freeio-heading-font-weight: 700;--freeio-theme-color-005: rgba(91, 187, 123, 0.05);			  --freeio-theme-color-007: rgba(91, 187, 123, 0.07);			  --freeio-theme-color-010: rgba(91, 187, 123, 0.1);			  --freeio-theme-color-015: rgba(91, 187, 123, 0.15);			  --freeio-theme-color-020: rgba(91, 187, 123, 0.2);			  --freeio-second-color-050: rgba(31, 75, 63, 0.5);			}
        </style>
        <link rel='stylesheet' id='freeio-style-css' href='wp-content/themes/freeio/style5152.css?ver=1.0' type='text/css' media='all' />
        <script type='text/javascript' src='wp-includes/js/jquery/jquery.mina767.js?ver=3.6.3' id='jquery-core-js'></script>
        <script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min6b00.js?ver=3.4.0' id='jquery-migrate-js'></script>
        <link rel="https://api.w.org/" href="wp-json/index.html" />
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
        <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
        <meta name="generator" content="WordPress 6.2" />
        <meta name="generator" content="WooCommerce 7.1.0" />
        <link rel="canonical" href="index.html" />
        <link rel='shortlink' href='index0585.html?p=5557' />
        <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embedeeab.json?url=https%3A%2F%2Fdemoapus1.com%2Ffreeio%2Fservice%2Fweb-development-with-html-css-javascript-and-php%2F" />
        <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embedc1dc?url=https%3A%2F%2Fdemoapus1.com%2Ffreeio%2Fservice%2Fweb-development-with-html-css-javascript-and-php%2F&amp;format=xml" />
        <noscript>
        <style>.woocommerce-product-gallery{ opacity: 1 !important; }</style>
        </noscript>
        <meta name="generator" content="Powered by Slider Revolution 6.5.12 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
        <script>function setREVStartSize(e) {
                //window.requestAnimationFrame(function() {
                window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
                window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
                try {
                    var pw = document.getElementById(e.c).parentNode.offsetWidth,
                            newh;
                    pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
                    e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                    e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                    e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                    e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                    e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                    e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                    e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                    if (e.layout === "fullscreen" || e.l === "fullscreen")
                        newh = Math.max(e.mh, window.RSIH);
                    else {
                        e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                        for (var i in e.rl)
                            if (e.gw[i] === undefined || e.gw[i] === 0)
                                e.gw[i] = e.gw[i - 1];
                        e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                        e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                        for (var i in e.rl)
                            if (e.gh[i] === undefined || e.gh[i] === 0)
                                e.gh[i] = e.gh[i - 1];

                        var nl = new Array(e.rl.length),
                                ix = 0,
                                sl;
                        e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                        e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                        e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                        e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                        for (var i in e.rl)
                            nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                        sl = nl[0];
                        for (var i in nl)
                            if (sl > nl[i] && nl[i] > 0) {
                                sl = nl[i];
                                ix = i;
                            }
                        var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                        newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                    }
                    var el = document.getElementById(e.c);
                    if (el !== null && el)
                        el.style.height = newh + "px";
                    el = document.getElementById(e.c + "_wrapper");
                    if (el !== null && el) {
                        el.style.height = newh + "px";
                        el.style.display = "block";
                    }
                } catch (e) {
                    console.log("Failure at Presize of Slider:" + e)
                }
                //});
            }
            ;
        </script>
    </head>
    <body class="service-template-default single single-service postid-5557 wp-embed-responsive theme-freeio woocommerce-no-js apus-body-loading body-footer-mobile elementor-default elementor-kit-6">
        <div class="apus-page-loading">
            <div class="apus-loader-inner" ></div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
        <defs>
    <filter id="wp-duotone-dark-grayscale">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB" >
            <feFuncR type="table" tableValues="0 0.49803921568627" />
            <feFuncG type="table" tableValues="0 0.49803921568627" />
            <feFuncB type="table" tableValues="0 0.49803921568627" />
            <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
    </filter>
    </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
    <defs>
    <filter id="wp-duotone-grayscale">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB" >
            <feFuncR type="table" tableValues="0 1" />
            <feFuncG type="table" tableValues="0 1" />
            <feFuncB type="table" tableValues="0 1" />
            <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
    </filter>
    </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
    <defs>
    <filter id="wp-duotone-purple-yellow">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB" >
            <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
            <feFuncG type="table" tableValues="0 1" />
            <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
            <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
    </filter>
    </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
    <defs>
    <filter id="wp-duotone-blue-red">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB" >
            <feFuncR type="table" tableValues="0 1" />
            <feFuncG type="table" tableValues="0 0.27843137254902" />
            <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
            <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
    </filter>
    </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
    <defs>
    <filter id="wp-duotone-midnight">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB" >
            <feFuncR type="table" tableValues="0 0" />
            <feFuncG type="table" tableValues="0 0.64705882352941" />
            <feFuncB type="table" tableValues="0 1" />
            <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
    </filter>
    </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
    <defs>
    <filter id="wp-duotone-magenta-yellow">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB" >
            <feFuncR type="table" tableValues="0.78039215686275 1" />
            <feFuncG type="table" tableValues="0 0.94901960784314" />
            <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
            <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
    </filter>
    </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
    <defs>
    <filter id="wp-duotone-purple-green">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB" >
            <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
            <feFuncG type="table" tableValues="0 1" />
            <feFuncB type="table" tableValues="0.44705882352941 0.4" />
            <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
    </filter>
    </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
    <defs>
    <filter id="wp-duotone-blue-orange">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB" >
            <feFuncR type="table" tableValues="0.098039215686275 1" />
            <feFuncG type="table" tableValues="0 0.66274509803922" />
            <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
            <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
    </filter>
    </defs>
    </svg>
    <?php
    include './indexHeader.php';
    ?>
    <?php
    $itemid = $_GET["itemidz"];
    ?>
    <?php
    include './Phpfiles/DB.php';

    $sqlzy34 = "SELECT * FROM designerpostitem where id='$itemid'";
    $query4 = $conn->query($sqlzy34);
    foreach ($query4 as $value4) {
        ?>
        <div id="apus-main-content">
            <section class="service-detail-version-v1">
                <section id="primary" class="content-area inner">
                    <div id="main" class="site-main content" role="main">
                        <div class="single-listing-wrapper service" data-latitude="40.77229478697032" data-longitude="-73.92725741145593" data-img="https://demoapus1.com/freeio/wp-content/uploads/2022/11/service12-495x370.jpg" data-logo="wp-content/uploads/2022/11/service12-150x150.jpg">
                            <article id="post-5557" class="service-single post-5557 service type-service status-publish has-post-thumbnail hentry location-new-york service_category-development-it service_category-programming-tech">
                                <!-- heading -->
                                <div class="service-detail-header v1">
                                    <div class="service-detail-breadcrumbs">
                                        <div class="container d-md-flex align-items-center">
                                            <div class="left-column">
                                                <div class="breadcrumbs-simple">
                                                    <div class="container">
                                                        <ol class="breadcrumb">
                                                            <li><a href="index.php">Home</a>  </li>
                                                            <li><a href="Gigs.php">Gigs</a></li>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-column ms-auto">
                                                <div class="apus-social-share share-listing position-relative">
                                                    <div class="d-flex align-items-center">


                                                    </div>

                                                </div>


                                                <div id="service-report-wrapper-5557" class="service-report-wrapper mfp-hide">
                                                    <div class="inner">

                                                        <div class="content">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="header-detail-service" >
                                        <div class="container">
                                            <div class="info-detail-service">
                                                <div class="title-wrapper d-flex">
                                                    <h1 class="service-detail-title"><?php echo $value4['gigtitle']; ?></h1>
                                                    <span class="flex-shrink-0"></span>
                                                </div>
                                                <div class="service-metas-detail d-flex align-items-center flex-wrap">
                                                    <div class="service-author">
                                                        <a href="index.php">
                                                            <div class="freelancer-logo d-flex align-items-center">
                                                                <div class="image-wrapper"><img width="150" height="150" src="CustomImages/programmer.png" class="attachment-thumbnail size-thumbnail" alt="" /></div>
                                                            </div>
                                                            <span class="text">
                                                                <?php echo $value4['designernamez']; ?>	                
                                                            </span>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-content-area container">
                                    <!-- Main content -->
                                    <div class="row content-service-detail">
                                        <div class="list-content-service col-12 col-lg-8">
                                            <div class="content-main-service">
                                                <div class="service-detail-detail">
                                                    <ul class="list-service-detail d-flex align-items-center flex-wrap">
                                                        <li>
                                                            <div class="icon">
                                                                <i class="flaticon-calendar"></i>
                                                            </div>
                                                            <div class="details">
                                                                <div class="text">Delivery Time</div>
                                                                <div class="value">
                                                                    <?php echo $value4['deltime']; ?>                   
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="flaticon-goal"></i>
                                                            </div>
                                                            <div class="details">
                                                                <div class="text">Posted Date</div>
                                                                <div class="value">
                                                                    <?php echo $value4['datez']; ?>                    
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="flaticon-tracking"></i>
                                                            </div>
                                                            <div class="details">
                                                                <div class="text">Posted Time</div>
                                                                <div class="value">
                                                                    <div class="service-location">
                                                                        <a href="#"><?php echo $value4['timez']; ?>  </a>                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="property-detail-gallery gallery-listing">
                                                    <div class="gallery-listing-main">
                                                        <div class="slick-carousel slick-carousel-gallery-main" data-carousel="slick" data-items="1" data-large="1" data-medium="1" data-small="1" data-smallest="1" data-pagination="false" data-nav="true" data-autoplay="false" data-slickparent="true">
                                                            <div class="item">
                                                                <a href="Phpfiles/<?php echo $value4['imgurl']; ?>" data-elementor-lightbox-slideshow="freeio-gallery" class="p-popup-image">
                                                                    <div class="image-wrapper"><img src="Phpfiles/<?php echo $value4['imgurl']; ?>" class="attachment-xx1x1 size-xx1x1" alt="" /></div>
                                                                </a>
                                                            </div>


                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- service description -->
                                                <div class="service-detail-description">
                                                    <h3 class="title">Gig Description</h3>
                                                    <p><?php echo $value4['gigdesc']; ?></p>

                                                    <div class="max-650">
                                                        <div class="row">
                                                            <div class="col-12 col-md-4">
                                                                <h6 class="fw-500 mb-3">Gig Tags type</h6>
                                                                <div class="inner"><?php echo $value4['gigtags']; ?></div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="sidebar-wrapper sidebar-service col-lg-4 col-12 d-block d-lg-none">
                                                    <aside class="sidebar sidebar-listing-detail sidebar-right">
                                                        <aside class="widget widget_apus_service_price">
                                                            <div class="service-price">

                                                                <div class="service-price-inner">
                                                                    <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">LKR </span><span class="price-text"><?php echo $value4['gigprice']; ?></span></bdi></span>            
                                                                </div>
                                                                <div class="service-price-addons">


                                                                </div>

                                                            </div>
                                                        </aside>
                                                        <aside class="widget widget_apus_service_author">
                                                            <h2 class="widget-title"><span>About The Seller</span></h2>
                                                            <div class="widget-service-author">
                                                                <div class="service-author-heading d-flex align-items-center">
                                                                    <div class="service-author-image flex-shrink-0">
                                                                        <a href="freelancer/agent-pakulla/index.html">
                                                                            <div class="freelancer-logo d-flex align-items-center">
                                                                                <div class="image-wrapper"><img width="150" height="150" src="wp-content/uploads/2022/10/12-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" srcset="https://demoapus1.com/freeio/wp-content/uploads/2022/10/12-150x150.jpg 150w, https://demoapus1.com/freeio/wp-content/uploads/2022/10/12-300x300.jpg 300w, https://demoapus1.com/freeio/wp-content/uploads/2022/10/12-410x410.jpg 410w, https://demoapus1.com/freeio/wp-content/uploads/2022/10/12.jpg 420w" sizes="(max-width: 150px) 100vw, 150px" /></div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="service-author-right flex-grow-1">
                                                                        <h5><a href="freelancer/agent-pakulla/index.html">
                                                                                Agent Pakulla                </a>
                                                                        </h5>
                                                                        <!-- job -->
                                                                        <div class="freelancer-job">
                                                                            Nursing Assistant        
                                                                        </div>
                                                                        <div class="rating-reviews">
                                                                            <i class="fa fa-star"></i>
                                                                            <span class="rating text-link">4.0</span> 
                                                                            <span class="text">(1 Review)</span>        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="metas">
                                                                    <div class="freelancer-location with-title"><strong>Location:</strong>
                                                                        <a href="location/new-york/index.html">New York</a>            
                                                                    </div>

                                                                </div>
                                                                <a href="#apus-contact-form-wrapper" class="btn btn-theme btn-outline w-100 btn-service-contact-form btn-show-popup">Contact Me <i class="flaticon-right-up next"></i></a>
                                                            </div>
                                                            <div id="apus-contact-form-wrapper" class="apus-contact-form mfp-hide apus-popup-form" data-effect="fadeIn">
                                                                <a href="javascript:void(0);" class="close-magnific-popup ali-right"><i class="ti-close"></i></a>
                                                                <div class="contact-form-wrapper">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" id="a3"  placeholder="Subject">
                                                                            </div>
                                                                            <!-- /.form-group -->
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" id="a2"  disabled="" value="<?php echo $value4['ranidz']; ?>" >
                                                                            </div>
                                                                            <!-- /.form-group -->
                                                                        </div>

                                                                    </div>
                                                                    <div class="form-group">
                                                                        <textarea class="form-control" id="a1"  placeholder="Message" ></textarea>
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                    <?php
                                                                    if (!(isset($_SESSION["user_id"]))) {
                                                                        
                                                                    } else {
                                                                        ?>
                                                                        <button class="button btn btn-theme btn-outline w-100" onclick="SendMassegeTODesigner()">Send Message<i class="flaticon-right-up next"></i></button>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </aside>
                                                    </aside>
                                                </div>


                                                <?php
                                                $loaduseremail = $value4['designeremailz'];

                                                $sqlzy34revw = "SELECT COUNT(idreview) as x FROM itemhasreview where selleremailz='$loaduseremail' and status='Active'";
                                                $query4revw = $conn->query($sqlzy34revw);
                                                $countreviz = 0;
                                                foreach ($query4revw as $value4revw) {
                                                    $countreviz = $value4revw['x'];
                                                }
                                                ?>

                                                <?php
                                                $totaz2 = 0;
                                                $sqlzy34rev1 = "SELECT * FROM itemhasreview where selleremailz='$loaduseremail' and status='Active'";
                                                $query4rev1 = $conn->query($sqlzy34rev1);
                                                foreach ($query4rev1 as $value4rev1) {

                                                    $totaz = $value4rev1['startcount'];
                                                    $starval = (float) $totaz;
                                                    $totaz2 = $totaz2 + $starval;
                                                }
                                                if ($countreviz == 0) {
                                                    $gh = 0;
                                                } else {
                                                    $gh = $totaz2 / $countreviz;
                                                }

                                                $starvalzz = (float) $gh;
                                                $finstarz = $starvalzz * 20;
                                                ?>
                                                <!-- Review -->
                                                <div id="reviews">
                                                    <div class="box-info-white max-780">
                                                        <h3 class="title">(<?php echo $countreviz; ?>) Reviews</h3>
                                                        <div class="d-md-flex align-items-center">
                                                            <div class="detail-average-rating flex-column d-flex align-items-center justify-content-center">
                                                                <div class="average-value"><?php echo $gh; ?></div>
                                                                <div class="average-star">
                                                                    <div class="review-stars-rated-wrapper">
                                                                        <div class="review-stars-rated">
                                                                            <ul class="review-stars">
                                                                                <li><span class="fa fa-star"></span></li>
                                                                                <li><span class="fa fa-star"></span></li>
                                                                                <li><span class="fa fa-star"></span></li>
                                                                                <li><span class="fa fa-star"></span></li>
                                                                                <li><span class="fa fa-star"></span></li>
                                                                            </ul>
                                                                            <ul class="review-stars filled"  style="width: <?php echo $finstarz; ?>%" >
                                                                                <li><span class="fa fa-star"></span></li>
                                                                                <li><span class="fa fa-star"></span></li>
                                                                                <li><span class="fa fa-star"></span></li>
                                                                                <li><span class="fa fa-star"></span></li>
                                                                                <li><span class="fa fa-star"></span></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="total-rating">
                                                                    <?php echo $countreviz; ?> ratings				
                                                                </div>
                                                            </div>
                                                            <div class="detail-rating">
                                                                <div class="item-rating">
                                                                    <div class="list-rating">
                                                                        <div class="value-content">


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-rating">
                                                                    <div class="list-rating">
                                                                        <div class="value-content">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-rating">
                                                                    <div class="list-rating">
                                                                        <div class="value-content">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-rating">
                                                                    <div class="list-rating">
                                                                        <div class="value-content">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-rating">
                                                                    <div class="list-rating">
                                                                        <div class="value-content">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="comments">
                                                        <ol class="comment-list">

                                                            <?php
                                                            $sqlzy34rev = "SELECT * FROM itemhasreview where selleremailz='$loaduseremail' and status='Active' ";
                                                            $query4rev = $conn->query($sqlzy34rev);
                                                            foreach ($query4rev as $value4rev) {
                                                                ?>
                                                                <li class="comment byuser comment-author-admin even thread-even depth-1" id="li-comment-38">
                                                                    <div id="comment-38" class="the-comment ">
                                                                        <div class="avatar">
                                                                            <img alt='' src='https://secure.gravatar.com/avatar/87250bdf8483607f9d96cc0f31293e83?s=80&amp;d=mm&amp;r=g' srcset='https://secure.gravatar.com/avatar/87250bdf8483607f9d96cc0f31293e83?s=160&#038;d=mm&#038;r=g 2x' class='avatar avatar-80 photo' height='80' width='80' loading='lazy' decoding='async'/>		
                                                                        </div>
                                                                        <div class="comment-box">
                                                                            <div class="clearfix">
                                                                                <div class="name-comment">
                                                                                    <?php echo $value4rev['postedusername']; ?>				
                                                                                </div>
                                                                                <div class="meta d-flex align-items-center">
                                                                                    <div class="star-rating" title="Rated 4 out of 5">
                                                                                        <span class="review-avg"><i class="fa fa-star"></i><?php echo $value4rev['startcount']; ?></span>
                                                                                    </div>
                                                                                    <div class="date">
                                                                                        <?php echo $value4rev['datez']; ?>


                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div itemprop="description" class="comment-text">
                                                                            <p><?php echo $value4rev['commentz']; ?></p>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <!-- #comment-## -->
                                                                <?php
                                                            }
                                                            ?>
                                                            <!-- #comment-## -->

                                                            <!-- #comment-## -->
                                                        </ol>
                                                    </div>


                                                    <div id="review_form_wrapper" class="commentform ">
                                                        <div id="review_form">
                                                            <div class="commentform reset-button-default">
                                                                <div class="clearfix">
                                                                    <div id="respond" class="comment-respond">
                                                                        <h4 class="title comment-reply-title">Add a review <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">Cancel reply</a></small></h4>
                                                                        <div  id="commentform"  class="comment-form">
                                                                            <div class="choose-rating clearfix">
                                                                                <div class="choose-rating-inner row">
                                                                                    <div class="col-sm-12 col-xs-12">
                                                                                        <div class="form-group yourview">

                                                                                            <div class="wrapper-rating-form">

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="group-upload-preview clearfix"></div>
                                                                            <div class="form-group space-30"><label>Your Comment
                                                                                </label>
                                                                                <textarea id="h4" class="form-control" placeholder="Comment" name="comment" cols="45" rows="5" aria-required="true" required></textarea></div>
                                                                            <div class="row">
                                                                                <div class="col-12 col-sm-12">
                                                                                    <div class="form-group"><label>Star count</label><input id="h5" placeholder="add number between 1-5" class="form-control" name="author" type="text" size="30" aria-required="true" /></div>
                                                                                </div>

                                                                            </div>
                                                                            <p class="form-submit">
                                                                                <input type='hidden' name='comment_post_ID' value='5557' id='comment_post_ID' />                                                                                
                                                                                <input type='hidden' name='comment_parent' id='h3' value='<?php echo $value4['designeremailz']; ?>' />
                                                                                <input type='hidden' name='comment_parent' id='h2' value='<?php echo $value4['designernamez']; ?>' />
                                                                                <input type='hidden' name='comment_parent' id='h1' value='<?php echo $value4['designerid']; ?>' />
                                                                                <?php
                                                                                if (!(isset($_SESSION["user_id"]))) {
                                                                                    
                                                                                } else {
                                                                                    ?>

                                                                                    <input type="button"  class="btn btn-theme btn-inverse" value="Submit Review" onclick="addNewReviewUser()" /> 
                                                                                    <?php
                                                                                }
                                                                                ?>

                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- #respond -->
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sidebar-wrapper sidebar-service col-lg-4 col-12 d-none d-lg-block">
                                            <aside class="sidebar-listing-detail sidebar sidebar-right sticky-top">
                                                <aside class="widget widget_apus_service_price">
                                                    <div class="service-price">
                                                        <form id="service-add-to-cart-5557_uPjgK" class="service-add-to-cart" method="post">
                                                            <div class="service-price-inner">
                                                                <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">LKR</span><span class="price-text"> <?php echo $value4['gigprice']; ?></span></bdi></span>            
                                                            </div>
                                                            <div class="service-price-addons">
                                                                <div class="addon-item">
                                                                    <label for="addon-item-1915_uPjgK">
                                                                        <div class="content">
                                                                            <h5 class="title"></h5>
                                                                            <div class="inner">

                                                                            </div>
                                                                            <div class="price">
                                                                                <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol"></span><span class="price-text"></span></bdi></span>                                        
                                                                            </div>
                                                                        </div>
                                                                    </label>
                                                                </div>
                                                                <div class="addon-item">
                                                                    <label for="addon-item-1914_uPjgK">
                                                                        <div class="content">
                                                                            <h5 class="title"></h5>
                                                                            <div class="inner">

                                                                            </div>
                                                                            <div class="price">
                                                                            </div>
                                                                        </div>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </aside>


                                                <aside class="widget widget_apus_service_author">
                                                    <h2 class="widget-title"><span>About The Seller</span></h2>
                                                    <div class="widget-service-author">
                                                        <div class="service-author-heading d-flex align-items-center">
                                                            <div class="service-author-image flex-shrink-0">
                                                                <a href="#">
                                                                    <div class="freelancer-logo d-flex align-items-center">
                                                                        <div class="image-wrapper">
                                                                            <?php
                                                                            $emz = $value4['designeremailz'];
                                                                            $ratpointz = 0;
                                                                            $sqlzy341 = "SELECT * FROM sellerratingz where selleremailz='$emz'";
                                                                            $query41 = $conn->query($sqlzy341);
                                                                            foreach ($query41 as $value41) {

                                                                                $ratpointz22 = $value41['ratingz'];
                                                                                $ratpointz = floatval($ratpointz22);
                                                                            }
                                                                            ?>
                                                                            <img width="150" height="150" src="CustomImages/programmer.png" class="attachment-thumbnail size-thumbnail" alt=""  sizes="(max-width: 150px) 100vw, 150px" />
                                                                            <?php
                                                                            if ($ratpointz > 300) {
                                                                                ?>
                                                                                <span class="verified"><i class="flaticon-tick"></i></span>
                                                                                <?php
                                                                            } else {
                                                                                ?>

                                                                                <?php
                                                                            }
                                                                            ?>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="service-author-right flex-grow-1">
                                                                <h5><a href="#">
                                                                        <?php echo $value4['designernamez']; ?>         </a>
                                                                </h5>
                                                                <!-- job -->
                                                                <div class="freelancer-job">
                                                                    <?php echo $value4['designeremailz']; ?>        
                                                                </div>
                                                                <div class="rating-reviews">

                                                                    <span class="rating text-link"></span> 
                                                                    <span class="text"></span>        
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="metas">
                                                            <div class="freelancer-location with-title"><strong>Gig ID:</strong>
                                                                <a href="#"><?php echo $value4['ranidz']; ?> </a>            
                                                            </div>

                                                        </div>
                                                        <a href="#apus-contact-form-wrapper" class="btn btn-theme btn-outline w-100 btn-service-contact-form btn-show-popup">Contact Me 
                                                            <i class="flaticon-right-up next"></i></a>
                                                    </div>

                                                </aside>
                                            </aside>
                                        </div>
                                    </div>

                                </div>
                            </article>
                            <!-- #post-## -->
                        </div>
                    </div>
                    <!-- .site-main -->
                </section>
                <!-- .content-area -->
            </section>
        </div>
        <!-- .site-content -->
        <?php
    }
    include './indexFotter.php';
    ?>
    <a href="#" id="back-to-top" class="add-fix-top">
        <i class="ti-angle-up"></i>
    </a>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
                                                                                function addNewReviewUser() {

                                                                                    var reviewcomment = $('textarea#h4').val();
                                                                                    var ratingz = $('#h5').val();
                                                                                    var desid = $('#h1').val();
                                                                                    var desname = $('#h2').val();
                                                                                    var des_emailz = $('#h3').val();

                                                                                    if (reviewcomment == "") {

                                                                                        swal("Error!", "Enter valid review..!", "error");
                                                                                    } else if (ratingz == "") {
                                                                                        swal("Error!", "Enter valid number between 1 and 5..!", "error");
                                                                                    } else {
                                                                                        $.post("phpfiles/UserAddNewReview.php",
                                                                                                {
                                                                                                    reviewcomment: reviewcomment,
                                                                                                    ratingz: ratingz,
                                                                                                    desid: desid,
                                                                                                    desname: desname,
                                                                                                    des_emailz: des_emailz

                                                                                                },
                                                                                        function(data, status) {

                                                                                            if (data == "ok") {
                                                                                                swal("Your review hass been sent...!", {
                                                                                                    icon: "success",
                                                                                                });

                                                                                                window.location = "Gigs.php";
//                                                                               

                                                                                            } else {

                                                                                                swal("Error!", "" + data, "error");
                                                                                            }

                                                                                        });
                                                                                    }



                                                                                }

                                                                                function SendMassegeTODesigner() {
                                                                                    var message = $('textarea#a1').val();
                                                                                    var reffidz = $('#a2').val();
                                                                                    var subjec = $('#a3').val();

                                                                                    var desid = $('#h1').val();
                                                                                    var desname = $('#h2').val();
                                                                                    var des_emailz = $('#h3').val();
                                                                                    if (message == "" || reffidz == "" || subjec == "") {

                                                                                        swal("Error!", "Fill All feilds to Send Message..!", "error");
                                                                                    } else {
                                                                                        swal({
                                                                                            title: "Are you sure?",
                                                                                            text: "You want to send message to " + desname + "?",
                                                                                            icon: "warning",
                                                                                            buttons: true,
                                                                                            dangerMode: true,
                                                                                        })
                                                                                                .then(function(willDelete) {
                                                                                                    if (willDelete) {

                                                                                                        $.post("phpfiles/buyersendmessafetoseller.php",
                                                                                                                {
                                                                                                                    desid: desid,
                                                                                                                    desname: desname,
                                                                                                                    des_emailz: des_emailz,
                                                                                                                    message: message,
                                                                                                                    reffidz: reffidz,
                                                                                                                    subjec: subjec

                                                                                                                },
                                                                                                        function(data, status) {
                                                                                                            if (data == "ok") {


                                                                                                                swal("Done!Message Sent to Designer..!", {
                                                                                                                    icon: "success",
                                                                                                                });

                                                                                                                window.location = "Gigs.php";


                                                                                                            } else {

                                                                                                                swal("Error!", "" + data, "error");

                                                                                                            }

                                                                                                        });




                                                                                                    } else {

                                                                                                    }
                                                                                                });


                                                                                    }

                                                                                }




</script>
<script>
    window.RS_MODULES = window.RS_MODULES || {};
    window.RS_MODULES.modules = window.RS_MODULES.modules || {};
    window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
    window.RS_MODULES.defered = true;
    window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
    window.RS_MODULES.type = 'compiled';
</script>
<script>(function() {
        function maybePrefixUrlField() {
            if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
                this.value = "http://" + this.value;
            }
        }

        var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
        if (urlFields) {
            for (var j = 0; j < urlFields.length; j++) {
                urlFields[j].addEventListener('blur', maybePrefixUrlField);
            }
        }
    })();
</script>	<script type="text/javascript">
    (function() {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    })();
</script>
<link rel='stylesheet' id='elementor-frontend-css' href='wp-content/plugins/elementor/assets/css/frontend-lite.min7e2e.css?ver=3.8.1' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-5260-css' href='wp-content/uploads/elementor/css/post-526048cb.css?ver=1669091607' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-1860-css' href='wp-content/uploads/elementor/css/post-18605617.css?ver=1670037377' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-3167-css' href='wp-content/uploads/elementor/css/post-3167605e.css?ver=1669091608' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-5677-css' href='wp-content/uploads/elementor/css/post-5677605e.css?ver=1669091608' type='text/css' media='all' />
<link rel='stylesheet' id='wpfi-select2-css' href='wp-content/plugins/wp-freeio/assets/js/select2/select2.min631d.css?ver=4.0.5' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-2965-css' href='wp-content/uploads/elementor/css/post-2965d51b.css?ver=1669091609' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-css' href='wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min91ce.css?ver=5.16.0' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-6-css' href='wp-content/uploads/elementor/css/post-648cb.css?ver=1669091607' type='text/css' media='all' />
<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.2' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-0-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-brands-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css?ver=5.15.3' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css' href='wp-content/plugins/revslider/public/assets/css/rs65c66.css?ver=6.5.12' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
    #rs-demo-id {}
</style>
<script type='text/javascript' src='wp-includes/js/comment-reply.minae48.js?ver=6.2' id='comment-reply-js'></script>
<script type='text/javascript' src='wp-content/themes/freeio/js/bootstrap.bundle.mince52.js?ver=5.0.2' id='bootstrap-bundle-js'></script>
<script type='text/javascript' src='wp-content/themes/freeio/js/slick.minee8b.js?ver=1.8.0' id='slick-js'></script>
<script type='text/javascript' src='wp-content/themes/freeio/js/jquery.magnific-popup.minf488.js?ver=1.1.0' id='jquery-magnific-popup-js'></script>
<script type='text/javascript' src='wp-content/themes/freeio/js/jquery.unveilf488.js?ver=1.1.0' id='jquery-unveil-js'></script>
<script type='text/javascript' src='wp-content/themes/freeio/js/perfect-scrollbar.jquery.min91ce.js?ver=1.5.0' id='perfect-scrollbar-js'></script>
<script type='text/javascript' src='wp-content/themes/freeio/js/sliding-menu.min9d8e.js?ver=0.3.0' id='sliding-menu-js'></script>
<script type='text/javascript' id='freeio-functions-js-extra'>
    /* <![CDATA[ */
    var freeio_opts = {"ajaxurl": "https:\/\/demoapus1.com\/freeio\/wp-admin\/admin-ajax.php", "previous": "Previous", "next": "Next", "menu_back_text": "Back"};
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/freeio/js/functions8337.js?ver=20150330' id='freeio-functions-js'></script>
<script type='text/javascript' id='freeio-functions-js-after'>
    (function(html) {
        html.className = html.className.replace(/\bno-js\b/, 'js')
    })(document.documentElement);
</script>
<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/swv/js/index77e1.js?ver=5.6.4' id='swv-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>
    /* <![CDATA[ */
    var wpcf7 = {"api": {"root": "https:\/\/demoapus1.com\/freeio\/wp-json\/", "namespace": "contact-form-7\/v1"}, "cached": "1"};
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/index77e1.js?ver=5.6.4' id='contact-form-7-js'></script>
<script type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/rbtools.min5c66.js?ver=6.5.12' defer async id='tp-tools-js'></script>
<script type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/rs6.min5c66.js?ver=6.5.12' defer async id='revmin-js'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min53ec.js?ver=2.7.0-wc.7.1.0' id='jquery-blockui-js'></script>
<script type='text/javascript' id='wc-add-to-cart-js-extra'>
    /* <![CDATA[ */
    var wc_add_to_cart_params = {"ajax_url": "\/freeio\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/freeio\/?wc-ajax=%%endpoint%%", "i18n_view_cart": "View cart", "cart_url": "https:\/\/demoapus1.com\/freeio\/cart\/", "is_cart": "", "cart_redirect_after_add": "no"};
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min9d27.js?ver=7.1.0' id='wc-add-to-cart-js'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min8b1a.js?ver=2.1.4-wc.7.1.0' id='js-cookie-js'></script>
<script type='text/javascript' id='woocommerce-js-extra'>
    /* <![CDATA[ */
    var woocommerce_params = {"ajax_url": "\/freeio\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/freeio\/?wc-ajax=%%endpoint%%"};
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min9d27.js?ver=7.1.0' id='woocommerce-js'></script>
<script type='text/javascript' id='wc-cart-fragments-js-extra'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {"ajax_url": "\/freeio\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/freeio\/?wc-ajax=%%endpoint%%", "cart_hash_key": "wc_cart_hash_1923c0e457cb22f2838c1195f1c604ac", "fragment_name": "wc_fragments_1923c0e457cb22f2838c1195f1c604ac", "request_timeout": "5000"};
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min9d27.js?ver=7.1.0' id='wc-cart-fragments-js'></script>
<script type='text/javascript' src='wp-content/plugins/wp-freeio/assets/js/magnific/jquery.magnific-popup.minf488.js?ver=1.1.0' id='magnific-js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2' id='jquery-ui-core-js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/mouse.min3f14.js?ver=1.13.2' id='jquery-ui-mouse-js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/slider.min3f14.js?ver=1.13.2' id='jquery-ui-slider-js'></script>
<script type='text/javascript' src='wp-content/plugins/wp-freeio/assets/js/jquery.ui.touch-punch.min8337.js?ver=20150330' id='jquery-ui-touch-punch-js'></script>
<script type='text/javascript' id='wp-freeio-main-js-extra'>
    /* <![CDATA[ */
    var wp_freeio_opts = {"ajaxurl": "https:\/\/demoapus1.com\/freeio\/wp-admin\/admin-ajax.php", "ajaxurl_endpoint": "https:\/\/demoapus1.com\/freeio\/?wpfi-ajax=%%endpoint%%", "dashboard_url": "https:\/\/demoapus1.com\/freeio\/user-dashboard\/", "after_login_page_url": "https:\/\/demoapus1.com\/freeio\/user-dashboard\/", "after_login_page_freelancer_url": "https:\/\/demoapus1.com\/freeio\/user-dashboard\/", "after_register_page_url": "https:\/\/demoapus1.com\/freeio\/user-dashboard\/", "after_register_page_freelancer_url": "https:\/\/demoapus1.com\/freeio\/user-dashboard\/", "login_register_url": "https:\/\/demoapus1.com\/freeio\/login\/", "home_url": "https:\/\/demoapus1.com\/freeio\/", "cv_file_size_allow": "67108864", "cv_file_size_error": "File size should not greater than 67108864.", "cv_file_types_error": "Suitable files are doc, docx, pdf.", "cv_file_types": "[\"application\/msword\",\"application\/vnd.openxmlformats-officedocument.wordprocessingml.document\",\"application\/pdf\"]", "money_decimals": "0", "money_dec_point": ".", "money_thousands_separator": "", "show_more": "Show more", "show_more_icon": "", "show_less": "Show less", "show_less_icon": "", "geocoder_country": "", "rm_item_txt": "Are you sure?", "recaptcha_enable": "", "map_service": "mapbox", "not_allow": "Not Allow", "choose_a_cv": "Choose a cv", "job_filled": "This job is filled and no longer accepting applications.", "cv_required": "on", "ajax_nonce": "9602f0aa56"};
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/wp-freeio/assets/js/main6a41.js?ver=20131022' id='wp-freeio-main-js'></script>
<script type='text/javascript' src='wp-content/plugins/wp-private-message/assets/js/perfect-scrollbar.jquery.min246c.js?ver=0.6.10' id='perfect-scrollbar-jquery-js'></script>
<script type='text/javascript' id='wp-private-message-main-js-extra'>
    /* <![CDATA[ */
    var wp_private_message_opts = {"ajaxurl": "https:\/\/demoapus1.com\/freeio\/wp-admin\/admin-ajax.php"};
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/wp-private-message/assets/js/main6a41.js?ver=20131022' id='wp-private-message-main-js'></script>
<script type='text/javascript' id='freeio-woocommerce-js-extra'>
    /* <![CDATA[ */
    var freeio_woo_options = {"ajaxurl": "https:\/\/demoapus1.com\/freeio\/wp-admin\/admin-ajax.php", "view_more_text": "View More", "view_less_text": "View Less"};
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/freeio/js/woocommerce8337.js?ver=20150330' id='freeio-woocommerce-js'></script>
<script type='text/javascript' src='wp-content/plugins/wp-freeio/assets/js/jquery.highlightb52e.js?ver=5' id='jquery-highlight-js'></script>
<script type='text/javascript' src='wp-content/plugins/wp-freeio/assets/js/leaflet/leafletcc1a.js?ver=1.5.1' id='leaflet-js'></script>
<script type='text/javascript' src='wp-content/plugins/wp-freeio/assets/js/leaflet/Control.Geocodercc1a.js?ver=1.5.1' id='control-geocoder-js'></script>
<script type='text/javascript' src='wp-content/plugins/wp-freeio/assets/js/leaflet/leaflet.markerclustercc1a.js?ver=1.5.1' id='leaflet-markercluster-js'></script>
<script type='text/javascript' src='wp-content/plugins/wp-freeio/assets/js/leaflet/LeafletHtmlIconcc1a.js?ver=1.5.1' id='leaflet-HtmlIcon-js'></script>
<script type='text/javascript' id='freeio-job-js-extra'>
    /* <![CDATA[ */
    var freeio_job_opts = {"ajaxurl": "https:\/\/demoapus1.com\/freeio\/wp-admin\/admin-ajax.php", "empty_msg": "Unable to find any listing that match the currenty query", "show": "Show", "hide": "Hide"};
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/freeio/js/job8337.js?ver=20150330' id='freeio-job-js'></script>
<script type='text/javascript' id='freeio-job-map-js-extra'>
    /* <![CDATA[ */
    var freeio_job_map_opts = {"map_service": "mapbox", "mapbox_token": "pk.eyJ1IjoiYXB1c3dwIiwiYSI6ImNrYWhrYXdpcDA2OXcyeG81ZDc4OXZlb3AifQ.pmWBKmlfGL7SHRgQeTeQ0Q", "mapbox_style": "streets-v11", "here_map_api_key": "", "here_style": "", "custom_style": "", "default_pin": ""};
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/freeio/js/job-map8337.js?ver=20150330' id='freeio-job-map-js'></script>
<script type='text/javascript' id='wpfi-select2-js-extra'>
    /* <![CDATA[ */
    var wp_freeio_select2_opts = {"width": "100%", "language_result": "No Results Found", "formatInputTooShort_text": "Please enter 2 or more characters"};
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/wp-freeio/assets/js/select2/select2.min631d.js?ver=4.0.5' id='wpfi-select2-js'></script>
<script type='text/javascript' src='wp-content/themes/freeio/js/handlebars.min.js' id='handlebars-js'></script>
<script type='text/javascript' src='wp-content/themes/freeio/js/typeahead.bundle.min.js' id='typeahead-jquery-js'></script>
<script type='text/javascript' defer src='wp-content/plugins/mailchimp-for-wp/assets/js/formse0ed.js?ver=4.8.11' id='mc4wp-forms-api-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/webpack.runtime.min7e2e.js?ver=3.8.1' id='elementor-webpack-runtime-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend-modules.min7e2e.js?ver=3.8.1' id='elementor-frontend-modules-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2' id='elementor-waypoints-js'></script>
<script type='text/javascript' id='elementor-frontend-js-before'>
    var elementorFrontendConfig = {"environmentMode": {"edit": false, "wpPreview": false, "isScriptDebug": false}, "i18n": {"shareOnFacebook": "Share on Facebook", "shareOnTwitter": "Share on Twitter", "pinIt": "Pin it", "download": "Download", "downloadImage": "Download image", "fullscreen": "Fullscreen", "zoom": "Zoom", "share": "Share", "playVideo": "Play Video", "previous": "Previous", "next": "Next", "close": "Close"}, "is_rtl": false, "breakpoints": {"xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600}, "responsive": {"breakpoints": {"mobile": {"label": "Mobile", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true}, "mobile_extra": {"label": "Mobile Extra", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false}, "tablet": {"label": "Tablet", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true}, "tablet_extra": {"label": "Tablet Extra", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false}, "laptop": {"label": "Laptop", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false}, "widescreen": {"label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false}}}, "version": "3.8.1", "is_static": false, "experimentalFeatures": {"e_dom_optimization": true, "e_optimized_assets_loading": true, "e_optimized_css_loading": true, "a11y_improvements": true, "additional_custom_breakpoints": true, "e_import_export": true, "e_hidden_wordpress_widgets": true, "landing-pages": true, "elements-color-picker": true, "favorite-widgets": true, "admin-top-bar": true}, "urls": {"assets": "https:\/\/demoapus1.com\/freeio\/wp-content\/plugins\/elementor\/assets\/"}, "settings": {"page": [], "editorPreferences": []}, "kit": {"active_breakpoints": ["viewport_mobile", "viewport_tablet"], "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description"}, "post": {"id": 5557, "title": "Web%20development%2C%20with%20HTML%2C%20CSS%2C%20JavaScript%20and%20PHP%20%E2%80%93%20Freeio", "excerpt": "I can assist you in designing clean and minimal UI UX for your website in Adobe XD or Figma.", "featuredImage": "https:\/\/demoapus1.com\/freeio\/wp-content\/uploads\/2022\/11\/service12.jpg"}}
    ;
</script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend.min7e2e.js?ver=3.8.1' id='elementor-frontend-js'></script>
</body>
</html>