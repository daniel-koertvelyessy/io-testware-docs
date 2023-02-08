---
title: Aufbau der graphischen Oberfläche
description: Configure Algolia DocSearch with the Jigsaw docs starter template
extends: _layouts.documentation
section: content
---

# Die Oberfläche {#general-ui-header}

Die graphische Oberflöche der testWare lässt sich in 4 Bereiche einteilen:

<img class="block m-auto" src="/assets/img/screenshots/Screen_Overview_Sections.png" alt="Screenshot of search results" />

1. [Modulnavigation](#ui-feature-modulnavigation)
2. [Seitennavigation](#ui-feature-sidenavigation)
3. Hauptteil
4. Fußzeile

--- 

### 1. Modulnavigation {#ui-feature-modulnavigation}


Die Modulnavigation passt sich des gewählten Modules dynamisch an. Sie besteht aus einzelnen Menüpunkten und sogenannten Dropdown-Menüs. Das sind Befehle / Ansichten, die auf ein Objekt ausgerichtet sind. Als Beispiel ist ini dem Bild oben die Modulnavigation für die Geräteverwaltung zu sehen.


---

### 2. Seitennavigation {#ui-feature-sidenavigation}

Das Seitenmenü enthält die Navigation zu allen Ansichten/Module der testWare und lässt sich mit einem Klick auf das Symbol ein- und ausklappen. Menüpunkte mit einem enthalten Unterpunkte und lassen sich ausklappen.

Über dem Schalter `Menü fixieren` wird ein Merker in dem Browser gesetzt, der das Seitenmenü offen hält, oder beim Ladenn einer Ansicht automatisch ausblendet.

---

## Adding Custom Styles {#algolia-adding-custom-styles}

If you'd like to customize the styling of the search results, Algolia exposes custom CSS classes that you can modify:

```css
/* Main dropdown wrapper */
.algolia-autocomplete .ds-dropdown-menu {
  width: 500px;
}

/* Main category (eg. Getting Started) */
.algolia-autocomplete .algolia-docsearch-suggestion--category-header {
  color: darkgray;
  border: 1px solid gray;
}

/* Category (eg. Downloads) */
.algolia-autocomplete .algolia-docsearch-suggestion--subcategory-column {
  color: gray;
}

/* Title (eg. Bootstrap CDN) */
.algolia-autocomplete .algolia-docsearch-suggestion--title {
  font-weight: bold;
  color: black;
}

/* Description description (eg. Bootstrap currently works...) */
.algolia-autocomplete .algolia-docsearch-suggestion--text {
  font-size: 0.8rem;
  color: gray;
}

/* Highlighted text */
.algolia-autocomplete .algolia-docsearch-suggestion--highlight {
  color: blue;
}
```

---

For more details, visit the [official Algolia DocSearch documentation.](https://community.algolia.com/docsearch/what-is-docsearch.html)
