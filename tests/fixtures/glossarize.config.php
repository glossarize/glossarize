<?php

glossarize()->init(function($source) {
    $source->set('languages', ['en', 'it']);
});

glossarize()->default(function($source) {
    foreach ($source->get('languages') as $lang) {
        $source
            ->scan('lang/array/'.$lang)
            ->ignoreWords(['workflow'])
            ->expectedArrayValuesLanguageIs($lang);
    }
});

glossarize()->check('Expected array string values language', function($source) {
    foreach ($source->get('languages') as $lang) {
        $source
            ->scan('lang/array/'.$lang)
           // ->ignore(['workflow'])
            ->expectedArrayValuesLanguageIs($lang);
    }
});

/*
glossarize()->check('Search Whore Words', function($source) {
    $source->scan('src')->searchWhoreWords();
});

glossarize()->check('Search Bads Words', function($source) {
    $source->scan('src')->searchBadWords([
        'malware', ''
    ]);
});

/*
glossarize()->check('Expected array string values language', function($source) {
    foreach ($source->get('languages') as $lang) {
        $source->scan('lang/plain/'.$lang)->expectedStringsLanguageIs($lang);
    }
});
*/

/*
glossarize()->check('missing2', function($source) {
    $source->scan('src')->expctedStrictSource();
});
*
 *
 */
/*
glossarize()->check('missing3', function($source) {
    foreach ($languages as $language) {
        $source->strictScope($language, 'src/', 'lang/'.$language);
    }
});

glossarize()->check('missing3', function($source) use ($languages) {
    foreach ($languages as $language) {
        $source->strictScope($language, 'src/', 'lang/'.$language);
    }
});
*/
