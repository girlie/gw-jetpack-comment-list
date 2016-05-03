# gw-jetpack-comment-list
**Thesis Helper Box for Jetpack Comment List**

_A helper box for integrating Jetpack comments and Thesis._

1. Upload the `.zip` file via Thesis → Boxes → Manage Boxes → Upload Box.
2. Once the box has been uploaded and appears in the list of available boxes, select its checkbox, then click SAVE BOXES.
3. Go to Skin Editor → HTML, and access your Single template for editing.
4. Add the Jetpack Comment List box to the template, inside the WP Loop.
5. Drag the Jetpack Comment List box so that it’s just below the existing (aka original) Comment List box (see note below).
6. Expand the original Comment List box, and drag all of the dependent (orange) boxes down into the tray to remove them.
7. Add a new HTML Container box (name it something like Old Comments) to WP Loop.
8. Hover over the name of your new box until the gear icon appears; click the gear to edit its options.
9. Enter `hide` in the HTML Class field, then click OK.
10. Drag the original Comment List box inside of your new box.
11. Save the template.
12. Go to Thesis Home → Skin → Custom CSS, and add the following to it:

```
div.hide { display:none; }
.comment .avatar { height: 32px; width: 32px; }
```

13. Save the Custom CSS.

NOTE: The actual name of the Comment List box may vary depending on which Skin you’re using. For example, in Classic Responsive, its name is `Comments`.
