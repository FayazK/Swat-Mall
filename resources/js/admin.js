window.jQuery = window.$ = require('jquery')
require('bootstrap')
require('jquery-scrollfix')
require('admin-lte')

/* --------------------------------------------------------------
 *  Scroll Fix
 * --------------------------------------------------------------
 */
$('[data-scroll-fix="bottom"]').scrollFix({
    side: 'bottom'
})

$('[data-scroll-fix="top"]').scrollFix({
    side: 'top'
})

$('[data-scroll-fix="both"]').scrollFix({
    side: 'both'
})
