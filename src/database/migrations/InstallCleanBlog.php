<?php

/**
 * Auto Generated from Blender
 * Date: 2018/11/02 at 13:49:54 UTC +00:00
 */

use \LCI\Blend\Migrations;

class InstallCleanBlog extends Migrations
{
    protected $chunks = [
        'j19CleanCSS' => [
            'categories' => 'j19=>Clean',
            'description' => 'Global CSS',
        ],
        'j19CleanFooter' => [
            'categories' => 'j19=>Clean',
            'description' => 'Clean Blog Footer',
        ],
        'j19CleanJS' => [
            'categories' => 'j19=>Clean',
            'description' => 'Global JavaScript',
        ],
        'j19CleanMeta' => [
            'categories' => 'j19=>Clean',
            'description' => 'Meta elements',
        ],
        'j19CleanNav' => [
            'categories' => 'j19=>Clean',
            'description' => 'Clean Blog Navigation',
        ],
        'j19CleanOpenGraph' => [
            'categories' => 'j19=>Clean',
            'description' => 'Open Graph for Clean Blog',
        ],
        'j19CleanPostItem' => [
            'categories' => 'j19=>Clean',
            'description' => 'A single post item to be iterated in a collection',
        ],
    ];

    /** @var array  */
    protected $default_collection = [
        'global_template' => 1,
        'bulk_actions' => 1,
        'allow_dd' => 1,
        'page_size' => 20,
        'sort_field' => 'id',
        'sort_dir' => 'asc',
        //'sort_type' => '',
        //'child_template' => '',
        'child_resource_type' => 'modDocument',
        'resource_type_selection' => 0,
        'tab_label' => 'collections.children',
        'button_label' => 'collections.children.create', // overwrite
        'content_place' => 'original',
        'view_for' => 0,
        'link_label' => 'selections.create',
        'context_menu' => // 'view,edit,publish,unpublish,-,delete,undelete,remove,-,unlink', original
            'view,edit,publish,unpublish,-,delete,undelete,remove,-,unlink',
        'buttons' => //'view,edit,publish:orange,unpublish,delete,undelete,remove,unlink', original
            'view,edit,publish:orange,unpublish,delete,undelete,remove,unlink',
        'allowed_resource_types' => '',
        'back_to_collection_label' => 'collections.children.back_to_collection_label', // overwrite
        'back_to_selection_label' => 'selections.back_to_selection_label',
        'selection_create_sort' => 'id:desc',
        'child_hide_from_menu' => '',
        //'child_published' => '',
        //'child_cacheable' => '',
        //'child_searchable' => '',
        //'child_richtext' => '',
        'child_content_type' => 0,
        'parent' => '',
        //'child_content_disposition' => '',
        'permanent_sort_before' => '',
        'permanent_sort_after' => '',
        'selection_link_condition' => '',
        'search_query_exclude_tvs' => 0,
        'search_query_exclude_tagger' => 0,
        'search_query_title_only' => 0,
    ];

    /** @var array  */
    protected $collections = [
        // name => column_data
        'Documents' => [
            'description' => 'Blog Posts',
            //'child_resource_type' => 'modStaticResource',
            'global_template' => 0,
            'child_template' => 'j19CleanPost',
            'button_label' => 'New Blog Post',
            'back_to_collection_label' => 'See all Blog Posts'
        ]
    ];

    /** @var array  */
    protected $default_collection_columns = [
        // name => column_data
        'id' => [
            'label' => 'id',
            'hidden' => 0,
            'sortable' => 1,
            'width' => 40,
            'editor' => '',
            'renderer' => '',
            'php_renderer' => '',
            'position' => '',
            //'sort_type'
            ],
        'publishedon' => [
            'label' => 'publishedon',
            'hidden' => 0,
            'sortable' => 1,
            'width' => 170,
            'editor' => '',
            'renderer' => 'Collections.renderer.datetimeTwoLines',
            'php_renderer' => '',
            'position' => 1,
            //'sort_type'
        ],
        'pagetitle' => [
            'label' => 'Name',
            'hidden' => 0,
            'sortable' => 1,
            'width' => 100,
            'editor' => '',
            'renderer' => 'Collections.renderer.pagetitleWithButtons',
            'php_renderer' => '',
            'position' => 2,
            //'sort_type'
        ],
        'alias' => [
            'label' => 'alias',
            'hidden' => 0,
            'sortable' => 1,
            'width' => 100,
            'editor' => '',
            'renderer' => '',
            'php_renderer' => '',
            'position' => 3,
            //'sort_type'
        ],
        'menuindex' => [
            'label' => 'resource_menuindex',
            'hidden' => 0,
            'sortable' => 1,
            'width' => 50,
            'editor' => '{\"xtype\":\"numberfield\",\"allowNegative\":false,\"allowDecimal\":false}',
            'renderer' => '',
            'php_renderer' => '',
            'position' => 4,
            //'sort_type'
        ],
    ];
    /** @var array  */
    protected $collection_columns = [
        'Blog Posts' => [
            'id',
            'publishedon',
            'pagetitle',
            'alias'
        ]
    ];

