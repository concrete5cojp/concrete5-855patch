<?php

return [
    /**
     * Apply patch for dropzone.js not to become cache file
     * @todo remove this override if it's fixed in the future.
     * @link https://github.com/concrete5/concrete5/pull/9510
     */
    'assets' => [
        'dropzone' => [
            ['javascript', 'js/dropzone.js'],
            ['javascript-localized', '/ccm/assets/localization/dropzone/js', ['combine' => false]],
            ['css', 'css/dropzone.css', ['minify' => false]],
        ],
    ]
];
