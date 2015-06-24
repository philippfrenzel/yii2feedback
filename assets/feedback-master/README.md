feedback
========

Feedback tool similar to the Google Feedback based on jQuery and HTML2Canvas.

(Derived of ivoviz/feedback)

## Usage

Load jQuery, the plugin, and its CSS:
```html
    <script src="//code.jquery.com/jquery-latest.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
    <script src="feedback.js"></script>
    <link rel="stylesheet" href="feedback.min.css" />
```

Init plugin:
```html
    <script type="text/javascript">
        $.feedback({
            endpoint: 'http://example.com/feedback'
        });
    </script>
```

## Requirements

* jQuery
* html2canvas
    
## Compatibility

Pretty much it should be working on any browser with `canvas` support. Browsers with no canvas support won't display the feedback button.

## Post Data

The information from the client will be sent through ajax POST request. The information is in JSON format.

* `browser` - Browser information.
* `url` - The page URL.
* `note` - Description of the feedback.
* `img` - The screenshot of the feedback. - **base64 encoded data URI!**
* `html` - The structure of the page.

## Options

### endpoint (String)

The URL where the plugin will post the screenshot and additional informations. (JSON datatype)

`Default: ''`

### postBrowserInfo (Boolean)

Whether you want your client to post their browser information (such as useragent, plugins used, etc.)

`Default: true`

### postHTML (Boolean)

Whether you want your client to post the page's HTML structure.

`Default: false`

### postURL (Boolean)

Whether you want your client to post the URL of the page.

`Default: true`

### proxy (String)

Url to the proxy which is to be used for loading cross-origin images. If left empty, cross-origin images won't be loaded.

`Default: ''`

### postExtraInfo (Function)

A function that returns extra information to be posted, it should return an object with the description (`desc`) and
the information (`info`) that you want to be posted.

`Default: null`

### categories (Array of Strings)

An optional list of categories to be displayed, the list will be displayed along with the description of the bug
on a select.

`Default: []`

### letterRendering (Boolean)

Whether to render each letter seperately. Necessary if letter-spacing is used.

`Default: false`

### initButtonText (String / HTML)

The default button text.

`Default: Send feedback`

### strokeStyle (String / HEX color)

The color of the highlight border. You can use values either like 'black', 'red', etc. or HEX codes like '#adadad'.

`Default: black`

### shadowColor (String / HEX color)

The color of the shadow.

`Default: black`

### shadowOffsetX / shadowOffsetY (Integer)

Sets the horizontal / vertical distance of the shadow from the shape.

`Default: 1`

### shadowBlur (Integer)

The blur level for the shadow.

`Default: black`

### lineJoin (String)

Sets the type of corner created, when two lines meet.

`Default: bevel`

### lineWidth (Integer)

Sets border of the highlighted area.

`Default: 3`

### html2canvasURL (String)

The URL where the plugin can download html2canvas.js from.

`Default: html2canvas.js`

### tpl (Object of HTML Strings)

The templates of the plugin. Each property of the tpl object is an HTML string describing a phase of the feedback tool. You could change them any time, but keep in mind to keep the elements' ids and classes so the script won't break.

`Default: {'description': '...', 'highlighter': '...', ...}`

* description: Description of the feedback module for the user
* highlighter: A series of controls to highlight and censor information on the page
* overview: Overview of what is going to be sent
* submitSuccess: Message displayed on succesful upload
* submitError: Message displayed if the upload fails

### onClose (Function)

Function that runs when you close the plugin.

`Default: null`

### screenshotStroke (Boolean)

Changing to `false` will remove the borders from the highlighted areas when taking the screenshot.

`Default: true`

### highlightElement (Boolean)

By default when you move your cursor over an element the plugin will temporarily highlight it until you move your cursor out of that area.
I'm not exactly sure whether it's a good thing or not, but Google has it, so yeah.

`Default: true`

### initialBox (Boolean)

By Setting this true the user will have to describe the bug/idea before being able to highlight the area.

`Default: false`

### feedbackButton (String)

Define a custom button instead of the default button that appears on the lower right corner.

`Default: .feedback-btn`

### showDescriptionModal (Boolean)

Sets whether the next modal for entering description should appear or not

`Default: true`

### onScreenshotTaken (Function)

A callback function to be called when clicking on take screenshot button. The callback function's prototype is `function(image)`

`Default: function () {}`

### isDraggable (Boolean)

Sets whether the user will be able to drag the feedback options modal or not

`Default: true`

## License

feedback is released under the MIT license. (See `LICENSE`)