    protected $tagger = [
        // group => tags
        'Document Types' => [
            'field_type' => 'tagger-combo-tag',
            'allow_new' => 0,
            'remove_unused' => 0,
            'allow_blank' => 0,
            'allow_type' => 0,
            'show_autotag' => 0,
            'hide_input' => 0,
            'tag_limit' => 1,
            'place' => 'in-tvs',
            'position' => 0,
            'description' => 'Tag your blog posts',
            'in_tvs_position' => 9999,
            'as_radio' => 0,
            'sort_field' => 'alias',
            'sort_dir' => 'asc',
            'show_for_contexts' => '',
            //'show_for_templates' => '',
            // need to process the data:
            'attach_to_templates' => [
                'j19CleanPost'
            ],
            'tags' => [
                // tag(value) => label
                'MODX' => 'MODX',
                'PHP' => 'PHP',
                'JS' => 'JavaScript',
            ]
        ]
    ];

    protected $mediaSources = [
        'Uploads' => [
            'description' => 'Image uploads',
            'path' => '/assets/uploads/',
            'allowedFileTypes' => 'jpg,png,gif,svg,pdf'
        ],
    ];

    protected $resources = [
        // alias => data
        'index' => [
            'pagetitle' => 'Home',
            'menutitle' => 'Home',
            'parent' => '',
            'menuindex' => 1,
            'class_key' => 'modDocument',
            'template' => 'j19CleanBlog',
            'hidemenu' => false,
            'show_in_tree' => true,
            'description' => 'This is the blog home page',
            'content' => '<p>A <a href="https://github.com/BlackrockDigital/startbootstrap-clean-blog">clean Bootstrap blog theme</a> created by Start Bootstrap and made into a <a href="https://github.com/jgulledge19/Clean-Blog">MODX Package</a></p>',
            'tvs' => [
                'j19CleanMastHead' => 'home-bg.jpg',
                'j19CleanSubheading' => 'A Blog Theme by Start Bootstrap'
            ]
        ],
        'about' => [
            'pagetitle' => 'About',
            'menutitle' => 'About',
            'parent' => '',
            'menuindex' => 2,
            'class_key' => 'modDocument',
            'template' => 'j19CleanBasic',
            'hidemenu' => false,
            'show_in_tree' => true,
            'description' => 'About this blog...',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur voluptates odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus consectetur?</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum in officia voluptas voluptatibus, minus!</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi aliquid ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste neque sit tempora!</p>',
            'tvs' => [
                'j19CleanMastHead' => 'about-bg.jpg',
                'j19CleanSubheading' => 'This is what I do..'
            ]
        ],
        'blog' => [
            'pagetitle' => 'Blog',
            'menutitle' => 'Blog',
            'parent' => '',
            'menuindex' => 3,
            'class_key' => 'CollectionContainer',
            'template' => 'j19CleanBlog',
            'hidemenu' => false,
            'show_in_tree' => true,
            'description' => 'Blog posts',
            'content' => '',
            'collection' => 'Blog Posts',
            'tvs' => [
                'j19CleanLimit' => 10,
                'j19CleanMastHead' => 'home-bg.jpg',
                'j19CleanSubheading' => 'A Blog Theme by Start Bootstrap'
            ]
        ],
        'contact' => [
            'pagetitle' => 'Contact',
            'menutitle' => 'Contact',
            'parent' => '',
            'menuindex' => 4,
            'class_key' => 'modDocument',
            'template' => 'j19CleanContact',
            'hidemenu' => false,
            'show_in_tree' => true,
            'description' => 'Contact blog...',
            'content' => '',
            'tvs' => [
                'j19CleanMastHead' => 'contact-bg.jpg',
                'j19CleanSubheading' => 'Have questions?'
            ]
        ],
    ];

