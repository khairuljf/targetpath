(function() {
    tinymce.PluginManager.add('mybutton', function( editor, url ) {
        editor.addButton( 'mybutton', {
            text: tinyMCE_object.button_name,
            icon: false,
            onclick: function() {
                editor.windowManager.open( {
                    title: tinyMCE_object.button_title,
                    body: [
                        {
                            type: 'textbox',
                            name: 'img',
                            label: tinyMCE_object.image_title,
                            value: '',
                            classes: 'my_input_image',
                        },
                        {
                            type: 'button',
                            name: 'my_upload_button',
                            label: '',
                            text: tinyMCE_object.image_button_title,
                            classes: 'my_upload_button',
                        },//new stuff!
                        {
                            type   : 'listbox',
                            name   : 'listbox',
                            label  : 'listbox',
                            values : [
                                { text: 'Test1', value: 'test1' },
                                { text: 'Test2', value: 'test2' },
                                { text: 'Test3', value: 'test3' }
                            ],
                            value : 'test2' // Sets the default
                        },
                        {
                            type   : 'combobox',
                            name   : 'combobox',
                            label  : 'combobox',
                            values : [
                                { text: 'Test', value: 'test' },
                                { text: 'Test2', value: 'test2' }
                            ]
                        },
                        {
                            type   : 'textbox',
                            name   : 'textbox',
                            label  : 'textbox',
                            tooltip: 'Some nice tooltip to use',
                            value  : 'default value'
                        },
                        {
                            type   : 'container',
                            name   : 'container',
                            label  : 'container',
                            html   : '<h1>container<h1> is <i>ANY</i> html i guess...<br/><br/><pre>but needs some styling?!?</pre>'
                        },
                        {
                            type   : 'tooltip',
                            name   : 'tooltip',
                            label  : 'tooltip ( you dont use it like this check textbox params )'
                        },
                        {
                            type   : 'button',
                            name   : 'button',
                            label  : 'button ( i dont know the other params )',
                            text   : 'My Button'
                        },
                        {
                            type   : 'buttongroup',
                            name   : 'buttongroup',
                            label  : 'buttongroup ( i dont know the other params )',
                            items  : [
                                { text: 'Button 1', value: 'button1' },
                                { text: 'Button 2', value: 'button2' }
                            ]
                        },
                        {
                            type   : 'checkbox',
                            name   : 'checkbox',
                            label  : 'checkbox ( it doesn`t seem to accept more than 1 )',
                            text   : 'My Checkbox',
                            checked : true
                        },
                        {
                            type   : 'colorbox',
                            name   : 'colorbox',
                            label  : 'colorbox ( i have no idea how it works )',
                            // text   : '#fff',
                            values : [
                                { text: 'White', value: '#fff' },
                                { text: 'Black', value: '#000' }
                            ]
                        },
                        {
                            type   : 'colorpicker',
                            name   : 'colorpicker',
                            label  : 'colorpicker'
                        },
                        {
                            type   : 'radio',
                            name   : 'radio',
                            label  : 'radio ( defaults to checkbox, or i`m missing something )',
                            text   : 'My Radio Button'
                        }
                    ],
                    onsubmit: function( e ) {
                        editor.insertContent( '[shortcode-name img="' + e.data.img + '" list="' + e.data.listbox + '" combo="' + e.data.combobox + '" text="' + e.data.textbox + '" check="' + e.data.checkbox + '" color="' + e.data.colorbox + '" color_2="' + e.data.colorpicker + '" radio="' + e.data.radio + '"]');
                    }
                });
            },
        });
    });

})();

jQuery(document).ready(function($){
    $(document).on('click', '.mce-my_upload_button', upload_image_tinymce);
 
    function upload_image_tinymce(e) {
        e.preventDefault();
        var $input_field = $('.mce-my_input_image');
        var custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Add Image',
            button: {
                text: 'Add Image'
            },
            multiple: false
        });
        custom_uploader.on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $input_field.val(attachment.url);
        });
        custom_uploader.open();
    }
});