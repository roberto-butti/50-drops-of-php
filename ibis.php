<?php

return [
    /**
     * The book title.
     */
    'title' => '50 drops of PHP',

    /**
     * The author name.
     */
    'author' => 'Roberto Butti',

    /**
     * The list of fonts to be used in the different themes.
     */
    'fonts' => [
                'literata' => 'Literata-Regular.ttf',
                'times' => 'Merriweather-Regular.ttf',
                'handwriting' => 'DancingScript-Regular.ttf',
                'monospaced' => "RobotoMono-Regular.ttf",
    ],

    /**
     * Document Dimensions.
     */
    'document' => [
        'format' => [210, 297],
        'margin_left' => 27,
        'margin_right' => 27,
        'margin_bottom' => 14,
        'margin_top' => 14,
    ],

    /**
     * Table of Contents Levels
     */
    'toc_levels' => [
        'H1' => 0,
        'H2' => 1,
        'H3' => 2,
    ],

    /**
     * Cover photo position and dimensions
     */
    'cover' => [
        'position' => 'position: absolute; left:0; right: 0; top: -.2; bottom: 0;',
        'dimensions' => 'width: 210mm; height: 297mm; margin: 0;',
        'image' => 'cover.png',
    ],

    /**
     * Page ranges to be used with the sample command.
     */
    'sample' => [
        [1, 6],
        [39, 41],
        
    ],

    /**
     * A notice printed at the final page of a generated sample.
     */
    'sample_notice' => 'This is a sample from "50 drops of PHP" by Roberto Butti. <br>
                        For more information, <a href="https://hi-folks.dev/">Click here</a>.',
];
