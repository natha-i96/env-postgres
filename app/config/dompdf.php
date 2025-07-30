<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Show Warnings
    |--------------------------------------------------------------------------
    |
    | Set to true to enable warnings when rendering PDFs.
    |
    */
    'show_warnings' => false,

    /*
    |--------------------------------------------------------------------------
    | Default Font
    |--------------------------------------------------------------------------
    |
    | The default font that DomPDF will use if no other font is specified.
    |
    */
    'default_font' => 'thsarabunnew',

    /*
    |--------------------------------------------------------------------------
    | Font Directory
    |--------------------------------------------------------------------------
    |
    | The location where custom fonts will be stored.
    | This directory must be writable and accessible by DomPDF.
    |
    */
    'font_dir' => storage_path('fonts/'),

    /*
    |--------------------------------------------------------------------------
    | Font Cache
    |--------------------------------------------------------------------------
    |
    | The location where DomPDF will store cached font metrics.
    |
    */
    'font_cache' => storage_path('fonts/'),

    /*
    |--------------------------------------------------------------------------
    | Font Definitions
    |--------------------------------------------------------------------------
    |
    | Define your custom fonts here so DomPDF can use them.
    | Make sure the font files exist in font_dir.
    |
    */
    'fonts' => [
        'thsarabunnew' => [
            'R' => 'THSarabunNew.ttf',          // Regular
            'B' => 'THSarabunNew Bold.ttf',     // Bold
            'I' => 'THSarabunNew Italic.ttf',   // Italic
            'BI' => 'THSarabunNew BoldItalic.ttf', // Bold Italic
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Enable HTML5 Parser
    |--------------------------------------------------------------------------
    |
    | Set to true to enable the HTML5 parser (recommended).
    |
    */
    'enable_html5_parser' => true,

    /*
    |--------------------------------------------------------------------------
    | Enable Remote
    |--------------------------------------------------------------------------
    |
    | Whether to enable fetching images/fonts from remote URLs.
    | It's better to keep this false and use base64 for security.
    |
    */
    'enable_remote' => false,

    /*
    |--------------------------------------------------------------------------
    | Log Output File
    |--------------------------------------------------------------------------
    |
    | Optional log file for debugging.
    |
    */
    'log_output_file' => storage_path('logs/dompdf.html'),

    /*
    |--------------------------------------------------------------------------
    | Temporary Directory
    |--------------------------------------------------------------------------
    |
    | The temporary directory used by DomPDF.
    |
    */
    'temp_dir' => sys_get_temp_dir(),

];
