<?php

use LCI\MODX\Stockpile\Stockpile;

/**
 * Paginates blog posts
 */
$chunk = $modx->getOption('chunk', $scriptProperties, 'jgCleanPostItem');
$prefix = $modx->getOption('prefix', $scriptProperties, 'paginator');
$parents = explode(',', $modx->getOption('parents', $scriptProperties, ''));
$limit = (int)$modx->getOption('limit', $_REQUEST, $modx->getOption('limit', $scriptProperties, 4));
$page = (int)$modx->getOption('page', $_REQUEST, $modx->getOption('page', $scriptProperties, 1));

$offset = $page - 1;
$offset = ($offset < 0 ? 0 : $offset * $limit);

$posts = '';

$query = $modx->newQuery('modResource', ['published' => 1]);
if (count($parents)) {
    $query->where(['parent:IN' => $parents]);
}
$query->sortBy('publishedon', 'DESC');

$resources = $modx->getIterator('modResource', $query);

/** @var Stockpile $stockpile */
$stockpile = new Stockpile($modx);

/** @var modResource $resource */
foreach ($resources as $resource) {
    $posts .= $modx->getChunk($chunk, $stockpile->getResource($resource->get('id')));
}

$total = $modx->getCount('modResource', $query);

$modx->toPlaceholders([
        'posts' => $posts,
        'offset' => $offset,
        'limit' => $limit,
        'previous' => ($page - 1 < 0 ? '' : $page - 1),
        'next' => ($total > $page * $limit ? $page + 1 : '')
    ],
    $prefix
);

return $posts;