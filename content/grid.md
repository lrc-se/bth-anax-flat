---
views:
    right:
        region: sidebar-right
        template: default/content
        data:
            #class: byline
            meta:
                type: content
                route: block/footer-col-1
    
    bottom-left:
        region: columns-below
        template: default/content
        sort: 1
        data:
            class: bottom-column
            meta:
                type: content
                route: block/footer-col-2

    bottom-right:
        region: columns-below
        template: default/content
        sort: 2
        data:
            class: bottom-column
            meta:
                type: content
                route: block/footer-col-3
...

Test av kolumner
================

På denna sida visas rutnätet för kolumnerna i bakgrunden när man håller muspekaren över innehållsytan.

*Testa!*