    protected $snippets = [
        'j19CleanPaginator' => [
            'categories' => 'j19=>Clean',
            'description' => 'Paginates blog posts',
        ],
    ];

    /** @var array  */
    protected $templates = [
        'j19CleanBasic' => [
            'name' => 'j19CleanBasic',
            'categories' => 'j19=>Clean',
            'description' => 'Basic page',
            'tvs' => [
                'j19CleanMastHead' => 0,
                'j19CleanSubheading' => 0
            ]
        ],
        'j19CleanBlog' => [
            'name' => 'j19CleanBlog',
            'categories' => 'j19=>Clean',
            'description' => 'Blog collection',
            'tvs' => [
                'j19CleanLimit' => 3,
                'j19CleanMastHead' => 1,
                'j19CleanSubheading' => 2
            ]
        ],
        'j19CleanContact' => [
            'name' => 'j19CleanBlog',
            'categories' => 'j19=>Clean',
            'description' => 'Contact Form',
            'tvs' => [
                'j19CleanMastHead' => 0,
                'j19CleanSubheading' => 0
            ]
        ],
        'j19CleanPost' => [
            'name' => 'j19CleanPost',
            'categories' => 'j19=>Clean',
            'description' => 'A Blog Post',
            'tvs' => [
                'j19CleanMastHead' => 0,
                'j19CleanSubheading' => 0
            ]
        ],
    ];

    protected $modx_templates = [];

    protected $system_settings = [
        'j19Clean.twitter' => [
            'area' => 'Footer',
            'type' => 'textfield',
            'value' => ''
        ],
        'j19Clean.facebook' => [
            'area' => 'Footer',
            'type' => 'textfield',
            'value' => ''
        ],
        'j19Clean.github' => [
            'area' => 'Footer',
            'type' => 'textfield',
            'value' => ''
        ],
        'j19Clean.home'  => [
            'area' => 'Navigation',
            'type' => 'numberfield',
            'value' => 0,
            'alias' => 'index'
        ],
        'j19Clean.about'  => [
            'area' => 'Navigation',
            'type' => 'numberfield',
            'value' => 0,
            'alias' => 'about'
        ],
        'j19Clean.blog'  => [
            'area' => 'Navigation',
            'type' => 'numberfield',
            'value' => 0,
            'alias' => 'blog'
        ],
        'j19Clean.contact' => [
            'area' => 'Navigation',
            'type' => 'numberfield',
            'value' => 0,
            'alias' => 'contact'
        ]
    ];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this
            ->addCollectionPackage()
            ->addTaggerPackage();

        // The order of the method calls is important, do not change
        $this
            ->blendChunks()
            ->blendMediaSources()
            ->blendSnippets()
            ->blendTemplateVariables()
            ->blendTemplates()
            ->blendCollections()
            ->blendTagger()
            ->blendResources()
            ->blendSystemSettings();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this
            ->addCollectionPackage()
            ->addTaggerPackage();

