The WordPress Template Hierarchy
================================

---

### Description

wphierarchy.com is a visualization of [the WordPress theme template hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy).

Official documentation is located at: https://developer.wordpress.org/themes/basics/template-hierarchy.

### https://wphierarchy.com

### Credits

- Michelle Schulp ([design](http://marktimemedia.com/redesigning-the-template-hierarchy))
- Rami Abraham (code, site)
- Chip Bennett ([original WordPress Template Hierarchy visualization](http://www.chipbennett.net/themes/template-hierarchy/))
- Mel Choyce, Dashicons icons ( icons, https://developer.wordpress.org/resource/dashicons/#vault )

### Contributors

- Travis Northcutt
- Eric Andrew Lewis
- Akira Tachibana

### Installation
- Requires `gulp` (`npm install -g gulp`)
- `git clone https://github.com/ramiabraham/wphierarchy.git`
- `npm install`

### Contributing
- Create an issue
- Fork
- Eat one cupcake
- Submit PR

### API

WPHierarchy.com has a `rest api` available at [https://wphierarchy.com/api](https://wphierarchy.com/api).

The api contains the following data:

- Stable version (the WordPress version currently supported by wphierarchy.com)
- Stable link (a link to the relevant WordPress.org release post)
- An array of objects in `hierarchy_items`, each structured as an array itself:

		```
		array(
			"object_id"      => "c1r1",
			"semantic_id"    => "archive_page",
			"name"           => "Archive Page",
			"description"    => "",
			"link"           => "https://codex.wordpress.org/Creating_an_Archive_Index#The_Archives_Page",
			"classification" => "archive",
			"tip"            => "",
			"since"          => ""
		)
		```
		So if you wish to get the names of all items, your request would be for:
		`data.hierarchy_items.name`


### To-do:

- [x] Add links to the Codex for each item
- [x] Add color-coded legend below header
- [x] Add json api~~
- [x] Refactor with css that isn't completely insane (complete rewrite with scss)
- [ ] Provide an easier means of l11n
- [ ] Add contextual highlighting via the `hierarchy_items.classification` variable.
- [ ] Add example loops, template files, and/or semantic data (coming soon; the parameter in the api which will contain this data is `tips`). An example of the small, desired strings for tips can be seen in the 4.5 embeds addition.
- [ ] Create an easy-to-use submission process on the site for tips.
- [ ] Finish cool secrets (if there are any, which there aren't).

----

### Changelog:

#### v2, June 28, 2016

- Introduce API, located at https://wphierarchy.com/api
- Complete rewrite of the UI, using a single `svg` element and `<foreignobject>` nodes.
- Some other secret things.
- Specified license.

### License: GPL
