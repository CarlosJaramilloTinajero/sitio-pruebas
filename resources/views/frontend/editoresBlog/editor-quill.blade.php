@extends('index')
@section('editor')

<!-- Main Quill library -->
<script src="//cdn.quilljs.com/1.0.0/quill.js"></script>
<script src="//cdn.quilljs.com/1.0.0/quill.min.js"></script>

<!-- Theme included stylesheets -->
<link href="//cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet" />
<link href="//cdn.quilljs.com/1.0.0/quill.bubble.css" rel="stylesheet" />

<!-- Core build with no theme, formatting, non-essential modules -->
<link href="//cdn.quilljs.com/1.0.0/quill.core.css" rel="stylesheet" />
<script src="//cdn.quilljs.com/1.0.0/quill.core.js"></script>



<!-- Create the toolbar container -->
<!-- <div id="toolbar">
    <button class="ql-bold">Bold</button>
    <button class="ql-italic">Italic</button>
</div> -->

<!-- Create the editor container -->

<div id="editor">
    <p>Hello World!</p>
</div>

<br>
<button class="btn btn-primary" onclick="getCodigo()">Codigo</button>

<div id="example" class="ql-editor"></div>

<script>
    function getCodigo() {
        let editorDiv = document.getElementById('editor');
        let editor = editorDiv.getElementsByClassName('ql-editor');
        let htmlCode = editor[0].innerHTML;
        console.log(htmlCode);

        let example = document.getElementById('example');
        example.innerHTML = htmlCode;
    }
</script>

<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.0.0/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
    let toolbaroptions = [
        // Text styles
        ["bold", "italic", "underline", "strike"],

        // h1 h2 h3 h..
        [{
            header: [1, 2, 3, 4, 5, 6, false]
        }],
        // bullet point style
        [{
            list: "ordered"
        }, {
            list: "bullet"
        }],
        [{
            script: "sub"
        }, {
            script: "super"
        }],
        [{
            indent: "+1"
        }, {
            indent: "-1"
        }],
        [{
            align: []
        }],
        [{
            size: ["small", "large", "huge"]
        }],
        ["image", "link", "video", "formula"],
        [{
            color: []
        }, {
            background: []
        }],
        [{
            font: []
        }],
        ["code-block", "blockquot"],
    ];

    var editor = new Quill('#editor', {
        modules: {
            toolbar: toolbaroptions,
        },
        theme: 'snow',
    });
</script>
@endsection