        // The order of the method calls is important, do not change
        $this
            ->blendChunks('revert')
            ->blendMediaSources('revert')
            ->blendSnippets('revert')
            ->blendTemplateVariables('revert')
            ->blendTemplates('revert')
            ->blendCollections('revert')
            ->blendTagger('revert')
            ->blendResources('revert')
            ->blendSystemSettings('revert');
    }

    /**
     * @param string $method
     * @return $this
     */
    protected function blendChunks($method='blend')
    {
        // Install Chunks
        foreach ($this->chunks as $chunk_name => $details) {

            /** @var \LCI\Blend\Blendable\Chunk $myChunk */
            $myChunk = $this->blender->getBlendableLoader()->getBlendableChunk($chunk_name);

            $myChunk
                ->setSeedsDir($this->getSeedsDir())// This is needed to set the down() data
                ->setFieldDescription($details['description'])
                ->setFieldCategory($details['categories'])
                ->setAsStatic('joshua19/modx-clean-blog/src/elements/chunks/' . $chunk_name.'.tpl', 'orchestrator');

            if ($method == 'revert') {
                $this->revertBlendResponse($myChunk, $myChunk->getFieldName());
            } else {
                $this->blendResponse($myChunk, $myChunk->getFieldName());
            }
        }

        return $this;
    }

    /**
     * @param string $method
     * @return $this
     */
    protected function blendMediaSources(string $method='blend')
    {
        foreach ($this->mediaSources as $name => $details) {
            /** @var LCI\Blend\Blendable\MediaSource $mediaSource */
            $mediaSource = $this->blender->getBlendableLoader()->getBlendableMediaSource($name);

            $mediaSource->setSeedsDir($this->getSeedsDir());

            $mediaSource
                ->setFieldDescription($details['description'])
                //->setPropertyBasePathRelative(true) default is true, don't need to set
                ->setPropertyBasePath($details['path'])
                //->setPropertyBaseUrlRelative(true)
                ->setPropertyBaseUrl($details['path'])
                ->setPropertyAllowedFileTypes($details['allowedFileTypes']);

            if ($method == 'revert') {
                $this->revertBlendResponse($mediaSource, $mediaSource->getFieldName());
            } else {
                $this->blendResponse($mediaSource, $mediaSource->getFieldName());

                // create directory if it does not exist:
                if (!file_exists(MODX_PATH . ltrim($details['path'], '/'))) {
                    mkdir(MODX_PATH . ltrim($details['path'], '/'), 0644, true);
                }
            }
        }

        return $this;
    }

    /**
     * @return $this
     */
    protected function addCollectionPackage()
    {
        $corePath = $this->modx->getOption('collections.core_path', null, $this->modx->getOption('core_path', null, MODX_CORE_PATH) . 'components/collections/');
        $this->modx->addPackage('collections', $corePath . 'model/');

        return $this;
    }

    /**
     * @return $this
     */
    protected function addTaggerPackage()
    {
        $corePath = $this->modx->getOption('tagger.core_path', null, $this->modx->getOption('core_path', null, MODX_CORE_PATH) . 'components/tagger/');
        $this->modx->addPackage('tagger', $corePath . 'model/');

        return $this;
    }

    /**
     * @param string $method
     * @return $this
     */
    protected function blendCollections($method='blend')
    {
        foreach ($this->collections as $collection_name => $column_data) {
            /** @var \CollectionTemplate $collectionTemplate */
            $collectionTemplate = $this->modx->getObject('CollectionTemplate', ['name' => $collection_name]);
            if (!is_object($collectionTemplate)) {
                if ($method == 'revert') {
                    continue;
                }
                $collectionTemplate = $this->modx->newObject('CollectionTemplate');
                $collectionTemplate->set('name', $collection_name);
            }

            if ($method == 'revert') {
                if ($collectionTemplate->remove()) {
                    $this->blender->out($collection_name . ' was removed correctly');

                } else {
                    //error
                    $this->blender->outError($collection_name . ' did not remove correctly ');
                }
            }

            // set the defaults:
            $collectionTemplate->fromArray($this->default_collection);

            $collectionTemplate->fromArray($column_data);

            $collectionTemplate->set('child_template', $this->getSupportTemplateID($column_data['child_template']));

            if ($collectionTemplate->save()) {
                // build the grid:
                $this->syncCollectionTemplateColumns($collectionTemplate);

                $this->blender->out($collection_name . ' was saved correctly');

            } else {
                //error
                $this->blender->outError($collection_name . ' did not save correctly ');
            }
        }

        return $this;
    }

    /**
     * @param \CollectionTemplate $collection
     */
    protected function syncCollectionTemplateColumns(\CollectionTemplate $collection)
    {
        $existing_columns = [];

        // get all existing columns:
        $columnCollection = $this->modx->getCollection('CollectionTemplateColumn', ['template' => $collection->get('id')]);

        foreach ($columnCollection as $column) {
            $existing_columns[$column->get('name')] = $column;
        }

        $collection_column_names = $this->collection_columns[$collection->get('name')];

        foreach ($collection_column_names as $name) {
            if (isset($existing_columns[$name])) {
                $columnObject = $existing_columns[$name];
            } else {
                $columnObject = $this->modx->newObject('CollectionTemplateColumn');
                $columnObject->set('name', $name);
            }

            $columnObject->fromArray($this->default_collection_columns[$name]);

            $columnObject->save();

            if (isset($existing_columns[$name])) {
                unset($existing_columns[$name]);
            }
        }

        foreach($existing_columns as $name => $columnObject) {
            $columnObject->remove();
        }

    }

    /**
     * @param string $method
     * @return $this
     */
    protected function blendTagger($method='blend')
    {
        foreach ($this->tagger as $group_name => $details) {
            /** @var \TaggerGroup $taggerGroup */
            $taggerGroup = $this->modx->getObject('TaggerGroup', ['name' => $group_name]);
            if (!is_object($taggerGroup)) {
                if ($method == 'revert') {
                    continue;
                }
                $taggerGroup = $this->modx->newObject('TaggerGroup');
                $taggerGroup->set('name', $group_name);
            }

            if ($method == 'revert') {
                if ($taggerGroup->remove()) {
                    $this->blender->out($group_name . ' was removed correctly');

                } else {
                    //error
                    $this->blender->outError($group_name . ' did not remove correctly ');
                }

            } else {

                foreach ($details as $field => $value) {
                    if ($field == 'tags') {
                        continue;
                    }

                    if ($field == 'attach_to_templates') {
                        $field = 'show_for_templates';
                        $value = $this->getTemplateIDsFromNames($value);
                    }

                    $taggerGroup->set($field, $value);
                }

                if ($taggerGroup->save()) {
                    // build the grid:
                    $this->syncTaggerTags($taggerGroup, $details['tags']);

                    $this->blender->out($group_name . ' was saved correctly');

                } else {
                    //error
                    $this->blender->outError($group_name . ' did not save correctly ');
                }
            }
        }

        return $this;
    }

    protected function syncTaggerTags(\TaggerGroup $taggerGroup, array $tags)
    {
        $existingTags = $this->modx->getCollection('TaggerTag', ['group' => $taggerGroup->get('id')]);

        foreach ($existingTags as $tag) {
            if (isset($tags[$tag->get('tag')])) {
                unset($tags[$tag->get('tag')]);

            } else {
                $tag->remove();
            }
        }

        foreach ($tags as $tag => $label) {
            $taggerTag = $this->modx->newObject('TaggerTag');
            $taggerTag->set('tag', $tag);
            $taggerTag->set('label', $label);
            $taggerTag->set('group', $taggerGroup->get('id'));

            $taggerTag->save();
        }
    }

    /**
     * @param string $method
     * @return $this
     */
    protected function blendSnippets($method='blend')
    {
        foreach ($this->snippets as $name => $data) {
            /** @var \LCI\Blend\Blendable\Snippet $mySnippet */
            $mySnippet = $this->blender->getBlendableLoader()->getBlendableSnippet($name);
            $mySnippet
                ->setSeedsDir($this->getSeedsDir())
                ->setFieldCategory($data['categories'])
                ->setFieldDescription($data['description'])
                ->setAsStatic('joshua19/modx-clean-blog/src/elements/snippets/'.$name.'.php','orchestrator');

            if ($method == 'revert') {
                $this->revertBlendResponse($mySnippet, $mySnippet->getFieldName());
            } else {
                $this->blendResponse($mySnippet, $mySnippet->getFieldName());
            }
        }

        return $this;
    }

    /**
     * @param string $method
     * @return $this
     */
    protected function blendTemplateVariables($method='blend')
    {
        $limitTV = $this->blender->getBlendableLoader()->getBlendableTemplateVariable('j19CleanLimit');
        $limitTV
            ->setSeedsDir($this->getSeedsDir())
            ->setFieldCategory('j19=>Clean=>Blog')
            ->setFieldCaption('Limit')
            ->setFieldDescription('How many posts to show')
            ->setFieldType('number')
            ->setFieldRank(1);

        if ($method == 'revert') {
            $this->revertBlendResponse($limitTV, $limitTV->getFieldName());
        } else {
            $this->blendResponse($limitTV, $limitTV->getFieldName());
        }

        $mastHeadTV = $this->blender->getBlendableLoader()->getBlendableTemplateVariable('j19CleanMastHead');
        $mastHeadTV
            ->setSeedsDir($this->getSeedsDir())
            ->setFieldCategory('j19=>Clean=>Page')
            ->setFieldCaption('Masthead Image')
            ->setFieldDescription('1900px wide')
            ->setFieldType('image')
            ->setMediaSource('Uploads')
            ->setFieldOutputProperties('text')
            ->setFieldRank(1);

        if ($method == 'revert') {
            $this->revertBlendResponse($mastHeadTV, $mastHeadTV->getFieldName());
        } else {
            $this->blendResponse($mastHeadTV, $mastHeadTV->getFieldName());
        }

        $subHeadingTV = $this->blender->getBlendableLoader()->getBlendableTemplateVariable('j19CleanSubheading');
        $subHeadingTV
            ->setSeedsDir($this->getSeedsDir())
            ->setFieldCaption('Sub heading')
            ->setFieldCategory('j19=>Clean=>Page')
            ->setFieldDescription('Placed directly below the main heading')
            ->setFieldRank(2);

        if ($method == 'revert') {
            $this->revertBlendResponse($subHeadingTV, $subHeadingTV->getFieldName());
        } else {
            $this->blendResponse($subHeadingTV, $subHeadingTV->getFieldName());
        }

        return $this;
    }

    /**
     * @param string $method
     * @return $this
     */
    protected function blendTemplates($method='blend')
    {
        foreach ($this->templates as $file_name => $data) {
            /** @var \LCI\Blend\Blendable\Template $myTemplate */
            $myTemplate = $this->blender->getBlendableLoader()->getBlendableTemplate($data['name']);
            $myTemplate
                ->setSeedsDir($this->getSeedsDir())
                ->setFieldCategory($data['categories'])
                ->setFieldDescription($data['description'])
                ->setAsStatic('joshua19/modx-clean-blog/src/elements/templates/'.$file_name.'.tpl','orchestrator');

            if (isset($data['tvs']) && is_array($data['tvs'])) {
                foreach ($data['tvs'] as $tvName => $rank) {
                    $myTemplate->attachTemplateVariable($tvName, $rank);
                }
            }

            if ($method == 'revert') {
                $this->revertBlendResponse($myTemplate, $myTemplate->getFieldName());
            } else {
                $this->blendResponse($myTemplate, $myTemplate->getFieldName());
            }
        }

        return $this;
    }

    /**
     * @param string $method
     * @return $this
     */
    protected function blendResources($method='blend')
    {
        foreach ($this->resources as $alias => $data) {
            /** @var \LCI\Blend\Blendable\Resource $myResource */
            $myResource = $this->blender->getBlendableLoader()->getBlendableResource($alias);
            $myResource->setSeedsDir($this->getSeedsDir());

            if ($method == 'revert') {
                $this->revertBlendResponse($myResource, $myResource->getFieldAlias());

            } else {
                $myResource
                    ->setFieldPagetitle($data['pagetitle'])
                    ->setFieldMenutitle($data['menutitle'])
                    ->setFieldParentFromAlias($data['parent'])
                    ->setFieldMenuindex($data['menuindex'])
                    ->setFieldPublished(true)
                    ->setFieldClassKey($data['class_key']) // CollectionContainer | modDocument
                    ->setFieldContextKey('web')
                    ->setFieldTemplate($data['template'])
                    ->setFieldHidemenu($data['hidemenu'])
                    ->setFieldShowInTree($data['show_in_tree'])
                    ->setFieldDescription($data['description']);

                // assign TVs
                if (isset($data['tvs']) && is_array($data['tvs'])) {
                    foreach ($data['tvs'] as $tv => $value) {
                        $myResource->setTVValue($tv, $value);
                    }
                }

                $this->blendResponse($myResource, $myResource->getFieldAlias());

                if (isset($data['collection'])) {
                    $this->assignCollectionTemplate($myResource->getXPDOSimpleObject()->get('id'), $data['collection']);
                }
            }
        }

        return $this;
    }

    /**
     * @param int $resource_id
     * @param string $collection_name
     */
    protected function assignCollectionTemplate($resource_id, $collection_name)
    {
        /** @var \CollectionTemplate $collectionTemplate */
        $collectionTemplate = $this->modx->getObject('CollectionTemplate', ['name' => $collection_name]);

        if (is_object($collectionTemplate)) {
            $collectionSetting = $this->modx->getObject('CollectionSetting', array('collection' => $resource_id));

            if (!is_object($collectionSetting)) {
                $collectionSetting = $this->modx->newObject('CollectionSetting');
                $collectionSetting->set('collection', $resource_id);
            }

            $collectionSetting->set('template', $collectionTemplate->get('id'));

            $collectionSetting->save();
        }
    }

    /**
     * @param $name
     * @return mixed
     */
    protected function getSupportTemplateID($name)
    {
        if (!isset($this->modx_templates[$name])) {
            $this->modx_templates[$name] = 0;
            $template = $this->modx->getObject('modTemplate', ['templatename' => $name]);

            if ($template) {
                $this->modx_templates[$name] = $template->get('id');
            }
        }

        return $this->modx_templates[$name];
    }
    /**
     * @param string $method
     */
    protected function blendSystemSettings(string $method='blend')
    {
        // Namespace to attach system settings
        $blogNamespace = $this->modx->getObject('modNamespace', 'j19Clean');
        if ($method == 'revert') {
            if (is_object($blogNamespace)) {
                $blogNamespace->remove();
            }
        } else {
            if (!$blogNamespace) {
                /** @var \modNamespace $blogNamespace */
                $blogNamespace = $this->modx->newObject('modNamespace');
                $blogNamespace->set('name', 'j19Clean');
                $blogNamespace->set('path', '{core_path}vendor/joshua19/modx-clean-blog/src/');
                $blogNamespace->set('assets_path', '{assets_path}components/joshua19/modx-clean-blog/');

                if ($blogNamespace->save()) {
                    $this->blender->outSuccess('The modNamespace j19Clean has been created');
                } else {
                    $this->blender->out('The modNamespace j19Clean was not created', true);
                }
            }
        }

        foreach ($this->system_settings as $setting => $details) {
            /** @var LCI\Blend\Blendable\SystemSetting $mySystemSetting */
            $mySystemSetting = $this->blender->getBlendableLoader()->getBlendableSystemSetting($setting);

            $mySystemSetting->setSeedsDir($this->getSeedsDir());

            if ($method == 'revert') {
                $this->revertBlendResponse($mySystemSetting, $mySystemSetting->getFieldName());

            } else {
                if (isset($details['alias']) && !empty($details['alias'])) {
                    $details['value'] = $this->blender->getResourceIDFromLocalAlias($details['alias']);
                }

                $mySystemSetting
                    ->setFieldNamespace('j19Clean')
                    ->setFieldArea($details['area'])
                    ->setFieldValue($details['value'])
                    ->setFieldXType($details['type']);

                $this->blendResponse($mySystemSetting, $mySystemSetting->getFieldName());
            }
        }
    }

    /**
     * @param array $names
     * @return string
     */
    protected function getTemplateIDsFromNames(array $names)
    {
        $ids = [];
        $templates = $this->modx->getCollection('modTemplate', ['templatename:IN' => $names]);
        foreach ($templates as $template) {
            $ids[] = $template->get('id');
        }

        return implode(',', $ids);
    }

    /**
     * @param \LCI\Blend\Blendable\Blendable $blendableObject
     * @param $name
     */
    protected function blendResponse(\LCI\Blend\Blendable\Blendable $blendableObject, $name)
    {
        if ($blendableObject->blend(true)) {
            $this->blender->out($name . ' was saved correctly');

        } else {
            //error
            $this->blender->outError($name . ' did not save correctly ');
            $this->blender->outError(print_r($blendableObject->getErrorMessages(), true), \LCI\Blend\Blender::VERBOSITY_DEBUG);
        }
    }

    /**
     * @param \LCI\Blend\Blendable\Blendable $blendableObject
     * @param $name
     */
    protected function revertBlendResponse(\LCI\Blend\Blendable\Blendable $blendableObject, $name)
    {
        if ($blendableObject->revertBlend()) {
            $this->blender->out($name . ' was reverted correctly');

        } else {
            //error
            $this->blender->outError($name . ' did not revert correctly ');
            $this->blender->outError(print_r($blendableObject->getErrorMessages(), true), \LCI\Blend\Blender::VERBOSITY_DEBUG);
        }
    }

    /**
     * Method is called on construct, please fill me in
     */
    protected function assignDescription()
    {
        $this->description = 'All MODX elements and resources to create a Blog website.';
    }

    /**
     * Method is called on construct, please fill me in
     */
    protected function assignVersion()
    {

    }

    /**
     * Method is called on construct, can change to only run this migration for those types
     */
    protected function assignType()
    {
        $this->type = 'master';
    }

    /**
     * Method is called on construct, Child class can override and implement this
     */
    protected function assignSeedsDir()
    {
        $this->seeds_dir = 'InstallCleanBlog';
    }
}